<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "murals".
 *
 * @property integer $id
 * @property string $name
 * @property string $owner
 * @property string $date
 */
class Mural extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'murals';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'owner', 'date'], 'required'],
            [['name', 'owner', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'owner' => 'Owner',
            'date' => 'Date',
        ];
    }
}
