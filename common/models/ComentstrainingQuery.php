<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Comentstraining]].
 *
 * @see Comentstraining
 */
class ComentstrainingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Comentstraining[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Comentstraining|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
