<?php

namespace app\Controller;


abstract class AbstractController
{
    /**
     * @param $templateName
     * @param array $params
     */
    //TODO: проверить, есть ли шаблон
    protected function renderView($templateName, array $params) {
        extract($params);
//        var_dump(__DIR__); exit;
        require sprintf('%s\..\View\%s.html.php', __DIR__, $templateName);
    }

}