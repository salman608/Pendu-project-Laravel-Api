$(document).ready(function(){
    // ============== sticky navbar ========
    $(window).scroll(function () {
        if($(window).scrollTop() > 0){
            $('.navmanu_main').addClass("main_sticky");
            // $('.navbar-logo').attr('src','https://pendu.antooba.com/frontend/assets/images/Logo/logo2.png')
        }
        else{
            $('.navmanu_main').removeClass("main_sticky");
            // $('.navbar-logo').attr('src','https://pendu.antooba.com/frontend/assets/images/Logo/pendu.svg')
        }

    });

    // =============== service Slider ==============

    $('.service_slider .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplaySpeed:600,
        autoplayTimeout:1700,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
// =============== Member Slider ==============
    $('.member_slider .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    })
// ===============  Recent drop Slide ==============
    $('.recentL_slider .owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    margin:10,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        960:{
            items:3
        },
        1200:{
            items:5
        },
        1500:{
            items:6
        }
    }
});

$('.recentL_slider .owl-carousel').on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

$('.signup_login').click(function (e) {
    $('.user_profile_info').toggle();

});


$('.close__payment_card').click(function (e) {
    $('payment_card').hide();

});





//   =============== Offer pie chart ==========
// $(function() {
//     $('.chart').easyPieChart({
//         scaleColor:false,
//         size:70,
//         barColor:'#60E99C',
//         trackColor:'#E8E8E8',
//         scaleLength:0,
//         lineWidth:8,
//     });
// });


// ================ offer close button ============
var closebtns = document.getElementsByClassName("close1");
var closerow = document.getElementsByClassName("offer_inter_item");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}







// =========== Rating Checkout star ==============
$('#s1').click(function () {
    $(".fa-star").css("color","#FFFFFF");
  $("#s1").css("color","#FFB44A");

});
$('#s2').click(function () {
    $(".fa-star").css("color","#FFFFFF");
  $("#s1, #s2").css("color","#FFB44A");

});
$('#s3').click(function () {
    $(".fa-star").css("color","#FFFFFF");
    $("#s1, #s2,#s3").css("color","#FFB44A");

});
$('#s4').click(function () {
    $(".fa-star").css("color","#FFFFFF");
  $("#s1, #s2,#s3,#s4").css("color","#FFB44A");

});
$('#s5').click(function () {
    $(".fa-star").css("color","#FFFFFF");
  $("#s1,#s2,#s3,#s4,#s5").css("color","#FFB44A");

});

$("#s1").on({
    mouseenter:function(){
        $("#s1").css("color","#FFB44A");
    },
    mouseleave:function(){
        $("#s1").css("color","#FFFFFF");
    }
})
$("#s2").on({
    mouseenter:function(){
        $("#s1, #s2").css("color","#FFB44A");
    },
    mouseleave:function(){
        $("#s1, #s2").css("color","#FFFFFF");
    }
})
$("#s3").on({
    mouseenter:function(){
        $("#s1, #s2,#s3").css("color","#FFB44A");
    },
    mouseleave:function(){
        $("#s1, #s2,#s3").css("color","#FFFFFF");
    }
})
$("#s4").on({
    mouseenter:function(){
        $("#s1, #s2,#s3,#s4").css("color","#FFB44A");
    },
    mouseleave:function(){
        $("#s1, #s2,#s3,#s4").css("color","#FFFFFF");
    }
})
$("#s5").on({
    mouseenter:function(){
        $("#s1,#s2,#s3,#s4,#s5").css("color","#FFB44A");
    },
    mouseleave:function(){
        $("#s1,#s2,#s3,#s4,#s5").css("color","#FFFFFF");
    }
})



});

// =============== footer intive tooltip ==============
function myFunctions() {
    var copyText = document.getElementById("myInput1");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");

    var tooltip = document.getElementById("myTooltip1");
    tooltip.innerHTML = "Copied: " + copyText.value;
  }

  function outFunca() {
    var tooltip = document.getElementById("myTooltip1");
    tooltip.innerHTML = "Copy to clipboard";
  }

//  =========== payment card close ===========
  var closebtns = document.getElementsByClassName("test_cls");
  var c;

  for (c = 0; c < closebtns.length; c++) {
    closebtns[c].addEventListener("click", function() {
      this.parentElement.style.display = 'none';
    });
  }

// ============= deliver time active class ============

// var delivery_header = document.getElementById("shop_time");
// var delivery_btns = delivery_header.getElementsByClassName("delivery_time_list");
// for (var i = 0; i < delivery_btns.length; i++) {
//     delivery_btns[i].addEventListener("click", function() {
//   var delviery_current = document.getElementsByClassName("delivery_list_active");
//   delviery_current[0].className = delviery_current[0].className.replace(" delivery_list_active", "");
//   this.className += " delivery_list_active";
//   });
// }
// ============= Mover active class ============

// var mover = document.getElementById("test");
// var btns3 = mover.getElementsByClassName("list");
// for (var m = 0; m < btns3.length; m++) {
//   btns3[m].addEventListener("click", function() {
//   var current3 = document.getElementsByClassName("list_test");
//   current3[0].className = current3[0].className.replace(" list_test", "");
//   this.className += " list_test";
//   });
// }


 // =========== vechile select =============
 $(document).ready(function(){
    $('#svg1').click(function(){
      $(this).css("opacity","1");
      $("#svg2,#svg3,#svg4").css("opacity","0.22");
     $("#vnm1").css("color","#56CD93");
     $("#vnm2,#vnm3,#vnm4").css("color","#8F8F8F");

    });
    $('#svg2').click(function(){
      $(this).css("opacity","1");
      $("#svg1,#svg3,#svg4").css("opacity","0.22");
      $("#vnm2").css("color","#56CD93");
     $("#vnm1,#vnm3,#vnm4").css("color","#8F8F8F");


    });
    $('#svg3').click(function(){
      $(this).css("opacity","1");
      $("#svg1,#svg2,#svg4").css("opacity","0.22");
      $("#vnm3").css("color","#56CD93");
     $("#vnm2,#vnm1,#vnm4").css("color","#8F8F8F");

    });
    $('#svg4').click(function(){
      $(this).css("opacity","1");
      $("#svg1,#svg2,#svg3").css("opacity","0.22");
      $("#vnm4").css("color","#56CD93");
     $("#vnm2,#vnm3,#vnm1").css("color","#8F8F8F");

    });

  });










