<?php

namespace app\modules\admin\controllers;

use common\controllers\AuthController;
use Yii;
use common\models\News;
use common\models\search\NewsSearch;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends AuthController
{
    public $layout = 'layout_admin';
       /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionFileUploadGeneral(){

        if(Yii::$app->request->isPost){
            $id = Yii::$app->request->post("id");
            $path = Yii::getAlias("@frontend/web/uploads/news/".$id);
            BaseFileHelper::createDirectory($path);
            $model = News::findOne($id);
            $model->scenario = 'step2';

            $file = UploadedFile::getInstance($model,'general_image');
            $name = 'general.'.$file->extension;
            $file->saveAs($path .DIRECTORY_SEPARATOR .$name);

            $image  = $path .DIRECTORY_SEPARATOR .$name;

            $model -> general_image = $name;
            $model->save();

            Image::frame($image, 0, '666', 0)
                ->save($image, ['quality' => 100]);

            return true;

        }
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @param string $created_at
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['step2']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $created_at
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['step2']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $created_at
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionStep2(){
        $id = Yii::$app->locator->cache->get('id');

        $model = News::findOne($id);
        $image = [];
        if($general_image = $model->general_image){
            $image[] =  '<img src="/uploads/news/' . $model->id . $general_image . '" width=250>';
        }

        if(Yii::$app->request->isPost){
            $this->redirect(Url::to(['news/']));
        }

        return $this->render("step2",['model' => $model,'image' => $image]);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $created_at
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne(['id' => $id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
