<?php
/* @var $this GossipController */
/* @var $model Gossip */

$this->breadcrumbs=array(
	'Gossips'=>array('index'),
	$model->gossip_id=>array('view','id'=>$model->gossip_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gossip', 'url'=>array('index')),
	array('label'=>'Create Gossip', 'url'=>array('create')),
	array('label'=>'View Gossip', 'url'=>array('view', 'id'=>$model->gossip_id)),
	array('label'=>'Manage Gossip', 'url'=>array('admin')),
);
?>

<h1>Update Gossip <?php echo $model->gossip_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>