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
                        <h4>Subscribers</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="font-weight-bolder">Subscribers By Email</div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @foreach($emails as $em)
                                <li class="list-group-item">{{$em->email}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <div class="font-weight-bolder">Subscribers By Phone Number</div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @foreach($phone as $ph)
                                <li class="list-group-item">{{$ph->phonenumber}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
