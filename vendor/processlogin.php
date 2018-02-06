<?php
  //$conn = new mysqli("localhost",'root','','cooking');
  include 'connection.php';
  session_start();
  $data['role'] = '';
  if(isset($_POST['login'])){
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    // $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
  	$qry = $_mysqli->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    if($qry->num_rows == 1){
    		$data = $qry->fetch_assoc();
    		$_SESSION['login']= array(
    			'username' => $username,
    			'role' => $data['role']
    		);
    		if ($data['role'] == 'admin') {
    			header("location:admin/index.php");
    		}else {
    			header("location:../index.php");
    		}
    }else {
        echo "<script>alert('Login Failed!');</script>;
        <script>document.location.href='../index.php'</script>";
    }
  }
?>
