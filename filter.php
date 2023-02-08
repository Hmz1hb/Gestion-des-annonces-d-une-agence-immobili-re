<?php

$type = $_POST['type'];
$min_price = $_POST['min_price'];
$max_price = $_POST['max_price'];

$query = "SELECT * FROM annonces";

if (!empty($type) || !empty($min_price) || !empty($max_price)) {
  $query .= " WHERE";
  if (!empty($type)) {
    $query .= " type = '$type'";
  }
  if (!empty($min_price)) {
    if (!empty($type)) {
      $query .= " AND";
    }
    $query .= " price >= $min_price";
  }
  if (!empty($max_price)) {
    if (!empty($type) || !empty($min_price)) {
      $query .= " AND";
    }
    $query .= " price <= $max_price";
  }
}

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col">';
    echo '<div class="card shadow-sm">';
    $img = ($row['image'] != '') ? $row['image'] : './images/appartement1.jpg';
    echo '<img id="card_img" src="'.$img.'" alt="'.$row['title'].'" width="100%" height="225">';
    echo '<div class="card-body">';
    echo '<h4 id="card_title" class="text-capitalize">'.$row["title"].'</h4>';
    echo '<h5 id="card_price" class="text-danger">'.$row["price"].' DH</h5>';
    echo '<p id="card_text" class="card-text">'.$row["description"].'</p>';
    echo '<h5 id="annonce-type" class="text-danger">'.$row["type"].'</h5>';
    echo '<div class="d-flex justify-content-between align-items-center">';
    echo '<div class="btn-group">';
    echo '<button type="button" class="edit-btn btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edit_modal" value="'.$row['id'].'">Edit</button>';
    echo '<button type="button" class="delete-btn btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#delete_modal" value="'.$row['id'].'">Delete</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
