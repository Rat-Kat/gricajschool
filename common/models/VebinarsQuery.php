<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Vebinars]].
 *
 * @see Vebinars
 */
class VebinarsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Vebinars[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Vebinars|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
