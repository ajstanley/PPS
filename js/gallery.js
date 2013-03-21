$(document).ready(function () {
  $('.dir_select').click(function(){
    address = 'Standard/slideshow.html?year=' + $(this).text();
    $('#slide_iframe').attr('src', address);
    $('#year_select').text( $(this).text());
  })
});