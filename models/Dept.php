<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dept".
 *
 * @property integer $id
 * @property string $depts
 */
class Dept extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dept';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['depts'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'depts' => 'Depts',
        ];
    }
}
