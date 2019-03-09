<?php
namespace app\models;

use yii\web\UploadedFile;
use app\helpers\PathHelper;
use app\models\Logo;


class LogoUploadForm extends \yii\base\Model
{

  public $logoFile;
  public $desc;

  /**
   * 已上传文件的保存地址，相对于 @webroot
   *
   * @var string
   */
  public $uploadPath;

  public function formName()
  {
    return '';
  }

  public function rules()
  {
    return [
      [['logoFile'], 'required'],
      [['logoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png', 'checkExtensionByMimeType' => false],
      [['desc'], 'string', 'max' => 256],
    ];
  }

  public function attributeLabels()
  {
    return [
      'logoFile' => '图标文件',
      'desc' => '描述信息（选填）',
    ];
  }


  /**
   * 上传处理入口
   *
   * @return boolean
   */
  public function save()
  {
    $this->logoFile = UploadedFile::getInstance($this, 'logoFile');
    if ($this->validate()) {
      $basePath = PathHelper::webroot();

      $prefix = uniqid("logo_");
      $relativePath = PathHelper::uploadPath() . '/' . $prefix . '.' . $this->logoFile->extension;
      $this->logoFile->saveAs($basePath . $relativePath);
      $this->uploadPath = $relativePath;

      $model = new Logo();
      $model->url = $relativePath;
      $model->desc = $this->desc;
      $model->save();

      return true;
    }

    return false;
  }
}

?>