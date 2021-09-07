@include('backendassets.header')  
<div id="wrapper" class="DashboardFinsihedBookings">

@include('backendassets.sidebar')


 <!-- Page wraper -->
      <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 311px;">
      
        <!-- Top Navbar -->
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
              <li>
                <span>Midas Group Services Pte Ltd</span>
              </li>
              <li>
                <a href="javascript:document.getElementById('logoutForm').submit()">
                  <i class="fa fa-sign-out"></i> Log out </a>
                <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post">
                  <input name="__RequestVerificationToken" type="hidden" value="HZLPT4feUM0ENaceiil0n7WRcySpJGgQlU13deTp0walu3cURwEntull6CBtZDNm9kYVvd1nkHHZ8uPtdpZnJEacBaZsmiAEJ3kWLcv129Svz8KPDszk1U5AgzkPoMFufaj4kQ2" autocomplete="off">
                </form>
              </li>
            </ul>
          </nav>

      
        <!-- Main view  -->
        <bookings-table-view website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" is-next="false" view-title="'Finished Bookings'" class="ng-isolate-scope">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5 class="ng-binding">Finished Bookings - 6</h5>
              <div class="ibox-tools" style="cursor: default" ng-click="vm.toggleAutoRefresh()"></div>
            </div>
            <div class="ibox-content">
              <div class="row">
                <div class="col-sm-10 m-b-xs form-inline">
                  <div data-toggle="buttons" class="btn-group">
                    <label class="btn btn-sm btn-white" ng-class="{active: vm.numberOfDays == 1 }" ng-click="vm.filterChanged(1)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="1" ng-change="vm.filterChanged()" id="option1" name="options" class="ng-pristine ng-untouched ng-valid ng-not-empty" value="1"> 24h </label>
                    <label class="btn btn-sm btn-white" ng-class="{active: vm.numberOfDays == 2 }" ng-click="vm.filterChanged(2)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="2" ng-change="vm.filterChanged()" id="option2" name="options" class="ng-pristine ng-untouched ng-valid ng-not-empty" value="2"> 48h </label>
                    <label class="btn btn-sm btn-white" ng-class="{active: vm.numberOfDays == 3 }" ng-click="vm.filterChanged(3)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="3" ng-change="vm.filterChanged()" id="option3" name="options" class="ng-pristine ng-untouched ng-valid ng-not-empty" value="3"> 3d </label>
                    <label class="btn btn-sm btn-white active" ng-class="{active: vm.numberOfDays == 7 }" ng-click="vm.filterChanged(7)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="7" ng-change="vm.filterChanged()" id="option4" name="options" class="ng-pristine ng-valid ng-not-empty ng-touched" value="7"> 7d </label>
                    <label class="btn btn-sm btn-white" ng-show="!vm.isNext || vm.isCancelled" ng-class="{active: vm.numberOfDays == 30 }" ng-click="vm.filterChanged(30)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="30" ng-change="vm.filterChanged" id="option5" name="options" class="ng-pristine ng-untouched ng-valid ng-not-empty" value="30"> 30d </label>
                    <label class="btn btn-sm btn-white ng-hide" ng-show="vm.isNext &amp;&amp; !vm.isCancelled" ng-class="{active: vm.numberOfDays == 1000 }" ng-click="vm.filterChanged(1000)">
                      <input type="radio" ng-model="vm.numberOfDays" ng-value="30" ng-change="vm.filterChanged" id="option6" name="options" class="ng-pristine ng-untouched ng-valid ng-not-empty" value="30"> All </label>
                  </div>
                  <div class="input-group date m-l-sm">
                    <input date-range-picker="" name="dateRange" class="form-control date-picker ng-pristine ng-untouched ng-isolate-scope ng-empty ng-valid-invalid ng-invalid ng-invalid-min ng-invalid-max" placeholder="From -> To Dates" type="text" ng-change="vm.monthFilterChanged()" min="vm.dateRangeOptions.minDate" max="vm.dateRangeOptions.maxDate" ng-model="vm.dateRange" options="vm.dateRangeOptions" ng-trim="false">
                  </div>
                  <div class="input-group date m-l-sm" style="max-width: 150px;">
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-options="item as item.value for item in vm.allowedRegions track by item.id" ng-change="vm.regionChanged()" ng-model="vm.selectedRegion">
                      <option value="?" selected="selected"></option>
                    </select>
                  </div>
                  <div class="input-group date m-l-sm" style="max-width: 150px;">
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" ng-options="item as item.value for item in vm.clients track by item.id" ng-change="vm.regionChanged()" ng-model="vm.selectedClient">
                      <option label="All clients" value="0" selected="selected">All clients</option>
                      <option label="Midas Group" value="175">Midas Group</option>
                      <option label="Bhupinder Singh" value="2600">Bhupinder Singh</option>
                      <option label="data entry lombok" value="2744">data entry lombok</option>
                      <option label="EOSTAR TOUR ROMANIA" value="3337">EOSTAR TOUR ROMANIA</option>
                      <option label="hoppa" value="1412">hoppa</option>
                      <option label="hoppa" value="2545">hoppa</option>
                      <option label="Jayride AUS" value="2645">Jayride AUS</option>
                      <option label="joo" value="1534">joo</option>
                      <option label="meridiantravel Ms Suleilah" value="1543">meridiantravel Ms Suleilah</option>
                      <option label="Mohsin Ali" value="4092">Mohsin Ali</option>
                      <option label="mozio" value="1411">mozio</option>
                      <option label="Mr Hanif" value="2742">Mr Hanif</option>
                      <option label="Mr Karim" value="3358">Mr Karim</option>
                      <option label="Mr Manum" value="2549">Mr Manum</option>
                      <option label="Mr Ravi" value="3336">Mr Ravi</option>
                      <option label="Ms Faseeha" value="3338">Ms Faseeha</option>
                      <option label="ms identity" value="2550">ms identity</option>
                      <option label="Ms minkim" value="1533">Ms minkim</option>
                      <option label="ms sam" value="3261">ms sam</option>
                      <option label="ms sam" value="3277">ms sam</option>
                      <option label="MyTransfers" value="2653">MyTransfers</option>
                      <option label="rideways" value="1413">rideways</option>
                      <option label="SUNTRANSFER" value="2652">SUNTRANSFER</option>
                      <option label="Umair shaukat" value="4159">Umair shaukat</option>
                    </select>
                  </div>
                  <div class="input-group date m-l-sm" style="max-width: 150px;">
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" ng-change="vm.regionChanged()" ng-model="vm.selectedStatus">
                      <option value="all" selected="selected">All Statuses</option>
                      <option value="Pending">Pending</option>
                      <option value="Driver Pending">Driver Pending</option>
                      <option value="Bid In Progress">Bid In Progress</option>
                      <option value="Driver Accepted">Driver Accepted</option>
                      <option value="Driver Rejected">Driver Rejected</option>
                      <option value="In Progress">In Progress</option>
                      <option value="Finished">Finished</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    <input type="text" placeholder="Search" ng-model="searchText" class="input-sm form-control ng-pristine ng-untouched ng-valid ng-empty">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-sm btn-primary">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row ng-hide" ng-show="vm.loading">
                <div class="col-sm-12 text-center">
                  <h1>
                    <i class="fa fa-spinner fa-spin"></i> Loading
                  </h1>
                </div>
              </div>
              <div class="table-responsive bookings-table-view" ng-show="!vm.loading">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="max-width: 50px;">Status</th>
                      <th>Pickup</th>
                      <th>Trip</th>
                      <th>From / To</th>
                      <th style="min-width: 200px;">Driver</th>
                      <th>Value</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    
                    
                    <!-- end ngRepeat: booking in vm.bookings.items | filter:searchText -->
                    <tr ng-repeat="booking in vm.bookings.items | filter:searchText" class="ng-scope">
                      <td style="vertical-align: middle; text-align: center; min-width: 50px;">
                        <div class="badge ng-binding badge-success" data-toggle="modal" data-target="#myModal" ng-class="booking.statusClass" style="padding: 6px; cursor: pointer; text-transform: uppercase; word-break: normal; white-space: pre-wrap; overflow-wrap: break-word;" ng-click="vm.updateBookingDriverStatus(booking)">Finished</div>
                        <div class="text-center">
                          <button type="button" class="btn btn-link btn-xs m-t-sm" ng-click="vm.viewLog(booking)">View Log</button>
                        </div>
                      </td>
                      <td style="vertical-align: middle;">
                        <div>
                          <b class="ng-binding">Sedan Concept</b>
                        </div>
                        <div class="nowrap">
                          <b class="ng-binding">MGS 120153-R</b>
                        </div>
                        <div class="nowrap ng-binding ng-hide" ng-show="booking.externalRefNumber.length > 0 &amp;&amp; booking.externalRefNumber != booking.customerId">E: </div>
                        <div ng-show="booking.accountName">
                          <small>
                            <b class="ng-binding">Acc: Midas Group</b>
                          </small>
                        </div>
                        <small class="ng-binding">Swinder Kaur Kaur</small>
                        <div ng-hide="booking.isSupplierBooking">
                          <span ng-show="booking.passengerDetails.phone">
                            <br>
                            <button class="btn btn-xs btn-success" title="Show client phone" ng-click="booking.showPhoneNumber = !booking.showPhoneNumber">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-xs btn-success" title="Send sms to client"  data-toggle="modal" data-target="#mysmsmodel" ng-click="vm.sendSmsToClient(booking)">
                              <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-xs btn-success" ng-show="booking.paymentStatusString == 'Pending'" title="Send quotation" ng-click="vm.sendEmailQuoteToClient(booking)">
                              <i class="fa fa-mail-reply" aria-hidden="true"></i>
                            </button>
                          </span>
                          <br>
                          <small ng-show="booking.passengerDetails.phone &amp;&amp; booking.showPhoneNumber" style="font-size: 14px;" class="ng-binding ng-hide">+65 9837 2446</small>
                        </div>
                      </td>
                      <td>
                        <div class="ng-binding">Thu, 19 Aug at 14:30 PM</div>
                        <div class="m-t-sm text-warning ng-binding text-green font-bold" ng-class="{'text-green': booking.isPassed, 'font-bold': booking.isPassed}">5 days 7 hrs 45 mins ago</div>
                        <div ng-show="booking.estArrivalDate" class="m-t-md ng-binding">
                          <b>Est Arrival:</b>
                          <br>Thu, 19 Aug 2021 @ 15:03
                        </div>
                      </td>
                      <td>
                        <div class="m-b-sm ng-binding">
                          <i class="fa fa-map-pin from-pin"></i> Segar Rd, Singapore <span ng-show="booking.from.addressName != booking.from.address" class="ng-binding">
                            <br>Segar Road, Singapore </span>
                        </div>
                        <div ng-show="booking.viaPoints" class="ng-hide">
                          <ul class="list-unstyled m-l-md">
                            <!-- ngRepeat: viaPoint in booking.viaPoints -->
                          </ul>
                        </div>
                        <div ng-show="booking.to.addressName || booking.to.address" class="ng-binding">
                          <i class="fa fa-map-pin to-pin"></i> Airport Blvd., Singapore <span ng-show="booking.to.addressName != booking.to.address" class="ng-binding">
                            <br>Airport Boulevard, Changi Airport Singapore (SIN), Singapore </span>
                        </div>
                        <div class="font-bold ng-binding ng-hide" ng-show="booking.durationInHours">Hourly for hours</div>
                        <div class="m-t-sm">
                          <span ng-show="booking.metricUnit === 0" class="pull-left ng-binding ng-hide">Dist. 20 miles</span>
                          <span ng-show="booking.metricUnit === 1" class="pull-left ng-binding">Dist. 32 km</span>
                          <span class="m-l-lg ng-binding">Est. 33 min</span>
                        </div>
                      </td>
                      <td>
                        <div ng-show="booking.supplierName" class="ng-hide">
                          <div>Supplier: <b class="ng-binding"></b>
                          </div>
                          <div>Id: <b class="ng-binding"></b>
                          </div>
                          <div>
                            <div ng-show="booking.supplierPayment" class="ng-binding ng-hide">Payment: <span ng-class="{differentCurrency: booking.currency !== booking.supplierPaymentCurrency }" class="ng-binding differentCurrency"></span>
                            </div>
                          </div>
                          <div ng-hide="booking.driver" class="m-t-sm">No driver assigned yet</div>
                          <div class="clear ng-hide" ng-show="booking.driver &amp;&amp; booking.supplierName">
                            <img class="driver-img pull-left">
                            <div class="driver-details pull-left">
                              <div class="ng-binding"></div>
                              <small ng-show="booking.driver.phoneNumber" style="font-size: 14px;" class="ng-binding ng-hide"></small>
                            </div>
                          </div>
                          <div ng-show="booking.isAdmin || booking.isDispatcher">
                            <button type="button" class="btn btn-danger btn-xs m-t-sm" ng-click="vm.removeSupplier(booking)">Remove Supplier</button>
                          </div>
                        </div>
                        <div ng-show="(booking.isAdmin || booking.isDispatcher) &amp;&amp; (!booking.driver &amp;&amp; !booking.supplierName)">
                          <div>No driver assigned</div>
                          <div>
                            <button type="button" class="btn btn-success btn-xs m-t-sm m-r-sm"  data-toggle="modal" data-target="#assignmodel"  ng-click="vm.assignDriver(booking)">Assign</button>
                            <button type="button" class="btn btn-success btn-xs m-t-sm ng-hide" ng-hide="booking.isPassed || booking.isBidInProgress || booking.driverResponses > 0" ng-click="vm.dispatchBooking(booking)">Start Bid</button>
                            <button type="button" class="btn btn-danger btn-xs m-t-sm ng-hide" ng-show="booking.isBidInProgress || booking.driverResponses > 0" ng-click="vm.dispatchBooking(booking)">Update Bid</button>
                          </div>
                          <div>
                            <button type="button" class="btn btn-success position-relative btn-xs m-t-sm ng-hide" ng-show="!booking.isPassed &amp;&amp; (booking.isBidInProgress || booking.driverResponses > 0)" ng-click="vm.viewDispatchInfo(booking)">View Bid <span class="button-badge ng-binding ng-hide" ng-show="booking.driverResponses > 0">0</span>
                            </button>
                          </div>
                        </div>
                        <div class="clear ng-hide" ng-show="booking.driver &amp;&amp; !booking.supplierName">
                          <img class="driver-img pull-left">
                          <div class="driver-details pull-left">
                            <div class="ng-binding"></div>
                            <small ng-show="booking.driver.phoneNumber" style="font-size: 14px;" class="ng-binding ng-hide"></small>
                            <div style="padding: 5px 0">
                              <div ng-show="booking.driverCashCollected" class="ng-binding ng-hide">Initial: USD</div>
                              <div class="differentCurrency ng-binding ng-hide" ng-show="booking.driverCashCollected">Cash: - USD</div>
                              <div ng-show="booking.driver.driverRemainingPayment > 0" class="ng-hide">To pay: <span ng-class="{differentCurrency: booking.driver.driverRemainingPayment < 0 }" class="ng-binding">
                                </span>
                                <span ng-class="{differentCurrency: booking.currency !== booking.driverCurrency }" class="ng-binding">USD</span>
                              </div>
                            </div>
                            <div ng-show="booking.currency === booking.driverCurrency" class="ng-binding">Profit: USD</div>
                            <div ng-show="booking.showProfitIgnoringTax" class="ng-binding ng-hide">Profit (no tax): 0.00 USD</div>
                            <div ng-show="booking.driver.rating" class="ng-binding ng-hide">Client Rating: </div>
                            <button type="button" ng-show="booking.isAdmin || booking.isDispatcher" class="btn btn-success btn-xs" ng-click="vm.assignDriver(booking)">Remove / Change</button>
                          </div>
                        </div>
                      </td>
                      <td class="error">
                        <b class="ng-binding">36.20 USD</b>
                        <div ng-show="booking.numberOfExtras > 0" class="ng-binding">2 extra <span ng-show="booking.numberOfExtras > 1">s</span>
                        </div>
                        <div class="pointer" ng-click="vm.showPaymentStatus(booking)">
                          <b ng-class="{'field-validation-error': booking.paymentStatusEnum < 3, 'text-green': booking.paymentStatusEnum >= 3 &amp;&amp; booking.paymentStatusEnum < 5, 'text-warning' : booking.paymentStatusEnum == 5 || booking.paymentStatusEnum == 6}" class="ng-binding field-validation-error">
                            <i class="fa fa-warning" ng-class="{'fa-check': booking.paymentStatusEnum >= 3 &amp;&amp; booking.paymentStatusEnum <= 5, 'fa-warning': booking.paymentStatusEnum < 3 || booking.paymentStatusEnum == 6 }">
                            </i> Pending </b>
                        </div>
                        <div class="m-t-sm">Source: <b class="ng-binding"></b>
                        </div>
                      </td>
                      <td class="bookings-dashboard-buttons">
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detailesmodel" ng-click="vm.showExtraDetails(booking)">
                          <i class="fa fa-info" aria-hidden="true"></i> Details </button>
                        <br>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editmodel" ng-show="!booking.isSupplierBooking &amp;&amp; (booking.isAdmin || booking.isDataEntry)" ng-click="vm.editBooking(booking)">
                          <i class="fa fa-edit"></i> Edit </button>
                        <div ng-hide="booking.isCancelled">
                          <button type="button" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#cmodel" ng-click="vm.showDeleteBookingModal(booking)">
                            <i class="fa fa-times"></i> Cancel </button>
                        </div>
                        <div ng-show="booking.isCancelled" class="ng-hide">
                          <button type="button" class="btn btn-green btn-xs" ng-click="vm.restoreBooking(booking)">
                            <i class="fa fa-times"></i> Restore </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end ngRepeat: booking in vm.bookings.items | filter:searchText -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      
          <style>
            .differentCurrency {
              font-weight: bold;
              color: rgb(201, 51, 51);
            }

            .position-relative {
              position: relative !important;
            }

            .btn .button-badge {
              font-weight: bold;
              position: absolute;
              top: -14px;
              right: -8px;
              background-color: #ff0000;
              border-radius: 8px;
              font-size: 13px;
              display: inline-block;
              padding: 1px 5px;
            }

            .float-e-margins .btn.btn-sm {
              margin-bottom: 0px;
            }

            /* https://stackoverflow.com/questions/29548624/bootstrap-modal-stop-scrolling-on-chrome-41-with-mouse-scroll-touchpad-but-work */
            /* Temporary fix for chrome */
            .modal-open .modal {
              -webkit-transform: translateZ(0);
              transform: translateZ(0);
            }

            .checkbox.checkbox-inline {
              margin-top: 0;
            }

            .bookings-dashboard-buttons .btn {
              min-width: 65px;
            }

            /* wrap tables on mobile devices https://stackoverflow.com/questions/21587813/bootstrap-responsive-table-content-wrapping */
            .table-responsive.bookings-table-view .table tbody tr td {
              /* white-space: pre-wrap; */
              /* css-3 */
              white-space: -moz-pre-wrap;
              /* Mozilla, since 1999 */
              white-space: -pre-wrap;
              /* Opera 4-6 */
              white-space: -o-pre-wrap;
              /* Opera 7 */
              word-wrap: break-word;
              /* Internet Explorer 5.5+ */
            }

          
            @media screen and (max-width: 767px) {
              .table-responsive.bookings-table-view {
                border: none;
              }
            }
          </style>
        </bookings-table-view>
     
</div>











  
   
        <!-- finished buttton model-->

 <div  class="modal-lg modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">  
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Booking status - MGS 23-R</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <update-booking-state booking-guid="vm.bookingInfo.guid" modal-instance="vm.$uibModalInstance" saved="vm.saved()" >
            <div class="row" >
              <div class="col-sm-12 text-center">
                <h1>
                  <i class="fa fa-spinner fa-spin"></i> Loading
                </h1>
              </div>
            </div>
            <div class="setDriverOnRouteForm">
              <div class="row form-inline">
                <div class="form-group col-sm-12">
                  <label>Current status:</label>
                  <span >Not Set / Not Set</span>
                </div>
                <div class="form-group mt-2 col-sm-12">
                  <label>Driver acceptance status:</label>
                  <select class="form-control " name="driverAcceptanceStatus" required="" ng-change="vm.driverDataChanged()" ng-model="vm.driverAcceptanceStatus">
                    <!-- ngRepeat: option in vm.driverAcceptanceStatuses -->
                    <option ng-repeat="option in vm.driverAcceptanceStatuses"   value="number:0" selected="selected">Not Set</option>
                    <!-- end ngRepeat: option in vm.driverAcceptanceStatuses -->
                    <option ng-repeat="option in vm.driverAcceptanceStatuses"   value="number:1">Pending</option>
                    <!-- end ngRepeat: option in vm.driverAcceptanceStatuses -->
                    <option ng-repeat="option in vm.driverAcceptanceStatuses"   value="number:2">Declined</option>
                    <!-- end ngRepeat: option in vm.driverAcceptanceStatuses -->
                    <option ng-repeat="option in vm.driverAcceptanceStatuses"   value="number:3">Accepted</option>
                    <!-- end ngRepeat: option in vm.driverAcceptanceStatuses -->
                  </select>
                  <p style="color: red; font-weight: bold;" >Please select if driver accepted booking.</p>
                </div>
                <div class="form-group mt-2 col-sm-12">
                  <label>Driver On-Route status:</label>
                  <select class="form-control " name="onRouteStatus" required="" >
                    <!-- ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:0" selected="selected">Not Set</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:1">Not started</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:2">Driver On Route</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:3">Waiting For Passenger</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:4">Passenger On Boad</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:5">Dropped Passenger</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:6">Passenger No Show</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                    <option ng-repeat="option in vm.driverOnRouteStatuses"   value="number:7">Missed Booking</option>
                    <!-- end ngRepeat: option in vm.driverOnRouteStatuses -->
                  </select>
                  <p style="color: red; font-weight: bold;">Please select driver on route status.</p>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-sm-12">
                  <p style="color: red; font-weight: bold;">Nothing changed. Please change data in order to save.</p>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-sm-12 text-center">
                  <button type="button" class="btn btn-danger m-r-sm" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success m-l-sm" >
                    <i class="fa fa-spinner fa-spin"></i> Update Booking </button>
                </div>
              </div>
            </div>
            <style>
              .setDriverOnRouteForm label {
                min-width: 185px;
              }

              .mt-1 {
                margin-top: 1rem;
              }

              .mt-2 {
                margin-top: 2rem;
              }
            </style>
          </update-booking-state>
        </ng-transclude>
      </div>
    </modal-component>
  </div>
</div>
</div>

<!-- messege icon model -->

<div class="modal-lg modal fade" id="mysmsmodel" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Send SMS Message</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <message-summary booking-guid="vm.bookingId" modal-instance="vm.$uibModalInstance">
            <form name="vm.messageSummaryForm" class="form-horizontal">
              <div class="row">
                <div class="ibox-content profile-content">
                  <div class="form-group" >
                    <label class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                      <textarea name="message" ng-model="vm.model.message" rows="6" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label class="col-sm-2 control-label">SendTo</label>
                    <div class="col-sm-10">
                      <input name="sendTo"  type="text" class="form-control ">
                      <span>Separate multiple numbers by comma (,)</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-12">
                  <button class="btn btn-white m-r-sm" >Close</button>
                  <button class="btn btn-primary m-l-sm" >Send Message</button>
                </div>
              </div>
            </form>
          </message-summary>
        </ng-transclude>
      </div>
    </modal-component>
  </div>
</div>
</div>



<!-- assign button model -->

<div class="modal-lg modal fade" id="assignmodel" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Assign driver to booking</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <assign-driver-to-booking booking-id="vm.guid" modal-instance="vm.$uibModalInstance"  saved="vm.saved()" >
            <div class="row" >
              <div class="col-sm-12 text-center">
                <h1>
                  <i class="fa fa-spinner fa-spin"></i> Loading
                </h1>
              </div>
            </div>
            <div  class="">
              <div class="row">
                <div class="col-md-6">
                  <b>Booking Id:</b> MGS 23-R
                </div>
                <div class="col-md-6">
                  <b>Car Class:</b> Sedan Concept
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <b>From:</b> Mumbai, Maharashtra, India
                </div>
                <div class="col-md-6">
                  <b>To:</b> Faridabad, Haryana, India
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <b>Est. Duration:</b> 1459 minutes
                </div>
                <div class="col-md-6">
                  <div>
                    <b>Distance:</b> 854 miles
                  </div>
                  <div>
                    <b>Distance:</b> 1374 kms
                  </div>
                </div>
              </div>
              <div >
                <b>Price:</b> 0.00 USD
              </div>
              <hr>
              <form name="assignDriverForm" novalidate="" >
                <div class="row m-b-sm">
                  <div class="col-md-6">
                    <label>City/Region:</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-6">
                    <label>Car:</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label >Select driver (13 available):</label>
                    <select class="form-control"  name="selectedDriver" required="">
                      <option value="?" selected="selected"></option>
                      <optgroup label="Suppliers">
                        <option label="NY Bali Trans - IDR" value="9f81a83c-d4c5-4e79-8e74-557bced1eae6">NY Bali Trans - IDR</option>
                        <option label="Rinjani Tour And Travel - IDR" value="dd6bc8ad-fa5e-442c-9946-dddcc1ac3b11">Rinjani Tour And Travel - IDR</option>
                        <option label="Vinz Transport Services - MYR" value="850f6829-f1ff-48f8-9e04-65922deabda9">Vinz Transport Services - MYR</option>
                        <option label="Bali FC Travellia - IDR" value="439fefd0-252e-40f6-b20f-11510f372cab">Bali FC Travellia - IDR</option>
                      </optgroup>
                      <optgroup label="Company Driver">
                        <option label="MR Nick    Car:  Japanese car Toyota GREY" value="7de419a2-aa70-44d5-8a7d-93601aa4dcb4">MR Nick Car: Japanese car Toyota GREY</option>
                        <option label="mr logan    Car: SUV toyota  " value="094ee35f-2c53-462f-9251-2b80755422be">mr logan Car: SUV toyota </option>
                        <option label="mr keneth    Car: Coaches scania scania white" value="1e5aa6df-0788-4d1d-9ad8-4751f20d4f8d">mr keneth Car: Coaches scania scania white</option>
                        <option label="Mr Ali    Car: Economical Mini Bus hiace toyota silver" value="78167252-54ad-4869-9e5c-b9d4fb4b175b">Mr Ali Car: Economical Mini Bus hiace toyota silver</option>
                        <option label="Mr Pandian    Car: Economical Mini Bus Toyota Hiace White" value="b9258831-4926-4240-927d-2be3b9c14dc5">Mr Pandian Car: Economical Mini Bus Toyota Hiace White</option>
                        <option label="ms meena    Car: Sedan  Bali   " value="ffd89c88-6fee-4440-8913-be025f39a1c8">ms meena Car: Sedan Bali </option>
                      </optgroup>
                      <optgroup label="Any Service">
                        <option label="operator one" value="ecc8c3d6-1933-46d5-8627-3e01bdef939e">operator one</option>
                      </optgroup>
                      <optgroup label="Economical Mini Bus">
                        <option label="Mr Bon    Car: Economical Mini Bus Toyota Hiace White" value="aa007d10-8bcf-47cb-9613-7b5a6f2f3b2f">Mr Bon Car: Economical Mini Bus Toyota Hiace White</option>
                      </optgroup>
                      <optgroup label="Private van Bali">
                        <option label="wahyu candra    Car: Private van Bali avanza mini bus white" value="1159e096-f58d-4abb-a522-50c2bce90ac7">wahyu candra Car: Private van Bali avanza mini bus white</option>
                      </optgroup>
                    </select>
                    <p style="color: red; font-weight: bold;">Please select driver.</p>
                  </div>
                </div>
                <div class="form-group" >
                  <label>Supplier car type:</label>
                  <select class="form-control" name="selectedCarType">
                    <option value="?" selected="selected"></option>
                  </select>
                  <p style="color: red; font-weight: bold;">Please select supplier car type.</p>
                </div>
                <div class="form-group">
                  <label>Booking car:</label>
                  <select class="form-control" name="selectedMainCarId">
                    <option value="?" selected="selected"></option>
                    <option value="object:302"></option>
                    <option label="singapore - Toyota Honda or sinmilar altis viaries" value="object:303">singapore - Toyota Honda or sinmilar altis viaries</option>
                    <option label="singapore - toyota hiace white" value="object:304">singapore - toyota hiace white</option>
                    <option label="singapore - honda stream grey" value="object:305">singapore - honda stream grey</option>
                    <option label="singapore - scania scania white" value="object:306">singapore - scania scania white</option>
                    <option label="singapore - Mers Viano brown" value="object:307">singapore - Mers Viano brown</option>
                    <option label="bali - suzuki advanza black" value="object:308">bali - suzuki advanza black</option>
                    <option label="bali - isuzu elf whte" value="object:309">bali - isuzu elf whte</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="payAmmountToDriver">Pay driver/supplier <span style="color: red; font-weight: bold;" >in currency </span>
                  </label>
                  <input class="form-control" id="payAmmountToDriver" type="number"  name="payAmmountToDriver" placeholder="Amount to pay">
                  <p style="color: red; font-weight: bold;" >Please set amount to pay.</p>
                </div>
                <div >
                  <p >Profit: <b >0.00</b> USD </p>
                  <p>Profit If No Tax: <b >0.00</b> USD </p>
                </div>
                <div class="form-group">
                  <div class="checkbox-inline  m-r-lg">
                    <label class="checkboxLabel weight-400">
                      <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                        <input type="checkbox" class="" style="position: absolute; opacity: 0;">
                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                      </div>
                      <i></i>
                      <span class="m-l-xs">Send confirmation email to driver</span>
                    </label>
                  </div>
                  <div class="checkbox-inline  m-r-lg">
                    <label class="checkboxLabel weight-400">
                      <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                        <input type="checkbox"   class="" style="position: absolute; opacity: 0;">
                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                      </div>
                      <i></i>
                      <span class="m-l-xs">Send confirmation SMS to driver</span>
                    </label>
                  </div>
                  <hr >
                  <div class="checkbox-inline  m-r-lg" >
                    <label class="checkboxLabel weight-400">
                      <div class="icheckbox_minimal-yellow" style="position: relative;">
                        <input type="checkbox"style="position: absolute; opacity: 0;">
                        
                      </div>
                      <i></i>
                      <span class="m-l-xs">Send driver details to client by email</span>
                    </label>
                  </div>
                </div>
              </form>
              <br>
              <button type="button" class="btn btn-default m-r-sm"  data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary m-l-sm" >
                <i class="fa fa-spinner fa-spin"></i> Save changes </button>
            </div>
          </assign-driver-to-booking>
        </ng-transclude>
      </div>
    </modal-component>
  </div>
</div>
</div>



<!-- details model -->
<div class="modal-lg modal fade" id="detailesmodel" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Booking details - MGS 23-R</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <view-booking-details booking-id="vm.bookingInfo.guid" modal-instance="vm.$uibModalInstance">
            <div class="row" >
              <div class="col-sm-12 text-center">
                <h1>
                  <i class="fa fa-spinner fa-spin"></i> Loading
                </h1>
              </div>
            </div>
            <div  class="">
              <div class="row">
                <div class="col-md-4">
                  <div >
                    <b>Date:</b> Fri, 20 Aug 2021 at 15:40 PM
                  </div>
                  <div >
                    <b>Service:</b> Sedan Concept
                  </div>
                  <br>
                  <div >
                    <b>From:</b> Mumbai, Maharashtra, India
                  </div>
                  <div>
                    <b>From address:</b> Mumbai, Maharashtra, India
                  </div>
                  <div  >
                    <ul class="list-unstyled m-l-md m-b-none">
                      <!-- ngRepeat: viaPoint in vm.bookingInfo.viaPoints -->
                    </ul>
                  </div>
                  <div  class="">
                    <div >
                      <b>To:</b> Faridabad, Haryana, India
                    </div>
                    <div>
                      <b>To address:</b> Faridabad, Haryana, India
                    </div>
                  </div>
                  <div >
                    <div>
                      <b >Hourly booking for hours</b>
                    </div>
                    <div>
                      <b >Total minutes 1459</b>
                    </div>
                    <br>
                  </div>
                  <div class="">
                    <b>Dispatcher Instr.:</b>
                    <div class="text-danger">re install</div>
                    <br>
                  </div>
                  <div >
                    <div>
                      <b>Distance:</b> 854 miles
                    </div>
                    <div >
                      <eb>Distance:</eb>1374 km
                    </div>
                    <div >
                      <b>Time Est:</b> 1459 min
                    </div>
                    <div >
                      <b>Est. Arrival:</b> Sat, 21 Aug 2021 at 15:59 PM
                    </div>
                  </div>
                  <div>
                    <div>
                      <b>Included distance:</b> 854 miles
                    </div>
                    <div>
                      <b>Included distance:</b> 1374 km
                    </div>
                    <div >
                      <b>Included duration:</b> 1459 min
                    </div>
                  </div>
                  <divclass="">
                    <div >
                      <b>Price:</b> 0.00 USD
                    </div>
                    <div>
                      <b>Extras:</b> 0.00 USD
                    </div>
                    <div>
                      <b>Taxes:</b> 0.00 USD
                    </div>
                    <div >
                      <b>Total:</b> 0.00 USD <b class="text-warning">PayLater / Account</b>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div >
                    <b>Name:</b> Umair shaukat
                  </div>
                  <div >
                    <b>Tel:</b> +923044319778
                  </div>
                  <div >
                    <b>Email:</b> umairshaukat278@gmail.com
                  </div>
                  <div class="">
                    <b>Extras:</b>
                    <ul>
                      <!-- ngRepeat: ex in vm.bookingInfo.extras -->
                    </ul>
                  </div>
                  <br>
                  <div >
                    <b>Source:</b> Manually added by Admin
                  </div>
                  <div>
                    <div class="text-green font-bold m-t-md">Client card available for later charges</div>
                    <div>We advise to take all extra charges before customer leave the car. Due to security/funds availability transactions may not always succeed.</div>
                  </div>
                  <div>
                    <div >
                      <b>Flight No.:</b>
                    </div>
                    <div >
                      <b>Arriving from:</b>
                    </div>
                    <div >
                      <b>Airline:</b> no
                    </div>
                    <br>
                  </div>
                  <div >
                    <b>Adults:</b> 2 <b>Children:</b> 3
                  </div>
                  <div>
                    <b>Large:</b> 3 <b>Medium:</b> 3
                  </div>
                  <div class="">
                    <b>Additional requirements:</b>
                    <br>
                    <span>card in hand</span>
                  </div>
                  <div class="">
                    <a class="btn btn-success btn-xs" target="_blank">View as Client</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div>
                    <img class="img-responsive driver-image img-rounded pull-left" style="max-width: 75px; margin-right: 10px;">
                    <div >
                      <b class="margin-left-15">Driver:</b>
                    </div>
                    <div >
                      <b class="margin-left-15">Email:</b>
                    </div>
                    <div >
                      <b class="margin-left-15">Phone:</b>
                    </div>
                    <br>
                    <div class="">
                      <div >
                        <b class="margin-left-15">For Booking:</b>
                        <span class="differentCurrency"></span>
                      </div>
                      <div >
                        <b class="margin-left-15">Cash collected:</b>
                        <span class=" differentCurrency"></span>
                      </div>
                      <div >
                        <b class="margin-left-15">Extras:</b>
                        <span class=" differentCurrency"></span>
                      </div>
                      <div>
                        <b class="margin-left-15">Remaining:</b>
                        <span >
                        </span>
                        <span class=" differentCurrency"></span>
                      </div>
                    </div>
                    <div  >
                      <b>Driver comments:</b>
                    </div>
                    <div >
                      <b>Client rating:</b>
                      <br>
                      <b>Client comments:</b>
                    </div>
                    <div  class="m-t-sm m-b-sm">
                      <a class="btn btn-success btn-xs" ng-href="" target="_blank">View as Driver</a>
                    </div>
                  </div>
                  <div >
                    <b>Driver instructions:</b> cigratte is not allowed
                  </div>
                </div>
              </div>
              <div class="row m-t-sm">
                <div class="col-sm-12 text-center">
                  <div class="btn-group m-r-md">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-spinner fa-spin" ></i> Emails <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Send Confirmation Email To <b>Client</b>
                        </a>
                      </li>
                      <li>
                        <a href="#">Send Driver Info To <b>Client</b>
                        </a>
                      </li>
                      <li>
                        <a href="#">Send Driver Review Request To <b>Client</b>
                        </a>
                      </li>
                      <li role="separator" class="divider"></li>
                      <li>
                        <a href="#">Send Client Info To <b>Driver</b>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group m-r-md">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-spinner fa-spin" ></i> SMS <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Send Booking Confirmation SMS To <b>Driver</b>
                        </a>
                      </li>
                      <li>
                        <a href="#" >Send Booking Confirmation SMS To <b>Passenger</b>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-primary btn-sm m-r-md" >
                    <i class="fa fa-edit"></i> Edit </button>
                  <button type="button" class="btn btn-primary btn-sm m-r-md">
                    <i class="fa fa-dollar"></i> Payments </button>
                  <button type="button" class="btn btn-primary btn-sm m-r-md">
                    <i class="fa fa-edit"></i> Duplicate </button>
                  <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa fa-map-pin"></i> Show Map </button>
                </div>
              </div>
              <style>
                .visibleMap {
                  min-height: 350px;
                  margin-bottom: 5px;
                  margin-top: 30px;
                }
              </style>
              <booking-map location-info="vm.mapDetails" >
                <div  style="height: 100%;"></div>
              </booking-map>
            </div>
          </view-booking-details>
        </ng-transclude>
      </div>
    </modal-component>
  </div>

</div>



<!-- edit model-->
<div class="modal-lg modal fade" id="editmodel" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit booking - MGS 23-R</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <create-booking-form booking-id="vm.bookingInfo.guid" duplicate-booking="vm.duplicateBooking" is-full-page="true" cancel-button-text="&quot;Close dialog&quot;" on-save="vm.updateBooking(itemGuid)" on-cancel="vm.dismiss()" action-button-text="&quot;Save Booking&quot;" >
            <div class="row" >
              <div class="col-sm-12 text-center">
                <h1>
                  <i class="fa fa-spinner fa-spin"></i> Loading
                </h1>
              </div>
            </div>
            <div class="">
              <create-booking-info booking-info="vm.bookingInfo" booking-info-changed="vm.bookingInfoChanged(bookingInfo)" show-validation-errors="vm.submitted" booking-type="vm.bookingInfo.bookingType" is-full-page="true" >
                <div class="booking-form" name="bookingForm">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group bookingTypeCheckboxes text-left">
                        <div class="checkbox checkbox-inline checkbox-primary margin-right-10">
                          <div class="iradio_minimal-yellow checked disabled" style="position: relative;">
                            <input type="radio"  id="bookingTypeOneWay" name="bookingType" value="1"  class="" disabled="disabled" style="position: absolute; opacity: 0;">
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <label for="bookingTypeOneWay">One way</label>
                        </div>
                        <div class="checkbox checkbox-inline checkbox-primary">
                          <div class="iradio_minimal-yellow disabled" style="position: relative;">
                            <input type="radio"  id="bookingTypeHourly" name="bookingType" value="2"  class="" disabled="disabled" style="position: absolute; opacity: 0;">
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <label for="bookingTypeHourly">Hourly</label>
                        </div>
                        <div class="checkbox checkbox-inline checkbox-primary">
                          <div class="iradio_minimal-yellow disabled" style="position: relative;">
                            <input type="radio"  id="bookingTypeReturn" name="bookingType" value="3"  class="" disabled="disabled" style="position: absolute; opacity: 0;">
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <label for="bookingTypeReturn">Return</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="row">
                        <div class="col-sm-6 col-md-6">
                          <div class="m-b form-group">
                            <select class="form-control" name="selectedCar" required="">
                              <option label="Select car class" value="-1">Select car class</option>
                              <option label="Sedan Concept" value="44" selected="selected">Sedan Concept</option>
                              <option label="Business" value="45">Business</option>
                              <option label="Business Class Van" value="46">Business Class Van</option>
                              <option label="SUV" value="47">SUV</option>
                              <option label="Coaches" value="48">Coaches</option>
                              <option label="Economical Mini Bus" value="49">Economical Mini Bus</option>
                              <option label="suv bali" value="96">suv bali</option>
                              <option label="Private van Bali" value="97">Private van Bali</option>
                              <option label="Sedan  Bali" value="98">Sedan Bali</option>
                              <option label="private bus bali" value="100">private bus bali</option>
                              <option label="Private bus" value="155">Private bus</option>
                              <option label="Avanza" value="197">Avanza</option>
                              <option label="Economical Sedan" value="204">Economical Sedan</option>
                              <option label="Standard Suv" value="205">Standard Suv</option>
                              <option label="Mid Size Private Van" value="206">Mid Size Private Van</option>
                              <option label="Private Van For more than 6 Person" value="207">Private Van For more than 6 Person</option>
                              <option label="coaster bus" value="230">coaster bus</option>
                            </select>
                            <div class="help-block" >Please select car class.</div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="m-b form-group">
                            <style>
                              .form-control.select2-container .select2-choice {
                                height: 32px;
                                line-height: 32px;
                              }

                              .ui-select-choices-row:hover {
                                background-color: #f5f5f5;
                                color: black;
                              }
                            </style>
                            <div class="form-control ui-select-container select2 select2-container "  theme="select2" style="padding: 0; border: none;" title="Select client" append-to-body="true">
                              <a class="select2-choice ui-select-match "   aria-label="Select client select" placeholder="Select client">
                                <span class="select2-chosen">Select client</span>
                                <span  class="select2-chosen" >umairshaukat278@gmail.com</span>
                                <!-- ngIf: $select.allowClear && !$select.isEmpty() -->
                                <span class="select2-arrow ui-select-toggle">
                                  <b></b>
                                </span>
                              </a>
                              <div class="ui-select-dropdown select2-drop select2-with-searchbox select2-drop-active select2-display-none">
                                <div class="search-container select2-search">
                                  <input type="search" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="combobox" aria-expanded="true" aria-owns="ui-select-choices-1" aria-label="Select client" class="ui-select-search select2-input">
                                </div>
                                <ul tabindex="-1" class="ui-select-choices ui-select-choices-content select2-results " repeat="user in vm.bookingInfo.clients | filter: $select.search">
                                  <li class="ui-select-choices-group" ng-class="{'select2-result-with-children': $select.choiceGrouped($group) }">
                                    <div class="ui-select-choices-group-label select2-result-label" ng-bind="$group.name"></div>
                                    <ul id="ui-select-choices-1"  class="select2-result-single">
                                      
                                    </ul>
                                  </li>
                                </ul>
                                <div class="ui-select-no-choice"></div>
                              </div>
                              <ui-select-single></ui-select-single>
                              <input  class="ui-select-focusser ui-select-offscreen " type="text" id="focusser-1" aria-label="Select client focus" aria-haspopup="true" role="button">
                            </div>
                            <div class="help-block">Please select client.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="colBookingOrigin col-sm-5">
                      <div class="form-group origin-form-group">
                        <input id="origin" type="text" class="form-control original-style" name="origin" placeholder="Pickup address or airport"   details="vm.origin.details" options="vm.locationOptions" on-changed="vm.originChangedHandler" autocomplete="off">
                        <div class="help-block">Pick-up location is required.</div>
                      </div>
                    </div>
                    <div class="text-center col-sm-2" >
                      <button class="btn btn-sm btn-primary" tabindex="-1">
                        <i class="fa fa-plus"></i> Via </button>
                    </div>
                    <div  class="ng-hide col-sm-6">
                      <strong>Duration:</strong>
                      <span  > hours</span>
                      <span >(1462 min)</span>
                    </div>
                    <div class="colBookingDestinationOrDuration col-sm-5">
                      <div class="form-group destination-form-group">
                        <input id="destination" type="text" class="form-control original-style" name="destination" placeholder="Drop-off address or airport"   details="vm.destination.details" options="vm.locationOptions" on-changed="vm.destinationChangedHandler" autocomplete="off">
                        <div class="help-block">Drop-off location is required.</div>
                      </div>
                    </div>
                  </div>
                  <div  class="">
                    <ul class="list-unstyled">
                      <!-- ngRepeat: viaPoint in vm.bookingInfo.viaPoints -->
                    </ul>
                  </div>
                  <style>
                    .booking-form .checkbox label,
                    .booking-form .radio label {
                      padding-left: 0;
                    }

                    .booking-form .checkbox-inline,
                    .booking-form .radio-inline {
                      padding-left: 0;
                    }

                    select.default {
                      color: darkgrey;
                    }

                    .booking-form .picker,
                    .picker__holder {
                      position: fixed;
                    }
                  </style>
                  <div class="row pickup-datetime-row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="form-group pickup-date-form-group col-md-6" >
                          <input type="text" class="form-control original-style" name="pickupDate" placeholder="Pickup date &amp; time" autocomplete="off" pick-a-date="vm.pickupDate" min-date="vm.pickupDateStart" ng-model="vm.pickupDateText" update-model="vm.pickupDateChangedHandler()" ng-required="true" readonly="" id="P2113683486" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P2113683486_root" required="required">
                          <div class="picker" id="P2113683486_root" aria-hidden="true">
                            <div class="picker__holder" tabindex="-1">
                              <div class="picker__frame">
                                <div class="picker__wrap">
                                  <div class="picker__box">
                                    <div class="picker__header">
                                      <div class="picker__month">August</div>
                                      <div class="picker__year">2021</div>
                                      <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P2113683486_table" title="Previous month"></div>
                                      <div class="picker__nav--next" data-nav="1" role="button" aria-controls="P2113683486_table" title="Next month"></div>
                                    </div>
                                    <table class="picker__table" id="P2113683486_table" role="grid" aria-controls="P2113683486" aria-readonly="true">
                                      <thead>
                                        <tr>
                                          <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
                                          <th class="picker__weekday" scope="col" title="Monday">Mon</th>
                                          <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
                                          <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
                                          <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
                                          <th class="picker__weekday" scope="col" title="Friday">Fri</th>
                                          <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627758000000" role="gridcell" aria-label="1 August, 2021">1</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627844400000" role="gridcell" aria-label="2 August, 2021">2</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627930800000" role="gridcell" aria-label="3 August, 2021">3</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628017200000" role="gridcell" aria-label="4 August, 2021">4</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628103600000" role="gridcell" aria-label="5 August, 2021">5</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628190000000" role="gridcell" aria-label="6 August, 2021">6</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628276400000" role="gridcell" aria-label="7 August, 2021">7</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628362800000" role="gridcell" aria-label="8 August, 2021">8</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628449200000" role="gridcell" aria-label="9 August, 2021">9</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628535600000" role="gridcell" aria-label="10 August, 2021">10</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628622000000" role="gridcell" aria-label="11 August, 2021">11</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628708400000" role="gridcell" aria-label="12 August, 2021">12</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628794800000" role="gridcell" aria-label="13 August, 2021">13</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628881200000" role="gridcell" aria-label="14 August, 2021">14</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628967600000" role="gridcell" aria-label="15 August, 2021">15</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629054000000" role="gridcell" aria-label="16 August, 2021">16</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629140400000" role="gridcell" aria-label="17 August, 2021">17</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629226800000" role="gridcell" aria-label="18 August, 2021">18</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629313200000" role="gridcell" aria-label="19 August, 2021">19</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1629399600000" role="gridcell" aria-label="20 August, 2021" aria-selected="true" aria-activedescendant="true">20</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629486000000" role="gridcell" aria-label="21 August, 2021">21</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus picker__day--today" data-pick="1629572400000" role="gridcell" aria-label="22 August, 2021">22</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629658800000" role="gridcell" aria-label="23 August, 2021">23</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629745200000" role="gridcell" aria-label="24 August, 2021">24</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629831600000" role="gridcell" aria-label="25 August, 2021">25</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629918000000" role="gridcell" aria-label="26 August, 2021">26</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630004400000" role="gridcell" aria-label="27 August, 2021">27</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630090800000" role="gridcell" aria-label="28 August, 2021">28</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630177200000" role="gridcell" aria-label="29 August, 2021">29</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630263600000" role="gridcell" aria-label="30 August, 2021">30</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630350000000" role="gridcell" aria-label="31 August, 2021">31</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630436400000" role="gridcell" aria-label="1 September, 2021">1</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630522800000" role="gridcell" aria-label="2 September, 2021">2</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630609200000" role="gridcell" aria-label="3 September, 2021">3</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630695600000" role="gridcell" aria-label="4 September, 2021">4</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630782000000" role="gridcell" aria-label="5 September, 2021">5</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630868400000" role="gridcell" aria-label="6 September, 2021">6</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630954800000" role="gridcell" aria-label="7 September, 2021">7</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631041200000" role="gridcell" aria-label="8 September, 2021">8</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631127600000" role="gridcell" aria-label="9 September, 2021">9</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631214000000" role="gridcell" aria-label="10 September, 2021">10</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631300400000" role="gridcell" aria-label="11 September, 2021">11</div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <div class="picker__footer">
                                      <button class="picker__button--today" type="button" data-pick="1629572400000" disabled="" aria-controls="P2113683486">Today</button>
                                      <button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P2113683486">Clear</button>
                                      <button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P2113683486">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="help-block">Please end date.</div>
                        </div>
                        <div class="form-group pickup-time-form-group col-md-6">
                          <div class="row">
                            <div class="col-xs-7 pickup-time-hour-form-group" style="padding-right: 5px;">
                              <select class="form-control original-style " placeholder="Hour" name="pickupTimeHour" style="padding-left: 5px;">
                                <option value="Hour">Hour</option>
                                <!-- ngRepeat: item in vm.hourItems -->
                                <option  value="00" >00 - (12 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="01" >01 - (1 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="02" >02 - (2 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="03" >03 - (3 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="04" >04 - (4 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="05" >05 - (5 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="06" >06 - (6 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="07" >07 - (7 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="08" >08 - (8 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="09" >09 - (9 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="10" >10 - (10 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="11" >11 - (11 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="12" >12 - (12 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="13" >13 - (1 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="14" >14 - (2 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="15"  selected="selected">15 - (3 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="16" >16 - (4 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="17" >17 - (5 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="18" >18 - (6 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="19" >19 - (7 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="20" >20 - (8 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="21" >21 - (9 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="22" >22 - (10 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="23" >23 - (11 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                              </select>
                            </div>
                            <div class="col-xs-5 pickup-time-minute-form-group" style="padding-left: 5px;">
                              <select class="form-control original-style " placeholder="Minute" name="pickupTimeMinute"  style="padding-left: 5px;">
                                <option value="Minute">Minute</option>
                                <!-- ngRepeat: item in vm.minuteItems -->
                                <option  value="00" >00</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="05" >05</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="10" >10</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="15" >15</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="20" >20</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="25" >25</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="30" >30</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="35" >35</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="40"  selected="selected">40</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="45" >45</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="50" >50</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="55" >55</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                              </select>
                            </div>
                          </div>
                          <div class="help-block" >Please select pickup time.</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6" >
                      <div class="row">
                        <div class="form-group dropoff-date-form-group col-md-6">
                          <input type="text" class="form-control original-style" name="pickupDate" placeholder="Dropoff date &amp; time" autocomplete="off" pick-a-date="vm.dropoffDate" min-date="vm.dropoffDateStart" ng-model="vm.dropoffDateText" update-model="vm.dropoffDateChangedHandler()" ng-required="true" readonly="" id="P1764930499" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P1764930499_root" required="required">
                          <div class="picker" id="P1764930499_root" aria-hidden="true">
                            <div class="picker__holder" tabindex="-1">
                              <div class="picker__frame">
                                <div class="picker__wrap">
                                  <div class="picker__box">
                                    <div class="picker__header">
                                      <div class="picker__month">August</div>
                                      <div class="picker__year">2021</div>
                                      <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P1764930499_table" title="Previous month"></div>
                                      <div class="picker__nav--next" data-nav="1" role="button" aria-controls="P1764930499_table" title="Next month"></div>0
                                    <table class="picker__table" id="P1764930499_table" role="grid" aria-controls="P1764930499" aria-readonly="true">
                                      <thead>
                                        <tr>
                                          <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
                                          <th class="picker__weekday" scope="col" title="Monday">Mon</th>
                                          <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
                                          <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
                                          <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
                                          <th class="picker__weekday" scope="col" title="Friday">Fri</th>
                                          <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627758000000" role="gridcell" aria-label="1 August, 2021">1</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627844400000" role="gridcell" aria-label="2 August, 2021">2</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1627930800000" role="gridcell" aria-label="3 August, 2021">3</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628017200000" role="gridcell" aria-label="4 August, 2021">4</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628103600000" role="gridcell" aria-label="5 August, 2021">5</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628190000000" role="gridcell" aria-label="6 August, 2021">6</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628276400000" role="gridcell" aria-label="7 August, 2021">7</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628362800000" role="gridcell" aria-label="8 August, 2021">8</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628449200000" role="gridcell" aria-label="9 August, 2021">9</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628535600000" role="gridcell" aria-label="10 August, 2021">10</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628622000000" role="gridcell" aria-label="11 August, 2021">11</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628708400000" role="gridcell" aria-label="12 August, 2021">12</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628794800000" role="gridcell" aria-label="13 August, 2021">13</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628881200000" role="gridcell" aria-label="14 August, 2021">14</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1628967600000" role="gridcell" aria-label="15 August, 2021">15</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629054000000" role="gridcell" aria-label="16 August, 2021">16</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629140400000" role="gridcell" aria-label="17 August, 2021">17</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629226800000" role="gridcell" aria-label="18 August, 2021">18</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629313200000" role="gridcell" aria-label="19 August, 2021">19</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629399600000" role="gridcell" aria-label="20 August, 2021">20</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629486000000" role="gridcell" aria-label="21 August, 2021">21</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1629572400000" role="gridcell" aria-label="22 August, 2021" aria-activedescendant="true">22</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629658800000" role="gridcell" aria-label="23 August, 2021">23</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629745200000" role="gridcell" aria-label="24 August, 2021">24</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629831600000" role="gridcell" aria-label="25 August, 2021">25</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1629918000000" role="gridcell" aria-label="26 August, 2021">26</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630004400000" role="gridcell" aria-label="27 August, 2021">27</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630090800000" role="gridcell" aria-label="28 August, 2021">28</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630177200000" role="gridcell" aria-label="29 August, 2021">29</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630263600000" role="gridcell" aria-label="30 August, 2021">30</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--infocus" data-pick="1630350000000" role="gridcell" aria-label="31 August, 2021">31</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630436400000" role="gridcell" aria-label="1 September, 2021">1</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630522800000" role="gridcell" aria-label="2 September, 2021">2</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630609200000" role="gridcell" aria-label="3 September, 2021">3</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630695600000" role="gridcell" aria-label="4 September, 2021">4</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630782000000" role="gridcell" aria-label="5 September, 2021">5</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630868400000" role="gridcell" aria-label="6 September, 2021">6</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1630954800000" role="gridcell" aria-label="7 September, 2021">7</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631041200000" role="gridcell" aria-label="8 September, 2021">8</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631127600000" role="gridcell" aria-label="9 September, 2021">9</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631214000000" role="gridcell" aria-label="10 September, 2021">10</div>
                                          </td>
                                          <td role="presentation">
                                            <div class="picker__day picker__day--outfocus" data-pick="1631300400000" role="gridcell" aria-label="11 September, 2021">11</div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <div class="picker__footer">
                                      <button class="picker__button--today" type="button" data-pick="1629572400000" disabled="" aria-controls="P1764930499">Today</button>
                                      <button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P1764930499">Clear</button>
                                      <button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P1764930499">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="help-block">Please set dropoff date.</div>
                        </div>
                        <div class="form-group dropoff-time-form-group col-md-6">
                          <div class="row">
                            <div class="col-xs-7 dropoff-time-hour-form-group" style="padding-right: 5px;">
                              <select class="form-control original-style" placeholder="Hour" name="dropoffTimeHour" style="padding-left: 5px;">
                                <option value="? undefined:undefined ?" selected="selected"></option>
                                <option value="Hour">Hour</option>
                                <!-- ngRepeat: item in vm.hourItems -->
                                <option  value="00" >00 - (12 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="01" >01 - (1 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="02" >02 - (2 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="03" >03 - (3 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="04" >04 - (4 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="05" >05 - (5 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="06" >06 - (6 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="07" >07 - (7 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="08" >08 - (8 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="09" >09 - (9 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="10" >10 - (10 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="11" >11 - (11 AM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="12" >12 - (12 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="13" >13 - (1 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="14" >14 - (2 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="15" >15 - (3 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="16" >16 - (4 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="17" >17 - (5 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="18" >18 - (6 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="19" >19 - (7 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="20" >20 - (8 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="21" >21 - (9 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="22" >22 - (10 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                                <option  value="23" >23 - (11 PM)</option>
                                <!-- end ngRepeat: item in vm.hourItems -->
                              </select>
                            </div>
                            <div class="col-xs-5 dropoff-time-minute-form-group" style="padding-left: 5px;">
                              <select class="form-control original-style" placeholder="Minute" name="dropoffTimeMinute" style="padding-left: 5px;">
                                <option value="? undefined:undefined ?" selected="selected"></option>
                                <option value="Minute">Minute</option>
                                <!-- ngRepeat: item in vm.minuteItems -->
                                <option  value="00" >00</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="05" >05</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="10" >10</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="15" >15</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="20" >20</option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="25" >25 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="30" >30 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="35" >35 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="40" >40 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="45" >45 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="50" >50 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                                <option  value="55" >55 </option>
                                <!-- end ngRepeat: item in vm.minuteItems -->
                              </select>
                            </div>
                          </div>
                          <div class="help-block">Please set dropoff time.</div>
                        </div>
                        <div class="col-sm-12">
                          <div class="help-block">Dropoff date &amp; time is before pickup date. Please update.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row return-pickup-datetime-row">
                    <div class="form-group return-pickup-date-form-group col-md-6" >
                      <input type="text" class="form-control original-style" name="returnPickupDate" placeholder="Return date &amp; time" autocomplete="off" pick-a-date="vm.returnPickupDate" min-date="vm.returnPickupDateStart" ng-model="vm.returnPickupDateText" update-model="vm.returnPickupDateChangedHandler()" ng-required="true" readonly="" id="P2070869036" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P2070869036_root" required="required">
                      <div class="picker" id="P2070869036_root" aria-hidden="true">
                        <div class="picker__holder" tabindex="-1">
                          <div class="picker__frame">
                            <div class="picker__wrap">
                              <div class="picker__box">
                                <div class="picker__header">
                                  <div class="picker__month">August</div>
                                  <div class="picker__year">2021</div>
                                  <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P2070869036_table" title="Previous month"></div>
                                  <div class="picker__nav--next" data-nav="1" role="button" aria-controls="P2070869036_table" title="Next month"></div>
                                </div>
                                <table class="picker__table" id="P2070869036_table" role="grid" aria-controls="P2070869036" aria-readonly="true">
                                  <thead>
                                    <tr>
                                      <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
                                      <th class="picker__weekday" scope="col" title="Monday">Mon</th>
                                      <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
                                      <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
                                      <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
                                      <th class="picker__weekday" scope="col" title="Friday">Fri</th>
                                      <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1627758000000" role="gridcell" aria-label="1 August, 2021">1</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1627844400000" role="gridcell" aria-label="2 August, 2021">2</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1627930800000" role="gridcell" aria-label="3 August, 2021">3</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628017200000" role="gridcell" aria-label="4 August, 2021">4</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628103600000" role="gridcell" aria-label="5 August, 2021">5</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628190000000" role="gridcell" aria-label="6 August, 2021">6</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628276400000" role="gridcell" aria-label="7 August, 2021">7</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628362800000" role="gridcell" aria-label="8 August, 2021">8</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628449200000" role="gridcell" aria-label="9 August, 2021">9</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628535600000" role="gridcell" aria-label="10 August, 2021">10</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628622000000" role="gridcell" aria-label="11 August, 2021">11</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628708400000" role="gridcell" aria-label="12 August, 2021">12</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628794800000" role="gridcell" aria-label="13 August, 2021">13</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628881200000" role="gridcell" aria-label="14 August, 2021">14</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1628967600000" role="gridcell" aria-label="15 August, 2021">15</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629054000000" role="gridcell" aria-label="16 August, 2021">16</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629140400000" role="gridcell" aria-label="17 August, 2021">17</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629226800000" role="gridcell" aria-label="18 August, 2021">18</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629313200000" role="gridcell" aria-label="19 August, 2021">19</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1629399600000" role="gridcell" aria-label="20 August, 2021" aria-selected="true" aria-activedescendant="true">20</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629486000000" role="gridcell" aria-label="21 August, 2021">21</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus picker__day--today" data-pick="1629572400000" role="gridcell" aria-label="22 August, 2021">22</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629658800000" role="gridcell" aria-label="23 August, 2021">23</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629745200000" role="gridcell" aria-label="24 August, 2021">24</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629831600000" role="gridcell" aria-label="25 August, 2021">25</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1629918000000" role="gridcell" aria-label="26 August, 2021">26</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1630004400000" role="gridcell" aria-label="27 August, 2021">27</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1630090800000" role="gridcell" aria-label="28 August, 2021">28</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1630177200000" role="gridcell" aria-label="29 August, 2021">29</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1630263600000" role="gridcell" aria-label="30 August, 2021">30</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--infocus" data-pick="1630350000000" role="gridcell" aria-label="31 August, 2021">31</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630436400000" role="gridcell" aria-label="1 September, 2021">1</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630522800000" role="gridcell" aria-label="2 September, 2021">2</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630609200000" role="gridcell" aria-label="3 September, 2021">3</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630695600000" role="gridcell" aria-label="4 September, 2021">4</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630782000000" role="gridcell" aria-label="5 September, 2021">5</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630868400000" role="gridcell" aria-label="6 September, 2021">6</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1630954800000" role="gridcell" aria-label="7 September, 2021">7</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1631041200000" role="gridcell" aria-label="8 September, 2021">8</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1631127600000" role="gridcell" aria-label="9 September, 2021">9</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1631214000000" role="gridcell" aria-label="10 September, 2021">10</div>
                                      </td>
                                      <td role="presentation">
                                        <div class="picker__day picker__day--outfocus" data-pick="1631300400000" role="gridcell" aria-label="11 September, 2021">11</div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="picker__footer">
                                  <button class="picker__button--today" type="button" data-pick="1629572400000" disabled="" aria-controls="P2070869036">Today</button>
                                  <button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P2070869036">Clear</button>
                                  <button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P2070869036">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="help-block" >Please select return pickup date.</div>
                    </div>
                    <div class="form-group return-pickup-time-form-group col-md-6">
                      <div class="row nomargin-bottom">
                        <div class="col-xs-6 return-pickup-time-hour-form-group">
                          <select class="form-control original-style " placeholder="Hour" name="returnPickupTimeHour" style="padding-left: 5px;">
                            <option value="Hour">Hour</option>
                            <!-- ngRepeat: item in vm.hourItems -->
                            <option  value="00" >00 - (12 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="01" >01 - (1 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="02" >02 - (2 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="03" >03 - (3 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="04" >04 - (4 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="05" >05 - (5 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="06"  selected="selected">06 - (6 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="07" >07 - (7 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="08" >08 - (8 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="09" >09 - (9 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="10" >10 - (10 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="11" >11 - (11 AM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="12" >12 - (12 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="13" >13 - (1 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="14" >14 - (2 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="15" >15 - (3 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="16" >16 - (4 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="17" >17 - (5 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="18" >18 - (6 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="19" >19 - (7 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="20" >20 - (8 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="21" >21 - (9 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="22" >22 - (10 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                            <option  value="23" >23 - (11 PM)</option>
                            <!-- end ngRepeat: item in vm.hourItems -->
                          </select>
                        </div>
                        <div class="col-xs-6 return-pickup-time-minute-form-group">
                          <select class="form-control original-style " placeholder="Minute" name="returnPickupTimeMinute" style="padding-left: 5px;">
                            <option value="Minute">Minute</option>
                            <!-- ngRepeat: item in vm.minuteItems -->
                            <option  value="00" >00</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="05" >05</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="10" >10</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="15" >15</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="20" >20</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="25"  selected="selected">25</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="30" >30</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="35" >35</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="40" >40</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="45" >45</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="50" >50</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                            <option  value="55" >55</option>
                            <!-- end ngRepeat: item in vm.minuteItems -->
                          </select>
                        </div>
                      </div>
                      <div class="help-block" >Please select pickup time.</div>
                    </div>
                  </div>
                </div>
              </create-booking-info>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <span class="">This booking is a return for booking number</span>
                  <span >This booking has a return booking number</span>
                  <span>
                    <b >MGS 23</b> on <b >Friday, 20-08-2021 06:25 AM</b>
                  </span>
                </div>
              </div>
              <hr>
              <div class="booking-form margin-bottom-30" name="bookingForm">
                <div  class="">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="m-b">
                            <label class="control-label">
                              <span >Trip price:</span>
                              <span >One way price</span>
                              <span >.This booking total price will be 2 x 0 = 0 GBP)</span>
                              <b class="field-validation-error" >FULLY BOOKED!!!</b>
                            </label>
                            <div class="pull-right">
                              <button class="btn btn-xs m-l-sm" >Suggest</button>
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" style="border: none; padding: 0; min-width: 90px;">
                                <select name="currency"  class="form-control ">
                                  <option value="EUR">EUR</option>
                                  <option value="USD" selected="selected">USD</option>
                                  <option value="CAD">CAD</option>
                                  <option value="CHF">CHF</option>
                                  <option value="PLN">PLN</option>
                                  <option value="GBP">GBP</option>
                                  <option value="AUD">AUD</option>
                                  <option value="NZD">NZD</option>
                                  <option value="SGD">SGD</option>
                                  <option value="THB">THB</option>
                                  <option value="MYR">MYR</option>
                                  <option value="IDR">IDRs</option>
                                  <option value="VND">VND</option>
                                </select>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                            <div class="m-t-xs">
                              <span class="font-bold">
                                <span > USD</span>
                                <span>= x % OFF</span>
                              </span>
                              <span  >
                                <span >NaN USD = 2 x </span>
                                <span >(2 x x % OFF)</span>
                              </span>
                              
                            </div>
                            <div >
                              <span > miles &amp; min</span>
                              <span > km &amp; min</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="m-b">
                            <div>
                              <div class="clearfix">
                                <span class="pull-left">Car price:</span>
                                <span class="pull-right">0.00</span>
                              </div>
                              <div class="clearfix">
                                <span class="pull-left">Extras:</span>
                                <span class="pull-right">0.00</span>
                              </div>
                              <div class="clearfix" >
                                <span class="pull-left">Taxes:</span>
                                <span class="pull-right">0.00</span>
                              </div>
                              <div style="border-bottom: 1px solid gray;"></div>
                              <div class="clearfix fs-18 fw-800">
                                <span class="pull-left">Total:</span>
                                <span class="pull-right">0.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <div class="checkbox checkbox-inline checkbox-grey nomargin-bottom nomargin-top margin-right-10">
                              <div class="iradio_minimal-yellow" style="position: relative;">
                                <input  type="radio" id="requireCardPaymentTrue" name="requireCardPayment" value="true" class="" style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                              </div>
                              <label class="vertical-align-middle" for="requireCardPaymentTrue">Require client card payment</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-grey nomargin-bottom nomargin-top">
                              <div class="iradio_minimal-yellow checked" style="position: relative;">
                                <input  type="radio" id="requireCardPaymentFalse" name="requireCardPayment" value="false"class="" style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                              </div>
                              <label class="vertical-align-middle" for="requireCardPaymentFalse">Booking is or will be paid by account</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="icheckbox_minimal-yellow" style="position: relative;">
                            <input  type="checkbox" id="automaticallyAskForDriverReview" name="automaticallyAskForDriverReview" value="false" style="position: absolute; opacity: 0;">
                            
                          </div>
                          <label class="vertical-align-middle" style="line-break: auto; display: inline;" for="automaticallyAskForDriverReview">Ask client to review driver</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="m-b">
                            <label class="control-label">Ext Ref No.</label>
                            <div class="input-group full-width">
                              <input type="text" class="form-control" >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="m-b">
                            <label class="control-label">Number of cars</label>
                            <div class="input-group full-width">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <form class="passengerForm nomargin-bottom" name="vm.passengerForm" novalidate="">
                      <div class="row nomargin-bottom">
                        <div class="col-xs-12 col-md-6">
                          <div class="form-group">
                            <div class="checkbox checkbox-inline checkbox-grey nomargin-bottom nomargin-top margin-right-10">
                              <div class="iradio_minimal-yellow" style="position: relative;">
                                <input  type="radio" id="passengerDetailsMrSalutation" name="passengerDetailsSalutation" value="Mr." style="position: absolute; opacity: 0;">
                              </div>
                              <label for="passengerDetailsMrSalutation">Mr.</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-grey nomargin-bottom nomargin-top">
                              <div class="iradio_minimal-yellow" style="position: relative;">
                                <input  type="radio" id="passengerDetailsMsSalutation" name="passengerDetailsSalutation" value="Ms." ng-data-value="Ms."  style="position: absolute; opacity: 0;">
                              </div>
                              <label for="passengerDetailsMsSalutation">Ms.</label>
                            </div>
                            <button class="btn btn-xs btn-success m-l-xl">
                              <i class="fa fa-arrow-down"></i> Fill Client Info </button>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 m-b-sm">
                          <select name="culture" class="form-control ">
                            <option value="en-GB" selected="selected">English</option>
                            <option value="pl">Polish</option>
                            <option value="de-CH">German - Switzerland</option>
                          </select>
                          <div>
                            <i class="fa fa-info"></i> Emails with customer will use this language
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group" >
                            <input type="text" name="firstName" class="form-control original-style nomargin-bottom "  placeholder="First name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group" ng-class="{'has-error': vm.hasLastNameError()}">
                            <input type="text" name="lastName" class="form-control nomargin-bottom original-style " placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control original-style" multiple-email-validator="" placeholder="E-Mail" name="email" 0>
                            <div class="help-block" >Email has invalid format.</div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input type="tel" class="form-control original-style " placeholder="Telephone" name="telephone">
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom">
                        <div class="col-sm-12">
                          <h5 class="booking-field-header">Pickup info</h5>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control original-style " name="roomNumber" placeholder="Room number">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control original-style " name="airline" placeholder="Airline">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control original-style" name="flightNumber" placeholder="Flight number">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control original-style" name="arivingFrom" placeholder="Ariving from">
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom">
                        <div class="col-sm-12">
                          <h5 class="booking-field-header" style="margin-top: 0;">Dispatcher Notes (Visible to dispatcher only. Passenger &amp; driver do not see this.)</h5>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            <textarea class="form-control original-style " name="additionalRequirements" placeholder="Dispatcher Instructions"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom">
                        <div class="col-sm-12">
                          <h5 class="booking-field-header" style="margin-top: 0;">Client Extra Requirements (Visible to driver &amp; passenger)</h5>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            <textarea class="form-control original-style " name="additionalRequirements" placeholder="Additional Requirements"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom">
                        <div class="col-sm-12">
                          <h5 class="booking-field-header" style="margin-top: 0;">Driver Instructions (Visible to driver only. Passenger do not see.)</h5>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            <textarea class="form-control original-style "  name="driverInstructions" placeholder="Driver Instructions (only assigned driver will see this)"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-sm-12">
                              <h5 class="booking-field-header">Persons</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input id="adultsNumber" type="text" min="0" max="1000" class="form-control original-style stepper "  name="adultsNumber" placeholder="Adults number">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input id="childrenNumber" type="text" min="0" max="1000" class="form-control original-style stepper "  name="childrenNumber" placeholder="Children number">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-sm-12">
                              <h5 class="booking-field-header">Luggage</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input id="largeLuggageNumber" type="text" min="0" max="1000" class="form-control original-style stepper " ng-model="vm.bookingInfo.passengerDetails.largeLuggageNumber" name="largeLuggageNumber" placeholder="Large luggage number">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input id="mediumLuggageNumber" type="text" min="0" max="1000" class="form-control original-style stepper " ng-model="vm.bookingInfo.passengerDetails.mediumLuggageNumber" name="mediumLuggageNumber" placeholder="Medium luggage number">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row nomargin-bottom"></div>
                    </form>
                  </div>
                </div>
                <br>
                <hr  class="">
                <booking-extra-services  booking-info="vm.bookingInfo" booking-extras-changed="vm.bookingExtrasChanged()" >
                  <div class="booking-extras">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Extra services</h3>
                      </div>
                      <div class="col-md-6">
                        <button class="btn btn-xs btn-primary pull-right m-r-sm" >
                          <i class="fa fa-plus"></i> Add Item </button>
                        <button class="btn btn-xs btn-success pull-right m-r-sm" >
                          <i class="fa fa-plus"></i> Add Meet &amp; Greet </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Item Description</th>
                              <th style="width: 90px; text-align: center;">No. Items</th>
                              <th style="width: 90px; text-align: center;">Item. Price</th>
                              <th style="width: 90px;">Company</th>
                              <th style="width: 90px;">Driver</th>
                              <th style="width: 90px;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- ngRepeat: extra in vm.bookingInfo.extras -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </booking-extra-services>
                <div class="row get-quote-button-container text-center">
                  <button type="submit"  class="get-quote-button btn btn-primary button-action">
                    <i class="fa fa-spinner fa-pulse fa-fw" ></i> Save Booking </button>
                  <button type="button" class="btn btn-danger button-action m-l-md">Close dialog</button>
                </div>
              </div>
              <booking-map location-info="vm.mapDetails" map-changed="vm.mapChanged(bookingInfo)" >
                <div style="height: 100%;" class="visibleMap"></div>
              </booking-map>
            </div>
          </create-booking-form>
        </ng-transclude>
      </div>
    </modal-component>
  </div>
</div>
</div>


<!-- cancle model-->
<div class="modal-lg modal fade" id="cmodel" role="dialog">
<div class="modal-dialog">
  <div class="modal-content" uib-modal-transclude="">
    <modal-component  title-expr="vm.modalTitle" >
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cancel booking - MGS 23-R</h4>
      </div>
      <div class="modal-body">
        <ng-transclude>
          <cancel-booking booking-guid="vm.bookingId" modal-instance="vm.$uibModalInstance"  save="vm.saved(item)">
            <div class="cancel-booking-component">
              <div >
                <b>Pickup Date:</b> Fri, 20 Aug 2021 at 15:40 PM
              </div>
              <div >
                <b>From:</b> Mumbai, Maharashtra, India
              </div>
              <div >
                <b>Hourly booking:</b> hours
              </div>
              <div>
                <b>To:</b> Faridabad, Haryana, India
              </div>
              <div class="text-center" >Free cancellation till </div>
              <hr>
              <form name="cancelBookingForm" novalidate="" >
                <div class="form-group">
                  <select class="form-control" name="reason" required="">
                    <option value="" selected="selected"></option>
                    <option value="Client did not confirmed by card">Client did not confirmed by card</option>
                    <option value="Client called and canceled booking">Client called and canceled booking</option>
                    <option value="No longer traveling or change of plans">No longer traveling or change of plans</option>
                    <option value="Flight / Boat was canceled">Flight / Boat was canceled</option>
                    <option value="Found a better price elsewhere">Found a better price elsewhere</option>
                    <option value="This is a duplicate booking">This is a duplicate booking</option>
                    <option value="This is a test booking">This is a test booking</option>
                  </select>
                  <p style="color: red;">Please select booking cancellation reason.</p>
                </div>
                <div class="form-group">
                  <textarea class="form-control " rows="5" name="reasonDescription"  placeholder="Description ..."></textarea>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label >Reimburse Passenger - Total: 0.00 USD</label>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="inline-block">
                          <div class="input-group text-right" style="max-width: 140px;">
                            <input type="text" placeholder="Value">
                            <span class="input-group-addon">$</span>
                          </div>
                        </div>
                        <div class="margin-left-20 margin-right-20 inline-block" style="vertical-align: super; position: relative; top: -7px;">Meaning As Value</div>
                        <div class="inline-block">
                          <div class="input-group text-left" style="max-width: 140px;">
                            <input type="text" class="form-control " placeholder="Percentage">
                            <span class="input-group-addon">%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <span style="color: red;">An extra item of <b >-</b> will be added to the booking for reimbursement. </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label >Pay Driver - USD</label>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="inline-block">
                          <div class="input-group text-right" style="max-width: 140px;">
                            <input type="text" class="form-control " placeholder="Value">
                            <span class="input-group-addon">$</span>
                          </div>
                        </div>
                        <div class="margin-left-30 margin-right-30 inline-block" style="vertical-align: super; position: relative; top: -7px;">Equivalent Of</div>
                        <div class="inline-block">
                          <div class="input-group text-left" style="max-width: 140px;">
                            <input type="text" class="form-control " placeholder="Percentage">
                            <span class="input-group-addon">%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <span ng-show="vm.model.payDriver > 0" style="color: red;">Driver will remain assigned and his payment will be <b > USD</b>
                      </span>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group text-center">
                  <div class="row">
                    <div class="col-md-6 text-left">
                      <div class="checkbox-inline  m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input type="checkbox"  style="position: absolute; opacity: 0;">
                            
                          </div>
                          <i></i>
                          <span class="m-l-xs">Send cancellation email to driver</span>
                        </label>
                      </div>
                      <div class="checkbox-inline  m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input type="checkbox"   style="position: absolute; opacity: 0;">
                            
                          </div>
                          <i></i>
                          <span class="m-l-xs">Send cancellation SMS to driver</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6 text-left">
                      <div class="checkbox-inline  m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input type="checkbox"  style="position: absolute; opacity: 0;">
                            
                          </div>
                          <i></i>
                          <span class="m-l-xs">Send cancellation email to client</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <hr>
              <br>
              <div class="text-center">
                <button type="button" class="btn btn-primary m-r-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger m-l-sm">
                  <i class="fa fa-spinner fa-spin"></i> Cancel booking </button>
              </div>
            </div>
          </cancel-booking>
        </ng-transclude>
      </div>
    </modal-component>
  </div>
</div>
</div>



@include('backendassets.footer')   

