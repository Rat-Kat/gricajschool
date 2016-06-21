<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Trainings]].
 *
 * @see Trainings
 */
class TrainingsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Trainings[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Trainings|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
