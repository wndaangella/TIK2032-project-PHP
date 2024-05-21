<?php
include 'connect.php';

$sql = "SELECT id, title, image_url, content FROM Blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap row
    while($row = $result->fetch_assoc()) {
        echo "<article class='blog-box'>";
        echo "<div class='blog-img'>";
        echo "<img src='" . $row["image_url"] . "' alt='" . $row["title"] . "'>";
        echo "</div>";
        echo "<h2 class='blog-title'>" . $row["title"] . "</h2>";
        echo "<div class='blog-text'><p>" . $row["content"] . "</p></div>";
        echo "</article><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
