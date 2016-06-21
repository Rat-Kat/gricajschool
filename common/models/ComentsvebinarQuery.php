<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Comentsvebinar]].
 *
 * @see Comentsvebinar
 */
class ComentsvebinarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Comentsvebinar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Comentsvebinar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
