@if(count($errors)>0)

@foreach($errors->all() as $errors)

<div class="container alert-msg">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger">
                {{ $errors}}
            </div>
        </div>
    </div>
</div>

@endforeach

@endif


@if(session('success'))

<div class="container alert-msg">
    <div class="row">
        <div class="col d-flex justify-content-center p-2">
            <div class="alert alert-success ">
                {{ session('success') }}
            </div>
        </div>
    </div>
</div>

@endif

@if(session('error'))

<div class="container alert-msg">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger">
                {{session ('error')}}
            </div>
        </div>
    </div>
</div>
@endif
