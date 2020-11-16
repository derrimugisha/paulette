@extends('layouts.editapp')

@section( 'main')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5">
                <h3>EDIT</h3>
            </div>
            <div class="p-2">
                <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('update/'.$books->id) }}">
                    @csrf

                    <!-- Book name -->
                    <div class="form-outline mb-4">
                        <input type="text" id="bookname" class="form-control" name="bookname" value="{{$books->book_name}}" />
                        <label class="form-label" for="bookname">Book Name</label>
                    </div>

                    <!-- sub details -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="subdetails" rows="4" name="subdetails">{{$books->subdetails}}</textarea>
                        <label class="form-label" for="details">Subdetails</label>
                    </div>

                    <!-- price -->
                    <div class="form-outline mb-4">
                        <input type="text" id="price" class="form-control" value="{{$books->price}}" name="price" />
                        <label class="form-label" for="bookname">Price</label>
                    </div>

                    <!-- issue -->
                    <div class="form-outline mb-4">
                        <input type="text" id="issue" class="form-control" name="issue" value="{{$books->issue}}" />
                        <label class="form-label" for="bookname">Issue</label>
                    </div>

                    <!-- details -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="details" rows="4" name="details">{{$books->details}}</textarea>
                        <label class="form-label" for="details">Details</label>
                    </div>



                    <!-- banners-->
                    <select class=" form-control mb-4" id="banner" name="banner">
                        <option value="{{$books->panner}}">{{$books->panner}} </option>
                        <option value="coming soon">Coming Soon</option>
                        <option value="available">Available</option>

                    </select>



                    <div class="custom-file mb-4 d-none" id="myfile">
                        <input type="file" class="custom-file-input" id="customFile" name="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    <div class="btn btn-sm btn-success custom-file mb-3" id="showf">Click to update Cover Image</div>

                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
