<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $task_text
 * @property int|null $is_completed
 * @property int|null $is_edited
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'task_text'], 'required'],
            [['task_text'], 'string'],
            [['is_completed', 'is_edited'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 255],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'task_text' => 'Task Text',
            'is_completed' => 'Is Completed',
            'is_edited' => 'Is Edited By Admin',
        ];
    }
}
