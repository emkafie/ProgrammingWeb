<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsphere - News Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Featured Article Section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><img src="/basdat/img/Logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto align-items-center my-3">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">World</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Politics</a></li>
                </ul>
                <button class="btn ml-3" style="background-color: #fff;"><a href="/basdat/login.php" class="px-3 py-3 fw-semibold" style="text-decoration: none; color: #444;">Login</a></button>
            </div>
        </div>
    </nav>

    <div class="landing-image">
        <img src="/basdat/img/heroImg.png" alt="Background Image">
        <div class="text-overlay fs-1">
            Facing Cybersecurity Threats in the Digital Era
            <p>Thursday, 04 December 2024</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">

        <div class="d-flex align-items-center">
            <hr class="w-100" style="border: 2px solid #000;">
            <h2 class="fw-bold text-center my-5 mx-5 px-5 w-50">Latest News</h2>
            <hr class="w-100" style="border: 2px solid #000;">
        </div>

        <!-- Latest News -->
        <div class="news-container">
            <div class="news-item">
                <div class="image-holder">
                    <img src="ukraine-report.jpg" alt="Ukraine Report Draft Circulation Begins">
                    <h3>Ukraine Report Draft Circulation Begins</h3>
                    <p>The intelligence Committee will start sharing a draft report on U.S. aid to Ukraine for review and feedback.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="tech-layoffs.jpg" alt="Tech Giant Layoffs Continue">
                    <h3>Tech Giant Layoffs Continue</h3>
                    <p>Major technology companies announce further job cuts amid economic uncertainty.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="east-coast-storm.jpg" alt="Storm Hits East Coast">
                    <h3>Storm Hits East Coast</h3>
                    <p>Severe weather disrupts travel and power across the eastern U.S.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="election-surprises.jpg" alt="Elections Yield Surprises">
                    <h3>Elections Yield Surprises</h3>
                    <p>Unexpected outcomes shake up political races nationwide.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="oil-prices-drop.jpg" alt="Oil Prices Drop Again">
                    <h3>Oil Prices Drop Again</h3>
                    <p>Global oil prices fall due to oversupply and weak demand forecasts.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="spacex-launch.jpg" alt="SpaceX Launch Delayed">
                    <h3>SpaceX Launch Delayed</h3>
                    <p>Technical issues postpone the latest SpaceX satellite mission.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
        </div>

        <!-- Category -->
        <div class="d-flex align-items-center">
            <hr class="w-100" style="border: 2px solid #000;">
            <h2 class="fw-bold text-center my-5 mx-5 px-5 w-50">Category</h2>
            <hr class="w-100" style="border: 2px solid #000;">
        </div>

        <div class="category-container">
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Technology.png" alt="Technology">
                        <div class="overlay"></div>
                        <h3>Technology</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Entertainment.png" alt="Entertainment">
                        <div class="overlay"></div>
                        <h3>Entertainment</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Health.png" alt="Health">
                        <div class="overlay"></div>
                        <h3>Health</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Sports.png" alt="Sports">
                        <div class="overlay"></div>
                        <h3>Sports</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Politics.png" alt="Politics">
                        <div class="overlay"></div>
                        <h3>Politics</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Travel.png" alt="Travel">
                        <div class="overlay"></div>
                        <h3>Travel</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Fashion.png" alt="Fashion">
                        <div class="overlay"></div>
                        <h3>Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="category-item">
                <a href="">
                    <div class="overlay-container">
                        <img src="/basdat/img/Education.png" alt="Education">
                        <div class="overlay"></div>
                        <h3>Education</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- Trending Now -->
        <div class="d-flex align-items-center">
            <hr class="w-100" style="border: 2px solid #000;">
            <h2 class="fw-bold text-center my-5 mx-5 px-5 w-75">Trending Now</h2>
            <hr class="w-100" style="border: 2px solid #000;">
        </div>


        <div class="trend-container">
            <div class="news-item">
                <div class="image-holder">
                    <img src="ukraine-report.jpg" alt="Ukraine Report Draft Circulation Begins">
                    <h3>Ukraine Report Draft Circulation Begins</h3>
                    <p>The intelligence Committee will start sharing a draft report on U.S. aid to Ukraine for review and feedback.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="tech-layoffs.jpg" alt="Tech Giant Layoffs Continue">
                    <h3>Tech Giant Layoffs Continue</h3>
                    <p>Major technology companies announce further job cuts amid economic uncertainty.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="east-coast-storm.jpg" alt="Storm Hits East Coast">
                    <h3>Storm Hits East Coast</h3>
                    <p>Severe weather disrupts travel and power across the eastern U.S.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="election-surprises.jpg" alt="Elections Yield Surprises">
                    <h3>Elections Yield Surprises</h3>
                    <p>Unexpected outcomes shake up political races nationwide.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="oil-prices-drop.jpg" alt="Oil Prices Drop Again">
                    <h3>Oil Prices Drop Again</h3>
                    <p>Global oil prices fall due to oversupply and weak demand forecasts.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
            <div class="news-item">
                <div class="image-holder">
                    <img src="spacex-launch.jpg" alt="SpaceX Launch Delayed">
                    <h3>SpaceX Launch Delayed</h3>
                    <p>Technical issues postpone the latest SpaceX satellite mission.</p>
                </div>
                <a href="#" class="continue-button">Continue Reading</a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
            <div class="copyright">
                <p>&copy; 2024 Newsphere. All Rights Reserved.</p>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<!-- <div class="row">
            <div class="col-12 mb-4 featured-article">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="/api/placeholder/800/400" class="img-fluid article-image" alt="Featured Article">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Breaking: Global Climate Summit Announces Landmark Agreement</h2>
                                <p class="card-text">World leaders converge to discuss critical environmental strategies and collaborative solutions.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="/api/placeholder/400/250" class="card-img-top article-image" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Tech Innovation Breakthrough</h5>
                        <p class="card-text">New quantum computing technology promises revolutionary computational capabilities.</p>
                        <a href="#" class="btn btn-primary btn-sm">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/api/placeholder/400/250" class="card-img-top article-image" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Economic Trends Analysis</h5>
                        <p class="card-text">Experts predict significant shifts in global economic landscape for upcoming quarter.</p>
                        <a href="#" class="btn btn-primary btn-sm">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/api/placeholder/400/250" class="card-img-top article-image" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Space Exploration Update</h5>
                        <p class="card-text">NASA reveals ambitious plans for next-generation space missions.</p>
                        <a href="#" class="btn btn-primary btn-sm">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->