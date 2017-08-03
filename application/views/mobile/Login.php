<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/base.css"/>
    <link rel="stylesheet" href="/public/css/public.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="title">
    <h2>午安煎饼计划</h2>
</div>
<div class="login clearfix">
    <img src="/public/img/logo.png"/>
    <form action="/index.php/user/login" method="post">
        <div class="from-group center-block">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="输入电子邮箱" name="email">
        </div>
        <div class="from-group center-block">
            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="请输入密码" name="password">
        </div>
        <div class="center-block">
            <button id="logBtn" type="submit" class="btn btn-default">登录</button>
        </div>
    </form>


    <div class="center-block">
        <a href="/index.php/viewer/signup" class="btn btn-link btn-register">注册</a>
    </div>

    <a href="/index.php/viewer/recover_psd" id="forgetPassword" class="btn btn-default forgetPassword">忘记密码？</a>


</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
