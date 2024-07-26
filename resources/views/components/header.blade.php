 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          @foreach ($data_setting as $row)
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img style="width:4cm; height:1cm;" src="{{asset($row->logo_header)}}">
          </a>
          @endforeach
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="#services">Services</a></li>
            <li class="scroll-to-section"><a href="#about">About</a></li>
            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll-to-section"><a href="#video">Videos</a></li> 
            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
            <li class="scroll-to-section"><div class="main-red-button-hover"><a href="#contact">Contact Us Now</a></div></li> 
          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->