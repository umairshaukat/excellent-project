@include('backendassets.header')
<div id="wrapper" class="clients">

    @include('backendassets.sidebar')
    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 602.109px;">

        <!-- Top Navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li><span>Midas Group Services Pte Ltd</span></li>

                    <li>

                        <a><i class="fa fa-sign-out"></i> Log out</a>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Accounts</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        <strong>Clients</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <button class="margin-top-30 pull-right btn btn-primary" data-toggle="modal" id="new-client"><i class="fa fa-plus m-r-xs"> </i>Add client</button>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="ibox">
                <div class="ibox-content">
                    <application-clients website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" id="applicationClients" class="ng-isolate-scope">
                        <div class="input-group">
                            <input type="text" placeholder="Search" class="input form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn btn-primary"><i class="fa fa-search"></i> Search</button></span>
                        </div>
                        <div class="clients-list">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody>

                                        @foreach($clients as $client)
                                        <tr ng-repeat="user in vm.users track by user.id" class="ng-scope">
                                            <td class="ng-binding">{{ $client->first_name}} {{ $client->last_name}}</td>
                                            <td class="ng-binding"></td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">{{ $client->email}}</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right">
                                                <a href="{{route('clientsetprice', $client->id)}}" class="btn btn-primary m-r-xs">
                                                    <i class="fa fa-dollar" aria-hidden="true"></i>
</a>

                                                <button class="btn btn-primary m-r-xs" id="edit-client" data-toggle="modal" data-id="{{ $client->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                                <button class="btn btn-primary m-r-xs"><i class="fa fa-key" aria-hidden="true"></i></button>
                                                <button class="btn btn-danger m-l-xs" onclick="deleteConfirmation({{ $client->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </application-clients>
                </div>
            </div>
        </div>



        <!-- add new clients model -->
        {{--
                        <form id="checkpage">
                            <input type="text" name="name">
                            <input type="submit" name="submit">
                         </form> --}}

        <div class="modal-lg modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" uib-modal-transclude="">
                    <div class="modal-header ng-scope">
                        <button type="button" data-dismiss="modal" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="customerCrudModal"></h4>
                    </div>
                    <div class="modal-body ng-scope">

                        <form class="form-horizontal" id="form_client_save">

                            @csrf
                            <input type="text" name="client_id" id="client_id">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="text" placeholder="john@company.com" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">Phone No.</label>
                                        <div class="col-sm-10"><input type="text" name="phoneNumber" placeholder="+44749093345" class="form-control phone_number"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10"><input name="firstName" type="text" id="first_name" placeholder="John" class="form-control "></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10"><input type="text" name="lastName" id="last_name" placeholder="Smith" class="form-control"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">Discount (%)</label>
                                        <div class="col-sm-10"><input type="text" id="discount" name="discountPercentage" placeholder="Ex: 10" class="form-control">
                                            <div class="m-t-sm">This client will get <b>% discount</b> at each booking made in admin dashboard.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row field-changed"><label class="col-sm-2 control-label">Credit</label>
                                        <div class="col-sm-10"><span class="m-r-md">0 USD</span> <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row field-changed">
                                        <label class="col-sm-2 control-label">Salutation</label>
                                        <div class="checkbox checkbox-inline">
                                            <div class="iradio_minimal-yellow">
                                                <input type="radio" id="userDetailsMrSalutation" name="userDetailsSalutation" value="Mr.">
                                            </div>
                                            <label for="userDetailsMrSalutation">Mr.</label>
                                        </div>

                                        <div class="checkbox checkbox-inline">
                                            <div class="iradio_minimal-yellow">
                                                <input type="radio" id="userDetailsMsSalutation" name="userDetailsSalutation" value="Ms.">
                                            </div>
                                            <label for="userDetailsMsSalutation">Ms.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row"><label class="col-sm-2 control-label">Language</label>
                                        <div class="col-sm-10">
                                            <select id="Language" name="culture" class="form-control">
                                                <option value="en-GB">English</option>
                                                <option value="pl">Polish</option>
                                                <option value="de-CH">German - Switzerland</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label class="control-label text-left">Ask client to pay by card</label>

                                    <div class="radio">
                                        <label class="checkboxLabel">
                                            <div class="iradio_minimal-yellow">
                                                <input type="radio" value="isCreated" name="creditCardSetting">
                                            </div>
                                            <span class="m-l-sm">When booking is created</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="checkboxLabel">
                                            <div class="iradio_minimal-yellow">
                                                <input type="radio" value="paybyAccount" name="creditCardSetting">
                                            </div>
                                            <span class="m-l-sm">Never. Client will pay by account</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="checkboxLabel">
                                            <div class="iradio_minimal-yellow">
                                                <input type="radio" value="isAssigned" name="creditCardSetting">
                                            </div>
                                            <span class="m-l-sm">After driver is assigned</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group"><label>Default Currency</label><select id="currency" name="currency" class="form-control">
                                                    <option value="EUR">EUR - €</option>
                                                    <option value="USD" selected="selected">USD - $</option>
                                                    <option value="CAD">CAD - $</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="PLN">PLN - zł</option>
                                                    <option value="GBP">GBP - £</option>
                                                    <option value="AUD">AUD - $</option>
                                                    <option value="NZD">NZD - $</option>
                                                    <option value="SGD">SGD - $</option>
                                                    <option value="THB">THB - ฿</option>
                                                    <option value="MYR">MYR - RM (Malaysia ringgit)</option>
                                                    <option value="IDR">IDR (Indonesian rupiah) - Rp</option>
                                                    <option value="VND">VND - ₫</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group"><label class="control-label">Booking Price</label>
                                                <div class="checkbox"><label class="checkboxLabel">
                                                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                                                        <input type="checkbox" name="showInstantPriceWhenBooking" value="show" id="showInstantPriceWhenBooking" style="position: absolute; opacity: 0;"></div> <i></i> <span class="m-l-sm">Show instant price when client is booking.</span>
                                                    </label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="checkbox"><label class="checkboxLabel weight-400">
                                                                <div class="icheckbox_minimal-yellow" style="position: relative;"><input id="hidePriceFromCustomers" name="hidePriceFromCustomer" value="hide_price" type="checkbox" style="position: absolute; opacity: 0;"></div> <i></i> <span class="m-l-xs">Never show booking price to the customer in booking detail page &amp; emails</span>
                                                            </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-md">
                                <div class="col-md-6">
                                    <div class="checkbox-inline"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow">
                                                <input name="overwriteDriverAssigned" type="checkbox" class="overwriteDriverAssigned">
                                            </div>
                                            <label class="control-label">Overwrite website settings - When driver is assigned:</label>
                                        </label></div>
                                    <br>
                                    <div class="checkbox"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow disabled" style="position: relative;">
                                                <input name="automaticallySendDriverInfoToCustomerByEmail" type="checkbox" disabled="disabled" class="automaticallySendDriverInfoToCustomerByEmail" value="1" style="position: absolute; opacity: 0;">
                                            </div> <i></i>
                                            <span class="m-l-xs">Automatically send driver details to the client by Email</span>
                                        </label></div>
                                    <div class="checkbox"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow disabled" style="position: relative;"><input name="automaticallySendDriverInfoToCustomerBySms" type="checkbox" disabled="disabled" class="automaticallySendDriverInfoToCustomerBySms" value="1" style="position: absolute; opacity: 0;"></div> <i></i> <span class="m-l-xs">Automatically send driver details to the client by SMS</span>
                                        </label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox-inline"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow" style="position: relative;"><input name="overwriteDriverArrived" class="overwriteDriverArrived" type="checkbox" style="position: absolute; opacity: 0;"></div> <i></i> <label class="control-label">Overwrite website settings - When driver arrived at pickup location:</label>
                                        </label></div><br>
                                    <div class="checkbox"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow disabled" style="position: relative;">
                                                <input name="automaticallySendDriverArrivedEmail_by_gps" class="automaticallySendDriverArrivedEmail" type="checkbox" disabled="disabled" style="position: absolute; opacity: 0;">
                                            </div> <i></i> <span class="m-l-xs">Automatically send driver GPS location to the client by Email</span>
                                        </label></div>
                                    <div class="checkbox"><label class="checkboxLabel weight-400">
                                            <div class="icheckbox_minimal-yellow disabled" style="position: relative;">
                                                <input name="automaticallySendDriverArrivedSms_by_gps" class="automaticallySendDriverArrivedSms" type="checkbox" disabled="disabled">
                                            </div> <i></i> <span class="m-l-xs">Automatically send driver GPS location to the client by SMS</span>
                                        </label></div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row"><label class="col-sm-2 control-label">Invoice Details</label>
                                <div class="col-sm-10">
                                    <div class="radio"><label class="checkboxLabel">
                                            <div class="iradio_minimal-yellow checked" style="position: relative;"><input type="checkbox" name="personal" id="personalinvoice" class="personalAccount"></div> <i></i> <span class="m-l-sm">Personal account</span>
                                        </label></div>
                                    <div class="radio"><label class="checkboxLabel">
                                            <div class="iradio_minimal-yellow" style="position: relative;"><input type="checkbox" value="true" name="isCompany" id="companyinvoice" class="isCompanyInvoice" style="position: absolute; opacity: 1;"></div> <i></i> <span class="m-l-sm">Company details (for invoice)</span>
                                        </label></div>
                                </div>
                            </div>
                            <input type="text" name="company_id" id="company_id">
                            <div class="form-group row"><label class="col-sm-2 control-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input name="companyName" id="company_name" type="text" placeholder="Private Company Ltd" class="companyName form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">Vat Number</label>
                                <div class="col-sm-10"><input type="text" id="vat_number" name="vatNumber" placeholder="GB999 9999 73" class="form-control vatNumber" disabled="disabled"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">Street Address</label>
                                <div class="col-sm-10"><input name="companyStreetAddress" id="street_address" type="text" placeholder="10 Oxford St" class="form-control companyStreetAddress" disabled="disabled"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">Additional address</label>
                                <div class="col-sm-10"><input type="text" id="additional_address" name="companyAdditionalAddress" placeholder="Hammersmith" class="form-control companyAdditionalAddress" disabled="disabled"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">Zip Code</label>
                                <div class="col-sm-10"><input type="text" id="zip_code" name="companyZipCode" placeholder="W1D 1BS" class="form-control companyZipCode" disabled="disabled"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10"><input type="text" id="city" name="companyCity" placeholder="London" class="form-control companyCity" disabled="disabled"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 control-label">Cost Centre</label>
                                <div class="col-sm-10"><input type="text" id="cost_center" name="costCenter" placeholder="GB06C23MGTX" class="form-control costCenter" disabled="disabled"></div>
                            </div><br>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-save"></i><span id="formbutton"></span></button>
                                    <button class="btn btn-danger m-l-md" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                                </div>
                            </div>
                        </form>
                        <style>
                            .pl-0 {
                                padding-left: 0 !important;
                            }

                            .checkbox label {
                                padding-left: 5px !important;
                            }

                            .text-left {
                                text-align: left;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>

        @include('backendassets.footer')

        <script type="text/javascript">
            $(document).ready(function() {
                $('.overwriteDriverAssigned').change(function() {
                    if ($(this).is(':checked')) {
                        $('.automaticallySendDriverInfoToCustomerBySms').prop('disabled', false);
                        $('.automaticallySendDriverInfoToCustomerByEmail').prop('disabled', false);
                    } else {
                        $('.automaticallySendDriverInfoToCustomerBySms').prop('disabled', true);
                        $('.automaticallySendDriverInfoToCustomerByEmail').prop('disabled', true);
                    }
                })
                $('.overwriteDriverArrived').change(function() {
                    if ($(this).is(':checked')) {
                        $('.automaticallySendDriverArrivedEmail').prop('disabled', false);
                        $('.automaticallySendDriverArrivedSms').prop('disabled', false);
                    } else {
                        $('.automaticallySendDriverArrivedEmail').prop('disabled', true);
                        $('.automaticallySendDriverArrivedSms').prop('disabled', true);
                    }
                })
                $('.isCompanyInvoice').change(function() {
                    if ($(this).is(':checked')) {
                        $('.personalAccount').prop('disabled', true);
                        $('.companyName').prop('disabled', false);
                        $('.vatNumber').prop('disabled', false);
                        $('.companyStreetAddress').prop('disabled', false);
                        $('.companyAdditionalAddress').prop('disabled', false);
                        $('.companyZipCode').prop('disabled', false);
                        $('.companyCity').prop('disabled', false);
                        $('.costCenter').prop('disabled', false);
                        
                        // $('#companyinvoice').prop('checked', true);
                        $('#personalinvoice').prop('checked', false);
                    } else {
                        $('.companyName').prop('disabled', true);
                        $('.personalAccount').prop('disabled', false);
                        $('.vatNumber').prop('disabled', true);
                        $('.companyStreetAddress').prop('disabled', true);
                        $('.companyAdditionalAddress').prop('disabled', true);
                        $('.companyZipCode').prop('disabled', true);
                        $('.companyCity').prop('disabled', true);
                        $('.costCenter').prop('disabled', true);
                        
                        $('#companyinvoice').prop('checked', false);
                    }
                })
            })
        </script>
        <script>
            $(document).ready(function() {

                $('form#form_client_save').submit(function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        url: "{{ url('/addclients ') }}",
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'JSON',
                        success: function(results) {
                            $('#form_client_save').trigger("reset");
                            $('#myModal').modal('hide');
                            if (results.success === true) {
                                swal("Done!", results.message, "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                swal("Error!", results.message, "error");
                            }
                        },
                        error: function(data) {
                            console.log('Error......');
                        }
                    });
                })
            });
        </script>


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
                }).then(function(e) {

                    if (e.value === true) {
                        // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                        $.ajax({
                            type: 'get',
                            url: "{{url('deleteclients')}}/" + id,
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'JSON',
                            success: function(results) {
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

                }, function(dismiss) {
                    return false;
                })
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#new-client').click(function() {
                    $('#myModal').modal('show');
                    $('#form_client_save').trigger("reset");
                    $('#myModal').trigger("reset");
                    $('#customerCrudModal').html("Add New Customer");
                    $('#formbutton').html("Save");
                });

                $('body').on('click', '#edit-client', function() {
                    var id = $(this).data('id');
                    $.get("{{url('editclients')}}/" + id,
                        function(data) {
                            $('#customerCrudModal').html("Edit Client");
                            $('#formbutton').html("Update");
                            $('#myModal').modal('show');
                            $('#client_id').val(data.id);
                            $('#email').val(data.email);
                            $('#Language').val(data.language);
                            $('#currency').val(data.currency);
                            $('.phone_number').val(data.phone_no);
                            $('#address').val(data.address);
                            $('#first_name').val(data.first_name);
                            $('#last_name').val(data.last_name);
                            $('#discount').val(data.discount);
                            $('#account_status').val(data.account_status);
                            $('#additional_address').val(data.additional_address);
                            // $('#booking_price_instant').val(data.booking_price_instant);
                            // $('#booking_price_never_show').val(data.booking_price_never_show);
                            $('#city').val(data.city);
                            $('#company_name').val(data.company_name);
                            $('#company_id').val(data.company_id);
                            $('#cost_center').val(data.cost_center);
                            $('#gender').val(data.gender);
                            $('#payment_method').val(data.payment_method);
                            // $('#send_driver_details_by_email').val(data.send_driver_details_by_email);
                            // $('#send_driver_details_by_sms').val(data.send_driver_details_by_sms);
                            // $('#send_driver_gps_by_email').val(data.send_driver_gps_by_email);
                            // $('#send_driver_gps_by_sms').val(data.send_driver_gps_by_sms);
                            $('#street_address').val(data.street_address);
                            $('#vat_number').val(data.vat_number);
                            $('#zip_code').val(data.zip_code);


                            if(data.booking_price_instant===1){
                            $('#showInstantPriceWhenBooking').prop('checked', true);
                            }
                            // if(data.booking_price_never_show===1){
                            // $('#hidePriceFromCustomers').prop('checked', true);
                            // }
                            $("input[name=creditCardSetting]").val([data.payment_method]).attr("checked",true);
                            $("input[name=userDetailsSalutation]").val([data.gender]).attr("checked",true);
                           
                            if(data.send_driver_gps_by_email===1){
                            $('.automaticallySendDriverArrivedEmail').prop('checked', true);
                            }
                            if(data.send_driver_gps_by_sms===1){
                            $('.automaticallySendDriverArrivedSms').prop('checked', true);
                            }
                            if(data.send_driver_details_by_email===1){
                            $('.automaticallySendDriverInfoToCustomerByEmail').prop('checked', true);
                            }
                            if(data.send_driver_details_by_sms===1){
                            $('.automaticallySendDriverInfoToCustomerBySms').prop('checked', true);
                            }
                            if(data.account_status=="comapny"){
                            $('#companyinvoice').prop('checked', true);
                        $('.personalAccount').prop('disabled', true);
                        $('.companyName').prop('disabled', false);
                        $('.vatNumber').prop('disabled', false);
                        $('.companyStreetAddress').prop('disabled', false);
                        $('.companyAdditionalAddress').prop('disabled', false);
                        $('.companyZipCode').prop('disabled', false);
                        $('.companyCity').prop('disabled', false);
                        $('.costCenter').prop('disabled', false);
                            }else{
                                $('#companyinvoice').prop('checked', false);
                                $('#personalinvoice').prop('checked', true);
                                
                        $('.companyName').prop('disabled', true);
                        $('.personalAccount').prop('disabled', false);
                        $('.vatNumber').prop('disabled', true);
                        $('.companyStreetAddress').prop('disabled', true);
                        $('.companyAdditionalAddress').prop('disabled', true);
                        $('.companyZipCode').prop('disabled', true);
                        $('.companyCity').prop('disabled', true);
                        $('.costCenter').prop('disabled', true);

                            }
                            
                          
                            // $("input[name=automaticallySendDriverInfoToCustomerByEmail]").val([data.send_driver_details_by_email]).attr("checked",true);
                            // $("input[name=automaticallySendDriverInfoToCustomerBySms]").val([data.send_driver_details_by_sms]).attr("checked",true);
                            // $("input[name=automaticallySendDriverArrivedEmail]").val([data.send_driver_gps_by_email]).attr("checked",true);
                            // $("input[name=automaticallySendDriverArrivedSms_by_gps]").val([data.send_driver_gps_by_sms]).attr("checked",true);

                        })
                });
            });
        </script>