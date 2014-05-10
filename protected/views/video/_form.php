<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uuid'); ?>
		<?php echo $form->textField($model,'uuid',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumb_url'); ?>
		<?php echo $form->textField($model,'thumb_url',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'thumb_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small_thumb_url'); ?>
		<?php echo $form->textField($model,'small_thumb_url',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'small_thumb_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_url'); ?>
		<?php echo $form->textField($model,'video_url',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'video_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->