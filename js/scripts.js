
//client testimonial
$(document).ready(function () {
    //rotation speed and timer
    var speed = 13000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width(); 
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }

  // Scroll Reveal
    window.sr = ScrollReveal();
    sr.reveal('.about-image, .about-text, .events-container, .caption-wrap, .junior-wrapper, .membership-types, #carousel, .post-content, .basic-contact_wrapper, .contact-boxes, .rules-wrap');

  $('.about-image').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('img').addClass('jsColorShow');
      } else {
        $(this).find('img').removeClass('jsColorShow');
      }
    });

    $('.about-text').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('.h1').addClass('jsColorShow');
      } else {
        $(this).find('.h1').removeClass('jsColorShow');
      }
    });

     $('.events-container').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('img').addClass('jsColorShow');
      } else {
        $(this).find('img').removeClass('jsColorShow');
      }
    });

      $('.caption-wrap').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
      $('.junior-wrapper').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
      $('.membership-types').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
        $('.basic-contact_wrapper').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
    $('#carousel').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
    $('.contact-boxes').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('div').addClass('jsColorShow');
      } else {
        $(this).find('div').removeClass('jsColorShow');
      }
    });
    $('.post-content').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('h3').addClass('jsColorShow');
        $(this).find('p').addClass('jsColorShow');
      } else {
        $(this).find('h3').removeClass('jsColorShow');
        $(this).find('p').removeClass('jsColorShow');
      }
    });
    $('.rules-wrap').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).find('p').addClass('jsColorShow');
      } else {
        $(this).find('p').removeClass('jsColorShow');
      }
    });

    //end of scroll reveal

      //hamburger menu
  $("a[href=#menuExpand]").click(function(e) {
      $(".menu").toggleClass("menuOpen");
      e.preventDefault();
  });
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}

  //back to top area
$(function(){
  $(window).scroll(function() {
    $('body').prepend('<a href="#" class="back-to-top"></a>');
    //back to top button
    if ( $(window).scrollTop() / 500 ) {
      $('a.back-to-top').fadeIn('slow');
    } else {
      $('a.back-to-top').fadeOut('slow');
    }
  });

  $('a.back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
  });

}); //end of back to top













