<?php
  include_once '../../config/koneksi.php';

  $tournament_title = $_POST['tournament_title'];
  $description = $_POST['description'];
  $contact_person = $_POST['contact_person'];

  $ekstensi_diperbolehkan	= array('png', 'jpg');
  $file = $_FILES['file']['name'];
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
  $picture = md5($file."-".$tournament_title) . "." .$ekstensi;

  if ($tournament_title == "" || $description == "" || $contact_person == "") {
    echo "<script>alert('Data tidak boleh ada yang kosong!');
    window.location.href='create.php';
    </script>";
  } else {
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 1044070){
				move_uploaded_file($file_tmp, '../../img/tournament/'.$picture);
        $query = "INSERT INTO tournament_info VALUES (NULL, '".$tournament_title."', '".$description."', '".$contact_person."', '".$picture."' )";
				$result = mysqli_query($conn, $query);
				if($query){
          echo "<script>alert('Berhasil memasukkan data.');
          window.location.href='index.php';
          </script>";
				}else{
          echo "<script>alert('Gagal memasukkan data.');
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
  }


?>
