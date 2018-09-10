小程序登录
1.访问https://mp.weixin.qq.com/
2.使用gaoyuejianwu@qq.com  AAAaaa111 登录
3.使用insomnia微信扫码登录


微信公众号登录
1.访问https://mp.weixin.qq.com/
2.使用gaoyuejianwu@aliyun.com  AAAaaa111 登录
3.使用insomnia微信扫码登录


部署优化

关闭debug模式
application\config.php
‘app_debug’ => false

数据库缓存命令
php think optimize:schema

路由缓存命令
php think optimize:route