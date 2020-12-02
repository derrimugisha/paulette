<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>My oredrs</h4>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow-5-strong">
                            <div class="card-header">
                                <span class="font-weight-bolder"> All Orders </span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col font-weight-bolder">
                                                Book Title
                                            </div>
                                            <div class="col font-weight-bolder">
                                                Rating Heading
                                            </div>
                                            <div class="col font-weight-bolder">
                                                Rating body
                                            </div>
                                            <div class="col font-weight-bolder">
                                                Date
                                            </div>
                                        </div>
                                        @foreach($raters as $rt)
                                        <div class="row">
                                            <div class="col p-2">
                                                <div>{{$rt->book_name}}</div>
                                            </div>
                                            <div class="col p-2">
                                                <div>{{$rt->header}}</div>
                                            </div>
                                            <div class="col p-2">
                                                <div>{{$rt->writer}}</div>
                                            </div>
                                            <div class="col p-2">
                                                <div>{{$rt->created_at}}</div>
                                            </div>

                                        </div>
                                        @endforeach
                                        {{$raters->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
</x-app-layout>
