<?
use yii\helpers\Html;
use yii\bootstrap\Nav;

\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?=$this->title ?></title>

        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <?php $this->beginBody() ?>
<div class="social-header col-lg-1 text-right hidden-xs">
    <a href="https://www.facebook.com/%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0-%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B8-%D0%9A%D1%81%D0%B5%D0%BD%D0%B8%D0%B8-%D0%93%D1%80%D0%B8%D1%86%D0%B0%D0%B9-1406932536295487/?ref=bookmarks"  target="blank"><img src="/frontend/web/img/social-f.png" width="30px" height="30px"></a>
    <a href="https://vk.com/id60964168" target="blank"><img src="/frontend/web/img/social-vk.png" width="30px" height="30px"></a>
    <a href="https://plus.google.com/107701842894737195658/posts" target="blank"><img src="/frontend/web/img/social-g.png" width="30px" height="30px"></a>
    <a href="https://www.youtube.com/channel/UCOTWU3LIMubARhQjgzZq1Xw" target="blank"><img src="/frontend/web/img/social-yt.png" width="30px" height="30px"></a>
</div>

    <div class="container">
        <header class="top clearfix">

            <div id="lavander">
                <?= Html::img('@web/img/lavanda.png', ['class'=>'img-responsive', 'alt'=>'flower']); ?>
            </div>


            <div class="row clearfix" role="banner">
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs col-md-offset-1 col-sm-offset-1 padding-0">
                    <?= Html::img('@web/img/foto1.png', ['class'=>'img-responsive img-photo', 'alt'=>'photo Ksenii Gricaj']); ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-offset-2 col-xs-5 padding-0">
                    <?= Html::img('@web/img/logo_school.png', ['class'=>'img-responsive img-school', 'alt'=>'school Ksenii Gricaj']); ?>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-3 col-md-offset-1 col-xs-4 padding-0">
                    <?= Html::img('@web/img/logo.png', ['class'=>'img-responsive img-logo', 'alt'=>'logo']); ?>
                    
                </div>
            </div>


            <div class=" hidden-xs nav-header">
                <div class="line"></div>
                <?php
                \yii\bootstrap\NavBar::begin([

                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'nav nav-pills nav-justified',
                    ],
                ]);
                $menuItems = [
                    ['label' => 'Главная', 'url' => ['/main/default/index']],
                    ['label' => 'Тренинги', 'url' => ['/main/main/trainings']],
                    ['label' => 'Вебинары', 'url' => ['/main/main/vebinars']],
                    ['label' => 'Статьи', 'url' => ['/main/main/articles']],
                    ['label' => 'Наши психологи', 'url' => ['/main/main/psychologists']],
                    ['label' => 'Фото и видеo', 'url' => ['/main/main/page', 'view' => 'photo_video']],
                    
                ];

                echo Nav::widget([
                    'options' => ['class' => 'nav nav-pills nav-justified'],
                    'items' => $menuItems,
                ]);

                \yii\bootstrap\NavBar::end();
                ?>
                <div class="line"></div>
            </div>

            <div class="visible-xs nav-header">
                <div class="line"></div>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p>Меню</p>
                <div class="collapse" id="bs-navbar">
                    <div>
                        <?= \yii\widgets\Menu::widget([
                            'items'=>[
                                ['label' => 'Главная', 'url' => ['/main/default/index']],
                                ['label' => 'Тренинги', 'url' => ['/main/main/trainings']],
                                ['label' => 'Вебинары', 'url' => ['/main/main/vebinars']],
                                ['label' => 'Статьи', 'url' => ['/main/main/articles']],
                                ['label' => 'Наши психологи', 'url' => ['/main/main/psychologists']],
                                ['label' => 'Фото и видеo', 'url' => ['/main/main/page', 'view' => 'photo_video']],
                            ],
                            'options'=>[
                                'class' => 'nav nav-pills nav-justified',
                            ],

                        ]) ?>
                    </div>
                </div>
                <div class="line"></div>
            </div>


        </header>


        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 left-section hidden-xs">
            
            <?= \yii\widgets\Menu::widget([
                'items'=>[
                    ['label' => 'Новости', 'url' => ['/admin/news/index']],
                    ['label' => 'Психологи', 'url' => ['/admin/psychologists/index']],
                    ['label' => 'Тренинги', 'url' => ['/admin/trainings/index']],
                    ['label' => 'Вебинары', 'url' => ['/admin/vebinars/index']],
                    ['label' => 'Заявки', 'url' => ['/admin/aplications/index']],
                    ['label' => 'Статьи', 'url' => ['/admin/articles/index']],
                    ['label' => 'Актуальные', 'url' => ['/admin/actual/index']],
                    ['label' => 'Отзывы к тренингам', 'url' => ['/admin/comentstraining/index']],
                    ['label' => 'Отзывы к вебинарам', 'url' => ['/admin/comentsvebinar/index']],
                    ['label' => 'Цены', 'url' => ['/admin/price/index']],
                    ['label' => 'Вопросы', 'url' => ['/admin/questions/index']],
                    ['label' => 'Подписка на новости', 'url' => ['/admin/subscribe/index']],
                    ['label' => 'Пользователи', 'url' => ['/admin/user/index']],
                ],
                'options'=>[
                    'class' => 'nav nav-stacked aside',
                ],

            ]) ?>


            <div class="aside-img img-responsive  hidden-xs">
                <?= Html::img('@web/img/line.png', ['class'=>'aside-line', 'alt'=>'black line']); ?>
                <?= Html::img('@web/img/zvt.png', ['class'=>'aside-zvt', 'alt'=>'zvt']); ?>

            </div>
            <?php
            \yii\bootstrap\NavBar::begin([
                'options' => [
                    'class' => 'nav nav-stacked aside',
                ],
            ]);
            $menuItems = [
                ['label' => 'Изменить пароль', 'url' => ['/admin/default/change-password']],

            ];
            $menuItems[] = [
                    'label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            \yii\bootstrap\NavBar::end();
            ?>

        </div>

           

        <main class="col-lg-9 col-md-9 col-sm-8 col-xs-12 clearfix">
            <?= $content ?>
        </main>
            <div class="clearfix"></div>

        <footer>
            <div class="row">
                <div class="col-lg-5col-md-6 col-sm-5 col-xs-12">
                    <p class="footer">&copy; <?= date('Y') ?> Все права защищены<br>
                        Школа психологии Ксении Грицай. Мастерская взаимоотношений</p>
                </div>
                <?= Html::img('@web/img/lavanda_flower.png', ['class'=>'img-responsive col-lg-1 col-md-1 col-sm-1 col-xs-3 col-lg-offset-5 col-md-offset-3  col-xs-offset-5 footer-img', 'alt'=>'lavandas flower']); ?>
            </div>
        </footer>
    </div>

    <address class="myself col-lg-12">Разработка сайта - <a href="https://www.facebook.com/profile.php?id=100000763127873" target="_blank">Ратушняк Екатерина</a></address>

    <?php $this->endBody() ?>

    </body>

    </html>

<?php $this->endPage() ?>