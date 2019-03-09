<?php
namespace app\models;

use yii\web\UploadedFile;
use app\helpers\PathHelper;
use app\models\Logo;


class LogoUploadForm extends \yii\base\Model
{

  public $logoFile;
  public $desc;
  public $appName;
  public $testName;

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
      [['appName', 'testName'], 'string', 'max' => 32],
    ];
  }

  public function attributeLabels()
  {
    return [
      'logoFile' => '图标文件',
      'desc' => '描述信息（选填）',
      'appName' => '应用名字',
      'testName' => '测试名字',
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
      $model->appName = $this->appName;
      $model->testName = $this->testName;
      $model->save();

      return true;
    }

    return false;
  }
}

?>