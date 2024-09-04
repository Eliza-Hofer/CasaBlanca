<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Blanca Hookah Lounge</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    // Load announcements from JSON file
    $announcements = json_decode(file_get_contents('announcements.json'), true);
    // Get the most recent announcement
    $latest_announcement = end($announcements);
    ?>
    <!-- Announcement Banner -->
    <div class="alert alert-info text-center" role="alert">
        <?php echo htmlspecialchars($latest_announcement['message']); ?>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Casa Blanca Hookah Lounge</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="schedule_and_events.html">Schedule and Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="video-container">
        <video id="video" autoplay loop muted>
            <source src="Resources/video.MOV" type="video/quicktime">
            <!-- Add additional video formats (e.g., WebM, Ogg) if needed -->
        </video>
        <div id="text-overlay">
            <h1 class="overlay">Slogan</h1>
        </div>
    </div>

    <center>
        <h1 class="title_heading">Casa Blanca</h1>
        <h3 class="Title_Heading_2">Hookah Lounge</h3>
        <p></p>
    </center>

    

    </br>
    </br>
</body>
</html>
