<?php
/* @var $this AttachmentController */
/* @var $data Attachment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachment_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attachment_id), array('view', 'id'=>$data->attachment_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metadata')); ?>:</b>
	<?php echo CHtml::encode($data->metadata); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filetype')); ?>:</b>
	<?php echo CHtml::encode($data->filetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />


</div>