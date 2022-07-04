<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="zh-cn">
<head>
<!-- name:DefintElis -->
    <title>主页</title>
    <link rel="stylesheet" href='./../../css/basic.css'>
    <!-- <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css"> -->
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo/icon.png">
    <link rel="stylesheet" href="./css/mian.css">
    <script src="./../../js/Clock.js"></script>
    
    <!--Plug-in-Start-->
    
        <!--Aplayer-Start-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./../../Plug-in/APlayer/APlayer.min.css">
        <script src="./../../Plug-in/APlayer/APlayer.min.js"></script>
            <!-- APlayer-MetingJS -->
                <script src="./../..//Plug-in/Meting/Meting.min.js"></script>
                <meting-js server="netease" type="playlist" id="7366701902" fixed="true" order="random" autoplayer="true" lrctype="1"></meting-js>
            <!-- APlayer-MetingJS -->
        <!--Aplayer-End-->
        
    <!--Plug-in-END-->
</head>
<body id='WindowsPages'>
    <div class='header' id='header'>
        <div class='header-menu' id='header-menu'>
        
            <ul class='header-menu-list'>
                <a href='javascript:void(0);' onclick='list()'>
                    <li>
                    <i class="fa fa-list"></i>
                    </li>
                </a>
            </ul>
            
            <ul class='header-menu-home'>
                <a href='javascript:void(0);'>
                    <li>
                        <i class="fa fa-home"></i>首页
                    </li>
                </a>
            </ul>
            
            <ul class='header-menu-search'>
                <a href='javascript:void(0);'>
                    <li>
                        <i class="fa fa-search"></i>
                    </li>
                </a>
            </ul>
            
        </div>
    </div>
    <div class='placeholder'></div>
    <div class='container'>
        <?php
                $n = $_COOKIE["ReadItem"];
                $xml = simplexml_load_file('./'.$n.'.xml');
                    echo "
                                <header class='title'>



                                    <a>
                                        <h2>".$xml->title."</h2>
                                    </a>

                                    <div class='container-detailed'>
                                        <a class='container-detailed-time' id='time'><i class='fa fa-calendar'></i>1145-14-19</a>
                                        <a class='container-detailed-reads'><i class='fa fa-eye'></i>".$xml->reads."次阅读</a>
                                        <a></a>
                                        <a class='container-detailed-live'><i class='fa fa-thumbs-o-up'></i>".$xml->live."人点赞</a>
                                        <!-- <a class='container-detailed-live-act' href='javascript:void(1);' onclick='live()'><i class='fa fa-thumbs-o-up' id='live'></i></a> --!>
                                    </div>
                                </header>
                                <ol>彻底重写
                                    <li>".$xml->plan1."</li>
                                    <li>".$xml->plan2."</li>
                                    <li>".$xml->plan3."</li>
                                </ol>
                        ";
            ?>
        <div class='detailed'>
            
    </div>










    </div>
    <div class='footer-about' id='footer-about'>
        <footer>
            <div class='footer-about-container'>
                <span>Copyright  2021 'TEMP'. All rights reserved. | </span>    <a id='Clock' class='Clock'></a>
                <br><span>MADE BY ME </span>
            </div>
        </footer>
    </div>

</body>
</html><!--https://xdkdex.github.io/Project-Ir 铱在350°C的熔融氢氧化钠中（未通入空气）极其耐腐蚀，腐蚀率小于0.005mm/年(约3.5mdd)，但400°C以上的熔融氢氧化钠对铱的腐蚀很严重；熔融的氢氧化钾也可以强烈腐蚀铱。-->