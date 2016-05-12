<?php
namespace temam\helpers;

use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{

    public static function submitButton($content, $options)
    {
        self::addCssClass($options, 'col-sm-offset-2 btn-space btn');
        return parent::submitButton($content, $options);
    }
    
    public static function a($text, $url = null, $options = [])
    {
        $url = ArrayHelper::merge(\Yii::$app->request->getQueryParams(), $url);        
        return parent::a($text, $url, $options);
    }
}
