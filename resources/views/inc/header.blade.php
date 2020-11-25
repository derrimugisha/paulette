      <nav class="navbar navbar-expand-lg navbar-light  navbar-no-bg">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <a class="navbar-brand" href="#">

                  <img src="{{ asset('/mdb/img/Paulette Comics Logo.png') }}" height="75" alt="" loading="lazy" />
              </a>
              <!-- Toggle button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>

              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                  <!-- Left links -->
                  <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#"><span class="font-weight-bolder fontsalsa">Home</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#"><span class="font-weight-bolder fontsalsa">Art</span></a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link active" href="#aboutus" tabindex="-1" aria-disabled="true"><span class="font-weight-bolder fontsalsa">About Us</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#footer"><span class="font-weight-bolder fontsalsa">Contact Us</span></a>
                      </li>
                  </ul>
                  <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->
          </div>
          <!-- Container wrapper -->
      </nav>


      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="headholder">

                      <div class="">
                          <img src="{{asset('/mdb/img/topbg.png')}}" class="fitter fitterh " alt="..." />
                      </div>

                  </div>
              </div>
              <div class="carousel-item">
                  <div class="headholder">

                      <div class="">
                          <img src="{{asset('/mdb/img/topbg.png')}}" class="fitter fitterh " alt="..." />
                      </div>

                  </div>
              </div>
              <div class="carousel-item">
                  <div class="headholder">

                      <div class="">
                          <img src="{{asset('/mdb/img/topbg.png')}}" class="fitter fitterh " alt="..." />
                      </div>

                  </div>
              </div>
          </div>

          <div class="BB mx-lg-5 d-none d-sm-none d-md-none d-lg-block">
              <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span> -->
              <div class="row ">

                  <div class="col p-lg-2 p-sm-0 p-md-0 px-lg-5 w-100">

                      <div>
                          @foreach($headside as $hd)
                          <h2 class=" textpuple fontpiedra pieheade">{{$hd->title}}</h2>
                          @endforeach
                      </div>
                      <div class="d-flex justify-content-start">
                          @foreach($headside as $hb)
                          <p class="textbrown fontsalsa font-weight-bolder">
                              {{$hb->body}}
                          </p>
                          @endforeach

                      </div>

                      {{-- <div class="">
                      <button type="button" class="btn btn-light textpuple btn-rounded btn-lg text-capitalize">Read More <i class="fas fa-angle-right px-2"></i> </button>
                       </div> --}}

                  </div>

                  <div>
                      <div class="row">
                          <div class="col p-lg-5 p-md-0 p-sm-0">
                              @foreach($headside as $hbr)
                              <div class="thebar text-dark ">
                                  {{$hbr->barcode}}
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>

              </div>
          </div>


      </div>

      </div>
