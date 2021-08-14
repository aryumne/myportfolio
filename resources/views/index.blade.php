<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Googlle Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Roboto&family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- My Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Laravel 7 - Portfolio</title>

</head>

<body id="home" data-bs-spy="scroll" data-bs-target="#navbarScroll">

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#home">AryumNE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-pills ms-auto">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#services">Services</a>
                    <a class="nav-link" href="#resume">Resume</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-5 fw-bold" data-aos="zoom-in" data-aos-duration="1000">Welcome to My Portfolio</h1>
            <p class="text-light" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">I'm Aryum Nining Erliandi
                <br>A Web Programmer
            </p>
        </div>
    </div>
    <!-- end Jumbotron -->

    <!-- About -->
    <section id="about" class="sec-about">
        <div class="container pt-5 pb-5">
            <div class="row mb-5 mt-3">
                <div class="col text-center" data-aos="zoom-in" data-aos-duration="500">
                    <h1 style="font-family: viga;"> About Me</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-none d-md-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{asset ('img/foto2.jpg')}}" class="img-fluid shadow mb-5 bg-body rounded-3" alt="my-photo" style="height: 550px;">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="py-5 px-3">
                        <h2>Aryum Nining Erliandi</h2>
                        <p class="lh-lg pt-2 ">
                            Saya seorang
                            <span class="fw-bold">freelancer</span>, sering membangun sebuah website sistem informasi, aplikasi berbasis website. Saya juga pernah membuat project aplikasi android. Saya menyukai olahraga dan juga fotografi.
                        </p>
                        <h5 class="fw-normal fst-italic pt-2 ">Codeigniter v.3</h5>
                        <div class="progress">
                            <div class="progress-bar w-75" style="background-color:blueviolet" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h5 class="fw-normal fst-italic pt-2">Laravel v.8</h5>
                        <div class="progress">
                            <div class="progress-bar w-25" style="background-color:blueviolet" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h5 class="fw-normal fst-italic pt-2">Flutter v.1</h5>
                        <div class="progress">
                            <div class="progress-bar w-25" style="background-color:blueviolet" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h5 class="fw-normal fst-italic pt-2">Bootstrap v.5</h5>
                        <div class="progress">
                            <div class="progress-bar w-50" style="background-color:blueviolet" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button class="btn btn-outline-secondary rounded-pill px-3 mt-4" type="button">Download CV</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About -->

    <!-- Services -->
    <section id="services" class="sec-services bg-light">
        <div class="container pt-5 pb-5">
            <div class="row mb-5 mt-3 text-center">
                <div class="col" data-aos="zoom-in" data-aos-duration="500">
                    <h1 style="font-family: viga;">Services</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="py-5 px-3">
                        <h2>Responsive Website Application</h2>
                        <p class="lh-lg pt-2">
                            Membangun website dengan memprioritaskan keinginan client. Website yang responsive, design modern, akses cepat.</p>
                        <a class="btn btn-outline-secondary rounded-pill px-3 mt-4" type="button">Hubungi saya</a>
                    </div>
                </div>
                <div class="col-md-7" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{asset ('img/webservices.jpg')}}" class="img-fluid shadow p-1 mb-3 bg-body rounded-3" alt="web-services">
                </div>
            </div>
        </div>
    </section>
    <section class="sec-services-mobile">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-end pe-0 d-none d-lg-block" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{asset ('img/mobile1.png')}}" class="img-fluid shadow p-3 mb-5 rounded-3" alt="mobile-apps1" style="height: 550px;">
                </div>
                <div class="col-md-3 d-flex justify-content-start ps-0 d-none d-lg-block" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{asset ('img/mobile2.png')}}" class="img-fluid shadow p-3 mb-5 rounded-3" alt="mobile-apps2" style="height: 550px;">
                </div>
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-start ps-5">
                        <h2>Mobile Application</h2>
                        <p class="lh-lg pt-2 text-white">
                            Membangun aplikasi mobile dengan <span class="fw-bold">UI/UX</span> yang baik.</p>
                        <a class="btn btn-outline-light rounded-pill px-3 mt-4" type="button">Hubungi saya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Services -->

    <!-- Resume -->
    <section id="resume" class="sec-resume bg-light">
        <div class="container pt-5 pb-5">
            <div class="row mb-5 mt-3">
                <div class="col text-center" data-aos="zoom-in" data-aos-duration="500">
                    <h1 style="font-family: viga;">Resume</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <ul class="list-group p-3">
                        <li class="list-group-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pt-2 d-flex justify-content-between align-items-start">
                                <h4>Full Stack Web Engineer</h4>
                                <span class="badge bg-secondary px-3 py-2 rounded-pill">Full time</span>
                            </div>
                            <div class="row pt-2 d-flex justify-content-between align-item-start">
                                <div class="col-8">
                                    <p><span class="fst-italic">Baseline survey transformasi ekonomi kampung terpadu</span> : Universitas Papua </p>
                                </div>
                                <div class="col-4 text-end">
                                    <small>Des 2020 - April 2021</small>
                                </div>
                            </div>
                        </li>
                        <hr data-aos="zoom-in-up" data-aos-duration="1000">
                        <li class="list-group-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pt-2 d-flex justify-content-between align-items-start">
                                <h4>Front-end Android Engineer</h4>
                                <span class="badge bg-secondary px-3 py-2 rounded-pill">Full time</span>
                            </div>
                            <div class="row pt-2 d-flex justify-content-between align-item-start">
                                <div class="col-8">
                                    <p><span class="fst-italic">Pencatatan status reproduksi ternak babi</span> (STARBAB): Bangun Farm</p>
                                </div>
                                <div class="col-4 text-end">
                                    <small>Sept 2020 - Des 2020</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-md-block" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img src="{{asset ('img/foto3.jpg')}}" class="img-fluid shadow p-1 mb-3 bg-body rounded-3" alt="web-services">
                </div>
            </div>
        </div>
    </section>
    <!-- end Resume -->

    <!-- Contact -->
    <section id="contact" class="sec-contact">
        <div class="container pt-5 pb-2">
            <div class="row mb-5 mt-3">
                <div class="col text-center">
                    <h1 style="font-family: viga; color:white">Contact</h1>
                </div>
            </div>
            <div class="row px-2">
                <div class="col-md-7 pb-5">
                    <form class="row needs-validation" method="POST" action="{{route('sendMessage')}}">
                        @csrf
                        <div class="col-lg-6">
                            <label for="firstName" class="form-label text-light">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="lastName" class="form-label text-light">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-12 pt-3 ">
                            <label for="email" class="form-label text-light">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please input valid email.
                            </div>
                        </div>
                        <div class="col-12 pt-3">
                            <label for="message" class="form-label text-light">Message</label>
                            <textarea type="text" class="form-control" id="message" name="message" required></textarea>
                            <div class="invalid-feedback">
                                Please input your message
                            </div>
                        </div>
                        <div class="col-12 pt-4 text-end ">
                            <button class="btn btn-outline-light rounded-pill" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex justify-content-end">
                    <div class="row px-5">
                        <div class="col-md-6 pb-5">
                            <h4 class="text-light ps-3 pb-2">Contact Info</h4>
                            <small class="text-light"> 4 Simponi Jaya Rd. Manokwari, 98312</small> <br>
                            <small class="text-light">+6281245395373 </small> <br>
                            <small class="text-light">aryumidblog@gmail.com </small> <br>
                            <small class="text-light">portfolio.aryum.id </small> <br>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <h4 class="text-light ps-3 pb-2">Links</h4>
                            <div class="list-group ">
                                <a href="#" class="text-light">HTML5</a>
                                <a href="#" class="text-light">Jquery</a>
                                <a href="#" class="text-light">Bootstrap</a>
                                <a href="#" class="text-light">Laravel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-3">
                <hr style="color:white;">
                <div class="col text-center pt-2">
                    <p class="text-light">Copyright &copy; 2021 | Aryum NE | Portfolio Website</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end Contact -->


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
        AOS.init();
        nav = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 100) {
                nav.classList.add('navbar-light', 'bg-light', 'shadow', 'show');
                nav.classList.remove('navbar-dark');
            } else {
                nav.classList.add('navbar-dark');
                nav.classList.remove('bg-light', 'shadow', );
            }
        });


        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            });

        var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
        dataSpyList.forEach(function(dataSpyEl) {
            bootstrap.ScrollSpy.getInstance(dataSpyEl)
                .refresh()
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>