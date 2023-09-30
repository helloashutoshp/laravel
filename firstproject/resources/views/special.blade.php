@include('pages.header')
<section class="special" id="special">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="headline text-center mb-5">
            <h2 class="pb-3 position-relative d-inline-block">WINTER SALE</h2>
          </div>
        </div>

        <div class="col-sm-12 col-lg-7 text-center text-lg-start">
          <div class="countdown-container">
            <h2>Women Floral Embroidery</h2>
            <p class="my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minus aliquid perferendis, eum, voluptatum
              animi totam laudantium a doloremque quo voluptate? Totam atque neque magnam esse animi. Totam, veritatis
              eos?
            </p>
            <ul class="list-unstyled countdown-counter">
              <li><span class="fs-1 d-block" id="days">00</span>Days</li>
              <li><span class="fs-1 d-block" id="hours">00</span>Hr</li>
              <li><span class="fs-1 d-block" id="min">00</span>Min</li>
              <li><span class="fs-1 d-block" id="sec">00</span>Sec</li>

            </ul>
            <span class="countdown-price h3 d-block mb-4">$420.00 <del>$670.00</del></span>
            <button type="button" class="btn btn-outline-danger">ADD TO CART</button>
          </div>
        </div>

        <div class="col-sm-12 col-lg-5">
          <a href="img2.html" class="hr">
          <div class="special-img position-relative image">
            <span class="sale">SALE</span>
            <img src="assets/images/p7.jpg" class="img-fluid " alt="">
          </div>
        </a>
        </div>
      </div>
    </div>
  </section>\

  

  @section('title')
      special
  @endsection
@include('pages.footer')