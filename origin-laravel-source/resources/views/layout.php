<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</head>
<body id="app-layout">
<style>
body {
    font-family: 'Lato';
    font-size: 14px;
    line-height: 1.42;
    color: #333;
    background-color: #fff;
    margin: 0;
}
.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
.navbar {
    border-radius: 4px;
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.navbar-default .navbar-brand {
    color: #777;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.navbar-nav {
    float: left;
    margin: 0;
}
.navbar-right {
    float: right!important;
    margin-right: -15px;
}
.navbar-default .navbar-nav>li>a {
    color: #777;
}
.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
}

</style>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Task List</a>
        </div>
        <div id="app-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/signUp">SignUp</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>