<html>
<head>
  <title>University Management</title>
  <style>
  * {box-sizing: border-box;}
body {
    font-family: Verdana, sans-serif;
    background-color:black;
    color:aqua; 
    justify-content: right;
}
.slide {display: none;}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
.active {
  background-color: #717171;
}
#d1{
    /* border:2px solid red; */
    /* display:left; */
    height:600px;
    width:550px;
    float:left;
    text-align: left;
}
#d2{
    border:2px solid green;
    float:right;
    height:300;
    padding: 20;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  </style>
 
</head>
<body onload="showSlides();">
<center>
<table width="1100" height="50" border="1">
  <tr>
    <td height="44"><div align="center"><a href="#">Home</a></div></td>
    <td><div align="center"><a href="course.php">Offered Courses</a></div></td>
    <td><div align="center"><a href="#">Our Facility</a></div></td>
    <td><div align="center"><a href="#">Examination</a></div></td>
    <td><div align="center"><a href="#">Gallery</a></div></td>
    <td><div align="center"><a href="#">Contact us </a></div></td>
    <td><div align="center"><a href="#">News & Notice</a></div></td>
  </tr>
</table>
<div class="slideshow-container">
   <div class="slide" ><img src="images/cambridge.jpg" alt="cambridge University" height="350px" width="100%" /></div>
   <div class="slide" ><img src="images/th.jpg" alt="cambridge University" height="350px" width="100%" /></div>
   <div class="slide" ><img src="images/thh.jpg" alt="cambridge University" height="350px" width="100%" /></div>
   <div class="slide" ><img src="images/th1.jpg" alt="cambridge University" height="350px" width="100%" /></div>
   <div class="slide" ><img src="images/th2.jpg" alt="cambridge University" height="350px" width="100%" /></div>
   <br>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div id="d1">
<h3 id="h3">History</h3>
See also: Timeline of Cambridge
By the late 12th century, the Cambridge area already had a scholarly and ecclesiastical reputation, due to monks from the nearby bishopric church of Ely. However, it was an incident at Oxford which is most likely to have led to the establishment of the university: three Oxford scholars were hanged by the town authorities for the death of a woman, without consulting the ecclesiastical authorities, who would normally take precedence (and pardon the scholars) in such a case, but were at that time in conflict with King John. Fearing more violence from the townsfolk, scholars from the University of Oxford started to move away to cities such as Paris, Reading, and Cambridge. Subsequently, enough scholars remained in Cambridge to form the nucleus of a new university when it had become safe enough for academia to resume at Oxford.In order to claim precedence, it is common for Cambridge to trace its founding to the 1231 charter from Henry III granting it the right to discipline its own members (ius non-trahi extra) and an exemption from some taxes; Oxford was not granted similar rights until 1248.
A bull in 1233 from Pope Gregory IX gave graduates from Cambridge the right to teach "everywhere in Christendom".After Cambridge was described as a studium generale in a letter from Pope Nicholas IV in 1290,and confirmed as such in a bull by Pope John XXII in 1318,it became common for researchers from other European medieval universities to visit Cambridge to study or to give lecture courses.
</div>
<div id="d2">
<img src="images/cambridge.jpg" alt="cambridge University" height="150px" width="150px" /></br>
<p>
NAME:-Suraj Pandey<br>
ADDRESS:-PRAYAGRAJ UP<br>
CONTECT:-8881491630
</p>
</div>
<script>
   var slideIndex = 0;
     showSlides();
    function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,2000); // Change image every 2 seconds
}
  </script>
</html>