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
                        <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="Dd8yUJZY4rNN3ITlmYxa5l9EGGpWW6SMQTd2KLn37QVTPDq5kKWhkDv5NDl0H9vdLpNM2YJibZXDg4sTNAK0epi6j3f9ROtH1gfdzY6H9hGNFS755zGtaDG4ONKKpaFs4IqtlA2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->



        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Accounts</h2>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active"><strong>Accounts</strong></li>
                </ol>
            </div>
            <div class="col-lg-2"></div>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Accounts</h5>
                    <div class="ibox-tools">
                        <a href="/users/edit/" target="_blank" class="btn btn-primary">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Account
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="clients-list">
                        <application-users website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
                            <div class="input-group m-b-lg"><input type="text" ng-model-options="{ debounce: 500 }" ng-model="searchText" placeholder="Search account" class="input form-control ng-pristine ng-untouched ng-valid ng-empty"> <span class="input-group-btn"><button type="button" class="btn btn btn-primary"><i class="fa fa-search"></i> Search</button></span></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <!-- ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding"> Midas Group</td>
                                            <td class="ng-binding">Administrator, Client, Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasfleetops@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Bhupinder Singh</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">gntravels85@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+919463317190</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ck lee</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasphuket@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+ 65 92298697</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ck lee</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sgcklee@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 92298697</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">data entry jakarta</td>
                                            <td class="ng-binding">Data Entry, Dispatcher, Support Operator</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasdashboardforjakarta@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">data entry jb</td>
                                            <td class="ng-binding">Data Entry, Dispatcher, Support Operator</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasdashboardforjb@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">data entry lombok</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasdashboardforlombok@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">EOSTAR TOUR ROMANIA</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">partners@eostar.ro</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+40 790 215 357</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">hoppa </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">hendrik@hoppa.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">hoppa </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@hoppa.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">jakarta dashboards</td>
                                            <td class="ng-binding">Support Operator, Data Entry, Dispatcher</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">jayridejakartabooking@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Jayride AUS</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">bookings@jayride.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">joo </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">booking@cheapairporttransfersingapore.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 97604467</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Liana Sporty</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sporty07_gal@hotmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+85 81113961</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">meridiantravel Ms Suleilah</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">suleilah@meridiantravel.co.za</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+27 663014400</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mohd acit</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasgroupbali@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6597622634</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mohsin Ali</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">mohsin.a.goraya@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+923474353186</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mozio </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@mozio.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Ali</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">wahabmohamedali@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 87514814</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mr bala</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">snowclobber@yahoo.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 82491174</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Bon</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sukhwantbon@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 91129447</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Hanif</td>
                                            <td class="ng-binding">Data Entry, Dispatcher, Support Operator, Administrator, Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasbalibooking@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr James</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">edc10717@icloud.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 91345949</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Karim</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">Karim@hassanzadeh.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+49 16098987777</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mr keneth</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">enquiry@nlstransportservices.com.sg</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 9383 8450</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mr logan</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">logantengsos@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6590227061</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Manum</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">md.mamun@befreshbd.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+880 1730-339176</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Nick</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasfleeetops@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 871635875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mr ovonk</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">putusumitrarully@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+62 81999477889</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">mr pandian</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sporetourclub@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 84686944</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Pandian</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">visakan2003@yahoo.com.sg</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6584686944</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Mr Ravi</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@travelz365.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+91 22 42648864</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Ms Faseeha</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@elitetravelandtours.co.za</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+27 71 360 5786</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ms identity</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">Booking@identityplus.it</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+39 340 702 4104</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Ms Meenachi</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">meenamidas@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+ 65 81124976</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Ms minkim</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">minkim@ipacktour.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+82 10-2522-8121</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Ms Naning</td>
                                            <td class="ng-binding">Support Operator</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">operator1@midas.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">Ms Neena</td>
                                            <td class="ng-binding">Support Operator</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasserviceteam@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 87163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ms rupinder</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">karantanya@yahoo.com.sg</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+65 97604467</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ms sam</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sandra1829@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+27845960031</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ms sam</td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sandra1820@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+27845960031</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">ms yus</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">yusmartini77@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6285139075146</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">MyTransfers </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@mytransfers.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">nick singh</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">midasgrp9218@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">operator one</td>
                                            <td class="ng-binding">Support Operator, Driver, Data Entry, Dispatcher</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">hiace8895@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+6587163875</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">rajinder singh</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">rsaujla333@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding">+91 9216400108</td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">rideways </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">info@rideways.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">SUNTRANSFER </td>
                                            <td class="ng-binding">Client</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">sandra@suntransfers.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                        <tr ng-repeat="user in vm.users | filter:searchText" class="ng-scope">
                                            <td class="ng-binding">wahyu candra</td>
                                            <td class="ng-binding">Driver</td>
                                            <td class="contact-type"><i class="fa fa-envelope"></i></td>
                                            <td class="ng-binding">candra.cd23@gmail.com</td>
                                            <td class="contact-type"><i class="fa fa-phone"></i></td>
                                            <td class="ng-binding"></td>
                                            <td class="text-right"><button ng-show="user.canLogin" class="btn btn-primary m-r-xs ng-hide" ng-click="vm.loginAsUser(user.guid, user.email)"><i class="fa fa-external-link" aria-hidden="true"></i> Login As</button> <button class="btn btn-primary m-r-xs" ng-click="vm.editUser(user.guid)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button ng-show="user.canRemove" class="btn btn-danger m-l-xs ng-hide" ng-click="vm.deleteUser(user)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
                                        </tr><!-- end ngRepeat: user in vm.users | filter:searchText -->
                                    </tbody>
                                </table>
                            </div>
                        </application-users>
                    </div>
                </div>
            </div>
        </div>



@include('backendassets.footer')   

