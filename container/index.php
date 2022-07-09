<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="zh-cn">
<head>
<!-- name:DefintElis -->
    <?php

                    ?>
    <link rel="stylesheet" href='./../../css/basic.css'>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo/icon.png">
    <link rel="stylesheet" href="./css/mian.css">
    <script src="./../../js/Clock.js"></script>
    
    <!--Plug-in-Start-->
    
        <!--Aplayer-Start-->
        <link rel="stylesheet" href="./../../Plug-in/APlayer/APlayer.min.css">
        <script src="./../../Plug-in/APlayer/APlayer.min.js"></script>
            <!-- APlayer-MetingJS -->
<!--                <script src="./../..//Plug-in/Meting/Meting.min.js"></script>
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
                    $pageURL = $_SERVER["REQUEST_URI"];
                    $n = preg_replace('/[^0-9]/','',$pageURL);
    
                    $json_source = file_get_contents('./'.$n.'.json');
                    $json = json_decode($json_source, true);


                    
                    echo "<title>".$json['Title']."</title>";




                    echo "
                                <header class='title'>
                                        <h2>".$json['Title']."</h2>
                                    <div class='container-detailed'>
                                        <a class='container-detailed-time' id='time'><i class='fa fa-calendar'></i>1145-14-19</a>
                                        <a class='container-detailed-reads'><i class='fa fa-eye'></i>".$json['Reads']."次阅读</a>
                                        <a class='container-detailed-live'><i class='fa fa-thumbs-o-up'></i>".$json['Live']."人点赞</a>
                                        <!-- <a class='container-detailed-live-act' href='javascript:void(1);' onclick='live()'><i class='fa fa-thumbs-o-up' id='live'></i></a> --!>
                                    </div>
                                </header>
                        ";
            ?>
        <div class='detailed'>
            <?php
                echo $json['Container'];
            ?>
        </div>

        </div>
        <div class='Comments'>
        <?php
                $C = 1;
                while(isset($json['Comments']['ID'][''.$C.''])){$C++;}$C--;
                while(isset($json['Comments']['ID'][''.$C.''])){

                    echo "  <div class='Comments-header'>    
                                <img src='../img/Blog.jpg'>
                                <div class='Comments-header-detailed'>
                                    <cite class='Name'>".$json['Comments']['ID'][''.$C.'']['Name']."</cite>
                                    <cite class='Time'>".$json['Comments']['ID'][''.$C.'']['Time']."</cite>
                                </div>
                            </div>
                    ";
                    echo "  <div class='Text'>
                                ".$json['Comments']['ID'][''.$C.'']['Text']."
                            </div>
                    ";
                    $C--;   
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
</html><!--https://xdkdex.github.io/Project-Ir 铱在350°C的熔融氢氧化钠中（未通入空气）极其耐腐蚀，腐蚀率小于0.005mm/年(约3.5mdd)，但400°C以上的熔融氢氧化钠对铱的腐蚀很严重；熔融的氢氧化钾也可以强烈腐蚀铱。-->