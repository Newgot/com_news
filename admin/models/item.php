<?php

defined('_JEXEC') or exit();

use Joomla\Registry\Registry;

class NewsModelItem extends JModelAdmin
{
    public function getForm($data = [], $loadData = true)
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

    public function getTable($type = 'Item', $prefix = 'NewsTable', $config = [])
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    protected function prepareTable($table)
    {
        if (isset($table->images) && is_array($table->images)) {
            $registry = new Registry;
            $registry->loadArray($table->images); // Перевод массива в JSON
            $table->images = (string)$registry;

        }
    }

    protected function loadFormData()
    {
        return $this->getItem();
    }

    public function getItem($pk = null)
    {
        $item = parent::getItem($pk);
        if (isset($item)) {
            $registry = new Registry;
            $registry->loadString($item->images); // Чтение JSON
            $item->images = $registry->toArray(); // JSON в поле images
            return $item;
        }
        return false;
    }
}