<?php
/**
 * @link https://github.com/nirvana-msu/yii2-infinite-scroll
 * @copyright Copyright (c) 2014 Alexander Stepanov
 * @license MIT
 */

namespace nirvana\infinitescroll;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Alexander Stepanov <student_vmk@mail.ru>
 */
class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@bower/infinite-scroll/dist';
    
    public $css = [
    ];
    
    public $js = [  
        // Configured conditionally (source/minified) during init()
        YII_DEBUG ? 'infinite-scroll.pkgd.js' : 'infinite-scroll.pkgd.min.js',
    ];
    
    public $depends = [
        yii\web\JqueryAsset::class,
    ];

}
