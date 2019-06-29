$(function(){
    $(window).scroll(function(){
        $('.js-fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });

    $('.js-toggle-sp-menu').on('click', function () {
        $(this).toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
    });

    $('.menu-link').on('click', function(){
        $('.nav-menu').toggleClass('active');
    });
});

$(document).ready(function(){
    var urlHash = location.hash;
    if(urlHash){
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            scrollToAnker(urlHash);
        }, 100);
    }

    $('a[href^="#"]').click(function(){
        var href = $(this).attr("href");
        var hash = href == "#" || href == "" ? 'html' : href;
        scrollToAnker(hash);
        return false;
    });

    function scrollToAnker(hash){
        var target = $(hash);
        var position = target.offset().top;
        $('body,html').stop().animate({scrollTop:position}, 500);
    }
});

window.addEventListener('DOMContentLoaded',
function(){
    var node = document.getElementById('count-text');
    node.addEventListener('keyup',function(){
        var count = this.value.length;
        var counterNode = document.querySelector('.show-count-text');
        counterNode.innerText = count;
    },false);
}, false
);

$(function(){
    const MSG_EMPTY = '入力必須です';
    const MSG_EMIL_TYPE = '形式が異なります';
    const MSG_TEXTAREA_MAX = '250文字以内で入力してください';

    $(".valid-email").keyup(function(){
    var form_g = $(this).closest('.form-group');
    if( $(this).val().length === 0 ){
        form_g.removeClass('has-success').addClass('has-error');
        form_g.find('.help-block').text(MSG_EMPTY);
    }else if($(this).val().length > 50 || !$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/) ){
        form_g.removeClass('has-success').addClass('has-error');
        form_g.find('.help-block').text(MSG_EMIL_TYPE);
    }else{
        form_g.removeClass('has-error').addClass('has-success');
        form_g.find('.help-block').text('');
    }
    });

    $(".valid-textarea").keyup(function(){
    var form_g = $(this).closest('.form-group');
    if($(this).val().length === 0){
        form_g.removeClass('has-success').addClass('has-error');
        form_g.find('.help-block').text(MSG_EMPTY);
    }else if( $(this).val().length > 250 ){
        form_g.removeClass('has-success').addClass('has-error');
        form_g.find('.help-block').text(MSG_TEXTAREA_MAX);
    }else{
        form_g.removeClass('has-error').addClass('has-success');
        form_g.find('.help-block').text('');
    }
    });
});