
var colors = [];

function convertoJson(response){
  return response.json();
}
function changecolor(){
  
  this.style.background = 'black';
}


function procesdata(data){
  console.log(data[0].color);
  for(var i = 0; i < data.length; i++){
    console.log(data[i].color);
    var colorbox = document.createElement("div");
    colorbox.className = "colorbox"
    colorbox.addEventListener("mouseover",  changecolor);
    colorbox.style.background = data[i].color;
    document.getElementById("flex-container").appendChild(colorbox);
  }
}

fetch('datatoJson.php')
.then(convertoJson)
.then(procesdata)