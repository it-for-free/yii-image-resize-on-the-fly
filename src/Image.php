<?php

namespace ItForFree\YiiImageResizeOnTheFly;

/**
 * image module definition class
 */
class Image extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'ItForFree\YiiImageResizeOnTheFly\controllers';


    public $baseUploadPath = '@uploadPathAlias';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
