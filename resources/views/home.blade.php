<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Perpustakaan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Sen:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap');

    .navbar {
        background-color: #232536 !important;
        z-index: 1000;
    }

    .img-edit {
        position: relative;
        width: 50px;
        height: 50px;
        left: 30px;
        top: 0px;
        border-radius: none;
    }

    .coba-edit {
        background-color: white !important;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        border: none;
        padding: 13px 18px;
        margin-left: 10px;
        gap: 15px;
    }

    .coba-edit:hover {
        color: #FFD050;

    }

    .nav-item,
    .nav-link {
        color: white;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 10px;
        display: flex;
        align-items: center;
    }

    .nav-item,
    .nav-link:hover {
        color: #FFD050;
    }

    span,
    .tulisan-logo {
        font-family: 'Inter';
        font-size: 20px;
        font-style: normal;
        margin-left: 30px;
    }

    .jumbotron {
        background-image: url(gambar/perpus.png);
        height: 720px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .overlay {
        position: absolute;
        width: 1440px;
        height: 800px;
        right: 0px;
        top: 0;
        background: radial-gradient(30.56% 76.04% at 74.52% 0%, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 100%)
    }

    .text1 {
        position: absolute;
        width: 414px;
        height: 20px;
        top: 208px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #FFFFFF;
    }

    .text2 {
        position: absolute;
        width: 803px;
        height: 128px;
        /* right: 556px; */
        top: 252px;
        font-family: 'Sen';
        font-style: normal;
        font-weight: 700;
        font-size: 56px;
        line-height: 64px;
        letter-spacing: -2px;
        color: #FFFFFF;

    }

    .text3 {
        position: absolute;
        width: 251px;
        height: 28px;
        top: 404px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        color: #FFFFFF;
    }

    .text4 {
        position: absolute;
        width: 599px;
        height: 56px;
        /* right: 761px; */
        top: 448px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        color: #FFFFFF;
    }

    .masuk {
        left: 120px;
        background: #FFD050;
    }

    .daftar {
        left: 200px;
        background: #FFD050;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px hsla(0, 0%, 0%, 0.06);
    }

    .card-khusus:hover {
        background-color: #FBF6EA;
    }

    .rectangle {
        position: absolute;
        width: 843px;
        height: 30px;
        right: 298px;
        top: 1883px;
        background: #FFD050;
        transform: matrix(1, 0, 0, -1, 0, 0);
    }

    .rectangle1 {

        position: absolute;
        width: 282px;
        height: 30px;
        right: 90px;
        top: 1883px;
        background: #592EA9;
        transform: matrix(1, 0, 0, -1, 0, 0);
    }

    .back {
        position: absolute;
        width: 1152px;
        height: 500px;
        top: 1913px;
        background: #F4F0F8;
    }
</style>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/home">
                <img src="{{ asset('gambar/sman1matangkuli1.png') }}" class="img-fluid img-edit">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <a href="/" type="submit" class="btn btn-warning coba-edit">Masuk</a>
            </div>
        </div>
    </nav>
    {{-- akhir navbar --}}

    {{-- jumbotron --}}
    <div class="p-5 text-white jumbotron">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <p class="fs-5 text-white text-white-50"
                        style="margin-top: 89px;  position: absolute; font-family: 'Inter'; font-size: 16px;">
                        A NEW
                        FOR
                        <small class="fs-5 text-white text-bold" style="text-indent: 3px;"> SMA NEGERI 1
                            MATANGKULI</small>
                    </p>
                    {{-- <p class="card-text">BY <small class="text-warning">AFIFA GROUP</small> | Nov
                        12 ,2022</p> --}}
                </div>
                <div class="col-md-12">
                    <p class="fs-1 d-flex text-white fw-bold"
                        style="margin-top: 125px;  font-family: 'Inter'; position: absolute; letter-spacing: 3px;">
                        PERPUSTAKAAN
                        DIGITAL <br>
                        BERBASIS WEBSITE</p>
                </div>
                <div class="col-md-12">
                    <p class="fs-6 d-flex text-white fw-normal"
                        style="margin-top: 260px;  font-family: 'Inter'; position: absolute;">BY <a href="#"
                            class="text-warning text-decoration-none text-a">AFIFA
                            GROUP</a>
                        | Nov 12 ,2022</p>

                </div>
                <div class="col-md-12">
                    <p class="fs-6 d-flex fw-normal"
                        style="margin-top: 300px;  font-family: 'Inter'; position: absolute;">Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla
                        pariatur. <br>Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="col-md-12 position-absolute rounded-0" style="font-family: 'Inter'; margin-top: 425px;">
                <button type="submit" class="btn btn-warning rounded-0 masuk">MASUK</button>
                <button type="submit" class="btn btn-warning rounded-0 daftar">DAFTAR</button>
            </div>
        </div>
    </div>
    {{-- akhir jumbotron --}}
    {{-- section  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 140px">
                <h2 class="fs-1 text-start fw-bold mb-3"
                    style="font-family: 'Sen', sans-serif; font-style: normal; font-size: 36px; line-height: 48px; top: 928px; letter-spacing: -2px; color: #232536;">
                    Featured Post</h2>

                <div class="card rounded-0">
                    <img src="{{ asset('gambar/feture.png') }}" class="img-fluid mx-auto d-block rounded-0 mt-5">
                    <div class="card-body">
                        <div class="px-3">
                            <p class="card-text">BY <small class="" style="color: #592EA9">
                                    AFIFA
                                    GROUP</small> | Nov
                                12 ,2022</p>
                            <p class="card-text"
                                style="font-family: 'Sen'; font-style: normal; font-weight: 700; font-size: 28px; line-height: 40px; letter-spacing: -1px;color: #232536;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <p class="card-text"
                                style=" font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #6D6E76;">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <button type="submit" class="btn btn-warning rounded-0 border-0"
                                style="background-color: #FFD050">Readme ></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 140px">
                <h2 class="fs-1 text-start fw-bold mb-3"
                    style="font-family: 'Sen', sans-serif; font-style: normal; font-size: 36px; line-height: 48px; top: 928px; letter-spacing: -2px; color: #232536;">
                    All Post</h2>

                <a href="" class="text-decoration-none position-absolute"
                    style="width: 60px; height: 28px; right: 76px; top: 945px; font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #592EA9;">View
                    All</a>

                <div class="card rounded-0 border-0 mb-3" style="width: 400px; background: #F4F4F4;">
                    <div class="card-body">
                        <p class="card-text">BY <small class="" style="color: #592EA9">AFIFA
                                GROUP</small> | Nov
                            12 ,2022</p>
                        <p class="card-text"
                            style=" font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #6D6E76;">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
                <div class="card rounded-0 border-0 mb-3" style="width: 400px; background: #F4F4F4;">
                    <div class="card-body">
                        <p class="card-text">BY <small class="" style="color: #592EA9">AFIFA
                                GROUP</small> | Nov
                            12 ,2022</p>
                        <p class="card-text"
                            style=" font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #6D6E76;">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
                <div class="card rounded-0 border-0 mb-3" style="width: 400px; background: #F4F4F4;">
                    <div class="card-body">
                        <p class="card-text">BY <small class="" style="color: #592EA9">AFIFA
                                GROUP</small> | Nov
                            12 ,2022</p>
                        <p class="card-text"
                            style=" font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #6D6E76;">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
                <div class="card rounded-0 border-0 mb-3" style="width: 400px; background: #F4F4F4;">
                    <div class="card-body">
                        <p class="card-text">BY <small class="" style="color: #592EA9">AFIFA
                                GROUP</small> | Nov
                            12 ,2022</p>
                        <p class="card-text"
                            style=" font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; color: #6D6E76;">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir section --}}

    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="rectangle"></div>
                <div class="rectangle1"></div>
            </div>
            <div class="back">
                <div class="row">
                    <div class="col-md-6">
                        <div class="px-5 m-5 p-5 mt-5">
                            <h4 class="fs-4"
                                style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 16px; line-height: 20px;">
                                ABOUT US</h4>
                            <h2 class="mt-3"
                                style="font-family: 'Sen'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 48px; letter-spacing: -2px;color: #232536;">
                                We
                                are a community of content writers who share their
                                learnings</h2>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora provident dolorem nulla
                                in sunt. Error modi minus nulla ad quam.</p>

                            <button type="submit" class="border-0 rounded-0 background-transparant"
                                style="font-family: 'Sen'; font-style: normal; display: flex; align-items: center; color: #592EA9;">Readme
                                ></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="px-5 m-5 p-5 mt-5">
                            <h4 class="fs-4"
                                style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 16px; line-height: 20px;">
                                Our mision</h4>
                            <h3 class="mt-3"
                                style="font-family: 'Sen'; font-style: normal; font-weight: 700; font-size: 28px; line-height: 40px; letter-spacing: -1px; color: #232536;">
                                Creating valuable content for creatives all around the
                                world</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore nobis mollitia ipsa
                                nisi, laborum ullam sequi aut ipsum velit laboriosam?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bagian manda --}}
    <div class="container p-5 text-white" style="margin-top:750px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-3" style="color: #232536;">List Of Authors</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md me-3" style="width: 296px; height: 324px; background: #F4F4F4;">
                    <img src="{{ asset('gambar/fata.jpg') }}" class="mx-auto d-block mt-3 border rounded-circle"
                        alt="">
                    <h3 class="text-dark text-center mt-3">Akramul Fata</h3>
                    <p class="fs-6 mt-1 text-center text-secondary">Content Writer @Company</p>
                    <div class="mt-2 text-center">
                        <i class="bi bi-whatsapp text-dark me-2"></i>
                        <i class="bi bi-instagram text-dark me-2"></i>
                        <i class="bi bi-twitter text-dark me-2"></i>
                        <i class="bi bi-linkedin text-dark me-2"></i>
                    </div>
                </div>
                <div class="col-md me-3" style="width: 296px; height: 324px; background: #FBF6EA;">
                    <img src="{{ asset('gambar/aidil.png') }}" class="mx-auto d-block mt-3 border rounded-circle"
                        alt="">
                    <h3 class="text-dark text-center mt-3">Aidil Fitrah</h3>
                    <p class="fs-6 mt-1 text-center text-secondary">Content Writer @Company</p>
                    <div class="mt-2 text-center">
                        <i class="bi bi-whatsapp text-dark me-2"></i>
                        <i class="bi bi-instagram text-dark me-2"></i>
                        <i class="bi bi-twitter text-dark me-2"></i>
                        <i class="bi bi-linkedin text-dark me-2"></i>
                    </div>
                </div>
                <div class="col-md me-3" style="width: 296px; height: 324px; background: #F4F4F4;">
                    <img src="{{ asset('gambar/manda.png') }}" class="mx-auto d-block mt-3 border rounded-circle"
                        alt="">
                    <h3 class="text-dark text-center mt-3">Amanda Fauza</h3>
                    <p class="fs-6 mt-1 text-center text-secondary">Content Writer @Company</p>
                    <div class="mt-2 text-center">
                        <i class="bi bi-whatsapp text-dark me-2"></i>
                        <i class="bi bi-instagram text-dark me-2"></i>
                        <i class="bi bi-twitter text-dark me-2"></i>
                        <i class="bi bi-linkedin text-dark me-2"></i>
                    </div>
                </div>
                <div class="col-md" style="width: 296px;height: 324px; background: #F4F4F4;">
                    <img src="{{ asset('gambar/fika.png') }}" class=" mx-auto d-block mt-3 border rounded-circle"
                        alt="">
                    <h3 class="text-dark text-center mt-3">Fika Adillah</h3>
                    <p class="fs-6 mt-1 text-center text-secondary">Content Writer @Company</p>
                    <div class="mt-2 text-center">
                        <i class="bi bi-whatsapp text-dark me-2"></i>
                        <i class="bi bi-instagram text-dark me-2"></i>
                        <i class="bi bi-twitter text-dark me-2"></i>
                        <i class="bi bi-linkedin text-dark me-2"></i>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md">
                    <img src="{{ asset('gambar/Logo1.png') }}" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md ">
                    <img src="{{ asset('gambar/Logo2.png') }}" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md ">
                    <img src="{{ asset('gambar/Logo3.png') }}" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md ">
                    <img src="{{ asset('gambar/Logo4.png') }}" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md ">
                    <img src="{{ asset('gambar/Logo5.png') }}" class="mx-auto d-block" alt="">
                </div>
            </div>

            <div class="row mt-5" style="background: #FBF6EA; height: 464px;">
                <div class="col-md-6">
                    <div class="px-5 m-5 p-5 mt-5">
                        <h5 class="fs-3 text-dark mb-1"
                            style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 16px; line-height: 20px;">
                            TESTIMONIALs</h5>
                        <h2 class="mt-2"
                            style="font-family: 'Sen'; font-style: normal; font-weight: 700;font-size: 36px; line-height: 48px; letter-spacing: -2px; color: #232536;">
                            What people say about our blog</h2>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="px-5 m-1 p-5 mt-5">
                        <h2
                            style="font-family: 'Sen'; font-style: normal; font-weight: 700; font-size: 24px; line-height: 32px; color: #232536;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</h2>

                        <div class="mt-5">
                            <a href="" class="text-decoration-none text-secondary font-weight ">
                                <img src="{{ asset('gambar/Profilepicture.png') }}" class="" alt="">
                                Akramul Fata
                                Web Developer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end bagian manda --}}


    {{-- bagian aidil --}}
    <div class="container p-5 text-white">
        <div class="row">
            <div class="col-md-12">
                <h2
                    style="font-family: 'Sen'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 48px;text-align: center; letter-spacing: -2px; color: #232536;">
                    Join our team to be a part <br> of our story</h2>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 ">
                <p class="text-center"
                    style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 28px; text-align: center; color: #6D6E76;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    <br> br do eiusmod
                    tempor incididunt.
                </p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-warning rounded-0"
                    style="color: #232536;font-family: 'Sen'; font-style: normal; font-weight: 700;font-size: 18px; line-height: 24px;">join
                    now</button>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background: #232536; height: 570px;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand text-white" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact As</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        {{-- <div class="container mt-5 mb-5"
            style="width: 1280px; height: 256px; left: 80px; top: 144px; background: #FFFFFF;opacity: 0.1;">
            <div class="col-md-6">
                <h2 class="text-danger">
                    Subscribe to our news letter to get latest updates and news</h2>
            </div>
        </div> --}}
        <div class="container mt-5 mb-5">
            <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2); height: 350px;">
                <div class="row justify-content-center">
                    <div class="col-md-5 mt-5 mb-5">
                        <h2>Subscribe to our news letter to get latest
                            updates and news</h2>
                    </div>
                    <div class="col-md-5 mt-5 mb-5">
                        <label for="exampleDataList" class="form-label">Search</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col align-self-start pe-5">
                    Finstreet 118 2561 Fintown
                    <br>
                    Hello@finsweet.com 020 7993 2905
                </div>
                <div class="col align-self-end">
                    <i class="bi bi-whatsapp text-white me-2"></i>
                    <i class="bi bi-instagram text-white me-2"></i>
                    <i class="bi bi-twitter text-white me-2"></i>
                    <i class="bi bi-linkedin text-white me-2"></i>
                </div>
            </div>
        </div>
    </footer>
    {{-- end bagian aidil --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
