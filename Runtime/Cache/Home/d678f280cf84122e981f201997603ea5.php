<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            Login Form
        </title>
        <style type="text/css">
            .btn {
                display: inline-block;
                *display: inline;
                *zoom: 1;
                margin-bottom: 0;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
            }
            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
                background-color: #e6e6e6;
            }
            .btn-large {
                padding: 9px 14px;
                font-size: 15px;
                line-height: normal;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }
            .btn:hover {
                color: #333333;
                text-decoration: none;
                background-color: #e6e6e6;
                background-position: 0 -15px;
                -webkit-transition: background-position 0.1s linear;
                -moz-transition: background-position 0.1s linear;
                -ms-transition: background-position 0.1s linear;
                -o-transition: background-position 0.1s linear;
                transition: background-position 0.1s linear;
            }
            .btn-primary, .btn-primary:hover {
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
                color: #ffffff;
            }
            .btn-primary.active {
                color: rgba(255, 255, 255, 0.75);
            }
            .btn-primary {
                background-color: #4a77d4;
                background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4);
                background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4);
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4));
                background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4);
                background-image: -o-linear-gradient(top, #6eb6de, #4a77d4);
                background-image: linear-gradient(top, #6eb6de, #4a77d4);
                background-repeat: repeat-x;
                border: 1px solid #3762bc;
                text-shadow: 1px 1px 1px rgba(0,0,0,0.4);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5);
            }
            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
                filter: none;
                background-color: #4a77d4;
            }
            .btn-block {
                width: 107%;
                display:block;
            }
            html {
                width: 100%;
                height:100%;
                overflow:hidden;
            }
            body {
                background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
            }
            .login {
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -150px 0 0 -150px;
                width:300px;
            }
            .login h1 {
                color: #fff;
                letter-spacing:1px;
                text-align:center;
            }
            input {
                width: 100%;
                margin-bottom: 10px;
                background: rgba(0,0,0,0.3);
                outline: none;
                padding: 10px;
                font-size: 13px;
                color: #fff;
                text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
                border: 1px solid rgba(0,0,0,0.3);
                border-radius: 4px;
                box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
                -webkit-transition: box-shadow .5s ease;
                -moz-transition: box-shadow .5s ease;
                -o-transition: box-shadow .5s ease;
                -ms-transition: box-shadow .5s ease;
                transition: box-shadow .5s ease;
            }
            input:focus {
                box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2);
            }
        </style>

    </head>
    <body>
        <div class="login">
            <h1>
                Login
            </h1>
            <form method="post">
                <input type="text" name="username" placeholder="用户名">
                <input type="password" name="password" placeholder="密码">
                <button type="submit" class="btn btn-primary btn-block btn-large">
                    登录
                </button>
            </form>
        </div>
    </body>

</html>