<?php 
if($session->qData['quest'] == 3 && $session->qData['step1'] == 0){ 
	$database->query("UPDATE quests SET step1 = 1 WHERE userid = ".$session->uid."");
}
if($session->qData['quest'] == 4 && $session->qData['step1'] == 0){ 
	$database->query("UPDATE quests SET step1 = 1 WHERE userid = ".$session->uid."");
}
?>
<table cellpadding="1" cellspacing="1" id="build_value">
	<tr>
		<th><?php echo CUR_PROD; ?>:</th>
		<td><b><?php echo $bid1[$village->resarray['f'.$id]]['prod']* SPEED; ?></b> <?php echo PER_HR; ?></td>
	</tr>
    <?php
    $cur=$building->isCurrent($id);
    $loop=$building->isLoop($id);
    $master=$building->isMaster($id);
    if($cur+$loop+$master>0){
	foreach($building->buildArray as $bu){
		echo "<tr class=\"underConstruction\">
		<th>Production at the level ".$bu['level'].":</th> 
		<td><span class=\"number\">".${'bid'.$bu['type']}[$bu['level']]['prod']* SPEED." ".PER_HR."</span> </td></tr>";
	}

    }
    if(!$building->isMax($village->resarray['f'.$id.'t'],$id)) {
    ?>
	<tr>
		<th><?php echo NEXT_PROD; echo $next; ?>:</th>
		<td><b><?php echo $bid1[$next]['prod']* SPEED; ?></b> <?php echo PER_HR; ?></td>
	</tr>
    <?php
    }?>
</table>


