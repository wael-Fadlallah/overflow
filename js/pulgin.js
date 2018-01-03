$(function(){

//    $('.navbar-nav > li').mouseenter(function(){
//        $(this).addClass('active').siblings().removeClass('active');
//    })
    var current = $('.navbar-nav .active') ;
    $('.navbar-nav > li').on({
        mouseenter:function(){
            $(this).addClass('active').siblings().removeClass('active')},
        mouseleave:function(){
           current.addClass('active').siblings().removeClass('active')
        } 
    });
//    form animation
    $('.form-search').on({
        click:function(){
            $('.navbar-form').animate({
                width:'500px'
            })
            $('.navbar-form button').css('opacity',1)
            $('.navbar-form span').css({
                right:'auto',
                left:'10px',
                color:'white'
            })
        },
        mouseleave:function(){
            $('.navbar-form').animate({
                width:'25%'
            })
            $('.navbar-form button').css('opacity',0)
            $('.navbar-form span').css({
                left:'auto',
                right:'4%',
                color:'#555'
            })
        }
        
    })
//    switcher function
    $('.switcher > div').on('click',function(){
       $(this).addClass('active').siblings().removeClass('active');
        $(this).children('input').prop('checked',true);
    });
//    profile image change 
    $('#profile_selecter').click(function(){
        $('#profile_image').click();
    });
    $('#profile_image').change(function(){
        $('#insert_profile').submit();
    })  
});