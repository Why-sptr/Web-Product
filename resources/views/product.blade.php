<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alluring Parfum</title>
  <link rel="shortcut icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" aria-current="page" href="/homepage">Home</a>
          <a class="nav-link active" href="/product">Product</a>
          <a class="nav-link" href="/owner">Owners</a>
          <a class="nav-link me-5" href="/aboutus">About</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Sign Up</a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <form class="d-flex" role="search" style="max-width: 500px; height: 50px; margin-left: 50px; ">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </form>
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
            <div class="col-md-3 pb-5">
              <div class="card">
                <div class="product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="300">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Alluring Parfum V1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 pb-5">
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
            <div class="col-md-3 pb-5">
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
            <div class="col-md-3 pb-5">
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
            <div class="col-md-3 pb-5">
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
            <div class="col-md-3 pb-5">
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
            <div class="col-md-3 pb-5">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>