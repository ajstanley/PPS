$(document).ready(function () {
  var $selector = $('td[rowspan]');
  $selector.click(function(){
    parent = $(this).closest('tr');
   
    alert(parent.siblings().size())

  })
});