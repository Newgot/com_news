<?php

defined('_JEXEC') or exit();

class NewsControllerNews extends JControllerAdmin
{
    public function getModel($name = 'item', $prefix = 'NewsModel', $config = [])
    {
        return parent::getModel($name, $prefix);
    }
}