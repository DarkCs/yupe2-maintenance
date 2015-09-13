<?php

namespace darkcs\maintenance;

use yupe\base\Plugin as BasePlugin;

class Plugin extends BasePlugin
{
    const VERSION = '1.0';

    public function getName()
    {
        return 'Техническое обслуживание';
    }

    public function getVersion()
    {
        return self::VERSION;
    }

    public function getDescription()
    {
        return 'Включает/выключает режим обслуживания на сайте';
    }

    public function getAuthor()
    {
        return 'darkcs2@gmail.com';
    }

    public function getSettings()
    {
        return [
            'general' => [
                'label' => 'Общие',
                'items' => [
                    'enabled' => [
                        'label' => 'Включено',
                        'type' => 'checkbox',
                    ],
                    'page-title' => [
                        'label' => 'Заголовок страницы',
                        'type' => 'textInput',
                        'default' => 'Сайт временно недоступен',
                    ],
                    'message-title' => [
                        'label' => 'Заголовок сообщения',
                        'type' => 'textInput',
                        'default' => 'На сайте ведутся работы',
                    ],
                    'message-body' => [
                        'label' => 'Сообщение',
                        'type' => 'textarea',
                        'default' => 'Попробуйте зайти попозже',
                    ],
                ]
            ]
        ];
    }
}
