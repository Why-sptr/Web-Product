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
          <a class="nav-link active" href="/owner">Owners</a>
          <a class="nav-link me-5" href="/aboutus">About</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Sign Up</a>
      </div>
    </div>
  </nav>

  <!-- Setup Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Team Work</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="items text-center">
        <div class="row">
          <div class="col-md-3">
            <div class="card-owner" data-bs-toggle="modal" data-bs-target="#putriModal">
              <div class="product">
                <img src="{{ asset('images/frame 3.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Putri</h5>
                <p class="card-owner-text">Product Analyst</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-owner" data-bs-toggle="modal" data-bs-target="#sitiModal">
              <div class="product">
                <img src="{{ asset('images/frame 5.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Siti</h5>
                <p class="card-owner-text">UI/UX Designer</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-owner" data-bs-toggle="modal" data-bs-target="#maemunahModal">
              <div class="product">
                <img src="{{ asset('images/frame 4.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Maemunah</h5>
                <p class="card-owner-text">Frontend Developer</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-owner" data-bs-toggle="modal" data-bs-target="#ceunahModal">
              <div class="product">
                <img src="{{ asset('images/frame 6.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Ceunah</h5>
                <p class="card-owner-text">Backend Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Putri Modal -->
  <div class="modal fade" id="putriModal" tabindex="-1" aria-labelledby="putriModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="putriModalLabel">Putri Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Putri's modal content goes here.</p>
          <div class="modalputri">
            <img src="{{ asset('images/frame 3.png') }}" alt="product" class="w-100" style="border-radius: 10px;">
          </div>
          <div class="card-owner-body mt-5">
            <h5 class="card-owner-title">Putri</h5>
            <p class="card-owner-text">Product Analyst</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Siti Modal -->
  <div class="modal fade" id="sitiModal" tabindex="-1" aria-labelledby="sitiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sitiModalLabel">Siti Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Siti's modal content goes here.</p>
          <div class="modalsiti">
            <img src="{{ asset('images/frame 5.png') }}" alt="product" class="w-100" style="border-radius: 10px;">
          </div>
          <div class="card-owner-body mt-5">
            <h5 class="card-owner-title">Siti</h5>
            <p class="card-owner-text">UI/UX Designer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Maemunah Modal -->
   <div class="modal fade" id="maemunahModal" tabindex="-1" aria-labelledby="maemunahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="maemunahModalLabel">Maemunah Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Maemunah's modal content goes here.</p>
          <div class="modalmaemunah">
            <img src="{{ asset('images/frame 4.png') }}" alt="product" class="w-100" style="border-radius: 10px;">
          </div>
          <div class="card-owner-body mt-5">
            <h5 class="card-owner-title">Maemunah</h5>
            <p class="card-owner-text">Frontend Developer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
     <!-- Ceunah Modal -->
     <div class="modal fade" id="ceunahModal" tabindex="-1" aria-labelledby="ceunahModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ceunahModalLabel">Ceunah Modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ceunah's modal content goes here.</p>
            <div class="modalmaemunah">
              <img src="{{ asset('images/frame 6.png') }}" alt="product" class="w-100" style="border-radius: 10px;">
            </div>
            <div class="card-owner-body mt-5">
              <h5 class="card-owner-title">Ceunah</h5>
              <p class="card-owner-text">Backend Developer</p>
            </div>
          </div>
        </div>
      </div>
    </div>

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