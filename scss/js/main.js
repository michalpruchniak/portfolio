
$(function(){
  $(document).scroll(function(){
    var wysokosc = $("#first-slide").height() - 55;
    if($(this).scrollTop() > wysokosc){
      $("#about-left-side img").animate({
              'top': 35,
              'opacity': 1
      }, 800 );
      $("#about-left-side div").animate({
        'top': 350,
        'opacity': 1
      }, 800);
      $("#about-right-side p").animate({
        'opacity': 1
      }, 800)
      $("#skills div").animate({
        'marginTop': 25,
        'opacity': 1
      }, 800)
    }
  });



$(function(){
  $(document).scroll(function(){
    //console.log(typeof($(this).scrollTop());
    if($(this).scrollTop() > 15){
      $( "nav" ).css('backgroundColor', 'green');
    } else{
      $( "nav" ).css('backgroundColor', 'transparent');
    }

  });
});

$(function(){
//var mobileViewport = window.matchMedia("screen and (min-width: 1024px)");

$('.website').mouseover(function(){
    $(this).animate({
      width: '40%'
    });
    $('.website').not(this).animate({
      width: '30%'
    });
    $('.website').removeClass('active');
}).mouseout(function(){
  $('.website').animate({
    width: '33.3%'
  });
});
});

$(function(){
  //$('#responsive-menu').hide();
  $('nav .fa-bars').click(function(){
    $('#responsive-menu').fadeIn();
  });
  $('#responsive-menu div a').click(function(){
    $('#responsive-menu').fadeOut();
  });
});

$(function(){
  $('nav li>a').eq(0).click(function(){
    var height = $('#first-slide').height();
    $(window).scrollTo(height, 500);
  });
  $('nav li>a').eq(1).click(function(){
    var height = $('#first-slide').height() + $('#about').height();
    $(window).scrollTo(height, 500);
  });
  $('nav li>a').eq(2).click(function(){
    var height = $('#first-slide').height() + $('#about').height() + $('#portfolio').height();
    $(window).scrollTo(height, 500);
  });
});
