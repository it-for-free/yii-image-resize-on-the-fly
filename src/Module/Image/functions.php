<?php

use yii\helpers\Html;

if (!function_exists('imgrsc')) {

    /**
     * Метод обёртка над img с возможностью обрезки фото на лету
     * @param $src путь к изображению
     * @param $format формат обрезки изображения
     * @param null $options
     * @return img
     */
    function imgrsc($src, $format, $options = array())
    {
        return Html::img('/image?path=' . $src . '&format=' . $format, $options);
    }

}
