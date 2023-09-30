@include('pages.header')

<section id="testimonials" class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="headline text-center mb-5">
          <h2 class="pb-3 position-relative d-inline-block">Testimonials</h2>
        </div>
      </div>
      <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">

        <div id="carouselExampleIndicatorsTwo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators in">
            <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <img src="assets/images/user2.png" alt="" class="img-fluid">
                    </div>
                    <div class="username">
                      <h3>Ashutosh Pradhan,Founder/CEO</h3>
                      <span>THE NEXT WEB LTD.</span>
                      <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit cupiditate delectus molestias rem tempore recusandae magni quidem eligendi exercitationem in, animi itaque quod ut? Reiciendis consequuntur rem natus similique sequi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="carousel-item">
              <div class="testimonial-wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <img src="assets/images/user.png" alt="" class="img-fluid">
                    </div>
                    <div class="username">
                      <h3>Mousumi Pradhan,Co-founder</h3>
                      <span>THE NEXT WEB LTD.</span>
                      <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit cupiditate delectus molestias rem tempore recusandae magni quidem eligendi exercitationem in, animi itaque quod ut? Reiciendis consequuntur rem natus similique sequi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsTwo"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
              <span class="ti-angle-left slider-icon"></span>
            </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsTwo"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
              <span class="ti-angle-right slider-icon"></span>
    
            </span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

@section('title')
testimonial
@endsection
@include('pages.footer')
