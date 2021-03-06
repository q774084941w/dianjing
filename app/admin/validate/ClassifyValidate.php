<?php
// +----------------------------------------------------------------------
// | 83bid [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright © 2018-2028 AII Rights Reserved
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: 谢鑫磊 < 774084941@qq.com>
// +----------------------------------------------------------------------

namespace app\admin\validate;


use think\Validate;

class ClassifyValidate extends Validate
{
    protected $rule = [
        'name'       => 'require',
        'icon'       => 'require',
    ];

    protected $message = [
        'name.require'       => '名称不能为空',
        'icon.require'       => '图标不能为空',
    ];
}