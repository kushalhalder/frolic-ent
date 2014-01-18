<?php
/* @var $this HomepageController */
/* @var $model Homepage */

$this->breadcrumbs=array(
	'Homepages'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Homepage', 'url'=>array('index')),
	array('label'=>'Create Homepage', 'url'=>array('create')),
	array('label'=>'Update Homepage', 'url'=>array('update', 'id'=>$model->type_id)),
	array('label'=>'Delete Homepage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Homepage', 'url'=>array('admin')),
);
?>

<h1>View Homepage #<?php echo $model->type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type_id',
		'title',
		'description',
		'author_id',
		'create_time',
		'update_time',
	),
)); ?>
