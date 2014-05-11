<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<script src='http://cameratag.com/2.1/cameratag.js' type='text/javascript'></script>
<script type='text/javascript'>

	CameraTag.observe('cam1', 'published', function(){

		var myCamera = CameraTag.cameras["cam1"];
		var myVideo = myCamera.getVideo();

		document.getElementById('Video_uuid').value = myVideo.uuid;		
		document.getElementById('Video_video_url').value = myVideo.formats.qvga.video_url;
		document.getElementById('Video_thumb_url').value = myVideo.formats.qvga.thumb_url;
		document.getElementById('Video_small_thumb_url').value = myVideo.formats.qvga.small_thumb_url;
		document.getElementById('Video_timestamp').value = myVideo.created_at;

		//alert('submitting FORM...');
		document.getElementById("videoForm").submit();
		//alert('published SUBMITTED END');


	});	//CameraTag.observe if published
	
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'videoForm',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->hiddenField($model,'id'); ?>
		<?php echo $form->hiddenField($model,'uuid'); ?>
		<?php echo $form->hiddenField($model,'thumb_url'); ?>
		<?php echo $form->hiddenField($model,'small_thumb_url'); ?>
		<?php echo $form->hiddenField($model,'video_url'); ?>
		<?php echo $form->hiddenField($model,'timestamp'); ?>

	<div style='width:320px;height:240px;background:#eee;border:2px solid grey;'>
	<camera id='cam1' data-app-id='a-449347e0-b9da-0131-228e-1231390c0c78'></camera>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->