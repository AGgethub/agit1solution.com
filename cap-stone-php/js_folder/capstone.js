// THis allows our image to change automatically 
// This is our image view port
var slideIndex = 1;
// Show slides will show slide inthe slide index above
showSlides(slideIndex);

// reseting both slideIndex and shoSlides 
  var slideIndex = 0;
  showSlides();

//Actual function loop throught slides and show then in the slideIndex 
  function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides"); //pulling class of mySlides into our function for the loop
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}




// USING LEFT AND RIGHT INDICATOR STO CYCLE THROUGH IMAGES

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function slideShow1 () {
//   var i;
//   var slides;
//   var slides= document.getElementsByClassName("mySlides"); 
//   // var dots= document.getElementsByClassName("mySlides");
  
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.lendth}
//   for (i = 0; i < slides.length; i++){
//     slides[i].style.display = "none";
//   }
// //   for (i = 0; i < dots.length; i++) {
// //     dots[i].className = dots[i].className.replace(" active", "");
// // } 
// slides[slideIndex-1].style.display = "block";
// dots[slideIndex-1].className += " active";

// }
