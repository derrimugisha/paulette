<div class="container-fluid mypuple" id="footer">
    <div class="row pt-lg-5 px-lg-5 pb-lg-2  p-sm-0 p-md-0">

        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">

            <div>

                <span class="textTT font-weight-bolder">UPDATES VIA EMAIL</span>

            </div>

            <div class="pt-0">

                <span class="text-light">Stay in Touch for the Freshest Products</span>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">

            <div>

                <span class="textTT font-weight-bolder">UPDATES VIA MOBILE</span>

            </div>

            <div class="pt-0">

                <span class="text-light">For updates and specals offers on Paulette
                    Comics, Collections, Gifts and videos.
                </span>

            </div>

        </div>

        <div class="col d-none d-lg-block">



        </div>

    </div>

    <div class="row px-lg-5">

        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <form method="POST" action="{{url('/saveemail')}}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control bg-light bfh-phone" placeholder="Enter Email here..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="f_input" name="email" required />
                    <button class="input-group-text TTbackground " id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <form method="POST" action="{{url('/savephone')}}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control bg-light" placeholder="Enter Phone Number here..." aria-label="Recipient's number" aria-describedby="basic-addon2" id="f_input" name="phone" required/>
                    <button class="input-group-text TTbackground  " id="basic-addon2 "><i class="fas fa-location-arrow text-light"></i></button>
                </div>
            </form>
        </div>


        <div class="col">
            <p class="d-flex justify-content-center">
                <a href="#"><i class="fab fa-twitter fa-2x px-2 text-light"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x px-2 text-light"></i></a>
                <a href="#"><i class="fab fa-facebook-f fa-2x px-2 text-light"></i></a>
            </p>
        </div>


    </div>

    <div class="row">

        <div class="col">

            <hr class="bg-light">

        </div>

    </div>

    <div class="row px-lg-5 pb-4">
        @foreach($footercontent as $fc)

        <div class="col-12 col-md-12 col-sm-12 col-lg-4">
            <div class="row">

                <div class="col-2 d-flex justify-content-end py-2">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </div>

                <div class="col-10 p-0">
                    <p class="p-0 m-0 text-light">Phone</p>
                    <p class="p-0 m-0 text-light">{{$fc->phone1}} | {{$fc->phone2}}</p>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-12 col-sm-12 col-lg-4">
            <div class="row">

                <div class="col-2 col-sm-2 col-md-2 py-2 d-flex justify-content-end">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="far fa-envelope"></i>
                    </span>
                </div>

                <div class="col-10 col-sm-10 col-md-10 p-0">
                    <p class="p-0 m-0 text-light">Email</p>
                    <p class="p-0 m-0 text-light">{{$fc->email}}</p>
                </div>

            </div>
        </div>

        <div class="col">
            <div class="row">

                <div class="col-2 py-2 d-flex justify-content-end">
                    <span class="btn btn-outline-light btn-floating " data-ripple-color="dark">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                </div>

                <div class="col-10 p-0">
                    <p class="p-0 m-0 text-light">Address</p>
                    <p class="p-0 m-0  text-light">{{$fc->address}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>
