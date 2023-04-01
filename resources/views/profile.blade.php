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
                <a class="nav-link active" aria-current="page" style="color: rgb(249, 225, 195)" href="#about-me">About Me</a>
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
      <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
        <div class="line-1"></div>
      </div>
      <div class="intro-desc">
        <h2 class="fw-bold fst-italic text-center text-black py-1">
          Some things
          <small class="text-body-secondary" style="opacity: 50%">you need to know</small>
          About Me
        </h2>
        
        {{-- Short Introduction --}}
        <div class="amdesc-sect1 text-center">
          <ul class="list-unstyled" style="font-weight: 500; font-size: 1.1vw">
            <li style="font-size: 1.2vw">My name is <span id="span-text">Intan Paramitha</span>.</li>
            <br>
            <li>
              I am a <span id="span-text">20 years old</span> college student who has the ability to manage a work and communicate within a team.
              <br>
              <span id="span-text">My goal</span> is seeking experiences in Computer Science, especially in <span id="span-text">UI/UX Design</span> or <span id="span-text">Web Programming</span> field.
              <br>
              I am <span id="span-text">a learner</span> of some programming languages such as <span id="span-text">HTML, CSS, C, PHP, Python, and SQL</span>. 
              <br>
              I <span id="span-text">participated in organizations</span> that connect me with the others and accomodate my hobbies.
            </li>
          </ul>
        </div>

        {{-- Education History --}}
        <div class="amdesc-sect2" style="padding: 2vw">
          <h3 class="fw-bold text-center text-black py-3" style="margin: 1vw 0vw">
            History of Education
          </h3>
          {{-- Timeline 1 --}}
          <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
              <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
              <h5 class="m-2">
                <span class="badge rounded-circle bg-light border">&nbsp;</span>
              </h5>
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
            </div>
            <div class="col py-2">
              <div class="card">
                <div class="card-body">
                  <div class="float-end text-muted">2021 - Now</div>
                  <h4 class="card-title text-black">PPTI BCA (BCA x BINUS University)</h4>
                </div>
              </div>
            </div>
          </div>

          {{-- Timeline 2 --}}
          <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
              <h5 class="m-2">
                <span class="badge rounded-circle bg-light border">&nbsp;</span>
              </h5>
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
            </div>
            <div class="col py-2">
              <div class="card">
                <div class="card-body">
                  <div class="float-end text-muted">2018 - 2021</div>
                  <h4 class="card-title text-black">SMA Negeri 4 Denpasar</h4>
                </div>
              </div>
            </div>
          </div>

          {{-- Timeline 3 --}}
          <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
              <h5 class="m-2">
                <span class="badge rounded-circle bg-light border">&nbsp;</span>
              </h5>
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
            </div>
            <div class="col py-2">
              <div class="card">
                <div class="card-body">
                  <div class="float-end text-muted">2015 - 2018</div>
                  <h4 class="card-title text-black">SMP Negeri 10 Denpasar</h4>
                </div>
              </div>
            </div>
          </div>

          {{-- Timeline 4 --}}
          <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
              <h5 class="m-2">
                <span class="badge rounded-circle bg-light border">&nbsp;</span>
              </h5>
              <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
              </div>
            </div>
            <div class="col py-2">
              <div class="card">
                <div class="card-body">
                  <div class="float-end text-muted">2009 - 2015</div>
                  <h4 class="card-title text-black">SDP Negeri Tulangampiang</h4>
                </div>
              </div>
            </div>
          </div>
        </div>  

        {{-- Recent Works --}}
        <div class="amdesc-sect3 text-center"> 
          <h3 class="fw-bold text-black py-2" style="margin-top: 1vw">
            <small class="text-body-secondary" style="opacity: 50%">Take a look at my</small> Recent Works
          </h3>
          <p class="fw-semibold py-3" style="font-size: 1.2vw">Here is my individual and group projects.</p>
          <div class="carousel-container d-flex justify-content-center">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" style="width: 70%">
              <div class="carousel-inner shadow p-3 mb-5 bg-body rounded">
                <div class="carousel-item active">
                  <img src="assets/blib_project.png" class="d-block w-100" alt="B-Lib Project">
                </div>
                <div class="carousel-item">
                  <img src="assets/hirabeats_project.png" class="d-block w-100" alt="HiraBeats Project">
                </div>
                <div class="carousel-item">
                  <img src="assets/fugemy_project.png" class="d-block w-100" alt="Fugemy Project">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="hobbies">
      <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
        <div class="line-1"></div>
      </div>
      <div class="hobbies-desc">
        <h2 class="fw-bold fst-italic text-center text-white">
          <small class="text-body-secondary" style="opacity: 50%">When life gets tough,</small>
          <br>
          <small class="text-body-secondary" style="opacity: 50%">I deal with it by doing</small>
          My Hobbies
        </h2>
        <div class="list-hobbies d-flex justify-content-around">
          <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
            <img src="assets/hobbies_music.jpg" class="card-img-top" alt="1st Hobby - Music">
            <div class="card-body">
              <h5 class="card-title fw-bold"><u>Music</u></h5>
              <p class="card-text" style="font-weight: 500">I love to sing, can play the guitar a bit, and really want to learn a lot of music instruments.</p>
            </div>
          </div>
          <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
            <img src="assets/hobbies_watching.png" class="card-img-top" alt="2nd Hobby - Watching">
            <div class="card-body">
              <h5 class="card-title fw-bold"><u>Watching</u></h5>
              <p class="card-text" style="font-weight: 500">When I have free time, I like to watch action or fantasy movies.</p>
            </div>
          </div>
          <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
            <img src="assets/hobbies_reading.jpg" class="card-img-top" alt="3rd Hobby - Reading">
            <div class="card-body">
              <h5 class="card-title fw-bold"><u>Reading</u></h5>
              <p class="card-text" style="font-weight: 500">Loved many of Tere Liye's works. Still love the analysis in Sherlock Holmes and Conan.</p>
            </div>
          </div>
        </div>
      </div>
      {{-- <li>However, this style only applies to immediate child elements.</li>
      <li>Nested lists:
        <ul>
          <li>are unaffected by this style</li>
          <li>will still show a bullet</li>
          <li>and have appropriate left margin</li>
        </ul>
      </li>
      <li>This may still come in handy in some situations.</li> --}}
    </div>

    <div id="skills">

    </div>

    <div id="experiences">

    </div>

    <div id="lovers">

    </div>
</body>
</html>