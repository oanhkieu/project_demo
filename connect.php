<?php 
	$hostname='localhost';
	$username='root';
	$password='';
	$conn= new mysqli($hostname,$username,$password);
	if(mysqli_connect_error()){
		die('Không kết nối được database'.mysqli_connect_error());
	}else{
		echo 'Kết nối thành công';
	}
	// $sql='create database project_demo';
	// if(($conn ->query($sql))==true){
	// 	echo 'Tạo thành công';
	// }else{
	// 	echo 'Không thành công'.$conn->error;
	// }

?>