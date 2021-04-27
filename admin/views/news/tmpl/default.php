<?php

defined('_JEXEC') or exit();

?>

<form action="index.php?option=com_news&view=news" method="POST" id="adminForm" name="adminForm">
    <table class="">
        <thead>
        <tr>
            <th width="1%"><?= JText::_('COM_NEWS_NUM') ?></th>
            <th width="2%"><?= JHtml::_('grid.checkall') ?></th>
            <th width="1%"><?= JText::_('COM_NEWS_ITEM_TITLE') ?></th>
            <th width="1%"><?= JText::_('COM_NEWS_ITEM_STATE') ?></th>
            <th width="1%"><?= JText::_('COM_NEWS_ITEM_ID') ?></th>
        </tr>
        </thead>
        <tbody>
        <? if (isset($this->items)) : ?>
            <? foreach ($this->items as $i => $item): ?>
                <? $link = 'index.php?option=com_news&task=item.edit&id=' . $item->id ?>
                <tr>
                    <td><?= $this->pagination->getRowOffset($i) ?></td>
                    <td><?= JHtml::_('grid.id', $i, $item->id) ?></td>
                    <td align="center"><a href="<?= $link ?>"><?= $item->title ?></a></td>
                    <td align="center"><?= JHtml::_('jgrid.published', $item->published, $i, 'news.', true); ?></a></td>
                    <td align="center"><?= $item->id ?></td>
                </tr>
            <? endforeach ?>
        <? endif ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5"></td>
        </tr>
        </tfoot>
    </table>
    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="boxchecked" value="0"/>
    <?= JHtml::_('form.token') ?>
</form>
