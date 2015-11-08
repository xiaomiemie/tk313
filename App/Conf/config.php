<?php
return array(
  //'配置项'=>'配置值'
  // 'APP_GROUP_LIST' => 'Index,Admin', 
  // 'DEFAULT_GROUP' => 'Index', 
  // 'APP_GROUP_MODE' => '1', 
  // 'APP_GROUP_PATH' => 'Modules', 
  //模板文件后缀名 'TMPL_TEMPLATE_SUFFIX' => '.html'
  'URL_CASE_INSENSITIVE' =>true,
  'TMPL_PARSE_STRING' => array(
    '__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/'.'Public'
    )
  // 'DB_TYPE'   => 'mysql', // 数据库类型
  //       'DB_HOST'   => 'localhost', // 服务器地址
  //       'DB_NAME'   => 'thinkphp', // 数据库名
  //       'DB_USER'   => 'root', // 用户名
  //       'DB_PWD'    => '', // 密码
  //       'DB_PORT'   => 3306, // 端口
  //       'DB_PREFIX' => 'think_', // 数据库表前缀 

);
?>