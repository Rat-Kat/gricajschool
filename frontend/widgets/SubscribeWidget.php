<?php
namespace frontend\widgets;


use common\models\Subscribe;
use yii\bootstrap\Widget;
use yii\web\Response;
use yii\widgets\ActiveForm;

class SubscribeWidget extends Widget
{
    public function run()
    {
       $model= new Subscribe();

        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

        }

        if($model->load(\Yii::$app->request->post()) && $model->save())
        {
            \Yii::$app->session->setFlash('message', 'Вы успешно подписаны на нашу рассылку');
            
           //\Yii::$app -> controller -> redirect ("/");


        }


        return $this->render('subscribe', ['model'=>$model]);
    }
}