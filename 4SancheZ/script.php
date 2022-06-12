<?php
    
try {
    $conn = new PDO('mysql:host=localhost;dbname=gelen', 'root', 'root');
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
	$sql = "SELECT * FROM card";
	if($result = $conn->query($sql)){
	foreach($result as $row){
		$name[] = $row["name"];
        }
	}

?>