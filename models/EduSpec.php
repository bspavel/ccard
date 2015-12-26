<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edu_spec".
 *
 * @property integer $id
 * @property string $edu_specs
 */
class EduSpec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edu_spec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edu_specs'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'edu_specs' => 'Edu Specs',
        ];
    }
}
