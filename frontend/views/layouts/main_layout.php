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
    <meta name="description" content="Психология семейных взаимоотношений. Для родителей и их деток интересный и полезный контент о том, как решать семейные конфликты и проблемы, как предотвратить ссоры и непонимания в семье, как быть счастливыми и гармоничными. " />
    <meta name="keywords" content="школа психологии ксении грицай, ксения грицай, Киев, психолог Киев, семейный психолог, детский психолог, консультации психолога, психологическая помощь в Киеве, супружеские проблемы, воспитание детей, психология отношений, воспитание ребенка, семейная психология, психология отношений, психология детей, детская психология, практическая психология" />


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
    <a href="https://www.facebook.com/%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0-%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B8-%D0%9A%D1%81%D0%B5%D0%BD%D0%B8%D0%B8-%D0%93%D1%80%D0%B8%D1%86%D0%B0%D0%B9-1406932536295487/?ref=bookmarks"  target="blank"><img src="/frontend/web/img/social-f.png" alt="f"></a>
    <a href="https://vk.com/id60964168" target="blank"><img src="/frontend/web/img/social-vk.png" alt="vk"></a>
    <a href="https://plus.google.com/107701842894737195658/posts" target="blank"><img src="/frontend/web/img/social-g.png" alt="google+"></a>
    <a href="https://www.youtube.com/channel/UCOTWU3LIMubARhQjgzZq1Xw" target="blank"><img src="/frontend/web/img/social-yt.png" alt="youtube"></a>
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
                ['label' => 'Главная', 'url' => ['/']],
                ['label' => 'Наши психологи', 'url' => ['/main/main/psychologists']],
                ['label' => 'Дипломы и сертификаты', 'url' => ['/main/main/page', 'view' => 'diploms']],
                ['label' => 'Специальное предложение', 'url' => ['/main/main/page', 'view' => 'special']],
                ['label' => 'Контакты', 'url' => ['/main/main/page', 'view' => 'contacts']],
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
                            ['label' => 'Главная', 'url' => ['/']],
                            ['label' => 'Тренинги', 'url' => ['/main/main/trainings']],
                            ['label' => 'Вебинары', 'url' => ['/main/main/vebinars']],
                            ['label' => 'Семейный кабинет. Муж и жена', 'url' => ['/main/main/family']],
                            ['label' => 'Детский кабинет. Родители и дети', 'url' => ['/main/main/child']],
                            ['label' => 'Кабинет личной терапии', 'url' => ['/main/main/individual']],
                            ['label' => 'Статьи', 'url' => ['/main/main/articles']],
                            ['label' => 'Фото и видеo', 'url' => ['/main/main/page', 'view' => 'multimedia']],
                            ['label' => 'Наши психологи', 'url' => ['/main/main/psychologists']],
                            ['label' => 'Дипломы и сертификаты', 'url' => ['/main/main/page', 'view' => 'diploms']],
                            ['label' => 'Специальное предложение', 'url' => ['/main/main/page', 'view' => 'special']],
                            ['label' => 'Контакты', 'url' => ['/main/main/page', 'view' => 'contacts']],
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
        <div class="cabinet">
            <div class="height-aside">
                <a class="nav nav-stacked" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Кабинеты для встреч</a></div>
            <div class="collapse " id="collapseExample">
                <div>
                    <?= \yii\widgets\Menu::widget([
                        'items'=>[
                            ['label' => 'Муж и жена', 'url' => ['/main/main/family']],
                            ['label' => 'Родители и дети', 'url' => ['/main/main/child']],
                            ['label' => 'Личная терпия', 'url' => ['/main/main/individual']],
                        ],
                        'options'=>[
                            'class' => 'nav nav-stacked aside aside-collapse',
                        ],

                    ]) ?>
                </div>
            </div>
        </div>

        <?= \yii\widgets\Menu::widget([
            'items'=>[
                ['label' => 'Тренинги', 'url' => ['/main/main/trainings']],
                ['label' => 'Вебинары', 'url' => ['/main/main/vebinars']],
                ['label' => 'Статьи', 'url' => ['/main/main/articles']],
                ['label' => 'Фото и видеo', 'url' => ['/main/main/page', 'view' => 'multimedia']],
            ],
            'options'=>[
                'class' => 'nav nav-stacked aside',
            ],

        ]) ?>


        <div class="aside-img img-responsive  hidden-xs">
            <?= Html::img('@web/img/line.png', ['class'=>'aside-line', 'alt'=>'black line']); ?>
            <?= Html::img('@web/img/zvt.png', ['class'=>'aside-zvt', 'alt'=>'zvt']); ?>

        </div>
        
   
        <?= \frontend\widgets\SubscribeWidget::widget() ?>
        <?= \frontend\widgets\QuestionWidget::widget() ?>
        <br>
        <div class="row social">
            <a href="https://www.facebook.com/%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0-%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B8-%D0%9A%D1%81%D0%B5%D0%BD%D0%B8%D0%B8-%D0%93%D1%80%D0%B8%D1%86%D0%B0%D0%B9-1406932536295487/?ref=bookmarks"  target="blank" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 " ><img src="/frontend/web/img/social-f.png" alt="f"></a>
            <a href="https://vk.com/id60964168" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-vk.png" alt="vk"></a>
            <a href="https://plus.google.com/107701842894737195658/posts" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-g.png" alt="google+"></a>
            <a href="https://www.youtube.com/channel/UCOTWU3LIMubARhQjgzZq1Xw" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-yt.png" alt="youtube"></a>
        </div>


        </div>


    <main class="col-lg-9 col-md-9 col-sm-8 col-xs-12 clearfix">


        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= \common\widgets\Alert::widget() ?>
        <?= $content ?>
    </main>

    <div class="clearfix"></div>
    
    <div class="visible-xs">
       
        <div class="row social">
            <a href="https://www.facebook.com/%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0-%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B8-%D0%9A%D1%81%D0%B5%D0%BD%D0%B8%D0%B8-%D0%93%D1%80%D0%B8%D1%86%D0%B0%D0%B9-1406932536295487/?ref=bookmarks"  target="blank" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 " ><img src="/frontend/web/img/social-f.png" alt="f"></a>
            <a href="https://vk.com/id60964168" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-vk.png" alt="vk"></a>
            <a href="https://plus.google.com/107701842894737195658/posts" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-g.png" alt="google+"></a>
            <a href="https://www.youtube.com/channel/UCOTWU3LIMubARhQjgzZq1Xw" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" target="blank"><img src="/frontend/web/img/social-yt.png" alt="youtube"></a>
        </div>
    </div>
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