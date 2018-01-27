<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Event</th>
    <th style="width:30%;">Type</th>
    <th style="width:30%;">Description</th>
  </tr>
<?php
$files = scandir("list", 1); // get all filenames from the "list" folder
foreach ($files as &$f) { // go through all of those filenames and...
  $array = array_pad(explode("\n", file_get_contents("list/" . $f)), 3, null); // get the contents of this file, as an array of lines
  $name = filter_var($array[0], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // filter the first line for special characters (no injection!) to get the name
  $type = filter_var(str_replace("&", "and", $array[1]), FILTER_SANITIZE_FULL_SPECIAL_CHARS); // get the type
  $desc = filter_var($array[2], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // get the description
  if ($name == "") // if the name is empty, disregard this entry
    continue;
  // the following HTML will be produced for each event file.
?>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $type; ?></td>
    <td><?php echo $desc; ?></td>
  </tr>
<?php
} //end for loop?>
</table>
