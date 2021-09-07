@include('backendassets.header')   

<div id="wrapper" class="clients">
@include('backendassets.sidebar')

    <!-- Page wraper -->



    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 418px;">

        <!-- Top Navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li><span>Midas Group Services Pte Ltd</span></li>

                    <li>

                        <a href="javascript:document.getElementById('logoutForm').submit()"><i class="fa fa-sign-out"></i> Log out</a>
                        <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="wCNERVm7y3QLZ15b2WHah7Ju0TN_Qrrik28yf_afjKawUr4XFwOMuvyhQ1BEs2_3QcdpenlOv4VaytpWcxbdyEblvfDIgViQIRQ0sxGtfPk0l3B2OWat-scn6BJb2nlaM0GsLQ2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-9">
                <h2>Drivers</h2>
                <ol class="breadcrumb inline-block">
                    <li><a href="/">Home</a></li>
                    <li class="active"><strong>Drivers</strong></li>
                </ol>
            </div>
            <div class="col-md-3"><a href="{{route('adddriver')}}" class="margin-top-30 pull-right btn btn-primary">Add new</a></div>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading" style="padding-top: 20px;">
            <div class="col-lg-12">
                <div class="form-inline pull-left">
                    <div class="form-group">
                        <label class="m-r-md">Region:</label> <select class="form-control input-sm" id="Region" name="Region">
                            <option value="">All Regions</option>
                            <option value="atq">atq</option>
                            <option value="batam island">batam island</option>
                            <option value="goa">goa</option>
                            <option value="Ho chi Min Attraction to hotel">Ho chi Min Attraction to hotel</option>
                            <option value="islamabad">islamabad</option>
                            <option value="KLIA Arrival Hall">KLIA Arrival Hall</option>
                            <option value="kota kinablu">kota kinablu</option>
                            <option value="Kualanamu">Kualanamu</option>
                            <option value="Lombok International Airport lombok">Lombok International Airport lombok</option>
                            <option value="malaysia">malaysia</option>
                            <option value="new delhi">new delhi</option>
                            <option value="Ngurah Rai International Airport">Ngurah Rai International Airport</option>
                            <option value="Phuket International Airport">Phuket International Airport</option>
                            <option value="Singapore and legoland">Singapore and legoland</option>
                            <option value="Soekarno–Hatta International Airport">Soekarno–Hatta International Airport</option>
                            <option value="Tan Son Nhat International Airport">Tan Son Nhat International Airport</option>
                            <option value="Singapore">Singapore</option>
                        </select>
                    </div>
                </div>
                <div class="pull-right">
                    9 drivers
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row drivers-grid">

@foreach($drivers as $driver)
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" src="{{URL::to('/')}}/public/images/driver/profiles/{{ $driver->image }}" class="m-t-xs img-responsive driver-image">
                                <div class="m-t-xs font-bold text-center">Chauffeur</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3 class="nomargin-bottom">
                                <strong>{{ $driver->first_name }} {{ $driver->last_name }}</strong>
                            </h3>
                            <p class="driver-summary">


                                <br>
                                <i class="fa fa-phone"></i> <a href="tel: {{ $driver->phone_no }}">{{ $driver->phone_no }}</a>
                                <br>
                                <i class="fa fa-envelope-o"></i><span>{{ $driver->email }}</span>
                                <br>
                                <i class="fa fa-car"></i><b>Car Reg No.:</b>{{ $driver->car_no_plate }}
                                <br>
                                <i class="fa fa-map-marker"></i><b>Region:</b>{{ $driver->coverd_area }}

                            </p>
{{--                             <div><i class="fa fa-user" aria-hidden="true"></i> <b>Registered User</b></div>
                            <div style="word-break: break-word" class="pointer copyToClipboard">https://account.chauffeurbookingsoftware.com/account/login/?e=hiace8895%40gmail.com</div>
                            <p></p> --}}
                        </div>

                        <div class="col-md-12 text-right">
                            <a href="{{route('editdriver', $driver->driver_id)}}" class="btn btn-primary m-r-sm">
                             <i class="fa fa-edit">
                              </i> Edit</a>
                            <button class="btn btn-danger m-l-sm delete" value="{{ $driver->driver_id }}" onclick="deleteConfirmation({{ $driver->driver_id }})"> <i class="fa fa-trash"></i> Delete</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
@endforeach                
            </div>
</div>

</div>
</div>
@include('backendassets.footer')  


<script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'get',
                    url: "{{url('deletedriver')}}/" + id,
                    data: {
                    _token:'{{ csrf_token() }}'
                    },
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                            setTimeout(function() {
    location.reload();
}, 3000);
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
