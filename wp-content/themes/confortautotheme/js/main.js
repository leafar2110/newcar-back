		
jQuery(document).ready(function($){

	/* Open the sidenav 
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}*/

	$(".open-nav").click(function(){
		document.getElementById("mySidenav").style.width = "100%";
	});

	$(".close-nav").click(function(){
		document.getElementById("mySidenav").style.width = "0";
	});

	$("#neumatico-search1").click(
		function(){
		$("#form-neumatico-page").submit();
		}
	);

	$("#neumatico-clear1").click(
		function(){
			$(".select-neumatico1").val("");
		}
	);

	/*  Gallery lightBox
 	================================================*/ 

 	if( $(".lightbox").length > 0 ) {

		$(".lightbox").prettyPhoto();
		
	}

	/*  Owl carousel
 	================================================*/ 

 	if( $(".owl-carousel").length > 0 ) {

		$(".owl-carousel").owlCarousel({

			 margin:25,
			 stagePadding: 25,
	   		 nav:true,
	   		 navText: [
		      "<i class='glyphicon glyphicon-chevron-left'></i>",
		      "<i class='glyphicon glyphicon-chevron-right'></i>"
		    ],
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:4
		        },
		        1000:{
		            items:8
		        }
		    }

		});
	}


	 /* Contact form ajax Handler
    ================================================*/

    $(".ajax-form").on('submit', function() {
    	var form = $(this);
        var formURL = $(this).attr("action");
        var postData = $(this).serializeArray();

        $.ajax({
            url: formURL,
            type: 'POST',
            data: postData,
            dataType: 'json',

            success:function(data, textStatus, jqXHR){

                if(data.success==1){

                    form.find(".alert").fadeOut();
                    form.find(".alert-success").html(data.message);
                    form.find(".alert-success").fadeIn(600);
                    

                }else{

                	form.find(".alert").fadeOut();
                    form.find(".alert-danger").html(data.message);
                    form.find(".alert-danger").fadeIn(600);

                }
            },

            error: function(jqXHR, textStatus, errorThrown)  { 
                
                console.log(errorThrown);
            }

        });
            

        return false;
     })



    /*
	On scroll animations
	================================================
	*/


    var $elems = $('.animate-onscroll');

    var winheight = $(window).height();
    var fullheight = $(document).height();
 
    $(window).scroll(function(){
        animate_elems();
    });



    function animate_elems() {

	    wintop = $(window).scrollTop(); // calculate distance from top of window
	 
	    // loop through each item to check when it animates
	    $elems.each(function(){
	    	
	      $elm = $(this);
	 
	      if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
	 
	      topcoords = $elm.offset().top; // element's distance from top of page in pixels
	 
	      if(wintop > (topcoords - (winheight*.75))) {
	        // animate when top of the window is 3/4 above the element
	        $elm.addClass('animated');
	      }

	    });

	  } // end animate_elems()

	


 	/*  Google map Script
	 ====================================================*/ 

	//botones formulario de agregar denuncia

	$(".feel").click(
		function()
		{
			if($("#point").text().length > 0)
				{
				$("#xp").val($(this).val());
				$("#site").val($("#point").text());
				$("#exp").text($(this).val());
				$("#frstmodal").modal("hide");
				$("#ModalLong").modal("show");
				$("#point2").text($("#point").text());
				
				if($(this).val() == "seguro" || $(this).val() == "inseguro"){
					$("#face").attr('src',$(this).parent().find('img').attr('src'));
				}
			}
			else{
				alert("Debe esperar a que cargue el punto escogido, gracias.");
			}
		}
	);

	$(".time").change(
		function(){
			$(".time").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$(".location").change(
		function(){
			$(".location").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$("#location-otro").change(
		function(){
			$(".location").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);


	$(".discrimination").change(
		function(){
			$(".discrimination").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$("#discrimination-otro").change(
		function(){
			$(".discrimination").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$(".profession").change(
		function(){
			$(".profession").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$("#donativo-otro").change(
		function(){
			$(".radio-donativo").parent().removeClass("active");
			$(this).parent().addClass("active");
		}
	);

	$('#donativo-input').on('input',function(e){
		donation = $(this).val() == "" || $(this).val() == null ? 0 : $(this).val();
		$("#donation-field").text(donation + " euros");
	});

	$("#informar-btn").click(function(){
		$("#over-map").fadeIn("slow");
		informar = true;
	});

	function closeInfos()
	{
		for(var i = 0; i<infowindows.length; i++){
			if(infowindows[i])
			{
				infowindows[i].close();
			}
		}
	}
	
	$(".localization").click(function(){
		var id = $(this).attr('id');
		var i = id.substr(id.length - 1);
		map.panTo(markers[i].getPosition());
		infowindows.forEach(function(value, index){
			if(infowindows[index])
			{
				infowindows[index].close();
			}
		});
		infowindows[i].open(map, markers[i]);
	});

	var filtro = false;

	$("#filter").click(function(){
		if(filtro){
			$("#filter").text("Filtrar");
			$('.denuncia-searchbox').slideUp(250);
			filtro = false;
			searchlat = 40.4378698;
			searchlng = -3.8196221;
			searchzoom = 6;
		}
		else{
			$("#filter").text("Ocultar filtro");
			$('.denuncia-searchbox').slideDown(250);
			filtro = true;
			$(".lista").scrollTop();
		}
	});

	var searcht = false;

	$("#fsearch").on("change", function() {
		if(filtro){
			if($("#fsearch").val() == 0){
				lugar = 0;
				initMap();
			}
			if($("#fsearch").val() == 1){
				lugar = 1;
				initMap();
			}
			if($("#fsearch").val() == 2){
				lugar = 2;
				initMap();
			};
		}
	});

	$("#lsearch").on("change", function(){
		if(filtro){
			geocodeAddress(geocoder, map);
		}
	});

	var slideIndex = 1;
slideShow();

function slideShow() {
	var stage = document.getElementById("slide");
	var slides = stage.getElementsByClassName("slider");
	for(var i=0; i < slides.length; i++) {
      slides[i].style.display= "none";
	}
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(slideShow, 10000); // Change image every 2 seconds
}

function fminit(){
	var fmenus= document.getElementsByClassName("fmenu");
	for(var i=0; i < fmenus.length; i++) {
		fmenus[i].style.display= "none";
	}
	fmenus[0].style.display = "block";
}

function fmshow(n){
	var fmenus= document.getElementsByClassName("fmenu");
	for(var i=0; i < fmenus.length; i++) {
		fmenus[i].style.display= "none";
	}
	$("#fmenu"+n).show();
}

fminit();

$("#fm1").click(
	function(){
		fmshow(1);
	}
);

$("#fm2").click(
	function(){
		fmshow(2);
	}
);

$("#fm3").click(
	function(){
		fmshow(3);
	}
);

$("#fm4").click(
	function(){
		fmshow(4);
	}
);

});





