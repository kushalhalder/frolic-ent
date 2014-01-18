<?php
/* @var $this HomepageController */
/* @var $model Homepage */

$this->breadcrumbs=array(
	'Homepages'=>array('index'),
	$model->title=>array('view','id'=>$model->type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Homepage', 'url'=>array('index')),
	array('label'=>'Create Homepage', 'url'=>array('create')),
	array('label'=>'View Homepage', 'url'=>array('view', 'id'=>$model->type_id)),
	array('label'=>'Manage Homepage', 'url'=>array('admin')),
);
?>

<h1>Update Homepage <?php echo $model->type_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>