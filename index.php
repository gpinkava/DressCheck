<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<head>
<title>Dress Check</title>
</head>

<?php include('nav.html'); ?>

<!-- Slide Show -->
<section>
  <center>
  <img class="mySlides" src="https://img.promgirl.com/_img/PGPRODUCTS/1630884/1000/burgundy-dress-DQ-9754-a.jpg" style="width:20%">
  <img class="mySlides" src="https://img.promgirl.com/_img/PGPRODUCTS/1632515/320/teal-dress-FB-GL2311-a.jpg" style="width:20%">
  <img class="mySlides" src="https://img.promgirl.com/_img/PGPRODUCTS/1628571/320/wine-dress-LUX-LD3449-c.jpg" style="width:20%">
 </center>
</section>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}

</script>

<section class="w3-container w3-center" style="max-width:600px">
  <center>
    <h2 class="w3-wide">You Are Unique</h2>
  </center>
  <center>
  <p class="w3-opacity"><i>Your dresses should be as well</i></p>
</center>
</section>
