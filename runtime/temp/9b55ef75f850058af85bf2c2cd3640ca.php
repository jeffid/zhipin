<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\signup.html";i:1525194252;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0045)https://signup.zhipin.com/?ka=header-register -->
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="copyright" content="Copyright (c) zhipin.com">
    
    
    <title><?php echo isset($title)?$title: '【BOSS直聘注册】'; ?></title>
    <meta name="keywords" content="BOSS直聘注册">
    <meta name="description"
          content="本页提供BOSS直聘电脑端在线注册，BOSS直聘APP官网手机号快捷注册，支持中国大陆、美国等数十个国家和地区手机注册，赶快来注册BOSS直聘吧，开启直聘新模式！">
    
    
    <link href="/static/home/css/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/static/home/css/sub.css">
</head>

<body class="page-sign">
<div id="wrap">
    <div id="header">
        <h1 class="logo"><a href="/index/index" ka="header/static-home-logo" title=""><img
                src="/static/home/images/login-logo.png"><span>找工作要跟<br>老板谈</span></a></h1>
    </div>
    <div class="sign-wrap">
        
        
        <!--密码登录--------------------------------------------------------------------------->
        <div class="sign-form sign-pwd" style="display:<?php echo $signPwd; ?>;">
            <h3 class="title">登录BOSS直聘</h3>
            <div class="tiperror"></div>
            <div class="sign-tab">
                <span class="link-signin cur">密码登录</span>
                <span class="link-sms">短信登录</span>
                <!--<span class="link-scan">扫码登录</span>-->
            </div>
            <form class="form-pwd" data-action="/homelogin/loginpwd" method="post" data-form="form-pwd">
                <input type="hidden" name="pk" value="cpc_user_sign_up">
                <div class="form-row row-select">
                    <span class="dropdown-select">
                        <i class="icon-select-arrow"></i>
                        <em class="text-select">+86</em>
                        <input type="hidden" name="regionCode" value="+86">
                    </span>
                    <span class="ipt-wrap">
                        <i class="icon-sign-phone"></i>
                        <input type="tel"
                               class="ipt ipt-phone required"
                               placeholder="手机号"
                               name="phone" required minlength="6" maxlength="11"></span>
                    <div class="dropdown-menu">
                        
                        <ul>
                            <li data-val="+86"><span class="num">+86</span>中国大陆</li>
                            <li data-val="+1"><span class="num">+1</span>美国</li>
                            <li data-val="+852"><span class="num">+852</span>香港</li>
                            <li data-val="+81"><span class="num">+81</span>日本</li>
                            <li data-val="+886"><span class="num">+886</span>台湾</li>
                            <li data-val="+44"><span class="num">+44</span>英国</li>
                            <li data-val="+82"><span class="num">+82</span>韩国</li>
                            <li data-val="+33"><span class="num">+33</span>法国</li>
                            <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
                            <li data-val="+39"><span class="num">+39</span>意大利</li>
                            <li data-val="+65"><span class="num">+65</span>新加坡</li>
                            <li data-val="+63"><span class="num">+63</span>菲律宾</li>
                            <li data-val="+60"><span class="num">+60</span>马来西亚</li>
                            <li data-val="+64"><span class="num">+64</span>新西兰</li>
                            <li data-val="+34"><span class="num">+34</span>西班牙</li>
                            <li data-val="+95"><span class="num">+95</span>缅甸</li>
                            <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
                            <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
                            <li data-val="+20"><span class="num">+20</span>埃及</li>
                            <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
                            <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
                        </ul>
                    </div>
                </div>
                <div class="form-row">
                    <span class="ipt-wrap">
                        <i class="icon-sign-pwd"></i>
                        <input type="password" class="ipt ipt-pwd required" ka="signin-password" placeholder="密码" name="password" required minlength="6" maxlength="18"></span>
                </div>
                <div class="form-row row-code">
                    <span class="cell-wrap">
                        <i class="icon-sign-code"></i>
                        <input type="text" class="ipt ipt-code" name="captcha" ka="signin-code" required minlength="4" maxlength="4" placeholder="验证码" data-url="">
                    </span>
                    <span class="cell-wrap">
                        <img src="<?php echo captcha_src(); ?>" class=" captcha"
                             onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>
                    </span>
                    <input type="hidden" name="randomKey" class="randomkey" value="1y046Yed0nk3PdIneV4Bzeb7tg002ft3">
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn">登录</button>
                </div>
                <div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>
            </form>
        </div>
        
        
        
        <!--短信登录------------------------------------------------------------------------------------->
        <div class="sign-form sign-sms" style="display:<?php echo $signSms; ?>;">
            <h3 class="title">登录BOSS直聘</h3>
            <div class="tiperror"></div>
            <div class="sign-tab">
                <span class="link-signin">密码登录</span>
                <span class="link-sms cur">短信登录</span>
                <!--<span class="link-scan">扫码登录</span>-->
            </div>
            <form class="form-sms" data-action="/homelogin/loginsms" method="post" data-form="form-sms">
                <input type="hidden" name="pk" value="cpc_user_sign_up">
                <div class="form-row row-select">
                    <span class="dropdown-select">
                        <i class="icon-select-arrow"></i>
                        <em class="text-select">+86</em>
                        <input type="hidden" name="regionCode" value="+86">
                    </span>
                    <span class="ipt-wrap">
                        <i class="icon-sign-phone"></i>
                        <input type="tel" class="ipt ipt-phone required" placeholder="手机号" name="phone" required minlength="6" maxlength="11"></span>
                    <div class="dropdown-menu">
                        
                        <ul>
                            <li data-val="+86"><span class="num">+86</span>中国大陆</li>
                            <li data-val="+1"><span class="num">+1</span>美国</li>
                            <li data-val="+852"><span class="num">+852</span>香港</li>
                            <li data-val="+81"><span class="num">+81</span>日本</li>
                            <li data-val="+886"><span class="num">+886</span>台湾</li>
                            <li data-val="+44"><span class="num">+44</span>英国</li>
                            <li data-val="+82"><span class="num">+82</span>韩国</li>
                            <li data-val="+33"><span class="num">+33</span>法国</li>
                            <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
                            <li data-val="+39"><span class="num">+39</span>意大利</li>
                            <li data-val="+65"><span class="num">+65</span>新加坡</li>
                            <li data-val="+63"><span class="num">+63</span>菲律宾</li>
                            <li data-val="+60"><span class="num">+60</span>马来西亚</li>
                            <li data-val="+64"><span class="num">+64</span>新西兰</li>
                            <li data-val="+34"><span class="num">+34</span>西班牙</li>
                            <li data-val="+95"><span class="num">+95</span>缅甸</li>
                            <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
                            <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
                            <li data-val="+20"><span class="num">+20</span>埃及</li>
                            <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
                            <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
                        </ul>
                    </div>
                </div>
                <div class="form-row row-code">
                    <span class="cell-wrap">
                        <i class="icon-sign-code"></i>
                        <input type="text" class="ipt ipt-code"
                               name="captcha" ka="signin-code"
                               required minlength="4"
                               maxlength="4" placeholder="验证码"
                               data-url="/captcha/randkey.json">
                    </span><span class="cell-wrap">
                    <img src="<?php echo captcha_src(); ?>" class=" captcha"
                         onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>
                </span>
                    <input type="hidden" name="randomKey" class="randomkey" value="1y046Yed0nk3PdIneV4Bzeb7tg002ft3">
                </div>
                <div class="form-row">
                    <span class="ipt-wrap">
                        <i class="icon-sign-sms"></i>
                        <input type="text" class="ipt ipt-sms required" ka="signup-sms" placeholder="短信验证码" name="phoneCode" required minlength="4"  maxlength="4">
                        <input
                                type="hidden" name="smsType" value="1">
                        <button type="button" class="btn btn-sms"
                                data-url="" data-action="/homelogin/sms" data-btn="sms">发送验证码</button>
                    </span>
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn">登录</button>
                </div>
                <div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>
            </form>
        </div>
        <!--扫码登录-------------------------------------------------------------------------------------->
        <!--<div class="sign-form sign-scan" style="display:none;">-->
        <!--<h3 class="title">登录BOSS直聘</h3>-->
        <!--<div class="tiperror"></div>-->
        <!--<div class="sign-tab"><span class="link-signin">密码登录</span><span class="link-sms">短信登录</span><span-->
        <!--class="link-scan cur">扫码登录</span></div>-->
        <!--<div class="qrcode-box">-->
        <!--<input type="hidden" class="uuid" value="bosszp-1b38330c-fb5a-4091-ad04-f71b9af90634">-->
        <!--<p><span>使用 BOSS直聘 APP 扫码登录</span><em>扫码帮助</em></p>-->
        <!--<img src="./signup_files/bosszp-1b38330c-fb5a-4091-ad04-f71b9af90634"-->
        <!--data-url="">-->
        <!--<div class="qrcode-tip" style="display: block;"><span class="gray">知道了</span>Boss现在也可以使用密码和短信登录了</div>-->
        <!--<div class="hover-range-left"></div>-->
        <!--<div class="hover-range-right"></div>-->
        <!--<div class="sign-scan-help animation">-->
        <!--<div class="scan-help-top">-->
        <!--<ul>-->
        <!--<li class="active" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">-->
        <!--我是BOSS-->
        <!--</li>-->
        <!--<li style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">我是牛人</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<ul class="scan-help-down">-->
        <!--<li><img src="/static/home/images/icon-help-boss.png"></li>-->
        <!--<li style="display: none;"><img src="/static/home/images/icon-help-geek.png"></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>-->
        <!--</div>-->
        
        
        <!--注册------------------------------------------------------------------------------------->
        <div class="sign-form sign-register" style="display:<?php echo $signRegister; ?>;">
            <h3 class="title">注册BOSS直聘</h3>
            <div class="tiperror"></div>
            <div class="sign-tab">
                <span>使用手机号注册</span>
            </div>
            <form class="form-register" data-action="/signup/signup" method="post" data-form="form-register">
                <input type="hidden" name="pk"
                                                                                     value="cpc_user_sign_up">
                <input type="hidden" name="act" value="0">
                <input type="hidden" name="purpose" value="0">
                <div class="purpose-row">
                    <span class="cur">我要找工作</span><span class="">我要招聘</span>
                </div>
                <div class="form-row row-select">
                    <span class="dropdown-select">
                        <i class="icon-select-arrow"></i>
                        <em class="text-select">+86</em>
                        <input type="hidden" name="regionCode" value="+86">
                    </span>
                    <span class="ipt-wrap">
                        <i class="icon-sign-phone"></i>
                        <input type="tel" class="ipt ipt-phone required" placeholder="手机号" name="phone" minlength="6"
                               maxlength="11" required>
                    </span>
                    <div class="dropdown-menu">
                        <ul>
                            <li data-val="+86"><span class="num">+86</span>中国大陆</li>
                            <li data-val="+1"><span class="num">+1</span>美国</li>
                            <li data-val="+852"><span class="num">+852</span>香港</li>
                            <li data-val="+81"><span class="num">+81</span>日本</li>
                            <li data-val="+886"><span class="num">+886</span>台湾</li>
                            <li data-val="+44"><span class="num">+44</span>英国</li>
                            <li data-val="+82"><span class="num">+82</span>韩国</li>
                            <li data-val="+33"><span class="num">+33</span>法国</li>
                            <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
                            <li data-val="+39"><span class="num">+39</span>意大利</li>
                            <li data-val="+65"><span class="num">+65</span>新加坡</li>
                            <li data-val="+63"><span class="num">+63</span>菲律宾</li>
                            <li data-val="+60"><span class="num">+60</span>马来西亚</li>
                            <li data-val="+64"><span class="num">+64</span>新西兰</li>
                            <li data-val="+34"><span class="num">+34</span>西班牙</li>
                            <li data-val="+95"><span class="num">+95</span>缅甸</li>
                            <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
                            <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
                            <li data-val="+20"><span class="num">+20</span>埃及</li>
                            <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
                            <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
                        </ul>
                    </div>
                </div>
                <div class="form-row row-code">
                    <span class="cell-wrap">
                        <i class="icon-sign-code"></i>
                        <input type="text" class="ipt ipt-code" name="captcha" ka="signin-code" required minlength="4"
                               maxlength="4"
                               placeholder="验证码" data-url="">
                    </span>
                    <span class="cell-wrap">
                        <img src="<?php echo captcha_src(); ?>" class=" captcha"
                             onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>
                    </span>
                    <!--<input type="hidden" name="randomKey" class="randomkey" value="1y046Yed0nk3PdIneV4Bzeb7tg002ft3">-->
                </div>
                <div class="form-row">
                    <span class="ipt-wrap">
                        <i class="icon-sign-sms"></i>
                        <input type="text" class="ipt ipt-sms required" ka="signup-sms" placeholder="短信验证码"
                               name="phoneCode" required minlength="4" maxlength="4">
                        <input type="hidden" name="smsType" value="2">
                        <button type="button" class="btn btn-sms" data-url="" data-action="/signup/sms" data-btn="sms">发送验证码</button>
                    </span>
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn">注册</button>
                </div>
                <div class="text-tip">
                    <div class="agreement-tip">
                        <label>
                            <input type="checkbox" checked="checked" required>
                            同意BOSS直聘 <a href="" target="_blank">用户协议及隐私政策</a>
                        </label>
                    </div>
                    已有账号 <a href="javascript:;" class="link-signin">直接登录</a>
                </div>
            </form>
        </div>
        
        <!--注册成功完善简历--------------------------------------------------------------------->
        <div class="sign-form sign-welcome">
            <h3 class="title">欢迎来到BOSS直聘</h3>
            <div class="welcome-box">
                <div class="welcome-text">
                    <b>快速完善简历</b>
                    <p>做好与Boss对话前的准备吧。</p>
                </div>
                <img src="/static/home/images/icon-sign-welcome.png" alt="">
                <div class="form-btn"><a ka="registe-complete" href="#"
                                         class="btn">开始完善</a></div>
                <div class="count-down"><em class="num">3s</em> 后自动跳转</div>
            </div>
        </div>
    </div>
</div>
<script src="/static/home/js/jquery-1.12.2.min.js"></script>
<script src="/static/home/js/main.js"></script>
<script src="/static/home/js/sub.js"></script>
<!--<input type="hidden" id="page_key_name" value="cpc_user_sign_up">-->


<script>
    //    function get_share_datas_from_html_inapp() {
    //        var shid = "shdefault",
    //            urlShid,
    //            urlSid,
    //            pk = "pkdefault",
    //            pp = "ppdefault",
    //            pkn = (typeof _PK != 'undefined' ? _PK : document.getElementById("page_key_name")),
    //            getQueryString = function (name) {
    //                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"),
    //                    r = window.location.search.substr(1).match(reg);
    //                if (r != null) {
    //                    return unescape(r[2])
    //                }
    //                return null;
    //            };
    //        urlShid = getQueryString("shid");
    //        urlSid = getQueryString("sid");
    //        if (urlShid) {
    //            shid = urlShid;
    //        } else if (urlSid) {
    //            shid = urlSid;
    //        }
    //        if (pkn) {
    //            var pknVal = pkn.value;
    //            if (pknVal) {
    //                var pkArray = pknVal.split("|");
    //                if (pkArray.length == 1) {
    //                    pk = pkArray[0];
    //                } else if (pkArray.length >= 2) {
    //                    pk = pkArray[0];
    //                    pp = pkArray[1];
    //                }
    //            }
    //        }
    //        var ret = [];
    //        ret["shid"] = shid;
    //        ret["pk"] = pk;
    //        ret["pp"] = pp;
    //        return ret;
    //    }
    //
    //    function getQueryString(name) {
    //        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    //        var r = window.location.search.substr(1).match(reg);
    //        if (r != null) return unescape(r[2]);
    //        return null;
    //    }
</script>
<script>
    var _T = _T || [];
    //    (function () {
    //        var script = document.createElement("script");
    //        script.src = "/js/analytics/ka.js?v=2.0";
    //        var s = document.getElementsByTagName("script")[0];
    //        s.parentNode.insertBefore(script, s);
    //    })();
    
    var _hmt = _hmt || [];
    //    (function () {
    //        var hm = document.createElement("script");
    //        hm.src = "//hm.baidu.com/hm.js?194df3105ad7148dcf2b98a91b5e727a";
    //        var s = document.getElementsByTagName("script")[0];
    //        s.parentNode.insertBefore(hm, s);
    //    })();
</script>

</body>
</html>