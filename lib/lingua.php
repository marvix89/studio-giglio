<?php

$lingua = $_GET['lang'];
if (trim($lingua) == "eng")
    echo '        <link href="css/stileng.css" rel="stylesheet" type="text/css" >';

switch ($lingua) {



##### CASE IT ######
    case "it":

        /*         * *INDEX* */
        $index_studio_p = "Studio Giglio";
        $index_studio_l = "Commercialisti e Avvocati";
        $index_cons1 = "Consolato";
        $index_cons2 = "delle Filippine";


        /*         * *INDEX GIGLIO* */

        $nav1 = "Storia";
        $nav2 = "Professionisti";
        $nav3 = "Servizi";
        $nav4 = "Foto&amp;Video";
		$nav5 = "Notizie";
        $nav6 = "Contatti";
        $slide1 = "Consulenze";
        $slide2 = "Contabili";
        $slide3 = "Fiscali";
        $slide4 = "Contributiva";
        $slide5 = "Assistenza Legale e Sociale";
        $slide6 = "Fusioni";
        $slide7 = "Acquisizioni";
        $slide8 = "Indagini Conoscitive";
		$slide51 = "Consulenza del lavoro";
		$slide11 = "Finanza Agevolata";
		$slide21 = "Pianificazione";
		$slide31 = " e ";
		$slide41 = "Rendicontazione";

        /*         * *STORIA* */

        $storia = "Lo studio nasce oltre 50anni fa con l’ obiettivo di rispondere in modo tempestivo ed efficace alle continue esigenze dei nostri clienti, che supporta garantendo un senso di consulenza innovativo e personalizzato.
Fin dall’inizio, la condivisione di uno stile di lavoro fondato sull’ingegno al miglioramento continuo e sulla dedizione al cliente, completano la competenza tecnica, consentendo di per far fronte alle mutate esigenze di richieste del mercato.

 La diversità delle nostre esperienze professionali era creata da una struttura di consulenza integrale e e multidisciplinare che, condividendo rigorosità e stile, assiste i clienti nei principali campi economici-giuridici. raggiungibili grazie ad un network interprofessionale che, pur nelle specifiche competenze di ogni suo componente, opera con modalità integrate e continui interscambio per ogni singola attività.
Dal 2013lo studio Giglio è membro dell'HLBI Internatinal Member Firm, network internazionale di accounts con rappresentanza nelle piu’ importanti città del mondo e Membro della ECCP (Camera di Commercio Internazionale).";

        /*         * *PROFESSIONISTI* */

        $prof1 = "Commercialisti";
        $prof2 = "Avvocati";
        $prof3 = "Consulenti del lavoro";
        $prof4 = "Consulenza contabile e fiscale";
        $prof5 = "Consulenza legale";
        $prof6 = "Altre attivit&agrave;";
        $prof7 = "Consulenza in materia di salute, formazione e sicurezza sui luoghi di lavoro";
        $prof8 = "Consulenza in materia di internalizzazione e cooperazione internazionale";
        $prof9 = "Consulenza in materia civile e penale societario";


        /*         * *SERVIZI* */

       $serv1 = "Assistenza contabile ed amministrativa";
		$serv1_desc = "adeguamenti contabili<br />
						indagini e check up contabili<br />
                        reporting, budget e controllo di gestione<br />
                       analisi consistenza patrimoniale dei valori societari per l’adeguamento Basilea 2";
					   
        $serv2 = "Consulenza fiscale";
		$serv2_desc = "Pareri fiscali e contenziosi tributari<br />
					  Revisione e check-up fiscale<br />
					  Assistenza imposte indirette/dirette<br />
					  Adempimenti fiscali e pagamenti F24<br />
					  Rappresentanze tributarie<br />
					  Dichiarazione intra, Black list<br />
					  Lettere d'intenti, denuncie di successione<br />
					  Costituzioe di Società e joint ventures";
							  
        $serv3 = "Consulenza societaria";
		$serv3_desc = "Contrattualistica<br />
						Procuratori generali e speciali<br />
						Assistenza nella tenuta dei libri sociali<br />
						Cariche societarie: sindaci, amministratori, organismi di vigilanza, liquidatori;";
						
        $serv4 = "Consulenza per operazioni straordinarie";
		$serv4_desc = "Fusione acquisizione scissione trasformazione e liquidazione<br />
						 Valutazioni peritali di società ed aziende<br />
						 Due diligences fiscali, contabili e finanziarie<br />
						 Supporto tecnico, fiscale e contabile nelle procedure pre/post concorsuali";
						 
        $serv5 = "Cariche societarie";
		$serv5_desc = "Sindaci di società<br />
					  Amministratore di società<br />
					  Organismo di vigilanza (L. 231/1)<br />
					  Liquidatori";
					  
        $serv6 = "Revisione legale e certificazione";
		$serv6_desc = "Integrazione di “due diligences” per la parte analitico contabile<br />
					   Revisioni ad uso bilancio consolidato<br />
					   Sistemi di controllo interno<br />
					   Revisioni e certificazioni obbligatorie e volontarie";
					   
        $serv7 = "Lavoro";
		$serv7_desc = "Elaborazione paghe<br />
					   Pratiche assunzioni/licenziamenti<br />
				       Consulenza del lavoro<br />
					   UNIEMENS";
					   
        $serv8 = "Consulenza legale ed accordi stragiudiziari: assistenza legale in materia fiscale e procedimenti penali relativi a reati fiscali";
		$serv8_desc = "Assistenza fiscale in materia di recupero crediti<br />
					  Successioni e pianificazioni patrimoniali<br />
					  Contrattualistica nazionale e internazionale<br />
					 Contenzioso civile e penale<br />
					   Procedure concorsuali<br />
					  Arbitrati e conciliazioni<br />
					  Assistenza nell’ammissione a procedure concorsuali<br />
					 Accordi con clienti e fornitori<br />
					 Accordi con banche e ristrutturazioni dei debiti bancari";
					 
        $serv9 = "Servizi di outosorcing";
		$serv9_desc = "Contabilità<br />
					  Servizi amministrativi<br />
					  Assistenza contabile, amministrativa presso le aziende<br />
					  Gestione paghe e contributi<br />
					  Controllo di gestione<br />
					  Direzione aziendale<br />
					  Sicurezza sul lavoro<br />
					  Controlli sulle qualità (sistemi HACCP, ISO 9000. ISO 14000)<br />
					  Pianificazione, monitoraggio e rendicontazione spese relative a progetti finanziati dai fondi strutturali e di finanza aziendale";
									
        $serv10 = "Privacy";

        /*         * *FOTO E VIDEO* */
        $foto1 = "Foto";
        $foto2 = "Video";

        /*         * *CONTATTI* */
        $cont1 = "tel. 081 49 77 155";
        $cont2 = "tel. 081 49 77 170";
        $cont3 = "tel. 0825 44 75 87";
		$cont4 = "tel. 0825 39 188";
        $contact1 = "Sedi";
        $contact2 = "Orari";
        $contact3 = "Napoli";
        $contact4 = "Roma";
        $contact5 = "dal Luned&igrave; al Venerd&igrave;";


        $orari1 = "Luned&igrave; | Marted&igrave;   <br> Mercoled&igrave; | Venerd&igrave;";
        $orari2 = "Gioved&igrave;";
		$orari3 = "Solo il 2° sabato del mese";

        $ser1 = "Passaporto";
        $ser2 = "Assistenza Fiscale";

        $link = "Link Utili";

        $mod1 = "Moduli e Certificati";
        $mod2 = "Scegli e scarica pdf";
        $mod3 = "moduli successivi";
        $mod4 = "moduli precedenti";
        $mod5 = "Dichiarazione di stato di famiglia";

        $puls = "Moduli";

        break;





##### CASE ENG ######

    case "eng":
        $index_studio_p = "Studio Giglio";
        $index_studio_l = "Accountants and Lawyers";
        $index_cons1 = "Consulate";
        $index_cons2 = "of Philippines";
        $nav1 = "Story";
        $nav2 = "Professionals";
        $nav3 = "Services";
        $nav4 = "Photo&amp;Video";
        $nav5 = "News";
        $nav6 = "Contacts";
        $slide1 = "Consultations";
        $slide2 = "Accounting";
        $slide3 = "Tax";
        $slide4 = "Contributions";
        $slide5 = "Legal and Social Assistance";
        $slide6 = "Cast";
        $slide7 = "Acquisitions";
        $slide8 = "Scouting Surveys";
		$slide51 = "Consulenza del lavoro";
		$slide11 = "Finanza Agevolata";
		$slide21 = "Pianificazione";
		$slide31 = " e ";
		$slide41 = "Rendicontazione";
		
		
        $storia = "Lo studio nasce oltre 50anni fa con l’ obiettivo di rispondere in modo tempestivo ed efficace alle continue esigenze dei nostri clienti, che supporta garantendo un senso di consulenza innovativo e personalizzato.
Fin dall’inizio, la condivisione di uno stile di lavoro fondato sull’ingegno al miglioramento continuo e sulla dedizione al cliente, completano la competenza tecnica, consentendo di per far fronte alle mutate esigenze di richieste del mercato. La diversità delle nostre esperienze professionali era creata da una struttura di consulenza integrale e e multidisciplinare che, condividendo rigorosità e stile, assiste i clienti nei principali campi economici-giuridici. raggiungibili grazie ad un network interprofessionale che, pur nelle specifiche competenze di ogni suo componente, opera con modalità integrate e continui interscambio per ogni singola attività.
Dal 2013lo studio Giglio è membro dell'HLBI Internatinal Member Firm, network internazionale di accounts con rappresentanza nelle piu’ importanti città del mondo e Membro della ECCP (Camera di Commercio Internazionale).";
  /*         * *PROFESSIONISTI* */

        $prof1 = "Commercialisti";
        $prof2 = "Avvocati";
        $prof3 = "Consulenti del lavoro";
        $prof4 = "Consulenza contabile e fiscale";
        $prof5 = "Consulenza legale";
        $prof6 = "Altre attivit&agrave;";
        $prof7 = "Consulenza in materia di salute, formazione e sicurezza sui luoghi di lavoro";
        $prof8 = "Consulenza in materia di internalizzazione e cooperazione internazionale";
        $prof9 = "Consulenza in materia civile e penale societario";


        /*         * *SERVIZI* */

       $serv1 = "Assistenza contabile ed amministrativa";
		$serv1_desc = "adeguamenti contabili<br />
						indagini e check up contabili<br />
                        reporting, budget e controllo di gestione<br />
                       analisi consistenza patrimoniale dei valori societari per l’adeguamento Basilea 2";
					   
        $serv2 = "Consulenza fiscale";
		$serv2_desc = "Pareri fiscali e contenziosi tributari<br />
					  Revisione e check-up fiscale<br />
					  Assistenza imposte indirette/dirette<br />
					  Adempimenti fiscali e pagamenti F24<br />
					  Rappresentanze tributarie<br />
					  Dichiarazione intra, Black list<br />
					  Lettere d'intenti, denuncie di successione<br />
					  Costituzioe di Società e joint ventures";
							  
        $serv3 = "Consulenza societaria";
		$serv3_desc = "Contrattualistica<br />
						Procuratori generali e speciali<br />
						Assistenza nella tenuta dei libri sociali<br />
						Cariche societarie: sindaci, amministratori, organismi di vigilanza, liquidatori;";
						
        $serv4 = "Consulenza per operazioni straordinarie:";
		$serv4_desc = "Fusione acquisizione scissione trasformazione e liquidazione<br />
						 Valutazioni peritali di società ed aziende<br />
						 Due diligences fiscali, contabili e finanziarie<br />
						 Supporto tecnico, fiscale e contabile nelle procedure pre/post concorsuali";
						 
        $serv5 = "Cariche societarie";
		$serv5_desc = "Sindaci di società<br />
					  Amministratore di società<br />
					  Organismo di vigilanza (L. 231/1)<br />
					  Liquidatori";
					  
        $serv6 = "Revisione legale e certificazione";
		$serv6_desc = "Integrazione di “due diligences” per la parte analitico contabile<br />
					   Revisioni ad uso bilancio consolidato<br />
					   Sistemi di controllo interno<br />
					   Revisioni e certificazioni obbligatorie e volontarie";
					   
        $serv7 = "Lavoro";
		$serv7_desc = "Elaborazione paghe<br />
					   Pratiche assunzioni/licenziamenti<br />
				       Consulenza del lavoro<br />
					   UNIEMENS";
					   
        $serv8 = "Consulenza legale ed accordi stragiudiziari: assistenza legale in materia fiscale e procedimenti penali relativi a reati fiscali";
		$serv8_desc = "Assistenza fiscale in materia di recupero crediti<br />
					  Successioni e pianificazioni patrimoniali<br />
					  Contrattualistica nazionale e internazionale<br />
					 Contenzioso civile e penale<br />
					   Procedure concorsuali<br />
					  Arbitrati e conciliazioni<br />
					  Assistenza nell’ammissione a procedure concorsuali<br />
					 Accordi con clienti e fornitori<br />
					 Accordi con banche e ristrutturazioni dei debiti bancari";
					 
        $serv9 = "Servizi di outosorcing";
		$serv9_desc = "Contabilità<br />
					  Servizi amministrativi<br />
					  Assistenza contabile, amministrativa presso le aziende<br />
					  Gestione paghe e contributi<br />
					  Controllo di gestione<br />
					  Direzione aziendale<br />
					  Sicurezza sul lavoro<br />
					  Controlli sulle qualità (sistemi HACCP, ISO 9000. ISO 14000)<br />
					  Pianificazione, monitoraggio e rendicontazione spese relative a progetti finanziati dai fondi strutturali e di finanza aziendale";
									
        $serv10 = "Privacy";


        $foto1 = "Photo";
        $foto2 = "Video";

        $cont1 = "tel. +39 081 49 77 155";
        $cont2 = "tel. +39 081 49 77 170";
        $cont3 = "tel. +39 0825 44 75 87";
		$cont4 = "tel. 0825 39 188";
        $contact1 = "Locations";
        $contact2 = "Times";
        $contact3 = "Naples";
        $contact4 = "Rome";
        $contact5 = "Monday to Friday";



        /*         * **CONSOLATO FILIPPINE** */


        $orari1 = "Monday | Tuesday <br> Wednesday | Friday";
        $orari2 = "Thursday";
		$orari3 = "Solo il 2° sabato del mese";
		
        $ser1 = "Passport";
        $ser2 = "Tax Assistance";


        $link = "Useful Links";

        $mod1 = "Forms and Certificates";
        $mod2 = "Choose and download pdf";
        $mod3 = "next modules";
        $mod4 = "previous modules";
        $mod5 = "Statement of family status";

        $puls = "Forms";

        break;



##### CASE DEFAULT ######
    default :



        /*         * *INDEX* */
        $index_studio_p = "Studio Giglio";
        $index_studio_l = "Commercialisti e Avvocati";
        $index_cons1 = "Consolato";
        $index_cons2 = "delle Filippine";


        /*         * *INDEX GIGLIO* */

        $nav1 = "Storia";
        $nav2 = "Professionisti";
        $nav3 = "Servizi";
        $nav4 = "Foto&amp;Video";
		$nav5 = "Notizie";
        $nav6 = "Contatti";
		
        $slide1 = "Consulenze";
        $slide2 = "Contabili";
        $slide3 = "Fiscali";
        $slide4 = "Contributiva";
        $slide5 = "Assistenza Legale e Sociale";
        $slide6 = "Fusioni";
        $slide7 = "Acquisizioni";
        $slide8 = "Indagini Conoscitive";
		$slide51 = "Consulenza del lavoro";
		$slide11 = "Finanza Agevolata";
		$slide21 = "Pianificazione";
		$slide31 = " e ";
		$slide41 = "Rendicontazione";


        /*         * *STORIA* */

        $storia = "Lo studio nasce oltre 50anni fa con l’ obiettivo di rispondere in modo tempestivo ed efficace alle continue esigenze dei nostri clienti, che supporta garantendo un senso di consulenza innovativo e personalizzato.
Fin dall’inizio, la condivisione di uno stile di lavoro fondato sull’ingegno al miglioramento continuo e sulla dedizione al cliente, completano la competenza tecnica, consentendo di per far fronte alle mutate esigenze di richieste del mercato. La diversità delle nostre esperienze professionali era creata da una struttura di consulenza integrale e e multidisciplinare che, condividendo rigorosità e stile, assiste i clienti nei principali campi economici-giuridici. raggiungibili grazie ad un network interprofessionale che, pur nelle specifiche competenze di ogni suo componente, opera con modalità integrate e continui interscambio per ogni singola attività.
Dal 2013lo studio Giglio è membro dell'HLBI Internatinal Member Firm, network internazionale di accounts con rappresentanza nelle piu’ importanti città del mondo e Membro della ECCP (Camera di Commercio Internazionale).";

        /*         * *PROFESSIONISTI* */

        $prof1 = "Commercialisti";
        $prof2 = "Avvocati";
        $prof3 = "Consulenti del lavoro";
        $prof4 = "Consulenza contabile e fiscale";
        $prof5 = "Consulenza legale";
        $prof6 = "Altre attivit&agrave;";
        $prof7 = "Consulenza in materia di salute, formazione e sicurezza sui luoghi di lavoro";
        $prof8 = "Consulenza in materia di internalizzazione e cooperazione internazionale";
        $prof9 = "Consulenza in materia civile e penale societario";


        /*         * *SERVIZI* */

        $serv1 = "Assistenza contabile ed amministrativa";
		$serv1_desc = "adeguamenti contabili<br />
						indagini e check up contabili<br />
                        reporting, budget e controllo di gestione<br />
                       analisi consistenza patrimoniale dei valori societari per l’adeguamento Basilea 2";
					   
        $serv2 = "Consulenza fiscale";
		$serv2_desc = "Pareri fiscali e contenziosi tributari<br />
					  Revisione e check-up fiscale<br />
					  Assistenza imposte indirette/dirette<br />
					  Adempimenti fiscali e pagamenti F24<br />
					  Rappresentanze tributarie<br />
					  Dichiarazione intra, Black list<br />
					  Lettere d'intenti, denuncie di successione<br />
					  Costituzioe di Società e joint ventures";
							  
        $serv3 = "Consulenza societaria";
		$serv3_desc = "Contrattualistica<br />
						Procuratori generali e speciali<br />
						Assistenza nella tenuta dei libri sociali<br />
						Cariche societarie: sindaci, amministratori, organismi di vigilanza, liquidatori;";
						
        $serv4 = "Consulenza per operazioni straordinarie";
		$serv4_desc = "Fusione acquisizione scissione trasformazione e liquidazione<br />
						 Valutazioni peritali di società ed aziende<br />
						 Due diligences fiscali, contabili e finanziarie<br />
						 Supporto tecnico, fiscale e contabile nelle procedure pre/post concorsuali";
						 
        $serv5 = "Cariche societarie";
		$serv5_desc = "Sindaci di società<br />
					  Amministratore di società<br />
					  Organismo di vigilanza (L. 231/1)<br />
					  Liquidatori";
					  
        $serv6 = "Revisione legale e certificazione";
		$serv6_desc = "Integrazione di “due diligences” per la parte analitico contabile<br />
					   Revisioni ad uso bilancio consolidato<br />
					   Sistemi di controllo interno<br />
					   Revisioni e certificazioni obbligatorie e volontarie";
					   
        $serv7 = "Lavoro";
		$serv7_desc = "Elaborazione paghe<br />
					   Pratiche assunzioni/licenziamenti<br />
				       Consulenza del lavoro<br />
					   UNIEMENS";
					   
        $serv8 = "Consulenza legale ed accordi stragiudiziari: assistenza legale in materia fiscale e procedimenti penali relativi a reati fiscali";
		$serv8_desc = "Assistenza fiscale in materia di recupero crediti<br />
					  Successioni e pianificazioni patrimoniali<br />
					  Contrattualistica nazionale e internazionale<br />
					 Contenzioso civile e penale<br />
					   Procedure concorsuali<br />
					  Arbitrati e conciliazioni<br />
					  Assistenza nell’ammissione a procedure concorsuali<br />
					 Accordi con clienti e fornitori<br />
					 Accordi con banche e ristrutturazioni dei debiti bancari";
					 
        $serv9 = "Servizi di outosorcing";
		$serv9_desc = "Contabilità<br />
					  Servizi amministrativi<br />
					  Assistenza contabile, amministrativa presso le aziende<br />
					  Gestione paghe e contributi<br />
					  Controllo di gestione<br />
					  Direzione aziendale<br />
					  Sicurezza sul lavoro<br />
					  Controlli sulle qualità (sistemi HACCP, ISO 9000. ISO 14000)<br />
					  Pianificazione, monitoraggio e rendicontazione spese relative a progetti finanziati dai fondi strutturali e di finanza aziendale";
									
        $serv10 = "Privacy";
         

        /*         * *FOTO E VIDEO* */
        $foto1 = "Foto";
        $foto2 = "Video";

        /*         * *CONTATTI* */
        $cont1 = "tel. 081 49 77 155";
        $cont2 = "tel. 081 49 77 170";
        $cont3 = "tel. 0825 44 75 87";
		$cont4 = "tel. 0825 39 188";
        $contact1 = "Sedi";
        $contact2 = "Orari";
        $contact3 = "Napoli";
        $contact4 = "Roma";
        $contact5 = "dal Luned&igrave; al Venerd&igrave;";


        $orari1 = "Luned&igrave; | Marted&igrave;   <br> Mercoled&igrave; | Venerd&igrave;";
        $orari2 = "Gioved&igrave;";
		$orari3 = "Solo il 2° sabato del mese";

        $ser1 = "Passaporto";
        $ser2 = "Assistenza Fiscale";

        $link = "Link Utili";

        $mod1 = "Moduli e Certificati";
        $mod2 = "Scegli e scarica pdf";
        $mod3 = "moduli successivi";
        $mod4 = "moduli precedenti";
        $mod5 = "Dichiarazione di stato di famiglia";

        $puls = "Moduli";
        break;
}
?>