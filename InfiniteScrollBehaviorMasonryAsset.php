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
class InfiniteScrollBehaviorMasonryAsset extends AssetBundle
{
    public $sourcePath = __DIR__ .  '/assets/js';
    
    public $js = [  
        'behaviors/masonry-isotope.js'
    ];
    
    public $depends = [
        InfiniteScrollMasonryAsset::class,
        InfiniteScrollAsset::class,
    ];

}
