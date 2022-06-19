<?php 
$AnimalName = $_POST['AnimalName'];
$Discription = $_POST['Discription'];
$Catageory = $_POST['Catageory'];
$LifeExpentancy = $_POST['LifeExpentancy'];

//Database connection
$conn = new mysql('localhost''root','Rakshanda@16','pixel6');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(AnimalName, Discription, Catageory, LifeExpentancy)values(?, ?, ?, ?)");
	$stmt->bind_param("ssss",$AnimalName, $Discription, $Catageory, $LifeExpentancy);
	$stmt->execute();
	echo "Data fill Successfully...";
	$stmt->close();
	$conn->close();
}
?>