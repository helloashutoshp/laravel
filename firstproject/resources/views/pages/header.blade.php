
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="assets/css/style.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
<section id="header">
  <nav class="navbar navbar-expand-lg  bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/tnw.png" class="img-fluid" width="90px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-justify navbar-toggler-icon"></span>
        <!-- <span class="navbar-toggler-icon"></span> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/special">Special</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/testimonials">Testimonials</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</section>
