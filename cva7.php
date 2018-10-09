<link href='https://fonts.googleapis.com/css?family=Bowlby One' rel='stylesheet'>
<style>

body{

background-color: #010101;


}

h1{

font-family: "Bowlby One";
  text-align:center; position:absolute; top:18%; font-weight:normal; color:#ff79ab; text-transform:uppercase; font-size:18px; transform: rotate(-45deg); opacity: 1;
}
#mybox, .mybox2, .mybox3, .mybox4, .mybox{

width:135px;
height:135px;
position:absolute;
top:100px;
left:944px;
border-radius:15px;
background-color:#fff;
webkit-transform: rotate(45deg);
  transform: rotate(45deg);
   /* box-shadow:5px 5px #d2d0d0; */
}

.close{
  position: absolute;
  left: 150px;
   top: 100px;
   width:50px;
   height: 50px;
   opacity:0;
   z-index: 999;
  

}

.mybox2{
top:200px;
left:63%;
}
.mybox3{
top:200px;
left:77%;

}

.mybox4{
top:300px;

}

.mybox:hover, .mybox2:hover, .mybox3:hover, .mybox4:hover{
 border: 2px solid #d2d0d0; 

}


#main{
background:url("creativeart7_slide1.jpg") center;

}

</style>

<html>
<body>
  <div class = "close">
  <img src = "close.png" width = "50" height="50" />
  <p style="font-size:20px; font-weight: bold;  padding: 0 9px;
    margin: 0; "> </p>
</div>
<div id = "main"  style = "width:1245px; float:left">
<img src = "creativeart7_slide1.jpg"  width = "1245px" />

<div class = "mybox">
<h1 style = "top:22%; color:#ff911d">
Adevertise Online
</h1>
<span>


</span>
</div>

<div class = "mybox2">
<!--div style = "position: absolute; top:1px; left: 1px; width:100%; height: 100%;"></div-->
  <h1 style = "top:26%; color:#ff1c22">
    
  Create Websites
</h1>


</div>

<div class = "mybox3">
  

  <h1 style = "">
Online Marketing
</div>

<div class = "mybox4">
  <h1 style = "top:20%; color:#3aa8f4">
Business Branding
</h1>
</div>
</div>

</body>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>

$(document).ready(function() 


{

$('.mybox').css({left: "955px", top: "108px"})
$('.mybox2').css({left: "845px", top: "208px"})
$('.mybox3').css({left: "1072px", top: "208px"})
$('.mybox4').css({left: "955px", top: "316px"})



//var now
var $anim = $('#mybox')
var $main = $("div", "#main")
//var $leftPercent = $("#main div")
console.log($main.css('left'))

var active = false;
var $left
var $top
//var $x = 0
var el = []
var $x
$main.click(function(){
$(this).each(function (index, element){


  //Opens Closed box clicked, closes open box
if (getRotationDegrees($(this))  == 45){
if(el.length < 2 ){

el.push($(element));
console.log( index + " " + element );
}
if (el[0].css('left') == "150px"){
$x = el[0];
el[0].animate({width: "135px", height: "135px"}, 1000);
$('h1', el[0]).delay(1500).animate({opacity: "1"}, 1000);
rotateBox(45, 0, el[0], -45)
el[0].animate({left: $left, top: $top }, 1000);
$('.close').delay(100).animate({opacity: "0"}, 1000);
console.log($("h1" ) + " ! " + el[0].css('left'));
if(el.length > 1) {
el.shift($(element));
console.log(index + " : " + el.length);
}
console.log(index + " : " + el.length);
active = false
}
//console.log(el[0] + " !2 " + el[0].css('left'));

//box click if all boxes are closed
if (active == false){

$left = $(this).css('left')
$top = $(this).css('top')

$(this).animate({left: "150px", top: "100px"}, 1000);
rotateBox(0, 45, $(this), 0)
$(this).delay(1000).animate({width: "45%", height: "300px"}, 1000);
$('h1', element).animate({opacity: "0"}, 1000);
$('.close').delay(1900).animate({opacity: "1"}, 1000);
active = true
} 

//Close Open block click 
}
/* else if (getRotationDegrees($(this)) == 0){
el.shift($(element));
active = false
$(this).animate({width: "135px", height: "135px"}, 1000);
//setTimeout(function(){
rotateBox(45, 0, $(this), -45)
//}, 2000)
//$(this).css('left')

$(this).animate({left: $left, top: $top }, 1000);
$('h1', element).delay(1500).animate({opacity: "1"}, 1500);
$('.close').delay(100).animate({opacity: "0"}, 1000);
console.log($left)

} */

})




console.log(" active is " + active)

})



$('.close').click(function(){
  $main.each(function (index, element){
//console.log($main)
if (getRotationDegrees($(this)) == 0) {
  console.log($(this))
el.shift($(element));
active = false
$(this).animate({width: "135px", height: "135px"}, 1000);
//setTimeout(function(){
rotateBox(45, 0, $(this), -45)
//}, 2000)
//$(this).css('left')

$(this).animate({left: $left, top: $top }, 1000);
$('h1', element).delay(1500).animate({opacity: "1"}, 1500);
$('.close').delay(100).animate({opacity: "0"}, 1000);
console.log($left)

}

})

})


var angela
var $sbox
var $ang
var $tbox = $('#main div h1');
function rotateBox(angle, angela, $sbox, $ang) {

   $({deg: angela}).delay(1000).animate({deg: angle}, {
        duration: 1000,
        step: function(now) {
            // in the step-callback (that is fired each step of the animation),
            // you can use the `now` paramter which contains the current
            // animation-position (`0` up to `angle`)			
            $sbox.css({
                transform: 'rotate(' + now + 'deg)'
				
				
            })
			/*$tbox.css({
			 transform: 'rotate(' + now + 'deg)'
			})*/
        }
		
		
    });

}

function getRotationDegrees(obj) {
    var matrix = obj.css("-webkit-transform") ||
    obj.css("-moz-transform")    ||
    obj.css("-ms-transform")     ||
    obj.css("-o-transform")      ||
    obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
    } else { var angle = 0; }
    return angle;
}
//angle1 = getRotationDegrees($('.mybox'));
//angle2 = getRotationDegrees($('.mySpan a:last-child'));



})
</script>
</html>