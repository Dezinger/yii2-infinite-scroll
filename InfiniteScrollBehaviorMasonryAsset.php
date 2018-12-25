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
    public $sourcePath = '@bower/jquery-infinite-scroll';
    
    public $js = [  
        'behaviors/masonry-isotope.js'
    ];
    
    public $depends = [
        InfiniteScrollAsset::class,
    ];

}
