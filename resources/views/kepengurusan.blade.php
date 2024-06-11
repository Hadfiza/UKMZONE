<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Kepengurusan</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: left;
            padding: 1rem;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .main {
            display: flex;
            flex: 1;
            height: calc(100vh - 144px); /* Adjust height based on header and navbar */
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            overflow-y: auto;
        }
        .content {
            flex: 1;
            padding: 1rem;
        }
        .navbar-1 {
            color: black;
        }
        .sidebar a {
            display: block;
            color: #000;
            padding: 10px 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar-nav {
            padding-left: 190px;
        }
        .card-img-top {
            width: 300px;
            height: 330px;
            object-fit: cover;
            margin: 0 auto;
        }
        .card-body {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>UKMZone</h1>
    </div>
    <div class="navbar-1">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kepengurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recruitment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rekomendasi UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forum Diskusi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="sidebar">
            <a href="#">BEM ULM</a>
            <a href="#">LDK UKMM</a>
        </div>
        <!-- Tampilan Content -->
        <div class="content">
            <h2>Kepengurusan</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <img src="{{ asset('logo/ldkumm.jpeg') }}" class="card-img-top" alt="Chairperson">
                            <div class="card-body">
                                <h5 class="card-title">Ketua Umum</h5>
                                <p class="card-text">Hadfiza</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Vice Chairperson 1">
                            <div class="card-body">
                                <h5 class="card-title">Sekertaris</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Vice Chairperson 2">
                            <div class="card-body">
                                <h5 class="card-title">Bendahara</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Secretary 1">
                            <div class="card-body">
                                <h5 class="card-title">Kepala Bidang Media</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Secretary 2">
                            <div class="card-body">
                                <h5 class="card-title">Secretary 2</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Treasurer 1">
                            <div class="card-body">
                                <h5 class="card-title">Kepala Bidang PSDM</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Treasurer 2">
                            <div class="card-body">
                                <h5 class="card-title">Kepala Bidang Keagamaan</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
