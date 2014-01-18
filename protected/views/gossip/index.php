<?php
/* @var $this GossipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gossips',
);

$this->menu=array(
	array('label'=>'Create Gossip', 'url'=>array('create')),
	array('label'=>'Manage Gossip', 'url'=>array('admin')),
);
?>

<h1>Gossips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
