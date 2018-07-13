// ****************************
// SWAP IMMAGE SU PULSANTI
// ****************************
var l=$(window).width();

var h=$(window).height();


function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr;
    for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0 
    var d=document;
    if(d.images){
        if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments;
        for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){
                d.MM_p[j]=new Image;
                d.MM_p[j++].src=a[i];
            }
    }
}

function MM_findObj(n, d) { //v4.01
    var p,i,x;
    if(!d) d=document;
    if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document;
        n=n.substring(0,p);
    }
    if(!(x=d[n])&&d.all) x=d.all[n];
    for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n);
    return x;
}

function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments;
    document.MM_sr=new Array;
    for(i=0;i<(a.length-2);i+=3)
        if ((x=MM_findObj(a[i]))!=null){
            document.MM_sr[j++]=x;
            if(!x.oSrc) x.oSrc=x.src;
            x.src=a[i+2];
        }
}




function GetXmlHttpObject(){
    var xmlHttp=null;
    try{
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
    }catch (e){
        //Internet Explorer
        try{
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e){
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    if(xmlHttp==null){
        alert("errore, il tuo browser non supporta ajax");
        return;
    }
    return xmlHttp;
} 
function cambia_lingua(lingua){
    window.open("http://www.novainformatica.eu/sviluppo/giglio/index.php?lang="+lingua, "_self");
}


function carica_filippine(){
    $("#filippine_home").fadeIn(700);

}
function carica_giglio(){
    $("#giglio_home").fadeIn(700,carica_filippine);

}
var flagpages=0;


function initjpages2(){
  
     
        /* initiciate jPages */
        $(".holder").jPages({
            containerID : "itemContainer1",
            animation : "fadeInDown",
            perPage : 4,
            scrollBrowse : true,
            keyBrowse : true,
            previous: "span.pre",
            next: "span.nex"
            
         
        });
		 
        //  $(".jp-next").html("");
        //$(".jp-previous").html("");
        $('.nyroModal').nyroModal();	
       
        
    
}

function initjpages(){
  
    if(flagpages==0){   
        /* initiciate jPages */
        $(".holder").jPages({
            containerID : "itemContainer",
            animation : "fadeInDown",
            perPage : 4,
            scrollBrowse : true,
            keyBrowse : true,
            previous: "span.pre",
            next: "span.nex"
            
         
        });
		 
        //  $(".jp-next").html("");
        //$(".jp-previous").html("");
        $('.nyroModal').nyroModal();	
       
        flagpages=1;
    }
    $('#nav_cons').show(200);
    $("#cons_bar").stop().animate({
        "left":"218px",
        "width":$("#nav_cons3").width()+5
    }, 1000);
}

function initslider(){
    if(flag==0){
        var lsjQuery = jQuery;
        var curSkin = 'fullwidth';
    
        if(typeof lsjQuery.fn.layerSlider == "undefined") {
            lsShowNotice('layerslider_11','jquery');
        }
        else if(typeof lsjQuery.transit == "undefined" || typeof lsjQuery.transit.modifiedForLayerSlider == "undefined") {
            lsShowNotice('layerslider_11', 'transit');
        }
        else {
            lsjQuery("#layerslider_11").layerSlider({
                width : '100%',
                height : '380px',
                responsive : true,
                responsiveUnder : 1280,
                sublayerContainer : 960,
                autoStart : true,
                pauseOnHover : false,
                firstLayer : 1,
                animateFirstLayer : true,
                randomSlideshow : false,
                twoWaySlideshow : true,
                loops : 0,
                forceLoopNum : true,
                autoPlayVideos : false,
                autoPauseSlideshow : 'auto',
                youtubePreview : 'maxresdefault.jpg',
                keybNav : true,
                touchNav : true,
                skin : 'fullwidth',
                skinsPath : 'http://kreaturamedia.com/wp-content/plugins/LayerSlider/skins/',
                globalBGColor : 'transparent',
                navPrevNext : false,
                navStartStop : false,
                navButtons : false,
                hoverPrevNext : false,
                hoverBottomNav : false,
                showBarTimer : true,
                showCircleTimer : false,
                thumbnailNavigation : 'hover',
                tnWidth : 100,
                tnHeight : 60,
                tnContainerWidth : '60%',
                tnActiveOpacity : 35,
                tnInactiveOpacity : 100,
                imgPreload : true,
                yourLogo : false,
                yourLogoStyle : 'left: 10px; top: 10px;',
                yourLogoLink : false,
                yourLogoTarget : '_self',
                cbInit : function(element) {
              
                },
                cbStart : function(data) { },
                cbStop : function(data) { },
                cbPause : function(data) { },
                cbAnimStart : function(data) { },
                cbAnimStop : function(data) { },
                cbPrev : function(data) { },
                cbNext : function(data) { }
            });
        }
        flag=1;
    }
    
}

function initConsolato(){
    $(".maschera_giglio.sel").hover(function(e){
        $("#freccetta_giglio2").show(0);

    });
    $(".maschera_giglio.sel").mouseout(function(e){
        $("#freccetta_giglio2").hide(0);

    });
    
    $("#nav_cons1").click(function(e){
        $("#nav_cons").hide(0);
        $("#cons_bar").stop().animate({
            "left":"22px",
            "width":$("#nav_cons1").width()
        }, 1000);
    });
    $("#nav_cons2").click(function(e){
        $("#cons_bar").stop().animate({
            "left":"126px",
            "width":$("#nav_cons2").width()+5
        }, 1000);

    });
    $("#nav_cons3").click(function(e){
        
        initjpages();
        $("#cons_bar").stop().animate({
            "left":"218px",
            "width":$("#nav_cons3").width()+5
        }, 1000);
    });
    $("#puls_moduli").click(function(e){
        $('#nav_cons').show(0);
        $("#cons_bar").stop().animate({
            "left":"126px",
            "width":$("#nav_cons2").width()+5
        }, 1000);
    });
    


    
}
function initGiglio(){
    $("#barra_navigazione").css({
        "top":"24px",
        "opacity":"0"
    });
    $("#barra_navigazione").hide(0);
    
    $(".maschera_filippine.sel").hover(function(e){
        $("#freccetta_filippine").show(0);

    });
    $(".maschera_filippine.sel").mouseout(function(e){
        $("#freccetta_filippine").hide(0);

    });
   
   
    
}

function initProfessionisti(){
      
    $("#p1").delay(5000).fadeOut(500,function(e){
        MM_swapImage('pallino1','','img/pallino_off.png',1);
        MM_swapImage('pallino2','','img/pallino_on.png',1);
    });
    $("#p2").delay(5500).fadeIn(500);
    $("#p2").delay(5000).fadeOut(500,function(e){
        MM_swapImage('pallino2','','img/pallino_off.png',1);
        MM_swapImage('pallino3','','img/pallino_on.png',1);
    });
    $("#p3").delay(11500).fadeIn(500);
    $("#p3").delay(5000).fadeOut(500,function(e){
        MM_swapImage('pallino3','','img/pallino_off.png',1);
        MM_swapImage('pallino1','','img/pallino_on.png',1);
    });
    $("#p1").delay(12000).fadeIn(500,initProfessionisti);

} 

function initservizi(){
    $("#container_servizi").stop().animate({
        "margin-top":"-285px",
        "opacity":"1"
    }, 2000);
 
    $("#corpo_servizi2").css("left",l);
  
    $("#next_serv").click(function(e){
        $("#testo_servizi").stop().animate({
            "left":-l
        }, 1000);
        $("#top_servizi").stop().animate({
            "margin-left":"-166px"
        },1000);
        $("#bottom_servizi").stop().animate({
            "margin-left":"-166px"
        },1000);

        $("#testo_servizi").hide(0);
          
        $("#corpo_servizi2").show(0);

        $("#corpo_servizi2").stop().animate({
            "left":"0px"
        }, 1000);
        
        $("#next_serv").hide(0);
        $("#prec_serv").show(0);
        MM_swapImage('pal1','','img/servizi_pallino_off.png',1);
        MM_swapImage('pal2','','img/servizi_pallino_on.png',1);


        
    });
    
    $("#prec_serv").click(function(e){
        $("#corpo_servizi2").stop().animate({
            "left":l
        }, 1000);
        $("#top_servizi").stop().animate({
            "margin-left":"0"
        },1000);
        $("#bottom_servizi").stop().animate({
            "margin-left":"0"
        },1000);
        $("#testo_servizi ").show(0);
        $("#corpo_servizi2").hide(0);

        $("#testo_servizi ").stop().animate({
            "left":"0px"
        }, 1000);
        
        $("#next_serv").show(0);
        $("#prec_serv").hide(0);
        MM_swapImage('pal1','','img/servizi_pallino_on.png',1);
        MM_swapImage('pal2','','img/servizi_pallino_off.png',1);
       
    });
    
}
function initmoduli(){
  
//    $("#mod2").css("left",l);
//    $("#puls_mod_av").click(function(e){
//        $("#mod1").stop().animate({
//            "left":-l
//        }, 1000);
//        $("#mod1").hide(0);
//          
//        $("#mod2").show(0);
//
//        $("#mod2").stop().animate({
//            "left":"0px"
//        }, 1000);
//       
//    });
//    
//    $("#puls_mod_in").click(function(e){
//        $("#mod2").stop().animate({
//            "left":l
//        }, 1000);
//        $("#mod1 ").show(0);
//        $("#mod2").hide(0);
//
//        $("#mod1").stop().animate({
//            "left":"0px"
//        }, 1000);
//        
//
//       
//    });
    
}
var flag_foto=0;
function initfoto(){
    $("#container_foto").stop().animate({
        "margin-top":"-280px",
        "opacity":"1"
    }, 2000);
    if(flag_foto==0){
       
          
        $('.nyroModal').nyroModal();
        flag_foto=1;
    }
 
}
var prec="sedi";
var prec_testo="testo_sedi";
function initcontatti(){
    
    $(".cerchio_contatti").click(function(e){
       
        var id=this.id;
       
        switch(id){
            case "sedi":
                
                if(prec!="sedi"){
                    $("#freccetta_contatti").stop().animate({
                        "margin-left":"-36px"
                    },1000);
                    $("#sedi").stop().animate({
                        "width":"110px",
                        "height":"110px"
                    }, 100);
                    $("#sedi img").stop().animate({
                        "margin-top":"5px"
                    }, 100);
                    $("#testo_sedi").fadeIn(500);
                
                }
                break;
            case "contatti":
                if(prec!="contatti"){

                    $("#freccetta_contatti").stop().animate({
                        "margin-left":"-313px"
                    },1000);  
                    $("#contatti img").stop().animate({
                        "margin-left":"-13.5px",
                        "margin-top":"5px"
                    }, 100);
                    $("#contatti").stop().animate({
                        "width":"110px",
                        "height":"110px"
                    }, 100);
                    $("#testo_contatti").fadeIn(500);

                }
                break;
            case "orari":
                if(prec!="orari"){

                    $("#freccetta_contatti").stop().animate({
                        "margin-left":"247px"
                    },1000);
                    $("#orari img").stop().animate({
                        "margin-left":"-2px",
                        "margin-top":"5px"
                    }, 100);
                    $("#orari").stop().animate({
                        "width":"110px",
                        "height":"110px"
                    }, 100);
                    $("#testo_orari").fadeIn(500);

                }

                break;
        }
       
        if(id!=prec){
            
        

            switch(prec){
            
            
                case "contatti" :

                    $("#contatti img").stop().animate({
                        "margin-left":"-16.5px",
                        "margin-top":"0px"
                    }, 100);
                    $("#contatti").stop().animate({
                        "width":"100px",
                        "height":"100px"
                    }, 100);
                    
                    $("#testo_contatti").fadeOut(100);

                
                    break;
                case "sedi" :
 
                    $("#sedi img").stop().animate({
                        "margin-left":"0px",
                        "margin-top":"0px"
                    }, 100);
                    $("#sedi").stop().animate({
                        "width":"100px",
                        "height":"100px"
                    }, 100);
                    $("#testo_sedi").fadeOut(100);

                
                    break;
                case "orari" :

                    $("#orari img").stop().animate({
                        "margin-left":"-2px",
                        "margin-top":"0px"
                    }, 100);
                    $("#orari").stop().animate({
                        "width":"100px",
                        "height":"100px"
                    }, 100);
                    $("#testo_orari").fadeOut(100);

                
                    break;
            }
        }
        prec=this.id;
       
    });
    
}

/*CONSOLATO*/
function initnews(){
    $("#showcase").awShowcase(
    {
        width:					960,
        height:					182,
        auto:					true,
        interval:				5000,
        continuous:				true,
        loading:				true,
        tooltip_width:			200,
        tooltip_icon_width:		32,
        tooltip_icon_height:	32,
        tooltip_offsetx:		18,
        tooltip_offsety:		0,
        arrows:					true,
        buttons:				true,
        btn_numbers:			true,
        keybord_keys:			true,
        mousetrace:				false,
        pauseonover:			true,
        transition:				'vslide', /* vslide/hslide/fade */
        transition_speed:		500,
        show_caption:			'onload', /* onload/onhover/show */
        thumbnails:				false,
        thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
        thumbnails_direction:	'vertical', /* vertical/horizontal */
        thumbnails_slidex:		1 /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
    });
    for(var i=0;i<5;i++){
        $("#showcase-navigation-button-"+i).html("");
        $("#showcase-navigation-button-"+i).html(" <img src='img/pallino_off.png' />");
    }
    $(".showcase-button-wrapper span.active img").attr("src","img/pallino_on.png");
   
     
    
  
}
function initservizicons(){
    
    $("#orari_cons_tit").click(function(e){
        $("#freccetta_or_se").stop().animate({
            "margin-left":"110px"
        }, 500);
        $("#orari_cons_tit").css({
            backgroundColor :"#445D7B"
        });
        $("#sedi_cons_tit").css({
            backgroundColor :"#647b93"
        });
        $("#testo_se").hide(0);

        $("#testo_or").fadeIn(700);
        $("#backimg").hide(0);

        $("#backimg1").fadeIn(700);

    });
    $("#sedi_cons_tit").click(function(e){
        $("#freccetta_or_se").stop().animate({
            "margin-left":"349px"
        },500);
        $("#orari_cons_tit").css({
            backgroundColor :"#647b93"
        });
        $("#sedi_cons_tit").css({
            backgroundColor :"#445D7B"
        });
        $("#testo_or").hide(0);

        $("#testo_se").fadeIn(700);
        $("#backimg1").hide(0);

        $("#backimg").fadeIn(700);
    });
}

var flag=0;
function initsito(){
     
    var l=$(window).width();

    var h=$(window).height();
    
    $('select').switchify();
    $(".ui-switch.on").mousedown(function(e){
        
        setTimeout(function(){
            cambia_lingua("eng");
        }, 1000);
    
    });
    $(".ui-switch.off").mousedown(function(e){
        
        setTimeout(function(){
            cambia_lingua("it");
        }, 1000);
    });
     
    

    $("#giglio_wrapper").css("left",-l);
    $("#consolato_wrapper").css("left",l);
    
    $(".cerchietto").hover(function(e){
     
        $("#"+this.id).stop().animate({
            "margin-top":"-10px"
        },100);
    });
    $(".cerchietto").mouseout(function(e){
     
        $("#"+this.id).stop().animate({
            "margin-top":"0px"
        },100);
    });
    
    
    $(".#section .section").css("height",h);
    
    var flag_prof=0;
    var flag_cont=0;
    
    $("#header img").fadeIn(700,carica_giglio);
      
 
        
    $(".gotosection").click(function(e){
        var id=$(this).attr("id");
        
        
        if($("#container_storia").css("opacity")==1){
            $("#container_storia").css({
                "opacity":"0",
                "margin-top":"-140px"
            })
           
        }
        if($("#container_servizi").css("opacity")==1){
            $("#container_servizi").css({
                "opacity":"0",
                "margin-top":"-245px"
            });
            $("#corpo_servizi2").css({
                "left":l
            });
            $("#top_servizi").css({
                "margin-left":"0"
            });
            $("#bottom_servizi").css({
                "margin-left":"0"
            });
            $("#testo_servizi ").show(0);
            $("#corpo_servizi2").hide(0);

            $("#testo_servizi ").css({
                "left":"0px"
            });
        
            $("#next_serv").show(0);
            $("#prec_serv").hide(0);
            MM_swapImage('pal1','','img/servizi_pallino_on.png',1);
            MM_swapImage('pal2','','img/servizi_pallino_off.png',1);
        }
        if($("#container_foto").css("opacity")==1){

            $("#container_foto").css({
                "margin-top":"-250px",
                "opacity":"0"
            })
        }
          
        if($("#container_professionisti").css("opacity")==1){
            $("#container_professionisti").css({
                "opacity":"0",
                "margin-top":"-200px"
            })
           
        }
        if(flag_cont==1){
            $("#sotto_cont").hide(0);
            flag_cont=0;
        }
            
        
        if(id!="nav0"){
            $("#barra_navigazione").show(0);
            $("#barra_navigazione1").show(0);
            $("#barra_navigazione").stop().animate({
                "top":"74",
                "opacity":"1"
            },2000); 
            $("#barra_navigazione1").stop().animate({
                "top":"114",
                "opacity":"1"
            },2000); 
            
            switch(id){
             
                case "nav1":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+4,
                        "width":$("#nav1 label").width()
                    },800);
                    $("#container_storia").stop().animate({
                        "margin-top":"-300px",   
                        "opacity":"1"
                    },2000,function(e){
                        $("#img_storia2").hover(function(e){
                            $("#img_storia2").stop().animate({
                                "opacity":"1"
                            });
                            $("#img_storia1").stop().animate({
                                "opacity":"0"
                            });
                        });
                        $("#img_storia2").mouseout(function(e){
                            $("#img_storia2").stop().animate({
                                "opacity":"0"
                            });
                            $("#img_storia1").stop().animate({
                                "opacity":"1"
                            });

                        });
                    });
                   
                   
             
                
                   
                    break;
                case "nav2":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+$("#nav1").width()+8,
                        "width":$("#nav2 label").width()
                    },800);
                    if(flag_prof==0){
                        initProfessionisti()
                        flag_prof=1;
                    }
                    $("#container_professionisti").stop().animate({
                        "margin-top":"-240px",
                        "opacity":"1"
                    }, 2000);
                    break;
                case "nav3":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+$("#nav1").width()+$("#nav2").width()+12,
                        "width":$("#nav3 label").width()
                    },800);
                    initservizi();
                    break;
                case "nav4":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+$("#nav1").width()+$("#nav2").width()+$("#nav3").width()+17,
                        "width":$("#nav4 label").width()
                    },800);
                    initfoto();
                    break;
                case "nav5":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+$("#nav1").width()+$("#nav2").width()+$("#nav3").width()+$("#nav4").width()+21,
                        "width":$("#nav5 label").width()
                    },800);
                    initfoto();

                    break;
				case "nav6":
                    $("#barretta").stop().animate({
                        "left":$("#nav0").width()+$("#nav1").width()+$("#nav2").width()+$("#nav3").width()+$("#nav4").width()+$("#nav5").width()+25,
                        "width":$("#nav6 label").width()
                    },800,function(e){
                        $("#sotto_cont").fadeIn(500);
                        flag_cont=1;
                    });
                    
                    break;
                
            }            

        }
        else{
          
            $("#barra_navigazione").stop().animate({
                "top":"24",
                "opacity":"0"
            },2000);  
            $("#barra_navigazione1").stop().animate({
                "top":"69",
                "opacity":"0"
            },2000); 
            $("#barretta").stop().animate({
                "left":"0",
                "width":$("#nav0 label").width()
            },800,function(e){
                $("#barra_navigazione").hide(0);
                $("#barra_navigazione1").hide(0);
            }); 
            

        }           

    });
    
    var flag_news=0;
    
    $(".maschera_filippine.sel").click(function(e){

        if($("#consolato_wrapper").css("left")!="0px"){
            $(".nav_giglio").hide(0);
            $(".nav_consolato").show(0);
            $("#sotto_cont").hide(0);
            flag_cont=0;
            $("#consolato_wrapper").stop().fadeIn(800);
            $("#header").stop().hide(0);
            $("#freccia_header").stop().hide(0);

            $("#giglio_wrapper").stop().animate({
                "left":-l,
                "opacity":"0"
            },500);
            $("#giglio_wrapper").hide(0);
            $("#consolato_wrapper").css("opacity","1") ;
            $("#consolato_wrapper").stop().animate({          
                "left":"0px",
                "top":"0px"
            },3000,"easeOutBack",               $("#layerslider_11").layerSlider('stop')
                );
            $("#barra_navigazione").stop().animate({
                "top":"24",
                "opacity":"0"
            },2000);  
            $("#barra_navigazione1").stop().animate({
                "top":"69",
                "opacity":"0"
            },2000); 
            $("#barretta").stop().animate({
                "left":"0",
                "width":$("#nav0 label").width()
            },800,function(e){
                $("#barra_navigazione").hide(0);
                $("#barra_navigazione1").hide(0);
            }); 
            initConsolato();
            if(flag_news==0){
                initnews();
                flag_news=1;
            }
        }
    });
  
    $(".maschera_giglio.sel").click(function(e){
        initGiglio();
        if($("#giglio_wrapper").css("left")!="0px"){
            $(".nav_consolato").hide(0);
            $(".nav_giglio").show(0);
            $('#nav_cons').hide(0);
            $("#giglio_wrapper").stop().fadeIn(800);
            
            $("#header").stop().hide(0);
            $("#freccia_header").stop().hide(0);
            
            $("#consolato_wrapper").stop().animate({
                "left":l,
                "opacity":"0"
            },3000);
            $("#consolato_wrapper").hide(0);
            $("#giglio_wrapper").css("opacity","1") ;

            $("#giglio_wrapper").stop().animate({          
                "left":"0px",
                "top":"0px"
            },3000,"easeOutBack",function(e){
                if(flag==0){
                    initslider();
                    flag=1;
                }
                else if(flag==1){
                    $("#layerslider_11").layerSlider('start');  
                    
                }
                
            });
            initGiglio();

            
        }
      
    });
           
  
    
    $("#giglio_home").hover(function(e){
        $("#img_giglio").stop().animate({
            "width":"246px",
            "height":"260px",
            "top":"-11px",
            "left":"-5px"
        },100);
    });
    $("#giglio_home").mouseout(function(e){
 
        $("#img_giglio").stop().animate({
            "width":"236px",
            "height":"250px",
            "top":"-6px",
            "left":"0px"
        },100);
 
    });
    $("#giglio_home").click(function(e){
        $("#giglio_wrapper").fadeIn(800);
        $("#header").hide(0);
        $("#freccia_header").hide(0);

        $("#corpo_index").animate({
            "left":l
        },2000);
        $("#giglio_wrapper").animate({          
            "left":"0px"
        },2000,"easeOutBack",initslider);
        $("#corpo_index").hide(0);
           

        
    });
    $("#filippine_home").hover(function(e){
        $("#img_consolato").stop().animate({
            "width":"246px",
            "height":"260px",
            "top":"-11px",
            "left":"-5px"
        },100);
 
    });
    $("#filippine_home").mouseout(function(e){
 
        $("#img_consolato").stop().animate({
            "width":"236px",
            "height":"250px",
            "top":"-6px",
            "left":"0px"
        },100);
 
    });
    
    $("#filippine_home").click(function(e){
        $("#consolato_wrapper").fadeIn(800);
        $("#header").hide(0);
        $("#freccia_header").hide(0);

        $("#corpo_index").animate({
            "left":-l
        },2000);
        $("#consolato_wrapper").animate({          
            "left":"0px"
        },2000,"easeOutBack");
        $("#corpo_index").hide(0);

        initnews();
        
        $("#nav_cons").hide(0);
       
        flag_news=1;
        
    });
    
    
 
    
    initGiglio();
    initConsolato();
    initcontatti();
    initmoduli();
    initservizicons();
}
 
$(window).resize(function(e){      
    l=$(window).width();
    h=$(window).height(); 
    $("#section .section").css("height",h);

});
