<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="log.css">
 
    <title>嗨购</title>
</head>
<body>
    <section>
        <!-- 背景颜色 -->
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <!-- 背景圆 -->
            <div class="circle" style="--x:0"></div>
            <div class="circle" style="--x:1"></div>
            <div class="circle" style="--x:2"></div>
            <div class="circle" style="--x:3"></div>
            <div class="circle" style="--x:4"></div>
            <div class="circle" style="--x:5"></div>  
            <div class="circle" style="--x:6"></div>         
            <!-- 登录框 -->
            <div class="container">
                <div class="form">
            <div class="bottom-text footer-columns">
<h2><?php 
    echo '<span style="font-size: 32px">
Hello, </span>'.$_POST["username"];?></h2>
                    <h2>注册成功！</h2>
                        <div class="inputBox">
                            <form method="link" action="log.html" target="_blank"  >
                            <input type="submit" id="submit_form" value="登录"  >
                            </form>
                        </div>
                        <p class="forget">商业合作<a href="#">
                                点击这里
                            </a></p>
                        <p class="forget">提建议<a href="#">
                                点击这里
                            </a></p>
                      </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>