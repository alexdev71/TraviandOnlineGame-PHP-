<?php
$aid = $session->alliance;
$allianceinfo = $database->getAlliance($aid);
$memberlist = $database->getAllMember($aid);
//echo "<h1>".$database->RemoveXSS($allianceinfo['tag'])." - ".$database->RemoveXSS($allianceinfo['name'])."</h1>";
include("alli_menu.php");
?>
<h4 class="round"><?php echo ALLIANCE2; ?></h4>
			<form method="POST" action="allianz.php?ss=5">
				<table cellpadding="1" cellspacing="1" id="position" class="small_option">
					<tbody>
						<tr>
							<th colspan="2"><?php echo ALLIANCE28; ?></th>
						</tr>
						<tr>
							<th><?php echo OVERVIEW1; ?></th>
							<td>
								<select name="a_user" class="name dropdown">
								<?php
                                foreach($memberlist as $member) {
                                echo "<option value=".$member['id'].">".$database->RemoveXSS($member['username'])."</option>";
                                }

                                ?>
                                </select>
							</td>
						</tr>
					</tbody>
				</table>

					<input type="hidden" name="o" value="1">
					<input type="hidden" name="s" value="5">
                <button type="submit" value="ok" name="s1" id="btn_ok" class="green">
                     <div class="button-container addHoverClick ">
                        <div class="button-background">
                            <div class="buttonStart">
                                <div class="buttonEnd">
                                    <div class="buttonMiddle"></div>
                                </div>
                            </div>
                        </div><div class="button-content"><?= ally11 ?></div>
                    </div>
                </button>

            </form>
			<p class="error"></p>
