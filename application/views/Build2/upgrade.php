<?php 
$bid = $village->resarray['f'.$id.'t'];
$bindicate = $building->canBuild($id,$bid);
switch($session->tribe){
    case 1:
        $tribeCss = "roman";
        break;
    case 2:
        $tribeCss = "teuton";
        break;
    case 3:
        $tribeCss = "gaul";
        break;
    case 6:
        $tribeCss = "egyptian";
        break;
    case 7:
        $tribeCss = "hun";
        break;
}
?>
	</div>
	<div class="roundedCornersBox big <?php echo $bindicate == 1 ? 'headlineOnly' : ''; ?>">
	<div class="stickyImage">
		<a class="build_logo" onclick="return Travian.Game.iPopup(<?php echo $village->resarray['f'.$_GET['id'].'t']; ?>, 4);" href="#">
			<img class="build_logo big black g<?php echo $village->resarray['f'.$_GET['id'].'t'] == 12 ? 13 : $village->resarray['f'.$_GET['id'].'t']; ?> <?php echo $tribeCss ?>" alt="<?=$lang['buildings'][$village->resarray['f'.$_GET['id'].'t']]?>" src="img/x.gif">
		</a>
	</div>

<?php if($bindicate == 1) { ?>
	<h4><div class="statusMessage"><span class="none"><?=$lang['buildings'][$village->resarray['f'.$_GET['id'].'t']].' '.UPG0; ?></span></div></h4></div>
<?php }else{ ?>
	<h4><?=$lang['buildings'][$village->resarray['f'.$_GET['id'].'t']]?></h4>

<?php
if($bindicate == 10) {
	echo "<p><span class=\"none\">".UPG1."</span></p>";
} else if($bindicate == 11) {
	echo "<p><span class=\"none\">".UPG2."</span></p>";
} else {
	$uprequire = $building->resourceRequired($id,$village->resarray['f'.$id.'t'],1+$loopsame+$doublebuild+$master);

	$time=time();
	
	
?>
	<div id="contractSpacer"></div>
	<div id="contract" class="contractWrapper">
			<div class="inlineIconList resourceWrapper">
			<div class="inlineIcon resource"><i class="r1Big"></i><span class="value value"><?php echo $uprequire['wood']; ?></span></div>
			<div class="inlineIcon resource"><i class="r2Big"></i><span class="value value"><?php echo $uprequire['clay']; ?></span></div>
			<div class="inlineIcon resource"><i class="r3Big"></i><span class="value value"><?php echo $uprequire['iron']; ?></span></div>
			<div class="inlineIcon resource"><i class="r4Big"></i><span class="value value"><?php echo $uprequire['crop']; ?></span></div>
			<div class="inlineIcon resource"><i class="cropConsumptionBig"></i><span class="value value"><?php echo $uprequire['pop']; ?></span></div>
		</div>
	</div>
	
	<div class="culturePointsAndPopulation ">
                <div class="wrapper">
                    <div class="unit">
                        <i class="culturePoints_medium"></i>
                        <span class="value"><?php echo $Travian->getAllpop($village->resarray['f'.$_GET['id'].'t'], $village->resarray['f'.$id])[1]; ?></span>
                        <?php 
                            // iRedux - Fix
                            $popAdd = ${'bid'.$village->resarray['f'.$_GET['id'].'t']}[$village->resarray['f'.$id]+($loopsame > 0 ? 2:1)]['pop'];
                            $cpAdd = ${'bid'.$village->resarray['f'.$_GET['id'].'t']}[$village->resarray['f'.$id]+($loopsame > 0 ? 2:1)]['cp'];
                        ?>
                        <span class="delta">(&#8237;+&#8237;<?php echo $cpAdd; ?>&#8236;&#8236;)</span>
                    </div>
                    <div class="unit">
                        <i class="population_medium"></i>
                        <span class="value"><?php echo $Travian->getAllpop($village->resarray['f'.$_GET['id'].'t'], $village->resarray['f'.$id])[0]; ?></span>
                        <span class="delta">(&#8237;+&#8237;<?php echo $popAdd; ?>&#8236;&#8236;)</span>
                    </div>
                                                                                                                                                                                                    </div>
            </div>
<div class="upgradeButtonsContainer <?php if(MAX_LEVEL){ echo'section2Enabled'; }?>">
                <div class="section1">

            <div class="clear"></div>
        
<?php
//echo $bindicate; die();

    if($bindicate == 2 || !$bindicate) {
   		echo "<span class=\"none\">".UPG5."</span>";
    }
    else if($bindicate == 3) {
    	echo "<span class=\"none\">".UPG6."</span>";
    }
    else if($bindicate == 4) {
    	echo "<span class=\"none\">".UPG7."</span>";
    }
    else if($bindicate == 5) {
    	echo "<span class=\"none\">".UPG8."</span>";
    }
    else if($bindicate == 6) {
    	echo "<span class=\"none\">".UPG9."</span>";
    }
    else if($bindicate == 7) {
    	$neededtime = $building->calculateAvaliable($id,$village->resarray['f'.$id.'t'],1+$loopsame+$doublebuild+$master);
        if($neededtime==0){echo "<span class=\"none\">".UPG10."</span>";}else{
    	echo "<span class=\"none\">Resources will be available at  ".$neededtime[0]." the clock  ".$neededtime[1]."</span>";}
    }
    else if($bindicate == 8) {
        if($id <= 18) {
            echo "<button type=\"button\" value=\"Upgrade level\" class=\"green build\" onclick=\"window.location.href = 'dorf1.php?а=$id&c=$session->checker'; return false;\">
<div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
    <div class=\"button-background\">
        <div class=\"buttonStart\">
            <div class=\"buttonEnd\">
                <div class=\"buttonMiddle\"></div>
            </div>
        </div>
    </div><div class=\"button-content\">".UPG11." ";
        }
        else {
            echo "<button type=\"button\" value=\"Upgrade level\" class=\"green build\" onclick=\"window.location.href = 'dorf2.php?а=$id&c=$session->checker'; return false;\">
<div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
    <div class=\"button-background\">
        <div class=\"buttonStart\">
            <div class=\"buttonEnd\">
                <div class=\"buttonMiddle\"></div>
            </div>
        </div>
    </div><div class=\"button-content\">".UPG11." ";
        }
        echo $village->resarray['f'.$id]+1;
        echo " </div></div></button>";
		}
    else if($bindicate == 9) {
 if($id <= 18) {
    	echo "<button type=\"button\" value=\"Upgrade level\" class=\"green build\" onclick=\"window.location.href = 'dorf1.php?а=$id&c=$session->checker'; return false;\">
    	<div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
    <div class=\"button-background\">
        <div class=\"buttonStart\">
            <div class=\"buttonEnd\">
                <div class=\"buttonMiddle\"></div>
            </div>
        </div>
    </div><div class=\"button-content\">".UPG11."";
        }
        else {
        echo "<button type=\"button\" value=\"Upgrade level\" class=\"green build\" onclick=\"window.location.href = 'dorf2.php?а=$id&c=$session->checker'; return false;\">
            <div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
    <div class=\"button-background\">
        <div class=\"buttonStart\">
            <div class=\"buttonEnd\">
                <div class=\"buttonMiddle\"></div>
            </div>
        </div>
    </div><div class=\"button-content\">".UPG11." ";
        }
		echo $village->resarray['f'.$id]+($loopsame > 0 ? 2:1);
        echo "</div></div></button>";
        //echo "<span class=\"none\">(Waiting list)</span>";															
    }
if($bindicate == 88 || $session->goldclub && $building->master==0 && $bindicate < 8) {
    if($bindicate != 88){echo "</br><br>";}
        if($id <= 18) {
            echo "<button type=\"button\" value=\"Upgrade level\" class=\"gold builder ".($session->gold == 0 ? 'disabled' : '')."\" ".($session->gold != 0 ? "onclick=\"window.location.href = 'dorf1.php?а=$id&c=$session->checker'; return false;\"" : '')." >
    	<div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
            <div class=\"button-background\">
                <div class=\"buttonStart\">
                    <div class=\"buttonEnd\">
                        <div class=\"buttonMiddle\"></div>
                    </div>
                </div>
            </div><div class=\"button-content\">".UPG12." ";
        }
        else {
            echo "<button type=\"button\" value=\"Upgrade level\" class=\"gold builder\" onclick=\"window.location.href = 'dorf2.php?а=$id&c=$session->checker'; return false;\">
            <div class=\"button-container addHoverClick\" style=\"margin:1px -3px;\">
                <div class=\"button-background\">
                    <div class=\"buttonStart\">
                        <div class=\"buttonEnd\">
                            <div class=\"buttonMiddle\"></div>
                        </div>
                    </div>
                </div><div class=\"button-content\">".UPG12." ";
        }
		
        //echo $village->resarray['f'.$id]+($loopsame > 0 ? 2:1)+$doublebuild;																			  
        echo '<img src="img/x.gif" class="goldIcon" alt=""><span class="goldValue">1</span>';
        echo "</div></div></button>";
        //echo "<span class=\"none\">Construction assistant <font color='#B3B3B3'>(costs: <img src='img/x.gif' alt='' class='gold' />0)</font></span>";																																					   
        
    }elseif($bindicate < 8){echo "";}
    ############################UP COM GOLD#######################################
}

echo "</p>";
if($bindicate != 1) {
?>

<?php
	/* ajax.php?cmd=upall&a=<?php echo $id;?>*/											

    $totalres = $uprequire['wood']+$uprequire['clay']+$uprequire['iron']+$uprequire['crop'];
    if($village->resourceSUM >= $totalres){ 
    if($session->gold >= 3 && $building->getTypeLevel(17) >= 1  && $bindicate == 7) {
        //echo "&nbsp;&nbsp;<button id='button".crc32(array_sum($uprequire))."' type=\"button\" value=\"npc\" class=\"icon\">&nbsp;<img src=\"img/x.gif\" style=\"margin-top:6px;\" class=\"npc\" alt=\"npc\"></button>";
        ?>
         <button type="button" class="gold exchange <?php echo $isDisabled ? 'disabled': ''; ?>"  onfocus="jQuery('button', 'input[type!=hidden]', 'select').focus(); event.stopPropagation(); return false;" id="button<?php echo crc32(array_sum($uprequire)); ?>">
        <div class="button-container addHoverClick">
		<div class="button-background">
			<div class="buttonStart">
				<div class="buttonEnd">
					<div class="buttonMiddle"></div>
				</div>
			</div>
		</div>
		<div class="button-content">Sharing resources</div></div></button>
       
        <script type="text/javascript">
            window.addEvent('domready', function()
            {
                if($('button<?=crc32(array_sum($uprequire))?>'))
                {
                    $('button<?=crc32(array_sum($uprequire))?>').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"button","value":"Exchange resources","name":"","id":"button5487115a9b649","class":"gold ","title":"Click here to exchange resources.","confirm":"","onclick":"","dialog":{"cssClass":"white","draggable":false,"overlayCancel":true,"buttonOk":false,"saveOnUnload":false,"data":{"cmd":"exchangeResources","defaultValues":{"tid":"1","nr":"1","btyp":"1","r1":<?=(($uprequire['wood']))?>,"r2":<?=(($uprequire['clay']))?>,"r3":<?=(($uprequire['iron']))?>,"r4":<?=(($uprequire['crop']))?>,"supply":"1","pzeit":0,"max1":0,"max2":0,"max3":0,"max4":0,"max":0},"did":"<?=$village->wid;?>"}}}]);
                    });
                }
            });
        </script>
		
<?php }
}?>
<div class="inlineIcon duration">

<i class="clock_medium"></i>
<?php echo '<span class="value ">'.$generator->getTimeFormat($uprequire['time']).'</span>'; ?>

</div> <?php if($bindicate == 9) { echo "<span class=\"none\">(Waiting)</span>"; } ?> 
</div>

<?php } } ?>
<?php 

if (!in_array($bindicate, array(1,2,3,4,5,6,10,11,20,21,22))) {
if(MAX_LEVEL && !$isWW){ 

if ($session->gold < MAX_LEVEL_COST) {
            $style = "";
            $disable = "disabled";
            $class = "gold ";
            $title = $lang['Build']['utomax3'];
        } else {
            //$style = "onclick=\"window.location.href = 'dorf1.php?ins&a=$id&c=$session->checker'; return false;\"";
            $style ='';
            $class = "gold ";
            $title = $lang['Build']['utomax4'];
            $disable = "";
            $FIELD_BID = $village->resarray['f' . $id . 't'];
            $maxLvL = sizeof($GLOBALS['bid' . $FIELD_BID]);
            if ($FIELD_BID <= 4) {
            $maxLvL--;
             if (!$village->capital) {
             $maxLvL = 10;
                        }
                    }
        }
        if (!in_array($bid, array(25,26,44))) {
?>

<div class="section2">
        <button type="button" class="<?php echo $class; ?> upgradeToMaxLevel <?php echo $disable; ?>" coins="15" title="<?php echo $lang['Build']['utomax2']; ?>||<?php echo $title;?>" <?php if(!$disable) { ?>onclick="window.location.href = 'ajax.php?cmd=upall&a=<?php echo $id;?>'; return false;"<?php } ?>>
	<div class="button-container addHoverClick">
		<div class="button-background">
			<div class="buttonStart">
				<div class="buttonEnd">
					<div class="buttonMiddle"></div>
				</div>
			</div>
		</div>
		<div class="button-content"><?php echo $lang['Build']['utomax1']; ?><img src="img/x.gif" class="goldIcon" alt=""><span class="goldValue"><?php echo MAX_LEVEL_COST; ?></span></div></div></button>
															 
																			
				  
			  
			 
	<div class="clear"></div>
</div>
			  

		<?php } ?>
</div>
<?php  }else{
    echo '</div>';
} ?>
</div>


<?php }else{ if($bindicate != 1 && $bindicate != 10 && $bindicate != 11){ echo '</div></div>'; } } ?>

