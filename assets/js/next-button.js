$(document).ready(function(){
  // alert("pop");

  var info = document.getElementById("main-info");
  var next = document.getElementById("next");

$("#next").click(function() {window.scrollTo(0, $("#main-info").offset().top);
});

<<<<<<< HEAD
$("#next-info").click(function() {return null;
});

=======
>>>>>>> d401336d1f0b64eb559b507cc19ab7ef682af944
// Not used
function scrollFunc() {
  info.scrollIntoView();
}


});
