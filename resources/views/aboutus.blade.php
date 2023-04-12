<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alluring Parfum</title>
    <link rel="shortcut icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Brand here -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-width: 40%; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="/homepage">Home</a>
                    <a class="nav-link" href="/product">Product</a>
                    <a class="nav-link" href="/owner">Owners</a>
                    <a class="nav-link active me-5" href="#">About</a>
                </div>
                <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Sign Up</a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-about">
        <div class="container-fluid">
            <section class="setup-about2">
                <div class="container">
                    <div class="text-header text-center">
                        <h3>About US</h3>
                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <p> Make your body full of fragrance with a anxiety Make your body full of fragrance with a
                            higher level of anxi fragrance with a higher level of anxiety</p>
                            <button type="button" class="btn btn-primary">Raed more</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/cuate.svg') }}" alt="hero-img" class="w-100" height="300">
                </div>
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section class="information">
        <div class="container-fluid">
            <div class="row info-1">
                <!-- Image -->
                <div class="col-md-4 pt-5">
                    <img src="{{ asset('images/amico.svg') }}" alt="img-1" class="w-100" height="400">
                </div>
                <!-- Text -->
                <div class="col-md-6">
                    <div class="text-information">
                        <h5>Get more customer for your business</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">making it look like readable English.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">PageMaker including versions</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">It has survived not only</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">consectetur adipiscing elit.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">as opposed to using 'Content here,</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('images/check.png') }}" height="25">
                                <span class="icon-text">typesetting, remaining essentially unchanged.</span>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="setup-about">
        <div class="container">
            <div class="text-header text-center">
                <h3>Get started quickly without the hassle</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum,</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row row cols-1 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="/homepage" class="text-decoration-none">Home</a>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="/product" class="text-decoration-none">Product</a>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="/owner" class="text-decoration-none">Owners</a>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="/aboutus" class="text-decoration-none">About</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    &copy; 2023 Alluring Parfum
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>