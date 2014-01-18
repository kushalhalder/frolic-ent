<?php
/* @var $this HomepageController */
/* @var $model Homepage */

$this->breadcrumbs=array(
	'Homepages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Homepage', 'url'=>array('index')),
	array('label'=>'Manage Homepage', 'url'=>array('admin')),
);
?>

<h1>Create Homepage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>