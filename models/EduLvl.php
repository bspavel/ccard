<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edu_lvl".
 *
 * @property integer $id
 * @property string $edu_lvls
 */
class EduLvl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edu_lvl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edu_lvls'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'edu_lvls' => 'Edu Lvls',
        ];
    }
}
