jQuery(document).ready(function($){
// slider
$("#header_slider").owlCarousel({
  autoPlay: 5000, //Set AutoPlay to 3 seconds
  items :1,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3]
});

$("#footer_slider").owlCarousel({
  autoPlay: 6000, //Set AutoPlay to 3 seconds
  items : 5,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3]
    });
// email register
    $(".wpcf7-response-output").addClass('hide')
// menu
  $('.menu_control').click(function(){
      $('#header-menu').fadeToggle(400);
    });
  $("#header-menu li a").append('<div class="line"></div>');
  $('#header-menu > li').hoverdir();
// contact form
  $("#btn_reset").click(function(){
    $("#email_contact").val("");
    $("#phone_contact").val("");
    $("#content_contact").val("");
    $("#name_contact").val("");
    $("#address_contact").val("");
    $("#title_contact").val("");
  })
// hover service
$('.design > li ').hoverdir({
        hoverDelay: 140
});
// back to top
$('body').prepend('<a href="javascript:void(0)" id="back-to-top" class="animate-button"></a>');
var amountScrolled = 300;
$(window).scroll(function(){
  if ( $(window).scrollTop() > amountScrolled ) {
    $('#back-to-top').addClass('on_top').removeClass('off_top');
  } else {
    $('#back-to-top').addClass('off_top').removeClass('on_top');
  }
});
$('#back-to-top').click(function() {
  $('html, body').animate({ scrollTop : 0 },950);
});
//  scroller news and event
var scroller;
function scroll(){
  scroller=setInterval(function(){
  var total_height = $(".news_home").prop("scrollHeight")
  var height_default = $(".news_home").height();
  var scroll = $(".news_home").scrollTop();
  var last_height = (total_height - height_default);
  if(scroll == last_height)
  {
    $(".news_home").scrollTop(0)
  }
  var pos = $('.news_home').scrollTop();
    $('.news_home').scrollTop(pos + 2);
  },200)
}
function clearscoll(){
  clearInterval(scroller)
}
scroll()
$(".news_home").hover(function(){
  clearscoll();
},function(){
  scroll()
});
//phân trang
$(".pages").hide(); 

//  js about window load
/*var Nanobar = function() {
  var a, b, c, d, e, f, g = {
          width: "100%",
          height: "3px",
          zIndex: 9999,
          top: "0"
      },
      h = {
          width: 0,
          height: "100%",
          clear: "both",
          transition: "height .3s"
      };
  return a = function(a, b) {
      for (var c in b) a.style[c] = b[c];
      a.style["float"] = "left"
  }, d = function() {
      var a = this,
          b = this.width - this.here;.1 > b && -.1 < b ? (e.call(this, this.here), this.moving = !1, 100 == this.width && (this.el.style.height = 0, setTimeout(function() {
          a.cont.el.removeChild(a.el)
      }, 100))) : (e.call(this, this.width - b / 4), setTimeout(function() {
          a.go()
      }, 16))
  }, e = function(a) {
      this.width = a, this.el.style.width = this.width + "%"
  }, f = function() {
      var a = new b(this);
      this.bars.unshift(a)
  }, b = function(b) {
      this.el = document.createElement("div"), this.el.style.backgroundColor = b.opts.bg, this.here = this.width = 0, this.moving = !1, this.cont = b, a(this.el, h), b.el.appendChild(this.el)
  }, b.prototype.go = function(a) { 
      a ? (this.here = a, this.moving || (this.moving = !0, d.call(this))) : this.moving && d.call(this)
  }, c = function(b) {
      b = this.opts = b || {};
      var c;
      b.bg = b.bg || "#EF4315", this.bars = [], c = this.el = document.createElement("div"), a(this.el, g), b.id && (c.id = b.id), c.style.position = b.target ? "relative" : "fixed", b.target ? b.target.insertBefore(c, b.target.firstChild) : document.getElementsByTagName("body")[0].appendChild(c), f.call(this)
  }, c.prototype.go = function(a) {
      this.bars[0].go(a), 100 == a && f.call(this)
  }, c
}(),
nanobar = new Nanobar;
nanobar.go(30), nanobar.go(60), nanobar.go(100);*/

/* fix sidebar*/

});
// page facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1767094836904687";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
