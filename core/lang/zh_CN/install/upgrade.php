<?php
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
！！！！警告！！！！
以下为系统文件，请勿修改
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*++++++提示信息++++++
x开头为错误
y开头为成功
++++++++++++++++++*/
return array(
    'page' => array(
        'upgrade'       => '升级程序',
        'ext'           => '服务器环境检查',
        'dbConfig'      => '数据库设置',
        'dbTable'       => '升级数据表',
        'admin'         => '创建管理员',
        'auth'          => '授权为管理员', //授权
        'over'          => '完成升级',
    ),

    'href'             => array(
        'back'            => '返回',
        'help'            => '帮助',
        'adminAdd'        => '创建管理员', //授权
        'adminAuth'       => '授权为管理员', //授权
        'jumping'         => '正在跳转',
    ),

    'label' => array(
        'tpl'           => '模板',
        'timezone'      => '时区',
        'upgrade'       => '正在进行升级',
        'to'            => '至',
        'dbHost'        => '数据库服务器',
        'dbPort'        => '服务器端口',
        'dbName'        => '数据库名称',
        'dbUser'        => '用户名',
        'dbPass'        => '密码',
        'dbCharset'     => '字符编码',
        'dbTable'       => '数据表前缀',
        'nick'          => '昵称',

        'username'      => '用户名',
        'password'      => '密码',
        'passConfirm'   => '确认密码',

        'over'          => '还差最后一步，完成升级！',
    ),

    'ext' => array(
        'installed'     => '已安装',
        'notinstalled'  => '未安装',
    ),

    'btn' => array(
        'jump'      => '跳转至',
        'skip'      => '跳过',
        'stepPrev'  => '上一步',
        'stepNext'  => '下一步',
        'save'      => '保存',
        'complete'  => '完成',
    ),

    'text' => array(
        'extErr'    => '服务器环境检查未通过，请检查上述扩展库是否已经正确安装。',
        'extOk'     => '服务器环境检查通过，可以继续安装。',
        'admin'     => '本系统自 v2.0 版本起，升级了管理员数据模型，如果您不能确定是否已经升级，请在此创建一个新的管理员（推荐），以保证您能够正常登录系统。如果您不想注册新用户，只希望使用原有的 baigo SSO 用户作为管理员，请点击 <mark>授权为管理员</mark>。',
        'auth'      => '本系统自 v2.0 版本起，升级了管理员数据模型，如果您不能确定是否已经升级，请在此创建一个新的管理员（推荐），以保证您能够正常登录系统。如果您要创建新的管理员请点击 <mark>创建管理员</mark>。',

        'x030403' => '<h3>如需重新安装，请执行如下步骤：</h3>
            <ol>
                <li>删除 ./config/installed.php 文件</li>
                <li>重新运行 <a href=\'' . BG_URL_INSTALL . 'index.php\'>' . BG_URL_INSTALL . 'index.php</a></li>
            </ol>',

        'x030412' => '<h3>数据库未正确设置：</h3>
            <ol>
                <li><a href=\'' . BG_URL_INSTALL . 'index.php?mod=upgrade&act=dbconfig\'>返回重新设置</a></li>
            </ol>',

        'x030414' => '<h3>未通过服务器环境检查，升级无法继续：</h3>
            <ol>
                <li>重新检查环境 <a href=\'' . BG_URL_INSTALL . 'index.php?mod=upgrade\'>' . BG_URL_INSTALL . 'index.php?mod=upgrade</a></li>
                <li>根据检查结果，正确安装所必需的 PHP 扩展库。</li>
            </ol>',
        ),
);
