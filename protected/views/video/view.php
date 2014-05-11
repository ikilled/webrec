<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Videos', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Update Video', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>

<h1>View Video #<?php echo $model->id; ?></h1>

<script src='https://cameratag.com/2.1/cameratag.js' type='text/javascript'></script>
<video id='MyPlayer1' width="320" height="240" data-uuid='<?php echo $model->uuid; ?>'></video>

<p>
<?php echo CHtml::linkButton('Delete this video', array(
	'submit'=>array(
		'delete','id'=>$model->id
		),
		'confirm'=>'Are you sure you want to delete this video?'
	)
); ?>
</p>

<h2>Details:</h2>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uuid',
		'thumb_url',
		'small_thumb_url',
		'video_url',
		'timestamp',
	),
)); ?>
