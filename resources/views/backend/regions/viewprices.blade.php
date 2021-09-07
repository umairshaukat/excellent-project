@include('backendassets.header')
<div id="wrapper" class="companies">
    @include('backendassets.sidebar')

    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 298px;">

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
                        <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="XwOL044itddFWkvpOevRmwb8vz0XMogeErgxkXiW7vYfSm6WsYBiNtEYa1aOBLCa8_Vzm0wS8QugIpAmepbcpQvsmk51D_aWAQ_O-otLBvuCmLMT3IEKvDnDvWlQP5eLBNyTog2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Prices for region: <b>Phuket International Airport</b></h2>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div>
                                <price-plan-edit website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" region-guid="'dab74d6e-ccbe-488f-8e9a-4ae43253f2b2'" class="ng-isolate-scope">
                                    <form name="vm.pricePlanEditForm" class="form-horizontal ng-pristine ng-valid" ng-show="!vm.isLoading">
                                        <h2 class="m-b-md"><b>General</b></h2>
                                        <div class="row">


                                            <div class="col-md-6 price-plan-form">
                                                <div class="form-inline"><label class="control-label">Base unit:</label> <label class="m-r-sm">
                                                        <div class="iradio_minimal-yellow" style="position: relative;"><input type="radio" icheck="" value="0" data-ng-value="0" ng-model="vm.model.metricUnits" class="ng-pristine ng-untouched ng-valid ng-not-empty" name="3" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Mile
                                                    </label> <label class="m-l-sm">
                                                        <div class="iradio_minimal-yellow checked" style="position: relative;"><input type="radio" icheck="" value="1" data-ng-value="1" ng-model="vm.model.metricUnits" class="ng-pristine ng-untouched ng-valid ng-not-empty" name="4" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Kilometer
                                                    </label></div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                    </form>
                                    <style>
                                        .mileage-prices-list li {
                                            margin: 10px 0;
                                        }

                                        .mileage-prices-list li {
                                            font-size: 13px;
                                            font-weight: bold;
                                        }

                                        .price-plan-form .control-label {
                                            min-width: 100px;
                                            text-align: left;
                                        }
                                    </style>
                                </price-plan-edit>
                            </div>
                            <div class="tabs-container mt-5">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a class="nav-link" aria-controls="tab-1" role="tab" data-toggle="tab" href="#tab-1"> Base Service Pricing</a></li>
                                    <li><a class="nav-link" aria-controls="tab-2" role="tab" data-toggle="tab" href="#tab-2">Surcharges</a></li>
                                    <li><a class="nav-link" aria-controls="tab-3" role="tab" data-toggle="tab" href="#tab-3">Fixed prices</a></li>
                                </ul>


                                <!-- tabs start -->

                                <div class="tab-content">
                                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div>
                                                <div>
                                                    <car-class-prices price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" car-type-guid="'ec16697f-da63-474e-8f2a-19299a7aab12'" class="ng-isolate-scope">
    <form name="vm.carPricesForm" class="form-horizontal">
                                                            <h2 class="m-b-md text-underline ng-binding">Sedan Concept prices</h2>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.minimumTripPrice.$pristine }"><label>Min Trip Price</label> <input class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" name="minimumTripPrice" ng-model="vm.carPrice.minimumTripPrice" type="text" required=""></div>
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.hourlyRate.$pristine }"><label>Hourly Price</label> <input name="hourlyRate" ng-model="vm.carPrice.hourlyRate" type="text" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""></div>
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.minHourlyBookingTime.$pristine }"><label class="m-t-sm">Min Hours To Book</label> <input name="minHourlyBookingTime" ng-model="vm.carPrice.minHourlyBookingTime" type="text" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""></div>
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.maxHourlyBookingTime.$pristine }"><label class="m-t-sm">Max Hours To Book</label> <input name="maxHourlyBookingTime" ng-model="vm.carPrice.maxHourlyBookingTime" type="text" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""></div>
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.meetAndGreetRate.$pristine }"><label class="m-t-sm">Meet And Greet Price</label> <input name="meetAndGreetRate" ng-model="vm.carPrice.meetAndGreetRate" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"></div>
                                                                    <div class="col-sm-6 col-md-6" ng-class="{'field-changed' : !vm.carPricesForm.childSeatRate.$pristine }"><label class="m-t-sm">Child Seat Price</label> <input name="childSeatRate" ng-model="vm.carPrice.childSeatRate" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"></div>
                                                                </div>
            <div class="col-md-8 m-b-sm">
                <h3>Mileage price</h3>
                <div>
                <label class="m-r-sm">Pickup rate</label>
                <input name="pickupRate" ng-model="vm.carPrice.pickupRate" type="text" ng-class="{'field-changed' : !vm.carPricesForm.pickupRate.$pristine }" style="display: inline-block; max-width: 70px" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required="">
                                                    <label class="m-l-sm">then ... 
                <button type="button" class="btn btn-green btn-xs m-l-xl add_field_button">+ Add Next</button></label>
                </div>
                    <ul class="mileage-prices-list">

                    <li><span>First</span>
                    <input style="display: inline-block; max-width: 50px" type="text" class="form-control" value="10">
                    <span style="margin-left: 5px; margin-right: 5px" class="">kms, pickup rate</span>
                    <input style="display: inline-block; max-width: 60px" type="text" class="form-control">
                    <span style="margin-left: 10px; margin-right: 10px">and</span>
                    <input style="display: inline-block; max-width: 60px" type="text" class="form-control" value="1">
                    <span style="margin-left: 10px; margin-right: 10px">per km</span>
                    <button class="btn btn-xs btn-danger m-l-xl"><i class="fa fa-remove"></i>
                    </button>
                    </li>

                        <div class="input_fields_wrap"></div>
                    <li>
                    <span class="ng-binding">Remaining kms at</span>
                    <input style="display: inline-block; max-width: 70px" ng-model="vm.carPrice.perUnitRate" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                    <span style="margin-left: 10px; margin-right: 10px" class="ng-binding">per km</span>
                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                                        </form>
                                                        <style>
                                                            .mileage-prices-list li {
                                                                margin: 10px 0;
                                                            }

                                                            .mileage-prices-list li {
                                                                font-size: 13px;
                                                                font-weight: bold;
                                                            }
                                                        </style>
                                                    </car-class-prices>
                                                    <hr>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div>
                                                <tax-surcharges website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" class="ng-isolate-scope">
                                                    <form class="form-horizontal ng-pristine ng-valid" ng-show="!vm.isLoading">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <h2 class="inline-block">Add State/Government TAX to booking:</h2>
                                                                <p>This will add the specified amount or percentage to booking total value. This include car value + any other extras like (e.g. meet &amp; greet)</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12"><span style="margin-right: 0px;">Add to booking value</span> <span style="margin-left: 0px;">a percentage of <input type="text" class="surcharge-inline-input ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="vm.model.percentage">%</span> <span style="margin-left: 20px;">add fixed value of <input type="text" class="surcharge-inline-input ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="vm.model.fixedValue"></span></div>
                                                            <div class="col-md-12 m-t-sm form-inline"><span class="m-r-md">Show it as an extra item named:</span> <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" readonly="" style="width: 350px;" ng-click="vm.editItemName()" ng-model="vm.model.itemName.summary" placeholder="State tax / VAT"> <button class="btn btn-sm btn-default" ng-click="vm.editItemName()"><i class="fa fa-globe" aria-hidden="true"></i></button></div>
                                                        </div>
                                                        <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                                    </form>
                                                    <style>
                                                        .surchargeDay {
                                                            margin-left: 15px;
                                                        }

                                                        .mileage-prices-list li {
                                                            margin: 10px 0;
                                                        }

                                                        .mileage-prices-list li {
                                                            font-size: 13px;
                                                            font-weight: bold;
                                                        }

                                                        .surcharge-inline-input {
                                                            padding: 3px 5px;
                                                            margin-left: 10px;
                                                            margin-right: 10px;
                                                            width: 60px;
                                                            text-align: right;
                                                        }
                                                    </style>
                                                </tax-surcharges>
                                            </div>
                                            <hr>
                                            <div>
                                                <hourly-surcharges website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" class="ng-isolate-scope">
                                                    <form name="vm.carPricesForm" class="form-horizontal ng-pristine ng-valid" ng-show="!vm.isLoading">
                                                        <input type="text" name="region_id" value="{{ $region->id }}">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <h2 class="text-underline inline-block">Hourly surcharges</h2><button type="button" class="btn btn-sm btn-primary m-l-xl" style="margin-top: -8px;" ng-click="vm.addHourlySurcharge()"><i class="fa fa-plus"></i> Add New</button>
                                                            </div>
                                                        </div><!-- ngRepeat: item in vm.model.hourlySurcharges -->
                                                        <div class="row ng-scope" ng-repeat="item in vm.model.hourlySurcharges">
                                                            <div class="col-md-12 m-t-sm" ng-class="{'m-t-xl': $index > 0, 'm-t-sm': $index == 0}"><span style="margin-right: 10px;">Starting from:</span><select style="min-width: 40px; padding: 3px 5px;" ng-options="item.id as item.label for item in vm.hours" ng-model="item.startHour" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <option value="number:-1"></option>
                                                                    <option label="00" value="number:0">00</option>
                                                                </select>
                    <span style="font-weight: bold; padding: 0 5px;">:</span>
                <select style="min-width: 40px; padding: 3px 5px;" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                <option label="00" value="number:0" selected="selected">00</option>
                <option label="01" value="number:1">01</option></select>
                <span style="font-weight: bold; padding: 0 25px;">-&gt;</span>
                <select style="min-width: 40px; padding: 3px 5px;" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                    <option value="number:-1"></option>
                    <option label="00" value="number:0" selected="selected">00</option></select>
                    
                    <span style="font-weight: bold; padding: 0 5px;">:</span>

                    <select style="min-width: 40px; padding: 3px 5px;" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                        <option label="00" value="number:0" selected="selected">00</option>
                        <option label="01" value="number:1">01</option>
                    </select>
                        <label style="margin-left: 50px;">
                        <div class="icheckbox_minimal-yellow" style="position: relative;">
                        <input type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div> Show fully booked
                                                                </label> <span style="margin-left: 60px;">Add <input type="text" style="padding: 3px 5px; margin-left: 10px; margin-right: 10px; width: 30px;" ng-model="item.surcharge" class="ng-pristine ng-untouched ng-valid ng-not-empty">% to booking value</span> <span style="margin-left: 60px;">Add <input type="text" style="padding: 3px 5px; margin-left: 10px; margin-right: 10px; width: 30px;" ng-model="item.surchargeAmount" class="ng-pristine ng-untouched ng-valid ng-not-empty"> to booking value</span> <button class="btn btn-xs btn-danger" ng-click="vm.removeHourlySurcharge($index)"><i class="fa fa-remove"></i></button></div>
                                                            <div class="col-md-12 m-t-md"><span style="margin-right: 10px;">Apply on:</span> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.monday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Monday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.tuesday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Tuesday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.wednesday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Wednesday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.thursday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Thursday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.friday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Friday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.saturday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Saturday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.sunday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Sunday
                                                                </label></div>
                                                        </div><!-- end ngRepeat: item in vm.model.hourlySurcharges -->
                                                        <div class="row ng-scope" ng-repeat="item in vm.model.hourlySurcharges">
                                                            <div class="col-md-12 m-t-xl" ng-class="{'m-t-xl': $index > 0, 'm-t-sm': $index == 0}"><span style="margin-right: 10px;">Starting from:</span><select style="min-width: 40px; padding: 3px 5px;" ng-options="item.id as item.label for item in vm.hours" ng-model="item.startHour" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <option value="number:-1"></option>
                                                                    <option label="00" value="number:0" selected="selected">00</option>
                                                                </select><span style="font-weight: bold; padding: 0 5px;">:</span><select style="min-width: 40px; padding: 3px 5px;" ng-options="item.id as item.label for item in vm.minutes" ng-model="item.startMinute" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <option label="00" value="number:0">00</option>
                                                                    <option label="01" value="number:1" selected="selected">01</option>
                                                                   
                                                                </select><span style="font-weight: bold; padding: 0 25px;">-&gt;</span><select style="min-width: 40px; padding: 3px 5px;" ng-options="item.id as item.label for item in vm.hours" ng-model="item.endHour" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <option value="number:-1"></option>
                                                                    
                                                                </select><span style="font-weight: bold; padding: 0 5px;">:</span><select style="min-width: 40px; padding: 3px 5px;" ng-options="item.id as item.label for item in vm.minutes" ng-model="item.endMinute" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <option label="00" value="number:0" selected="selected">00</option>
                                                                   
                                                                </select><label style="margin-left: 50px;">
                                                                    <div class="icheckbox_minimal-yellow" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.showFullyBooked" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Show fully booked
                                                                </label> <span style="margin-left: 60px;">Add <input type="text" style="padding: 3px 5px; margin-left: 10px; margin-right: 10px; width: 30px;" ng-model="item.surcharge" class="ng-pristine ng-untouched ng-valid ng-not-empty">% to booking value</span> <span style="margin-left: 60px;">Add <input type="text" style="padding: 3px 5px; margin-left: 10px; margin-right: 10px; width: 30px;" ng-model="item.surchargeAmount" class="ng-pristine ng-untouched ng-valid ng-not-empty"> to booking value</span> <button class="btn btn-xs btn-danger" ng-click="vm.removeHourlySurcharge($index)"><i class="fa fa-remove"></i></button></div>
                                                            <div class="col-md-12 m-t-md"><span style="margin-right: 10px;">Apply on:</span> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.monday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Monday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.tuesday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Tuesday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.wednesday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Wednesday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.thursday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Thursday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.friday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Friday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.saturday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Saturday
                                                                </label> <label class="surchargeDay">
                                                                    <div class="icheckbox_minimal-yellow checked" style="position: relative;"><input type="checkbox" icheck="" ng-model="item.sunday" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Sunday
                                                                </label></div>
                                                        </div><!-- end ngRepeat: item in vm.model.hourlySurcharges -->
                                                        <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                                    </form>
                                                    <style>
                                                        .surchargeDay {
                                                            margin-left: 15px;
                                                        }

                                                        .mileage-prices-list li {
                                                            margin: 10px 0;
                                                        }

                                                        .mileage-prices-list li {
                                                            font-size: 13px;
                                                            font-weight: bold;
                                                        }
                                                    </style>
                                                </hourly-surcharges>
                                            </div>
                                            <hr>
                                            <div>
                                                <time-left-surcharges website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" class="ng-isolate-scope">
                                                    <form name="vm.carPricesForm" class="form-horizontal ng-pristine ng-valid" ng-show="!vm.isLoading">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <h2 class="text-underline inline-block">Time left before pickup surcharges</h2><button type="button" class="btn btn-sm btn-primary m-l-xl" style="margin-top: -8px;" ng-click="vm.addTimeLeftSurcharge()"><i class="fa fa-plus"></i> Add New</button>
                                                            </div>
                                                        </div><!-- ngRepeat: item in vm.model.timeLeftSurcharges -->
                                                        <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                                    </form>
                                                    <style>
                                                        .surchargeDay {
                                                            margin-left: 15px;
                                                        }

                                                        .mileage-prices-list li {
                                                            margin: 10px 0;
                                                        }

                                                        .mileage-prices-list li {
                                                            font-size: 13px;
                                                            font-weight: bold;
                                                        }
                                                    </style>
                                                </time-left-surcharges>
                                            </div>
                                            <hr>
                                            <div>
                                                <payment-method-surcharges website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" class="ng-isolate-scope">
                                                    <form class="form-horizontal ng-pristine ng-valid" ng-show="!vm.isLoading">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <h2 class="inline-block">Pay by <b>Card</b> surcharges:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12"><span style="margin-right: 0px;">When paying by credit card</span> <span style="margin-left: 20px;">Add percentage <input type="text" class="surcharge-inline-input ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="vm.model.cardSurchargePercentage">% to booking value</span> <span style="margin-left: 0px;">, add fixed value of <input type="text" class="surcharge-inline-input ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="vm.model.cardSurchargeFixedValue"> to booking value</span></div>
                                                            <div class="col-md-12 m-t-sm form-inline"><span class="m-r-md">Show it as an extra item (or leave empty to add it to booking value):</span> <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" readonly="" style="width: 350px;" ng-click="vm.editItemName()" ng-model="vm.model.cardExtraItemName.summary" placeholder="Credit card fee"> <button class="btn btn-sm btn-default" ng-click="vm.editItemName()"><i class="fa fa-globe" aria-hidden="true"></i></button></div>
                                                        </div>
                                                        <div class="row text-center m-t-lg"><button class="btn btn-primary m-r-sm" ng-click="vm.saveChanges()"><i class="fa fa-spinner fa-pulse fa-fw ng-hide" ng-show="vm.isSaving"></i> Save</button> <button class="btn btn-danger m-l-sm" ng-click="vm.dismiss()">Dismiss</button></div>
                                                    </form>
                                                    <style>
                                                        .surchargeDay {
                                                            margin-left: 15px;
                                                        }

                                                        .mileage-prices-list li {
                                                            margin: 10px 0;
                                                        }

                                                        .mileage-prices-list li {
                                                            font-size: 13px;
                                                            font-weight: bold;
                                                        }

                                                        .surcharge-inline-input {
                                                            padding: 3px 5px;
                                                            margin-left: 10px;
                                                            margin-right: 10px;
                                                            width: 60px;
                                                            text-align: right;
                                                        }
                                                    </style>
                                                </payment-method-surcharges>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                            <div>
                                                <car-fixed-prices-list website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" price-plan-guid="'3e0e5888-8700-425c-be70-fdb17e8bda79'" class="ng-isolate-scope">
                                                    <div class="row">
                                                        <div class="col-sm-5 m-b-xs"></div>
                                                        <div class="col-sm-4"></div>
                                                        <div class="col-sm-3 m-b-xs">
                                                            <div class="input-group"><input type="text" ng-model="vm.searchText" placeholder="Search" class="input-sm form-control ng-pristine ng-untouched ng-valid ng-empty"> <span class="input-group-btn"><button type="button" class="btn btn-sm btn-primary m-r-lg">Go!</button> <button type="button" class="btn btn-sm btn-primary" ng-click="vm.editFixedPrice(null, true)"><i class="fa fa-plus"></i> Add New</button></span></div>
                                                        </div>
                                                    </div><!-- ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <td><b>From -&gt; To</b></td>
                                                                <td style="max-width: 60px; text-align: center"><b>Both Ways</b></td>
                                                                <td></td>
                                                            </tr>
                                                        </thead><!-- ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ao Nang (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ao Po Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Bang Rong Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Bang Tao Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Boat Lagoon (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Cape Yamu Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Chalong (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Kalim Bay (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Kamala Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Karon Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Kata Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Kathu (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ko Kho Khao (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Laem Hin Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Laguna Phuket (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Layan Residences by Anantara (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Mai Khao (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Marina Phuket Resort (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Naithonburi Beach Resort (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">22.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Naiyang Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">22.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Nakalay Palm Phuket (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Pansea Surin Beach Phuket (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Patong Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Phuket Town Central Market (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Rassada Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Surin Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Thalang Road (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Tri Trang Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">20.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Natai Beach Resort &amp; Spa Phang Nga (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">22.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Panwa Boutique Beachfront (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">22.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">30.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; The Westin Siray Bay Resort &amp; Spa, Phuket (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">22.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">24.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">28.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Naiharn Beach Condo (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">30.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">34.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Rawai (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">26.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">30.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">34.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Khaolak Merlin Resort (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">60.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">65.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">80.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Phang-nga (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">60.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">65.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">70.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Takua Pa (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">60.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Thap Lamu Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">70.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">75.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Phranang Place Krabi (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">90.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Thalane Bay (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">90.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Hat Yao Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Krabi (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Krabi Airport (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Sofitel Krabi Phokeethra Golf &amp; Spa Resort (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Krabi Town Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Nopparat Thara Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Railay Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">95.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ao Luek (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ao Nam Mao Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Khao Phanom (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Khao Sok (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Khura Buri Green View Resort (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Klong Muang Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Tubkaek Beach (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">100.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Leam Kruad Pier (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">110.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">150.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Khlong Thom District (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">130.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">140.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Koh Jum (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">130.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">140.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ko Lanta District (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">120.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">130.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">140.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Donsak Pier Surat Thani (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">170.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">180.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">200.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Donsak pier to nathon (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">170.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">180.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">200.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                        <tbody ng-repeat="fixedPrice in vm.fixedPrices | filter:vm.searchText" class="ng-scope">
                                                            <tr>
                                                                <td class="ng-binding">Phuket International Airport (3500 ml) -&gt; Ko Samui (3500 ml)</td>
                                                                <td style="max-width: 60px; text-align: center"><i class="fa fa-check" ng-show="fixedPrice.allowBothWays"></i></td>
                                                                <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs" ng-click="vm.editFixedPrice(fixedPrice, false)"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> <button class="btn btn-primary btn-sm m-r-xs m-l-xs" ng-click="vm.editFixedPrice(fixedPrice, true)"><i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button> <button class="btn btn-danger btn-sm m-l-xs" ng-click="vm.removeFixedPrice(fixedPrice)"><i class="fa fa-remove" aria-hidden="true"></i> Delete</button></td>
                                                            </tr><!-- ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Sedan Concept</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 3</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 3</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">180.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">SUV</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 5</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 5</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">200.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                            <tr ng-repeat="fp in fixedPrice.carFixedPrices" class="ng-scope">
                                                                <td colspan="2">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="min-width: 300px; padding-left: 25px; border-top: none;" class="ng-binding">Economical Mini Bus</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-user"></i> 8</td>
                                                                                <td style="min-width: 80px; padding-left: 5px; border-top: none;" class="ng-binding"><i class="fa fa-suitcase"></i> 8</td>
                                                                                <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right" class="ng-binding">220.00</td>
                                                                                <td style="border-top: none;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td></td>
                                                            </tr><!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                                        </tbody><!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                                    </table>
                                                </car-fixed-prices-list>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        @include('backendassets.footer')
        <script type="text/javascript">
            $(document).ready(function() {
    var max_fields      = 50; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<li class="remove"><span>Next</span><input style="display: inline-block; max-width: 50px" type="text" class="form-control" value="10"> <span style="margin-left: 5px; margin-right: 5px" class="">kms, pickup rate</span> <input style="display: inline-block; max-width: 60px" type="text" class="form-control"> <span style="margin-left: 10px; margin-right: 10px">and</span> <input style="display: inline-block; max-width: 60px" type="text" class="form-control" value="1"> <span style="margin-left: 10px; margin-right: 10px">per km</span> <button class="btn btn-xs btn-danger m-l-xl remove_field"><i class="fa fa-remove"></i> </button> </li>'); //add input box
        }
    });

    $(document).on('click', '.remove_field', function(e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
        });
});
        </script>