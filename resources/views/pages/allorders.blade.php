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
                                            <div><a class="btn btn-primary" href="{{asset('seeorders/'.$ob->id)}}">Viem</a></div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{$orders->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</x-app-layout>
