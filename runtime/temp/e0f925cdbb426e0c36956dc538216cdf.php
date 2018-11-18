<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\index\index.html";i:1542529678;s:71:"C:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\head.html";i:1542444376;}*/ ?>
<html><head>
    <meta charset="UTF-8">
    <meta property="qc:admins" content="343472176763011162126375">
    <meta property="wb:webmaster" content="9e9e7adec3348110">
    <title>CTF题库</title>
    <meta name="baidu-site-verification" content="oGv5y9rUMv">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">    <!-- Le styles -->
    <link href="/tp5/public/static/index/css/bootstrap.css" rel="stylesheet">
    <link href="/tp5/public/static/index/Css/common_2016.css" media="screen" rel="stylesheet" type="text/css">

    <link href="/tp5/public/static/index/Css/ctf_details.css" media="screen" rel="stylesheet" type="text/css">

    <link href="/img/favicon.ico" rel="shortcut icon">
    <!-- Scripts -->
    <script src="//hm.baidu.com/hm.js?34d6f7353ab0915a4c582e4516dffbc3"></script><script type="text/javascript" async="" defer="" src="//statistics.shiyanbar.com/piwik.js"></script><script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/common.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery.validate.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/messages_zh.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery.form.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/layer.js"></script><link rel="stylesheet" href="file:///C:/Users/Administrator/Desktop/shiyanba/Scripts/skin/layer.css" id="layui_layer_skinlayercss" style="">
    <script type="text/javascript" src="/tp5/public/static/index/Scripts/laytpl.js"></script>


    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "//statistics.shiyanbar.com/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setDomains', '*.shiyanbar.com']);
            _paq.push(['setSiteId', '2']);
            _paq.push(['setUserId', ""]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();

        $(document).ready(function(){
            $("li.active span").css("margin-right","10px").css("margin-left","10px");
            $("li.active").removeClass();
        })
    </script>
</head>

<body>

<div class="nav-fixed">
    <div class="navContent" id="navContent">
        <img src="/tp5/public/static/index/images/logoa.jpg">
        <!--<span class="navLogo"><a href="/"></a></span>-->
        <ul class="nav" id="nav">
            <li><a href="<?php echo url('Index/index'); ?>">课程</a></li>
            <li class="cur"><a href="<?php echo url('Userinfo/index'); ?>">个人中心</a></li>
            <li><a href="javascript:;">问答</a></li>
            <li><a href="http://www.usaas.net" target="_blank">U-SaaS</a></li>
        </ul>
        <!--已登录begin-->
        <div class="loginedCol">
            <ul class="logined clearfix">
                <li class="my_message">
                    <a href="javascript:;" title="我的消息" target="_self">
                        <i class="msg_icon" style="display: inline;">25</i>
                        <span class="msg_txt" style="display: block;">我的消息</span>
                    </a>
                </li>
                <li><a href="#" style="color:#016ab5;">积分：<?php echo $userRes['score']; ?></a>
                </li>
                <li class="my_card">
                    <a id="myCard" class="text-ellipsis" href="#" target="_self">
                        <img src="<?php if($userRes['url'] != ''): ?>/tp5/public/static/index/uploads/<?php echo $userRes['url']; else: ?> http://www.shiyanbar.com/images/user_head/user_head6.png<?php endif; ?>" width="24" height="24">

                        <span style="text-overflow:ellipsis;white-space: nowrap;width:60px;"><?php echo \think\Request::instance()->session('user'); ?>    </span>
                          <span id="logout">退出登录</span>
                    </a>


                </li>

            </ul>
        </div>
        <!-- 已登录显示end -->

    </div>
</div>
<script>
    $("#logout").click(function()
    {
        window.location.href="<?php echo url('Index/logout'); ?>";
    })

</script>
<!-- nav end -->
<script>

    $("#logout").click(function()
    {
        window.location.href="<?php echo url('Index/logout'); ?>";
    })

    $(function () {
        //导航菜单效果
        $("#navContent #nav li").each(function (index) {
            var navhref = $(this).children("a").attr("href");
            var pathname = window.location.pathname;
            if (pathname.indexOf(navhref) > -1) {
                $(this).addClass('cur');
                $(this).siblings('li').removeClass('cur');
                return false;
            }
        });
    })
</script>
<div class="container">
    <div class="train_question_main">

        <!--内容左部分-->
        <ul class="page-nav clearfix">

            <li class="active"><a href="<?php echo url('Index/index'); ?>">训练题库</a></li>

        </ul>


        <!--排名弹出层-->
        <div class="pop_markW"><div class="pop_mark"></div></div>
        <div class="poplistbox clearfix" id="rank_pop">
            <div class="close"></div>
            <div class="mytop"><span>我的排行</span></div>
            <div id="myrank_div"></div>
        </div>
        <!--排名弹出层end-->
        <script id="mycontribute_temp" type="text/html">
            <ul class="showmetops">
                <li><span class="td">Rank</span>
                    <span class="td">昵称</span>
                    <span class="td">最佳类别</span>
                    <span class="td">综合贡献</span>
                    <span class="td">贡献值</span>
                </li>
                {{# for(var i=0,len = d.myrank.length;i<len;i++){ }}
                {{# if(d.myrank[i]['StudentID']==0){ }}
                <li class="me">
                    {{# }else{ }}
                <li>
                    {{# } }}
                    <span class="td"> {{# if(d.mynumber>5){ }}
                    {{ (d.mynumber-4) + i }}
                    {{# }else{ }}
                       {{ i+1 }}
                  {{# } }}
              </span>
                    <span class="td"><a href="/user/studentcourse/{{ d.myrank[i]['uuid'] }}" target="_blank" >{{ d.myrank[i]['NickName'] }}</a></span>
                    <span class="td">{{ d.myrank[i]['BestSpecies'] }}</span>
                    <span class="td">{{ d.myrank[i]['ExamTotal'] }}道</span>
                    <span class="td">{{ d.myrank[i]['ScoreTotal'] }}</span>
                </li>
                {{# } }}
            </ul>

            {{# if(d.mynumber==0){ }}
            <div class="notop_tips" style="display: block;">目前没有您的排名！！</div>
            {{# } }}
        </script>
        <script>

            function write_up_look(id)
            {
                window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fctf%2Fpractice";
            }



            /**
             *我的排名
             * @param {string} url   ajax 请求地址
             * @param {json} data     ajax 发送的数据
             * @param {string} tmp    加载模板id
             * @returns  html
             * */
            function myRankList(url,data,tmp)
            {
                $.ajax({
                    dataType:'JSON',
                    type:'POST',
                    url:url,
                    data:data,
                    beforeSend:function(XMLHttpRequest){
                        $(".pop_markW,.poplistbox").fadeIn(200);
                        $("#myrank_div").html('');
                        var moreload='<div id="loader"><img src="/tp5/public/static/index/Picture/loaded.gif" style="margin:50px auto;width:60px;display:block;"></div>';
                        $("#myrank_div").append(moreload);
                    },
                    success:function(data){

                        $("#myrank_div").find("#loader").remove();
                        if(data.myrank.length>0){
                            var gettpl = $(tmp).html();
                            laytpl(gettpl).render(data,function(html){
                                $("#myrank_div").append(html);
                            });

                        }else{
                            $("#myrank_div").html('<div style="margin:20px 0; overflow:hidden; text-align:center;width: 100%; height: 30px;line-height: 30px; color:red;">目前还没有排名!!</div>');
                        }
                    }
                });
            }
            $(function(){
                $(".page-banner-nav li").each(function(index){
                    var navhref=$(this).children("a").attr("href");
                    var pathname=window.location.pathname;
                    if(pathname.indexOf(navhref)>-1){
                        $(this).addClass('active');
                        $(this).siblings('li').removeClass('active');
                    }
                });
                $(".close").click(function() {
                    $(".pop_markW,.poplistbox").fadeOut(200);
                });
                //点击日期我的排名
                $("#ctf_rank01").click(function(){
                    if(0 >0){
                        var rank=$("#leftrank_tabNav").find("li.cur").attr('rank');
                        myRankList('/ctf/myranklist',{rank:rank},"#myrank_temp");
                    }else{
                        window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fctf%2Fpractice";
                    }
                });
                //我的题目贡献
                $("#ctf_rank02").click(function(){
                    var studentid=0;
                    if( studentid>0){
                        myRankList('/ctf/mycontributionranklist',{studentID:studentid},"#mycontribute_temp");
                    }else{
                        window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fctf%2Fpractice";
                    }
                });
                //我的writeup贡献
                $("#ctf_rank03").click(function(){
                    var studentid=0;
                    if( studentid>0){
                        myRankList('/ctf/mywriteupranklist',{studentID:studentid},"#mycontribute_temp");
                    }else{
                        window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fctf%2Fpractice";
                    }
                });
                //提交题目
                $("#creatctf_btn").click(function(){
                    window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fctf%2Fpractice";

                });

            })
        </script>
        <script>
            //周排行，月排行，季度排行，年度排行
            function rankList(rank){
                $.ajax({
                    dataType:'JSON',
                    type:'POST',
                    url:'/ctf/ranklist',
                    data:{rank:rank},
                    beforeSend:function(XMLHttpRequest){
                        $("#rank_ul").html('');
                    },
                    success:function(data){
                        if(data.ranklist.length>0){
                            var gettpl = $("#ranklist_temp").html();
                            laytpl(gettpl).render(data,function(html){
                                $("#rank_ul").append(html);
                            });
                        }else{
                            $("#rank_ul").html("<center>还没有榜单</center>")
                        }
                    }
                });
            }
            $(function(){
                rankList('week');
                /*周榜到年榜——切换*/
                $('.train_mle_hero1 .hero_rank1 li').click(function(){
                    var rank = $(this).attr('rank');
                    $(this).addClass("hover").siblings().removeClass("hover");
                    rankList(rank);
                })
            });
        </script>
        <script type="text/javascript"> //是一个栏目初始被点击
            // 0秒后模拟点击
            setTimeout(function() {
// IE
                if(document.all) {
                    document.getElementById("clickMe").click();
                }
// 其它浏览器
                else {
                    var e = document.createEvent("MouseEvents");
                    e.initEvent("click", true, true);
                    document.getElementById("clickMe").dispatchEvent(e);
                }
            }, 10);
        </script>
        <!--<a href="#" id="clickMe" onclick="alert('clicked');">link</a>-->
        <!--内容右部分-->
        <div class="train_m_right" style="margin-right:10%;">
            <!--右侧内容1——tabs切换-->
            <div class="train_mri_tabs" id="key_tabNav">
                <!--显示-->
                <ul class="train_mri_tabs_nav">
                    <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): $i = 0; $__LIST__ = $cateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li species_id="<?php echo $vo['id']; ?>" id="" class="hover" onclick=""><?php echo $vo['catename']; ?></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<li species_id="3" class="">密码学</li>-->
                    <!--<li species_id="1" class="">安全杂项</li>-->
                    <!--<li species_id="5" class="">逆向工程</li>-->
                    <!--<li species_id="6" class="">隐写术</li>-->
                    <!--<li species_id="2" class="hover">编程</li>-->
                    <!--<li species_id="4" class="">溢出</li>-->

                </ul>
                <!--切换的内容-->




<script>
    $("#show2").trigger("click");//默认触发点击搜索按钮
    $("#show2").eq(0).click();//默认第一个点击(例如UL的LI有多个可以点击的用于默认点击第一个用)
</script>
                <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): $i = 0; $__LIST__ = $cateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="tabs_show" style="display: none;" id="show<?php echo $vo['id']; ?>">
                    <div class="show_text">
                        <p><?php echo $vo['desc']; ?></p>
                        <div class="show_num"><span></span>参与人数：<b><?php echo $vo['click']; ?></b></div>
                    </div>
                    <div class="show_parameter">
                        <span class="not"><b class="bb red"></b>无人能解</span>
                        <span class="yes"><b class="bb blue"></b>我已解开</span>
                        <span class="notes">注：第1-3名解开题目额外加分20、10、5</span>
                    </div>
                    <div class="show_subject" id="tabinfo_child<?php echo $vo['id']; ?>"> <!--此处为CID 栏目ID-->
                        <div class="subject1">
                            <ul>
                                <?php
                                    $arr=$subjectData;
                                    foreach($arr as $k=>$v)
                                        {
                                            if($v['cid']==$vo['id'])
                                                {
                                                    $title = $v['title'];
                                                    $suID = $v['id'];
                                                if(isset($aid))
                                            {
                                                    foreach($aid as $v1)
                                                    {
                                                        if($v['id'] == $v1)
                                                        {
                                                            $v['class']='class="yes_blue"';
                                                        }
                                                    }
                                            }
                                                    echo "<li> <a href='index/index/subject?suID=$suID'";
                                                    if(isset($v['class']))
                                                    { echo $v["class"]; }
                                                    echo ">$title</a> </li>";
                                                }
                                        }
                                ?>

                            </ul>
                        </div>
                        <div style="clear: both"></div>
                        <div class="show_flip"></div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>



                <script type="text/html" id="species_temp">
                    {{# if(d.paginator.length>0){ }}
                    <div class="subject1" >
                        <ul>
                            {{# for(var i=0,len=d.paginator.length;i<len;i++){ }}
                            <li>
                                {{#  var class_name='';
                                if(d.paginator[i]['StudentCount']==0){
                                class_name ='not_red';
                                }

                                }}
                                <a href="/ctf/{{ d.paginator[i]['ExamCTFID'] }}" title="{{ d.paginator[i]['Title'] }}" target="_blank" class="{{ class_name }}">{{ d.paginator[i]['Title'] }}</a>
                            </li>
                            {{# } }}
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                    <div class="show_flip">
                        {{# if(d.paginator_previous){ }}
                        <a href="javascript:;" class="show_prev" onclick="javacript:speciesInfo({{ d.speciseID }},{{ d.paginator_previous }})">上一页</a>
                        {{# } }}
                        {{# if(d.paginator_next){ }}
                        <a href="javascript:;" class="show_next" onclick="javasript:speciesInfo({{ d.speciseID }},{{ d.paginator_next }})">下一页</a>
                        {{# } }}
                    </div>
                    {{# } }}
                </script>
            </div>

            <!--右侧内容2——最新评论-->
            <script id="commentlist_script" type="text/html">
                {{# for(var i =0,len = d.paginator.length;i<len;i++){ }}
                <li>
                    <div class="de_mle_topic">
                        <!--头像-->
                        <a target="_blank"  href="/user/studentcourse/{{ d.paginator[i].uuid }}" title="">
                            <div class="de_mle_topic_head">
                                {{# if(d.paginator[i]['RoleType']==2){ }}
                                <div class="plus x" title="学霸"></div>
                                {{# } }}
                                {{# if(d.paginator[i]['RoleType']==6){ }}
                                <div class="plus g" title="官方教师"></div>
                                {{# } }}
                                <img src="Picture/{{ d.paginator[i].image }}" alt="{{ d.paginator[i].NickName }}">
                                <div class="topic_title">{{ d.paginator[i].NickName }}</div>
                            </div>
                        </a>
                        <!--文本内容-->
                        <div class="topic_text">
                            <a href="/ctf/{{ d.paginator[i].ExamCTFID }}" target="_blank">  <p>{{ d.paginator[i].Content }}</p></a>
                        </div>
                        <div class="topic_text_time">
                            <span>{{ d.paginator[i].CommentTime }}</span>
                            <span class="text_reply">来自：<a href="/ctf/{{ d.paginator[i].ExamCTFID }}" target="_blank">{{ d.paginator[i].Title }}</a></span>
                        </div>
                    </div>
                </li>
                {{# } }}
            </script>
            <div class="train_mri_news_comment">
                <h3>最新评论<span>NEW</span></h3>
                <div class="news_comment">
                    <div class="de_mle_topic_main" id="comment_list_ul" style="margin-top: -100px">
                        <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="de_mle_topic">                 <!--头像-->
                            <a href="#" target="_blank">
                                <div class="de_mle_topic_head">
                                    <img src="/tp5/public/static/index/uploads/<?php echo $vo['url']; ?> ">
                                    <div class="topic_title" student_id="170137"><?php echo $vo['username']; ?></div>
                                </div>    </a>                 <!--文本内容-->
                            <div class="topic_text">
                                <p><?php echo $vo['comment']; ?></p>
                            </div>
                            <div class="topic_text_time">
                                <span><?php echo date("Y年m月d日",$vo['time']); ?></span>
                                <span class="text_reply" parent_id="30900" student_id="170137" student_name="jelly_zy">

                            </div>
                        </div>
                        <div style="clear: both"></div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                    <?php echo $comment->render(); ?>
                </div>
            </div>
        </div>


    </div>
    <script type="text/javascript">
        function speciesInfo(specise,page)  //栏目内容AJAX
        {
            // $.ajax({
            //     dataType:'JSON',
            //     type:'POST',
            //     url:'/ctf/exam-ctf-list',
            //     data:{species_id:specise,page:page},
            //     beforeSend:function(XMLHttpRequest){
            //         var moreload='<div id="loader"><img src="/tp5/public/static/index/Picture/loaded.gif" style="margin:50px auto;width:60px;display:block;"></div>';
            //         $("#tabinfo_child"+specise).html('');
            //         $("#tabinfo_child"+specise).append(moreload);
            //     },
            //     success:function(data){
            //         $("#tabinfo_child"+specise).find("#loader").remove();
            //         var gettpl = $("#species_temp").html();
            //         laytpl(gettpl).render(data,function(html){
            //             $("#tabinfo_child"+specise).append(html);
            //         });
            //
            //
            //     }
            //
            // });
        }
        function commentList(page){         //评论AJAX
            if ( typeof page == "undefined") {
                page = 1;
            }
            // $.ajax({
            //     dataType: 'JSON', //数据类型
            //     type: "POST",
            //     url: "/ctf/ctfcommentlist",
            //     data:{page:page},
            //     beforeSend:function(XMLHttpRequest){
            //         var moreload='<div id="loader"><img src="/tp5/public/static/index/Picture/loaded.gif" style="margin:200px auto;width:60px;display:block;"></div>';
            //         $("#comment_list_ul").html( moreload);
            //         $(".CTF_paging").hide();
            //     },
            //     success: function (data) {
            //         $("#comment_list_ul").find("#loader").remove();
            //
            //         if(data.paginator.length>0){
            //             $(".CTF_paging").show();
            //             var gettpl = $("#commentlist_script").html();
            //             laytpl(gettpl).render(data, function(html){
            //                 $("#comment_list_ul").append(html);//渲染
            //             });
            //             var pagelink =getPaginatorRedirect(data,'commentList');
            //             $(".CTF_paging").html(pagelink);
            //         }else{
            //             var text="<p style='text-align: center;'>暂无评论</p>";
            //             $("#comment_list_ul").html(text);
            //         }
            //
            //     },
            //     error:function(){
            //     }
            // });
        }
        $(function(){
            var speciesID =$("#key_tabNav").find("li.hover").attr("species_id");
            speciesInfo(speciesID,1);
            //滚动播放下，得分tab菜单效果
            $("#key_tabNav li").click(function(){
                $(this).addClass("hover").siblings().removeClass("hover");
                var $this = $(this);
                var $thisIndex = $this.index();
                $(".tabs_show").eq($thisIndex).show().siblings(".tabs_show").hide();
                var speciesID = $(this).attr("species_id");
                speciesInfo(speciesID,1);

            });
            //加载一页面评论
            commentList(1);

        })
    </script>


</div>
<!--footermain-->
<div class="footer-container clearfix">
    <div class="page-main">
        <p><a href="#">关于我们</a>|<a href="#">联系我们</a>|<a href="#">加入我们</a>|<a href="#">成为讲师</a>|<a href="#">友情链接</a>
            <span>意见反馈：pm@shiyanbar.com</span> <span>客服电话：010-82327658-8012</span></p>

        <p>地址：江西省南昌市天祥大道291号</p>

        <p class="copyright"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020740" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"></a></p>
    </div>

</div>

<!--footermain end-->


<ul class="fixedTips" id="fixedTips">
    <li><a href="javascript:;" id="toTop">置顶</a></li>
    <li><a target="_blank" href="/about/feed-back">反馈</a></li>
    <li><a href="http://shang.qq.com/wpa/qunwpa?idkey=e54b73a920f74055adc972931d742e0126412a95313c08188258b2fbb7cd02cc" target="_blank">QQ</a></li>
</ul>




<script>
    var _hmt = _hmt || [];
    (function () {
        _hmt.push(['_setCustomVar', 1, 'visitor', '游客', 1]);
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?34d6f7353ab0915a4c582e4516dffbc3";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    $("li").attr("4","true")
</script>

</body></html>