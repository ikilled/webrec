<?php
/* @var $this VideoController */
/* @var $data Video */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uuid')); ?>:</b>
	<?php echo CHtml::encode($data->uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_url')); ?>:</b>
	<?php echo CHtml::encode($data->thumb_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small_thumb_url')); ?>:</b>
	<?php echo CHtml::encode($data->small_thumb_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_url')); ?>:</b>
	<?php echo CHtml::encode($data->video_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />


</div>