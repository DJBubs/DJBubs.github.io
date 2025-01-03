<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Renault Alpine A110 1600s</title>
  <link rel="icon" type="image/x-icon" href="Pictures/Renault-logo.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <style>
    body {
      padding-top: 56px;
      font-family: "Nunito", serif;
      font-style: oblique;
    }

    html {
      scroll-behavior: smooth; /* Enable smooth scrolling */
    }

    .lightbox-navigation {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
      pointer-events: none;
    }

    .carousel-caption {
      top: 1.25rem;
    }

    .carousel-caption h5 {
      font-weight: bold;
      font-size: 6rem;
    }

    .modal-body {
      position: relative;
      display: inline-block; /* Ensures it only wraps around the image */
    }

    .modal {
      --bs-modal-width: 800px;
    }

    /* .row {
      padding-top: 10px;
      padding-bottom: 10px;
    } */

    .col-md-4 {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .h2 {
      padding-bottom: 15px;
    }

    .lightbox-navigation button {
      pointer-events: all;
      background: none;
      border: none;
      color: white;
      font-size: 2rem;
      padding: 0 1rem;
    }

    .lightbox-counter {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 1.2rem;
    }

    .parallax {
      height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .parallax-content {
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
      font-size: 2rem;
      text-align: center;
    }

    #lightbox {
      padding: 50px 0;
    }

    #accordion {
      padding-top: 50px;
      padding-bottom: 100px;
    }
    
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Pictures/Renault-logo.png" alt="Brand Logo" style="height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#carousel">Carousel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#accordion">Accordion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#parallax">Parallax</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lightbox">Lightbox</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Pictures/Alp1.jpg" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>1972 Renault Alpine A110 1600s</h5>
          <p>Source: PistonHeads.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Pictures/Alp2.jpg" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>1972 Renault Alpine A110 1600s</h5>
          <p>Source: PistonHeads.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Pictures/Alp3.jpg" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>1972 Renault Alpine A110 1600s</h5>
          <p>Source: PistonHeads.com</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Accordion -->
  <div class="container mt-5">
    <h2>World Rally Championship Placements</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Year</th>
                <th>Rally Name</th>
                <th>Placement</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $servername = "localhost";
          $username = "root"; // Default username for XAMPP
          $password = "";     // Default password for XAMPP
          $dbname = "RallyResults"; // Your database name

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          
          $sql = "SELECT rally_year, rally_name, placement FROM RallyData ORDER BY rally_year DESC, placement ASC";
          $result = $conn->query($sql);

          if ($result = $conn->query($sql)) {
              echo "Query succeeded with " . $result->num_rows . " rows.";
          } else {
              echo "Error in query: " . $conn->error;
          }

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row['rally_year']) . "</td>";
              echo "<td>" . htmlspecialchars($row['rally_name']) . "</td>";
              echo "<td>" . htmlspecialchars($row['placement']) . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='3' class='text-center'>No data available</td></tr>";
          }
          ?>
        </tbody>
    </table>
</div>


  <!-- <div id="accordion" class="container mt-5">
    <h2>World Rally Championship Placements</h2>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Content for the first accordion item.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Content for the second accordion item.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Content for the third accordion item.
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Parallax Section -->
  <div id="parallax" class="parallax" style="background-image: url('Pictures/Parallax.jpg');">
    <div class="parallax-content">

    </div>
  </div>

  <!-- Lightbox -->
  <div id="lightbox" class="container mt-5">
    <h2>1973 World Rally Championship Gallery</h2>
    <div class="row">
      <div class="col-md-4">
        <a href="#" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-index="0">
          <img src="Pictures/1973-1.jpg" class="img-fluid" alt="Thumbnail 1">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-index="1">
          <img src="Pictures/1973-2.jpg" class="img-fluid" alt="Thumbnail 2">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-index="2">
          <img src="Pictures/1973-3.jpg" class="img-fluid" alt="Thumbnail 3">
        </a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center position-relative">
            <img id="lightboxImage" src="" class="img-fluid" alt="Lightbox Image">
            <div class="lightbox-navigation">
              <button id="prevButton">&#8249;</button>
              <button id="nextButton">&#8250;</button>
            </div>
            <div class="lightbox-counter" id="lightboxCounter"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const images = [
      "Pictures/1973-1.jpg",
      "Pictures/1973-2.jpg",
      "Pictures/1973-3.jpg"
    ];

    let currentIndex = 0;

    document.querySelectorAll('[data-bs-target="#lightboxModal"]').forEach((thumbnail, index) => {
      thumbnail.addEventListener('click', () => {
        currentIndex = index;
        updateLightboxImage();
      });
    });

    document.getElementById('prevButton').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      updateLightboxImage();
    });

    document.getElementById('nextButton').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % images.length;
      updateLightboxImage();
    });

    function updateLightboxImage() {
      document.getElementById('lightboxImage').src = images[currentIndex];
      document.getElementById('lightboxCounter').textContent = `${currentIndex + 1} / ${images.length}`;
    }
  </script>
</body>
</html>
