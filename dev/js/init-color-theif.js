//make sure we have image id set

$(window).ready(function(){
var coverImg = document.getElementById('single-image');
console.log(coverImg);
var colorThief = new ColorThief();
var color = colorThief.getColor(coverImg);
console.log(color);
 document.getElementById("single").style.backgroundColor = "rgb(" + color + ")";
});

//https://github.com/lokesh/color-thief/