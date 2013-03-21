$(document).ready(function () {
  var venue = '.all';
  var skill = '.intermediate';
  var discipline_buttons = $('#discipline_buttons');



  var $selector = $('.session_select');
  $selector.click(function(){
    var target = '.' + $(this).attr('target');
    venue = target;
    $('.all').hide();
    $(target+skill).show();
    $selector.css({
      'color': 'black',
      'font-weight':'normal',
      'background-color':''
    });
    $(this).css({
      'color': 'white' ,
      'font-weight':'bold',
      'background-color':'#5c92e0'
    });
    $('.session_table').each(function(index){
      var count = $(this).find(target).length;
      $(this).show();
      if(count < 1) {
        $(this).hide();
      }
    });


  })

  var $skill_selector = $('.skill_select');

  $skill_selector.click(function(){
    var target = '.' + $(this).attr('target');
    skill = target;
    $('.intermediate').hide();
    $(target+venue).show();
    $skill_selector.css({
      'color': 'black',
      'font-weight':'normal',
      'background-color':''
    });
    $(this).css({
      'color': 'white' ,
      'font-weight':'bold',
      'background-color':'#5c92e0'
    });
  })
});