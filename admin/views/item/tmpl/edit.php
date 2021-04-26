<?php

defined('_JEXEC') or exit();

JHtml::_('formbehavior.chosen', 'select'); // JHtmlFormBehavior
JHtml::_('behavior.formvalidation'); // JHtmlBehavior
?>

<form action="index.php?option=com_news&view=news&layout=edit&id=<?= $this->item->id ?>" method="POST" id="adminForm"
      name="adminForm" class="form-validate">
    <div class="form-horizontal">
        <? foreach ($this->form->getFieldsets() as $name => $fieldset) : ?>
            <fieldset class="adminform">
                <legend><?= JText::_($fieldset->label) ?></legend>
                <div class="row-fluid">
                    <div class="span6">
                        <? foreach ($this->form->getFieldset($name) as $field) : ?>
                            <div class="control-group">
                                <div class="control-label">
                                    <?=$field->label?>
                                </div>
                                <div class="controls">
                                    <?=$field->input?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </fieldset>
        <? endforeach; ?>
    </div>
    <input type="hidden" name="task" value="">
    <?= JHtml::_('form.token') ?>
</form>
