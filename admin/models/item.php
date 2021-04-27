<?php

defined('_JEXEC') or exit();

class NewsModelItem extends JModelAdmin
{
    public function getForm($data=[], $loadData = true)
    {
        $form = $this->loadForm(
            'com_news.item',
            'item',
            [
                'control' => 'jform',
                'load_data' => $loadData,
            ]
        );
        if (empty($form)) {
            return false;
        }
        return $form;

    }

    public function getTable($type='Item', $prefix='NewsTable', $config = []){
        return JTable::getInstance($type, $prefix, $config);
    }

    protected function prepareTable()
    {

    }

    public function getItem()
    {
        return true;
    }
}