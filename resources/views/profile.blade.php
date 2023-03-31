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

    <div class="short-intro">
      <h2>
        Some things
        <small class="text-body-secondary" style="opacity: 70%">you need to know</small>
        about me
      </h2>
      <dl class="row">
        <dt class="col-sm-3">Description lists</dt>
        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
      
        <dt class="col-sm-3">Term</dt>
        <dd class="col-sm-9">
          <p>Definition for the term.</p>
          <p>And some more placeholder definition text.</p>
        </dd>
      
        <dt class="col-sm-3">Another term</dt>
        <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>
      
        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
        <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>
      
        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
          <dl class="row">
            <dt class="col-sm-4">Nested definition list</dt>
            <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
          </dl>
        </dd>
      </dl>
    </div>
    
    <div class="hobbies">

    </div>

    <div class="skills">

    </div>

    <div class="experiences">

    </div>

    <div class="lovers">

    </div>
</body>
</html>