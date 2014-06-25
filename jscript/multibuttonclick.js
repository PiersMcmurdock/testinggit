/* 
****written by Piers McMurdock****
This provides multiple button functionality to show/hide elements.
*/

(function( $ ) {
  $.fn.multiButtonClick = function (settings) {
 
 // set the defaults for the class. Area is used to define the div/class/tag you want to hide
 // speed sets how fast or slow the show hide will work.
// tog sets how the DOM will be traversed in order to be able to perform the toggle. 
var defaults = {
area : 'p',
 speed : 'slow',
 tog : 'parent'
};

var settings = $.extend({}, defaults, settings);

//alert(settings.area);

// This option will allow you to go three containing tags out of where the current div/class/tag is 
// then it will select the next area and show/hide it.

if (settings.tog == 'trplParent')
{
return $(this).click(function() { 


   $(this).parent().parent().parent().nextAll(settings.area).toggle(settings.speed);
  
});
}

// This option will allow you to go two containing tags out of where the current div/class/tag is 
// then it will select the next area and show/hide it.

else if (settings.tog == 'dblParent')
{
return $(this).click(function() { 


   $(this).parent().parent().nextAll(settings.area).toggle(settings.speed);
  
});
}
// This option will allow you to go one containing tag out of where the current div/class/tag is 
// then it will select the next area and show/hide it.

else if (settings.tog == 'parent')
{
return $(this).click(function() { 


   $(this).parent().nextAll(settings.area).toggle(settings.speed);
  alert(settings.area)
});
}

// This option will allow you to select the next area where the current div/class/tag is 
// then it will show/hide it.

else if (settings.tog == 'next')
{
return $(this).click(function() { 
 $(this).nextAll(settings.area).toggle(settings.speed);
  
});
}

// This last option will allow any div/class/tag to toggle
// any div/class/tag

else
{
return $(this).click(function() { 
 $(settings.area).toggle(settings.speed);
  
});

}


};

}( jQuery )); 
