

jQuery('.dtheme-cmb2-tabs').slice(1).remove();


jQuerynum = jQuery('.my-image-3d').length;
jQueryeven = jQuerynum / 2;
jQueryodd = (jQuerynum + 1) / 2;

if (jQuerynum % 2 == 0) {
  jQuery('.my-image-3d:nth-child(' + jQueryeven + ')').addClass('active');
  jQuery('.my-image-3d:nth-child(' + jQueryeven + ')').prev().addClass('prev');
  jQuery('.my-image-3d:nth-child(' + jQueryeven + ')').next().addClass('next');
} else {
  jQuery('.my-image-3d:nth-child(' + jQueryodd + ')').addClass('active');
  jQuery('.my-image-3d:nth-child(' + jQueryodd + ')').prev().addClass('prev');
  jQuery('.my-image-3d:nth-child(' + jQueryodd + ')').next().addClass('next');
}

jQuery('.my-image-3d').click(function() {
  jQueryslide = jQuery('.active').width();
  console.log(jQuery('.active').position().left);
  
  if (jQuery(this).hasClass('next')) {
    jQuery('.image-3d-carousel').stop(false, true).animate({left: '-=' + jQueryslide});
  } else if (jQuery(this).hasClass('prev')) {
    jQuery('.image-3d-carousel').stop(false, true).animate({left: '+=' + jQueryslide});
  }
  
  jQuery(this).removeClass('prev next');
  jQuery(this).siblings().removeClass('prev active next');
  
  jQuery(this).addClass('active');
  jQuery(this).prev().addClass('prev');
  jQuery(this).next().addClass('next');
});


// Keyboard nav
jQuery('html body').keydown(function(e) {
  if (e.keyCode == 37) { // left
    jQuery('.active').prev().trigger('click');
  }
  else if (e.keyCode == 39) { // right
    jQuery('.active').next().trigger('click');
  }
});