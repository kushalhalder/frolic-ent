<?php
/* @var $this AttachmentController */
/* @var $model Attachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attachment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'metadata'); ?>
		<?php echo $form->textArea($model,'metadata',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metadata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filetype'); ?>
		<?php echo $form->textArea($model,'filetype',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'filetype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->