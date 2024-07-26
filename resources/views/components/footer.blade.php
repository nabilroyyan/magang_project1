@foreach ($data_setting as $row)       
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <h2>Feel free to <em>Contact</em> us via the <span>HTML form</span></h2>
            <div id="map">
                <iframe src="{{asset($row->maps)}}" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
                <span><i class="fa fa-phone"></i>{{$row->hp}}<a href="#"><br>{{$row->hp}}</a></span>
                <span><i class="fa fa-envelope"></i> <a href="#">{{$row->email}}<br>{{$row->email}}</a></span>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-lg-5 align-self-center">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      <img src="{{asset('/public/images/contact-dec.png')}}" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="{{asset('/public/images/contact-left-dec.png')}}" alt="">
    </div>
  </div>

<div class="footer-dec">
    <img src="{{asset('/public/images/footer-dec.png')}}" alt="">
  </div>

  <footer>
    @foreach ($data_setting as $row)
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="{{asset('/public/images/logo.png')}}" alt="Onix Digital TemplateMo"></a>
            </div>
            <a href="#">{{$row->email}}</a>
            <ul>
              <li><a href="{{$row->fb}}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{$row->twitter}}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{$row->be}}"><i class="fa fa-behance"></i></a></li>
              <li><a href="{{$row->instagram}}"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Services</h4>
            <ul>
              <li><a href="#">SEO Development</a></li>
              <li><a href="#">Business Growth</a></li>
              <li><a href="#">Social Media Managment</a></li>
              <li><a href="#">Website Optimization</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Community</h4>
            <ul>
              <li><a href="#">Digital Marketing</a></li>
              <li><a href="#">Business Ideas</a></li>
              <li><a href="#">Website Checkup</a></li>
              <li><a href="#">Page Speed Test</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Subscribe Newsletters</h4>
            <p>Get our latest news and ideas to your inbox</p>
            <form action="#" method="get">
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>{{$row->copy_right}}
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </footer>

 <!-- Scripts -->
 <script src="{{asset('public/js/jquery.min.js')}}"></script>
 <script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('public/js/owl-carousel.js')}}"></script>
 <script src="{{asset('public/js/animation.js')}}"></script>
 <script src="{{asset('public/js/imagesloaded.js')}}"></script>
 <script src="{{asset('public/js/custom.js')}}"></script>

 <script>
 // Acc
   $(document).on("click", ".naccs .menu div", function() {
     var numberIndex = $(this).index();

     if (!$(this).is("active")) {
         $(".naccs .menu div").removeClass("active");
         $(".naccs ul li").removeClass("active");

         $(this).addClass("active");
         $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

         var listItemHeight = $(".naccs ul")
           .find("li:eq(" + numberIndex + ")")
           .innerHeight();
         $(".naccs ul").height(listItemHeight + "px");
       }
   });
 </script>