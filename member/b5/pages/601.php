<?php

$odds = odds_lottery_normal::getOdds($lottery_name,"(前三)和数");

echo '
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta content="telephone=no" name="format-detection"/>
    <title>和数</title>
    <link rel="stylesheet" href="/style/member/pitaya.css?31742ee"/>
    <link rel="stylesheet" href="/style/AlertBox.css?31742ee"/>
    <link rel="stylesheet" href="/style/ConfirmBox.css?31742ee"/>
    <link href="/pt/assets/css/jquery-ui-1.10.3.custom.min.css?63c179a" rel="stylesheet"/>
    <link href="/pt/assets/css/ui-tooltip.css?63c179a" rel="stylesheet"/>
    <link href="/TPL/C_TYPE_IPL/style/contextmenu.css?31742ee" rel="stylesheet"/>
    <link href="/TPL/C_TYPE_IPL/style/View.css?31742ee" rel="stylesheet"/>
    <link href="/TPL/C_TYPE_IPL/style/jquery.GoldUI.css?31742ee" rel="stylesheet"/>
    <link href="/TPL/C_TYPE_IPL/style/tpl.css?31742ee" rel="stylesheet"/>
    <link href="/TPL/C_TYPE_IPL/style/zindex.css?31742ee" rel="stylesheet"/>
    <!--[if lte IE 6]>
    <link href="/style/member/ie6.css?31742ee" rel="stylesheet"/>
    <![endif]-->
    <!--[if IE 7]>
    <link href="/style/member/ie7.css?31742ee" rel="stylesheet"/>
    <![endif]-->
    <!--[if IE 8]>
    <link href="/style/member/ie8.css?31742ee" rel="stylesheet"/>
    <script src="/js/ie8.js?31742ee"></script>
    <![endif]-->
    <!--[if IE 9]>
    <link href="/style/member/ie9.css?31742ee" rel="stylesheet"/>
    <![endif]-->
    <script src="/inte/js/Lang.js?key=charset&amp;31742ee"></script>
    <script src="/inte/js/Lang/package.js?31742ee"></script>
    <script src="/inte/js/overMenu.js?31742ee"></script>
    <script src="/inte/js/memberCenter.js?31742ee"></script>
    <script src="/inte/js/jquery.GoldUI.js?31742ee"></script>
    <script src="/inte/js/timeclock.js?31742ee"></script>
    <script src="/inte/js/zindexSort.js?31742ee"></script>
    <script src="/js/jquery-1.7.1.js?31742ee"></script>
    <script src="/pt/assets/js/lib/jquery-ui-1.10.3.custom.min.js?63c179a"></script>
    <script src="/pt/assets/js/lib/sound.js?63c179a"></script>
    <script src="/inte/js/AlertBox.js?31742ee"></script>
    <script src="/inte/js/ConfirmBox.js?31742ee"></script>
    <script src="/js/marquee.js?31742ee"></script>
    <script src="/js/C2R_B5.js?31742ee"></script>
    <script src="/js/jquery.contextmenu.js?31742ee"></script>
    <script src="/js/View.js?31742ee"></script>
    <script src="/js/mobileStyle.js?31742ee"></script>
    <script src="/js/PC/b5.js?31742ee"></script>
    <script src="/js/PC/b5Order.js?31742e5"></script>
    <script src="/js/D3.js?31742ee"></script>
    <script src="/inte/js/superfish.js?31742ee"></script>
    <script src="/inte/js/group_menu.js?31742ee"></script>
    <!--[if lte IE 8]>
    <script src="/js/html5.js?31742ee"></script>
    <script src="/inte/js/respond.src.js?31742ee"></script>
    <![endif]-->
    <!--[if IE 6]>
    <script src="/js/TouchView.js?31742ee"></script>
    <![endif]-->
    <script>
        var bbwin;
        var aPortfolio = {"M": "口XX", "C": "X口X", "U": "XX口", "MC": "口口X", "MU": "口X口", "CU": "X口口", "MCU": "口口口"};
        var aOEOUPC = {"ODD": "单", "EVEN": "双", "OVER": "大", "UNDER": "小", "PRIME": "质", "COMPO": "合"};
        $().ready(function () {
            self.zindexSort.setup();
            $("#ui-btn-games > ul").superfish();
            $("#ui-btn-games > ul > li > a:not(.sf-no-ul)").bind("click", function () {
                return false;
            });
            //self.group_menu.install($("#wager_groups"));
            $("#wager_groups a").tooltip();
            //ViewBox
            self.ViewBox.install($("ul#ui-btn-features > li > a:not(.logout), #game_result"));
            if (document.getElementById("content") && document.getElementById("rde-contextmenu")) {
                var _opt = [];
                $("#rde-contextmenu > a").each(function (i) {
                    var me = this;
                    var _action = function () {
                        self.ViewBox.single(me)
                    };
                    var _icon = (this.getAttribute("data-icon")) ? this.getAttribute("data-icon") : "/TPL/pitaya/images/wi0009-16.gif";
                    _opt.push({text: this.title, icon: _icon, alias: this.title, action: _action });
                });
                var _option = { width: 150, items: _opt };
                $("#content").contextmenu(_option);
            }
            self.timeclock.install(document.getElementById("HKTime"), document.getElementById("iTime"));
            var _opt = {
                showTag: document.getElementById("Game"),
                FCDL: $("#FCDL"),
                FCDH: $("#FCDH"),
                FCDS: $("#FCDS"),
                hall: false,
                inner_box: $("#content"),
                menu: $("#wager_groups a"),
                ticked: document.getElementById("jjomj"),
                cname: document.getElementById("c_rtype"),
                ynum: document.getElementById("YearNum"),
                info_ticked: $("#B5D2quick > p#jjomj")
            }
            self.GameB5.install(_opt, 1);
            $.ajax({
                url: "/member/select_CQ.php",
                type: "GET",
                dataType: "script"
            });
            ccMarquee("marquee");
        })
    </script>
</head>
<body>
<div id="ui-marquee">
    <div class="marquee"><span id="Msg"></span></div>
</div>
<div id="box_body" class="bg2yellow">
<div id="box_range">
<div id="header">
    <h1>sk</h1>

    <div class="game-nav">
        <div id="ui-btn-games">
            <ul class="layer1 sf-menu bg2yellow">
                <li class="layer1-li">
                    <a class="layer1-a sf-no-ul" href="/member/lt/">
                        <b></b>
                        六合彩
                    </a>
                </li>
                <li class="layer1-li">
                    <a class="layer1-a" href="#NORMAL">
                        <b></b>
                        一般彩票
                    </a>
                    <ul class="layer2" style="display:none">
                        <li>
                            <a href="/member/b3/b3.php?gtype=D3&rtype=W1">3D彩</a>
                        </li>
                        <li>
                            <a href="/member/b3/b3.php?gtype=P3&rtype=W1">排列三</a>
                        </li>
                    </ul>
                </li>
                <li class="layer1-li">
                    <a class="layer1-a" href="#TT">
                        <b></b>
                        时时彩
                    </a>
                    <ul class="layer2" style="display:none">
                        <li >
                            <a href="/member/b3/b3.php?gtype=T3&rtype=W1">上海时时乐</a>
                        </li>
                        <li >
                            <a href="/member/b5/b5.php?gtype=CQ&rtype=605">重庆时时彩</a>
                        </li>
                        <li >
                            <a href="/member/b5/b5.php?gtype=TJ&rtype=605">天津时时彩</a>
                        </li>
                        <li >
                            <a href="/member/b5/b5.php?gtype=JX&rtype=605">江西时时彩</a>
                        </li>
                    </ul>
                </li>
                <li class="layer1-li">
                    <a class="layer1-a" href="#FF">
                        <b></b>
                        分分彩
                    </a>
                    <ul class="layer2" style="display:none">
                        <li>
                            <a href="/pt/mem/order/GXSF">广西十分彩</a>
                        </li>
                        <li>
                            <a href="/pt/mem/order/GDSF">广东十分彩</a>
                        </li>
                        <li>
                            <a href="/pt/mem/order/TJSF">天津十分彩</a>
                        </li>
                        <li>
                            <a href="/pt/mem/order/GD11">广东十一选五</a>
                        </li>
                        <li>
                            <a href="/pt/mem/order/BJPK">北京PK拾</a>
                        </li>
                    </ul>
                </li>
                <li class="layer1-li">
                    <a class="layer1-a" href="#KENO">
                        <b></b>
                        KENO
                    </a>
                    <ul class="layer2" style="display:none">
                        <li>
                            <a href="/pt/mem/order/BJKN">北京快乐8</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <ul id="ui-btn-features">
        <li style="color:yellow;font-weight:bold;padding-top:4px;font-size:12px;">功能:</li>
        <li>
            <a style="padding-top: 4px;" data-callback="self.memberCenter.history" title="下注状况"
               data-url="/member/today/today_wagers.php?gtype='.$gType.'">
                <span style="color: white;">下注状况</span>
            </a>
        </li>
        <li>
            <a style="padding-top: 4px;" data-callback="self.memberCenter.historyCount" title="帐户历史"
               data-url="/member/history/history_count.php?gtype='.$gType.'">
                <span style="color: white;">下注历史</span>
            </a>
        </li>
        <li>
            <a style="padding-top: 4px;" data-callback="self.memberCenter.rule" title="规则说明"
               data-url="/member/roul_lt_tw.php?gtype='.$gType.'">
                <span style="color: white;">规则</span>
            </a>
        </li>
        <li>
            <a style="padding-top: 4px;" data-callback="self.memberCenter.gameResult" title="开奖结果"
               data-url="/member/final/LT_result.php?gtype='.$gType.'">
                <span style="color: white;">开奖</span>
            </a>
        </li>
        <li>
            <a style="padding-top: 4px;" title="系统公告" data-url="/member/msg_log.php?gtype='.$gType.'">
                <span style="color: white;">公告</span>
            </a>
        </li>
        <li>
            <a style="padding-top: 4px;" data-callback="self.memberCenter.quickGold" title="快选金额"
               data-url="/member/account/QuickGold.php?gtype='.$gType.'">
                <span style="color: white;font-weight: normal;">快选金额</span>
            </a>
        </li>
    </ul>
</div>
<div id="main">
<div id="left">
    <div id="clock"><b></b><span id="HKTime"></span></div>
    <div id="user_info">
        <dl class="block">
            <dt><span class="icon"></span>会员资料</dt>
            <dd>帐号 <span id="login-username"></span></dd>
            <dd>额度 <span id="bet-credit"></span></dd>
            <dd class="footer"></dd>
        </dl>
    </div>
    <div id="message_box" style="display:none">
        <div class="inner"></div>
        <div class="footer"></div>
    </div>
</div>
<div id="content">
<h2>
    <b></b>
    <span>'.$lottery_name.'</span>
</h2>

<div id="content_inner">
    <div style="display: none;" id="c_rtype" class="GameName"></div>
    <div>
        '.$time_info_page.'
        <div id="wager_groups" class="'.$gType.'">

            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=535"  title="两面">两面</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=601" class="NowPlay" title="和数">和数</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=592"  title="和尾数">和尾数</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=605"  title="一字">一字</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=616"  title="二字">二字</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=514" title="三字" style="display:none">三字</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=517"  title="一字定位">一字定位</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=522"  title="二字定位">二字定位</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=532" title="三字定位" style="display:none">三字定位</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=595"  title="组选三">组选三</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=598"  title="组选六">组选六</a>
            <a href="/member/b5/b5.php?gtype='.$gType.'&amp;rtype=589"  title="跨度">跨度</a>
        </div>
    </div>
</div>
<!--rtype选择-->
<div id="arrowLeft"></div>
<div id="tab" >
    <ul>
        <li class="onTagClick"><span class="601"><b>前三</b></span></li>
        <li class="unTagClick"><span class="602"><b>中三</b></span></li>
        <li class="unTagClick"><span class="603"><b>后三</b></span></li>
        <li class="unTagClick"><span class="620"><b>万仟</b></span></li>
        <li class="unTagClick"><span class="621"><b>万佰</b></span></li>
        <li class="unTagClick"><span class="622"><b>万拾</b></span></li>
        <li class="unTagClick"><span class="623"><b>万个</b></span></li>
        <li class="unTagClick"><span class="624"><b>仟佰</b></span></li>
        <li class="unTagClick"><span class="625"><b>仟拾</b></span></li>
        <li class="unTagClick"><span class="626"><b>仟个</b></span></li>
        <li class="unTagClick"><span class="627"><b>佰拾</b></span></li>
        <li class="unTagClick"><span class="628"><b>佰个</b></span></li>
        <li class="unTagClick"><span class="629"><b>拾个</b></span></li>
        <li id="space"></li>
    </ul>
</div>
<div id="arrowRight"></div>
<div id="shownum" style="display:none;">
    <div id="shownum2">已勾选：0笔</div>
    <div id="shownumH"></div>
    <div id="shownumC"></div>
    <div id="shownumS"></div>
</div>
<div id="B5W1quick_Tbl" style="display:block">
    <div id="qkGoldDivW1" class="quick_betnum_style">
        下注金额 :
        <input type="text" min="0" max="99999999" name="qkGoldW1" id="qkGoldW1" pattern="[0-9]*" placeholder="下注金额"/>
    </div>
    <div id="B5W1quick" class="quick_option_style">
        <p style="float:none">
            <a class="activeA" data-index="odd">单</a>
            <a class="activeA" data-index="even">双</a>
            <a class="activeA" data-index="over">大</a>
            <a class="activeA" data-index="under">小</a>
            <a class="activeA" data-index="prime">质</a>
            <a class="activeA last" data-index="compo">合</a>
        </p>
    </div>
</div>
<div id="GrpBtnB5" style="display:none">
    <div id="B5W3quick" class="InfoBar">
    </div>
    <div id="B5D3quick" class="InfoBar">
    </div>
    <div id="B5D2quick" class="InfoBar">
        <div id="qkGoldDiv" class="quick_betnum_style">
            下注金额 :
            <input type="text" min="0" max="99999999" name="qkGold" id="qkGold" pattern="[0-9]*" placeholder="下注金额"/>
        </div>
        <p>
            <b class="first">头</b>
            <a class="activeA">0</a>
            <a class="activeA">1</a>
            <a class="activeA">2</a>
            <a class="activeA">3</a>
            <a class="activeA">4</a>
            <a class="activeA">5</a>
            <a class="activeA">6</a>
            <a class="activeA">7</a>
            <a class="activeA">8</a>
            <a class="activeA last">9</a>
        </p>

        <p id="jjomj"></p>

        <p>
            <b class="first">尾</b>
            <a class="activeB">0</a>
            <a class="activeB">1</a>
            <a class="activeB">2</a>
            <a class="activeB">3</a>
            <a class="activeB">4</a>
            <a class="activeB">5</a>
            <a class="activeB">6</a>
            <a class="activeB">7</a>
            <a class="activeB">8</a>
            <a class="activeB last">9</a>
        </p>
    </div>
</div>
<div id="Game">

<form id="formB5" name="D3_022" action="/member/quickB5_act.php" method="post" onsubmit="return false">
<input type="hidden" name="gid" value="352278" />
<input type="hidden" name="MyRtype" value="601" />
<input type="hidden" name="gtype" value="'.$gType.'" />

<input type="hidden" name="gold_gmax" class="601100" value="'.$maxMoney.'" />
<input type="hidden" name="gold_gmin" class="601100" value="'.$lowestMoney.'" />
<input type="hidden" name="SC" class="601100" value="50000" />
<input type="hidden" name="SO" class="601100" value="200" />

<input type="hidden" name="Maxcredit" value="'.$userMoney.'" />
<input type="hidden" id="D3type" name="D3type" value="A" />
<div class="InfoBar">
    <div class="Range" style="display:none">
        <span  class="On"><input type="radio" name="jjomj" value="0" checked="checked"/> 000~199</span>
        <span ><input type="radio" name="jjomj" value="2"/>200~399</span>
        <span ><input type="radio" name="jjomj" value="4"/>400~599</span>
        <span ><input type="radio" name="jjomj" value="6"/>600~799</span>
        <span ><input type="radio" name="jjomj" value="8"/>800~999</span>
    </div>
    <input type="hidden" name="Start" value="0" />
</div>
<div class="round-table">
<table class="GameTable">
<tr class="title_line">
    <td>号码</td>
    <td>赔率</td>
    <td>金额</td>
    <td>号码</td>
    <td>赔率</td>
    <td>金额</td>
    <td>号码</td>
    <td>赔率</td>
    <td>金额</td>
    <td>号码</td>
    <td>赔率</td>
    <td>金额</td>
    <td>号码</td>
    <td>赔率</td>
    <td>金额</td>
</tr>
<tr>

    <td class="num" style="width:30px">
        <label for="601-0">
            0
        </label>
        <input type="hidden" name="aConcede[]" value="601-0"/>
    </td>
    <td class="odds">
        <label for="601-0" class="odds">
            '.$odds["h0"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h0"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-0"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-1">
            1
        </label>
        <input type="hidden" name="aConcede[]" value="601-1"/>
    </td>
    <td class="odds">
        <label for="601-1" class="odds">
            '.$odds["h1"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h1"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-1"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-2">
            2
        </label>
        <input type="hidden" name="aConcede[]" value="601-2"/>
    </td>
    <td class="odds">
        <label for="601-2" class="odds">
            '.$odds["h2"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h2"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-2"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-3">
            3
        </label>
        <input type="hidden" name="aConcede[]" value="601-3"/>
    </td>
    <td class="odds">
        <label for="601-3" class="odds">
            '.$odds["h3"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h3"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-3"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-4">
            4
        </label>
        <input type="hidden" name="aConcede[]" value="601-4"/>
    </td>
    <td class="odds">
        <label for="601-4" class="odds">
            '.$odds["h4"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h4"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-4"/>
    </td>

</tr>
<tr>
    <td class="num" style="width:30px">
        <label for="601-5">
            5
        </label>
        <input type="hidden" name="aConcede[]" value="601-5"/>
    </td>
    <td class="odds">
        <label for="601-5" class="odds">
            '.$odds["h5"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h5"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-5"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-6">
            6
        </label>
        <input type="hidden" name="aConcede[]" value="601-6"/>
    </td>
    <td class="odds">
        <label for="601-6" class="odds">
            '.$odds["h6"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h6"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-6"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-7">
            7
        </label>
        <input type="hidden" name="aConcede[]" value="601-7"/>
    </td>
    <td class="odds">
        <label for="601-7" class="odds">
            '.$odds["h7"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h7"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-7"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-8">
            8
        </label>
        <input type="hidden" name="aConcede[]" value="601-8"/>
    </td>
    <td class="odds">
        <label for="601-8" class="odds">
            '.$odds["h8"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h8"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-8"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-9">
            9
        </label>
        <input type="hidden" name="aConcede[]" value="601-9"/>
    </td>
    <td class="odds">
        <label for="601-9" class="odds">
            '.$odds["h9"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h9"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-9"/>
    </td>

</tr>
<tr>
    <td class="num" style="width:30px">
        <label for="601-10">
            10
        </label>
        <input type="hidden" name="aConcede[]" value="601-10"/>
    </td>
    <td class="odds">
        <label for="601-10" class="odds">
            '.$odds["h10"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h10"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-10"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-11">
            11
        </label>
        <input type="hidden" name="aConcede[]" value="601-11"/>
    </td>
    <td class="odds">
        <label for="601-11" class="odds">
            '.$odds["h11"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h11"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-11"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-12">
            12
        </label>
        <input type="hidden" name="aConcede[]" value="601-12"/>
    </td>
    <td class="odds">
        <label for="601-12" class="odds">
            '.$odds["h12"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h12"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-12"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-13">
            13
        </label>
        <input type="hidden" name="aConcede[]" value="601-13"/>
    </td>
    <td class="odds">
        <label for="601-13" class="odds">
            '.$odds["h13"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h13"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-13"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-14">
            14
        </label>
        <input type="hidden" name="aConcede[]" value="601-14"/>
    </td>
    <td class="odds">
        <label for="601-14" class="odds">
            '.$odds["h14"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h14"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-14"/>
    </td>

</tr>
<tr>
    <td class="num" style="width:30px">
        <label for="601-15">
            15
        </label>
        <input type="hidden" name="aConcede[]" value="601-15"/>
    </td>
    <td class="odds">
        <label for="601-15" class="odds">
            '.$odds["h15"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h15"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-15"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-16">
            16
        </label>
        <input type="hidden" name="aConcede[]" value="601-16"/>
    </td>
    <td class="odds">
        <label for="601-16" class="odds">
            '.$odds["h16"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h16"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-16"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-17">
            17
        </label>
        <input type="hidden" name="aConcede[]" value="601-17"/>
    </td>
    <td class="odds">
        <label for="601-17" class="odds">
            '.$odds["h17"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h17"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-17"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-18">
            18
        </label>
        <input type="hidden" name="aConcede[]" value="601-18"/>
    </td>
    <td class="odds">
        <label for="601-18" class="odds">
            '.$odds["h18"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h18"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-18"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-19">
            19
        </label>
        <input type="hidden" name="aConcede[]" value="601-19"/>
    </td>
    <td class="odds">
        <label for="601-19" class="odds">
            '.$odds["h19"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h19"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-19"/>
    </td>

</tr>
<tr>
    <td class="num" style="width:30px">
        <label for="601-20">
            20
        </label>
        <input type="hidden" name="aConcede[]" value="601-20"/>
    </td>
    <td class="odds">
        <label for="601-20" class="odds">
            '.$odds["h20"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h20"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-20"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-21">
            21
        </label>
        <input type="hidden" name="aConcede[]" value="601-21"/>
    </td>
    <td class="odds">
        <label for="601-21" class="odds">
            '.$odds["h21"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h21"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-21"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-22">
            22
        </label>
        <input type="hidden" name="aConcede[]" value="601-22"/>
    </td>
    <td class="odds">
        <label for="601-22" class="odds">
            '.$odds["h22"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h22"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-22"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-23">
            23
        </label>
        <input type="hidden" name="aConcede[]" value="601-23"/>
    </td>
    <td class="odds">
        <label for="601-23" class="odds">
            '.$odds["h23"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h23"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-23"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-24">
            24
        </label>
        <input type="hidden" name="aConcede[]" value="601-24"/>
    </td>
    <td class="odds">
        <label for="601-24" class="odds">
            '.$odds["h24"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h24"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-24"/>
    </td>

</tr>
<tr>
    <td class="num" style="width:30px">
        <label for="601-25">
            25
        </label>
        <input type="hidden" name="aConcede[]" value="601-25"/>
    </td>
    <td class="odds">
        <label for="601-25" class="odds">
            '.$odds["h25"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h25"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-25"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-26">
            26
        </label>
        <input type="hidden" name="aConcede[]" value="601-26"/>
    </td>
    <td class="odds">
        <label for="601-26" class="odds">
            '.$odds["h26"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h26"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-26"/>
    </td>

    <td class="num" style="width:30px">
        <label for="601-27">
            27
        </label>
        <input type="hidden" name="aConcede[]" value="601-27"/>
    </td>
    <td class="odds">
        <label for="601-27" class="odds">
            '.$odds["h27"].'
        </label>
        <input type="hidden" name="aOdds[]" value="'.$odds["h27"].'"/>
    </td>
    <td class="odds" style="width:60px">
        <input type="text" pattern="[0-9]*" min="0" max="99999999" class="G" name="gold[]" id="601-27"/>
    </td>

</tr>
</table>
</div>
<div id="SendB5">
    <span class="credit">下注金额:<b id="total_bet">0.00</b></span>
    <input type="button" name="Cancel" value="取消" class="cancel_cen" />&nbsp;&nbsp;
    <input type="button" name="SubmitA" value="确定" class="order" />
</div>
<div id="BetInfo">

</div>
</form>
</div>
<input type="hidden" id="sRtype" name="sRtype" value="601"/>
<input type="hidden" id="sGtype" name="sGtype" value="'.$gType.'"/>
<input type="hidden" name="iTime" id="iTime" value="1393815949"/>
</div>
</div>
</div>
</div>
<div id="ding"></div>
<div id="Tips" style="display:none;">当用鼠标压住要下注的球号赔率时，版面右方会出现下注的金额区块，可直接将要下注的号码拉到下注的金额上面下注</div>
<div id="Tips2" style="display:none;">当用鼠标压住要下注的球号时，版面右方会出现下注的金额区块，可直接将要下注的号码拉到下注的金额上面下注</div>
<div id="BlackBG"></div>
</body>
</html>
';