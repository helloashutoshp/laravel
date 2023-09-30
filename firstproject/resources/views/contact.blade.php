@include ('pages.header')
<section id="contact">

    <div class="contact">
      <div class="container">
        <div class="mb-5 text-center">
          <h5>Make a connection with us....</h5>
          <h2 class="fw-bold">Contact us</h2>

        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5">
              <h4 class="fw-bold">Contact Info</h4>
              <ul class="info list-unstyled">
                <li class="d-flex align-items-center">
                  <span class="pe-3 ti-location-pin fs-5"></span>
                  <p>Bhubaneswar,Khurda,Odisha,752054</p>
                </li>
                <li class="d-flex align-items-center">
                  <span class="pe-3 ti-mobile fs-5"></span>
                  <p>+91 9090245091</p>
                </li>
                <li class="d-flex align-items-center">
                  <span class="pe-3 ti-envelope fs-5"></span>
                  <p>@tnw.in</p>
                </li>
              </ul>
          </div>
          <div class="col-lg-7 col-md-7 pt-lg-0 pt-md-0 pt-4">
            <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <textarea type="text" class="form-control" name="message" cols="30" rows="4" id="msg" placeholder="Your message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-primary"><span class="ti-rocket pe-2 fs-5"></span>Send Message</button>
              </div>
            </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  @section('title')
      contact
  @endsection

@include('pages.footer')