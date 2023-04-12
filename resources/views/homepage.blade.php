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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="/product">Product</a>
          <a class="nav-link" href="/owner">Owners</a>
          <a class="nav-link me-5" href="/aboutus">About</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Sign Up</a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text">
            <p>Make your body full of fragrance with a higher level of anxiety</p>
            <div class="buttons">
              <a href="#" class="btn btn-primary">Order Now</a>
              <a href="/product" class="btn btn-outline-secondary ms-3">Preview Product</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/3.svg') }}" alt="hero-img" class="w-100" height="400">
        </div>
      </div>
    </div>
  </section>

  <!-- Setup Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Get started quickly without the hassle</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="items text-center">
        <div class="row">
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/cam.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Create Account</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/cam.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Create Account</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/cam.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Create Account</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Information Section -->
  <section class="information">
    <div class="container">
      <div class="row info-1">
        <!-- Text -->
        <div class="col-md-6">
          <div class="text-information">
            <h5>Get more customer for your business</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <!-- Image -->
        <div class="col-md-6">
          <img src="{{ asset('images/2.svg') }}" alt="img-1" class="w-100" height="300">
        </div>
      </div>
      <div class="row info-1">
        <!-- Image -->
        <div class="col-md-4">
          <img src="{{ asset('images/1.svg') }}" alt="img-1" class="w-100" height="400">
        </div>
        <!-- Text -->
        <div class="col-md-8">
          <div class="text-information">
            <h5>Get more customer for your business</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Setup Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Overview we have product</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="items text-center">
        <a href="/detailproduct" style="text-decoration: none;">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="300">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Create Account</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="300">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Create Account</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="300">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Create Account</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="300">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Create Account</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <div class="buttons2" style="float: right;">
          <a href="/product" class="btn btn-primary">See More</a>
        </div>
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