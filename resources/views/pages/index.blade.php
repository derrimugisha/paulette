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
            <div class="roboto px-5 pt-5 pb-0 text-light font-18">
                ONLINE SHOP
            </div>
            <div class="text-danger px-5">
                Free delivery all over Uganda
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
                <div class="card mb-3 shadow-2-strong imgcard">
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
                                    <small class="textpuple font-weight-bold ">Price: Ugx.<span class="pricef">{{$book->price }}</span></small>
                                </p>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p>
                                    @if($book->panner == 'coming soon')

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
                                                    <h5 class="modal-title" id="exampleModalLabel">Buying</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="row">
                                                    <div class="col px-5">
                                                        <div class="card-title textpuple fonthead mybld futura myst text-uppercase d-flex justify-content-start
                                                        m-0">
                                                            {{$book->book_name}}
                                                        </div>
                                                        <div class="fonthead2 futura text-uppercase d-flex justify-content-start pb-1">
                                                            {{$book->subdetails}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-0">
                                                    <div class="col px-4">
                                                        <div class=" textpuple roboto font-weight-bold  ">
                                                            price:Ugx.<span class="pricef">{{$book->price }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col px-4 ">
                                                        <div class=" text-danger futura   d-flex justify-content-end">
                                                            <span class="pointer reviewer"> <i class="far fa-edit px-1"></i> write review</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body paybody  p-5">
                                                    <form class="needs-validation shoppingform" method="post" novalidate>
                                                        @csrf
                                                        <!-- quantity -->
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="quantity{{$book->id}}" data-quantity="quantity{{$book->id}}" data-mynumber={{$book->id}} class="form-control quantity" name="quantity" value="1" />
                                                            <label class="form-label" for="form2Example2">quantity</label>
                                                        </div>

                                                        <!-- Price -->
                                                        <div class="form-outline mb-4">
                                                            <input type="hidden" id="price{{$book->id}}" class="form-control price" name="price" value="{{$book->price}}" />
                                                            <input type="text" id="mytotal" data-mynumber={{$book->id}} class="form-control mytotal" name="price" value="{{$book->price }}" readonly />
                                                            <label class="form-label" for="form2Example2">Price</label>
                                                        </div>

                                                        <!-- payment method-->
                                                        <select class=" form-control mb-4" id="paymentmethod{{$book->id}}" data-mynumber={{$book->id}} name="paymentmethod" required>
                                                            <option value="">Select payment method </option>
                                                            <!--<option value="comming soon">Mobile Money</option>-->
                                                            <option value="cash on delivery">Cash On Delivery</option>
                                                            <div class="invalid-feedback mb-5">
                                                                please select your payment method
                                                            </div>
                                                        </select>

                                                        <!-- phone -->
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="phone{{$book->id}}" data-mynumber={{$book->id}} class="form-control phone" name="phone" required />
                                                            <label class="form-label" for="form2Example2">Phone</label>
                                                            <div class="invalid-feedback font-12 frm-error">
                                                                Field Required
                                                            </div>
                                                        </div>

                                                        <input type="text" id="bookid{{$book->id}}" data-mynumber={{$book->id}} class="d-none" name="bookid" value="{{$book->book_name}}" />

                                                        <!-- delivery address -->
                                                        <div class="form-outline mb-4 alt-holder">
                                                            <input type="text" id="deliveryaddress{{$book->id}}" data-mynumber={{$book->id}} class="form-control" name="address" required />
                                                            <label class="form-label" for="form2Example2">Delivery Address</label>
                                                            <div class="invalid-feedback font-12 frm-error">
                                                                Field Required
                                                            </div>
                                                        </div>


                                                        <div class="alerter{{$book->id}}"></div>
                                                        <!-- Submit button -->
                                                        <button type="submit" data-mynumber={{$book->id}} class="btn btn-primary btn-block mb-4 mycheckout">
                                                            Check Out
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- review card -->
                                                <div class="card w-75 shadow-5-strong review-card">
                                                    <div class="row px-2">
                                                        <div class="col py-2 d-flex justify-content-center">
                                                            <div class="mythumb rounded ">
                                                                <img src="{{asset('/public'.$book->file_path)}}" alt="" class="fitter h-100 rounded">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col p-2 d-flex justify-content-center">
                                                                    <li class="fa fa-star fa-2x one" data-index="0"></li>
                                                                    <li class="fa fa-star fa-2x two" data-index="1"></li>
                                                                    <li class="fa fa-star fa-2x three" data-index="2"></li>
                                                                    <li class="fa fa-star fa-2x four" data-index="3"></li>
                                                                    <li class="fa fa-star fa-2x five" data-index="5"></li>
                                                                </div>
                                                            </div>
                                                            <div class="row px-2">
                                                                <div class="col">
                                                                    <form class="needs-validation rateform" method="post" novalidate>
                                                                        @csrf
                                                                        <!-- review header -->
                                                                        <div class="form-outline mb-4">
                                                                            <input type="text" id="starnumber{{$book->id}}" class="form-control starnumber" name="starnumber" required />
                                                                            <label class="form-label" for="form2Example2">Put number of stars</label>
                                                                            <div class="invalid-feedback ">
                                                                                please fill in this field "starnumber"
                                                                            </div>
                                                                        </div>
                                                                        <div class="rate-error" style="display:none">Use numbers 1-5 to rate</div>



                                                                        <!-- review header -->
                                                                        <div class="form-outline mb-4">
                                                                            <input type="text" id="reviewheader{{$book->id}}" class="form-control reviewheader" name="reviewheader" required />
                                                                            <label class="form-label" for="form2Example2">Review Header</label>
                                                                            <div class="invalid-feedback ">
                                                                                please fill in this field "Review Header"
                                                                            </div>
                                                                        </div>
                                                                        <!-- write review here -->
                                                                        <div class="form-outline mb-4">
                                                                            <textarea class="form-control writereview" id="writereview{{$book->id}}" rows="4" name="writer"></textarea>
                                                                            <label class="form-label" for="details">Write Review Here</label>
                                                                        </div>

                                                                        {{-- book id --}}
                                                                        <input type='hidden' id="bookreviewid{{$book->id}}" name="bookreviewid{{$book->id}}" value="{{$book->id}}">

                                                                        <div class="d-flex justify-content-end">
                                                                            <!-- cancel -->
                                                                            <button class="btn btn-danger btn-sm mx-2  mb-4 reviewer-b">
                                                                                cancel
                                                                            </button>

                                                                            <!-- Submit button -->
                                                                            <button type="submit" class="btn btn-outline-success mx-2 btn-sm mb-4 sb" data-formnumber="{{$book->id}}" id="sb">
                                                                                submit
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of review card -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of modal -->
                                    @endif
                                </p>

                            </div>
                            <div class="row mb-1">
                                <div class="col text-center text-danger ">
                                    Free delivery all over Uganda
                                </div>
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
            <div class="col d-flex justify-content-center">
                {{ $books->links() }}
            </div>
        </div>
        <div class="loader loader-default" id="loader"></div>
        @endsection
