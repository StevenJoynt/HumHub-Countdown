<?php

namespace sij\humhub\modules\countdown\models;

use Yii;

class ConfigureForm extends \yii\base\Model
{

    public $targetDate;
    public $title;
    public $sortOrder;

    public function rules()
    {
        return [
            [
                'title',
                'trim'
            ],[
                ['targetDate', 'title', 'sortOrder'],
                'required'
            ],[
                'targetDate',
                'date',
                'format' => 'php:d-m-Y'
            ],[
                'title',
                'string',
                'max' => 24
            ],[
                'sortOrder',
                'integer',
                'min' => 0,
                'max' => 9999
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'targetDate' => 'the date of the event',
            'title' => 'the title of the event',
            'sortOrder' => 'widget sort order',
        ];
    }

}
