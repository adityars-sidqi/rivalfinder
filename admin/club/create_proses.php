<?php
  include_once '../../config/koneksi.php';

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
				move_uploaded_file($file_tmp, '../../img/club/logo/'.$logo);
				$query = mysqli_query($conn, "INSERT INTO clubs VALUES(NULL, '".$email."', '".$password."', '".$name."', '".$contact."', '".$logo."')");
				if($query){
					echo "<script>alert('Berhasil mendaftar.');
          window.location.href='index.php';
          </script>";
				}else{
          echo "<script>alert('Gagal mengupload logo club!');
          window.location.href='create.php';
          </script>";
				}
      }else{
        echo "<script>alert('Ukuran file terlalu besar!');
        window.location.href='create.php';
        </script>";
      }
		}else{
      echo "<script>alert('Ekstensi file tidak diperbolehkan!');
      window.location.href='create.php';
      </script>";
		}
 ?>
