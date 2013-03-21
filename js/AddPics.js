function getPics(dir){
  var hostname = window.location.host;
  if(hostname == 'localhost'){
    hostname += '/PacificPaddleSymposium';
  }

  $.ajax({
    url: 'http://' + hostname + '/ajax/get_file_contents.php?dir=' + dir,
    async: false,
    success: function(data, status, xhr) {
      params= $.parseJSON(data);

      $.each(params.files, function() {
        var a = '<a href="';
        var url = 'http://' + hostname + '/images/'+ dir + '/' +this;
        var target = '" target="_blank"><img src="';
        var closer = '" height="470"></a>';

        $('.slides_container').append(a+url+target+url+closer);
      });
    },
    error: function() {
      alert("didn't work");
    }
  });
  

  $(function(){
    $("#slides").slides({
      generateNextPrev: false,
      autoHeight:true,
      preload: false,
      preloadImage: 'img/loading.gif',
      play: 5000,
      pause: 2500,
      hoverPause: true
    });
  });
}


