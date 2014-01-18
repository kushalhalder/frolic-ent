<?php
/* @var $this GossipController */
/* @var $model Gossip */

$this->breadcrumbs=array(
	'Gossips'=>array('index'),
	$model->gossip_id,
);

$this->menu=array(
	array('label'=>'List Gossip', 'url'=>array('index')),
	array('label'=>'Create Gossip', 'url'=>array('create')),
	array('label'=>'Update Gossip', 'url'=>array('update', 'id'=>$model->gossip_id)),
	array('label'=>'Delete Gossip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gossip_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gossip', 'url'=>array('admin')),
);
?>

<h1>View Gossip #<?php echo $model->gossip_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gossip_id',
		'content',
		'tags',
		'author_id',
		'create_time',
		'update_time',
	),
)); ?>
