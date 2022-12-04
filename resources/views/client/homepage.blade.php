@extends('layouts.template')
@section('content')

<!-- Banner Starts Here -->
<div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="header-text caption">
            <h2>Suistanable Incame Project</h2>
            <div id="search-section">
                {{-- <form id="suggestion_form" name="gs" method="get" action="#"> --}}
              {{-- <div class="searchText">

                <input type="text" name="q" class="searchText" placeholder="Enter your domain here..." autocomplete="on">
                <ul>
                  <li><label><input type="checkbox" name="ext_com" value="1"><span>.com <em>($10/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_net" value="1"><span>.net <em>($12/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_org" value="1"><span>.org <em>($8/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_in" value="1"><span>.in <em>($6/yr)</em></span></label></li>
                </ul>
              </div> --}}
                  {{-- <input type="submit" name="results" class="main-button" value="Search Now"> --}}
               {{-- </form> --}}
             <div class="advSearch_chkbox">
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- Banner Ends Here -->

   <!-- About Us Starts Here -->
   <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="{{asset('template/assets/images/our-team.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Suistainable Income Project</span>
                <h2>Tentang Kami</h2>
                <p>{{$about->deskripsi}}</p>
              </div>
              {{-- <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>Our History</a></li>
                    <li><a href='#tabs-2'>Our Cloud</a></li>
                    <li><a href='#tabs-3'>Our Network</a></li>
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <p>Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada a, commodo vitae lectus. Integer volutpat sapien in arcu fringilla, ac eleifend est facilisis.
                      <br><br>Phasellus finibus lacus eu scelerisque rutrum. Duis purus eros, blandit ultricies iaculis in, commodo quis lacus. Pellentesque interdum varius enim nec accumsan.</p>
                    </article>
                    <article id='tabs-2'>
                      <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat.
                      <br><br>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex pharetra, vitae tincidunt dolor condimentum. Cras vel mattis risus.</p>
                    </article>
                    <article id='tabs-3'>
                      <p>Fusce in semper velit, at tempus augue. Morbi quis auctor ipsum, ut accumsan neque. Vivamus dapibus ipsum placerat ante commodo, eget suscipit tortor hendrerit. Quisque lacinia sed velit et maximus.
                      <br><br>Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus. Vestibulum et lorem non erat efficitur iaculis ut nec nibh. Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui.</p>
                    </article>
                  </section>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us Ends Here -->

     <!-- Team Starts Here -->
  <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <span>Our Team</span>
              <h2>Meet the greatest people</h2>
              <p>Integer blandit, tellus varius vulputate cursus, purus orci tincidunt tortor, eget tincidunt elit justo non leo. Donec mollis nulla id est suscipit, ut laoreet nibh faucibus.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="{{asset('template/assets/images/team-01.jpg')}}" alt="">
              <div class="down-content">
                <h4>Jonathan Smart</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="{{asset('template/assets/images/team-02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Mary Morris</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="{{asset('template/assets/images/team-03.jpg')}}" alt="">
              <div class="down-content">
                <h4>George White</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team Ends Here -->



  <!-- Trusted Starts Here -->
  <div class="trusted-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="trusted-section-heading">
            <h4>Telah Dipercaya  1,250+ member</h4>
          </div>
        </div>
        {{-- <div class="col-md-12">
          <div class="owl-trusted owl-carousel">
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 1">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 2">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 3">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 4">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 5">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 6">
            </div>
            <div class="trusted-item">
              <img src="{{asset('template/assets/images/trusted-01.png')}}" alt="trusted 7">
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Trusted Ends Here -->


  <!-- Services Starts Here -->
  <div class="services-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <span>Informasi</span>
            <h2>Seputar Suistanable Project</h2>
            <p>Host Cloud is a professional Bootstrap 4 template by TemplateMo for your hosting company websites. There are 4 HTML pages included in this template. You can feel free to customize anything. Please share this template to your friends. Thank you.</p>
          </div>
           <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>Pengumuman</a></li>
                    <li><a href='#tabs-2'>Berita</a></li>
                    <li><a href='#tabs-3'>Event</a></li>
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <p>Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada a, commodo vitae lectus. Integer volutpat sapien in arcu fringilla, ac eleifend est facilisis.
                      <br><br>Phasellus finibus lacus eu scelerisque rutrum. Duis purus eros, blandit ultricies iaculis in, commodo quis lacus. Pellentesque interdum varius enim nec accumsan.</p>
                    </article>
                    <article id='tabs-2'>
                      <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat.
                      <br><br>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex pharetra, vitae tincidunt dolor condimentum. Cras vel mattis risus.</p>
                    </article>
                    <article id='tabs-3'>
                      <p>Fusce in semper velit, at tempus augue. Morbi quis auctor ipsum, ut accumsan neque. Vivamus dapibus ipsum placerat ante commodo, eget suscipit tortor hendrerit. Quisque lacinia sed velit et maximus.
                      <br><br>Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus. Vestibulum et lorem non erat efficitur iaculis ut nec nibh. Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui.</p>
                    </article>
                  </section>
              </div>
        </div>
        {{-- <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="service-item">
            <i class="fa fa-database"></i>
            <h4>10x Light Cloud</h4>
            <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="service-item">
            <i class="fa fa-database"></i>
            <h4>Managed VPS Cloud</h4>
            <p>You are not allowed to re-distribute this template as a downloadable ZIP file on any template collection website. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact us</a> if you want to.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="service-item">
            <i class="fa fa-database"></i>
            <h4>Fully Dedicated</h4>
            <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Services Ends Here -->


  <!-- Pricing Starts Here -->
  <div class="pricing-section">
    <div class="background-image-pricing">
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <div class="section-heading">
            <h2>Investment Funds</h2>
            <p>Lorem ipsum dolor amet taxidermy sriracha cardigan salvia actually vice migas enamel pin sustainable carry scenester lomo hot chicken farm table actually kinfolk.</p>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pricing-item">
            <h4>Saldo Kelola</h4>
            <div class="price">
              <h5 class="text-white font-weight-bold text-wrap">Rp. 1.000.000.000.000</h5>
              <span>monthly</span>
            </div>
            <p>Etiam sit amet placerat lacus, sed placerat mauris. Vestibulum malesuada vehicula sapien non tempus.</p>
            <div class="dev"></div>
            {{-- <ul>
              <li><i class="fa fa-check"></i>500 GB Storage Space</li>
              <li><i class="fa fa-check"></i>3 TB Data Transfer</li>
              <li><i class="fa fa-check"></i>Basic Managed Panel</li>
              <li><i class="fa fa-check"></i>24/7 Fast Support</li>
              <li><i class="fa fa-check"></i>100 Premium Themes</li>
              <li><i class="fa fa-check"></i>Cancel or Upgrade Anytime</li>
            </ul> --}}
            <a href="#" class="main-button">Detail</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pricing-item">
            <h4>Saldo Reward</h4>
            <div class="price price-gradient">
              <h5 class="text-white font-weight-bold text-wrap">Rp. 1.000.000.000.000</h5>
              <span>monthly</span>
            </div>
            <p>Etiam sit amet placerat lacus, sed placerat mauris. Vestibulum malesuada vehicula sapien non tempus.</p>
            <div class="dev"></div>
            {{-- <ul>
              <li><i class="fa fa-check"></i>1 TB Cloud Space</li>
              <li><i class="fa fa-check"></i>8 TB Data Transfer</li>
              <li><i class="fa fa-check"></i>Fully Managed Panel</li>
              <li><i class="fa fa-check"></i>15-minute Quick Support</li>
              <li><i class="fa fa-check"></i>Unlimted Web Addons</li>
              <li><i class="fa fa-check"></i>Cancel or Upgrade Anytime</li>
            </ul> --}}
            <a href="#" class="gradient-button">Detail</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Pricing Ends Here -->


  <!-- Features Starts Here -->
  <div class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <span>Why Suistainable Income Project?</span>
            <h2>SIP Features</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-item">
            <div class="icon">
              <img src="{{asset('template/assets/images/feature-01.png')}}" alt="">
            </div>
            <h4>Amanah</h4>
            <p>Nulla nisl ex, vehicula in urna nec, commodo consectetur augue. Vivamus nec metus mauris. Praesent lacinia tempus urna.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-item">
            <div class="icon">
              <img src="{{asset('template/assets/images/feature-01.png')}}" alt="">
            </div>
            <h4>Transaparan</h4>
            <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-item">
            <div class="icon">
              <img src="{{asset('template/assets/images/feature-01.png')}}" alt="">
            </div>
            <h4>Trader Berpengalaman</h4>
            <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-item">
            <div class="icon">
              <img src="{{asset('template/assets/images/feature-01.png')}}" alt="">
            </div>
            <h4>Responsibility</h4>
            <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Features Ends Here -->


  <!-- Testimonials Starts Here -->
  <div class="testimonials-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <span>Testimonials</span>
            <h2>Apa Kata Mereka?</h2>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <div class="owl-testimonials owl-carousel">
            <div class="testimonial-item">
              <div class="avatar mx-auto bg-white">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                    class="rounded-circle img-fluid" />
                </div>

              <p>"Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada."</p>
              <h4>William Smith</h4>
              {{-- <span>New Co-Founder</span> --}}
            </div>
            <div class="testimonial-item">
              <div class="avatar mx-auto bg-white">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                    class="rounded-circle img-fluid" />
                </div>

              <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
              <h4>Vinny Smart</h4>
              {{-- <span>Digital Marketer</span> --}}
            </div>
            <div class="testimonial-item">
              <div class="avatar mx-auto bg-white">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                    class="rounded-circle img-fluid" />
                </div>

              <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
              <h4>Trevor Liam</h4>
              {{-- <span>Technology Chef</span> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonials Ends Here -->

@endsection
