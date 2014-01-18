<?php
/* @var $this HomepageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Homepages',
);

$this->menu=array(
	array('label'=>'Create Homepage', 'url'=>array('create')),
	array('label'=>'Manage Homepage', 'url'=>array('admin')),
);
?>

<h1>Homepages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
