<?php
if (isset($_POST['id'])) {
  $record_id = $_POST['id'];
  echo "Record ID: " . $record_id;
  
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
  
  // Check if delete was successful
  if ($stmt->affected_rows === 1) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record";
  }
  
  $stmt->close();
  $conn->close();
}
?>
