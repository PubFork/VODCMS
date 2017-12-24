<?php
//require配置文件
return [
    'site' =>
        array (
            'name' => 'VodCms',
            'title' => 'VodCms',
            'version' => 'v1.20171223',
            'apiurl' => 'http://yanzheng.97bike.com/',
            'cdnurl' => '/style/',
        ),
    'upload' =>
        array (
            'cdnurl' => '/uploads/',
            'uploadurl' => 'upload/ajax',
            'bucket' => 'local',
            'mimetype' => 'jpg,gif,png,jpeg,bmp',
            'multipart' =>
                array (
                    'sid' => 'index',
                ),
            'multiple' => false,
        ),
    'modulename' => 'admin',
    'controllername' => 'index',
    'actionname' => 'index',
    'jsname' => 'backend/index',
    'moduleurl' => 'http://vodcms.dev/admin',
    'referer' => '',
];