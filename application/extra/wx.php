<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/17
 * Time: 11:10
 */
return [
    'app_id' => 'wx3f942dabc4d54b30',
    'app_secret' => '215832f3da4277866c9dd36230d574a2',
    'login_url' =>'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',
    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s",
];
