<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Actual]].
 *
 * @see Actual
 */
class ActualQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Actual[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Actual|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
