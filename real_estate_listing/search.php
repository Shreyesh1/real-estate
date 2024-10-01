<?php
include 'db_connect.php';

$location = $_POST['location'];
$price_min = $_POST['price_min'];
$price_max = $_POST['price_max'];

$query = "SELECT * FROM properties WHERE location = '$location' AND price BETWEEN '$price_min' AND '$price_max'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='property'>";
        echo "<img src='" . $row['image'] . "' alt='House Image'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>Price: " . $row['price'] . "</p>";
        echo "<p>Location: " . $row['location'] . "</p>";
        echo "<a href='details.html'>View Details</a>";
        echo "</div>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
