$(document).ready(function () {

  var html = '<ul id="nav">';
  html += '<li><a href="index">Home</a>';
  html +=   '<ul>';
  html +=     '<li><a href="About">About</a></li>';
  html +=     '<li><a href="Map">Campus Map</a></li>';
  html +=     '<li><a href="Courses">Pre & Post</a></li>';
  html +=     '<li><a href="Symposia">Other Events</a></li>';
  html +=   '</ul>';
  html += '<div class="clear"></div>';
  html += '</li>';
  html += '<li><a href="Schedule">Schedule</a></li>';

  html += '<li><a href="#">Media</a>';
  html +=   '<ul>';
  html +=     '<li><a href="Gallery">Images</a></li>';
  //  html +=     '<li><a href="Video">Video</a></li>';
  html +=   '</ul>';
  html += '<div class="clear"></div>';
  html += '</li>';
  html += '<li><a href="Coaches">Coaches</a></li>';
  html += '<li><a href="Registration">Registration</a></li>';
  html += '<li><a href="Sponsors">Sponsors</a></li>';
  //  html += '<li><a href="Accomodation">Accomodation</a></li>';
  html += '</ul>';
  html += '<div class="clear"></div>';
  $('#navbar').html(html);

  $('#nav li').hover(
    function () {
      //show its submenu
      $('ul', this).stop().slideDown(100);

    },
    function () {
      //hide its submenu
      $('ul', this).stop().slideUp(100);
    }
    );
  
});
