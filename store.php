<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = mysqli_connect("localhost", "root", "", "movie_archive");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $movie_name = $_POST['movie_name'];
    $movie_type = $_POST['movie_type'];
    $release_date = $_POST['release_date'];
    $producer_name = $_POST['producer_name'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO movies 
    (movie_name, movie_type, release_date, producer_name, rating)
    VALUES ('$movie_name', '$movie_type', '$release_date', '$producer_name', '$rating')";

    if (mysqli_query($conn, $sql)) {
        echo "Movie data stored successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
