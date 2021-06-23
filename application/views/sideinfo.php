<?php
$green=$session->plus?'green':'gold';
$hero = $herodata=$session->heroD;

$units = $database->getUnit($herodata['wref']);

$ttitle=constant("TRIBE".$session->tribe);
$aid = $session->alliance;
if($aid){
$allianceinfoMY = $database->getAlliance($aid);
}
if($herodata['dead']==1){
    $healtstat = '101';
    $status = SIDEINFO_HERO1;
}

/*
elseif($herodata['dead']==0 && $herodata['health']<100){
    $healtstat = '101Regenerate';
    $status = SIDEINFO_HERO1;
}*/
elseif($herodata['dead']==0){
    if($units['u11']!=0){
        $healtstat = '100';
    }else{
        $healtstat = '9';
    }
    $status = SIDEINFO_HERO2;
}
foreach($session->vvillages as $vi){
    if($herodata['wref']==$vi['wref']){
        $vname=$vi['name'];
        break;
    }
}

if($herodata['dead']==0){

    if($units['u11']!=0){
        $where2=SIDEINFO_HERO3.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>.';
        $where=SIDEINFO_HERO4.' '.$vname.'.';
        $where2=SIDEINFO_HERO4.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>.';
        $position = SIDEINFO_HERO5H;
    }
    elseif($units['u11']==0){
        $position = SIDEINFO_HERO5;
        $where=SIDEINFO_HERO6.' «'.$vname.'». '.SIDEINFO_HERO5;
        $where2=SIDEINFO_HERO6.' «<a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>» '.SIDEINFO_HERO7;
    }
}
else{
    $position = SIDEINFO_HERO1;
    $where=SIDEINFO_HERO6.' «'.$vname.'». '.SIDEINFO_HERO7;
	$where2=SIDEINFO_HERO4.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>';
}



/*<div id="sidebarBoxHero" class="sidebarBox toggleable <?php if($_COOKIE['box']==1){echo 'expanded';}else{ echo 'collapsed';}?> ">*/

?>



<div id="sidebarBeforeContent" class="sidebar beforeContent">
<div id="sidebarBoxHero" class="sidebarBox toggleable">
    <div class="sidebarBoxBaseBox">
        <div class="baseBox baseBoxTop">
            <div class="baseBox baseBoxBottom">
                <div class="baseBox baseBoxCenter"></div>
            </div>
        </div>
    </div>
    <div class="sidebarBoxInnerBox">
        <div class="innerBox header ">
            <button id="heroImageButton" onclick="window.location.href='hero_inventory.php';" class="heroImageButton " type="button" title="<?=SIDEINFO_HERO8;?>||<?=$where?>">
                <img class="heroImage" src="hero_image.php?uid=<?php echo $session->uid; ?>&size=sideinfo&<?php echo $heroF->heroHash(); ?>" alt="">
            </button>
            <?php
            $availiblepoint = $hero['level'] * 4;
            $freepoints = $availiblepoint - ($hero['power'] + $hero['offBonus'] + $hero['defBonus'] + $hero['product']+1);
            if($session->heroD['dead']==1){?>
            <div class="bigSpeechBubble dead">
            <img src="img/x.gif" alt="">
            </div>
            <?php }elseif($freepoints>0){?>
                <div class="bigSpeechBubble levelUp">
                <img src="img/x.gif" alt="">
                </div>
        <?php    } ?>
            <?php //todo стаinки аукциона
?>            <div class="playerName">
                <img src="img/x.gif" class="nationBig nation<?php echo $session->tribe; ?>" alt="<?=$ttitle?>" title="<?=$ttitle?>"><?php echo $session->username; ?></div>
				<div class="buttonsWrapper">
            <button type="button" id="button5225ee283b159" class="layoutButton auctionWhite green  " onclick="return false;" title="">
                <div class="button-container addHoverClick ">
                    <i></i>
                </div>
            </button>

            <script type="text/javascript">


                if($('button5225ee283b159'))
                {
                    $('button5225ee283b159').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":true,"boxId":"hero","disabled":false,"speechBubble":"","class":"","id":"button5225ee283b159","redirectUrl":"hero_auction.php","redirectUrlExternal":""}]);
                    });
                }
            </script>
            <?php
            $adventures = $database->query("SELECT end FROM adventure WHERE `uid`='".$session->uid."' AND `end` = 0 and `time` > '".time()."'");
            ?>
            <button type="button" id="button5225ee283b28a" class="layoutButton adventureWhite green  "  title="<?=SIDEINFO_HERO9;?>:||<?=SIDEINFO_HERO10;?>: <?php echo count($adventures); ?>" onclick="return false;">
                <div class="button-container addHoverClick ">
                    <i></i>
                </div>
                <?php
                if(count($adventures) > 0){
                    ?>
                    <div class="speechBubbleContainer ">
                        <div class="speechBubbleBackground">
                            <div class="start">
                                <div class="end">
                                    <div class="middle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="speechBubbleContent"><?php echo count($adventures); ?></div>
                    </div>
                <?php } ?>
                <div class="clear"></div>	</button>

            <script type="text/javascript">

                if($('button5225ee283b28a'))
                {
                    $('button5225ee283b28a').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":true,"boxId":"hero","disabled":false,"speechBubble":"<?php echo count($adventures); ?>","class":"","id":"button5225ee283b28a","redirectUrl":"hero_adventure.php","redirectUrlExternal":""}]);
                    });
                }
            </script>		
			</div>
			</div>

        <div class="innerBox content">
            <div class="heroStatusMessage">
                <img alt="<?php echo $status; ?>" src="img/x.gif" class="heroStatus<?php echo $heroF->getHeroStatus(); ?>">
                <?php /*echo $position;*/ echo constant('herostatus'.$heroF->getHeroStatus()); ?></div>

            <div class="progressBars">
                <div class="heroHealthBarBox alive" title="<?=SIDEINFO_HERO11.': '.round($herodata['health']); ?>%">
					<a href="hero.php?t=1">
						<img src="img/x.gif" class="injury" >
					</a>
                    <div class="bar" style="width:<?php echo $herodata['health']; ?>%" >&nbsp;</div>
                </div>

                <div class="heroXpBarBox" title="<?=SIDEINFO_HERO12.': '.$hero['experience']; ?>">
					<a href="hero.php?t=1">
						<img src="img/x.gif" class="iExperience" >
					</a>
                    <div class="bar" style="width:<?php
                                if($session->heroD['level']!=100){
                                    $width = round(100 * (($hero_levels[$session->heroD['level']] - $session->heroD['experience']) /($hero_levels[$session->heroD['level']] - $hero_levels[$session->heroD['level'] + 1])), 1);
                                    if($width >= 0){
                                        echo $width;
                                    }else{
                                        echo 0;
                                    }
                                
                                }else { echo '100';} ?>%">&nbsp;</div>
                </div>
            </div>		</div>
			<div class="innerBox footer">
			<button type="button" class="toggle" onclick="if (!window.__cfRLUnblockHandlers) return false; ">
                <div class="button-container addHoverClick">
                                        <svg class="toggle-caret" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 32.9">
                        <style>
                            .caret{fill:url(#caret_to_bottom_fill); stroke:url(#caret_to_bottom_stroke);}
                        </style>
                        <linearGradient id="caret_to_bottom_fill" x1="22.4983" x2="22.4983" y1="26.6416" y2="8.0344" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1 0 0 -1 0 33.833)">
                            <stop offset=".1147" stop-color="#DADED4"></stop>
                            <stop offset=".1452" stop-color="#F9FBF7"></stop>
                            <stop offset=".1551" stop-color="#FFFFFF"></stop>
                        </linearGradient>

                        <linearGradient id="caret_to_bottom_stroke" x1="22.4983" x2="22.4983" y1="26.6416" y2="8.0344" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1 0 0 -1 0 33.833)">
                            <stop offset="0" stop-color="#7C9A58"></stop>
                            <stop offset=".2" stop-color="#60A200"></stop>
                            <stop offset=".4" stop-color="#63A500"></stop>
                            <stop offset="1" stop-color="#7DB211"></stop>
                        </linearGradient>
                        <path class="down_glow" d="M39 5.9c-.4-.5-1-.8-1.5-.9H7.4c-.6 0-1.1.2-1.5.9C5.5 6.3 5 7.7 5 9c0 .7 0 2.5.5 3.1l15.1 15.1c.4.5 1.3.7 1.9.7.6 0 1.5-.2 2-.7l14.9-15c.4-.5.6-2 .6-2.7.1-1.2-.5-3.4-1-3.6z"></path>
                        <path class="up_glow" d="M39.2,8.2c-0.4-0.5-1.6-1-2.1-1.1l-29.2,0c-0.6,0-1.6,0.4-2.1,1C5.4,8.6,5,9.7,5,11 c0,0.7,0.1,3.3,1.3,4.8l13,13.1c0.4,0.5,2.5,1,3.1,1c0.6,0,2.7-0.5,3.8-1.5L38.4,16c1.4-1.4,1.6-3.8,1.6-4.5 C40.1,10.3,39.9,8.7,39.2,8.2z"></path>
                        <path class="topshadow" d="M39.8 10.8c.5-1.7.1-5.7-2.5-5.8H7.2c-2.4.1-2.4 4.6-2.1 5.6 0 .1.2.1.2.1.8-.2.9-2 3.4-2.1 6.8-.1 22.1 0 28.5.1 2.6.1 2.1 1.9 2.6 2.1z"></path>
                        <path class="bottomshadow" d="M39.4,8.9C39,8.5,38.5,8.3,38,8.2L7.1,8.3C6.5,8.3,6,8.5,5.6,9C5.2,9.4,5,9.9,5,10.5 c0,0.6-0.2,3.6,1.7,5.6l12.7,12.8c1,0.7,2,1,3.1,1c1.1,0,2.7-0.6,3.8-1.5L38.4,16c1.9-2.1,1.6-5.1,1.6-5.7 C40.1,9.8,39.9,9.3,39.4,8.9z"></path>
                        <path class="caret" d="M38.3 8.8c-.4-.4-.9-.6-1.4-.7H8.1c-.6 0-1.1.2-1.5.7-.4.4-.6.9-.6 1.5s.2 1 .6 1.5L21 26.2c.4.4.9.6 1.5.6s1-.2 1.5-.6l14.3-14.5c.4-.4.6-.9.6-1.5.1-.5-.1-1-.6-1.4z"></path>
                    </svg>
                                    </div>
			</button>

			<script type="text/javascript">
				window.addEvent('domready', function () {
					Travian.Translation.add(
						{
							'hero_collapsed': 'Show information',
							'hero_expanded': 'Hide info'
						});

					var box = $('sidebarBoxHero');
					box.down('button.toggle').addEvent('click', function (e) {
						Travian.Game.Layout.toggleBox(box, 'travian_toggle', 'hero');
					});
				});
			</script>
		</div>    </div>
</div>
<?php 
    $villmas=implode(',',$session->villages);
    $fff = array();
    $posolstvo=0;
    $fdata=$database->query("SELECT * FROM `fdata` WHERE vref IN (".$villmas.")");
    $link='';
    foreach($fdata as $f){
        $fff[$f['vref']]=$f;
        for($i=19;$i<40;$i++){
            if($f['f'.$i.'t']==18){
                $new=$database->getTypeLevel(18,$f['vref'],$f);
                $posolstvo=$posolstvo<$new?$new:$posolstvo;
                if($session->alliance != 0){ 
                    $link="window.location.href='build.php?id=".$i."&newdid=".$f['vref']."';";
                }
                break;
            }
        }


    }
//if($session->alliance != 0){ 
    ?>
<div id="sidebarBoxAlliance" class="sidebarBox   ">
    <div class="sidebarBoxBaseBox">
        <div class="baseBox baseBoxTop">
            <div class="baseBox baseBoxBottom">
                <div class="baseBox baseBoxCenter"></div>
            </div>
        </div>
    </div>
    <div class="sidebarBoxInnerBox">
        <div class="innerBox header ">
		<div class="buttonsWrapper">
            <button type="button" id="button5225ee283d5ac" class="layoutButton embassyWhite green <?php if(!$posolstvo || !$session->alliance){ echo "disabled";}?>"  title="Embassy" onclick="<?php echo $link;?> return false;">
                <div class="button-container addHoverClick">
                    <i></i>
                </div>
            </button>


    <button type="button" id="button5225ee283d8f8" <?php if($posolstvo>0){echo "title='Alliance'";} ?>  class="layoutButton overviewWhite green <?php if(!$session->alliance) echo "disabled"; ?> " onclick="return false;">
                <div class="button-container addHoverClick ">
                    <i></i>
                </div>
            </button>
        <?php if($session->alliance != 0){  ?>
            <script type="text/javascript">

                if($('button5225ee283d8f8'))
                {
                    $('button5225ee283d8f8').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":false,"boxId":"alliance","disabled":true,"speechBubble":"","class":"","id":"button5225ee283d8f8","redirectUrl":"allianz.php","redirectUrlExternal":""}]);
                    });
                }
            </script>
            <?php } ?>
			</div><div class="clear"></div>

            <div class="boxTitle">
                <?php
                if($session->alliance == 0){
                    echo '<span>'.$lang['Alliance']['00'].'</span>';
                }
                else{
                    echo "<div class='sideInfoAlly'><a class='signLink' href='allianz.php' title='".SIDEINFO_ALLIANCE."'><span class='wrap'>".$allianceinfoMY['tag']."</span></a><a href='allianz.php?s=2' class='crest' title='".SIDEINFO_ALLY_FORUM."'><img src='img/x.gif'></a></div>";
                }
                ?>
            </div>
        </div>
        <div class="innerBox content">
        </div>
        <div class="innerBox footer">
        </div>
    </div>
</div>

<?php
//}
$i = 0;
$timestamp = $session->deleting;
$first = '';
if($session->protect > time()){
    $i++;
    if($first == ''){
        $first = 'protect';
    }
}
elseif($timestamp) {
    $i++;
    if($first == ''){
        $first = 'delete';
    }
}


$i+=1;
$art=$plan='';
if(!isset($timer)){$timer=1;}

if($i > 0){
    ?>
    <div id="sidebarBoxInfobox" class="sidebarBox toggleable expanded">
        <div class="sidebarBoxBaseBox">
            <div class="baseBox baseBoxTop">
                <div class="baseBox baseBoxBottom">
                    <div class="baseBox baseBoxCenter"></div>
                </div>
            </div>
        </div>
        <div class="sidebarBoxInnerBox">
            <div class="innerBox header ">
                <div class="boxTitle"><?php echo infobox_desc_text_1; ?></div>
				<span class="messageShortInfo">
                    <?php echo $news->nSum(); ?>
                    ‎‭‭‬×‬‎<img class="messages" src="img/x.gif" alt="Total messages: <?php echo $news->nSum(); ?>">
				</span>
            </div>
            <div class="innerBox content">
                <ul>
                    <?php echo $news->getNews(); ?>
                    <?php
                    $k = 0;
                    if($session->protection-time()>0  && $session->protect==1){
                        $k++;

                        $uurover=$generator->getTimeFormat($session->protection-time());
                        ?>
                        <li id="infoID_<?php echo $i; ?>"<?php if($first == 'protect'){ echo "  class=\"firstElement\""; }?>><?php echo sprintf(PROTECTION_TIME,$session->protection-time(),$uurover);?></li>
                    <?php
                    }
                    elseif($timestamp) {
                        $k++;
                        $time=$generator->getTimeFormat(($timestamp-time()));
                        ?>
                        <style>
                        .buttonQ{
                            width: 24px;height: 24px;background-image: url(gpack/img_rtl/round/button/buttonSmall-rtl.png);padding: 0;border: none;border-radius: 2px;
                        }
                        </style>
                        <li id="infoID_<?php echo $i; ?>"<?php if($first == 'delete'){ echo "  class=\"firstElement\""; }?>>
                        <button type="button" class="icon" onclick="window.location.href = 'options.php?s=3&delcancel=1'; return false;"><img src="img/x.gif" class="del" alt="del"></button>
                         <?php echo sprintf(ACCOUNT_DELETION,($timestamp-time()),$time);?>
                        </li>
                    <?php
                    }

                    if(ARTEFACTS>time()) {
                        echo "<li>Keep on spawn artefacts <span class=\"timer\" counting=\"down\" value=\"".(ARTEFACTS-time())."\">".$generator->getTimeFormat((ARTEFACTS-time()))."</span> hour.</li>";
                     }
                     if(WW_PLAN>time()) {
                        echo "<li>Keep on spawn plan Building <span class=\"timer\" counting=\"down\" value=\"".(WW_PLAN-time())."\">".$generator->getTimeFormat((WW_PLAN-time()))."</span> hour.</li>";
                     }

                    ?>

                </ul>
            </div>

            <div class="innerBox footer">
                            <button type="button" class="toggle" onclick="">
                    <div class="button-container addHoverClick">
                                                    <svg class="toggle-caret" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 32.9">
                                <style>
                                    .caret {
                                        fill: url(#caret_to_bottom_fill);
                                        stroke: url(#caret_to_bottom_stroke);
                                    }
                                </style>
                                <linearGradient id="caret_to_bottom_fill" x1="22.4983" x2="22.4983" y1="26.6416" y2="8.0344" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1 0 0 -1 0 33.833)">
                                    <stop offset=".1147" stop-color="#DADED4"></stop>
                                    <stop offset=".1452" stop-color="#F9FBF7"></stop>
                                    <stop offset=".1551" stop-color="#FFFFFF"></stop>
                                </linearGradient>

                                <linearGradient id="caret_to_bottom_stroke" x1="22.4983" x2="22.4983" y1="26.6416" y2="8.0344" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1 0 0 -1 0 33.833)">
                                    <stop offset="0" stop-color="#7C9A58"></stop>
                                    <stop offset=".2" stop-color="#60A200"></stop>
                                    <stop offset=".4" stop-color="#63A500"></stop>
                                    <stop offset="1" stop-color="#7DB211"></stop>
                                </linearGradient>
                                <path class="down_glow" d="M39 5.9c-.4-.5-1-.8-1.5-.9H7.4c-.6 0-1.1.2-1.5.9C5.5 6.3 5 7.7 5 9c0 .7 0 2.5.5 3.1l15.1 15.1c.4.5 1.3.7 1.9.7.6 0 1.5-.2 2-.7l14.9-15c.4-.5.6-2 .6-2.7.1-1.2-.5-3.4-1-3.6z"></path>
                                <path class="up_glow" d="M39.2,8.2c-0.4-0.5-1.6-1-2.1-1.1l-29.2,0c-0.6,0-1.6,0.4-2.1,1C5.4,8.6,5,9.7,5,11 c0,0.7,0.1,3.3,1.3,4.8l13,13.1c0.4,0.5,2.5,1,3.1,1c0.6,0,2.7-0.5,3.8-1.5L38.4,16c1.4-1.4,1.6-3.8,1.6-4.5 C40.1,10.3,39.9,8.7,39.2,8.2z"></path>
                                <path class="topshadow" d="M39.8 10.8c.5-1.7.1-5.7-2.5-5.8H7.2c-2.4.1-2.4 4.6-2.1 5.6 0 .1.2.1.2.1.8-.2.9-2 3.4-2.1 6.8-.1 22.1 0 28.5.1 2.6.1 2.1 1.9 2.6 2.1z"></path>
                                <path class="bottomshadow" d="M39.4,8.9C39,8.5,38.5,8.3,38,8.2L7.1,8.3C6.5,8.3,6,8.5,5.6,9C5.2,9.4,5,9.9,5,10.5 c0,0.6-0.2,3.6,1.7,5.6l12.7,12.8c1,0.7,2,1,3.1,1c1.1,0,2.7-0.6,3.8-1.5L38.4,16c1.9-2.1,1.6-5.1,1.6-5.7 C40.1,9.8,39.9,9.3,39.4,8.9z"></path>
                                <path class="caret" d="M38.3 8.8c-.4-.4-.9-.6-1.4-.7H8.1c-.6 0-1.1.2-1.5.7-.4.4-.6.9-.6 1.5s.2 1 .6 1.5L21 26.2c.4.4.9.6 1.5.6s1-.2 1.5-.6l14.3-14.5c.4-.4.6-.9.6-1.5.1-.5-.1-1-.6-1.4z"></path>
                            </svg>
                                            </div>
                </button>
                <script type="text/javascript">
                    window.addEvent('domready', function()
                    {
                        Travian.Translation.add(
                            {
                                'infobox_collapsed': 'Show Messages',
                                'infobox_expanded': 'Hide Messages'
                            });

                        var box = $('sidebarBoxInfobox');
                        box.down('button.toggle').addEvent('click', function(e)
                        {
                            Travian.Game.Layout.toggleBox(box, 'travian_toggle', 'infobox');
                        });
                    });
                </script>
                
                        <script type="text/javascript">
                jQuery(function () {
                    Travian.Game.Layout.setInfoboxItemsRead();
                    Travian.Game.Layout.setupInfoboxItemsDeletionWithMessage('Do you ever reply to delete this message?','Confirm');
                });
            </script>
            </div>
        </div>
    </div>
<?php } ?>
<div id="sidebarBoxLinklist" class="sidebarBox   ">
    <div class="sidebarBoxBaseBox">
        <div class="baseBox baseBoxTop">
            <div class="baseBox baseBoxBottom">
                <div class="baseBox baseBoxCenter"></div>
            </div>
        </div>
    </div>
    <div class="sidebarBoxInnerBox">
        <div class="innerBox header ">
		<div class="buttonsWrapper">
        <button type="button" id="buttonSbCOS5JTM2euX" title="List the Links || List the Links edit" class="layoutButton edit<?php if($session->plus){ echo 'White green'; }else{ echo 'Black gold'; } ?> " onclick="return false;">
                <div class="button-container addHoverClick">
                    <i></i>
                </div>
            </button>

            <script type="text/javascript">
                <?php if($session->plus){ ?>
                    if ($('buttonSbCOS5JTM2euX')) {
                    $('buttonSbCOS5JTM2euX').addEvent('click', function () {
                        window.fireEvent('buttonClicked', [this, {
                            "type": "green",
                            "onclick": "return false;",
                            "loadTitle": false,
                            "boxId": "",
                            "disabled": false,
                            "speechBubble": "",
                            "class": "",
                            "id": "buttonSbCOS5JTM2euX",
                            "redirectUrl": "spieler.php?s=2",
                            "redirectUrlExternal": "",
                            "title": "List the link || Edit List the Links"
                        }]);
                    });
                }

                <?php }else{ ?>


                if ($('buttonSbCOS5JTM2euX')) {
                    $('buttonSbCOS5JTM2euX').addEvent('click', function () {
                        window.fireEvent('buttonClicked', [this, {
                            "type": "gold",
                            "onclick": "return false;",
                            "loadTitle": false,
                            "boxId": "",
                            "disabled": false,
                            "speechBubble": "",
                            "class": "",
                            "id": "buttonSbCOS5JTM2euX",
                            "redirectUrl": "",
                            "redirectUrlExternal": "",
                            "plusDialog":{"featureKey":"linkList","infoIcon":"http:\/\/t4.answers.travian.us\/index.php?aid=Help#go2answer"},"title": "List the link || Plus you are allowed to add list the links"
                        }]);
                    });
                }
            <?php } ?>
            </script>
			</div>
        <div class="clear"></div>
            <div class="boxTitle"><?php echo dorf1_links; ?></div>		</div>
        <div class="innerBox content">
            <div class="linklistNotice">
            <ul>
            <li class=""><a title="<?php echo $lang['links']['Farms']; ?>" href="build.php?t=99&id=39"><?php echo $lang['links']['Farms']; ?></a></li>
            <li class="newTab"><a title="<?php echo $lang['links']['Support']; ?>" target="_blank" style="color: red; font-weight: bold" href="nachrichten.php?t=1&id=6"><img src="img/x.gif" alt=""><?php echo $lang['links']['Support']; ?></a></li>
            </ul>
                <?php
                if($session->plus) {
                    $links = $database->getLinks($session->uid);
                    $query = count($links);
                    if($query>0){
                        echo '<div id="linkList" class="listing"><div class="list none">';
                        foreach($links as $link) {
                            echo '<ul><li class="entry">';
                            echo '<a href="'.$link['url'].'" title="'.$link['name'].'">'.$link['name'].'</a></li></ul>';
                        }
                        echo '<div class="pager"><a href="#" class="back" style="display: none; "></a><a href="#" class="next" style="display: none; "></a></div></div></div>';
                    }
                }else{
                    echo Link_desc_text_1;
                }
                ?>
            </div>
        </div>
        <div class="innerBox footer">
        </div>
    </div>
</div>

<div class="clear"></div>
</div>