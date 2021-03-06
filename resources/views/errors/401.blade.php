<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="refresh" content="1;url=/login?jump=/{{Request::path()}}" />
        <title>401</title>
        <link href="/lib/bootstrap2-sui/css/sui.min.css" rel="stylesheet">
        <script src="/lib/jquery/jquery-1.12.1.min.js"></script>
    </head>
    <body>
        <div style="width:100%;text-align:center;display: table" id="box">
            <div style="vertical-align: middle;display: table-cell">
                <div class="msg msg-large msg-error">
                    <div class="msg-con">您的登录已超时
                        <p>
                            1秒后如果未自动跳转请点击 <a href="/login?jump=/{{Request::path()}}">登录</a>
                        </p>
                    </div>
                    <s class="msg-icon"></s>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                $('#box').height($(window).height()*0.9);
            });
        </script>
    </body>
</html>