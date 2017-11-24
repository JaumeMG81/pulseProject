jQuery( function( $ ) {


/** scrolls */
$(function(){
            /*$(window).scroll(function(){

                var scrollval= $(window).scrollTop();
                
                if (scrollval >= 50) {
                    $("#scroll1").hide();
                    $("#scroll2").show();
                }
                if (scrollval >= 100) {
                    $("#scroll2").hide();
                    $("#scroll3").show();
                }
                else if (scrollval >= 150) {
                    $("#scroll4").show();
                }
                else if (scrollval >= 200) {
                    $("#scroll5").show();
                }
                else if (scrollval >= 250) {
                    $("#scroll6").hide();
                }
            })*//*
          $(document).scroll(function() {
          var y = $(this).scrollTop();
            if (y > 100) {
                $('#scroll4').fadeIn();
            } else if (y > 900){
                $('#scroll4').fadeOut();
                $('#scroll2').fadeIn();
            }
          });*/
})

})

"use strict";jQuery(function(e){
  function s(e){
    var isStart=1===e.data, 
     isStop=2===e.data, 
     isEnd=0===e.data;
     console.log("-------------")
     console.log("start"); 
     console.log(isStart);
     console.log("stop");
     console.log(isStop);
     console.log("end");
     console.log(isEnd);
     console.log("-------------")

    isStart&&(i.removeClass("is-paused"),i.toggleClass("is-playing")),
    isStop&&(i.removeClass("is-playing"),i.toggleClass("is-paused")),
    isEnd&&i.removeClass("is-playing","is-paused")
    console.log(i);
  }


    o=e(window),t=e("#featured-media"),
    i=e("#featured-video"),n=t.offset().top,
    l=Math.floor(n+t.outerHeight()/2);

    window.onYouTubeIframeAPIReady=function(){
      a=new YT.Player("featured-video",{events:{onStateChange:s}})
    },
      o.on("resize",function(){
        n=t.offset().top,l=Math.floor(n+t.outerHeight()/2)
      })
      .on("scroll",function(){
          i.toggleClass("is-sticky",o.scrollTop()>l&&i.hasClass("is-playing"))
        })
      });