<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Videos', 'url'=>array('index')),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>

<h1>Record a new video</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

