<?php

namespace darkcs\maintenance\controllers;

use Yii;
use yupe\base\Controller;

class MaintenanceController extends Controller
{
    public function init()
    {
        $this->layout = '@darkcs/maintenance/views/layouts/main.php';
        parent::init();
    }

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            return false;
        }

        return $this->render(
            'index',
            [
                'pageTitle' => Yii::$app->settings->get('darkcs/yupe2-maintenance', 'page-title', 'Сайт временно недоступен'),
                'title' => Yii::$app->settings->get('darkcs/yupe2-maintenance', 'message-title', 'На сайте ведутся работы'),
                'message' => Yii::$app->settings->get('darkcs/yupe2-maintenance', 'message-body', 'Попробуйте зайти попозже.'),
            ]
        );
    }
}
