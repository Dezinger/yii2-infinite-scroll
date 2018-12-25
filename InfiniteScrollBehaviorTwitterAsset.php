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
class InfiniteScrollBehaviorTwitterAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-infinite-scroll';
    
    public $js = [  
        'behaviors/manual-trigger.js'
    ];
    
    public $depends = [
        InfiniteScrollAsset::class,
    ];

}
