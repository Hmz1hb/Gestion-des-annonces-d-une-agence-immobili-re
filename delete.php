<?php
if (isset($_POST['id'])) {
  $record_id = $_POST['id'];
  
  // Connect to database
  $conn = new mysqli('localhost', 'root', '', 'test');
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Prepare and execute DELETE statement
  $sql = "DELETE FROM annonce WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $record_id);
  $stmt->execute();
  
  // Redirect to main page
  header("Location: index.php");
  
  $stmt->close();
  $conn->close();
}
?>
