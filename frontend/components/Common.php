<?php

namespace frontend\components;

use yii\base\Component;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($text, $emailFrom='kratush@bigmir.net', $nameFrom='Katrin'){
        if(\Yii::$app->mail->compose()
            ->setFrom(['kratush1012@yandex.ru' => 'Advert'])
            ->setTo([$emailFrom => $nameFrom])
            ->setHtmlBody($text)
            ->send()){

            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }

    }

    public function notifyAdmin($event)
    {

        print "Notify Admin";
    }

    public static function getUrlNews($row){

        return Url::to(['/main/main/new', 'id' => $row['id']]);
    }
    public static function getUrlArticle($row){

        return Url::to(['/main/main/article', 'id' => $row['id']]);
    }
    public static function getUrlTraining($row){

        return Url::to(['/main/main/training', 'id' => $row['id']]);
    }
    public static function getUrlVebinar($row){

        return Url::to(['/main/main/vebinar', 'id' => $row['id']]);
    }

    public static function getUrlPsycholog($row){

        return Url::to(['/main/main/psycholog', 'id' => $row['id']]);
    }

    public static function getImageArticles($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/articles/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImageNews($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/news/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImagePsychologists($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/psychologists/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImageTrainings($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/trainings/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImageVebinars($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/vebinars/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImageComentstraining($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/comentstraining/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }
    public static function getImageComentsvebinar($data,$general = true,$original = false){

        $image = [];
        $base = '/';

        $image[] = $base.'uploads/comentsvebinar/'.$data['id'].'/'.$data['general_image'];

        return $image;
    }

    public static function getImagesMultimedia($data,$general = true,$original = false){

        $image = [];
        $path = \Yii::getAlias("@frontend/web/uploads/multimedia/".$data['id']);
        $files = BaseFileHelper::findFiles($path);
        foreach($files as $file){
            $image[] = '@frontend/web/uploads/multimedia/' . $data['id'] . '/' . basename($file);
        }
        return $image;
    }



}