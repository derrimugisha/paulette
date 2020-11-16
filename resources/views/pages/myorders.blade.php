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
                                <span class="font-weight-bolder"> Viewing </span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">Email:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->email}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Country:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->country}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">District:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->district}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Phone Number:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->phone}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Street Address:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->streetaddress}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Apartment Address:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->apartmentaddress}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Payment Method:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->paymentmethod}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Quantity:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->quantity}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Book Name:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->booknameid}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">Time and Date:</div>
                                    <div class="col">

                                        <div>
                                            {{$seeorders->created_at}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-5-strong">
                            <div class="card-header">
                                <span class="font-weight-bolder"> More orders </span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        @foreach($orders as $ob)
                                        <div class="row">
                                            <div class="col">
                                                <div>Email:</div>
                                                <div>{{$ob->email}}</div>
                                            </div>
                                            <div class="col">
                                                <div>District:</div>
                                                <div>{{$ob->district}}</div>
                                            </div>
                                            <div class="col">
                                                <div>Action
                                                    @if($ob->order_status == 'not read')
                                                    <span class="badge rounded bg-danger">Not Viewed</span>
                                                @endif
                                            </div>
                                            <div><a class="btn btn-primary" href="{{asset('seeorders/'.$ob->id)}}">View</a></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</x-app-layout>
