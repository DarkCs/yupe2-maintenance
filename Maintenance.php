<?php
namespace darkcs\maintenance;

use Yii;
use yii\base\Component;

class Maintenance extends Component
{
    public $statusCode = 503;

    public $except = ['debug/default/toolbar'];

    public function init()
    {
        if (Yii::$app->settings->get('darkcs/yupe2-maintenance', 'enabled', false)) {
            if (in_array(Yii::$app->request->getPathInfo(), $this->except)) {
                return;
            }
            Yii::$app->getResponse()->setStatusCode($this->statusCode);
            Yii::$app->catchAll = ['maintenance/maintenance/index'];
        }
    }
}
