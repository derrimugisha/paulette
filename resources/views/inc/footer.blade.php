<div class="container-fluid mypuple" id="footer">
    <!-- for big screens -->
    <div class="row pt-lg-5 px-lg-5 pb-lg-2  p-sm-0 p-md-0 " id="bg-f">

        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">

            <div>

                <span class="textTT font-weight-bolder">UPDATES VIA EMAIL</span>

            </div>

            @foreach($subscribersection as $subsec)
            <div class="pt-0">

                <span class="text-light">{{$subsec->email_msg}}</span>

            </div>
            @endforeach



        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">

            <div>

                <span class="textTT font-weight-bolder">UPDATES VIA MOBILE</span>

            </div>


            @foreach($subscribersection as $subsec2)
            <div class="pt-0">

                <span class="text-light">{{$subsec2->mobile_msg}}</span>

            </div>
            @endforeach

        </div>

        <div class="col d-none d-lg-block">



        </div>

    </div>

    <div class="row px-lg-5 " id="bg-f">

        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <form class="needs-validation b-form-email" method="POST" novalidate>
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control bg-light bfh-phone" placeholder="Enter Email here..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="b_email" name="email" required />
                    <div class="invalid-feedback font-12 frm-error">
                        Field Required
                    </div>
                    <button class="input-group-text TTbackground sendmail" id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                </div>
            </form>
            <div class="b-footer-alert"></div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <form class="needs-validation b-form-phone" method="POST" action="{{url('/savephone')}}" novalidate>
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control bg-light" placeholder="Enter Phone Number here..." aria-label="Recipient's number" aria-describedby="basic-addon2" id="b_phone" name="phone" required />
                    <div class="invalid-feedback font-12 frm-error">
                        Field Required
                    </div>
                    <button class="input-group-text TTbackground  sendphone" id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                </div>
            </form>
            <div class="b-footer-alert-phone">

            </div>
        </div>


        <div class="col">
            <p class="d-flex justify-content-center">
                <a href="https://twitter.com/PauletteComics"><i class="fab fa-twitter fa-2x px-2 text-light"></i></a>
                <a href="https://www.instagram.com/paulette_comics/"><i class="fab fa-instagram fa-2x px-2 text-light"></i></a>
                <a href="https://www.facebook.com/paulettedecorarts"><i class="fab fa-facebook-f fa-2x px-2 text-light"></i></a>
            </p>
        </div>


    </div>
    <!-- endfor big screens -->

    <!--small screen-->
    <div class="row" id="sm-f">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-lg-5 px-lg-5 pb-lg-2  p-sm-5 p-md-5 p-5">
            <div class="row">
                <div class="col">
                    <span class="textTT font-weight-bolder">UPDATES VIA EMAIL</span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @foreach($subscribersection as $subsec_sm)
                    <span class="text-light  fonthead">{{$subsec_sm->email_msg}}</span>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="needs-validation s-form-email" method="POST" action="{{url('/saveemail')}}" novalidate>
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light bfh-phone" placeholder="Enter Email here..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="sm_email" name="email" required />
                            <button class="input-group-text TTbackground sm-sendmail" id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                            <div class="invalid-feedback font-12 frm-error">
                                Field Required
                            </div>
                        </div>
                    </form>
                    <div class="sm-footer-alert">
                        {{-- <div class="alert alert-primary">This is for the alert section</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-lg-5 px-lg-5 pb-lg-2
        pb-sm-5 pb-md-5 pb-5 px-sm-5 px-md-5 px-5">
            <div class="row">
                <div class="col">
                    <span class="textTT   font-weight-bolder">UPDATES VIA MOBILE</span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @foreach($subscribersection as $subsec_sm2)
                    <span class="text-light  fonthead">{{$subsec_sm2->mobile_msg}}</span>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="needs-validation s-form-phone" method="POST" action="{{url('/savephone')}}" novalidate>
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light" placeholder="Enter Phone Number here..." aria-label="Recipient's number" aria-describedby="basic-addon2" id="sm_phone" name="phone" required />
                            <button class="input-group-text TTbackground  sm-sendphone" id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                            <div class="invalid-feedback font-12 frm-error">
                                Field Required
                            </div>
                        </div>
                    </form>
                    <div class="sm-footer-alert-phone">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-lg-5 px-lg-5 pb-lg-2  p-sm-0 p-md-0">
            <div class="row">
                <div class="col">

                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="d-flex justify-content-center">
                        <a href="https://twitter.com/PauletteComics"><i class="fab fa-twitter fa-2x px-2 text-light"></i></a>
                        <a href="https://www.instagram.com/paulette_comics/"><i class="fab fa-instagram fa-2x px-2 text-light"></i></a>
                        <a href="https://www.facebook.com/paulettedecorarts"><i class="fab fa-facebook-f fa-2x px-2 text-light"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end of smallscreen-->

    <div class="row">

        <div class="col">

            <hr class="bg-light">

        </div>

    </div>

    <div class="row px-lg-5 ">
        @foreach($footercontent as $fc)

        <div class="col-12 col-md-12 col-sm-12 col-lg-4 px-5 py-3">
            <div class="row p-1">

                <div class="col-2 d-flex justify-content-end py-2">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </div>

                <div class="col-10 p-0">
                    <p class="p-0 m-0 text-light font-18 font-weight-bold">Phone</p>
                    <p class="p-0 m-0 text-light">{{$fc->phone1}} | {{$fc->phone2}}</p>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-12 col-sm-12 col-lg-4 px-5 py-3">
            <div class="row p-1">

                <div class="col-2 col-sm-2 col-md-2 py-2 d-flex justify-content-end">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="far fa-envelope"></i>
                    </span>
                </div>

                <div class="col-10 col-sm-10 col-md-10 p-0">
                    <p class="p-0 m-0 font-18 font-weight-bold text-light">Email</p>
                    <p class="p-0 m-0 text-light">{{$fc->email}}</p>
                </div>

            </div>
        </div>

        <div class="col px-5 py-3">
            <div class="row p-1">

                <div class="col-2 py-2 d-flex justify-content-end">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                </div>

                <div class="col-10 p-0">
                    <p class="p-0 m-0 font-18 font-weight-bold text-light">Address</p>
                    <p class="p-0 m-0  text-light">{{$fc->address}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>
