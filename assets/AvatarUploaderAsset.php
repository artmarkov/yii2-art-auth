<?php

namespace artsoft\auth\assets;

use yii\web\AssetBundle;

/**
 * AvatarUploaderAsset is an asset bundle for avatar upload widget.
 */
class AvatarUploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/artsoft/yii2-art-auth/assets';
    public $css = ['css/avatar-uploader.css'];
    public $js = ['js/avatar-uploader.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
