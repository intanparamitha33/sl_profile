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
                <a class="nav-link active" aria-current="page" style="color: antiquewhite" href="#about-me">About Me</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(100, 194, 249)" href="#hobbies">Hobbies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(195, 139, 251)" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(255, 225, 125)" href="#experiences">Experiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(255, 116, 211)" href="#lovers">Lovers</a>
              </li>
            </ul>
          {{-- </div> --}}
        </div>
      </nav>
    
    <div class="pre-intro">
        <div class="my-photo">
            {{-- <div class="photo-holder"></div> --}}
            <div class="photo-only">
                <img class="the-photo" src="assets/my_photo.png" alt="Author's Photo">
            </div>
        </div>
        <div class="greeting">
            <h1 style="font-weight: 600; width: 24vw">안녕하세요 여러분~</h1>
            <p class="fs-3" style="">Hello, everyone~</p>
        </div>
        <div class="spongebob-si" style="margin: 1vw">
            <img class="spongebob-photo" style="width: 92%" src="assets/spongebob_sect1.png" alt="Spongebob's Photo">
        </div>
    </div>

    <div id="about-me">
      <div class="line-container" style="display: flex; justify-content: space-around; margin: 3vw 0vw">
        <div class="line-1"></div>
      </div>
      <div class="intro-desc">
        <h2 style="font-weight: 700">
          Some things
          <small class="text-body-secondary" style="opacity: 60%">you need to know</small>
          about me
        </h2>
        <ul class="list-unstyled" style="font-weight: 500; font-size: 1.2vw">
          <div class="amdesc-sect1">
            <li>My name is <span id="span-text">Intan Paramitha</span>. My full name is quite long, but my nickname is so simple, <span id="span-text">IP</span>.</li>
            <li>
              I just turned <span id="span-text">20 years old</span> this year, precisely on <span id="span-text">March 27th</span>.
              <br>
              Just now, I already told you about my birthday!
            </li>
          </div>
          <br>
          <div class="amdesc-sect2"></div>
          <div class="amdesc-sect3"> 
            <li>However, this style only applies to immediate child elements.</li>
            <li>Nested lists:
              <ul>
                <li>are unaffected by this style</li>
                <li>will still show a bullet</li>
                <li>and have appropriate left margin</li>
              </ul>
            </li>
            <li>This may still come in handy in some situations.</li>
          </div>
        </ul>
      </div>
    </div>
    
    <div id="hobbies">

    </div>

    <div id="skills">

    </div>

    <div id="experiences">

    </div>

    <div id="lovers">

    </div>
</body>
</html>