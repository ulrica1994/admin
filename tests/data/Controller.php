<?php

namespace yii2tech\tests\unit\admin\data;

use yii2tech\admin\CrudController;

/**
 * Test controller class.
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 1.0
 */
class Controller extends CrudController
{
    public $actions = [];

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function render($view, $params = [])
    {
        return [
            'view' => $view,
            'params' => $params,
        ];
    }

    /**
     * @inheritdoc
     */
    public function redirect($url, $statusCode = 302)
    {
        return [
            'url' => $url,
            'statusCode' => $statusCode,
        ];
    }
}