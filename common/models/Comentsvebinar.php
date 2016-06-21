<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comentsvebinar".
 *
 * @property integer $id
 * @property string $title_vebinar
 * @property string $general_image
 * @property string $name
 * @property string $text
 * @property string $created_at
 */
class Comentsvebinar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentsvebinar';
    }
    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['step2'] = ['general_image'];

        return $scenarios;
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_vebinar', 'name', 'text'], 'required'],
            [['text'], 'string'],
            [['created_at'], 'safe'],
            [['title_vebinar', 'general_image', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_vebinar' => 'Название вебинара',
            'general_image' => 'Фото',
            'name' => 'Имя и Фамилия',
            'text' => 'Сообщение',
            'created_at' => 'Дата создания',
        ];
    }
    public function getVebinars(){
        return $this->hasOne(Vebinars::className(),['title' => 'title_vebinar']);
    }

    public function afterSave($insert, $changedAttributes)
   {
       parent::afterSave($insert, $changedAttributes);// TODO: Change the autogenerated stub
       Yii::$app->locator->cache->set('id',$this->id);
   }

    /**
     * @inheritdoc
     * @return ComentsvebinarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComentsvebinarQuery(get_called_class());
    }
}