$(document).ready(function(){
  // alert("pop");

  var info = document.getElementById("main-info");
  var next = document.getElementById("next");

$("#next").click(function() {window.scrollTo(0, $("#main-info").offset().top);
});

$("#next-info").click(function() {return null;
});

// Not used
function scrollFunc() {
  info.scrollIntoView();
}


});