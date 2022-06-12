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
		$email = $_POST['email'];
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$q = "INSERT INTO form (email, name, comment) VALUES ('{$email}', '{$name}', '{$comment }')";
		$conn->query($q);
}
