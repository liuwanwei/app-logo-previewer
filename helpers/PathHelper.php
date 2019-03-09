<?php
namespace app\helpers;

/**
 * 定义全局存储目录
 * 
 * 暂时未用
 */
class PathHelper{

  public static function webroot(){
    return \Yii::getAlias('@webroot');
  }

  public static function uploadPath($absolute = false){
    return '/uploads';
  }
}

?>