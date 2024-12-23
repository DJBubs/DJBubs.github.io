<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RallyResults";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT rally_year, rally_name, placement FROM RallyData";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Rally Placements</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        if ($result->num_rows > 0) {
            // Output each row
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
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
