

  $(document).scroll(function(){
    var wysokosc = $("#first-slide").height() -80;
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
      }, 800);
      $("#skills div").animate({
        'marginTop': 25,
        'opacity': 1
      }, 800);
        $('nav>a').eq(1).addClass('.activeLink');
    }
  });



  $(document).scroll(function(){
    if($(this).scrollTop() > 15){
      $( "nav" ).css('backgroundColor', '#000');
      $( "nav" ).css('opacity', '0.8');
      $( "nav" ).css('color', '#8c8c8c');
    }else{
      $( "nav" ).css('backgroundColor', 'transparent');
      $( "nav" ).css('opacity', '1');
      $( "nav" ).css('color', '#f2d4ff');
    }

  });


    if($('body').width() > 800){
        $(".portfolio-container").on({
          mouseenter: function(){
            $(this).find('.all-elements').animate({
              marginTop: "-20%"
            }, {
              queue: false
            });
          },
          mouseleave: function(){
            $(this).find(".all-elements").animate({
              marginTop: '0'
            });
          }
        });
    } else {
      $(".portfolio-container").on({
        click: function(){
          var elements = $(this).find('.all-elements');
          elements.animate({
            marginTop: "-20%"
          });
          $('.all-elements').not(elements).animate({
            marginTop: "0"
          });
        }
      });

    }
function closeMenu(){
  $("#background").animate({
    opacity: "0"
  }, 800);
  $("#background li").animate({
    marginBottom: "1px",
    opacity: "0"
  }, 300);
  setTimeout(function(){
    $("#background").hide();
    $("body").css("overflow", "visible");
  }, 800);
}

$("#barMenu").click(function(){
  $("#background").show();
  $("body").css("overflow", "hidden");
  $("#background").animate({
    opacity: "0.9"
  }, 280);
  setTimeout(function(){
    $("#background li").animate({
      marginBottom: "12px",
      opacity: "1"
    }, 400);
  }, 280);
  setTimeout(function()
  {
    $("#background p").fadeIn(400);
  }, 680);
});
var delay = 850;
$("#closeMenu").click(function(){
  closeMenu();
});

$("#background li a:eq(0)").click(function(){
  closeMenu();
  setTimeout(function(){
    $(window).scrollTo(slideHeight - navHeight, 800);
  }, delay);
});
$("#background li a:eq(1)").click(function(){
  closeMenu();
  setTimeout(function(){
    $(window).scrollTo(slideHeight*2 - navHeight, 800);
  }, delay);
});
$("#background li a:eq(2)").click(function(){
  closeMenu();
  setTimeout(function(){
    $(window).scrollTo(slideHeight*3 - navHeight, 800);
  }, delay);
});
