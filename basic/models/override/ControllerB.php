<?php


namespace app\models\override;


use yii\web\Controller;

class ControllerB extends Controller
{
    public function beforeAction($action)
    {
        \Yii::debug('dsfjkj');
        if (parent::beforeAction($action)) {
            \Yii::debug($this->id);
            \Yii::debug($this->action->id);
            if (
                ($this->id == 'task' && $this->action->id == 'index') ||
                ($this->id == 'site' && $this->action->id == 'login') ||
                ($this->id == 'task' && $this->action->id == 'create') ||
                ($this->id == 'task' && $this->action->id == 'update')
            ) {
                return true;
            }
            \Yii::debug('fjkfjgk');
            return $this->redirect('/task/index');
        } // TODO: Change the autogenerated stub

        \Yii::debug('jkjlk');
    }
}