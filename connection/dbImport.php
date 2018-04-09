<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  require_once('dbConfig.php');
  // Name of the file
  $filename = $_FILES['file']['tmp_name'];
  // Temporary variable, used to store current query
  $templine = '';
  // Read in entire file
  $lines = file($filename);
  // Loop through each line
  foreach ($lines as $line)
  {
    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

    // Add this line to the current segment
    $templine .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {
        // Perform the query
        mysqli_query($db, $templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
  }
?>
  <script>
    alert('Database restoration successfully finished.');
    window.location = '../dashboard/index.php';
  </script>
<?php
}

?>
