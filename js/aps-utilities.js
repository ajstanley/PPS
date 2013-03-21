function build_coach($headers, $bodies){
  for (var i=0;i<headers.length;i++){
    //create div, write header
    document.write('<div id="id_gk" style="height: 5px; left: 50px; position: absolute; top: 450px; width: 550px; z-index: 1; " class="style_SkipStroke_2 shape-with-text">');
    document.write('<div class="text-content style_External_605_15" style="padding: 0px; "></div> </div>');
    document.write('<div id="id9" style="height: 49px; left: 100px; position: absolute; top: 500px; width: 538px; z-index: 1; " class="style_SkipStroke_1 shape-with-text">');
    document.write('<div class="text-content style_External_538_49" style="padding: 0px; "> <div class="style_2">');
    document.write('<p style="padding-top: 0pt; " class="paragraph_style_1">');
    document.write($headers[i]);
    document.write('<br /></p></div></div></div>');
   //write body

    document.write(' <div id="id8" style="height: 146px; left: 100px; position: absolute; top: 575px; width: 525px; z-index: 1; " class="style_SkipStroke_1 shape-with-text">');
    document.write('<div class="text-content style_External_525_146" style="padding: 0px; "><div class="style_2"><p style="padding-bottom: 0pt; padding-top: 0pt; " class="paragraph_style_2">');
    document.write($bodies[i]);
    document.write('</p></div></div></div>');

    //add photo
    document.write('<div style="height: 139px; width: 189px;  height: 131px; left: 600px; position: absolute; top: 544px; width: 186px; z-index: 1; " class="tinyText shadow_3">');
    document.write('<div style="position: relative; width: 186px;">');
    document.write('<img src="Coaches_files/shapeimage_9.png" alt="" style="height: 139px; left: 0px; margin-left: 3px; margin-top: -4px; position: absolute; top: 0px; width: 186px; " />');
    document.write('</div></div>');
    }

}


