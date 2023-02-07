<!-- <?php
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
    
  $stmt->close();
  $conn->close();
}
?> -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Boulvard</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">

</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Boulevard Real Estate is a full-service real estate agency committed to providing exceptional service to all of our clients. Our experienced agents have a deep understanding of the local real estate market and are equipped to assist with all your buying, selling, and renting needs. From the initial search to closing the deal, we work closely with our clients to ensure a smooth and successful transaction. With our network of industry professionals and cutting-edge technology, we are able to provide our clients with a competitive edge in today's fast-paced market. Whether you're looking to purchase your dream home, sell your current property, or rent a new place, Boulevard Real Estate is here to help. Contact us today to learn how we can assist you with your real estate needs.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-light shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="./img/boul-removebg-preview.png" alt="Boulvard" width="30%"  fill="none"> 
        </a>
        <button class="navbar-toggler bg-secondary offset-md-1" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Experience Urban Living with Boulevard's Building Album</h1>
          <p class="lead text-muted">Welcome to Boulevard Real Estate's Building Collection. Here, you'll discover a curated selection of our most sought-after properties. Each building has been carefully selected for its unique features and prime location. Browse through our collection to find your next dream home or investment opportunity. Our team of experts is dedicated to providing unparalleled service, so feel free to reach out to us with any questions or inquiries. Discover the perfect property for you with Boulevard Real Estate.</p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <section class="search-sec mb-5">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                                        <option value="#">Rental or Sale</option>
                                        <option value="Location">Rental</option>
                                        <option value="vente">Sale</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Enter Minimal price">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Enter Maximal price">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <?php
// Define database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define a SQL query to retrieve data from the database
$sql = "SELECT * FROM `annonce`";

// Execute the query and store the result
$result = $conn->query($sql);

// Check if the query returned any data
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col">';
        echo '<div class="card shadow-sm">';
        $img = ($row['image'] != '') ? $row['image'] : './images/appartement1.jpg';
        echo '<img id="card_img" src="'.$img.'" alt="'.$row['titre'].'" width="100%" height="225">';
        echo '<div class="card-body">';
        echo '<h4 id="card_title" class="text-capitalize">'.$row["titre"].'</h4>';
        echo '<h5 id="card_price" class="text-danger">'.$row["prix"].' DH</h5>';
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

// Close the connection
$conn->close();
?>
        </div>
      </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Are you sure you want to delete this announce</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action="index.php" method="post">
                <input type="hidden" name="id" id="id-input" value="">
                <input type="submit" value="Delete" class="btn btn-danger" data-bs-dismiss="modal">
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- eddit modal -->
      <div class="modal fade" id="edit_modal" data-bs-backdrop="static"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Announce eddit</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-2 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Title</label>
                  <input type="text" class="form-control" id="validationCustom01" value="Title here" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Superfice</label>
                  <input type="text" class="form-control" id="validationCustom02" value="50M²" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Prix</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend">DH</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Adresse</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Type</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Location">Location</option>
                    <option value="vente">Vente</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Date d'annonce</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
            </div>
          </div>
        </div>
      </div>
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
    </div>
  </footer>
<script src="./java.js"></script>
</body>

</html> 