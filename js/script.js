function swap(oField1, oField2){
  var temp = oField1.value;
  oField1.value = oField2.value;
  oField2.value = temp;
}

$(document).ready(function() {
  $(".cii").autocomplete({
     source: "autocity.php" 
  });

  $("#datepick").datepicker();
});

$(document).ready(function() {
	$('input[name="intervaltype"]').click(function () {
        $(this).closest('label').tab('show');
        });

	$(".menu1").hover(function() {
			$(".menu-display").css("display", "none");
            $(".menu-view1").css("display", "inline").css("position", "relative");
            $(".menu1").click(function() {
            	var va = $(this).text();
            	$(".xtra").text(va);
            });                       
    });
    $(".menu2").hover(function() {
			$(".menu-display").css("display", "none");
            $(".menu-view2").css("display", "inline").css("position", "relative");           
            $(".menu2").click(function() {
            	var va = $(this).text();
            	$(".xtra").text(va);
            });
    });
    $(".menu3").hover(function() {
			$(".menu-display").css("display", "none");
            $(".menu-view3").css("display", "inline").css("position", "relative"); 
            $(".menu3").click(function() {
            	var va = $(this).text();
            	$(".xtra").text(va);
            });          
    });
    $(".menu4").hover(function() {
			$(".menu-display").css("display", "none");
            $(".menu-view4").css("display", "inline").css("position", "relative");      
            $(".menu4").click(function() {
            	var va = $(this).text();
            	$(".xtra").text(va);
            });
    });$(".menu5").hover(function() {
			$(".menu-display").css("display", "none");
            $(".menu-view5").css("display", "inline").css("position", "relative");           
            $(".menu5").click(function() {
            	var va = $(this).text();
            	$(".xtra").text(va);
            });
    });

    
});