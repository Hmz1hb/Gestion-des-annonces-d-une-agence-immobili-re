<?php
if (isset($_POST['submitP'])) {
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

    $stmt = $conn->prepare("INSERT INTO annonce (titre, superficie, prix, adresse, description, type, date) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $titre, $superficie, $prix, $adresse, $description, $type, $date);    

    if ($stmt->execute()) {
       header("Location: index.php");
    }else {
       
    }

    $stmt->close();
    mysqli_close($conn);
}
?>