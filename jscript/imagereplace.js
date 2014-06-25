$(document).ready( function(){


$('#home').onhover({location: '#home' ,ref: 'images/home_clicked.png'});
$('#home').out({location: '#home' ,ref: 'images/home.png'});
$('#mycv').onhover({location: '#mycv' ,ref: 'images/mycv_clicked.png'});
$('#mycv').out({location: '#mycv' ,ref: 'images/mycv.png'});
$('#knowledge').onhover({location: '#knowledge' ,ref: 'images/knowledge_clicked.png'});
$('#knowledge').out({location: '#knowledge' ,ref: 'images/knowledge.png'});
$('feedback').onhover({location: '#feedback' ,ref: 'images/feedback_clicked.png'});
$('#feedback').out({location: '#feedback' ,ref: 'images/feedback.png'});
$('#contact').onhover({location: '#contact' ,ref: 'images/contact_clicked.png'});
$('#contact').out({location: '#contact' ,ref: 'images/contact.png'});





});

// This plugin is designed for replacing multiple images on a page
// it takes two options, the location defines either the class or div or tag on the page
// the ref defines the location of the image

(function( $ ) {
  $.fn.onhover = function (settings) {
  
  var defaults = {
	location: '#home',
 ref : 'images/home.png'
 };



var settings = $.extend({}, defaults, settings);

$(settings.location).hover(function(){

$(this).attr("src",settings.ref);
});
}
}( jQuery ));

(function( $ ) {
  $.fn.out = function (settings) {
  
  var defaults = {
	location : '#home',
 ref : 'images/home.png'
};


var settings = $.extend({}, defaults, settings);

$(settings.location).mouseout(function(){

$(this).attr("src",settings.ref);
});
}
}( jQuery ));




