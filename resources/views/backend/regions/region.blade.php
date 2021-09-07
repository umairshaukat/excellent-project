@include('backendassets.header')  
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0linYSQxKFIKg-Hlq4uOzyq7damcL1wE&libraries=places"></script>
<div id="wrapper" class="editwebsiteregions">

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
                <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="6c1YmGDcxEhx2z_dZyxqO6OUaoOLf3P_l8ceHL4Hpvw-NQIJFfvfgXicMVNUnDImmxfOc-o2TfxKwwGy0Pk0LwsXuospvv4MqX8ActvExNDgSRCYoUh1_qnRJLk5N6XSS6zyag2" autocomplete="off"></form>
            </li>

        </ul>
    </nav>
</div>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Edit website regions</h2>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Configure website regions</h2>
                    <div>
                            <div class="row">
                                <div class="col-sm-5 m-b-xs"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group"><input type="text" ng-model="vm.searchText" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn"><button type="button" class="btn btn-sm btn-primary m-r-lg">Go!</button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Region</button></span></div>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td><b>Region Name</b></td>
                                        <td style="max-width: 60px; text-align: center"><b>Address</b></td>
                                        <td style="max-width: 60px; text-align: center"><b>Price plan</b></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody class="ng-scope">

                                @foreach($region as $region)

                                    <tr>
                                        <td class="align-middle ng-binding">{{ $region->region_name }}</td>
                                        <td class="text-center align-middle ng-binding">
                                            {{ $region->adress }}
                                        </td>
                                        <td class="align-middle" style="text-align: center">
                                        <a ng-show="region.hasPricePlan" href="">
                                                <p class="text-warning">Is Using Custom Prices</p>
                                            </a>
                                            <p ng-show="!region.hasPricePlan" class="ng-hide">Is Using Website Prices</p>
                                        </td>
                                        <td class="text-right align-middle">
                                        <button class="btn btn-primary btn-sm m-r-xs">
                                        <i class="fa fa-edit" aria-hidden="true"></i> Edit</button>

                                        <a class="btn btn-success btn-sm m-r-xs m-l-xs ng-hide" href="{{route('setviewprices', $region->id)}}">
                                        <i class="fa fa-dollar" aria-hidden="true"></i> Set Prices
                                        </a>
                                        
                                        <a class="btn btn-success btn-sm m-r-xs m-l-xs"
                                        href="{{route('setviewprices', $region->id)}}">
                                        <i class="fa fa-dollar" aria-hidden="true"></i> View Prices</a>
                                        <button class="btn btn-danger btn-sm m-r-xs m-l-xs">
                                        <i class="fa fa-remove" aria-hidden="true"></i> Delete Prices</button>
                                        <button class="btn btn-danger btn-sm m-l-xl">
                                        <i class="fa fa-remove" aria-hidden="true"></i> Delete Region</button></td>
                                    </tr>
                                @endforeach    
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- add new region model show -->

<div class="modal-lg modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    <div class="modal-content" uib-modal-transclude="">
        <modal-component dismiss="vm.dismiss()" title-expr="vm.modalTitle" class="ng-scope ng-isolate-scope">
            <div class="modal-header"><button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title ng-binding" ng-bind-html="vm.title">Create New Region</h4>
            </div>
            <div class="modal-body">
                <ng-transclude>
                    <edit-website-region guid="vm.guid" website-guid="vm.websiteGuid" client-guid="vm.parentVm.clientGuid" duplicate="vm.duplicate" dismiss="vm.dismiss()" saved="vm.saved(item)" class="ng-scope ng-isolate-scope">
                        <form class="editFixedPricesForm" id="form_region_save" name="vm.editRegionForm">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row mb-20">
                                        <div class="col-sm-12 col-md-9">
                                        <label>Address:</label>
                                        <input id="autocomplete_search" name="address_search" type="text" class="form-control" placeholder="Search"/>
                                    </div>
                                        <div class="col-sm-12 col-md-3">
                                            <label>Radius (meters):</label> 
                                        <input  type="text" class="form-control" name="radius" id="radius" value="" onchange="myFunction()" placeholder="Ex: 3500">
                                        <input type="hidden" name="lat" id="lat">
                                        <input type="hidden" name="long" id="long">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"><label>Region name:</label>
                                        <input type="text" class="form-control" name="region_name" id="region_name" placeholder="Ex: Heathrow airport">
                                    </div>
                                    </div>
                                    <div class="row ng-hide" ng-show="vm.model.timezoneInfoId">
                                        <div class="col-sm-12"><label>Timezone:</label> <span class="ng-binding"></span></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                <div id="map_canvas" style="width: 1000px; height: 400px;display: none;"></div>
                                </div>
                                <div class="row text-center"><button type="submit" class="btn btn-primary m-r-sm">Save</button> 
                                <button type="button" class="btn btn-danger m-l-sm">Dismiss</button></div>
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
                    </edit-website-region>
                </ng-transclude>
            </div>
        </modal-component>
    </div>
</div>
</div>


@include('backendassets.footer')   
<script type="text/javascript">
   google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
      var input = document.getElementById('autocomplete_search');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      console.log(place.name);
      document.getElementById("map_canvas").style.display = "block";
      var lat=document.getElementById("region_name").value=place.name;
      var lat=document.getElementById("lat").value=place.geometry['location'].lat();
      var lng=document.getElementById("long").value=place.geometry['location'].lng();
      var map = new google.maps.Map(document.getElementById('map_canvas'), {
      center: {lat: lat, lng:lng},
      zoom: 15
    });
      document.getElementById('radius').value = '';
    });
  }
 function myFunction(){
  var map;
  var lat=document.getElementById('lat').value;
  var long=document.getElementById('long').value;
  var rad=document.getElementById('radius').value;
  var latlng = new google.maps.LatLng(lat, long);

  function initialize() {
    var mapOptions = {
        center: latlng,
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var el=document.getElementById("map_canvas");
    map = new google.maps.Map(el, mapOptions);
    var marker = new google.maps.Marker({
        map: map,
        position: latlng
    });
    var sunCircle = {
        strokeColor: "red",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#c3fc49",
        fillOpacity: 0.35,
        map: map,
        center: latlng,
        radius: parseFloat(rad)
    };
    cityCircle = new google.maps.Circle(sunCircle);
    cityCircle.bindTo('center', marker, 'position');
}
initialize();    
}
</script>
<script>

$(document).ready(function(){

$('form#form_region_save').submit(function(event){
 event.preventDefault();
var formData=new FormData(this);
$.ajax({            
    url: '{{ route('saveregions') }}',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'JSON',
    success: function (results) {
          $('#form_region_save').trigger("reset");
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