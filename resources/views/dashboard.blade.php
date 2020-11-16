<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="row">
                    <div class="col p-5">
                         <div class="btn btn-primary" data-toggle="modal" data-target="#mynotification">
                            new orders <span class="badge badge-danger" id="nt"></span>
                        </div>
                        <a href="{{ asset('/allorders') }}" class="btn btn-success"> View All Orders </a>
                        <a href="{{asset('/tosettings')}} " class="btn btn-primary">Settings</a>

                    </div>

                    <!-- modal -->
                    <div class="modal fade" id="mynotification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Orders</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="vnt">



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
                </div>


                <div class="row">

                    <div class="col p-5">

                        <div class="card mb-3 shadow-2-strong" style="max-width: 540px">
                            <div class="row">
                                <div class="col">
                                    <div class="p-5">
                                        <h5 class="poppins font-weight-boder p-2"> Upload Your Comic Book </h5>
                                        <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('/store') }}">
                                            @csrf

                                            <!-- Book name -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="bookname" class="form-control" name="bookname" />
                                                <label class="form-label" for="bookname">Book Name</label>
                                            </div>

                                            <!-- sub details -->
                                            <div class="form-outline mb-4">
                                                <textarea class="form-control" id="subdetails" rows="4" name="subdetails"></textarea>
                                                <label class="form-label" for="details">Subdetails</label>
                                            </div>

                                            <!-- price -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="price" class="form-control" name="price" />
                                                <label class="form-label" for="bookname">Price</label>
                                            </div>

                                            <!-- issue -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="issue" class="form-control" name="issue" />
                                                <label class="form-label" for="bookname">Issue</label>
                                            </div>

                                            <!-- details -->
                                            <div class="form-outline mb-4">
                                                <textarea class="form-control" id="details" rows="4" name="details"></textarea>
                                                <label class="form-label" for="details">Details</label>
                                            </div>



                                            <!-- banners-->
                                            <select class=" form-control mb-4" id="banner" name="banner">
                                                <option value="">Select status </option>
                                                <option value="coming soon">Coming Soon</option>
                                                <option value="available">Available</option>

                                            </select>


                                            {{-- <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile" name="file" />
                                                <label class="form-file-label" for="customFile">
                                                    <span class="form-file-text">Choose Book Cover...</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                            </div> --}}
                                            <div class="custom-file mb-4">
                                                <input type="file" class="custom-file-input" id="customFile" name="file">
                                                @error('file')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col p-5">

                        <div class="card mb-3 shadow-2-strong" style="max-width: 540px">
                            <div class="row">
                                <div class="col pt-5 px-5">
                                    <h3 class="font-weight-bolder">Commic Books In the store</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col ">
                                    @if(count($books)>0)
                                    <ul class="list-group list-group-flush p-2">
                                        @foreach ($books as $book)
                                        <li class="list-group-item text-uppercase">
                                            <div class="row">
                                                <div class="col">{{$book->book_name}}
                                                </div>
                                                <div class="col d-flex justify-content-end "><a href="{{asset('edit/'.$book->id)}}" class="btn btn-primary">Edit</a>
                                                    <form class="px-2" method="POST" action="{{url('destroy/'.$book->id)}}">
                                                        @csrf
                                                        <input type="submit" value="Delete " class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @else

                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
</x-app-layout>
