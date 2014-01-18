<?php
/* @var $this GossipController */
/* @var $model Gossip */

$this->breadcrumbs=array(
	'Gossips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gossip', 'url'=>array('index')),
	array('label'=>'Manage Gossip', 'url'=>array('admin')),
);
?>

<h1>Create Gossip</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>