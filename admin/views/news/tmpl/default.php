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

        </tbody>
        <tfoot>
        <tr>
            <td colspan="5"></td>
        </tr>
        </tfoot>
    </table>
    <input type="hidden" name="task" value=""/>
    <?= JHtml::_('form.token') ?>
</form>
