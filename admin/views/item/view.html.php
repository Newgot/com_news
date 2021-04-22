<?php

defined('_JEXEC') or exit();

class NewsViewItem extends JViewLegacy
{
    protected $form;

    public function display($tpl = '')
    {
        $this->form = $this->get('Form'); //getForm
        $this->item = $this->get('Item'); //getItem

        $this->addToolBar();
        parent::display();
        $this->setDocument();
    }

    protected function addToolBar()
    {
        JToolBarHelper::title(JText::_('COM_NEWS_MANAGER_ITEM_ADD'));

        JToolBarHelper::save('item.save');
        JToolBarHelper::cancel('item.cancel');

    }

    protected function setDocument()
    {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_NEWS_ADMINISTRATION'));

    }
}