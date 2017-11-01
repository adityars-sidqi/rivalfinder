<?php
  include_once 'config/koneksi.php';

  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $ekstensi_diperbolehkan	= array('png', 'jpg');
  $file = $_FILES['file']['name'];
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
  $logo = md5($file."-".$name) . "." .$ekstensi;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){
				move_uploaded_file($file_tmp, 'img/club/logo/'.$logo);
				$query = mysqli_query($conn, "INSERT INTO clubs VALUES(NULL, '".$email."', '".$password."', '".$name."', '".$contact."', '".$logo."', 'Unavailable')");
				if($query){
          echo "<script>alert('Signup success.');
          window.location.href='signin.php';
          </script>";
				}else{
          echo "<script>alert('Fail upload logo club!');
          window.location.href='signup.php';
          </script>";
				}
      }else{
        echo "<script>alert('File size is too big!');
        window.location.href='signup.php';
        </script>";
      }
		}else{
      echo "<script>alert('File extension invalid!');
      window.location.href='signup.php';
      </script>";
		}
?>
