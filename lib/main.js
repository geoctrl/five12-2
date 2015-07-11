var offsetHeight = 60,
  modal;

$(document).ready(function() {

  var pages = $('section[id]'),
    header = $('header'),
    sliderItems = $('.carousel-inner .item'),
    mobileWidth = 750,
    heroUnit = $('#hero'),
    nav = $('header .nav');

  $(window).on('scroll', function() {
    currentState();
  });

  $(window).on('resize', function() {
    currentState();
    debounceResize();
  });

  $(document).on('click', function() {
    if (nav.hasClass('isOpen')) {
      nav.removeClass('isOpen');
    }
  });

  nav.on('click', function(e) {
    e.stopPropagation();
  });

  heroUnit.on('slide.bs.carousel', function (data) {
    setTimeout(function() {
      resizeSection();
    }, 100)
  });

  function init() {
    setTimeout(function() {
      currentState();
    }, 1000);
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
      var divAnimate = divTop - 200;
      if (divAnimate < windowTop) {
        animateSection($(pages[i-1]), i-1);
      }
      if (divTop < windowTop) {
        $('header .nav.pull-left button').removeClass('isActive');
        $('header .nav.pull-left button:nth-child(' + i + ')').addClass('isActive');
        return;
      } else {
        $('header .nav.pull-left button').removeClass('isActive');
      }
    }
  }

  var debounceResize = debounce(resizeSection, 200);

  function animateSection(section, index) {
    if (!section.hasClass('isActive')) {
      switch (index) {
        case 0:
          section.addClass('isActive');
          $.Velocity($(('.timeline-unit-sm')), {
            scaleX: [1,.5],
            scaleY: [1,.5],
            opacity: [1,0]
          }, {
            duration: 500
          });
          $.Velocity($(('.timeline-unit-md')), {
            scaleX: [1,.5],
            scaleY: [1,.5],
            opacity: [1,0]
          }, {
            duration: 500,
            delay: 250
          });
          $.Velocity($(('.timeline-unit-lg')), {
            scaleX: [1,.5],
            scaleY: [1,.5],
            opacity: [1,0]
          }, {
            duration: 500,
            delay: 500
          });
          $.Velocity($(('.timeline-unit-xl')), {
            scaleX: [1,.5],
            scaleY: [1,.5],
            opacity: [1,0]
          }, {
            duration: 500,
            delay: 750
          });
          $.Velocity($('.timeline-svg g'), {
            opacity: [1,0]
          }, {
            duration: 1500
          });
          break;
        case 1:
          section.addClass('isActive');
          var shirtColumnOne = 5,
            shirtColumnTwo = 7,
            shirtColumnThree = 6;
          var shirts = $('.progress-shirts');
          for (var i=0;i<shirtColumnOne;i++) {
            var newShirt = $('<div class="shirt-flat"></div>');
            shirts.append(newShirt);
            $.Velocity(newShirt, {
              opacity: [1, 0],
              top: [160-(i*20), 0]
            }, {
              begin: function(element) {
                $(element).css({
                  left: '0',
                  zIndex: '13'
                });
              },
              easing: [500, 35],
              delay: 200 * i
            });
          }
          setTimeout(function() {
            for (var i=0;i<shirtColumnTwo;i++) {
              var newShirt = $('<div class="shirt-flat"></div>');
              shirts.append(newShirt);
              $.Velocity(newShirt, {
                opacity: [1, 0],
                top: [160-(i*20), 0]
              }, {
                begin: function(element) {
                  $(element).css({
                    left: '86px',
                    zIndex: '12'
                  });
                },
                easing: [500, 35],
                delay: 200 * i
              });
            }
          }, 300);
          setTimeout(function() {
            for (var i=0;i<shirtColumnThree;i++) {
              var newShirt = $('<div class="shirt-flat"></div>');
              shirts.append(newShirt);
              $.Velocity(newShirt, {
                opacity: [1, 0],
                top: [160-(i*20), 0]
              }, {
                begin: function(element) {
                  $(element).css({
                    left: '172px',
                    zIndex: '11'
                  });
                },
                easing: [500, 35],
                delay: 200 * i
              });
            }
          }, 200);
          setTimeout(function() {
            var shirt = $('<div class="shirt"></div>');
            shirts.append(shirt);
            $.Velocity(shirt, {
              opacity: [1, 0],
              top: [86, 0]
            }, {
              begin: function(element) {
                $(element).css({
                  left: '120px',
                  zIndex: '14'
                });
              },
              easing: [500, 35]
            });
          }, 1700)
      }
    }
  }

  function getSectionHeight() {
    return $(pages[0]).height();
  }

  function resizeSection() {

    $.each(sliderItems, function(key, val) {
      changeHeight(val, 'section');
    });

    changeHeight(heroUnit, 'slider');

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

var debounce = function(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

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
  $.post('email.php', input)
    .done(function(data) {
      modal.addClass('request-success');
      console.log('success', data)
    })
    .fail(function(data) {
      console.log('fail', data)
    });
}