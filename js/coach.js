$(document).ready(function () {
  var $selector = $('.coach_select')
  $selector.click(function(){
    var target = '.' + $(this).attr('target');
    $('.coach_content').hide();
    $(target).show();
    $selector.css({ 'color': 'black', 'font-weight':'normal' });
    $(this).css({ 'color': 'maroon' , 'font-weight':'bold'});

  })
});


