<?php

namespace ItForFree\YiiImageResizeOnTheFly\Module\Image;

/**
 * image module definition class
 */
class Image extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'ItForFree\YiiImageResizeOnTheFly\Module\Image\controllers';


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
