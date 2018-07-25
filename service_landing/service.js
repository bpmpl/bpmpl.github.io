document.onload(
    showTab(0)
)
function showTab(n) 
{
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  var b = document.getElementsByClassName("step");
  for (let i = 0; i < x.length; i++) {
      x[i].style.display="none";
  }
  x[n].style.display = "block";
  b[n-1].className+=" finish"
  //... and run a function that will display the correct step indicator:
}

$(document).ready(function () {
    $('.your-class').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

let service = document.getElementById("service").value;
console.log($service);
