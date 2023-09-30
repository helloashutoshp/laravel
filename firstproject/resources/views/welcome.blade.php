{{-- <h1>our first page</h1>
    <a href="{{route('about')}}" class="hr">postpage</a> --}}

    {{-- {{3+4}}
    <br>
    {{"hello"}}
    <br>
    {!!"<h1>hi</h1>"!!}

    {!!"<script>alert('hello')</script>"!!}


    @php
       $user = ['movies','song','web series'];
        $value="";
    @endphp

    <ul>
        @foreach ($user as $u )
           <li style="color:red">{{$u}}</li> 
        @endforeach
    </ul>

    @includeWhen(empty($value), 'sub') --}}
    @include('pages.header')


<body>
 

  <section id="home" class="home overflow-hidden" style="margin-top:60px">
    <h1>{{$id}}</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators in">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="home-banner home-banner-1">
            <div class="home-banner-text-1">
              <h1>Women</h1>
              <h2>52% Discount For this Season</h2>
              <a href="#" class="btn btn-outline-dark text-uppercase mt-4">Our Products</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="home-banner home-banner-2">
            <div class="home-banner-text-2">
              <h1>E-Shop</h1>
              <h2>With Working CART & Paypal</h2>
              <a href="#" class="btn btn-outline-danger text-uppercase mt-4">Our Products</a>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
          <span class="ti-angle-left slider-icon"></span>
        </span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
          <span class="ti-angle-right slider-icon"></span>

        </span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="offers mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
            <a href="#">
              <div class="offer-box text-center position-relative">
                <div class="offer-inner">
                  <div class="offer-image position-relative overflow-hidden">
                    <img src="assets/images/offer1.jpg" alt="Offers" class="img-fluid">
                    <div class="offer-overlay"></div>
                  </div>
                  <div class="offer-info">
                    <div class="offer-info-inner">
                      <p class="heading-bigger text-capitalize">Sale 30%</p>
                      <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Case</p>
                      <button type="button" class="btn btn-outline-warning text-uppercase mt-4">Shop Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-between">
            <a href="#">
              <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
                <div class="offer-inner">
                  <div class="offer-image position-relative overflow-hidden">
                    <img src="assets/images/offer2.jpg" alt="Offers" class="img-fluid">
                    <div class="offer-overlay"></div>
                  </div>
                  <div class="offer-info">
                    <div class="offer-info-inner">
                      <p class="heading-bigger text-capitalize">Sale 80%</p>
                      <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Case</p>
                      <button type="button" class="btn btn-outline-warning  text-uppercase mt-4">Shop Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="offer-box text-center position-relative">
                <div class="offer-inner">
                  <div class="offer-image position-relative overflow-hidden">
                    <img src="assets/images/offer3.jpg" alt="Offers" class="img-fluid">
                    <div class="offer-overlay"></div>
                  </div>
                  <div class="offer-info">
                    <div class="offer-info-inner">
                      <p class="heading-bigger text-capitalize">Sale 40%</p>
                      <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Case</p>
                      <button type="button" class="btn btn-outline-warning text-uppercase mt-4">Shop Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            
          </div>
          <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
            <a href="#">
              <div class="offer-box text-center position-relative">
                <div class="offer-inner">
                  <div class="offer-image position-relative overflow-hidden">
                    <img src="assets/images/offer4.jpg" alt="Offers" class="img-fluid">
                    <div class="offer-overlay"></div>
                  </div>
                  <div class="offer-info">
                    <div class="offer-info-inner">
                      <p class="heading-bigger text-capitalize">Sale 70%</p>
                      <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Case</p>
                      <button type="button" class="btn btn-outline-warning text-uppercase mt-4">Shop Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>






  </section>


 

  

  

  

  @include('pages.footer')
