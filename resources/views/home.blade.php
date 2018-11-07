@extends ('layouts.master')
@section ('head.title')
  Home
@stop
@section ('body.content')
  <main role="main">
    <div>
      <div class="img" style="">
        <video id="video" preload="auto" autoplay="true" loop="loop" muted="muted">
          <source src="/video/videotamdao.mp4" type="video/mp4">
        </video>
          <header role="banner" class="position-absolute">    
          <!-- Top Navigation -->
          <nav class="background-transparent background-primary-dott full-width sticky">          
            <div class="top-nav"> 
              <!-- mobile version logo -->                              
              <p class="nav-text"></p>
              
              <!-- left menu items -->
              <div class="top-nav left-menu">
                 <ul class="right top-ul chevron">
                    <li><a href="\" style="color: #000000;">Home</a></li>
                    <li><a href="#tourtamdao" style="color: #000000;">Tour Tam Dao</a></li>

                    <li><a href="#thingtodo" style="color: #000000;">Thing to do...</a></li>
                 </ul>
              </div>
              
              <!-- logo -->
              <ul class="logo-menu">
                <a href="\" class="logo">
                  <!-- Logo White Version -->
                  <img class="logo-white" src="img/logo-dark.svg" alt="">
                  <!-- Logo Dark Version -->
                  <img class="logo-dark" src="img/logo-dark.svg" alt="">
                </a>
              </ul>
              
              <!-- right menu items -->
              <div class="top-nav right-menu">
                 <ul class="top-ul chevron">
                    <li><a href="#pricing" style="color: #000000;">Booking</a></li>
                    <li><a href="#reviews" style="color: #000000;">Reviews</a></li>

                    <li><a href="#contact" style="color: #000000;">Contact</a></li>

                 </ul> 
              </div>
            </div>
          </nav>
        </header>
      </div>
    </div>
  <div>
    <section class="section background-white" id="tourtamdao">      
      <div class="line text-center">
        <h2 class="text-dark text-size-50 text-m-size-40">VN Surfing <b>Tour Tam Dao </b></h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div> 
      <div class="container">
        <div class="row">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/img/tamdaobg.jpg" style="height: 400px; border-radius: 10px;">
                  <div class="carousel-caption d-none d-md-block" style="background:rgba(0.1, 0.1, 0.1, 0.5); border-radius: 20px;">
                    <h3 style="color: white;">Tam Dao</h3>
                    <p style="color: white; font-size: 20px;">Three island</p>
                  </div>
                </div>
                @foreach ($images as $i)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ $i->img }}" style="height: 400px; border-radius: 10px;">
                  <div class="carousel-caption d-none d-md-block" style="background:rgba(0.1, 0.1, 0.1, 0.5); border-radius: 20px;">
                    <h3 style="color: white;">{{ $i->name }}</h3>
                    <p style="color: white; font-size: 20px;">{{ $i->caption }}</p>
                  </div>
                </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background: rgba(0,0,0,0);"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background: rgba(0,0,0,0);"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col" style="overflow-y: scroll; height: 400px;">
            <h1>Always <b>Nearby</b></h1>
            <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section class="section-top-padding background-white" style="padding-top: 100px; padding-bottom: 50px;" id="thingtodo">
      <div class="line text-center">
        <h2 class="text-dark text-size-50 text-m-size-40">Thing To Do At <b>Surfing Tour Tam Dao </b></h2>
        <br>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div>
      <div class="line">
        <div class="margin2x">
          @foreach($articles as $a)
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20"> {{ $a->name }}</h3>
              <img src="{{ $a->img }}" class="rounded float-left" alt="..." style="width: 350px; height: 222px;">
              <p> {{ $a->caption }}. ...<a class="btn" data-toggle="modal" data-target="#myModal{{ $a->id }}" style="color: skyblue;"> read more </a></p>
                                           
            </div>
          </div>
                  <div class="modal" id="myModal{{ $a->id }}">
                    <div style="padding-bottom: 50px;">
                      <button type="button" class="close" data-dismiss="modal" style="color: #ffffff; font-size: 2.0rem;opacity: 1; padding-right: 20px;">&times;</button>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="container" style="background-color: #ffffff; border-radius: 10px;">
                          <div class="row">
                            <img src="{{ $a->img}}" alt="" style="width: 70%;height: 400px; top: 0;margin-left:15%; border-radius: 10px 10px 10px 10px; margin-top: 100px;">
                          </div>
                          <div class="row">
                            <div class="line text-center" style="margin-top: 20px;">
                              <h2 class="text-dark text-size-40 text-m-size-30"> <b>{{ $a->name }}</b></h2>
                              <br>
                              <p>Contact us: whatsaap: 0931688883. or Fanpage: Surfing Tour Tam Dao-Viet Nam.</p>
                              <hr class="break background-primary break-small break-center margin-bottom-50">
                            </div>
                            <div class="line" style="margin-right: 100px;margin-left: 100px; margin-bottom: 50px;">
                              <p style="color: #000000;">
                                {{ $a->content }}
                              </p>
                              <br><br><br><br>
                              <button class="btn btn-primary" data-dismiss="modal" type="button" style="margin-left: 45%" >Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
          @endforeach
        </div>
        <div style="padding-top: 25px; padding-bottom: 25px;">
          <button type="button" class="btn btn-danger" style="margin-left: 45%;" data-toggle="modal" data-target="#myModal">> <b>Check It Out</b></button>
        
                  <div class="modal" id="myModal">
                    <div style="padding-bottom: 120px;">
                      <button type="button" class="close" data-dismiss="modal" style="color: #ffffff; font-size: 2.0rem;opacity: 1; padding-right: 20px;">&times;</button>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6" style="background-color: #ffffff; padding-bottom: 20px; padding-top: 20px;">
                            <form action="{{ route('pages.store') }}" method="POST">
                              {{ csrf_field() }}
                              <div class="container">
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">NAME</label>
                                    <input type="text" class="form-control" required name="name" id="name">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">PHONE NUMBER (WHATSAPP)</label>
                                    <input type="number" class="form-control" required name="phone" id="phone">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">GMAIL</label>
                                    <input type="gmail" class="form-control" required name="gmail" id="gmail">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">NATIONALITY</label>
                                    <input type="text" class="form-control" required name="country" id="country">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">DATE</label>
                                    <input type="date" class="form-control"  required name="date" id="date">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0 form-check-inline">
                                    <label class="form-check-label" style="color: #000000;font-family: Arial;font-size: 16px;"><input type="radio" class="form-check-input" value="1" name="option">  IN THE WEEK</label>
                                  </div>
                                  <div class="col large pb-0 form-check-inline">
                                    <label class="form-check-label" style="color: #000000;font-family: Arial;font-size: 16px;"><input type="radio" class="form-check-input" value="2" checked="check" name="option">  WEEKEND</label>
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">ADULTS</label>
                                    <input type="number" class="form-control" name="adults" required id="adults">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">CHILDREN</label>
                                    <input type="number" class="form-control" name="children" required id="children">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-danger" style="margin-left: 40%;">
                                    BOOKING NOW
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
        </div>
      </div>
      <hr>
    </section>
        <!-- Bảng khoá học -->
        <div id="pricing" class="container-fluid" style="padding-top: 100px;">
            <div class="text-center">
              <h3 class="text-dark text-size-45 text-m-size-45" style="font-family: Arial; font-size: 40px;">BOOK YOUR EXPERIENCES </h3>
              <h3 class="text-dark text-size-45 text-m-size-45" style="font-family: Arial; font-size: 25px;">You can make a choice between these options </h3>
              <hr class="break background-primary break-small break-center margin-bottom-20">
            </div>
        <div class="container">
        <div class="row slideanim">
          <!-- Bảng Toán -->
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                  <div class="panel-heading" style="background-color: #f4511e;">
                    <span style="display: inline-block;"><img src="img/calculation.png" alt=""></span>
                    <h1 style="font-family: Arial;color: #ffffff;">In The Week</h1>
                  </div>
                  <div class="panel-body">
                      <ul style="list-style-type: none; padding-top: 20px;">
                          <li>
                            <div class="gia" style="width: 130px; height: 130px; background-color: #f4511e; border-radius: 50%; position: relative; padding: 0; margin-bottom: 50px; margin-left: auto;margin-right: auto;">
                              <div style="position: absolute; top: 40px; left: 30px;">
                              <h3 style="font-family: Arial; color: #ffffff; text-align: center; margin-bottom: 5px; font-size: 20px;"><b><strong>99 USD</strong></b></h3>
                              <p style="color: #ffffff;font-family: Arial; font-size: 18px;">/Person</p>
                              </div>
                            </div>
                          </li>
                          <span style="font-family: Arial;font-size: 18px;">
                             Lớp cơ bản: 
                          </span>
                          <p style="font-family: Arial;font-size: 18px;color: #000000;">Thứ 2 + Thứ 6 lúc 17h30</p>
                        </li>
                      </ul>
                      <ul style="list-style-type: none;">
                        <li>
                          <span style="font-family: Arial;font-size: 18px;">
                            Lớp nâng cao: 
                          </span>
                          <p style="font-family: Arial;font-size: 18px; color: #000000;">Thứ 2 + Thứ 6 lúc 19h30</p>
                        </li>
                      </ul>
                  </div>
                  <div class="panel-footer" style="padding-top: 30px;">
                      <h3 style="font-family: Arial; color: #000000;">69 000/1buổi</h3>
                      <button class="btn btn-lg" data-toggle="modal" data-target="#myModal1" >Book</button>
                  </div>
                </div>      
            </div>  
            <div class="modal" id="myModal1">
                    <div style="padding-bottom: 120px;">
                      <button type="button" class="close" data-dismiss="modal" style="color: #ffffff; font-size: 2.0rem;opacity: 1; padding-right: 20px;">&times;</button>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6" style="background-color: #ffffff; padding-bottom: 20px; padding-top: 20px;">
                            <form action="{{ route('pages.store') }}" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="container">
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">NAME</label>
                                    <input type="text" class="form-control" required name="name" id="name">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">PHONE NUMBER (WHATSAPP)</label>
                                    <input type="number" class="form-control" required name="phone" id="phone">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">GMAIL</label>
                                    <input type="gmail" class="form-control" required name="gmail" id="gmail">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">NATIONALITY</label>
                                    <input type="text" class="form-control" required name="country" id="country">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">DATE</label>
                                    <input type="date" class="form-control" required name="date" id="date">
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0 form-check-inline">
                                    <label class="form-check-label" style="color: #000000;font-family: Arial;font-size: 16px;"><input type="radio" class="form-check-input" value="1" name="option"  checked="check">  IN THE WEEK</label>
                                  </div>
                                  <div class="col large pb-0 form-check-inline">
                                    <label class="form-check-label" style="color: #000000;font-family: Arial;font-size: 16px;"><input type="radio" class="form-check-input" value="2" name="option">  WEEKEND</label>
                                  </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">ADULTS</label>
                                    <input type="number" class="form-control" required name="adults" id="adults">
                                  </div>
                                  <div class="col large pb-0">
                                    <label style="color: #000000;font-family: Arial;font-size: 16px;">CHILDREN</label>
                                    <input type="number" class="form-control" required name="children" id="children">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-danger" style="margin-left: 40%;">
                                    BOOKING NOW
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
        <!-- Bảng Hoá Học -->         
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                  <div class="panel-heading" style="background-color: #f4511e;">
                  <span style="display: inline-block;"><img src="img/chemistry.png" alt=""></span>
                        <h1 style="font-family: Arial;color: #ffffff;">Weekend</h1>
                    </div>
                    <div class="panel-body">
                        <ul style="list-style-type: none; padding-top: 20px;">
                          <li>
                            <div class="gia" style="width: 130px; height: 130px; background-color: #f4511e; border-radius: 50%; position: relative; padding: 0; margin-bottom: 50px; margin-left: auto;margin-right: auto;">
                              <div style="position: absolute; top: 40px; left: 25px;">
                              <h3 style="font-family: Arial; color: #ffffff; text-align: center; margin-bottom: 5px; font-size: 20px;"><b><strong>109 USD</strong></b></h3>
                              <p style="color: #ffffff;font-family: Arial; font-size: 18px;">/Person</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <span style="font-family: Arial;font-size: 18px;">
                               Lớp cơ bản: 
                            </span>
                            <p style="font-family: Arial;font-size: 18px;color: #000000;">Thứ 4 + Chủ Nhật lúc 17h30</p>
                          </li>
                        </ul>
                        <ul style="list-style-type: none;">
                          <li>
                            <span style="font-family: Arial;font-size: 18px;">
                              Lớp nâng cao: 
                            </span>
                            <p style="font-family: Arial;font-size: 18px; color: #000000;">Thứ 4 + Chủ Nhật lúc 19h30</p>
                          </li>
                        </ul>
                    </div>
                    <div class="panel-footer" style="padding-top: 30px;">
                        <h3 style="font-family: Arial; color: #000000;">69 000/1buổi</h3>
                        <button class="btn btn-lg" data-toggle="modal" data-target="#myModal">Book</button>
                    </div>
                </div>      
            </div>  
        </div>
      </div>
    <hr class="break background-primary break-small break-center margin-bottom-50"><hr>
    <section class="section background-white" style="padding-top: 100px;" id="reviews">      
      <div class="line text-center">
        <h2 class="text-dark text-size-30 text-m-size-30"><b>How Did They Say</b></h2>
        <p style="font-size: 20px;">(From reviews on our Fanpage Surfing tour Tam Dao - Viet Nam)</p>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div> 
        <div class="container" style="margin-bottom: 30px;">

          @foreach ($reviews as $r)
          <div class="row">
            <div class="col small-12 large-12" style="display: flex; ">
              <div class="icon-box-img testimonial-image circle" style="width: 250px; margin-right: 20px;">
                <img src="/img/tamdaocastle.jpg" alt="" style="height: 130px; width:130px; border-radius: 50%;">
              </div>
              <div class="icon-box-text p-last-0">
                <div class="testimonial-meta pt-half" style="margin-bottom: 10px;">
                  <span style="font-size: 16px;"><strong>{{ $r->name }}</strong></span>
                  <span>/</span>
                  <span style="font-size: 16px;">{{ $r->country }}</span>
                </div>
                <div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic" style="overflow-y: scroll; height: 150px; width: 950px;">
                  <p style="font-size: 16px;">{{ $r->contentreviews }}</p>
                </div>
              </div>
            </div>
          </div>
          <hr>
          @endforeach
        </div>
      
    </section>
    <div>
      <div class="row" id="contact">
        <div class="col">
          <img src="img/lotrinh.png" alt="">
        </div>
      </div>
    </div>
    <section class="section-small-padding background-grey">   
      <div class="margin2x">
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-2.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-3.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-4.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-5.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-3.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-5.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-4.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-1.png"/>
        </div>
        <div class="m-6 l-1">
          <img class="margin-bottom" src="img/logo-2.png"/>
        </div>
      </div>
    </section> 
  </main>
@stop
@section('body.footer')
  @include('partials.footer')
@stop