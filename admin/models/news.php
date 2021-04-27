<?php

defined('_JEXEC') or exit();

class NewsModelNews extends JModelList
{

    protected function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('`id`, `title`, `alias`, `published`');
        $query->from('#__news');

        return $query;
    }
}
