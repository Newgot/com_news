<?php

defined('_JEXEC') or exit();

class NewsViewNews extends JViewLegacy
{

    public function display($tpl = '')
    {
        $this->addToolBar();
        parent::display();
        $this->setDocument();
    }

    protected function addToolBar()
    {
        JToolBarHelper::title(JText::_('COM_NEWS_MANAGER_NEWS'));

        JToolBarHelper::addNew('item.add');
        JToolBarHelper::editList('item.edit');
        JToolBarHelper::deleteList('', 'news.delete');

    }

    protected function setDocument()
    {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_NEWS_ADMINISTRATION'));
        echo '<pre>';
        var_dump($document);
        echo '</pre>';

    }
}