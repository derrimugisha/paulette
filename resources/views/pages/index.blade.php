@extends('layouts.apppages')

@section( 'main')
<!-- container -->
<div class="container-fluid ltblue">
    <div class="row">
        <div class="col text-light" id="aboutus">
            <div class="px-5 p-2">
                <h3 class="textpuple fontpiedra pieheade">About Us</h3>
            </div>

            <div class="px-5 pb-5 futura textpuple fontsalsa">
                @foreach($aboutus as $ab)
                {{$ab->body}}
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end of container -->

<!-- another container -->
<div class="container-fluid gpuple">
    <!-- row -->
    <div class="row">

        <div class="col-12 col-lg-6 col-sm-12 col-md-12">

            <div class="form-group has-search mb-3  p-5" id="srch mypuple">
                <span class="fa fa-search text-light form-control-feedback"></span>
                <input type="search" id="container-search" value="" class="form-control form-control-plaintext mypuple" placeholder="Search..." />
            </div>

        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-12">

        </div>


    </div>
    <!-- row -->

    <div id="Searchable-container">
        <div class="row">

            @if(count($books)>0)

            @foreach($books as $book)
            <!--<div class="col-12 col-md-12 col-sm-12 col-lg-6 d-flex justify-content-center py-2 h-75 d-inline">-->
            <div class="col-12 col-md-12 col-sm-12 col-lg-6 d-flex justify-content-center p-2 ">
                <!-- card -->
                <div class="card mb-3 shadow-2-strong " style="max-width: 540px">
                    <div class="row g-0">

                        <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                            <div class="rounded-left imgbox">
                                <img src="{{asset('/public'.$book->file_path)}}" alt="" class="fitter rounded-left">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title textpuple fonthead mybld futura myst text-uppercase">
                                    {{$book->book_name}}
                                </h5>
                                <p class="fonthead2 futura text-uppercase">

                                    {{$book->subdetails}}

                                </p>
                                <p class="card-text fonthead roboto cdh">
                                    {{$book->details}}
                                </p>
                                <p class="card-text fonthead my-0">
                                    <a href="" class="text-danger" data-toggle="modal" data-target="#mymodal{{$book->id}}">Read More
                                        <span><i class="fas fa-angle-right"></i></span></a>
                                </p>
                                <!-- modal -->
                                <div class="modal fade" id="mymodal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> <span class="text-uppercase">{{$book->book_name}}</span></h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="card-text fonthead futura cdh">
                                                    {{ $book->details }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of modal -->
                                <p class="card-text">
                                    <small class="textpuple font-weight-bold">Price: Ugx.{{$book->price}}</small>
                                </p>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p>
                                    @if($book->panner == 'comming soon')

                                    <button class="btn mypuple text-light">
                                        <span class="text-capitalize roboto">Coming Soon</span>
                                    </button>

                                    @else

                                    <button class="btn mypuple text-light" data-toggle="modal" data-target="#buyform{{$book->id}}">
                                        <i class="fas fa-shopping-cart px-2"></i><span class="text-capitalize roboto">Buy Now</span>
                                    </button>

                                    <!-- modal -->
                                    <div class="modal fade" id="buyform{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ url('/order') }}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="p-2">
                                                                    <h4>Enter Address</h4>
                                                                </p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="p-2">
                                                                    <h6>Buying {{$book->book_name}}</h6>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col">

                                                                <!-- Email input -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="email" id="form2Example1" class="form-control" name="email" />
                                                                    <label class="form-label" for="form2Example1">Email address</label>
                                                                </div>
                                                                <input type="text" id="bookid" class="d-none" name="bookid" value="{{$book->book_name}}" />
                                                                <!-- country -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="country" class="form-control" name="country" />
                                                                    <label class="form-label" for="form2Example2">Country</label>
                                                                </div>

                                                                <!-- district -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="district" class="form-control" name="district" />
                                                                    <label class="form-label" for="form2Example2">District</label>
                                                                </div>

                                                                <!-- phone -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="phone" class="form-control" name="phone" />
                                                                    <label class="form-label" for="form2Example2">Phone</label>
                                                                </div>

                                                                <!-- street address -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="streetaddress" class="form-control" name="streetaddress" />
                                                                    <label class="form-label" for="form2Example2">Street Address</label>
                                                                </div>

                                                                <!-- Apartment address -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="apartmentaddress" class="form-control" name="apartmentaddress" />
                                                                    <label class="form-label" for="form2Example2">Apartment Address</label>
                                                                </div>

                                                                <!-- payment method-->
                                                                <select class=" form-control mb-4" id="paymentmethod" name="paymentmethod">
                                                                    <option value="">Select payment method </option>
                                                                    <!--<option value="comming soon">Mobile Money</option>-->
                                                                    <option value="cash on delivery">Cash On Delivery</option>

                                                                </select>

                                                                <!-- Submit button -->
                                                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                                                    Check Out
                                                                </button>
                                                            </div>

                                                            <div class="col">


                                                                <!-- quantity -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="quantity" class="form-control" name="quantity" value="1" />
                                                                    <label class="form-label" for="form2Example2">quantity</label>
                                                                </div>

                                                                <!-- Price -->
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" id="price" class="form-control" name="price" value="{{$book->price}}" readonly />
                                                                    <label class="form-label" for="form2Example2">Price</label>
                                                                </div>

                                                                <!-- total -->
                                                                <div>
                                                                    <div class="badge mypuple p-2">
                                                                        Total: <span id="mytotal" class="text-light"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of modal -->
                                    @endif
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- end of card -->
            </div>
            @endforeach

            @else

            <div class="col d-flex justify-content-center ">
                <div class="bg-secondary rounded p-5 text-light">
                    No commic Books Published Yet, Try again later
                </div>
            </div>
            @endif


        </div>
        <div class="row">
            <div class="col">
                <div class="w-auto d-flex justify-content-end p-2">
                    <div>
                        <a href="#" class="text-light"><span class="underline">View More</span></a>
                    </div>
                </div>
            </div>
        </div>
        @endsection
