<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $dept_id
 * @property integer $job_id
 * @property integer $edu_lvl_id
 * @property integer $edu_spec_id
 * @property integer $listener_id
 * @property string $sot
 * @property string $published
 * @property string $postaddress
 * @property string $cellphone
 * @property string $homephone
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_id', 'job_id', 'edu_lvl_id', 'edu_spec_id', 'listener_id'], 'integer'],
            [['surname', 'name', 'patronymic', 'login', 'password', 'email'], 'string', 'max' => 50],
            [['sot', 'published'], 'string', 'max' => 1],
            [['postaddress'], 'string', 'max' => 250],
            [['cellphone', 'homephone'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Surname',
            'name' => 'Name',
            'patronymic' => 'Patronymic',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'dept_id' => 'Dept ID',
            'job_id' => 'Job ID',
            'edu_lvl_id' => 'Edu Lvl ID',
            'edu_spec_id' => 'Edu Spec ID',
            'listener_id' => 'Listener ID',
            'sot' => 'Sot',
            'published' => 'Published',
            'postaddress' => 'Postaddress',
            'cellphone' => 'Cellphone',
            'homephone' => 'Homephone',
        ];
    }
}
