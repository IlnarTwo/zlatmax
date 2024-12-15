function outputInfo(){
  var blockRange = document.getElementsByClassName("rangeslider");
  var input = blockRange.getElementsByTagName("input");
  var input1 = parseFloat(input[0].value);
  var input2 = parseFloat(input[1].value);
  
  
  if( input1 > input2 ){ var tmp = input2; input2 = input1; input1 = tmp; }
    //надо будет задать класс нужный, как все это там сделаю
    var output = blockRange.getElementsByClassName("rangeValues")[0];
    output.innerHTML = "$ " + input1 + "k - $" + input2 + "k";
  }
  
  window.onload = function(){
    // Initialize Sliders
  var sliderSections = document.getElementsByClassName("rangeslider");
    for( var x = 0; x < sliderSections.length; x++ ){
      var sliders = sliderSections[x].getElementsByTagName("input");
      for( var y = 0; y < sliders.length; y++ ){
        if( sliders[y].type ==="range" ){
          sliders[y].oninput = outputInfo;
          // Manually trigger event first time to display values
          sliders[y].oninput();
        }
      }
    }
  }
