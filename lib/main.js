var offsetHeight = 60,
    modal;

$(document).ready(function() {

    var pages = $('section[id]'),
        header = $('header'),
        sliderItems = $('.carousel-inner .item'),
        mobileWidth = 768,
        heroUnit = $('#hero-unit');
    
    $(window).on('scroll', function() {
        currentState();
    });
    
    $(window).on('resize', function() {
        currentState();
        resizeSection();
    });
    
    heroUnit.on('slide.bs.carousel', function (data) {
        setTimeout(function() {
            resizeSection();
        }, 100)
    });

    function init() {
        currentState();
        resizeSection();
    }
    

    function currentState() {
        var windowTop = $(window).scrollTop();
        
        if (windowTop != 0) {
            header.addClass('isFixed');
        } else {
            header.removeClass('isFixed');
        }
        
        for (var i = pages.length; i > 0; i--) {
            var divTop = $('#' + pages[i - 1].id).offset().top - offsetHeight;
            if (divTop < windowTop) {
                $('header .nav.pull-left button').removeClass('isActive');
                $('header .nav.pull-left button:nth-child(' + i + ')').addClass('isActive');
                return;
            } else {
                $('header .nav.pull-left button').removeClass('isActive');
            }
        }
    }
    
    function resizeSection() {
        
        $.each(sliderItems, function(key, val) {
            changeHeight(val, 'slider');
        });
        
        $.each(pages, function(key, val) {
            changeHeight(val, 'section');
        });
        
        function changeHeight(element, type) {
            var container = $(element).children('.container');

            if ($(window).width() <= mobileWidth && type!='slider') {
                $(element).css('height', 'auto');
                container.css('paddingTop', 0);
            } else if ($(window).height()<=700 && type!='slider') {
                $(element).css('height', 700);
                container.css('paddingTop', (700-container.height())/2)
            } else {
                $(element).height($(window).height());
                container.css('paddingTop', (($(window).height()-container.height())/2) - (offsetHeight/2));
            }
        }
    }
    
    modal = $('#contactFormModal');
    
    modal.on('shown.bs.modal', function () {
        //$('#myInput').focus()
    });
    
    init();

});

var toggleMenu = function() {
    var nav = $('header .nav');
    if (nav.hasClass('isOpen')) {
        nav.removeClass('isOpen');
    } else {
        nav.addClass('isOpen');
    }
};

$('#contactForm').validate({
    submitHandler: function(form) {
        sendEmail($(form).serialize());
        return false;
    }
});


function openContactForm(action) {
    modal.modal({
        backdrop: 'static'
    });
}

function scrollById(id, offset) {
    $('#'+id)
        .velocity('scroll', {
            offset: (offsetHeight * -1) + 2
        });
}

function sendEmail(input) {
    console.log('hye')
    $.post('email.php', input)
        .done(function(data) {
            modal.addClass('request-success');
            console.log('success', data)
        })
        .fail(function(data) {
            console.log('fail', data)
        });

}