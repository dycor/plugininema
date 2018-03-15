jQuery(function(){

	//Permet de mettre le background-color en noir du fond
	jQuery('#accueil').parent().parent().parent().css('background-color', 'rgb(23,24,27)');

	$("#secondStep ul li").hover(function(){
        $(this).attr("style", "background-color: rgb(36, 182, 233);");
        $(this).children().find(".imageEtat").attr("style", "-webkit-filter: opacity(10%); filter: opacity(10%);");
        $(this).children().find("p").attr("style", "-webkit-filter: opacity(50%); filter: opacity(50%);");
        $(this).children().find(".div-hand-up").show();
    });
    $("#secondStep ul li").mouseleave(function(){
        $(this).attr("style", "background-color: #FFFFFF;");
        $(this).children().find(".imageEtat").attr("style", "-webkit-filter: none; filter: none;");
        $(this).children().find("p").attr("style", "-webkit-filter: none; filter: none;");
        $(this).children().find(".div-hand-up").hide();
    });

});