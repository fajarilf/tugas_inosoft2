<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel = "stylesheet" href = "{{asset('css/style.css')}}">
        <script src="https://kit.fontawesome.com/34fcd2309b.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

    <body>
        {{-- navbar --}}
        <nav class = "navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a  class="navbar-brand" href="#">
                    DEWO ROBOTEAM
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about us">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- banner --}}

        <div class="container-fluid" id="banner-container">
            <div class="row" id="banner-row">
                <div class="col-md-6" id="banner-col">
                    <h3>Robotics team based at the State University of Surabaya.</h3>
                    <p>Develop your interest and talent in the field of robotics.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <a class="btn btn-primary" href="#" role="button">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6" id="banner-col2">
                    <img class="img-responsive rounded mx-auto d-block" src="image/dewo2.jpg" alt="gambar">
                </div>
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
    </body>
</html>