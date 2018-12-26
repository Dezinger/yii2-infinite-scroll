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
    public $sourcePath = '@bower/jquery-infinite-scroll';
    
    public $css = [
    ];
    
    public $js = [  
        // Configured conditionally (source/minified) during init()
        YII_DEBUG ? 'jquery.infinitescroll.js' : 'jquery.infinitescroll.min.js',
    ];
    
    public $depends = [
        yii\web\JqueryAsset::class,
    ];

    public function init()
    {
        parent::init();

        //@todo: not support minify?
        $this->publishOptions['beforeCopy'] = function ($from) {
            $path = str_replace(realpath(Yii::getAlias('@bower') . '\jquery-infinite-scroll'), '', $from);
            return
                $path !== DIRECTORY_SEPARATOR.'site'
                && $path !== DIRECTORY_SEPARATOR.'wordpress-plugin';
        };
    }
}
