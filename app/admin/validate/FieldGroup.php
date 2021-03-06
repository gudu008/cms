<?php
/**
 * +----------------------------------------------------------------------
 * | 字段分组验证器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | DATETIME: 2020/07/10
 *             '::::::::::::'
 *                .::::::::::
 *           '::::::::::::::..
 *                ..::::::::::::.
 *              ``::::::::::::::::
 *               ::::``:::::::::'        .:::.
 *              ::::'   ':::::'       .::::::::.
 *            .::::'      ::::     .:::::::'::::.
 *           .:::'       :::::  .:::::::::' ':::::.
 *          .::'        :::::.:::::::::'      ':::::.
 *         .::'         ::::::::::::::'         ``::::.
 *     ...:::           ::::::::::::'              ``::.
 *   ```` ':.          ':::::::::'                  ::::..
 *                      '.:::::'                    ':'````..
 * +----------------------------------------------------------------------
 */
namespace app\admin\validate;

use think\Validate;

class FieldGroup extends Validate
{
    protected $rule = [
        'module_id|所属模块' => [
            'require' => 'require',
            'max' => '5',
        ],
        'group_name|分组名称' => [
            'require' => 'require',
        ],
        'status|状态' => [
            'require' => 'require',
        ],
        'sort|排序' => [
            'require' => 'require',
            'max' => '5',
            'number' => 'number',
        ]
    ];
}