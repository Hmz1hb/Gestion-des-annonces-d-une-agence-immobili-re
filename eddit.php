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

  // Check if an image was uploaded
  if (!empty($_FILES['image']['name'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $new_file_name = "default.jpg";

    // Allowed file types
    $allowed_types = array("image/jpeg", "image/png", "image/gif");

    // Check if the uploaded file is of the allowed type
    if (!in_array($file_type, $allowed_types)) {
      // Handle error: Invalid file type
    }

    // Set a maximum file size limit
    $max_size = 5000000; // 5MB

    // Check if the uploaded file size is within the limit
    if ($file_size > $max_size) {
      // Handle error: File size too large
    }

    // Generate a unique file name
    $new_file_name_random = time() . "-" . $file_name;
    $new_file_name = "./images/" . $new_file_name_random;

    // Move the uploaded file to a permanent location
    $upload_path = "./images/" . $new_file_name;
    if (move_uploaded_file($file_tmp, $upload_path)) {
      // Upload successful
    } else {
      // Handle error: Upload failed
    }
  }

  $conn = mysqli_connect("localhost", "root", "", "test");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (!empty($id)) {
    $stmt = $conn->prepare("UPDATE annonce SET titre=?, superficie=?, prix=?, adresse=?, description=?, type=?, date=?, image=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $titre, $superficie, $prix, $adresse, $description, $type, $date, $new_file_name, $id);
  
    if ($stmt->execute()) {
      header("Location: index.php");
    } else {
      echo "Error: " . $conn->error;
    }
  }
  
  mysqli_close($conn);
}
?>
