<?php
/* @var $this VideoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videos',
);

$this->menu=array(
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<h1>Record a new video</h1>


<h1>List of all Videos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
