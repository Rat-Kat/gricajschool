<?php

namespace app\modules\main\controllers;

use common\models\News;
use frontend\components\common;
use frontend\models\MainForm;
use yii\data\Pagination;
use yii\web\Controller;
use yii\db\Query;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{

    public $layout = 'main_layout';

    public function actionIndex()
    {
        $query = News::find()->orderBy('created_at DESC');

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->setPageSize(5);
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'model' => $model,
            'pages' => $pages,
        ]);
    }
}
