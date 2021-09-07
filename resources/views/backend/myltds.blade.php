



@include('backendassets.header')  
<div id="wrapper" class="companies">
@include('backendassets.sidebar')


   <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 804.109px;">

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
                        <form action="/account/logoff/" class="navbar-right ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="YmjgDLB60a4VCbzeBdEiCd2k9-r-cZGTmDQRVlXjaJf9_1UnHr69f4mb6pNxltQBtbsN35QfbLgfETKdMBl1N5PO-vJLbS40I-_Q3L9AUIhPG4omQzac-T44PWj8bwYq4922pQ2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-10">
                <h2>Websites</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        <strong>Companies</strong>
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <button id="new-myltds" class="margin-top-30 pull-right btn btn-primary" data-toggle="modal" ><i class="fa fa-plus m-r-xs"> </i>Add Company</button>
            </div>
        </div>


        <div class="wrapper wrapper-content">
            <div class="ibox">
                <div class="ibox-content">
                    <companies-list id="applicationCompanies" website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
                        
                    @foreach($myltds as $myltdsdata)
                        <table class="table table-hover">
                            <tbody>
                                <!-- ngRepeat: company in vm.companies track by company.guid -->
                                <tr ng-repeat="company in vm.companies track by company.guid" class="ng-scope">
                                    <td class="ng-binding">{{ $myltdsdata->company_name }}</td>
                                    <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" id="edit_myltds" data-id="{{ $myltdsdata->id }}"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                                     <button onclick="deleteConfirmation({{ $myltdsdata->id}})" class="btn btn-danger btn-sm m-l-xs" ><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                </tr>

                            </tbody>
                        </table>
                        @endforeach

                    </companies-list>
                </div>
            </div>
        </div>



<!-- add new company model  -->

<div class="modal-lg modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    <div class="modal-content" uib-modal-transclude="">
        <modal-component dismiss="vm.dismiss()" title-expr="vm.modalTitle">
            <div class="modal-header"><button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myltdsCrudModal"></h4>
            </div>
            <div class="modal-body">
                <ng-transclude>
                    <edit-company website-guid="vm.websiteGuid" company-guid="vm.companyGuid" dismiss="vm.dismiss()" saved="vm.saved(item)">
                        <form id="myltds_save_form" name="vm.companyDetailsForm" class="form-horizontal" novalidate="">
                             @csrf
                            <div class="row">
                                <input type="text" name="myltds_id" id="myltds-id">
                                <h3>Company details:</h3>
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input name="companyname" id="company_name" type="text" placeholder="Ex: FRANK CAR HIRE LIMITED or Exec Chauffeur Ltd." class="form-control"> <small>This will be company name displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Street Address</label>
                                    <div class="col-sm-10"><input name="companystreetAddress" id="company_street_address"  type="text" placeholder="Ex: 566 CHISWICK HIGH ROAD, CHISWICK PARK" class="form-control"> <small>This will be street address displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group" ><label class="col-sm-2 control-label">Additional Address</label>
                                    <div class="col-sm-10"><input name="companyadditionalAddress" id="company_additional_address"  type="text" placeholder="Ex: OFFICE 129, BUILDING 3" class="form-control"> <small>This will be street address line 2 displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10"><input name="companycity" id="cmpany_city" type="text" placeholder="Ex: London" class="form-control"> <small>This will be city name displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Zip Code</label>
                                    <div class="col-sm-10"><input name="companyzipCode" id="company_zip_code" type="text" placeholder="Ex: UB 100 DH" class="form-control"> <small>This will be zip code address part displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10"><input name="companycountry" id="company_coutry" type="text" placeholder="Ex: OFFICE 129, BUILDING 3" class="form-control"> <small>This will be country name displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Company phone</label>
                                    <div class="col-sm-10"><input name="companyphone" id="company_phone" type="text" placeholder="Ex: +44 (0) 189 585 0230" class="form-control"> <small>Company contact phone number displayed on invoice.</small></div>
                                </div>
                                <hr>
                                <h3>VAT details:</h3>
                                <div class="form-group"><label class="col-sm-2 control-label">Vat number</label>
                                    <div class="col-sm-10"><input name="vatNumber" id="vat_number" type="text" placeholder="Ex: GB 282547262" class="form-control"> <small>Your company vat number displayed on customer invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">VAT Percentage</label>
                                    <div class="col-sm-10"><input name="vatPercentage" id="vat_percentage" type="text" placeholder="Ex: 20 for GB" class="form-control"> <small>Vat percentage in your country used to compute invoice.</small></div>
                                </div>
                                <hr>
                                <h3>Bank payment details:</h3>
                                <div class="form-group"><label class="col-sm-2 control-label">Bank Account Name</label>
                                    <div class="col-sm-10"><input name="bankaccountName" id="bank_account_name" type="text" placeholder="Ex: Exec Chauffeur Ltd." class="form-control"> <small>Company bank account name for allowing bank payments displayed on invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Bank Name</label>
                                    <div class="col-sm-10"><input name="bankName" id="bank_name" type="text" placeholder="Ex: HSBC London" class="form-control"> <small>Company bank name for allowing bank payments displayed on invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Account IBAN</label>
                                    <div class="col-sm-10"><input name="bankiban" id="bank_account_iban" type="text" placeholder="Ex: GB92 NWBK 0000 0861 3640 90" class="form-control"> <small>Company account IBAN number for allowing bank payments displayed on invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Account Number</label>
                                    <div class="col-sm-10"><input name="bankaccountNo" id="bank_account_number" type="text" placeholder="Ex: 4130000 (for UK use only)" class="form-control"> <small>Company account number for allowing bank payments displayed on invoice.</small></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Account Short Code</label>
                                    <div class="col-sm-10"><input name="bankshortCode" id="bank_account_short_code" type="text" placeholder="Ex: 60-70-80 (for UK use only)" class="form-control"> <small>Company account short code for allowing bank payments displayed on invoice.</small></div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12"><button class="btn btn-primary m-r-sm" ><span id="formbutton"></span></button> 
                                <button class="btn btn-danger m-l-sm" data-dismiss="togel">Close dialog</button></div>
                            </div>
                        </form>
                    </edit-company>
                </ng-transclude>
            </div>
        </modal-component>
    </div>
</div>
</div>


@include('backendassets.footer')   
<script>
$(document).ready(function(){
$( 'form#myltds_save_form' ).submit(function(event){
 event.preventDefault();
var formData = new FormData(this);
$.ajax({            
    url: '{{ route('myltdssave') }}',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'JSON',
    success: function (results) {      
          $('#myltds_save_form').trigger("reset");
          $('#myModal').modal('hide');
       if (results.success === true) {   
        swal("Done!", results.message, "success");  setTimeout(function() {
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
                    url: "{{url('deletemyltds')}}/" + id,
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

$('#new-myltds').click(function () {
$('#myModal').modal('show');
$('#myltds_save_form').trigger("reset");
$('#myltdsCrudModal').html("Add new company for invoicing");
$('#formbutton').html("Save changes");
});

$('body').on('click', '#edit_myltds', function () {
var id = $(this).data('id');
$.get('{{url('editmyltds')}}/'+id, function (data) {
$('#myltdsCrudModal').html("Midas group Services Pte Ltd - invoice details");
$('#formbutton').html("Update");
$('#myModal').modal('show');
$('#myltds-id').val(data.id);
$('#bank_account_iban').val(data.bank_account_iban);
$('#bank_account_name').val(data.bank_account_name);
$('#bank_account_number').val(data.bank_account_number);
$('#bank_account_short_code').val(data.bank_account_short_code);
$('#bank_name').val(data.bank_name);
$('#cmpany_city').val(data.cmpany_city);
$('#company_additional_address').val(data.company_additional_address);
$('#company_coutry').val(data.company_coutry);
$('#company_name').val(data.company_name);
$('#company_phone').val(data.company_phone);
$('#company_street_address').val(data.company_street_address);
$('#company_zip_code').val(data.company_zip_code);
$('#vat_number').val(data.vat_number);
$('#vat_percentage').val(data.vat_percentage);
})
});
});
</script>