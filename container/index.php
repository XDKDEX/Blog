<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="zh-cn">
<head>
<!-- name:DefintElis -->
    <link rel="stylesheet" href='./../../css/basic.css'>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo/icon.png">
    <link rel="stylesheet" href="./css/mian.css">
    <script src="../js/Clock.js"></script>
    <script src="../js/main.js"></script>
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
                                        <a class='container-detailed-Read'><i class='fa fa-eye'></i>".$json['Read']."次阅读</a></a>
                                        <a  onclick=Live(".$n.") class='container-detailed-live'><i class='fa fa-thumbs-o-up'></i>".$json['Live']."人点赞</a>
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
            <h7>发表评论</h7><br><br>
            <h8>必填项已用 * 标注</h8>
            <div class='Comments-Sendarea'>
                <textarea id='Comments-Send-Text-Get' class='Comments-Sendarea-Text' placeholder="随便说点什么吧"></textarea>
                <div class='Comments-Sendarea-emoji'><a>表情</a><div style="
    position: absolute;
    height: 8em;
    width: 32em;
    background: #3300ff;
    border: 1px solid #ccc;
    border-radius: 0 5px 5px 5px;
    padding: 0.1em;
    display: block;
">

    <ul style="
    margin: 0;
    margin-left: 0;
    padding: 0;
    list-style: none;
">
        <li><div style="
    height: 6em;
    overflow: auto;
    scroll-margin: 0;
"></div></li>
        <li><div>OvO</div></li>
        
    </ul>
<ul style="
    margin: 0;
    margin-left: 0;
    padding: 0;
    list-style: none;
">
        <li><div>OvO</div></li>
        
    </ul></div></div>
                <div class='Comments-Sendarea-User'>
                    <div class='Comments-Sendarea-User-Icon'><i class="fa fa-user"></i></div>
                    <div class='Comments-Sendarea-User-Text'><textarea id='Comments-Send-User-Get' class='Comments-Sendarea-User-Text' placeholder="昵称"></textarea></div>
                    <span class='need'>*</span>
                </div>
                <div class='Comments-Sendarea-Email'>
                    <div class='Comments-Sendarea-Email-Icon'><i class="fa fa-envelope"></i></div>
                    <div  class='Comments-Sendarea-Email-Text'><textarea disabled id='Comments-Sendarea-Email-Get' class='Comments-Sendarea-Email-Text'  placeholder="开发中。。。"></textarea></div>
                    <span class='need'>*</span>
                </div>                 
                
                <a onclick='SendComments()'>
                    <div class='Comments-Sendarea-Send'>
                       <span>发表评论</span>
                    </div>
                </a>
            </div> 
        </div>
        <?php
                $C = 1;
                while(isset($json['Comments']['ID'][''.$C.''])){$C++;}$C--;
                while(isset($json['Comments']['ID'][''.$C.''])){

                    echo "  <section>
                                <div class='Comments-header'>    
                                    <img src='../img/Blog.jpg'>
                                    <div class='Comments-header-detailed'>
                                        <cite class='Name'>".$json['Comments']['ID'][''.$C.'']['Name']."</cite>
                                        <cite class='Time'>".$json['Comments']['ID'][''.$C.'']['Time']."</cite>
                                    </div>
                                </div>
                                <div class='Text'>
                                    ".$json['Comments']['ID'][''.$C.'']['Text']."
                                </div>
                            </section>
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
    <script></script>
</body>
</html><!--  ( ゜- ゜)つロ_(:з」∠)_（⌒▽⌒）（￣▽￣）(=・ω・=)(*°▽°*)八(*°▽°*)♪✿ヽ(°▽°)ノ✿(¦3【▓▓】눈_눈(ಡωಡ)_(≧∇≦」∠)_━━━∑(ﾟ□ﾟ*川━(｀・ω・´)(￣3￣)✧(≖ ◡ ≖✿)(･∀･)(〜￣△￣)〜→_→(°∀°)ﾉ╮(￣▽￣)╭( ´_ゝ｀)←_←(;¬_¬)(ﾟДﾟ≡ﾟдﾟ)!?( ´･･)ﾉ(._.`)Σ(ﾟдﾟ;)Σ( ￣□￣||)<(´；ω；`)（/TДT)/(^・ω・^ )(｡･ω･｡)(●￣(ｴ)￣●)ε=ε=(ノ≧∇≦)ノ(´･_･`)(-_-#)（￣へ￣）(￣ε(#￣) Σ(╯°口°)╯(┴—┴ヽ(`Д´)ﾉ("▔□▔)/(º﹃º )(๑>؂<๑）｡ﾟ(ﾟ´Д｀)ﾟ｡(∂ω∂)(┯_┯)(・ω< )★( ๑ˊ•̥▵•)੭₎₎¥ㄟ(´･ᴗ･`)ノ¥Σ_(꒪ཀ꒪」∠)_٩(๛ ˘ ³˘)۶❤(๑‾᷅^‾᷅๑)  https://xdkdex.github.io/Project-Ir 铱在350°C的熔融氢氧化钠中（未通入空气）极其耐腐蚀，腐蚀率小于0.005mm/年(约3.5mdd)，但400°C以上的熔融氢氧化钠对铱的腐蚀很严重；熔融的氢氧化钾也可以强烈腐蚀铱。-->