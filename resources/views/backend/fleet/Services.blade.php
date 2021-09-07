@include('backendassets.header')  
<div id="wrapper" class="carclasses">

@include('backendassets.sidebar')


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
                        <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="TuADhq2VkyLrxpMsJcwat7sCWzKEk_FXCr4ztszulwVNXW9T0065vgYRaQm-X9bXjp3FZUVVTUVrss7NaMmFDWPMhFfccCF6Op9hAHQv7lGcoONxKo_zjmV18iTUtFQ6_QETHw2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-9">
                <h2>Services</h2>
                <ol class="breadcrumb inline-block">
                    <li><a href="/">Home</a></li>
                    <li class="active"><strong>Services that client can book</strong></li>
                </ol>
            </div>
            <div class="col-md-3">
            <button href="#"  data-toggle="modal" id="new-service" 
            class="margin-top-30 pull-right btn btn-primary">
                <i class="fa fa-plus m-r-xs"> </i> Add new</button></div>
        </div>




        <div class="wrapper wrapper-content">
            <car-classes id="carClasses" website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" >
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>No cars classes available. Use top right button to add.</h1>
                    </div>
                </div>
                
                    @foreach($services as $servicesdata)
                <div class="row drivers-grid">
                    <div class="col-lg-4 ng-scope">
                        <div class="contact-box">
                            <div class="col-sm-4">
                                <div class="text-center">
        <img alt="image" class="m-t-xs img-responsive driver-image"
         src="{{URL::to('/')}}/public/images/fleet/service/{{ $servicesdata->service_photo }}">
        </div>
                            </div>
                            <div class="col-sm-8 ">
                                <h3 class="nomargin-bottom"><strong class="">{{ $servicesdata->service_name }}</strong></h3>
                                <p class="driver-summary"></p>
                                <div class="m-t-md"><span class="m-r-md "><i class="fa fa-user" style="padding-right: 5px;"></i> {{ $servicesdata->service_passenger_count }}</span> <span class="m-l-md "><i class="fa fa-suitcase" style="padding-right: 5px;"></i> {{ $servicesdata->service_luggage_count }}</span></div><br><i class="fa fa-car" style="padding-right: 5px;"></i> {{ $servicesdata->service_discription }}<p></p>
                            </div>
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary m-r-sm" data-id="{{ $servicesdata->id }}" id="edit_service">
                                <i class="fa fa-edit"></i> Edit</button>
                             <button onclick="deleteConfirmation({{ $servicesdata->id }})" class="btn btn-danger m-l-sm"><i class="fa fa-trash"></i> Delete</button></div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- end ngRepeat: cartype in vm.carTypes track by cartype.guid -->
                    @endforeach
                </div>
            </car-classes>
        </div>


<!-- add new services model show -->


<div class="modal-lg modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    <div class="modal-content" uib-modal-transclude="">
        <div class="modal-header ng-scope"><button type="button" ng-click="vm.cancel()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="srviceCrudModal"></h4>
        </div>
        <div class="modal-body ng-scope">
            <edit-car-class guid="vm.guid" website-guid="vm.websiteGuid" on-finish="vm.onComponentFinished(result);" class="ng-isolate-scope">
                <form id="services_save_form" novalidate="" class="ng-pristine ng-invalid ng-invalid-required">
                     @csrf
                      <div class="row">
                        <div class="col-md-2 col-xs-12">
                      <img id="serviceblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
                 <div class="myfileupload-buttonbar ">
               <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="serviceimg"  accept="image/*" class="btn btn-success" onchange="document.getElementById('serviceblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
      </div>
      </div>
      </div>
      </div>
              <div class="col-md-10 col-xs-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group" ><label>Name</label>
                                        <div class="input-group">
                                            <input name="servicename"  id="service_name" ng-model="vm.carTypeModel.name" type="text" placeholder="Economy Class" class="form-control" required="">
                                             <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                <i class="fa fa-globe" aria-hidden="true"></i></button></span></div>
                                        <div class="help-block ng-hide" ng-show="vm.submitted &amp;&amp; vm.carTypeDetailsForm.name.$error.required">Car class name is required.</div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group" ng-class="{'field-changed' : !vm.carTypeDetailsForm.sortIndex.$pristine, 'has-error': vm.submitted &amp;&amp; vm.carTypeDetailsForm.sortIndex.$error.required }"><label>Sort Index</label> 
                                    <input name="sortIndex" id="sort_index" type="text" 
                                    placeholder="Car type index for sorting" class="form-control" required="">
                                        <div class="help-block ng-hide">Car class sort index is required.</div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="service_id" name="service_id">
                                    <div class="form-group hidden"><label>I18 Id</label> <input name="i18Id"  type="text" placeholder="Internationalize id" class="form-control"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"><label>Max passenger count:</label> <input type="text" id="service_passenger_count" name="numberOfPassengers" placeholder="3" class="form-control" required="">
                                        <div class="help-block ng-hide">Number of passengers is required.</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><label>Max luggage count</label> <input type="text" id="service_luggage_count" name="numberOfLuggages"  placeholder="3" class="form-control" required="">
                                        <div class="help-block">Max luggage count is required.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label>Description</label>
                                <div class="input-group"><input name="equivalent" type="text" id="service_discription" placeholder="BMW seria 3, Audi A4 or equivalent" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" required=""> <span class="input-group-btn"><button class="btn btn-default" type="button" ng-click="vm.showI18NForCarEquivalent()"><i class="fa fa-globe" aria-hidden="true"></i></button></span></div>
                                <div class="help-block ng-hide" ng-show="vm.submitted &amp;&amp; vm.carTypeDetailsForm.equivalent.$error.required">Equivalent cars description is required.</div>
                            </div>
                            <div class="form-group"><label>Booking.com Category</label><select name="bookingDotComCategory" class="form-control">
                                    <option value="? undefined:undefined ?" selected="selected"></option>
                                    <option value="null">Not Mapped</option>
                                    <option value="STANDARD">Standard - Standard class saloon/sedan with space for 4 passengers and 2 luggage</option>
                                    <option value="EXECUTIVE">Executive - Executive class saloon/sedan with space for 4 passengers and 3 luggage</option>
                                    <option value="EXECUTIVE_PEOPLE_CARRIER">Executive People Carrier - Carrier/minivan with space for 8 passengers and 5 luggage</option>
                                    <option value="LUXURY">Luxury - Luxury class saloon/sedan with space for 4 passengers and 3 luggage</option>
                                    <option value="PEOPLE_CARRIER">People Carrier - Standard class people carrier/minivan with space for 6 passengers and 3 luggage</option>
                                    <option value="LARGE_PEOPLE_CARRIER">Large People Carrier - Standard class people carrier/minivan with space for 8 passengers and 5 luggage</option>
                                    <option value="MINIBUS">Minibus - Standard class people carrier/minivan with space for 16 passengers and 5 luggage</option>
                                </select><a href="https://taxisuppliers-support.booking.com/hc/en-us/articles/4403664677393-What-types-of-vehicles-do-you-support-" target="_blank">More Info</a></div>
                        </div>
                    </div>
                    <div class="row text-center m-t-lg"><button type="submit"  class="btn btn-primary m-r-md" ng-click="vm.saveCarClass()">
                        <i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.sending"></i> 
                        <i class="fa fa-save"></i> <span id="formbutton"></span></button> <button type="submit" data-dismiss="modal" class="btn btn-danger m-l-md" ng-click="vm.cancelChanges()"><i class="fa fa-times"></i> Cancel</button></div>
                </form>
            </edit-car-class>
        </div>
    </div>
</div>
</div>


@include('backendassets.footer')   
<script>
$(document).ready(function(){
$( 'form#services_save_form' ).submit(function(event){
 event.preventDefault();
var formData = new FormData(this);
$.ajax({            
    url: '{{ route('servicessave') }}',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'JSON',
    success: function (results) {      
          $('#services_save_form').trigger("reset");
          $('#myModal').modal('hide');
       if (results.success === true) {   
        swal("Done!", results.message, "success");
        setTimeout(function() {
    location.reload();
}, 3000);
        }
        else{
        swal("Error!", results.message, "error");   
        }
      },
      error: function (data) {
          console.log('Error......');
      }
}); 
})
}
);
</script>
<script type="text/javascript">
    function deleteConfirmation(id)
 {
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
                    // routes
                    url: "{{url('deleteservices')}}/" + id,
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

<!-- edit -->
<script type="text/javascript">$(document).ready(function () {

$('#new-service').click(function () {
$('#myModal').modal('show');
$('#services_save_form').trigger("reset");
$('#srviceCrudModal').html("Add New service");
$('#formbutton').html("Save");
});

$('body').on('click', '#edit_service', function () {
var id = $(this).data('id');
$.get('{{url('editservices')}}/'+id, function (data) {
$('#srviceCrudModal').html("Edit Services");
$('#formbutton').html("Update");
$('#myModal').modal('show');
$('#service_id').val(data.id);
$('#sort_index').val(data.sort_index);
$('#service_name').val(data.service_name);
$('#service_passenger_count').val(data.service_passenger_count);
$('#service_luggage_count').val(data.service_luggage_count);
$('#service_discription').val(data.service_discription);
$('#serviceblah').attr('src', '{{ asset("public/images/fleet/service/") }}/'+data.service_photo);
})
});
});
</script>


