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

<script src='//cameratag.com/2.1/cameratag.js' type='text/javascript'></script>
<script type='text/javascript'>
	CameraTag.observe('cam1', 'published', function(){
		cameraTagForm = document.getElementById(id);
		cameraTagForm.submit():
	}) //CameraTag.observe
</script>


<form id='cameraTagForm' action='' method='post'>
	<camera id='cam1' data-app-id='a-449347e0-b9da-0131-228e-1231390c0c78'></camera>
</form>	


<h1>List of all Videos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
