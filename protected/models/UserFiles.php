<?php

/**
 * This is the model class for table "user_files".
 *
 * The followings are the available columns in table 'user_files':
 * @property integer $id
 * @property integer $user_id
 * @property string $file_name
 * @property string $file_content
 * @property string $file_description
 * @property string $created_date
 * @property string $modified_date
 * @property integer $file_status
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class UserFiles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserFiles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('user_id, file_status', 'numerical', 'integerOnly'=>true),
			array('file_name, file_description', 'length', 'max'=>200),
			array('file_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, file_name, file_content, file_description, created_date, modified_date, file_status', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'file_name' => 'File Name',
			'file_content' => 'File Content',
			'file_description' => 'File Description',
			'created_date' => 'Created Date',
			'modified_date' => 'Modified Date',
			'file_status' => 'File Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('file_content',$this->file_content,true);
		$criteria->compare('file_description',$this->file_description,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('file_status',$this->file_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}