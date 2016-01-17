jQuery(document).ready(function() {
	$("#desc").show();
	$(".item").click(function() {
		var lol =$(this).data("cont");
		var lol2 =$(this).data("titu");
		$(".hidee").hide();		
		$("#"+lol).show();
		$(".item").css("color","silver");	
		$(this).css("color","#D53500");		
		$(".solinfo").css("color","white");	
		$("#titproyec").html(lol2);
	});

});