<?php 

abstract class FEActiveRecord extends CActiveRecord
{
	protected function beforeValidate() {
		if($this->isNewRecord)
		{
			$this->create_time = $this->update_time = new CDbExpression('NOW()');
			$this->author_id = $this->update_author_id = Yii::app()->user->id;
		}
		else
		{
			$this->update_time = new CDbExpression('NOW()');
			$this->update_author_id = Yii::app()->user->id;
		}

		return parent::beforeValidate();
	}
}

 ?>