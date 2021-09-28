const navItem = document.getElementsByClassName('navItem');
const activeBorder = document.getElementsByClassName('active-');
var wnav = document.getElementsByClassName('wnav');
var activenav = document.querySelector('.blog-nav #active');
var works = document.getElementsByClassName('work-pics');
var activework = document.getElementById('wactive');
const close = document.getElementsByClassName("closebtn");
const burger = document.getElementsByClassName("burger-menu");
const post = document.getElementsByClassName("s6-post");
const ul = document.querySelector(".blog-nav .mp-nav ul");

if (post[0] != undefined) {
  var x = window.matchMedia("(max-width: 922px)")
  if (x.matches) {
   
  
    for (let i = 0; i < post.length; i++) {
      
        
    
    let touchstartX = 0;
var touchendX = 0;
var margin = 0;

function handleGesture() {
  
  if (touchendX < touchstartX) {
   margin = margin - 400;
   
   if (margin < -400) {
    margin = 400;
  }
      document.getElementsByClassName("s6-posts")[0].style.marginLeft = margin+"px";
  }
  if (touchendX > touchstartX) {
    margin = margin + 400;
    if (margin > 400) {
      margin = -400;
    }
    document.getElementsByClassName("s6-posts")[0].style.marginLeft = margin+"px";
  }
 
}

post[i].addEventListener('touchstart',touchhandler);

function touchhandler(e) {
  
    touchstartX = e.changedTouches[0].screenX;
  
}



post[i].addEventListener('touchend', touchend);

function touchend(e) {

    touchendX = e.changedTouches[0].screenX;
    handleGesture();
  
  
}

post[i].addEventListener('mousedown', mousehandler);

function mousehandler(e) {
      touchstartX = e.x;
    
}

post[i].addEventListener('mouseup',mouseup);

function mouseup(e) {
  
    touchendX = e.x;
    handleGesture();
  
}


    }
}
}

if (close[0] != undefined && burger[0] != undefined) {
    burger[0].addEventListener('click',openNav);
    close[0].addEventListener('click',closeNav);
}

function openNav() {
    document.getElementById("myNav").style.width = "50%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

if (wnav[0] != undefined) {
  

for (var i = 0; i < wnav.length; i++) {
  "use strict"
    
    wrapper(i);
    
}

function wrapper(ilocal) {
  wnav[ilocal].addEventListener('click',function(e){
    wnavHandler(e,ilocal);
  });
}
function wnavHandler(e,ilocal) {
 
  e.preventDefault();

  var work = works[ilocal];
 
  var nav = wnav[ilocal];


    activenav.removeAttribute('id');
 
    activenav.setAttribute("id","b-nav");
    
    nav.setAttribute("id","active");
 
    activenav = nav;
  
    activework.removeAttribute('id');
  
    work.setAttribute("id","wactive");
   
    activework = work;
   
    var x = window.matchMedia("(max-width: 400px)")

  if(x.matches)
  var margin = ilocal*20;
  else margin = 0;
 
    ul.style.marginLeft = "-" + margin + "%";
 
    
}
}
if (navItem[0] != undefined) {
    

for (let index = 0; index < navItem.length; index++) {
    navItem[index].addEventListener('mouseenter', hoverEvent);
    navItem[index].addEventListener('mouseleave', outEvent);

    function hoverEvent(e) {
      
        activeBorder[index].style.opacity = "1";
    }

    function outEvent(e) {
      
        activeBorder[index].style.opacity = "0";
    }
    
}
}


var modal = document.getElementById("myModal");


var btn = document.getElementById("bb-btn1");

var span = document.getElementsByClassName("close")[0];

if (modal != null) {

  
btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal2 = document.getElementById("myModal2");


var btn2 = document.getElementsByClassName("bb-btn2");

var span2 = document.getElementsByClassName("close")[1];


btn2[0].onclick = function() {
  modal2.style.display = "block";
}


span2.onclick = function() {
  modal2.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

var modal3 = document.getElementById("myModal3");


var btn3 = document.getElementsByClassName("bb-btn3");

var span3 = document.getElementsByClassName("close")[2];


btn3[0].onclick = function() {
  modal3.style.display = "block";
}


span3.onclick = function() {
  modal3.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}

  
}




