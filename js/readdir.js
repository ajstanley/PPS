
$(document).ready(function () {


  $(function(){
    $("#slides").slides({
      generateNextPrev: true,
      autoHeight:true
    });
  });
  $.ajax({
    url: 'http://localhost/PacificPaddleSymposium/ajax/get_file_contents.php?dir=2009',
    async: false,
    success: function(data, status, xhr) {
      params= $.parseJSON(data);
     
      $.each(params.files, function() {
        var a = '<a href="';
        var url = 'http://localhost/PacificPaddleSymposium/images/2009/' +this;
        var target = '" target="_blank"><img src="';
        var closer = '" height="470"></a>';
       
        $('.slides_container').append(a+url+target+url+closer);
      });
    },
    error: function() {
      alert("didn't work");
    }
  });

});

