console.log("test");
var logo = document.getElementById('logo');
var container = document.getElementById('bannerDiv');
// var posCount = document.getElementById('posCounter');
container.onmousemove = function(event) {


    var x = event.clientX,
        y = event.clientY;
    var width = container.offsetWidth;
    var height = container.offsetHeight;
    // console.log(x + "" + y);
    // posCount.innerHTML = "X= " + x + "<br>Y= " + y + "<br>Width= " + width + "<br>Height= " + height;
    // logo.style.left = (Math.sqrt(x) * 4)+ width/2.75 + "px";
    // logo.style.top =(Math.sqrt(y) * 4)+ height/2.75 + "px";
    logo.style.transform = "translateX(" + (x-width/2)/10 +"px) translateY(" + (y-height/2)/10 +"px)";
    // logo.style.transform = "translateY(" + (y-height/2) +"px)";
    // logo.style.transform = "translateX(100px)";

}
