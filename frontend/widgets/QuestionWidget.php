<?php
namespace frontend\widgets;

use common\models\Questions;
use yii\bootstrap\Widget;
use yii\web\Response;
use yii\widgets\ActiveForm;

class QuestionWidget extends Widget
{
    public function run()
    {
        $model = new Questions();

        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

        }

        if($model->load(\Yii::$app->request->post()) && $model->save())
        {
            \Yii::$app -> controller -> redirect ("/pages/message");
            
        }


        return $this->render('question', ['model'=>$model]);
    }

}