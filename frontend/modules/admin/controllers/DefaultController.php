<?php

namespace app\modules\admin\controllers;

use common\controllers\AuthController;
use frontend\models\ChangePasswordForm;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AuthController
{
    public $layout = 'layout_admin';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionChangePassword(){

        $model = new ChangePasswordForm();

        if($model->load(\Yii::$app->request->post()) && $model->changepassword()){

            $this->refresh();

        }

        return $this->render('change-password',['model' => $model]);
    }
}
