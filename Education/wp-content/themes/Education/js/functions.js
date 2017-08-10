jQuery(function($){
	//jquery menu
	xWidth  = $(window).width();
	if(xWidth >= 1024)
	{
		$('#menu li a').hover(function(){
			$(this).next('.sub-menu').fadeIn(400);
		},function(){
			$('.sub-menu').hide();
		});
	}
	$('.menu_control').click(function(){
			$('#menu').fadeToggle(400);
		});
	//fix menu
	var getHeaderHeight = jQuery('.header_wrapper').outerHeight();
	var borderAmount = 32;
	var shadowAmount = 30;
	var lastScrollPosition = 0;
	jQuery('.header_wrapper').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');
	jQuery(window).scroll(function() {
		var currentScrollPosition = jQuery(window).scrollTop();
		if (jQuery(window).scrollTop() > 2 * (getHeaderHeight + shadowAmount + borderAmount) ) {
			jQuery('body').addClass('active_scroll').css('padding-top', getHeaderHeight);
			jQuery('.header_wrapper').css('top', 0);
			if (currentScrollPosition < lastScrollPosition) {
				jQuery('.header_wrapper').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');
			}
			lastScrollPosition = currentScrollPosition;
		} else {
			jQuery('body').removeClass('active_scroll').css('padding-top', 0);
		}
	});
//contact form 7
	$(".btn_contact").click(function(){
		$(".wpcf7-response-output").addClass('hide');
	});
//hover menu
	$("ul#menu li a").append('<div class="line"></div>');
	$('ul#menu > li').hoverdir();
//hover introduce
    $('.introduce > li ').hoverdir({
        hoverDelay: 125
    });
//hover ul_tap
    $('.ul_tap > li ').hoverdir();
//replace url introduce
	$(".url_detail").click(function(){
		window.location.href="http://developerweb.pro/Education/lien-he/";
	})
//slider in theme môn học
	$("#own-school").owlCarousel({ 
    autoPlay: 1400, //Set AutoPlay to 2 seconds
    items : 5,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,4],
    stopOnHover : true,
    pagination : false,
	});
	$("#count-down").TimeCircles(
	{   
	  circle_bg_color: "#2c3e50",
	  use_background: true,
	  bg_width: .75,
	  fg_width: 0.012,
	    time: {
	      Days: { color: "#e67e22" },
	      Hours: { color: "#2ecc71" },
	      Minutes: { color: "#3498db" },
	      Seconds: { color: "#e74c3c" }
	          }
	       }
	);
//popup menu
$(".menu_orther_subject a").addClass('enroll_subject');
	$(".enroll_subject").attr({
		"data-toggle":"modal","data-target":"#register_learn" 		
	});

//login wordpress
$("#user_login").addClass("form-control");
$("#user_pass").addClass('form-control');
$("#wp-submit").addClass('btn');

if($("p").hasClass('login-password'))
{
	$(".widget_thechamplogin").detach().appendTo('.login-password');
	
}
/*popup đăng ký*/
$("#close_popup_teacher").detach().appendTo('.modal-footer');
$("#close_popup").detach().appendTo('.modal-footer2');

//Add animation
  window.sr = ScrollReveal({reset: true,mobile:true,delay:150});
  sr.reveal('.animate_top',{ distance:'100px',origin:'top',easing:'ease-out',duration:1000});
  sr.reveal('.animate_right',{ distance:'5px',origin:'right',easing:'ease-out',duration:1300});
  sr.reveal('.animate_bottom',{ distance:'100px',origin:'bottom',easing:'ease-out',duration:1000});
  sr.reveal('.animate_left',{ distance:'5px',origin:'left',easing:'ease-out',duration:1300});


$('body').prepend('<a href="javascript:void(0)" class="back-to-top animate-button"></a>');
var amountScrolled = 250;
$(window).scroll(function(){
  if ( $(window).scrollTop() > amountScrolled ) {
    $('a.back-to-top').fadeIn('slow');
  } else {
    $('a.back-to-top').fadeOut('slow');
  }
});
$('a.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  },1300);
});
//  online test
$("#action-button").addClass('btn btn-green');
$("#watu_quiz").addClass('hide');
$("#start_test_online").click(function(){

	$("#watu_quiz").fadeIn("slow").removeClass('hide');
	$("#start_test_online").fadeOut("slow");
	startTimer(total_time, display);
});

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function (){
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.text(minutes + ":" + seconds);
        if (--timer < 0) {
            timer = 0;
  			$("#action-button").trigger('click'); 
        }
         $("#show_seconds1").html(seconds);
         $("#show_minutes1").html(minutes);
        var explode_seconds = $("#show_seconds1").text();
        var explode_minutes = $("#show_minutes1").text();
         explode1 = explode_minutes.substring(1,0);
         explode2 = explode_minutes.substring(1,2);
         explode3 = explode_seconds.substring(1,0);
         explode4 = explode_seconds.substring(1,2);
         $("#show_minutes1").html(explode1);
         $("#show_minutes2").html(explode2);
         $("#show_seconds1").html(explode3);
         $("#show_seconds2").html(explode4);
    	}, 1000);
	}
	var minutes = $("#show_minutes1").text() + $("#show_minutes2").text();
	var seconds = $("#show_seconds1").text() + $("#show_seconds2").text();
	var total_time = (60 * minutes)+seconds;
    display = $('.clock_test_online').addClass('hide');

    /*$("#pass_member").keypress(function(){
    	if($(this).val() != "")
    	{
    		$("#confirm_pass").removeAttr('disabled');
    	}
    });
    $("#confirm_pass").keyup(function(){
    	if($(this).val() == $("#pass_member").val())
    	{
    		$("#notice").html("<strong>Đúng</strong>");
    	}
    	else
    	{
    		$("#notice").html("<strong>Sai</strong>");
    	}
    });
*/
/*$(".register_member").detach().appendTo('.follow');*/


$("#user_login1").addClass('form-control input-lg');
$("#user_pass1").addClass('form-control input-lg');













});
