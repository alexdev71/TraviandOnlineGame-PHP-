<?php

   $tribe1 = $database->getUserByTribe(1);
   $tribe2 = $database->getUserByTribe(2);
   $tribe3 = $database->getUserByTribe(3);
   $tribes = array($tribe1,$tribe2,$tribe3);
   $users = $tribe1+$tribe2+$tribe3 +1; ?>
<h4 class="round"><?php echo STATISTIC19;?></h4>
<table  id="world_player" class="transparent">
        <tbody>
            <tr>
                <th><?=STATISTIC20;?></th>
                <td><?=$users; ?></td>
            </tr>

            <tr>
                <th><?php echo STATISTIC21;?></th>

                <td><?php
                   $active = $database->ActiveAndOnline((3600*24));
                   echo $active; ?></td>
            </tr>

            <tr>
                <th><?php echo STATISTIC22;?></th>

                <td><?php
                   $online = $database->ActiveAndOnline((60*10));
                   echo $online; ?></td>
            </tr>
        </tbody>
</table>
<h4 class="round spacer"><?php echo STATISTIC23;?></h4>
    <table cellpadding="1" cellspacing="1" id="world_tribes" class="world">
        <thead>

        <tr class="hover">
                <td><?php echo STATISTIC24;?></td>

                <td><?php echo STATISTIC25;?></td>

                <td><?php echo STATISTIC26;?></td>
        </tr>
        </thead>
        <tbody>
        <tr class="hover">
                <td><?php echo TRIBE1;?></td>

                <td><?php
                   echo $tribes[0] ; ?></td>

                <td><?php
                   $percents = 100 * (($tribes[0]) / $users);
                   echo $percents = intval($percents);
                   echo "%"; ?></td>
            </tr>

            <tr>
                <td><?php echo TRIBE2;?></td>

                <td><?php
                   echo $tribes[1]; ?></td>

                <td><?php
                   $percents = 100 * ($tribes[1] / $users);
                   echo $percents = intval($percents);
                   echo "%"; ?></td>
            </tr>

            <tr>
                <td><?php echo TRIBE3;?></td>

                <td><?php
                   echo $tribes[2]; ?></td>

                <td><?php
                   $percents = 100 * ($tribes[2] / $users);
                   echo $percents = intval($percents);
                   echo "%"; ?></td>
            </tr>
        </tbody>
    </table>

    <h4 class="round spacer">server</h4>

<?php 
if(ARTEFACTS>time()) {
   $time=$generator->getTimeFormat((ARTEFACTS-time()));
   $art = "<span class=\"timer\" counting=\"down\" value=\"".(ARTEFACTS-time())."\">".$time."</span> hour";
}
if(WW_PLAN>time()) {
   $time=$generator->getTimeFormat((WW_PLAN-time()));
   $plan = '<li><p>';
   $plan .= "<span class=\"timer\" counting=\"down\" value=\"".(WW_PLAN-time())."\">".$time."</span> hour.<br/>";
   $plan .= '</p></li>';
}
?>
    <table cellpadding="1" cellspacing="1" id="world_tribes" class="world">
        <tbody>
        <tr class="hover">
                <td>Remaining distribution of badges</td>
                <td><span class="timer" counting="down" value="<?php echo MEDALS - (time() - $database->config()['lastmedal']); ?>"><?php echo $generator->getTimeFormat(MEDALS - (time() - $database->config()['lastmedal'])); ?></span> hour</td>
            </tr>
            <tr class="hover">
                <td>Remaining on renewed oases</td>
                <td><span class="timer" counting="down" value="<?php echo oMonsters - (time() - $database->config()['lastioasisUpdate']); ?>">
<?php 
echo $generator->getTimeFormat(oMonsters - (time() - $database->config()['lastioasisUpdate'])); ?>
</span> hour</td>
            </tr>
            <tr class="hover">
                <td>Keep spawn artefacts</td>
                <td><?php if(ARTEFACTS>time()) { echo "<span class=\"timer\" counting=\"down\" value=\"".(ARTEFACTS-time())."\">".$time."</span> hour"; }else{ echo 'Appeared artefacts'; }?></td>
            </tr>
            <tr class="hover">
                <td>Keep spawn plan Building</td>
                <td><?php if(WW_PLAN>time()) { echo "<span class=\"timer\" counting=\"down\" value=\"".(WW_PLAN-time())."\">".$time."</span> hour"; }else{ echo 'Appeared plan Building'; }?></td>
            </tr>
        </tbody>
    </table>

