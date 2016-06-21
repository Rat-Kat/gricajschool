<?php
namespace app\modules\main\controllers;

use common\models\Aplications;
use common\models\Articles;
use common\models\Comentstraining;
use common\models\LoginForm;
use common\models\Multimedia;
use common\models\News;
use common\models\Price;
use common\models\Psychologists;
use common\models\Trainings;
use common\models\Vebinars;
use frontend\models\Image;
use frontend\models\SignupForm;
use yii\data\Pagination;
use yii\web\Response;
use yii\widgets\ActiveForm;


class MainController extends \yii\web\Controller
{
    public $layout = "main_layout";

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'page' => [
                'class' => 'yii\web\ViewAction',
                'layout' => 'main_layout',
            ]
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionArticles()
    {
        $query = Articles::find()->orderBy('created_at DESC');

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages ->setPageSize(10);
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('articles', [
            'model' => $model,
            'pages' => $pages,
        ]);

    }


    public function actionTrainings()
    {

        $query = Trainings::find()->orderBy('created_at DESC');

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages ->setPageSize(5);
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('trainings', [
            'model' => $model,
            'pages' => $pages,
        ]);

    }

    public function actionVebinars()
    {
        $query = Vebinars::find()->orderBy('created_at DESC');

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages ->setPageSize(5);
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('vebinars', [
            'model' => $model,
            'pages' => $pages,
        ]);
    }

    public function actionPsychologists()
    {
        $query = Psychologists::find();

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages ->setPageSize(10);
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('psychologists', [
            'model' => $model,
            'pages' => $pages,
        ]);

    }
    
    public function actionPsycholog($id)
    {
        $model = Psychologists::findOne($id);

        return $this->render('psycholog', ['model'=>$model]);
    }

    public function actionTraining($id)
    {
        $model = Trainings::findOne($id);
        

        return $this->render('training', ['model'=>$model]);
    }

    public function actionVebinar($id)
    {
        $model = Vebinars::findOne($id);

        return $this->render('vebinar', ['model'=>$model]);
    }

    public function actionArticle($id)
    {
        $model = Articles::findOne($id);

        return $this->render('article', ['model'=>$model]);
    }

    public function actionNew($id)
    {
        $model = News::findOne($id);

        return $this->render('new', ['model'=>$model]);
    }

    public function actionChild()
    {
        $id = 1;
        $model = Price::findOne($id);


        return $this->render('child', ['model' => $model]);
    }

    public function actionFamily()
    {
        $id = 1;
        $model = Price::findOne($id);

        return $this->render('family', ['model' => $model]);
    }

    public function actionIndividual()
    {
        $id = 1;
        $model = Price::findOne($id);

        return $this->render('individual', ['model' => $model]);
    }

    public function actionAplications(){

        $model=new Aplications();

        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

        }
        if($model->load(\Yii::$app->request->post()) && $model->save())
        {
            \Yii::$app -> controller -> redirect ('/pages/success-message');

        }

        return $this->render('aplications',['model'=>$model]);
    }

    public function actionRegister(){

        $model = new SignupForm();

        if(\Yii::$app->request->isAjax && \Yii::$app->request->isPost){
            if($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        }

        if($model->load(\Yii::$app->request->post()) && $model->signup()){

            \Yii::$app->session->setFlash('success', 'Register Success');
        }

        return $this->render("register",['model' => $model]);
    }

    public function actionLogin(){
        $model = new LoginForm();

        if($model->load(\Yii::$app->request->post()) && $model->login()){

            $this->goBack();
        }

        return $this->render("login", ['model' => $model]);
    }

    public function actionLogout(){

        \Yii::$app->user->logout();
        return $this->goHome();
    }


}
