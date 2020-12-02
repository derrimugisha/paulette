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
                                            <label class="form-label" for="code">Barcode</label>
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

                    <div class="row p-5">
                        <div class="row p-2">
                            <div class="col font-weight-bolder">
                                Change Footer Settings
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col ">
                                <div class="card shadow-5-strong">
                                    <div class="card-header"><span class="font-weight-bolder"> Update Subscriber Contact Section </span></div>
                                    <div class="card-body overflow-auto ">
                                        @foreach($subscribersection as $ss)
                                        <div class="row p-4">
                                            <div class="col ">
                                                <form method="POST" action="{{ url('/subscribersection') }}">
                                                    @csrf
                                                    <!-- Via Email -->
                                                    <div class="form-outline mb-4">
                                                        <textarea class="form-control mb-3" id="details" rows="4" name="emailmessage">{{$ss->email_msg}}</textarea>
                                                        <label class="form-label" for="emailmessage">Via Email Message</label>
                                                    </div>
                                                    <!-- Via mobile message -->
                                                    <div class="form-outline mb-4">
                                                        <textarea class="form-control mb-3" id="mobilemessage" rows="4" name="mobilemessage">{{$ss->mobile_msg}}</textarea>
                                                        <label class="form-label" for="mobilemessage">Via Mobile Message</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mb-3" id="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">

                            <div class="card shadow-5-strong">
                                <div class="card-header"><span class="font-weight-bolder"> Update Foooter Contact Information </span></div>
                                <div class="card-body overflow-auto " style="height:400px;">
                                    @foreach($footercontacts as $fc)
                                    <div class="row p-4">
                                        <div class="col ">
                                            <form method="POST" id="upload-file" action="{{ url('/update/footer/'.$fc->id) }}">
                                                @csrf
                                                <!-- phone1 -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="code" class="form-control mb-3" name="phone1" value="{{$fc->phone1}}" />
                                                    <label class="form-label" for="phone1">Phone1</label>
                                                </div>
                                                <!-- phone2 -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="code" class="form-control mb-3" name="phone2" value="{{$fc->phone2}}" />
                                                    <label class="form-label" for="phone1">Phone2</label>
                                                </div>
                                                <!-- email -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="code" class="form-control mb-3" name="email" value="{{$fc->email}}" />
                                                    <label class="form-label" for="phone1">Email</label>
                                                </div>
                                                <!-- Address -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="code" class="form-control mb-3" name="address" value="{{$fc->address}}" />
                                                    <label class="form-label" for="address">Address</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-3" id="submit">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-5-strong">
                                <div class="card-header"><span class="font-weight-bolder"> Add More Contact information </span></div>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" id="upload-file" action="{{ url('/add/footer') }}" novalidate>
                                        @csrf
                                        <!-- phone1 -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="code" class="form-control mb-3" name="phone1" required />
                                            <label class="form-label" for="phone1">Phone1 *</label>
                                            <div class="invalid-feedback bm-4">
                                                please fill in this field Phone1
                                            </div>
                                        </div>
                                        <!-- phone2 -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="code" class="form-control mb-3" name="phone2" />
                                            <label class="form-label" for="phone1">Phone2</label>
                                        </div>
                                        <!-- email -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="code" class="form-control mb-3" name="email" />
                                            <label class="form-label" for="phone1">Email</label>
                                        </div>
                                        <!-- Address -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="code" class="form-control mb-3" name="address" />
                                            <label class="form-label" for="address">Address</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-3" id="submit">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-5-strong">
                                <div class="card-header"><span class="font-weight-bolder"> Remove Footer Contact Information </span></div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">Phone1</div>
                                                <div class="col">Phone2</div>
                                                <div class="col">Email</div>
                                                <div class="col">Address</div>
                                                <div class="col">Action</div>
                                            </div>
                                        </li>
                                        @foreach($footercontacts as $value)
                                        <div class="row">
                                            <div class="col p-2">{{$value->phone1}}</div>
                                            <div class="col p-2">{{$value->phone2}}</div>
                                            <div class="col p-2">{{$value->email}}</div>
                                            <div class="col p-2">{{$value->address}}</div>
                                            <div class="col p-2"><a class="btn btn-danger btn-sm" href="{{url('/removecontact/'.$value->id)}}">Remove</a></div>
                                        </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                "use strict";

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll(".needs-validation");

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms).forEach(form => {
                    form.addEventListener(
                        "submit"
                        , event => {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        }
                        , false
                    );
                });
            })();

        </script>

</x-app-layout>
