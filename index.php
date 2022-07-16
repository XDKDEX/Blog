<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="zh-cn">
<head>
<!-- name:DefintElis -->
    <title>主页</title>
    <link rel="stylesheet" href="./css/basic.css">
    <!-- <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css"> -->
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo/icon.png">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>
    
    <!--Plug-in-Start-->
    
        <!--Aplayer-Start-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./Plug-in/APlayer/APlayer.min.css">
        <script src="./Plug-in/APlayer/APlayer.min.js"></script>
            <!-- APlayer-MetingJS -->
                <script src="./Plug-in/Meting/Meting.min.js"></script>
                <meting-js  server="netease" type="playlist" id="7366701902" fixed="true" order="random" autoplayer="true" lrctype="1"></meting-js>
            <!-- APlayer-MetingJS -->
        <!--Aplayer-End-->
        
    <!--Plug-in-END-->
</head>
<body id='WindowsPages'>
    <div class='background' id='background'></div>    
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
                <a onclick='W()' href='javascript:void(0);'>
                    <li>
                        <i class="fa fa-search"></i>
                    </li>
                </a>
            </ul>
        </div>
        
    </div>









    <div class='sidebar' id='sidebar' style="width: 0%;"></div>
    <div class='sidebar-mask' id='sidebar-mask' onclick='mask()'style="width: 0%;"></div>








    <div class='placeholder'></div>





        <div class='container'>

            <?php
                $n = 1;
                while(file_exists('./container/'.$n.'.json')){
                    $n++;
                }
                $n--;
                while(true){
                    if(file_exists('./container/'.$n.'.json')){

                    $json_source = file_get_contents('./container/'.$n.'.json');
                    $json = json_decode($json_source, true);


                    echo "<section class='container-main' id='container-main'>
                            <article class='container-main-article'>
                                <div class='container-main-article-row'>
                                    <a onclick=Read(".$n.") href='/container/index.php?r=".$n."'>
                                        <img class='container-main-article-row-img' src='./img/Blog.jpg'>
                                        <h2>".$json['Title']."</h2>
                                    </a>
                                        <p>".$json['Simple']."...</p>
                                    <div class='container-main-article-row-detailed'>
                                        <a class='container-main-article-row-detailed-time' id='time'><i class='fa fa-calendar'></i>1145-14-19</a>
                                        <a class='container-main-article-row-detailed-Read'><i class='fa fa-eye'></i>".$json['Read']."次阅读</a>
                                        <a onclick=Live(".$n.") class='container-main-article-row-detailed-live'><i class='fa fa-thumbs-o-up'></i>".$json['Live']."人点赞</a>
                                        <!-- <a class='container-main-article-row-detailed-live-act' href='javascript:void(1);' onclick='Live()'><i class='fa fa-thumbs-o-up' id='live'></i></a> --!>
                                    </div>
                                </div>
                            </article>
                            </section>
                        ";
                    $n--;
                    }else{
                        break;
                    }

                }
            ?>

        </div>
    <div class='footer-about' id='footer-about'>
        <footer>
            <div class='footer-about-container'>
            <span style="text-decoration: line-through">Copyright <i class="fa fa-copyright" style="text-decoration: line-through"></i> 2021 'None'. All rights reserved. | </span>    <span id='Clock' class='Clock'></span>
                <br><span>MADE BY ME </span>
            </div>
        </footer>
    </div>

</body>
    <script src='./js/Clock.js'></script>
</html><!--https://xdkdex.github.io/Project-Ir 铱在350°C的熔融氢氧化钠中（未通入空气）极其耐腐蚀，腐蚀率小于0.005mm/年(约3.5mdd)，但400°C以上的熔融氢氧化钠对铱的腐蚀很严重；熔融的氢氧化钾也可以强烈腐蚀铱。-->
