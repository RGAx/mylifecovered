function checkOffset(){var e=$("#range_sliders");e.length&&(e.offset().top+e.height()>=$("footer").offset().top-10&&e.addClass("unfix"),$(document).scrollTop()+window.innerHeight<$("footer").offset().top&&e.removeClass("unfix"))}$(document).ready(function(){function e(){n=$("#affordablePremium").val(),g=$("#affordableAge").val(),d=$("#affordableGender").val();var e=a[n][g][d];m=e.coverage;var r="$"+m.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,");s=e.savings;var i="$"+s.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,"),t=$("span#totalCoverage"),v=$("span#totalSavings");t.html(r),v.html(i)}$("#open_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").addClass("open"),$("a#close_menu").addClass("open")}),$("#close_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").removeClass("open"),$("a#close_menu").removeClass("open")});var a={twentyfive:{twentyfive:{male:{premium:25,age:25,gender:1,standard:44,savings:19,coverage:55e4},female:{premium:25,age:25,gender:2,standard:40,savings:15,coverage:65e4}},thirty:{male:{premium:25,age:30,gender:1,standard:44,savings:19,coverage:535e3},female:{premium:25,age:30,gender:2,standard:42,savings:17,coverage:65e4}},thirtyfive:{male:{premium:25,age:35,gender:1,standard:46,savings:21,coverage:525e3},female:{premium:25,age:35,gender:2,standard:51,savings:26,coverage:65e4}},forty:{male:{premium:25,age:40,gender:1,standard:50,savings:25,coverage:35e4},female:{premium:25,age:40,gender:2,standard:51,savings:26,coverage:45e4}},fortyfive:{male:{premium:25,age:45,gender:1,standard:50,savings:26,coverage:195e3},female:{premium:25,age:45,gender:2,standard:41,savings:16,coverage:275e3}},fifty:{male:{premium:25,age:50,gender:1,standard:37,savings:12,coverage:105e3},female:{premium:25,age:50,gender:2,standard:50,savings:25,coverage:17e4}}},fifty:{twentyfive:{male:{premium:50,age:25,gender:1,standard:84,savings:34,coverage:125e4},female:{premium:50,age:25,gender:2,standard:82,savings:32,coverage:165e4}},thirty:{male:{premium:50,age:30,gender:1,standard:89,savings:39,coverage:125e4},female:{premium:50,age:30,gender:2,standard:88,savings:38,coverage:1565e3}},thirtyfive:{male:{premium:50,age:35,gender:1,standard:102,savings:52,coverage:12e5},female:{premium:50,age:35,gender:2,standard:107,savings:57,coverage:145e4}},forty:{male:{premium:50,age:40,gender:1,standard:95,savings:45,coverage:775e3},female:{premium:50,age:40,gender:2,standard:93,savings:43,coverage:985e3}},fortyfive:{male:{premium:50,age:45,gender:1,standard:81,savings:31,coverage:42e4},female:{premium:50,age:45,gender:2,standard:90,savings:40,coverage:59e4}},fifty:{male:{premium:50,age:50,gender:1,standard:77,savings:27,coverage:235e3},female:{premium:50,age:50,gender:2,standard:92,savings:42,coverage:39e4}}},onehundred:{twentyfive:{male:{premium:100,age:25,gender:1,standard:167,savings:67,coverage:25e5},female:{premium:100,age:25,gender:2,standard:162,savings:62,coverage:335e4}},thirty:{male:{premium:100,age:30,gender:1,standard:175,savings:75,coverage:25e5},female:{premium:100,age:30,gender:2,standard:175,savings:75,coverage:33e5}},thirtyfive:{male:{premium:100,age:35,gender:1,standard:205,savings:105,coverage:255e4},female:{premium:100,age:35,gender:2,standard:215,savings:115,coverage:325e4}},forty:{male:{premium:100,age:40,gender:1,standard:207,savings:107,coverage:175e4},female:{premium:100,age:40,gender:2,standard:194,savings:94,coverage:2125e3}},fortyfive:{male:{premium:100,age:45,gender:1,standard:173,savings:73,coverage:875e3},female:{premium:100,age:45,gender:2,standard:175,savings:75,coverage:13e5}},fifty:{male:{premium:100,age:50,gender:1,standard:162,savings:62,coverage:535e3},female:{premium:100,age:50,gender:2,standard:175,savings:75,coverage:845e3}}}},r=$("select.afford-dropdown"),n=0,g=0,d=0,s=19,m=55e4;r.on("change",function(){e()})}),$(document).scroll(function(){checkOffset()});