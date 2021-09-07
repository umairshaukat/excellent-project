@include('backendassets.header')  
<div id="wrapper" class="clients">

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
                        <form action="/account/logoff/"  class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="MSsjOaBcjfjR_6M01mRE1F9QwKeSjA4USXgRdg9M2nGpDHTcWCNV3XxJjl6CWA70y0Ps6l5aIm7bDZ_JBEKSWS0duDNZibtquejx3xFDRvsZwOSB7g8AG3BWxdY0jUU6BGg_nA2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-9">
                <h2>Company Cars</h2>
                <ol class="breadcrumb inline-block">
                    <li><a href="/">Home</a></li>
                    <li class="active"><strong>Company Cars</strong></li>
                </ol>
            </div>
            <div class="col-md-3">
                <button  class="margin-top-30 pull-right btn btn-primary"  data-toggle="modal" id="new-owncar"><i class="fa fa-plus m-r-xs"> </i>Add new car</button>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <fleet id="fleet" website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
                <div class="row" ng-show="vm.cars.length <= 0">
                    <div class="col-sm-12 text-center">
                        <h1>No cars available. Use top right button to add.</h1>
                    </div>
                </div>
                <div class="row drivers-grid">
                    <!-- ngRepeat: car in vm.cars track by car.id -->

                    
                    @foreach($owncar as $owncardata)
                    <div class="col-lg-4 ng-scope" ng-repeat="car in vm.cars track by car.id">
                        <div class="contact-box">
                            <div class="col-sm-4">
                                <div class="text-center"><img src="{{URL::to('/')}}/public/images/fleet/logbookimg/{{ $owncardata->owncar_log_book_photo }}" alt="image" style="margin: 10px auto;" class="m-t-xs img-responsive driver-image">
                                    <h3 class="bold m-t-none ng-binding">{{ $owncardata->owncar_class }}</h3>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3 class="nomargin-bottom"><strong >{{ $owncardata->owncar_car_no_plate }}</strong></h3>
                                <p class="driver-summary"></p>
                                <div >Brand: {{ $owncardata->owncar_brand }}</div>
                                <div >Model: {{ $owncardata->owncar_model }}</div>
                                <div >Color: {{ $owncardata->owncar_color }}</div>
                                <div class="m-t-sm"><span class="m-r-md ng-binding"><i class="fa fa-user" style="padding-right: 5px;"></i> 3</span> <span class="m-l-md ng-binding"><i class="fa fa-suitcase" style="padding-right: 5px;"></i> 3</span></div>
                                <p></p>
                            </div>
                            <div class="col-md-12 text-right"><button  id="edit_owncar" data-id="{{ $owncardata->id }}" class="btn btn-primary m-r-sm"><i class="fa fa-edit"></i> Edit</button>
                             <button  onclick="deleteConfirmation( {{ $owncardata->id }})" class="btn btn-danger m-l-sm"><i class="fa fa-trash"></i> Delete</button></div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- end ngRepeat: car in vm.cars track by car.id -->
                    @endforeach
                </div>
            </fleet>
        </div>



<!-- add new car model show -->



<div class="modal-lg modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <div class="modal-header ng-scope">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="owncarCrudModal">Edit Service</h4>
    </div>
    <div class="modal-body">
      <edit-car guid="vm.guid" website-guid="vm.websiteGuid" on-finish="vm.onComponentFinished(result);">
        <form id="owncar_save_form"  enctype="multipart/form-data" method="post">
             @csrf
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="owncar-id" name="owncar_id">
                    <label>Car class</label>
                    <select class="
                        form-control" id="car-class" name="selectedCarClass"  required="">
                   
                      <option label="Sedan Concept" value="Sedan Concept">
                        Sedan Concept
                      </option>
                      <option label="Business" value="Business">
                        Business
                      </option>
                      <option label="Business Class Van" value="Business Class Van">
                        Business Class Van
                      </option>
                      <option label="SUV" value="SUV">SUV</option>
                      <option label="Coaches" value="Coaches">Coaches</option>
                      <option label="Economical Mini Bus" value="Economical Mini Bus">
                        Economical Mini Bus
                      </option>
                      <option label="suv bali" value="suv bali">
                        suv bali
                      </option>
                      <option label="Private van Bali" value="Private van Bali">
                        Private van Bali
                      </option>
                      <option label="Sedan  Bali" value="Sedan Bali">
                        Sedan Bali
                      </option>
                      <option label="private bus bali" value="private bus bali">
                        private bus bali
                      </option>
                      <option label="Private bus" value="Private bus">
                        Private bus
                      </option>
                      <option label="Avanza" value="Avanza">Avanza</option>
                      <option label="Economical Sedan" value="Economical Sedan">
                        Economical Sedan
                      </option>
                      <option label="Standard Suv" value="Standard Suv">
                        Standard Suv
                      </option>
                      <option label="Mid Size Private Van" value="Mid Size Private Van">
                        Mid Size Private Van
                      </option>
                      <option label="Private Van For more than 6 Person" value="Private Van For more than 6 Person">
                        Private Van For more than 6 Person
                      </option>
                      <option label="coaster bus" value="coaster bus">
                        coaster bus
                      </option>
                    </select>
                    <div class="help-block">
                      Please select car class.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Car Brand</label>
                    <input name="carBrand" type="text" id="car-brand" placeholder="ex: Mercedes-Benz" class="form-control"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Car Model</label>
                    <input name="carModel" type="text" id="car-model" placeholder="ex: S Class Lux" class="
                        form-control"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Car Color</label>
                    <input name="carColor" type="text" id="car-color" placeholder="ex: Black" class="
                        form-control"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Car reg no.</label>
                    <input name="carRegNo" type="text" id="car-reg-no" placeholder="ex: YD16DHA" class="
                        form-control" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2>Car documents:</h2>
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <edit-driver-document class="m-t-sm" document-name="'Log book'" document-model="vm.carModel.carLogBook">
                <div class="row m-b-xl">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <h3>Log book:</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 m-t-xs">
                        <div class="m-t-md" style="display: inline-block; position: relative;">
                          <img style="max-height: 200px;" class="img-responsive"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group" >
                          <input type="date" class="
                              form-control" id="logexpdate" name="logdocexpDate" placeholder="Expiration date" />
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" class="
                            form-control" id="logdocno" name="logdocumentNumber" placeholder="Document number" autocomplete="off"/>
                      </div>
                      <div class="col-md-2 col-xs-12">
                      <img id="logblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="logbookimg"  accept="image/*" class="btn btn-success" onchange="document.getElementById('logblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </edit-driver-document>
            </div>
            <div class="col-md-6 col-lg-6">
              <edit-driver-document class="m-t-sm" document-name="'PHV Licence'" document-model="vm.carModel.carPhvLicence">
                <div class="row m-b-xl">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <h3 >PHV Licence:</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 m-t-xs">
                        <div class="m-t-md" style="display: inline-block; position: relative;">
                          <img style="max-height: 200px;" class="img-responsive" />
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group" >
                        <input type="date" class="
                              form-control" id="pvcexpdate" name="phvdocumentDate" placeholder="Expiration date" />
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" class="form-control" id="pvcdocno" name="phvdocumentNumber" placeholder="Document number" autocomplete="off"/>
                      </div>
                       <div class="col-md-2 col-xs-12">
                      <img id="phvblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="phvimg"  accept="image/*" class="btn btn-success" onchange="document.getElementById('phvblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </edit-driver-document>
            </div>
          </div>
          <div class="row m-t-md">
            <div class="col-md-6 col-lg-6">
              <edit-driver-document class="m-t-sm ng-isolate-scope" document-name="'MOT Licence'" document-model="vm.carModel.carMotLicence">
                <div class="row m-b-xl">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <h3 >MOT Licence:</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 m-t-xs">
                        <div class="m-t-md" style="display: inline-block; position: relative;">
                          <img style="max-height: 200px;" class="img-responsive" />
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group" >
                        <input type="date" class="
                              form-control" id="motexpdate" name="motdocumentDate" placeholder="Expiration date" />
                        </div>
                        </div>
                      <div class="col-md-5">
                        <input type="text" class="form-control" id="motdocno" name="motdocumentNumber" placeholder="Document number" autocomplete="off"/>
                      </div>
                       <div class="col-md-2 col-xs-12">
                      <img id="motblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="motimg"  accept="image/*" class="btn btn-success" onchange="document.getElementById('motblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </edit-driver-document>
            </div>
            <div class="col-md-6 col-lg-6">
              <edit-driver-document class="m-t-sm" document-name="'Car insurance'" document-model="vm.carModel.carInsurance">
                <div class="row m-b-xl">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <h3 >Car insurance:</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 m-t-xs">
                        <div class="m-t-md" style="display: inline-block; position: relative;">
                          <img style="max-height: 200px;" class="img-responsive" />
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group" >
                        <input type="date" id="insexpdate" class="
                              form-control" name="insdocumentDate" placeholder="Expiration date" />
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" class="form-control" id="insdocno" name="insdocumentNumber" placeholder="Document number" autocomplete="off"/>
                      </div>
                       <div class="col-md-2 col-xs-12">
                      <img id="insblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="insimg"  accept="image/*" class="btn btn-success" onchange="document.getElementById('insblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </edit-driver-document>
            </div>
          </div>
          <div class="row text-center m-t-lg">
            <button type="submit" class="btn btn-primary m-r-sm">
              <i class="fa fa-spinner fa-pulse fa-fw"></i>
              <i class="fa fa-save"></i> <span id="formbutton">Save</span>
            </button>
            <button type="submit" class="btn btn-danger m-l-sm">
              <i class="fa fa-times"></i> Cancel
            </button>
          </div>
        </form>
      </edit-car>
    </div>
  </div>
</div>
</div>

@include('backendassets.footer')   



<script>
    $(document).ready(function(){
$( 'form#owncar_save_form' ).submit(function(event){
 event.preventDefault();
var formData = new FormData(this);
$.ajax({            
    url: '{{ route('owncarSave') }}',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'JSON',
    success: function (results) {      
          $('#owncar_save_form').trigger("reset");
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
                    url: "{{url('deleteowncar')}}/" + id,
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

$('#new-owncar').click(function () {
$('#myModal').modal('show');
$('#owncar_save_form').trigger("reset");
$('#owncarCrudModal').html("Add New car");
$('#formbutton').html("Save");
});

$('body').on('click', '#edit_owncar', function () {
var id = $(this).data('id');
$.get('{{url('editowncar')}}/'+id, function (data) {
$('#owncarCrudModal').html("Edit Car");
$('#formbutton').html("Update");
$('#myModal').modal('show');
$('#owncar-id').val(data.id);
$('#insexpdate').val(data.owncar_car_insurance_exp_date);
$('#motexpdate').val(data.owncar_mot_licence_exp_date);
$('#logexpdate').val(data.owncar_log_book_exp_date);
$('#pvcexpdate').val(data.owncar_phv_licence_exp_date);
$('#pvcdocno').val(data.owncar_phv_licence_doc_no);
$('#insdocno').val(data.owncar_car_insurance_doc_no);
$('#motdocno').val(data.owncar_mot_licence_doc_no);
$('#logdocno').val(data.owncar_log_book_doc_no);
$('#car-class').val(data.owncar_class);
$('#car-brand').val(data.owncar_brand);
$('#car-model').val(data.owncar_model);
$('#car-color').val(data.owncar_color);
$('#car-reg-no').val(data.owncar_car_no_plate);
$('#logblah').attr('src', '{{ asset("public/images/fleet/logbookimg/") }}/'+data.owncar_log_book_photo);
$('#motblah').attr('src', '{{ asset("public/images/fleet/Mot/") }}/'+data.owncar_mot_licence_photo);
$('#phvblah').attr('src', '{{ asset("public/images/fleet/PHV/") }}/'+data.owncar_phv_licence_photo);
$('#insblah').attr('src', '{{ asset("public/images/fleet/Insurance/") }}/'+data.owncar_car_insurance_photo);
})
});
});
</script>