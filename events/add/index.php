<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // If someone got to this page by clicking submit...
  if (!file_exists("../list")) {
    mkdir("../list", 0755, true); // Make the "list" directory if it doesn"t already exist
  }
  $timestamp = date("U"); // give us seconds since the unix epoch, 1/1/1970
  $fname = "../list/" . $timestamp . ".event"; // the file name of the event that was just submitted
  $fcontents =
    $_POST["name"] . "\n" . // the name inputted to the form
    $_POST["type"] . "\n" . // the "type" chosen in the form
    substr($_POST["desc"], 0, 100); // the first 100 characters of the description
  file_put_contents($fname, $fcontents); // put the event into the file
}
?>

<head>

  <title>Dress Check - Enter Event</title>

<?php include('../../nav.html'); ?>

  <style>
  * {
      box-sizing: border-box;
  }

  input[type=text], select, textarea{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
  }

  label {
      padding: 12px 12px 12px 0;
      display: inline-block;
  }

  input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
  }

  input[type=submit]:hover {
      background-color: #45a049;
  }

  .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
  }

  .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
  }

  .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row:after {
      content: "";
      display: table;
      clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
      }
  }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
<h2 id="TESTID">Event Creation Page</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // If someone got to this page by clicking submit...
  echo("<p style=\"color:green;\">Event added!</p>");
}
?>
<p>Enter The Name Of Your Event And Its Detail/Information.  Hit submit when finished.</p>

<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
        <label for="name">Event Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your Event Name.." style="height:20px"></textarea>
      </div>
      <div class="col-75">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="type">Event Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="Wedding">Wedding</option>
          <option value="Prom">Prom</option>
          <option value="Formal Event">Formal Event</option>
          <option value="Party">Party</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="desc">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="desc" name="desc" placeholder="Describe Your Event" style="height:60px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit"></input>
    </div>
  </form>
</div>

</body>
</html>
