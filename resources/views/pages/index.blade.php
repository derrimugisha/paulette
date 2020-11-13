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
            <div class="col-12 col-md-12 col-sm-12 col-lg-6 d-flex justify-content-center p-2 ">
                <!-- card -->
                <div class="card mb-3 shadow-2-strong" style="max-width: 540px">
                    <div class="row g-0">

                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="rounded-left imgbox">
                                <img src="{{asset('/public'.$book->file_path)}}" alt="" class="fitter">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title textpuple fonthead mybld futura myst text-uppercase">
                                    {{$book->book_name}}
                                </h5>
                                <p class="fonthead2 roboto text-uppercase">

                                    {{$book->subdetails}}

                                </p>
                                <p class="card-text fonthead futura cdh roboto">
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
                                                <h5 class="modal-title" id="exampleModalLabel">the title is : {{$book->book_name}}</h5>
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
                                        <span class="text-capitalize roboto">Comming Soon</span>
                                    </button>

                                    @else

                                    <button class="btn mypuple text-light" data-toggle="modal" data-target="#buyform{{$book->id}}">
                                        <i class="fas fa-shopping-cart px-2"></i><span class="text-capitalize  roboto">Buy Now</span>
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

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="contact-info">
                                                                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                                                                <h2>Contact Us</h2>
                                                                <h4>We would love to hear from you !</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="contact-form">
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="fname">First Name:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="comment">Comment:</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


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
                    A simple primary alert—check it out!
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
