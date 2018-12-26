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
class InfiniteScrollMasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/masonry';
    
    public $js = [  
        // Configured conditionally (source/minified) during init()
        YII_DEBUG ? 'jquery.masonry.js' : 'jquery.masonry.min.js',
    ];
    
    public $depends = [
        yii\web\JqueryAsset::class,
    ];

}
