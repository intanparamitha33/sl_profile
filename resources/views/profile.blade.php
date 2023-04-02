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
  {{-- NavBar --}}
  <nav class="navbar sticky-top bg-dark" data-bs-theme="dark">
    <div class="container-fluid d-flex">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(249, 213, 169)" href="#introduction">Introduction</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(100, 194, 249)" href="#hobbies">Hobbies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(195, 139, 251)" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(255, 178, 238)" href="#experiences">Experiences</a>
        </li>
      </ul>
    </div>  
  </nav>   
    
  {{-- Before Introduction --}}
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

  {{-- Introduction --}}
  <div id="introduction">
    <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
      <div class="line-1"></div>
    </div>
    <div class="intro-desc">
      {{-- Section Title --}}
      <h2 class="fw-bold fst-italic text-center text-black py-1">
        A few things
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
    
  {{-- Hobbies --}}
  <div id="hobbies">
    <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
      <div class="line-1"></div>
    </div>
    <div class="hobbies-desc pt-3">
      {{-- Section Title --}}
      <h2 class="fw-bold fst-italic text-center text-white">
        <small class="text-body-secondary" style="opacity: 50%">When life gets tough,</small>
        <br>
        <small class="text-body-secondary" style="opacity: 50%">I deal with it by doing</small>
        My Hobbies
      </h2>
      {{-- Section Content --}}
      <div class="list-hobbies d-flex justify-content-around">
        {{-- Music --}}
        <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
          <img src="assets/hobbies_music.jpg" class="card-img-top" alt="1st Hobby - Music">
          <div class="card-body">
            <h5 class="card-title fw-bold"><u>Music</u></h5>
            <p class="card-text" style="font-weight: 500">I love to sing, can play the guitar a bit, and really want to learn a lot of music instruments.</p>
          </div>
        </div>
        {{-- Watching --}}
        <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
          <img src="assets/hobbies_watching.png" class="card-img-top" alt="2nd Hobby - Watching">
          <div class="card-body">
            <h5 class="card-title fw-bold"><u>Watching</u></h5>
            <p class="card-text" style="font-weight: 500">When I have free time, I like to watch action or fantasy movies.</p>
          </div>
        </div>
        {{-- Reading --}}
        <div class="card m-5 mt-4 p-3" style="background-color:rgba(255, 255, 255, 0); border: 0.15vw solid white">
          <img src="assets/hobbies_reading.jpg" class="card-img-top" alt="3rd Hobby - Reading">
          <div class="card-body">
            <h5 class="card-title fw-bold"><u>Reading</u></h5>
            <p class="card-text" style="font-weight: 500">Loved many of Tere Liye's works. Still love the analysis in Sherlock Holmes and Conan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Skills --}}
  <div id="skills">
    <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
      <div class="line-1"></div>
    </div>
    {{-- Section Title --}}
    <h2 class="fw-bold fst-italic text-center text-white pt-3">
      Some Skills 
      <small class="text-body-secondary" style="opacity: 50%">that I got and learned</small>
      <br>
      <small class="text-body-secondary" style="opacity: 50%">from being</small>
      a Computer Science student.
    </h2>
    {{-- Section Content --}}
    <div class="skills-desc d-flex">
      <div class="progress-container" style="width: 100%">
        {{-- PHP --}}
        <div class="progress-1 d-flex flex-row align-items-center" style="margin-bottom: 2vw">
          <div class="skills-logo d-flex justify-content-center" style="width: 45%">
            <img src="assets/logo_php.png" alt="PHP Logo" style="height: 10vw">
          </div>
          <div class="progress" style="height: 2vw; width: 45%" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: 10%">10%</div>
          </div>
        </div>
        {{-- Python --}}
        <div class="progress-2 d-flex flex-row align-items-center" style="margin-bottom: 2vw">
          <div class="skills-logo d-flex justify-content-center" style="width: 45%">
            <img src="assets/logo_python.png" alt="Python Logo" style="height: 9vw">
          </div>
          <div class="progress" style="height: 2vw; width: 45%" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-info text-dark" style="width: 30%">30%</div>
          </div>
        </div>
        {{-- mySQL --}}
        <div class="progress-3 d-flex flex-row align-items-center" style="margin-bottom: 2vw">
          <div class="skills-logo d-flex justify-content-center" style="width: 45%">
            <img src="assets/logo_mySql.png" alt="MySQL Logo" style="height: 10vw">
          </div>
          <div class="progress" style="height: 2vw; width: 45%" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-warning text-dark" style="width: 65%">65%</div>
          </div>
        </div>
        {{-- HTML, JS, CSS --}}
        <div class="progress-4 d-flex flex-row align-items-center" style="margin-bottom: 2vw">
          <div class="skills-logo d-flex justify-content-center" style="width: 45%">
            <img src="assets/logo_html_js_css.png" alt="HTML-JS-CSS Logo" style="height: 9vw">
          </div>
          <div class="progress" style="height: 2vw; width: 45%" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-danger" style="width: 80%">80%</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Experiences --}}
  <div id="experiences">
    <div class="line-container d-flex justify-content-around" style="margin: 3vw 0vw">
      <div class="line-1"></div>
    </div>
    {{-- Section Title --}}
    <h2 class="fw-bold fst-italic text-center text-black py-3">
      <small class="text-body-secondary" style="opacity: 50%">Besides college projects, I also have</small>
      <br>
      non-academic Experiences.
    </h2>
    {{-- Section Content --}}
    <div class="exp-desc text-white">
      <ul class="list-unstyled py-2" style="font-weight: 500; font-size: 1.2vw; margin: 0vw 7vw">
        <li>
          Apart from academics, I want to continue trying to develop myself <br> by participating in <span id="span-text">organizational activities or events</span>.
        </li>
        <br>
        <li>Here are some of my experiences:
          <div class="exp-sect1 d-flex flex-row justify-content-around text-center py-3" style="margin-bottom: 2vw">
            <div class="exp-1">
              <p><span id="span-text">Charity Action of RTB - 2023</span><br><em>(as a Part of PIC Koorlan RTB)</em></p>
              <img src="assets/charity_action_of_rtb.jpg" class="rounded mx-auto d-block img-thumbnail" style="height: 18vw" alt="Charity Action of RTB">
            </div>
            <div class="exp-2">
              <p><span id="span-text">RTB Gold Festival - 2023</span><br><em>(as Master of Ceremony)</em></p>
              <img src="assets/rtb_gold_festival.jpg" class="rounded mx-auto d-block img-thumbnail" style="height: 18vw" alt="RTB Gold Festival">
            </div>
          </div>
          
          <div class="exp-sect2 d-flex flex-row justify-content-around text-center" style="margin-bottom: 2vw ">
            <div class="exp-3">
              <p><span id="span-text">Egg-Venger Hunt Paskah - 2022</span><br><em>(as a Part of Creative RTB)</em></p>
              <img src="assets/eggvenger_hunt.jpeg" class="rounded mx-auto d-block m-2 img-thumbnail" style="height: 18vw" alt="Egg-Venger Hunt Paskah">
            </div>
            <div class="exp-4">
              <p><span id="span-text">Multiple RTB Live Music - 2022</span><br><em>(as a Part of Creative RTB)</em></p>
              <img src="assets/live_music.jpg" class="rounded mx-auto d-block m-2 img-thumbnail" style="height: 18vw" alt="RTB Live Music">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>