<?php
  ob_start();
  require_once('dbConfig.php');
  require_once('MySQLDBExport.php');

  $date = new DateTime();

  try {
  	$world_dumper = Shuttle_Dumper::create(array(
  		'host' => $hostname,
  		'username' => $user,
  		'password' => $dbpassword,
  		'db_name' => $database,
      'exclude_tables' => ['accounts']
  	));
  	// dump the database to gzipped file
  	$world_dumper->dump($date->format("Y-m-d-H-t-s").'.sql');

  } catch(Shuttle_Exception $e) {
  	echo "Couldn't dump database: " . $e->getMessage();
  }

  ob_end_flush();

  // We'll be outputting a PDF
  header('Content-Type: text/plain');

  // It will be called downloaded.pdf
  header('Content-Disposition: attachment; filename="'.$date->format("Y-m-d-H-t-s").'.sql"');

  // The PDF source is in original.pdf
  readfile($date->format("Y-m-d-H-t-s").'.sql');

  unlink($date->format("Y-m-d-H-t-s").'.sql');
