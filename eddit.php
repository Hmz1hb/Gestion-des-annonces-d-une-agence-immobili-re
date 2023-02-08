<?php  
if (isset($_POST['submit'])) {
  $id = $_POST['id-input']; 
  $titre = $_POST['titre'];
  $superficie = $_POST['superficie'];
  $prix = $_POST['prix'];
  $adresse = $_POST['adresse'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  $conn = mysqli_connect("localhost", "root", "", "test");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (!empty($id)) {
      $sql = "UPDATE annonce SET titre='$titre', superficie='$superficie', prix='$prix', adresse='$adresse', type='$type', date='$date', description='$description' WHERE id='$id'";
      
      if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }

  mysqli_close($conn);
}
?>
