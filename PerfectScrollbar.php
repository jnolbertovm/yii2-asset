<?php

namespace nolbertovilchez\yii2\asset;

class PerfectScrollbar extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/perfect-scrollbar';

    /**
     * @inherit
     */
    public $css        = [
        'css/perfect-scrollbar.min.css',
    ];

    /**
     * @inherit
     */
    public $js         = [
        'js/perfect-scrollbar.jquery.js'
    ];

}
