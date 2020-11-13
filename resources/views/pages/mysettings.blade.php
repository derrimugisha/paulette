<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="row ">
                    <div class="col">
                        <h4 class="p-5">Make changes</h4>
                    </div>
                </div>
                <div class="container">

                    <div class="row p-5">
                        <div class="col">
                            <div class="card shadow-5-strong">
                                <div class="card-header">
                                    <span class="font-weight-bolder"> Change Side Head Text </span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" id="upload-file" action="{{ url('/tosettings/changes') }}">
                                        @csrf
                                        @foreach($headside as $hd)
                                        <!-- title -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="bookname" class="form-control mb-3" name="title" value="{{$hd->title}}" />
                                            <label class="form-label" for="title">Title</label>
                                        </div>

                                        <!-- details -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control mb-3" id="details" rows="4" name="body">{{$hd->body}}</textarea>
                                            <label class="form-label" for="body">Body</label>
                                        </div>

                                        <!-- barcode -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="code" class="form-control mb-3" name="code" value="{{$hd->barcode}}" />
                                            <label class="form-label" for="code">Title</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary mb-3" id="submit">Submit</button>
                                        @endforeach
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col">
                            <div class="card shadow-5-strong">
                                <div class="card-header"><span class="font-weight-bolder"> Change About Us Text </span></div>
                                <div class="card-body">
                                    <form method="POST" id="upload-file" action="{{ url('/tosettings/aboutus') }}">
                                        @csrf
                                        @foreach($aboutus as $ab)
                                        <!-- Body -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control mb-3" id="details" rows="4" name="body">{{$ab->body}}</textarea>
                                            <label class="form-label" for="body">Text</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-3" id="submit">Submit</button>
                                        @endforeach
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
