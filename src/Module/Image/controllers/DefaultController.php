<?php

namespace ItForFree\YiiImageResizeOnTheFly\Module\Image\controllers;

use Yii;
use yii\web\Controller;
use ItForFree\rusphp\File\Image\ImageResizer;
use ItForFree\YiiImageResizeOnTheFly\Module\Image\Image;


/**
 * Default controller for the `image` module
 */
class DefaultController extends Controller
{

    public function actionIndex($path, $format)
    {
        ImageResizer::showInFormat(Yii::getAlias(Image::getInstance()->baseUploadPath). '/' . $path, $format);
    }
}
