@include('backendassets.header')
<div id="wrapper" class="editclientprices">
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

                        <a href="javascript:document.getElementById('logoutForm').submit()"><i class="fa fa-sign-out"></i> Log out</a>
                        <form action="/account/logoff/" class="navbar-right" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="UeHTGNztP8CI_U5H_rCOYnK778v5Atfq-kdaHUakHSFWxdi6eaJyBPjECJHi4SkvFulgCLNOuZe1xLLEAfOJCQhdBJL00ol336roheHYAyUlKdusT9wjI_lRQ3sqYB9NQbc8PA2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Prices for <b> Midas Group</b> - Midas Group Services Pte Ltd</h2>

            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <h2 class="panel-heading no-margins">
                            Configure client fixed prices

                        </h2>

                        <div class="panel-body">



                            <car-fixed-prices-list website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" client-guid="'07cd29ec-49f1-4cd4-a604-650c13e76bb4'">
                                <div class="row">
                                    <div class="col-sm-5 m-b-xs"></div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-3 m-b-xs">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search" class="input-sm form-control">
                                            <span class="input-group-btn"><button type="button" class="btn btn-sm btn-primary m-r-lg">Go!</button>
                                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</button></span>
                                        </div>
                                    </div>
                                </div>
                                <div >
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td><b>From -&gt; To</b></td>
                                            <td style="max-width: 60px; text-align: center"><b>Both Ways</b></td>
                                            <td></td>
                                        </tr>
                                    </thead><!-- ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->

                                        @foreach($clientroute as $value)
                                    <tbody >
                                        <tr>
                                            <td>{{ $value->from_display_name }} ({{ $value->from_radius }} ml) -&gt; {{ $value->to_display_name }} ml({{ $value->to_radius }} ml)</td>
                                            <td style="max-width: 60px; text-align: center">
                                            @if($value->pickup_tick_for_both=='on')
                                                <i class="fa fa-check"></i>
                                                @endif
                                            </td>
                                            <td class="text-right"><button class="btn btn-primary btn-sm m-r-xs">
                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                                                 <button class="btn btn-primary btn-sm m-r-xs m-l-xs" >
                                                     <i class="fa fa-edit" aria-hidden="true"></i> Duplicate</button>
                                                      <button class="btn btn-danger btn-sm m-l-xs"><i class="fa fa-remove" aria-hidden="true">

                                                      </i> Delete</button>
                                                    </td>
                                        </tr>
 @foreach($clientservice as $clntserv)

 @if($clntserv->client_route_id== $value->id)
 
                                        <tr ng-repeat="fp in fixedPrice.carFixedPrices">
                                            <td colspan="2">
                                                <table>    
  <tr> 
 <tbody>    
  <tr> 
 
    <td style="min-width: 300px; padding-left: 25px; border-top: none;">{{ $clntserv->car_servces_name }}</td>
  <td style="min-width: 80px; padding-left: 5px; border-top: none;"><i class="fa fa-user"></i>{{ $clntserv->passengers }}</td>
  <td style="min-width: 80px; padding-left: 5px; border-top: none;"><i class="fa fa-suitcase"></i>{{ $clntserv->laguage }}</td>
  <td style="min-width: 50px; padding-left: 5px; border-top: none; text-align: right">{{ $clntserv->price }}</td>
  <td style="border-top: none;"></td>
</tr>
</tbody></tr>
                                                </table>
                                            </td>
                                            <td></td>
                                        </tr>
@endif
@endforeach 
 </tbody>
                                        @endforeach

                                        <!-- end ngRepeat: fp in fixedPrice.carFixedPrices -->
                                      <!-- end ngRepeat: fixedPrice in vm.fixedPrices | filter:vm.searchText -->
                                </table>
                            </car-fixed-prices-list>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- add new service model-->

        <div class="modal-lg modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" uib-modal-transclude="">
                    <modal-component dismiss="vm.dismiss()" title-expr="vm.modalTitle" class="ng-scope ng-isolate-scope">
                        <div class="modal-header"><button type="button" ng-click="vm.dismiss()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title ng-binding" ng-bind-html="vm.title">Add fixed price</h4>
                        </div>
                        <div class="modal-body">
                            <ng-transclude>
                                <edit-car-fixed-prices guid="vm.guid" website-guid="vm.websiteGuid" client-guid="vm.parentVm.clientGuid" price-plan-guid="vm.pricePlanGuid" duplicate="vm.duplicate" dismiss="vm.dismiss()" saved="vm.saved(item)" class="ng-scope ng-isolate-scope">
        <form id="clientroute_save_form" method="POST" class="editFixedPricesForm">
            @csrf
            <input type="hidden" name="client_id" value="{{ $clientPrices->id }}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>From:</h2>
                                                <div class="row mb-20">
                                                    <div class="col-sm-12 col-md-9">
                                                        <label>From address:</label>
                                                        <input id="from_address" name="from_address" type="text" class="form-control" placeholder="Pickup address or airport"  autocomplete="off">
                                                    </div>
                                                    <div class="col-sm-12 col-md-3">
                                                        <label>Radius (meters):</label>
                                                        <input id="from_radius" name="from_radius" type="text" class="form-control original-style ng-pristine ng-untouched ng-valid ng-not-empty" placeholder="Ex: 3500">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><label>Display name:</label> 
                                                    <input id="from_display_name" type="text" class="form-control original-style ng-pristine ng-untouched ng-valid ng-empty" name="fromDisplayName" placeholder="Ex: Heathrow airport" ng-model="vm.model.fromName"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h2>To:</h2>
                                                <div class="row mb-20">
                                                    <div class="col-sm-12 col-md-9">
                                                        <label>To address:</label>
                                                         <input id="to_address" type="text" class="form-control original-style ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty pac-target-input" name="to_address" placeholder="Pickup address or airport"></div>
                                                    <div class="col-sm-12 col-md-3">
                                                        <label>Radius (meters):</label>
                                                         <input id="to_radius" type="text" class="form-control original-style ng-pristine ng-untouched ng-valid ng-not-empty" name="to_radius" placeholder="Ex: 3500"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Display name:</label> 
                                                        <input id="to_display_name" type="text" class="form-control original-style ng-pristine ng-untouched ng-valid ng-empty" name="to_display_name" placeholder="Ex: Heathrow airport" ng-model="vm.model.toName"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <table class="table table-hover">
                                                    <tbody>
                                        @foreach($res as $re)
                                        @foreach($re as $r)
                                        @if($r->owncar_class)
                                         <tr>
                                                    <td>{{ $r->owncar_class }} <input type="hidden" name="car_servces[]" value="suden"></td>
                                                    <td><i class="fa fa-user"></i> 
                                                        <input id="passengers" style="display: inline-block; max-width: 50px" type="text" class="form-control" name="passengers[]">
                                                    </td>
                                                    <td><i class="fa fa-suitcase"></i> 
                                                    <input id="laguage" style="display: inline-block; max-width: 50px"  type="text" class="form-control" name="laguage[]">
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-dollar"></i>
                                                    <input id="price" style="display: inline-block; max-width: 70px" type="text" class="form-control" name="price[]">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-xs">
                                                    <i class="fa fa-copy" aria-hidden="true"></i> Duplicate</button>
                                                    <button class="btn btn-danger btn-xs m-l-xs ng-hide">
                                                    <i class="fa fa-remove" aria-hidden="true"></i> Delete</button>
                                                </td>
                                            </tr>
                                            @else
                                              <tr>
                                                    <td>{{ $r->service_name }} <input type="hidden" name="car_servces[]" value="suden"></td>
                                                    <td><i class="fa fa-user"></i> 
                                                        <input id="passengers" style="display: inline-block; max-width: 50px" type="text" class="form-control" name="passengers[]" value="{{ $r->service_passenger_count }}">
                                                    </td>
                                                    <td><i class="fa fa-suitcase"></i> 
                                                    <input id="laguage" style="display: inline-block; max-width: 50px"  type="text" class="form-control" name="laguage[]" value="{{ $r->service_luggage_count }}">
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-dollar"></i>
                                                    <input id="price" style="display: inline-block; max-width: 70px" type="text" class="form-control" name="price[]" value="{{ $r->service_passenger_count }}">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-xs">
                                                    <i class="fa fa-copy" aria-hidden="true"></i> Duplicate</button>
                                                    <button class="btn btn-danger btn-xs m-l-xs ng-hide">
                                                    <i class="fa fa-remove" aria-hidden="true"></i> Delete</button>
                                                </td>
                                            </tr>
                                            @endif

                                        @endforeach
                                        @endforeach
                                        </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-6"><label>Offer fixed price for both ways:</label>
                                                <div class="check i-checks">
                                                    <label class="checkboxLabel" style="margin-top: 5px;">
                                                    <div class="icheckbox_minimal-yellow" style="position: relative;">
                                                        <input type="checkbox" icheck="" name="pickup_tick_for_both">
                                                    </div>
                                                    <i>

                                                    </i>
                                                         <span class="m-l-sm">Both From/To can be used as pick-up point</span>
                                                    </label></div>
                                                <div ng-show="vm.distanceDisplay" class="ng-binding ng-hide"><b>Distance info:</b> miles will take </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <location-selector-map location-info="vm.fromLatLng" radius="vm.model.fromRadiusInMeters" id="origin-map" >
                                                    <div ng-class="{visibleMap: vm.visible}" style="height: 100%; position: relative; overflow: hidden;">
                                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                            <div style="overflow: hidden;"></div>
                                                            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;">
                                                                    <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                                        </div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                                    </div>
                                                                    <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                        <p class="gm-style-mot"></p>
                                                                    </div>
                                                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" __idm_frm__="33"></iframe>
                                                                <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </location-selector-map>
                                            </div>
                                            <div class="col-sm-6">
                                                <location-selector-map location-info="vm.toLatLng" radius="vm.model.toRadiusInMeters" id="destination-map" >
                                                    <div ng-class="{visibleMap: vm.visible}" style="height: 100%; position: relative; overflow: hidden;">
                                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                            <div style="overflow: hidden;"></div>
                                                            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;">
                                                                    <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                                        </div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                                    </div>
                                                                    <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                        <p class="gm-style-mot"></p>
                                                                    </div>
                                                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" __idm_frm__="34"></iframe>
                                                                <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </location-selector-map>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                <button type="submit" class="btn btn-primary m-r-sm">Save</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger m-l-sm">Dismiss</button>
            </div>
                                    </form>
                                    <style>
                                        .editFixedPricesForm .row {
                                            margin-bottom: 15px;
                                        }

                                        .visibleMap {
                                            min-height: 350px;
                                            margin-bottom: 5px;
                                            margin-top: 10px;
                                        }

                                        .pac-container {
                                            z-index: 9000;
                                        }
                                    </style>
                                </edit-car-fixed-prices>
                            </ng-transclude>
                        </div>
                    </modal-component>
                </div>
            </div>
        </div>



        @include('backendassets.footer')



        <script>
    $(document).ready(function(){
$( 'form#clientroute_save_form' ).submit(function(event){
 event.preventDefault();
var formData = new FormData(this);
$.ajax({            
    url: '{{ route('clientroutesave') }}',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'JSON',
    success: function (results) {      
          $('#clientroute_save_form').trigger("reset");
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