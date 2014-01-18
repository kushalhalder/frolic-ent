<?php

/**
 * This is the model class for table "tbl_post".
 *
 * The followings are the available columns in table 'tbl_post':
 * @property string $post_id
 * @property string $title
 * @property string $content
 * @property string $excerpt
 * @property string $thumbnail_id
 * @property string $attachment_id
 * @property string $category_id
 * @property string $tags
 * @property string $views
 * @property string $author_id
 * @property string $update_author_id
 * @property string $create_time
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Attachment $attachment
 * @property User $author
 * @property Category $category
 * @property Attachment $thumbnail
 * @property User $updateAuthor
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, excerpt, thumbnail_id, attachment_id, category_id, tags, author_id, create_time', 'required'),
			array('title', 'length', 'max'=>200),
			array('thumbnail_id, attachment_id, category_id, views, author_id, update_author_id', 'length', 'max'=>20),
			array('update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('post_id, title, content, excerpt, thumbnail_id, attachment_id, category_id, tags, views, author_id, update_author_id, create_time, update_time', 'safe', 'on'=>'search'),
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
			'attachment' => array(self::BELONGS_TO, 'Attachment', 'attachment_id'),
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'thumbnail' => array(self::BELONGS_TO, 'Attachment', 'thumbnail_id'),
			'updateAuthor' => array(self::BELONGS_TO, 'User', 'update_author_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'post_id' => 'Post',
			'title' => 'Title',
			'content' => 'Content',
			'excerpt' => 'Excerpt',
			'thumbnail_id' => 'Thumbnail',
			'attachment_id' => 'Attachment',
			'category_id' => 'Category',
			'tags' => 'Tags',
			'views' => 'Views',
			'author_id' => 'Author',
			'update_author_id' => 'Update Author',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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

		$criteria->compare('post_id',$this->post_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('excerpt',$this->excerpt,true);
		$criteria->compare('thumbnail_id',$this->thumbnail_id,true);
		$criteria->compare('attachment_id',$this->attachment_id,true);
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('views',$this->views,true);
		$criteria->compare('author_id',$this->author_id,true);
		$criteria->compare('update_author_id',$this->update_author_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
