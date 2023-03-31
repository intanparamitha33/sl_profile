<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">

    
</head>
<body>
    <nav class="navbar sticky-top bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav"> --}}
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: antiquewhite" href="#short-intro">Short Intro</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(55, 182, 255)" href="#hobbies">Hobbies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(195, 139, 251)" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(255, 225, 125)" href="#experiences">Experiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(255, 106, 208)" href="#lovers">Lovers</a>
              </li>
            </ul>
          {{-- </div> --}}
        </div>
      </nav>
    {{-- <nav class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#short-intro">Short Intro</a>
          <a class="navbar-brand" href="#hobbies">Hobbies</a>
          <a class="navbar-brand" href="#skills">Skills</a>
          <a class="navbar-brand" href="#life-experiences">Life Experiences</a>
          <a class="navbar-brand" href="#lovers">Lovers</a>
        </div>

        <div class="line-under-navtext" style="border: 0.11vw solid rgb(26, 26, 26)"></div>
    </nav> --}}
    
    <div class="short-intro">
        <div class="my-photo">
            <div class="photo-holder"></div>
            <div class="photo-only">
                <img class="the-photo" src="assets/my_photo.png" alt="Author's Photo">
            </div>
        </div>
        <div class="my-introduction">
            <h1 class="welcoming" style="font-size: 3vw; font-weight: 700">안녕하세요~</h1>
        </div>
    </div>
    <div class="hobbies" style="background-color: blueviolet">

    </div>
    <div class="skills" style="background-color: violet">

    </div>
    <div class="experiences" style="background-color: pink">

    </div>
    <div class="lovers" style="background-color: peachpuff">

    </div>
</body>
</html>