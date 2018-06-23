<?php
return array(
	//'配置项'=>'配置值'  
	'session_auto_start' => true, //是否开启session
    'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'bdm252317195.my3w.com', // 服务器地址
	'DB_NAME'   => 'bdm252317195_db', // 数据库名
	'DB_USER'   => 'bdm252317195', // 用户名
	'DB_PWD'    => 'yu727617616', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX'=> null,// 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
    'TMPL_PARSE_STRING'=>array(
        '__JS__' =>'Public/js', // 增加新的JS类库路径替换规则
        '__CSS__'=>'Public/css',
        '__IMG__'=>'Public/images',
        '__BOOT__'=>'Public/boot'
    ),
);