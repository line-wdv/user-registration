<?php
include "koneksi.php";

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query ="INSERT INTO tb_users (username, email, password) VALUES ('$username', '$email', '$password')";

  $eksekusi = mysqli_query($koneksi, $query);
  if ($eksekusi) {
    echo "Data berhasil disimpan";
  } else {
    echo "Data gagal disimpan";
  }

}
?>

<form action="index.php" method="POST">
<label for="">username:</label>
<input type="text" name="username" placeholder="username"><br><br>
<label for="email">Email:</label>
<input type="email" name="email" placeholder="Email"><br><br>
<label for="password">Password:</label>
<input type="password" name="password" placeholder="Password"><br><br>
<button type="submit" name="submit">daftar</button>
</form>