<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title><?php echo $title;?> | 登录页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="/html/admin/login/css/reset.css">
    <link rel="stylesheet" href="/html/admin/login/css/supersized.css">
    <link rel="stylesheet" href="/html/admin/login/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>电商后台登录</h1>
    <form action="" method="post">
        <input type="text" name="username" class="username" placeholder="Username">
        <input type="password" name="password" class="password" placeholder="Password">
        <button type="submit">登录</button>
        <div class="error"><span>+</span></div>
    </form>
</div>

<!-- Javascript -->
<script src="/html/admin/login/js/jquery-1.8.2.min.js"></script>
<script src="/html/admin/login/js/supersized.3.2.7.min.js"></script>
<script src="/html/admin/login/js/supersized-init.js"></script>
<script src="/html/admin/login/js/scripts.js"></script>

</body>

</html>