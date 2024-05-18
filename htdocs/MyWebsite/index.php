<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Amazing Travel Destinations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Travel Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="destinations-listing.php">Destination Generator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="multimedia.php">Multimedia</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="featured-destinations">
            <h2>Featured Destinations</h2>
            <?php
            $db = new PDO('mysql:host=localhost;dbname=traveldb;charset=utf8mb4', 'username', 'password');
            $stmt = $db->query('SELECT * FROM destinations LIMIT 3');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="images/' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                echo '<p class="card-text">' . $row['description'] . '</p>';
                echo '<a href="destination-listings.php?destination=' . $row['id'] . '" class="btn btn-primary">Learn More</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </section>
        <section class="search-bar">
            <form action="destination-listings.php" method="get">
                <div class="form-group">
                    <label for="search">Search Destinations</label>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Enter name or keyword">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="contact">
            <h4>Contact Us</h4>
            <p>Email: info@mytravelagency.com</p>
            <p>Phone: 1-800-123-4567</p>
        </div>
       