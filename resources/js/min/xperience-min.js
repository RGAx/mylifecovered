function checkOffset(){var e=$("#range_sliders");e.length&&(e.offset().top+e.height()>=$("footer").offset().top-1&&e.css("position","relative"),$(document).scrollTop()+window.innerHeight<$("footer").offset().top&&e.css("position","fixed").css("width","100%").css("bottom","0").css("zIndex","99"))}$(document).ready(function(){$("#open_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").addClass("open"),$("a#close_menu").addClass("open")}),$("#close_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").removeClass("open"),$("a#close_menu").removeClass("open")})}),$(document).scroll(function(){checkOffset()});