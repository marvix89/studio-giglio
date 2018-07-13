<div id="consolato_wrapper">
    <div id="nav" class="nav_consolato">
        <div id="header_giglio">

            <div class="vai_giglio nosel">  

                <img alt=""  src="img/logo_giglio_1.png" id="giglio_homepage2">
                <img alt="" src="img/freccetta_filippine.png" id="freccetta_giglio2">

            </div>
            <a  href="#s7">  <div class="maschera_giglio sel"></div> </a> 


            <div class="vai_filippine ">

                <img alt="" src="img/<?php if(trim($lingua)=="eng") echo 'logo_consolato_eng.png'; else echo 'logo_consolato.png';?>"  id="filippine_homepage2">
                <img alt="" src="img/freccetta_giglio.png" id="freccetta_filippine2">

            </div>
            <div class="maschera_filippine"></div>
            

        </div>
        <div>
            <div id="freccina2">
            </div>
            <div id="bordo_giglio">
            </div>

        </div>
 
    </div>
    <div id="nav_cons"><div class="div">
    <a class="gotosection" data-section="7" id="nav_cons1">Home</a>
    <a id="nav_cons2" class="gotosection" data-section="8"><?=$puls?></a>
    <a id="nav_cons3" class="gotosection" data-section="9">News</a>
    <div id="cons_bar"></div></div></div>

    <div id="sections">

        <section class="section" id="s7">
            <div class="content wide stretchwrap">
                <div id="consolato_home">
                    <div id="orari_sedi">
                        <div id="orari_cons_tit">
                            <p><?=$contact2  ?></p>
                        </div>
                        <div id="sedi_cons_tit">
                            <p><?=$contact1  ?></p>
                        </div>
                        <div id="freccetta_or_se">
                        </div>
                        <div id="testo_orari_sedi">
                            <div id="testo_or">
                                <div id="l1"><?= $orari1 ?></div>    
                                <div  id="l2">10.00 - 12.00</div>
                                
                               <div id="l1"><?= $orari2 ?></div>
                                <div  id="l2">14.30 - 16.30</div>
                                
								<div id="l1"><?= $orari3 ?></div>
                                <div  id="l2">10.00 - 12.00</div>
                            </div>
                            <p id="testo_se">
                                <label>Via Guglielmo Sanfelice, 24 - 80133 <?= $contact3 ?></label><br>
                                <label>Via Pionati, 12 - 83100 Avellino</label><br>
                                <label>Via Sant'Angelo, 104 - 83036 Mirabella Eclano (AV)</label><br>
                                <label>Via Torfiorenza, 56 - 00199 <?= $contact4 ?></label><br>
                            </p>
                        </div>
                        <div id="backimg1">
                        </div>
                        <div id="backimg">
                        </div>
                    </div>
                    <div id="servizi_cons">
                        <p id="titolo_servizi_cons"><?= $nav3 ?></p>
                        <p id="testo_servizi_cons">
                            <label><?= $ser1 ?> and travel documents,</label><br>
                            <label>Report of birth, Report of death,</label><br>
                            <label>Special Power, Visa, <?= $ser2 ?>.</label>

                        </p>
                        <div id="backimg2"> 
                        </div>
                    </div>
                    <?php include 'slidernews.php'; ?>
                    <div id="link_utili">
                        <p id="titolo_link"><?= $link ?></p>
                        <div id="container_link">
                            <p class="testo_link"><a href="http://www.philital.com/default_italy.htm">www.philital.com</a></p>
                            <p class="testo_link"><a>link2</a></p>
                            <p class="testo_link"><a>link3</a></p>
                        </div>
                        <div id="backimg3">
                        </div>

                    </div>
                    <div id="moduli">
                        <p id="titolo_moduli"><?= $mod1 ?></p>
                        <div id="puls_moduli"  class="gotosection" data-section="8">
                            <p><?= $mod2 ?></p>
                        </div>
                        <div id="backimg4"> 
                        </div>
                    </div>
                    <div id="email_cons">
                        <p><a href="mailto:consolatodellefilippine@studiogiglio.it">consolatodellefilippine@studiogiglio.it</a></p>
                    </div>
                </div>
            </div>	
        </section>
        <section class="section" id="s8">
            <div class="content wide stretchwrap">
                <div id="container_moduli">

                    <div id="mod1"> 
                        <a href="pdf/ANNEX B - GENERAL AFFIDAVIT.pdf" target="_blank">

                            <div class="modulo">
                                <p class="nome_modulo">General affidavit</p>
                            </div>  
                        </a>
                        <a href="pdf/ANNEX D - AFFIDAVIT OF SUPPORT.pdf" target="_blank">

                            <div class="modulo">
                                <p class="nome_modulo">Affidavit of support</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX F - SPA.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Spa</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX H - AFFIDAVIT (SURNAME).pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit (surname)</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX J - AFFIDAVIT (DELAYED REPORT OF BIRTH).pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit (delayed report of birth)</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX N - REPORT OF DEATH.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Report of death</p>

                            </div>
                        </a>
                        <a href="pdf/AnnexG-ROB2_06June2011_.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Report of birth</p>

                            </div>
                        </a>


                        <a href="pdf/ANNEX C- AFFIDAVIT OF SUPPORT AND CONSENT.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit of support and consent</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX E - AFFIDAVIT OF ABANDONMENT.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit of abandonement</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX F.2 - SPA ITALIAN CITIZEN.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Spa Italian citizen</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX I - AFFIDAVIT OF ILLEGITIMACY OF A MARRIED WOMAN.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit of illegitimacy of a married woman</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX K - AFFIDAVIT (LEGITIMATION).pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo">Affidavit (legitimation)</p>

                            </div>
                        </a>
                        <a href="pdf/ANNEX T - DICHIARAZIONE DI STATO DI FAMIGLIA.pdf" target="_blank">
                            <div class="modulo">
                                <p class="nome_modulo"><?= $mod5 ?></p>

                            </div>
                        </a>


                    </div>

                </div>
            </div>	
        </section>
        <section class="section" id="s9">
            <div class="content wide stretchwrap">
                <div id="container_news">
                    <div id="itemContainer">
                        <?php
                        $SqlString = "select * from news order by data desc ";
                        $post_sql = $data->query($SqlString);

                        if (trim($lingua) == "eng") {
                            if (mysql_num_rows($post_sql) > 0) {
                                while ($post_obj = $data->estrai($post_sql)) {
                                    ?>

                                    <div class="news" >
                                        <a href="popup_news.php?id=<?= $post_obj->id ?>" class="nyroModal">
                                            <p class="titolo_n"><?= $post_obj->titolo_en ?></p> 
                                            <?php if (trim($post_obj->foto) != "") { ?>
                                                <div class="img_news" style="background:url('upload/<?= $post_obj->foto ?>') no-repeat center center;">
                                                </div>
                                            <?php } ?>
                                            <p class="descrizione_news  <?php if (trim($post_obj->foto) == "") echo "n"; ?>"><?php echo substr($post_obj->descrizione_en, 0, 100) . ".." ?></p>
                                            <p class="data_n"><?= $post_obj->data ?></p>
                                        </a>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        else {
                            if (mysql_num_rows($post_sql) > 0) {
                                while ($post_obj = $data->estrai($post_sql)) {
                                    ?>
                                    <div class="news" >
                                        <a href="popup_news.php?id=<?= $post_obj->id ?>" class="nyroModal">
                                            <p class="titolo_n"><?= $post_obj->titolo ?></p> 
                                            <?php if (trim($post_obj->foto) != "") { ?>
                                                 <div class="img_news" style="background:url('upload/<?= $post_obj->foto ?>') no-repeat center center;">
                                                </div>
                                            <?php } ?>
                                            <p class="descrizione_news  <?php if (trim($post_obj->foto) == "") echo "n"; ?>"><?php echo substr($post_obj->descrizione, 0, 100) . ".." ?></p>
                                            <p class="data_n"><?= format_data($post_obj->data) ?></p>
                                        </a>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        $data->disconnetti();
                        ?>
                    </div>
                    <div id="container_paginazione">
                    <span class="pre"></span>
                    <div class="holder" id="holder"></div>
                    <span class="nex"></span>
                    </div>
                </div>
            </div>	
        </section>



    </div>



</div>

