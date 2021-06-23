<?php
include('application/Account.php');

if(!empty($_GET['ref'])){$inviter=$database->filterstringvalue($_GET['ref']);}

?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login  perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV1">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="img/x.gif" id="msfilter" alt=""/>
        <div id="header">
            <div id="mtop">
                <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div id="center">
            <?php include('application/views/menu.php');?>
            <div id="contentOuterContainer" class="size1">
                <div class="contentTitle">&nbsp;</div>
                <div class="contentContainer">
                    <div id="content" class="signup"><h1 class="titleInHeader"><?php echo REG; ?></h1>
                        <?php if($_SESSION['isOkay']){ ?><b style="color:blue;"><?php echo $_SESSION['isOkay']; ?></b><br><br><?php } ?>
                        <?php if($database->config()['regstatus']){ ?>
                        <h4 class="round"><?php echo REGISTER_USERINFO; ?></h4>
                        <form name="snd" method="post" action="anmelden.php">
                            <input type="hidden" name="ft" value="a1" />
                            <table cellpadding="0" cellspacing="0" align="center">
                                <tbody>
                                <!--<tr class="top">
                                    <th><?php echo INVITED; ?></th>
                                    <td><input class="text" type="text" name="referal"  value="<?php if(!empty($inviter) && is_numeric($inviter)){echo $database->getUserField($inviter,'username',0); }elseif(!empty($inviter) && !is_numeric($inviter)){
                                            echo $inviter;
                                        } ?>" maxlength="15"  />
                                    </td>
                                </tr>-->

                                <th><?php echo NICKNAME; ?></th>
                                <td><input class="text" type="text" name="name" placeholder="<?=anlm0?>" value="<?php echo $form->getValue('name'); ?>" maxlength="15" />
                                    <span class="error"><?php echo $form->getError('name'); ?></span>
                                </td>

                                <tr>
                                    <th><?php echo EMAIL; ?></th>
                                    <td>
                                        <input class="text" type="text"  placeholder="<?=anlm1?>"  name="email" value="<?php echo stripslashes($form->getValue('email')); ?>" />
                                        <span class="error"><?php echo $form->getError('email'); ?></span>
                                    </td>
                                </tr>
                                <tr class="btm">
                                    <th><?php echo PASSWORD; ?></th>
                                    <td>
                                        <input class="text" type="password"  placeholder="<?=anlm2?>" name="pw" value="<?php echo stripslashes($form->getValue('pw')); ?>" maxlength="30" />
                                        <span class="error"><?php echo $form->getError('pw'); ?></span>
                                    </td>
                                </tr>
                                <tr class="btm">
                                    <th>Country</th>
                                    <td>
                                        <select name="country" value="<?php echo stripslashes($form->getValue('country')); ?>">
                                            <option value="" selected="" />Select your country
                                            <option value="ad">Andorra</option>
                                            <option value="ae">Arab Emirates</option>
                                            <option value="af">Afghanistan</option>
                                            <option value="ag">Antigua</option>
                                            <option value="ai">Anguilla</option>
                                            <option value="al">Albania</option>
                                            <option value="am">Armenia</option>
                                            <option value="an">Netherlands</option>
                                            <option value="ao">Angola</option>
                                            <option value="ar">Argentina</option>
                                            <option value="as">American Samoa</option>
                                            <option value="at">Austria</option>
                                            <option value="au">Australia</option>
                                            <option value="aw">Aruba</option>
                                            <option value="ax">Åland</option>
                                            <option value="az">Azerbaijan</option>
                                            <option value="ba">Bosnia</option>
                                            <option value="bb">Barbados</option>
                                            <option value="bd">Bangladesh</option>
                                            <option value="be">Belgium</option>
                                            <option value="bf">Burkina Faso</option>
                                            <option value="bg">Bulgaria</option>
                                            <option value="bh">Bahrain</option>
                                            <option value="bi">Burundi</option>
                                            <option value="bj">Benin</option>
                                            <option value="bl">Barthélemy</option>
                                            <option value="bm">Bermuda</option>
                                            <option value="bn">Brunei</option>
                                            <option value="bo">Bolivia</option>
                                            <option value="br">Brazil</option>
                                            <option value="bs">Bahamas</option>
                                            <option value="bt">Bhutan</option>
                                            <option value="bv">Bouvet</option>
                                            <option value="bw">Botswana</option>
                                            <option value="by">Belarus</option>
                                            <option value="bz">Belize</option>
                                            <option value="ca">Canada</option>
                                            <option value="cc">Cocos Islands</option>
                                            <option value="cd">Congo</option>
                                            <option value="cf">African</option>
                                            <option value="cg">Congo African</option>
                                            <option value="ch">Switzerland</option>
                                            <option value="ci">Côte d'Ivoire</option>
                                            <option value="ck">Cook Islands</option>
                                            <option value="cl">Chile</option>
                                            <option value="cm">Cameroon</option>
                                            <option value="cn">China</option>
                                            <option value="co">Colombia</option>
                                            <option value="cr">Costa Rica</option>
                                            <option value="cs">Serbia</option>
                                            <option value="cu">Cuba</option>
                                            <option value="cv">Cabo Verde</option>
                                            <option value="cx">Christmas</option>
                                            <option value="cy">Cyprus</option>
                                            <option value="cz">Czechia</option>
                                            <option value="de">Germany</option>
                                            <option value="dj">Djibouti</option>
                                            <option value="dk">Denmark</option>
                                            <option value="dm">Dominica</option>
                                            <option value="do">Dominican</option>
                                            <option value="dz">Algeria</option>
                                            <option value="ec">Ecuador</option>
                                            <option value="ee">Estonia</option>
                                            <option value="eg">Egypt</option>
                                            <option value="eh">Western Sahara</option>
                                            <option value="er">Eritrea</option>
                                            <option value="es">Spain</option>
                                            <option value="et">Ethiopia</option>
                                            <option value="fi">Finland</option>
                                            <option value="fj">Fiji</option>
                                            <option value="fk">Falkland</option>
                                            <option value="fm">Micronesia</option>
                                            <option value="fo">Faroe</option>
                                            <option value="fr">France</option>
                                            <option value="ga">Gabon</option>
                                            <option value="gb">United Kingdom</option>
                                            <option value="gd">Grenada</option>
                                            <option value="ge">Georgia</option>
                                            <option value="gf">French Guiana</option>
                                            <option value="gg">Guernsey</option>
                                            <option value="gh">Ghana</option>
                                            <option value="gi">Gibraltar</option>
                                            <option value="gl">Greenland</option>
                                            <option value="gm">Gambia</option>
                                            <option value="gn">Guinea</option>
                                            <option value="gp">Guadeloupe</option>
                                            <option value="gq">Equatorial Guinea</option>
                                            <option value="gr">Greece</option>
                                            <option value="gs">Georgia</option>
                                            <option value="gt">Guatemala</option>
                                            <option value="gu">Guam</option>
                                            <option value="gw">Guinea-Bissau</option>
                                            <option value="gy">Guyana</option>
                                            <option value="hk">Hong Kong</option>
                                            <option value="hm">McDonald Islands</option>
                                            <option value="hn">Honduras</option>
                                            <option value="hr">Croatia</option>
                                            <option value="ht">Haiti</option>
                                            <option value="hu">Hungary</option>
                                            <option value="id">Indonesia</option>
                                            <option value="ie">Ireland</option>
                                            <option value="il">Israel</option>
                                            <option value="im">Isle of Man</option>
                                            <option value="in">India</option>
                                            <option value="io">British Indian</option>
                                            <option value="iq">Iraq</option>
                                            <option value="ir">Iran</option>
                                            <option value="is">Iceland</option>
                                            <option value="it">Italy</option>
                                            <option value="je">Jersey</option>
                                            <option value="jm">Jamaica</option>
                                            <option value="jo">Jordan</option>
                                            <option value="jp">Japan</option>
                                            <option value="ke">Kenya</option>
                                            <option value="kg">Kyrgyzstan</option>
                                            <option value="kh">Cambodia</option>
                                            <option value="ki">Kiribati</option>
                                            <option value="km">Comoros</option>
                                            <option value="kn">Kitts and Nevis</option>
                                            <option value="kp">North Korea</option>
                                            <option value="kr">South Korea</option>
                                            <option value="kw">Kuwait</option>
                                            <option value="ky">Cayman</option>
                                            <option value="kz">Kazakhstan</option>
                                            <option value="la">Lao</option>
                                            <option value="lb">Lebanon</option>
                                            <option value="lc">Saint Lucia</option>
                                            <option value="li">Liechtenstein</option>
                                            <option value="lk">Sri Lanka</option>
                                            <option value="lr">Liberia</option>
                                            <option value="ls">Lesotho</option>
                                            <option value="lt">Lithuania</option>
                                            <option value="lu">Luxembourg</option>
                                            <option value="lv">Latvia</option>
                                            <option value="ly">Libya</option>
                                            <option value="ma">Morocco</option>
                                            <option value="mc">Monaco</option>
                                            <option value="md">Moldova</option>
                                            <option value="me">Montenegro</option>
                                            <option value="mg">Madagascar</option>
                                            <option value="mh">Marshall</option>
                                            <option value="mk">North Macedonia</option>
                                            <option value="ml">Mali</option>
                                            <option value="mm">Myanmar</option>
                                            <option value="mn">Mongolia</option>
                                            <option value="mo">Macao</option>
                                            <option value="mp">Mariana Islands</option>
                                            <option value="mq">Martinique</option>
                                            <option value="mr">Mauritania</option>
                                            <option value="ms">Montserrat</option>
                                            <option value="mt">Malta</option>
                                            <option value="mu">Mauritius</option>
                                            <option value="mv">Maldives</option>
                                            <option value="mw">Malawi</option>
                                            <option value="mx">Mexico</option>
                                            <option value="my">Malaysia</option>
                                            <option value="mz">Mozambique</option>
                                            <option value="na">Namibia</option>
                                            <option value="nc">New Caledonia</option>
                                            <option value="ne">Niger</option>
                                            <option value="nf">Norfolk Island</option>
                                            <option value="ng">Nigeria</option>
                                            <option value="ni">Nicaragua</option>
                                            <option value="nl">Netherlands</option>
                                            <option value="no">Norway</option>
                                            <option value="np">Nepal</option>
                                            <option value="nr">Nauru</option>
                                            <option value="nu">Niue</option>
                                            <option value="nz">New Zealand</option>
                                            <option value="om">Oman</option>
                                            <option value="pa">Panama</option>
                                            <option value="pe">Peru</option>
                                            <option value="pf">Polynesia</option>
                                            <option value="pg">Guinea</option>
                                            <option value="ph">Philippines</option>
                                            <option value="pk">Pakistan</option>
                                            <option value="pl">Poland</option>
                                            <option value="pm">Saint Pierre</option>
                                            <option value="pn">Pitcairn</option>
                                            <option value="pr">Puerto Rico</option>
                                            <option value="ps">Palestine</option>
                                            <option value="pt">Portugal</option>
                                            <option value="pw">Palau</option>
                                            <option value="py">Paraguay</option>
                                            <option value="qa">Qatar</option>
                                            <option value="re">Réunion</option>
                                            <option value="ro">Romania</option>
                                            <option value="rs">Serbia</option>
                                            <option value="ru">Russia</option>
                                            <option value="rw">Rwanda</option>
                                            <option value="sa">Saudi Arabia</option>
                                            <option value="sb">Solomon Islands</option>
                                            <option value="sc">Seychelles</option>
                                            <option value="sd">Sudan</option>
                                            <option value="se">Sweden</option>
                                            <option value="sg">Singapore</option>
                                            <option value="sh">Saint Helena</option>
                                            <option value="si">Slovenia</option>
                                            <option value="sj">Svalbard</option>
                                            <option value="sk">Slovakia</option>
                                            <option value="sl">Sierra Leone</option>
                                            <option value="sm">San Marino</option>
                                            <option value="sn">Senegal</option>
                                            <option value="so">Somalia</option>
                                            <option value="sr">Suriname</option>
                                            <option value="st">Sao Tome</option>
                                            <option value="sv">El Salvador</option>
                                            <option value="sy">Syria</option>
                                            <option value="sz">Eswatini</option>
                                            <option value="tc">Turks</option>
                                            <option value="td">Chad</option>
                                            <option value="tf">French Southern</option>
                                            <option value="tg">Togo</option>
                                            <option value="th">Thailand</option>
                                            <option value="tj">Tajikistan</option>
                                            <option value="tk">Tokelau</option>
                                            <option value="tl">Timor-Leste</option>
                                            <option value="tm">Turkmenistan</option>
                                            <option value="tn">Tunisia</option>
                                            <option value="to">Tonga</option>
                                            <option value="tr">Turkey</option>
                                            <option value="tt">Trinidad and Tobago</option>
                                            <option value="tv">Tuvalu</option>
                                            <option value="tw">Taiwan</option>
                                            <option value="tz">Tanzania</option>
                                            <option value="ua">Ukraine</option>
                                            <option value="ug">Uganda</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="um">USA Islands</option>
                                            <option value="us">United States</option>
                                            <option value="uy">Uruguay</option>
                                            <option value="uz">Uzbekistan</option>
                                            <option value="va">Vatican City</option>
                                            <option value="vc">Saint Vincent</option>
                                            <option value="ve">Venezuela</option>
                                            <option value="vg">Virgin Islands</option>
                                            <option value="vi">Virgin Islands(U.S.)</option>
                                            <option value="vn">Viet Nam</option>
                                            <option value="vu">Vanuatu</option>
                                            <option value="wf">Wallis</option>
                                            <option value="ws">Samoa</option>
                                            <option value="ye">Yemen</option>
                                            <option value="yt">Mayotte</option>
                                            <option value="za">South Africa</option>
                                            <option value="zm">Zambia</option>
                                            <option value="zw">Zimbabwe</option>
                                        </select>
                                        <span class="error"></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4 class="round"><?php echo REGISTER_MOREINFO; ?></h4>
                            <div class="checks">
                                <input class="check" type="checkbox" id="agb" name="agb" value="1" <?php echo $form->getRadio('agb',1); ?>/>
                                <label for="agb"><?php echo ACCEPT_RULES; ?></label>
                            </div>
                            <br>
                            <div class="btn">
                                <input type="hidden" name="vid" value="0">
                                <input type="hidden" name="kid" value="0">
                                <button type="submit" value="anmelden" name="s1" class="green "  id="btn_signup" title="Register">
                                    <div class="button-container addHoverClick ">
                                        <div class="button-background">
                                            <div class="buttonStart">
                                                <div class="buttonEnd">
                                                    <div class="buttonMiddle"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-content"><?php echo REG; ?></div>
                                    </div>
                                </button>
                            </div>
                        </form>
                        <?php }else{ ?>
                            Logging is closed in a this server.
                        <?php } ?>
                        <div class="clear">&nbsp;</div>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="contentFooter">&nbsp;</div>
            </div>

        </div>


    </div>
    <div id="ce"></div></div></div></div>

</body>
</html>
