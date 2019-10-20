$(function(){
    
    $(".nav-link").hover(function() {
    $(this).css({
      "color":"#47392d",
    });
    
  }, function() {
    $(this).css({
      "color": "#f2e8d0",
    });
  });
    
   $(".btn a").hover(function() {
    $(this).css({
      "background-color":"#e44c5a",
      "color":"white",
    
  });
  }, function() {
    $(this).css({
      "background-color": "#f6f0dc",
      "color": "#47392d",
    });
  });
    
    $(".btn").hover(function() {
    $(this).css({
      "background-color":"#e44c5a",
      "color":"white",
    
  });
  }, function() {
    $(this).css({
      "background-color": "#f6f0dc",
      "color": "#47392d",
    });
  });
    
    $(".bbtn").hover(function(){
        $(this).children('span').animate({
            "width":"1400px",
        },300);
    },
    function(){
        $(this).children('span').animate({
            "width":"250px"
        },300);
    });
    
    $("#top-btn").click(function(){
        $("html,body").animate({
            "scrollTop":0
        },5000);
        
    });
    
    $(".social-icon").hover(function(){
        $(this).children('img').animate({
            "width":"500px",
        },300);
    },
    function(){
        $(this).children('img').animate({
            "width":"80px"
        },300);
    });
    
    $("#top-btn").click(function(){
        $("html,body").animate({
            "scrollTop":0
        },5000);
        
    });
    
  //   $(".part2").hover(function() {
  //   $(this).css({
  //     "background-color": "rgb(239, 219, 173)",
      
  //   });
    
  // }, function() {
  //   $(this).css({
  //     "background-color": "#f2e8d0",
  //   });
  // });
    
    
    $(".pagetop a").hover(function() {
    $(this).css({
      "background-color": "white",
      
    });
    
  }, function() {
    $(this).css({
      "background-color": "#f2e8d0",
      "color": "#47392d",
    });
  });
    
    $("header a").click(function(){
        var id = $(this).attr('href');
        var position = $(id).offset().top;
        $("html,body").animate({
            "scrollTop": position
        }, 500);
    });
    
    $(".menu-hover").hover(
        function(){
          $(this).find(".txt").addClass("text-active"); 
        },
        function(){
            $(this).find(".txt").removeClass("text-active");
        });
    
    $(".menu-icon1 img").hover(function() {
    $(".menu-icon1 img").css({
      "filter": "grayscale(0)",
    });
    
  }, function() {
    $(".menu-icon1 img").css({
      "filter": "grayscale(100%)",
    });
  });
    
});