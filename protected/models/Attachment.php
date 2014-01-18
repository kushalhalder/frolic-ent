<?php

/**
 * This is the model class for table "tbl_attachment".
 *
 * The followings are the available columns in table 'tbl_attachment':
 * @property string $attachment_id
 * @property string $metadata
 * @property string $filetype
 * @property string $author_id
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property User $author
 * @property Post[] $posts
 * @property Post[] $posts1
 */
class Attachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('metadata, filetype, author_id, create_time', 'required'),
			array('author_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attachment_id, metadata, filetype, author_id, create_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
			'posts' => array(self::HAS_MANY, 'Post', 'attachment_id'),
			'posts1' => array(self::HAS_MANY, 'Post', 'thumbnail_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'attachment_id' => 'Attachment',
			'metadata' => 'Metadata',
			'filetype' => 'Filetype',
			'author_id' => 'Author',
			'create_time' => 'Create Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('attachment_id',$this->attachment_id,true);
		$criteria->compare('metadata',$this->metadata,true);
		$criteria->compare('filetype',$this->filetype,true);
		$criteria->compare('author_id',$this->author_id,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
