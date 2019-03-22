<?php

namespace artsoft\auth\assets;

use yii\web\AssetBundle;

/**
 * AuthAsset is an asset bundle for [[artsoft\auth\widgets\AuthChoice]] widget.
 */
class AuthAsset extends AssetBundle
{
    public $sourcePath = '@vendor/artsoft/yii2-art-auth/assets/source';
    public $css = [
        'authstyle.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
