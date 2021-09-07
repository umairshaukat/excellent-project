@include('backendassets.header')  
<div id="wrapper" class="editdefaultwebsite">

@include('backendassets.sidebar')
  

<!-- Page wraper -->
  <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 418px;">
    <!-- Top Navbar -->
    <div class="row border-bottom">
      <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i>
          </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li><span>Midas Group Services Pte Ltd</span></li>

          <li>
            <a href="javascript:document.getElementById('logoutForm').submit()"><i class="fa fa-sign-out"></i> Log out</a>
            <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post">
              <input name="__RequestVerificationToken" type="hidden" value="KcGhJjumUjbisIgeBf-qCDcm2H2mNvbTidaL4eFEJMyjk_8hwuW7KXp-ZTyULYry5t0zB_zyF66css7nAKzzj0mfvj8HYmrz1mzWgDd2Bsnd282nLARO3DYbCpW3zI-dJRX4CQ2" autocomplete="off" />
            </form>
          </li>
        </ul>
      </nav>
    </div>
    
    <!-- Main view  -->

    <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-md-10">
        <h2>Company Info &amp; Configuration</h2>
        <ol class="breadcrumb">
          <li>
            <a href="/">Home</a>
          </li>
          <li class="active">
            <strong>Midas Group Services Pte Ltd settings</strong>
          </li>
        </ol>
      </div>
    </div>
  

    <div class="wrapper wrapper-content">
      <div class="ibox">
        <div class="ibox-content">
          <edit-website-general-settings website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" >
            <form id="mycompanyinfo" name="vm.websiteDetailsForm" class="form-horizontal ng-pristine ng-valid">
              <div class="row">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Domains</label>
                  <div class="col-sm-10">
                    <input name="companyinfodomain"  type="text" placeholder="https://executivechauffeur.com" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>List of comma separated allowed domains for this
                      website.</small>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.name.$pristine }">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input name="companyinfoname" ng-model="vm.websiteModel.name" type="text" placeholder="My Chauffeur Executive" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.description.$pristine }">
                  <label class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="companyinfodescription" ng-model="vm.websiteModel.description" type="text" placeholder="My Chauffeur Executive transfer services..." class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    ">
                  </textarea>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.timeZone.$pristine }">
                  <label class="col-sm-2 control-label">Timezone</label>
                  <div class="col-sm-10">
                    <select name="companyinfotimeZone" ng-model="vm.websiteModel.timeZone" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    ">
                      <option value="Morocco Standard Time">
                        (GMT) Casablanca
                      </option>
                      <option value="GMT Standard Time">
                        (GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon,
                        London
                      </option>
                      <option value="Greenwich Standard Time">
                        (GMT) Monrovia, Reykjavik
                      </option>
                      <option value="W. Europe Standard Time">
                        (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm,
                        Vienna
                      </option>
                      <option value="Central Europe Standard Time">
                        (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana,
                        Prague
                      </option>
                      <option value="Romance Standard Time">
                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                      </option>
                      <option value="Central European Standard Time">
                        (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                      </option>
                      <option value="W. Central Africa Standard Time">
                        (GMT+01:00) West Central Africa
                      </option>
                      <option value="Jordan Standard Time">
                        (GMT+02:00) Amman
                      </option>
                      <option value="GTB Standard Time">
                        (GMT+02:00) Athens, Bucharest, Istanbul
                      </option>
                      <option value="Middle East Standard Time">
                        (GMT+02:00) Beirut
                      </option>
                      <option value="Egypt Standard Time">
                        (GMT+02:00) Cairo
                      </option>
                      <option value="South Africa Standard Time">
                        (GMT+02:00) Harare, Pretoria
                      </option>
                      <option value="FLE Standard Time">
                        (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                      </option>
                      <option value="Israel Standard Time">
                        (GMT+02:00) Jerusalem
                      </option>
                      <option value="E. Europe Standard Time">
                        (GMT+02:00) Minsk
                      </option>
                      <option value="Namibia Standard Time">
                        (GMT+02:00) Windhoek
                      </option>
                      <option value="Arabic Standard Time">
                        (GMT+03:00) Baghdad
                      </option>
                      <option value="Arab Standard Time">
                        (GMT+03:00) Kuwait, Riyadh
                      </option>
                      <option value="Russian Standard Time">
                        (GMT+03:00) Moscow, St. Petersburg, Volgograd
                      </option>
                      <option value="E. Africa Standard Time">
                        (GMT+03:00) Nairobi
                      </option>
                      <option value="Georgian Standard Time">
                        (GMT+03:00) Tbilisi
                      </option>
                      <option value="Iran Standard Time">
                        (GMT+03:30) Tehran
                      </option>
                      <option value="Arabian Standard Time">
                        (GMT+04:00) Abu Dhabi, Muscat
                      </option>
                      <option value="Azerbaijan Standard Time">
                        (GMT+04:00) Baku
                      </option>
                      <option value="Mauritius Standard Time">
                        (GMT+04:00) Port Louis
                      </option>
                      <option value="Caucasus Standard Time">
                        (GMT+04:00) Yerevan
                      </option>
                      <option value="Afghanistan Standard Time">
                        (GMT+04:30) Kabul
                      </option>
                      <option value="Ekaterinburg Standard Time">
                        (GMT+05:00) Ekaterinburg
                      </option>
                      <option value="Pakistan Standard Time">
                        (GMT+05:00) Islamabad, Karachi
                      </option>
                      <option value="West Asia Standard Time">
                        (GMT+05:00) Tashkent
                      </option>
                      <option value="India Standard Time">
                        (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                      </option>
                      <option value="Sri Lanka Standard Time">
                        (GMT+05:30) Sri Jayawardenepura
                      </option>
                      <option value="Nepal Standard Time">
                        (GMT+05:45) Kathmandu
                      </option>
                      <option value="N. Central Asia Standard Time">
                        (GMT+06:00) Almaty, Novosibirsk
                      </option>
                      <option value="Central Asia Standard Time">
                        (GMT+06:00) Astana, Dhaka
                      </option>
                      <option value="Myanmar Standard Time">
                        (GMT+06:30) Yangon (Rangoon)
                      </option>
                      <option value="SE Asia Standard Time">
                        (GMT+07:00) Bangkok, Hanoi, Jakarta
                      </option>
                      <option value="North Asia Standard Time">
                        (GMT+07:00) Krasnoyarsk
                      </option>
                      <option value="China Standard Time">
                        (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
                      </option>
                      <option value="North Asia East Standard Time">
                        (GMT+08:00) Irkutsk, Ulaan Bataar
                      </option>
                      <option value="Singapore Standard Time" selected="selected">
                        (GMT+08:00) Kuala Lumpur, Singapore
                      </option>
                      <option value="W. Australia Standard Time">
                        (GMT+08:00) Perth
                      </option>
                      <option value="Taipei Standard Time">
                        (GMT+08:00) Taipei
                      </option>
                      <option value="Tokyo Standard Time">
                        (GMT+09:00) Osaka, Sapporo, Tokyo
                      </option>
                      <option value="Korea Standard Time">
                        (GMT+09:00) Seoul
                      </option>
                      <option value="Yakutsk Standard Time">
                        (GMT+09:00) Yakutsk
                      </option>
                      <option value="Cen. Australia Standard Time">
                        (GMT+09:30) Adelaide
                      </option>
                      <option value="AUS Central Standard Time">
                        (GMT+09:30) Darwin
                      </option>
                      <option value="E. Australia Standard Time">
                        (GMT+10:00) Brisbane
                      </option>
                      <option value="AUS Eastern Standard Time">
                        (GMT+10:00) Canberra, Melbourne, Sydney
                      </option>
                      <option value="West Pacific Standard Time">
                        (GMT+10:00) Guam, Port Moresby
                      </option>
                      <option value="Tasmania Standard Time">
                        (GMT+10:00) Hobart
                      </option>
                      <option value="Vladivostok Standard Time">
                        (GMT+10:00) Vladivostok
                      </option>
                      <option value="Central Pacific Standard Time">
                        (GMT+11:00) Magadan, Solomon Is., New Caledonia
                      </option>
                      <option value="New Zealand Standard Time">
                        (GMT+12:00) Auckland, Wellington
                      </option>
                      <option value="Fiji Standard Time">
                        (GMT+12:00) Fiji, Kamchatka, Marshall Is.
                      </option>
                      <option value="Tonga Standard Time">
                        (GMT+13:00) Nuku'alofa
                      </option>
                      <option value="Azores Standard Time">
                        (GMT-01:00) Azores
                      </option>
                      <option value="Cape Verde Standard Time">
                        (GMT-01:00) Cape Verde Is.
                      </option>
                      <option value="Mid-Atlantic Standard Time">
                        (GMT-02:00) Mid-Atlantic
                      </option>
                      <option value="E. South America Standard Time">
                        (GMT-03:00) Brasilia
                      </option>
                      <option value="Argentina Standard Time">
                        (GMT-03:00) Buenos Aires
                      </option>
                      <option value="SA Eastern Standard Time">
                        (GMT-03:00) Georgetown
                      </option>
                      <option value="Greenland Standard Time">
                        (GMT-03:00) Greenland
                      </option>
                      <option value="Montevideo Standard Time">
                        (GMT-03:00) Montevideo
                      </option>
                      <option value="Newfoundland Standard Time">
                        (GMT-03:30) Newfoundland
                      </option>
                      <option value="Atlantic Standard Time">
                        (GMT-04:00) Atlantic Time (Canada)
                      </option>
                      <option value="SA Western Standard Time">
                        (GMT-04:00) La Paz
                      </option>
                      <option value="Central Brazilian Standard Time">
                        (GMT-04:00) Manaus
                      </option>
                      <option value="Pacific SA Standard Time">
                        (GMT-04:00) Santiago
                      </option>
                      <option value="Venezuela Standard Time">
                        (GMT-04:30) Caracas
                      </option>
                      <option value="SA Pacific Standard Time">
                        (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                      </option>
                      <option value="Eastern Standard Time">
                        (GMT-05:00) Eastern Time (US &amp; Canada)
                      </option>
                      <option value="US Eastern Standard Time">
                        (GMT-05:00) Indiana (East)
                      </option>
                      <option value="Central America Standard Time">
                        (GMT-06:00) Central America
                      </option>
                      <option value="Central Standard Time">
                        (GMT-06:00) Central Time (US &amp; Canada)
                      </option>
                      <option value="Central Standard Time (Mexico)">
                        (GMT-06:00) Guadalajara, Mexico City, Monterrey
                      </option>
                      <option value="Canada Central Standard Time">
                        (GMT-06:00) Saskatchewan
                      </option>
                      <option value="US Mountain Standard Time">
                        (GMT-07:00) Arizona
                      </option>
                      <option value="Mountain Standard Time (Mexico)">
                        (GMT-07:00) Chihuahua, La Paz, Mazatlan
                      </option>
                      <option value="Mountain Standard Time">
                        (GMT-07:00) Mountain Time (US &amp; Canada)
                      </option>
                      <option value="Pacific Standard Time">
                        (GMT-08:00) Pacific Time (US &amp; Canada)
                      </option>
                      <option value="Pacific Standard Time (Mexico)">
                        (GMT-08:00) Tijuana, Baja California
                      </option>
                      <option value="Alaskan Standard Time">
                        (GMT-09:00) Alaska
                      </option>
                      <option value="Hawaiian Standard Time">
                        (GMT-10:00) Hawaii
                      </option>
                      <option value="Samoa Standard Time">
                        (GMT-11:00) Midway Island, Samoa
                      </option>
                      <option value="Dateline Standard Time">
                        (GMT-12:00) International Date Line West
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-12">
                  <button class="btn btn-primary m-r-sm">
                    Save changes
                  </button>
                  <button class="btn btn-danger m-l-sm">
                    Reset changes
                  </button>
                </div>
              </div>
            </form>
          </edit-website-general-settings>

          <br />
          <hr />
          <br />

          <edit-website-notifications-settings website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
            <form name="vm.websiteDetailsForm" class="form-horizontal ng-pristine ng-valid">
              <div class="row">
                <div class="col-sm-12">
                  <h3>When a user make a new booking:</h3>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Save card:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="saveCustomerCardForLaterCharges" type="checkbox" icheck="" ng-model="vm.websiteModel.saveCustomerCardForLaterCharges" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Save customer card for later charges</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10" ng-class="{'field-changed' : !vm.websiteDetailsForm.percentageToChargeAtBookingTime.$pristine }" ng-show="vm.websiteModel.saveCustomerCardForLaterCharges">
                  <div class="form-group">
                    Charge client
                    <input class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " style="max-width: 50px; display: inline-block; margin: 0 10px;" type="text" name="percentageToChargeAtBookingTime" ng-model="vm.websiteModel.percentageToChargeAtBookingTime" />
                    percent (%) of booking value when he book from website.
                    Remaining value will charged manually at a later time.
                    <p class="text-danger ng-hide" ng-show="vm.websiteModel.percentageToChargeAtBookingTime &amp;&amp; (vm.websiteModel.percentageToChargeAtBookingTime < 0 || vm.websiteModel.percentageToChargeAtBookingTime > 100)">
                      Value should be between 0 and 100.
                    </p>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.newBookingEmail.$pristine }">
                  <label class="col-sm-2 control-label">Send email to:</label>
                  <div class="col-sm-10">
                    <input name="newBookingEmail" ng-model="vm.websiteModel.newBookingEmail" type="text" placeholder="newbooking@executivechauffeur.com" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.newBookingSmsNumber.$pristine }">
                  <label class="col-sm-2 control-label">Send SMS to:</label>
                  <div class="col-sm-10">
                    <input name="newBookingSmsNumber" ng-model="vm.websiteModel.newBookingSmsNumber" type="text" placeholder="44754235..." class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>Should be in international format without +. Ex Uk:
                      447542312565 Ex Us: 15536456885</small>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendClientConfiramtionEmail.$pristine }">
                  <label class="col-sm-2 control-label">Confirmation Email:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendClientConfiramtionEmail" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendClientConfiramtionEmail" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send a confirmation email to the
                          customer.</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendClientConfiramtionSms.$pristine }">
                  <label class="col-sm-2 control-label">Confirmation SMS:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendClientConfiramtionSms" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendClientConfiramtionSms" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send a confirmation SMS to the
                          customer.</span>
                      </label>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h3>When user send contact form:</h3>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Send message to:</label>
                  <div class="col-sm-10">
                    <input name="customerContactFormEmail" ng-model="vm.websiteModel.customerContactFormEmail" type="text" placeholder="contact@executivechauffeur.com" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h3>When system send an email to a user:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.custommerCommunicationEmail.$pristine }">
                  <label class="col-sm-2 control-label">Source email:</label>
                  <div class="col-sm-10">
                    <input name="custommerCommunicationEmail" ng-model="vm.websiteModel.custommerCommunicationEmail" type="text" placeholder="booking@executivechauffeur.com" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.customerEmailCompanyName.$pristine }">
                  <label class="col-sm-2 control-label">Company name:</label>
                  <div class="col-sm-10">
                    <input name="customerEmailCompanyName" ng-model="vm.websiteModel.customerEmailCompanyName" type="text" placeholder="Executive Chauffeur" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>This company name will be used in email templates.</small>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.customerEmailCompanyAddress.$pristine }">
                  <label class="col-sm-2 control-label">Company address:</label>
                  <div class="col-sm-10">
                    <input name="customerEmailCompanyAddress" ng-model="vm.websiteModel.customerEmailCompanyAddress" type="text" placeholder="566 Chiswick Highroad Building 3 Office 129" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>Will be used in email templates to comply with anti spam
                      regulations.</small>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.customerEmailCompanyAdditionalAddress.$pristine }">
                  <label class="col-sm-2 control-label">Additional address:</label>
                  <div class="col-sm-10">
                    <input name="customerEmailCompanyAdditionalAddress" ng-model="vm.websiteModel.customerEmailCompanyAdditionalAddress" type="text" placeholder="566 Chiswick Highroad Building 3 Office 129" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>Will be used in email templates to comply with anti spam
                      regulations.</small>
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h3>When driver is assigned to a booking:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverConfiramtionEmail.$pristine }">
                  <label class="col-sm-2 control-label">Driver Email:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendDriverConfiramtionEmail" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendDriverConfiramtionEmail" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send driver confirmation by email</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverConfiramtionSms.$pristine }">
                  <label class="col-sm-2 control-label">Driver SMS:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendDriverConfiramtionSms" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendDriverConfiramtionSms" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send driver confirmation by SMS</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverInfoToCustomerByEmail.$pristine }">
                  <label class="col-sm-2 control-label">Client Email:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendDriverInfoToCustomerByEmail" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendDriverInfoToCustomerByEmail" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send driver &amp; car details to client
                          by email</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverInfoToCustomerBySms.$pristine }">
                  <label class="col-sm-2 control-label">Client SMS:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow" style="position: relative;">
                          <input name="automaticallySendDriverInfoToCustomerBySms" type="checkbox" icheck="" ng-model="vm.websiteModel.automaticallySendDriverInfoToCustomerBySms" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send driver &amp; car details to client
                          by SMS</span>
                      </label>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h3>When booking bid is started:</h3>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked disabled" style="position: relative;">
                          <input name="automaticallySendDriverBidInvitationemail" type="checkbox" readonly="" icheck="" disabled="" checked="" ng-model="vm.checked" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send each driver an invitation
                          email.</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverBidInvitationSms.$pristine }">
                  <label class="col-sm-2 control-label">SMS:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                          <input name="automaticallySendDriverBidInvitationSms" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallySendDriverBidInvitationSms" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">Automatically send each driver an invitation SMS.</span>
                      </label>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h4 ng-class="{'field-changed' : !vm.websiteDetailsForm.minutesBeforeBookingClientReminder.$pristine }">
                    Automatically send a reminder to the <b>Customer</b>
                    <input name="minutesBeforeBookingClientReminder" style="display: inline-block; margin: 0 10px; max-width: 60px" ng-model="vm.websiteModel.minutesBeforeBookingClientReminder" type="text" placeholder="120" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-empty
                    " />
                    (minutes) before booking time. Check the below options to
                    send.
                  </h4>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendClientReminderEmail.$pristine }">
                    <label class="col-sm-2 control-label">Email reminder:</label>
                    <div class="col-sm-10">
                      <div class="checkbox-inline i-checks m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input name="automaticallySendClientReminderEmail" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallySendClientReminderEmail" class="
                              ng-pristine ng-untouched ng-valid ng-not-empty
                            " style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <i></i>
                          <span class="m-l-xs ng-binding">Automatically send client <b>Email</b> reminder
                            minutes before booking time.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendClientReminderSms.$pristine }">
                    <label class="col-sm-2 control-label">SMS reminder:</label>
                    <div class="col-sm-10">
                      <div class="checkbox-inline i-checks m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input name="automaticallySendClientReminderSms" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallySendClientReminderSms" class="
                              ng-pristine ng-untouched ng-valid ng-not-empty
                            " style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <i></i>
                          <span class="m-l-xs ng-binding">Automatically send client <b>SMS</b> reminder minutes
                            before booking time.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h4 ng-class="{'field-changed' : !vm.websiteDetailsForm.minutesBeforeBookingDriverReminder.$pristine }">
                    Automatically send a reminder to the <b>Driver</b>
                    <input name="minutesBeforeBookingDriverReminder" style="display: inline-block; margin: 0 10px; max-width: 60px" ng-model="vm.websiteModel.minutesBeforeBookingDriverReminder" type="text" placeholder="120" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    (minutes) before booking time. Check below options to send.
                  </h4>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverReminderEmail.$pristine }">
                    <label class="col-sm-2 control-label">Email reminder:</label>
                    <div class="col-sm-10">
                      <div class="checkbox-inline i-checks m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input name="automaticallySendDriverReminderEmail" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallySendDriverReminderEmail" class="
                              ng-pristine ng-untouched ng-valid ng-not-empty
                            " style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <i></i>
                          <span class="m-l-xs ng-binding">System will automatically send client
                            <b>Email</b> reminder 60 minutes before booking
                            time.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallySendDriverReminderSms.$pristine }">
                    <label class="col-sm-2 control-label">SMS reminder:</label>
                    <div class="col-sm-10">
                      <div class="checkbox-inline i-checks m-r-lg">
                        <label class="checkboxLabel weight-400">
                          <div class="icheckbox_minimal-yellow checked" style="position: relative;">
                            <input name="automaticallySendDriverReminderSms" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallySendDriverReminderSms" class="
                              ng-pristine ng-untouched ng-valid ng-not-empty
                            " style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                          </div>
                          <i></i>
                          <span class="m-l-xs ng-binding">Automatically send client <b>SMS</b> reminder 60
                            minutes before booking time.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h3>When the booking is finished:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.automaticallyAskForDriverReview.$pristine }">
                  <label class="col-sm-2 control-label">Driver Review:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline i-checks m-r-lg">
                      <label class="checkboxLabel weight-400">
                        <div class="icheckbox_minimal-yellow" style="position: relative;">
                          <input name="automaticallyAskForDriverReview" type="checkbox" readonly="" icheck="" ng-model="vm.websiteModel.automaticallyAskForDriverReview" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <i></i>
                        <span class="m-l-xs">The system should automatically send an email to the
                          <b>Customer</b> asking to review the
                          <b>Driver</b>.</span>
                      </label>
                      <div class="m-t-sm">
                        You can enable/disable this option when you edit each
                        booking.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-12">
                  <button class="btn btn-primary m-r-sm" >
                    Save changes
                  </button>
                  <button class="btn btn-danger m-l-sm" >
                    Reset changes
                  </button>
                </div>
              </div>
            </form>
          </edit-website-notifications-settings>

          <br />
          <hr />
          <br />

          <edit-website-operations-settings website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
            <form name="vm.websiteDetailsForm" class="form-horizontal ng-pristine ng-valid">
              <div class="row">
                <div class="col-sm-12">
                  <h3 ng-class="{'field-changed' : !vm.websiteDetailsForm.minimumFreeCancelTimeInMinutes.$pristine }">
                    Client can cancel booking without any charges with
                    <input name="minimumFreeCancelTimeInMinutes" style="display: inline-block; max-width: 80px" ng-model="vm.websiteModel.minimumFreeCancelTimeInMinutes" type="text" placeholder="360" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    (minutes) before booking time.
                  </h3>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Booking address
                    <span style="color: rgb(201, 9, 9); font-weight: bold;">MUST</span>
                    be:</label>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <div class="
                        checkbox checkbox-inline checkbox-grey
                        nomargin-bottom nomargin-top
                        margin-right-10
                      ">
                        <div class="iradio_minimal-yellow" style="position: relative;">
                          <input icheck="" type="radio" id="bookOnlyOnDefinedRegions" name="allowBookingOnlyOnDefinedRegions" value="true" ng-data-value="true" ng-model="vm.websiteModel.restrictWebBookingToRegions" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <label for="bookOnlyOnDefinedRegions">Within a defined region</label>
                      </div>
                      <div class="
                        checkbox checkbox-inline checkbox-grey
                        nomargin-bottom nomargin-top
                      ">
                        <div class="iradio_minimal-yellow checked" style="position: relative;">
                          <input icheck="" type="radio" id="bookOnAnyRegion" name="allowBookingworldwide" value="false" ng-data-value="false" ng-model="vm.websiteModel.restrictWebBookingToRegions" class="ng-pristine ng-untouched ng-valid ng-not-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <label for="bookOnAnyRegion">Anywhere (worldwide)</label>
                      </div>
                    </div>
                    <p ng-show="vm.websiteModel.restrictWebBookingToRegions == 'true'" class="text-warning ng-hide">
                      Online booking will show message:<br />'<i>At the moment we do not cover this pickup location.
                        Please CALL or ASK FOR QUOTE so we can help with this
                        pickup location</i>'<br />and will prevent booking is From or To locations are
                      not is a defined region.
                    </p>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group field-changed" ng-class="{'field-changed' : !vm.websiteDetailsForm.selectedAllowedDriverRegions.$pristine }">
                    <label class="col-sm-2 control-label">Allowed driver regions:</label>
                    <div class="col-sm-10">
                      <div class="
                        ui-select-container
                        ui-select-multiple
                        ui-select-bootstrap
                        dropdown
                        form-control
                        ng-valid ng-pristine ng-untouched ng-not-empty
                      " ng-class="{open: $select.open}" tagging="" tagging-tokens="," tagging-label="" ng-model="vm.websiteModel.selectedAllowedDriverRegions" theme="bootstrap" sortable="true" style="width: 100%;" title="Covered regions">
                        <div>
                          <span class="ui-select-match ng-scope" placeholder="Allowed regions that drivers can cover">
                            <!-- ngRepeat: $item in $select.selected track by $index -->
                            <span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">atq</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">batam island</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">goa</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Ho chi Min Attraction to hotel</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">islamabad</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">KLIA Arrival Hall</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">kota kinablu</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Kualanamu</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Lombok International Airport lombok</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">malaysia</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">new delhi</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Ngurah Rai International Airport</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Phuket International Airport</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Singapore and legoland</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Soekarno–Hatta International Airport</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index --><span ng-repeat="$item in $select.selected track by $index" class="ng-scope"><span class="
                                ui-select-match-item
                                btn btn-default btn-xs
                              " tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{'btn-primary':$selectMultiple.activeMatchIndex === $index, 'select-locked':$select.isLocked(this, $index)}" ui-select-sort="$select.selected" draggable="true"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;×</span>
                                <span uis-transclude-append="">Tan Son Nhat International Airport</span></span></span><!-- end ngRepeat: $item in $select.selected track by $index -->
                          </span><input type="search" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="
                            ui-select-search
                            input-xs
                            ng-pristine ng-untouched ng-valid ng-empty
                          " placeholder="" ng-disabled="$select.disabled" ng-click="$select.activate()" ng-model="$select.search" role="combobox" aria-expanded="false" aria-label="Covered regions" ng-class="{'spinner': $select.refreshing}" ondrop="return false;" aria-activedescendant="ui-select-choices-row-0--1" style="width: 230px;" />
                        </div>
                        <ul class="
                          ui-select-choices
                          ui-select-choices-content
                          ui-select-dropdown
                          dropdown-menu
                          ng-scope ng-hide
                        " ng-show="$select.open &amp;&amp; $select.items.length > 0" repeat="city in vm.allowedRegions | filter:$select.search">
                          <li class="ui-select-choices-group" id="ui-select-choices-0">
                            <div class="divider ng-hide" ng-show="$select.isGrouped &amp;&amp; $index > 0"></div>
                            <div ng-show="$select.isGrouped" class="
                              ui-select-choices-group-label
                              dropdown-header
                              ng-binding ng-hide
                            " ng-bind="$group.name"></div>
                            <!-- ngRepeat: city in $select.items -->
                          </li>
                        </ul>
                        <div class="ui-select-no-choice"></div>
                        <ui-select-multiple></ui-select-multiple>
                      </div>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-sm-12">
                  <h3>TxtToLocal SMS Gateway:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.txtToLocalUsername.$pristine }">
                  <label class="col-sm-2 control-label">Sms TxtToLocal username:</label>
                  <div class="col-sm-10">
                    <input name="txtToLocalUsername" ng-model="vm.websiteModel.txtToLocalUsername" type="text" placeholder="Ex: office@executivechauffeur.com" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.txtToLocalApiKey.$pristine }">
                  <label class="col-sm-2 control-label">Sms TxtToLocal key:</label>
                  <div class="col-sm-10">
                    <input name="txtToLocalApiKey" ng-model="vm.websiteModel.txtToLocalApiKey" type="text" placeholder="Ex: GWhknp2YCo-zCiouGBA6VhtyhnPtGkb3XTq8loa17" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-empty
                    " />
                  </div>
                </div>
                <div class="col-sm-12">
                  <h3>Twilio SMS Gateway:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.twilioAccount.$pristine }">
                  <label class="col-sm-2 control-label">Twilio account:</label>
                  <div class="col-sm-10">
                    <input name="twilioAccount" ng-model="vm.websiteModel.twilioAccount" type="text" placeholder="Ex: AC4aefaaa9226d7352a5d79c8a73e015d5" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.twilioToken.$pristine }">
                  <label class="col-sm-2 control-label">Twilio token:</label>
                  <div class="col-sm-10">
                    <input name="twilioToken" ng-model="vm.websiteModel.twilioToken" type="text" placeholder="Ex: 91c5d2404edc4d5d8901ceea8d2f677c" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.fromSmsNumber.$pristine }">
                  <label class="col-sm-2 control-label">From number:</label>
                  <div class="col-sm-10">
                    <input name="fromSmsNumber" ng-model="vm.websiteModel.fromSmsNumber" type="text" placeholder="Ex: +447400410953" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="col-sm-12">
                  <h3 style="display: inline-block">Google Maps Api keys:</h3>
                  <div class="checkbox checkbox-inline checkbox-grey" style="padding-top: 0px;">
                    <div class="icheckbox_minimal-yellow" style="position: relative;">
                      <input icheck="" type="checkbox" id="useClientGoogleApiKeys" name="useClientGoogleApiKeys" value="true" ng-data-value="true" ng-model="vm.websiteModel.useClientGoogleApiKeys" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                    <label for="useClientGoogleApiKeys" style="padding-left: 10px; font-weight: bold; line-height: 21px;">Use my own Google API key</label>
                  </div>
                </div>
                <div ng-show="vm.websiteModel.useClientGoogleApiKeys" class="ng-hide">
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.googleMapsKey.$pristine }">
                    <label class="col-sm-2 control-label">Google Maps website key:</label>
                    <div class="col-sm-10">
                      <input name="googleMapsKey" ng-model="vm.websiteModel.googleMapsKey" type="text" placeholder="Ex: AIzTY7AQ3Ikkpa29e3mU8BnCiF-7URCIBMagefM" class="
                        form-control
                        ng-pristine ng-untouched ng-valid ng-not-empty
                      " />
                    </div>
                  </div>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.googleServerMapsApiKey.$pristine }">
                    <label class="col-sm-2 control-label">Google maps server key:</label>
                    <div class="col-sm-10">
                      <input name="googleServerMapsApiKey" ng-model="vm.websiteModel.googleServerMapsApiKey" type="text" placeholder="Ex: AIzTY7AQ3Ikkpa29e3mU8BnCiF-7URCIBMagefM" class="
                        form-control
                        ng-pristine ng-untouched ng-valid ng-not-empty
                      " />
                    </div>
                  </div>
                </div>
                <div ng-show="vm.websiteModel.isSystemAdmin" class="ng-hide">
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.systemGoogleMapsKey.$pristine }">
                    <label class="col-sm-2 control-label">Google Maps system website key:</label>
                    <div class="col-sm-10">
                      <input name="systemGoogleMapsKey" ng-model="vm.websiteModel.systemGoogleMapsKey" type="text" placeholder="Ex: AI2TY7AQ3Ikkpa29e3mU8BnCiF-7URCIBMagefM" class="
                        form-control
                        ng-pristine ng-untouched ng-valid ng-empty
                      " />
                    </div>
                  </div>
                  <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.systemGoogleServerMapsApiKey.$pristine }">
                    <label class="col-sm-2 control-label">Google maps system server key:</label>
                    <div class="col-sm-10">
                      <input name="systemGoogleServerMapsApiKey" ng-model="vm.websiteModel.systemGoogleServerMapsApiKey" type="text" placeholder="Ex: AIzTY7AQ3Ikkpa29e3mU8BnCiF-7URCIBMagefM" class="
                        form-control
                        ng-pristine ng-untouched ng-valid ng-empty
                      " />
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h3>Payment Info:</h3>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.currency.$pristine }">
                  <label class="col-sm-2 control-label">Currency</label>
                  <div class="col-sm-10">
                    <select name="currency" ng-model="vm.websiteModel.currency" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    ">
                      <option value="EUR">EUR - €</option>
                      <option value="CAD">CAD - $</option>
                      <option value="CHF">CHF</option>
                      <option value="PLN">PLN - zł</option>
                      <option value="GBP">GBP - £</option>
                      <option value="USD" selected="selected">USD - $</option>
                      <option value="AUD">AUD - $</option>
                      <option value="NZD">NZD - $</option>
                      <option value="SGD">SGD - $</option>
                      <option value="THB">THB - ฿</option>
                      <option value="MYR">MYR - RM</option>
                      <option value="IDR">IDR - Rp</option>
                      <option value="VND">VND - ₫</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h3 style="display: inline-block; padding-left: 38px;">
                    Payment method:
                  </h3>
                  <div class="checkbox checkbox-inline checkbox-grey" style="padding-top: 0px;">
                    <div class="icheckbox_minimal-yellow" style="position: relative;">
                      <input icheck="" type="checkbox" id="allowCashAsPaymentMethod" name="allowCashAsPaymentMethod" value="true" ng-data-value="true" ng-model="vm.websiteModel.allowCashAsPaymentMethod" class="ng-pristine ng-untouched ng-valid ng-empty" style="position: absolute; opacity: 0;" /><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                    <label for="allowCashAsPaymentMethod" style="padding-left: 10px; font-weight: bold; line-height: 21px;">Allow Cash Payments</label>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.stripeWebsiteKey.$pristine }">
                  <label class="col-sm-2 control-label">Stripe public key:</label>
                  <div class="col-sm-10">
                    <input name="stripeWebsiteKey" ng-model="vm.websiteModel.stripeWebsiteKey" type="text" placeholder="Ex: pk_live_ONerdf23nWVZSOENc8TUmS25qopSD" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.stripeServerKey.$pristine }">
                  <label class="col-sm-2 control-label">Stripe server key:</label>
                  <div class="col-sm-10">
                    <input name="stripeServerKey" ng-model="vm.websiteModel.stripeServerKey" type="text" placeholder="Ex: sk_live_ikGsaRbvf8qQQxg78Xrm6W2r" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.paypalClientId.$pristine }">
                  <label class="col-sm-2 control-label">PayPal Client ID:</label>
                  <div class="col-sm-10">
                    <input name="paypalClientId" ng-model="vm.websiteModel.paypalClientId" type="text" placeholder="Ex: ASgVZGisLTTHG82smXIoBKUkHxEW8XQ5WQK2nmmmys_UTrmeb8BCegSTByu27EzXqQepj_ZlqoNuZI39" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-empty
                    " />
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteDetailsForm.paypalClientSecret.$pristine }">
                  <label class="col-sm-2 control-label">PayPal Client Secret:</label>
                  <div class="col-sm-10">
                    <input name="paypalClientSecret" ng-model="vm.websiteModel.paypalClientSecret" type="text" placeholder="Ex: EEuhVzwMY2NsBhlriB8lAAShI6A6MeQXy-z5nD78jbBcJ7A8BuXUdntsr6tMsyVpdVo0FCJkLCD74iWR" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-empty
                    " />
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-12">
                  <button class="btn btn-primary m-r-sm">
                    Save changes
                  </button>
                  <button class="btn btn-danger m-l-sm">
                    Reset changes
                  </button>
                </div>
              </div>
            </form>
          </edit-website-operations-settings>

          <br />
          <hr />
          <br />

          <edit-website-files-settings website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'">
            <form name="vm.websiteDetailsForm" class="form-horizontal">
              <div class="row">
                <div class="form-group field-changed">
                  <label class="col-sm-2 control-label">Admin Logo</label>
                  <div class="col-sm-10">
                    <p>
                      Will be shown on admin navigation panel. Should be larger
                      than 300 x 160 px
                    </p>
                    <upload-image class="upload-image" image="vm.websiteModel.adminLogo">
                      <div class="row m-b-xl">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-4">
                              
                            <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="adminlogo"  accept="image/*" class="btn btn-success" onchange="document.getElementById('adminblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 m-t-xs" ng-show="vm.image.url != null">
                              <div class="m-t-md" style="display: inline-block; position: relative;">
                              <img id="adminblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </upload-image>
                  </div>
                </div>
                <div class="form-group field-changed" ng-class="{'field-changed' : !vm.websiteDetailsForm.mainLogo.$pristine }">
                  <label class="col-sm-2 control-label">Login &amp; Register Logo</label>
                  <div class="col-sm-10">
                    <p>
                      Will be shown on Login and Register pages. Should be larger
                      than 300 x 160 px
                    </p>
                    <upload-image class="upload-image ng-isolate-scope" image="vm.websiteModel.mainLogo">
                      <div class="row m-b-xl">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="loginlogo"  accept="image/*" class="btn btn-success" onchange="document.getElementById('loginblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
      
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 m-t-xs" ng-show="vm.image.url != null">
                              <div class="m-t-md" style="display: inline-block; position: relative;">
                              <img id="loginblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </upload-image>
                  </div>
                </div>
                <hr />
                <div class="form-group field-changed" ng-class="{'field-changed' : !vm.websiteDetailsForm.invoiceLogo.$pristine }">
                  <label class="col-sm-2 control-label">Invoice Logo</label>
                  <div class="col-sm-10">
                    <p>
                      Will be shown on invoice pages. Should be larger then 300 x
                      160 px
                    </p>
                    <upload-image class="upload-image ng-isolate-scope" image="vm.websiteModel.invoiceLogo">
                      <div class="row m-b-xl">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="invoicelogo"  accept="image/*" class="btn btn-success" onchange="document.getElementById('invoiceblah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 m-t-xs" ng-show="vm.image.url != null">
                              <div class="m-t-md" style="display: inline-block; position: relative;">
                              <img id="invoiceblah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </upload-image>
                  </div>
                </div>
              </div>
              <div class="row text-center" ng-hide="vm.userDetailsForm.$pristine">
                <div class="col-sm-12">
                  <button class="btn btn-primary m-r-sm" ng-click="vm.updateWebsite()">
                    Save changes
                  </button>
                  <button class="btn btn-danger m-l-sm" ng-click="vm.cancel()">
                    Reset changes
                  </button>
                </div>
              </div>
            </form>
          </edit-website-files-settings>

          <br />
          <hr />
          <br />
          <edit-website-iframe-settings website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" class="ng-isolate-scope">
            <h2>Take online bookings</h2>
            <form name="vm.websiteIframeForm" class="form-horizontal ng-pristine ng-valid">
              <div class="row m-b-md">
                <label class="col-sm-2 control-label">Direct booking</label>
                <div class="col-sm-10">
                  <div>
                    <a style="line-height: 33px; font-size: 17px;" target="_blank" ng-href="https://account.chauffeurbookingsoftware.com/book-trip/02f8678a-c8f1-451a-960c-9c4ce9121cce/" class="ng-binding" href="https://account.chauffeurbookingsoftware.com/book-trip/02f8678a-c8f1-451a-960c-9c4ce9121cce/">https://account.chauffeurbookingsoftware.com/book-trip/02f8678a-c8f1-451a-960c-9c4ce9121cce/</a>
                    <button class="btn btn-xs btn-success" ng-click="vm.copyToClipboard(vm.websiteModel.directBookingUrl)">
                      <i class="fa fa-copy"></i>Copy
                    </button>
                  </div>
                </div>
              </div>
              <div class="row m-b-xl">
                <label class="col-sm-2 control-label">IFrame Integration</label>
                <div class="col-sm-10">
                  <pre style="position: relative;"><code class="html ng-binding hljs xml"><span class="hljs-comment">&lt;!-- In Html: --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">iframe</span> <span class="hljs-attr">id</span> =<span class="hljs-string">'booking-frame'</span> <span class="hljs-attr">width</span> = <span class="hljs-string">'100%'</span> <span class="hljs-attr">frameBorder</span> = <span class="hljs-string">'0'</span> <span class="hljs-attr">src</span> = <span class="hljs-string">'https://account.chauffeurbookingsoftware.com/book/1/02f8678a-c8f1-451a-960c-9c4ce9121cce'</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Your browser does not support iframes.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">iframe</span>&gt;</span>

<span class="hljs-comment">&lt;!--Scripts: --&gt;</span>
<span class="hljs-comment">&lt;!--Do not include if your website already use JQuery --&gt;</span> 
<span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">'https://code.jquery.com/jquery-3.3.1.min.js'</span> <span class="hljs-attr">integrity</span>=<span class="hljs-string">'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8='</span> <span class="hljs-attr">crossorigin</span>=<span class="hljs-string">'anonymous'</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>

<span class="hljs-comment">&lt;!--Adjust IFrame height based on events --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">script</span>&gt;</span><span class="javascript">
<span class="hljs-built_in">window</span>.addEventListener(<span class="hljs-string">'message'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">e</span>) </span>{
  <span class="hljs-keyword">var</span> messagePrefix = <span class="hljs-string">'frame height: '</span>;
  <span class="hljs-keyword">var</span> messageScrollPrefix = <span class="hljs-string">'scroll into view: '</span>;

  <span class="hljs-comment">//adjust iframe height</span>
  <span class="hljs-keyword">if</span> (e.data.startsWith(messagePrefix))
  {
    <span class="hljs-keyword">var</span> scrollHeight = e.data.substring(messagePrefix.length);
    scrollHeight = <span class="hljs-built_in">parseInt</span>(scrollHeight);
    <span class="hljs-keyword">var</span> el = <span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">'booking-frame'</span>);
    <span class="hljs-keyword">var</span> currentHeight = el.style.height;
    <span class="hljs-keyword">if</span> (currentHeight.endsWith(<span class="hljs-string">'px'</span>))
      currentHeight = currentHeight.substring(<span class="hljs-number">0</span>, currentHeight.length - <span class="hljs-number">2</span>);
    <span class="hljs-keyword">if</span> (currentHeight !== scrollHeight)
      el.style.height = scrollHeight + <span class="hljs-string">'px'</span>;
  }
  <span class="hljs-comment">//scroll to top</span>
  <span class="hljs-keyword">if</span> (e.data.startsWith(messageScrollPrefix)) { scrollElement(<span class="hljs-string">'#booking-frame'</span>); }
}, <span class="hljs-literal">false</span>);

<span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">'booking-frame'</span>).focus();

<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">scrollElement</span>(<span class="hljs-params">jQuerySelector, pixelsFromTop, continueWith</span>)
</span>{
  <span class="hljs-keyword">if</span> (!pixelsFromTop) pixelsFromTop = <span class="hljs-number">0</span>;
  <span class="hljs-keyword">var</span> navbar = $(<span class="hljs-string">'header'</span>); <span class="hljs-comment">//set your header element here</span>
  <span class="hljs-keyword">var</span> navbarHeight = navbar.length === <span class="hljs-number">0</span> ? <span class="hljs-number">0</span> : navbar.height(); <span class="hljs-comment">//or use fixed value like: 250</span>
  <span class="hljs-keyword">var</span> element = $(jQuerySelector);
  <span class="hljs-keyword">if</span> (element.length === <span class="hljs-number">0</span>) <span class="hljs-keyword">return</span>;
  <span class="hljs-keyword">var</span> domElement = element[<span class="hljs-number">0</span>];
  <span class="hljs-keyword">if</span> (<span class="hljs-keyword">this</span>.isScrolledIntoView(domElement)) <span class="hljs-keyword">return</span>;
  <span class="hljs-keyword">var</span> offset = $(jQuerySelector).offset();
  $(<span class="hljs-string">'body,html'</span>).animate({ <span class="hljs-attr">scrollTop</span>: offset.top - pixelsFromTop - navbarHeight, <span class="hljs-attr">scrollLeft</span>: offset.left }, <span class="hljs-number">500</span>, continueWith);
}

<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">isScrolledIntoView</span>(<span class="hljs-params">elem</span>)
</span>{
  <span class="hljs-keyword">var</span> docViewTop = $(<span class="hljs-built_in">window</span>).scrollTop();
  <span class="hljs-keyword">var</span> docViewBottom = docViewTop + $(<span class="hljs-built_in">window</span>).height();
  <span class="hljs-keyword">var</span> elemTop = $(elem).offset().top;
  <span class="hljs-keyword">var</span> elemBottom = elemTop + $(elem).height();
  <span class="hljs-keyword">return</span> ((elemBottom &lt;= docViewBottom) &amp;&amp; (elemTop &gt;= docViewTop));
}

</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span></code><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>
                </div>
              
              </div>
              <div class="row">
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteIframeForm.phone.$pristine }">
                  <label class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input name="mycompanyembededcodephone" ng-model="vm.websiteModel.phone" type="text" placeholder="+44 7400 419356" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>Phone number where clients can call if booking time is too
                      close or pickup/dropoff areas are not covered.</small>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteIframeForm.gpsCoordinates.$pristine }">
                  <label class="col-sm-2 control-label">Initial GPS Coordinates</label>
                  <div class="col-sm-10">
                    <input name="mycompanyembededcodegpsCoordinates" ng-model="vm.websiteModel.gpsCoordinates" type="text" placeholder="Lat, Lng (ex: 33.749099, -84.390185)" class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-not-empty
                    " />
                    <small>New booking map initial GPS coordinates to display before
                      FROM location is selected.</small>
                  </div>
                </div>
                <div class="form-group field-changed" ng-class="{'field-changed' : !vm.websiteIframeForm.termsAndCondHtml.$pristine }">
                  <label class="col-sm-2 control-label">Terms &amp; Cond</label>
                  <div class="col-sm-10">
                    <div class="
                      summernote
                      ng-isolate-scope
                      ng-valid
                      ng-pristine
                      ng-untouched
                      ng-not-empty
                    " height="300" ng-model="vm.websiteModel.termsAndCondHtml" style="display: none;"></div>
                    <div class="note-editor note-frame panel panel-default">
                      <div class="note-dropzone">
                        <div class="note-dropzone-message"></div>
                      </div>
                      <div class="note-toolbar panel-heading" role="toolbar" style="position: relative; top: 0px; width: 100%;">
                        <div class="note-btn-group btn-group note-style">
                          <div class="note-btn-group btn-group">
                            <button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              dropdown-toggle
                            " role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style">
                              <i class="note-icon-magic"></i>
                              <span class="note-icon-caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-style" role="list" aria-label="Style">
                              <li role="listitem" aria-label="p">
                                <a href="#" data-value="p">
                                  <p>Normal</p>
                                </a>
                              </li>
                              <li role="listitem" aria-label="blockquote">
                                <a href="#" data-value="blockquote">
                                  <blockquote>Quote</blockquote>
                                </a>
                              </li>
                              <li role="listitem" aria-label="pre">
                                <a href="#" data-value="pre">
                                  <pre style="position: relative;">Code<div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h1">
                                <a href="#" data-value="h1">
                                  <h1>Header 1</h1>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h2">
                                <a href="#" data-value="h2">
                                  <h2>Header 2</h2>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h3">
                                <a href="#" data-value="h3">
                                  <h3>Header 3</h3>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h4">
                                <a href="#" data-value="h4">
                                  <h4>Header 4</h4>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h5">
                                <a href="#" data-value="h5">
                                  <h5>Header 5</h5>
                                </a>
                              </li>
                              <li role="listitem" aria-label="h6">
                                <a href="#" data-value="h6">
                                  <h6>Header 6</h6>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="note-btn-group btn-group note-font">
                          <button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" role="button" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)">
                            <i class="note-icon-bold"></i></button><button type="button" class="
                            note-btn
                            btn btn-default btn-sm
                            note-btn-underline
                          " role="button" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)">
                            <i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)">
                            <i class="note-icon-eraser"></i>
                          </button>
                        </div>
                        <div class="note-btn-group btn-group note-fontname">
                          <div class="note-btn-group btn-group">
                            <button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              dropdown-toggle
                            " role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family">
                              <span class="note-current-fontname" style='font-family: "open sans";'>open sans</span>
                              <span class="note-icon-caret"></span>
                            </button>
                            <ul class="dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family">
                              <li role="listitem" aria-label="Arial">
                                <a href="#" data-value="Arial"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Arial'">Arial</span></a>
                              </li>
                              <li role="listitem" aria-label="Arial Black">
                                <a href="#" data-value="Arial Black"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Arial Black'">Arial Black</span></a>
                              </li>
                              <li role="listitem" aria-label="Comic Sans MS">
                                <a href="#" data-value="Comic Sans MS"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a>
                              </li>
                              <li role="listitem" aria-label="Courier New">
                                <a href="#" data-value="Courier New"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Courier New'">Courier New</span></a>
                              </li>
                              <li role="listitem" aria-label="Helvetica">
                                <a href="#" data-value="Helvetica"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Helvetica'">Helvetica</span></a>
                              </li>
                              <li role="listitem" aria-label="Impact">
                                <a href="#" data-value="Impact"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Impact'">Impact</span></a>
                              </li>
                              <li role="listitem" aria-label="Tahoma">
                                <a href="#" data-value="Tahoma"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Tahoma'">Tahoma</span></a>
                              </li>
                              <li role="listitem" aria-label="Times New Roman">
                                <a href="#" data-value="Times New Roman"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Times New Roman'">Times New Roman</span></a>
                              </li>
                              <li role="listitem" aria-label="Verdana">
                                <a href="#" data-value="Verdana"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'Verdana'">Verdana</span></a>
                              </li>
                              <li role="listitem" aria-label="open sans">
                                <a href="#" data-value="open sans" class="checked"><i class="note-icon-menu-check"></i>
                                  <span style="font-family: 'open sans'">open sans</span></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="note-btn-group btn-group note-color">
                          <div class="
                            note-btn-group
                            btn-group
                            note-color note-color-all
                          ">
                            <button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              note-current-color-button
                            " role="button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00">
                              <i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button><button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              dropdown-toggle
                            " role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color">
                              <span class="note-icon-caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="list">
                              <div class="note-palette">
                                <div class="note-palette-title">
                                  Background Color
                                </div>
                                <div>
                                  <button type="button" class="note-color-reset btn btn-light" data-event="backColor" data-value="inherit">
                                    Transparent
                                  </button>
                                </div>
                                <div class="note-holder" data-event="backColor">
                                  <div class="note-color-palette">
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <button type="button" class="note-color-select btn" data-event="openPalette" data-value="backColorPicker">
                                    Select
                                  </button>
                                  <input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette" />
                                </div>
                                <div class="note-holder-custom" id="backColorPalette" data-event="backColor">
                                  <div class="note-color-palette">
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="note-palette">
                                <div class="note-palette-title">
                                  Foreground Color
                                </div>
                                <div>
                                  <button type="button" class="note-color-reset btn btn-light" data-event="removeFormat" data-value="foreColor">
                                    Reset to default
                                  </button>
                                </div>
                                <div class="note-holder" data-event="foreColor">
                                  <div class="note-color-palette">
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button>
                                    </div>
                                    <div class="note-color-row">
                                      <button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <button type="button" class="note-color-select btn" data-event="openPalette" data-value="foreColorPicker">
                                    Select
                                  </button>
                                  <input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette" />
                                  <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor">
                                    <div class="note-color-palette">
                                      <div class="note-color-row">
                                        <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </ul>
                          </div>
                        </div>
                        <div class="note-btn-group btn-group note-para">
                          <button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)">
                            <i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)">
                            <i class="note-icon-orderedlist"></i>
                          </button>
                          <div class="note-btn-group btn-group">
                            <button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              dropdown-toggle
                            " role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph">
                              <i class="note-icon-align-left"></i>
                              <span class="note-icon-caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="list">
                              <div class="note-btn-group btn-group note-align">
                                <button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)">
                                  <i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)">
                                  <i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)">
                                  <i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)">
                                  <i class="note-icon-align-justify"></i>
                                </button>
                              </div>
                              <div class="note-btn-group btn-group note-list">
                                <button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)">
                                  <i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])">
                                  <i class="note-icon-align-indent"></i>
                                </button>
                              </div>
                            </ul>
                          </div>
                        </div>
                        <div class="note-btn-group btn-group note-table">
                          <div class="note-btn-group btn-group">
                            <button type="button" class="
                              note-btn
                              btn btn-default btn-sm
                              dropdown-toggle
                            " role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table">
                              <i class="note-icon-table"></i>
                              <span class="note-icon-caret"></span>
                            </button>
                            <ul class="dropdown-menu note-table" role="list" aria-label="Table">
                              <div class="note-dimension-picker">
                                <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                <div class="note-dimension-picker-highlighted"></div>
                                <div class="note-dimension-picker-unhighlighted"></div>
                              </div>
                              <div class="note-dimension-display">1 x 1</div>
                            </ul>
                          </div>
                        </div>
                        <div class="note-btn-group btn-group note-insert">
                          <button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)">
                            <i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture">
                            <i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Video" data-original-title="Video">
                            <i class="note-icon-video"></i>
                          </button>
                        </div>
                        <div class="note-btn-group btn-group note-view">
                          <button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen" role="button" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen">
                            <i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-codeview" role="button" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View">
                            <i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-default btn-sm" role="button" tabindex="-1" title="" aria-label="Help" data-original-title="Help">
                            <i class="note-icon-question"></i>
                          </button>
                        </div>
                      </div>
                      <div class="note-editing-area">
                        <div class="note-handle">
                          <div class="note-control-selection" style="display: none;">
                            <div class="note-control-selection-bg"></div>
                            <div class="note-control-holder note-control-nw"></div>
                            <div class="note-control-holder note-control-ne"></div>
                            <div class="note-control-holder note-control-sw"></div>
                            <div class="note-control-sizing note-control-se"></div>
                            <div class="note-control-selection-info"></div>
                          </div>
                        </div>
                        <textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>
                        <div class="note-editable" contenteditable="true" role="textbox" aria-multiline="true" style="height: 300px;">
                          <section data-id="363e1ed" data-element_type="section" class="
                            elementor-element
                            elementor-element-edit-mode
                            elementor-element-363e1ed
                            elementor-section
                            elementor-inner-section
                            elementor-section-boxed
                            elementor-section-height-default
                          " data-model-cid="c53">
                            <div class="
                              elementor-container elementor-column-gap-default
                            ">
                              <div class="elementor-row">
                                <div data-id="d2e5851" data-element_type="column" class="
                                  elementor-element
                                  elementor-element-edit-mode
                                  elementor-element-d2e5851
                                  elementor-element--toggle-edit-tools
                                  elementor-column elementor-inner-column
                                " data-col="100" data-model-cid="c54">
                                  <div class="
                                    elementor-column-wrap
                                    elementor-element-populated
                                  ">
                                    <div class="elementor-widget-wrap">
                                      <div data-id="254a3b2" data-element_type="widget" class="
                                        elementor-element
                                        elementor-element-edit-mode
                                        elementor-element-254a3b2
                                        elementor-element--toggle-edit-tools
                                        elementor-widget
                                        elementor-widget-text-editor
                                        elementor-element-editable
                                      " data-model-cid="c58" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                          <div class="
                                            elementor-text-editor
                                            elementor-clearfix
                                            elementor-inline-editing
                                          " data-elementor-setting-key="editor" data-elementor-inline-editing-toolbar="advanced">
                                            <div class="
                                              elementor-element
                                              elementor-element-254a3b2
                                              elementor-widget
                                              elementor-widget-text-editor
                                            " data-id="254a3b2" data-element_type="widget" data-widget_type="text-editor.default">
                                              <div class="elementor-widget-container">
                                                <div class="
                                                  elementor-text-editor
                                                  elementor-clearfix
                                                ">
                                                  <section class="
                                                    elementor-element
                                                    elementor-element-a9ed76c
                                                    elementor-section-boxed
                                                    elementor-section-height-default
                                                    elementor-section-height-default
                                                    elementor-section
                                                    elementor-top-section
                                                  " data-id="a9ed76c" data-element_type="section">
                                                    <div class="
                                                      elementor-container
                                                      elementor-column-gap-default
                                                    ">
                                                      <div class="elementor-row">
                                                        <div class="
                                                          elementor-element
                                                          elementor-element-7d9f8c8
                                                          elementor-column
                                                          elementor-col-100
                                                          elementor-top-column
                                                        " data-id="7d9f8c8" data-element_type="column">
                                                          <div class="
                                                            elementor-column-wrap
                                                            elementor-element-populated
                                                          ">
                                                            <div class="
                                                              elementor-widget-wrap
                                                            ">
                                                              <div class="
                                                                elementor-element
                                                                elementor-element-637e6ee
                                                                elementor-widget
                                                                elementor-widget-text-editor
                                                              " data-id="637e6ee" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="
                                                                  elementor-widget-container
                                                                ">
                                                                  <div class="
                                                                    elementor-text-editor
                                                                    elementor-clearfix
                                                                  ">
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">taxi
                                                                        online
                                                                        booking
                                                                        service is
                                                                        available
                                                                        at
                                                                        website&nbsp;<b><u><a href="http://www.taxibookingonline.com">www.taxibookingonline.com</a>.<o:p></o:p></u></b></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">&nbsp;The
                                                                        following
                                                                        Terms of
                                                                        Use are a
                                                                        legally
                                                                        binding
                                                                        contract
                                                                        between
                                                                        your good
                                                                        self and
                                                                        <b>Taxibookingonline.com </b>regarding
                                                                        the use of
                                                                        the
                                                                        <b>Taxibookingonline.com </b>website,
                                                                        mobile
                                                                        applications,
                                                                        networks,
                                                                        and other
                                                                        features
                                                                        or
                                                                        services.<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">The
                                                                            following
                                                                            is a
                                                                            summary
                                                                            of the
                                                                            key
                                                                            terms
                                                                            of
                                                                            this
                                                                            service:</span></u></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <ol start="1" type="1">
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>Payment(s)
                                                                          through
                                                                          this
                                                                          Service
                                                                          may only
                                                                          be made
                                                                          with a
                                                                          Master
                                                                          or Visa
                                                                          Credit
                                                                          or Debit
                                                                          card.
                                                                          <o:p></o:p>
                                                                        </span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>Before
                                                                          using
                                                                          this
                                                                          Service,
                                                                          it is
                                                                          recommended
                                                                          that the
                                                                          user
                                                                          shall
                                                                          make
                                                                          necessary
                                                                          enquiry
                                                                          about
                                                                          the
                                                                          charges
                                                                          or fees
                                                                          payable
                                                                          against
                                                                          the
                                                                          Credit/Debit
                                                                          card
                                                                          used
                                                                          from
                                                                          Credit
                                                                          Card or
                                                                          the
                                                                          Debit
                                                                          Card
                                                                          service
                                                                          provider
                                                                          i.e.,
                                                                          the
                                                                          respective
                                                                          Bank.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          credit
                                                                          card
                                                                          information
                                                                          supplied
                                                                          at the
                                                                          time of
                                                                          using
                                                                          the
                                                                          service
                                                                          is
                                                                          processed
                                                                          by the
                                                                          payment
                                                                          gateway
                                                                          of the
                                                                          service
                                                                          provider
                                                                          and is
                                                                          not
                                                                          supplied
                                                                          to
                                                                          <b>Taxibookingonline.com</b>. It is
                                                                          the sole
                                                                          responsibility
                                                                          of the
                                                                          User of
                                                                          the
                                                                          service
                                                                          to
                                                                          ensure
                                                                          that the
                                                                          information
                                                                          entered
                                                                          in the
                                                                          relevant
                                                                          fields
                                                                          are
                                                                          correct.
                                                                          It is
                                                                          recommended
                                                                          that you
                                                                          take and
                                                                          retain a
                                                                          copy of
                                                                          the
                                                                          transaction
                                                                          for
                                                                          record
                                                                          keeping
                                                                          purposes,
                                                                          which
                                                                          might
                                                                          assist
                                                                          in
                                                                          resolution
                                                                          of any
                                                                          disputes
                                                                          that may
                                                                          arise
                                                                          out or
                                                                          usage of
                                                                          the
                                                                          service<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          agrees,
                                                                          understands
                                                                          and
                                                                          confirms
                                                                          that
                                                                          his/ her
                                                                          personal
                                                                          data
                                                                          including
                                                                          without
                                                                          limitation
                                                                          details
                                                                          relating
                                                                          to debit
                                                                          card/
                                                                          credit
                                                                          card/net
                                                                          banking
                                                                          transmitted
                                                                          over the
                                                                          Internet
                                                                          may be
                                                                          susceptible
                                                                          to
                                                                          misuse,
                                                                          hacking,
                                                                          theft
                                                                          and/ or
                                                                          fraud
                                                                          and that
                                                                          <b>Taxibookingonline.com </b>&nbsp;or
                                                                          the
                                                                          Payment
                                                                          Service
                                                                          Provider(s)
                                                                          have no
                                                                          control
                                                                          over
                                                                          such
                                                                          matters.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          service
                                                                          is
                                                                          provided
                                                                          using a
                                                                          payment
                                                                          gateway
                                                                          service
                                                                          provider
                                                                          through
                                                                          a secure
                                                                          website.
                                                                          However,
                                                                          neither
                                                                          the
                                                                          payment
                                                                          gateway
                                                                          service
                                                                          provider
                                                                          nor the
                                                                          <b>Taxibookingonline.com</b>
                                                                          gives
                                                                          any
                                                                          assurance,
                                                                          that the
                                                                          information
                                                                          so
                                                                          provided
                                                                          online
                                                                          by a
                                                                          user is
                                                                          secured
                                                                          or may
                                                                          be read
                                                                          or
                                                                          intercepted
                                                                          by
                                                                          <b>Taxibookingonline.com </b>and
                                                                          does not
                                                                          accept
                                                                          or
                                                                          assume
                                                                          any
                                                                          liability
                                                                          in the
                                                                          event of
                                                                          such
                                                                          unauthorized
                                                                          interception,
                                                                          hacking
                                                                          or other
                                                                          unauthorized
                                                                          access
                                                                          to
                                                                          information
                                                                          provided
                                                                          by a
                                                                          user of
                                                                          the
                                                                          service.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <b><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>Taxibookingonline.com</span></b><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
     "Times New Roman";mso-fareast-language:EN-SG'>
                                                                          and/or
                                                                          the
                                                                          Payment
                                                                          Service
                                                                          Providers
                                                                          shall
                                                                          not be
                                                                          liable
                                                                          for any
                                                                          inaccuracy,
                                                                          error or
                                                                          delay
                                                                          in, or
                                                                          omission
                                                                          of (a)
                                                                          any
                                                                          data,
                                                                          information
                                                                          or
                                                                          message,
                                                                          or (b)
                                                                          the
                                                                          transmission
                                                                          or
                                                                          delivery
                                                                          of any
                                                                          such
                                                                          data,
                                                                          information
                                                                          or
                                                                          message;
                                                                          or (c)
                                                                          any loss
                                                                          or
                                                                          damage
                                                                          arising
                                                                          from or
                                                                          occasioned
                                                                          by any
                                                                          such
                                                                          inaccuracy,
                                                                          error,
                                                                          delay or
                                                                          omission,
                                                                          non-performance
                                                                          or
                                                                          interruption
                                                                          in any
                                                                          such
                                                                          data,
                                                                          information
                                                                          or
                                                                          message.
                                                                          Under no
                                                                          circumstances
                                                                          shall
                                                                          the
                                                                          <b>Taxibookingonline.com</b>
                                                                          and/or
                                                                          the
                                                                          Payment
                                                                          Service
                                                                          Providers,
                                                                          its
                                                                          employees,
                                                                          directors,
                                                                          and its
                                                                          third
                                                                          party
                                                                          agents
                                                                          involved
                                                                          in
                                                                          processing,
                                                                          delivering
                                                                          or
                                                                          managing
                                                                          the
                                                                          Services,
                                                                          be
                                                                          liable
                                                                          for any
                                                                          direct,
                                                                          indirect,
                                                                          incidental,
                                                                          special
                                                                          or
                                                                          consequential
                                                                          damages,
                                                                          or any
                                                                          damages
                                                                          whatsoever,
                                                                          including
                                                                          punitive
                                                                          or
                                                                          exemplary
                                                                          arising
                                                                          out of
                                                                          or in
                                                                          any way
                                                                          connected
                                                                          with the
                                                                          provision
                                                                          of or
                                                                          any
                                                                          inadequacy
                                                                          or
                                                                          deficiency
                                                                          in the
                                                                          provision
                                                                          of the
                                                                          Services
                                                                          or
                                                                          resulting
                                                                          from
                                                                          unauthorized
                                                                          access
                                                                          or
                                                                          alteration
                                                                          of
                                                                          transmissions
                                                                          of data
                                                                          or
                                                                          arising
                                                                          from
                                                                          suspension
                                                                          or
                                                                          termination
                                                                          of the
                                                                          Service.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          agrees
                                                                          that
                                                                          <b>Taxibookingonline.com</b>
                                                                          or any
                                                                          of its
                                                                          employees
                                                                          will not
                                                                          be held
                                                                          liable
                                                                          By the
                                                                          Applicant
                                                                          for any
                                                                          loss or
                                                                          damages
                                                                          arising
                                                                          from
                                                                          your use
                                                                          of, or
                                                                          reliance
                                                                          upon the
                                                                          information
                                                                          contained
                                                                          on the
                                                                          Website,
                                                                          or any
                                                                          failure
                                                                          to
                                                                          comply
                                                                          with
                                                                          these
                                                                          Terms
                                                                          and
                                                                          Conditions
                                                                          where
                                                                          such
                                                                          failure
                                                                          is due
                                                                          to
                                                                          circumstance
                                                                          beyond
                                                                          MIDAS
                                                                          reasonable
                                                                          control.<o:p></o:p></span>
                                                                      </li>
                                                                    </ol>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Debit/Credit
                                                                            Card,
                                                                            Bank
                                                                            Account
                                                                            Details:</span></u></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <ul type="disc">
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          agrees
                                                                          that the
                                                                          debit/credit
                                                                          card
                                                                          details
                                                                          provided
                                                                          by him/
                                                                          her for
                                                                          use of
                                                                          the
                                                                          aforesaid
                                                                          Service(s)
                                                                          must be
                                                                          correct
                                                                          and
                                                                          accurate
                                                                          and that
                                                                          the
                                                                          Applicant
                                                                          shall
                                                                          not use
                                                                          a Debit/
                                                                          credit
                                                                          card,
                                                                          that is
                                                                          not
                                                                          lawfully
                                                                          owned by
                                                                          him/ her
                                                                          or the
                                                                          use of
                                                                          which is
                                                                          not
                                                                          authorized
                                                                          by the
                                                                          lawful
                                                                          owner
                                                                          thereof.
                                                                          The
                                                                          Applicant
                                                                          further
                                                                          agrees
                                                                          and
                                                                          undertakes
                                                                          to
                                                                          Provide
                                                                          correct
                                                                          and
                                                                          valid
                                                                          debit/credit
                                                                          card
                                                                          details.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          may pay
                                                                          his/ her
                                                                          application/initial
                                                                          fees
                                                                          to<b>
                                                                            Taxibookingonline.com</b>
                                                                          by using
                                                                          a
                                                                          debit/credit
                                                                          card or
                                                                          through
                                                                          online
                                                                          banking
                                                                          account.
                                                                          The
                                                                          Applicant
                                                                          warrants,
                                                                          agrees
                                                                          and
                                                                          confirms
                                                                          that
                                                                          when he/
                                                                          she
                                                                          initiates
                                                                          a
                                                                          payment
                                                                          transaction
                                                                          and/or
                                                                          issues
                                                                          an
                                                                          online
                                                                          payment
                                                                          instruction
                                                                          and
                                                                          provides
                                                                          his/ her
                                                                          card /
                                                                          bank
                                                                          details:<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          is fully
                                                                          and
                                                                          lawfully
                                                                          entitled
                                                                          to use
                                                                          such
                                                                          credit /
                                                                          debit
                                                                          card,
                                                                          bank
                                                                          account
                                                                          for such
                                                                          transactions.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          is
                                                                          responsible
                                                                          to
                                                                          ensure
                                                                          that the
                                                                          card/
                                                                          bank
                                                                          account
                                                                          details
                                                                          provided
                                                                          by him/
                                                                          her are
                                                                          accurate.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          authorizes
                                                                          debit of
                                                                          the
                                                                          nominated
                                                                          card/
                                                                          bank
                                                                          account
                                                                          for the
                                                                          Payment
                                                                          of fees
                                                                          selected
                                                                          by such
                                                                          Applicant
                                                                          along
                                                                          with the
                                                                          applicable
                                                                          Fees.<o:p></o:p></span>
                                                                      </li>
                                                                      <li class="
                                                                        MsoNormal
                                                                      " style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                        <span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-fareast-language:EN-SG'>The
                                                                          Applicant
                                                                          is
                                                                          responsible
                                                                          to
                                                                          ensure
                                                                          that
                                                                          sufficient
                                                                          credit
                                                                          is
                                                                          available
                                                                          on the
                                                                          nominated
                                                                          card/
                                                                          bank
                                                                          account
                                                                          at the
                                                                          time of
                                                                          making
                                                                          the
                                                                          payment
                                                                          to
                                                                          permit
                                                                          the
                                                                          Payment
                                                                          of the
                                                                          dues
                                                                          payable
                                                                          or fees
                                                                          dues
                                                                          selected
                                                                          by the
                                                                          Applicant
                                                                          inclusive
                                                                          of the
                                                                          applicable
                                                                          Fee.<o:p></o:p></span>
                                                                      </li>
                                                                    </ul>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Disclaimer
                                                                            and
                                                                            Limitation
                                                                            of
                                                                            liability:</span></u></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Taxibookingonline.com</span></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        does not
                                                                        accept
                                                                        liability
                                                                        for any
                                                                        damage,
                                                                        loss, cost
                                                                        (including
                                                                        legal
                                                                        costs),
                                                                        expenses,
                                                                        indirect
                                                                        losses or
                                                                        consequential
                                                                        damage of
                                                                        any kind
                                                                        which may
                                                                        be
                                                                        suffered
                                                                        or
                                                                        incurred
                                                                        by the
                                                                        User from
                                                                        the use of
                                                                        this
                                                                        service.<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Governing
                                                                            law</span></u></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">These
                                                                        terms and
                                                                        conditions
                                                                        are
                                                                        governed
                                                                        by the
                                                                        laws of
                                                                        Singapore
                                                                        and the
                                                                        competent
                                                                        courts in
                                                                        Singapore
                                                                        shall have
                                                                        exclusive
                                                                        jurisdiction.<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Refund/Cancellation
                                                                            Policy:&nbsp;</span></u></b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Kindly
                                                                        refer to
                                                                        your
                                                                        confirmation
                                                                        for
                                                                        cancellation
                                                                        policy.<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:red;mso-fareast-language:EN-SG'>Child
                                                                            Seat&nbsp;<o:p></o:p></span></u></b>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#7F7F7F;mso-themecolor:text1;
mso-themetint:128;mso-style-textfill-fill-color:#7F7F7F;mso-style-textfill-fill-themecolor:
text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:
"lumm=50000 lumo=50000";mso-fareast-language:EN-SG'>It is
                                                                          important
                                                                          to have
                                                                          a child
                                                                          seat
                                                                          during
                                                                          your
                                                                          travel.
                                                                          (Kindly
                                                                          check on
                                                                          the
                                                                          rules
                                                                          and
                                                                          regulation.
                                                                          on the
                                                                          requirements
                                                                          of the
                                                                          child
                                                                          seat
                                                                          before
                                                                          confirming
                                                                          the
                                                                          order
                                                                        </span></b><b><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:red;mso-fareast-language:EN-SG'>
                                                                          <o:p></o:p>
                                                                        </span></b>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">According
                                                                        to some
                                                                        countries
                                                                        like
                                                                        Singapore,
                                                                        Australia
                                                                        and more,
                                                                        any child
                                                                        below the
                                                                        height of
                                                                        1.35m will
                                                                        be
                                                                        required
                                                                        to be
                                                                        secured
                                                                        with a
                                                                        child
                                                                        restraint
                                                                        appropriate
                                                                        for a
                                                                        person of
                                                                        that
                                                                        height and
                                                                        weight,
                                                                        use a
                                                                        booster
                                                                        seat to
                                                                        supplement
                                                                        the seat
                                                                        belt or an
                                                                        approved
                                                                        adjustable
                                                                        seat belt.
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Such
                                                                        countries
                                                                        law is
                                                                        strict as
                                                                        the fine
                                                                        and
                                                                        demerit
                                                                        points are
                                                                        high, we
                                                                        there for
                                                                        seek your
                                                                        co-operation
                                                                        in
                                                                        requesting
                                                                        for child
                                                                        seat or
                                                                        having
                                                                        onboard
                                                                        your own
                                                                        child
                                                                        seat,<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><u><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:red;mso-fareast-language:EN-SG'>Luggage’s&nbsp;Rule<o:p></o:p></span></u></b>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Please
                                                                          confirm
                                                                          the
                                                                          number
                                                                          of
                                                                          person
                                                                          and the
                                                                          number
                                                                          of
                                                                          suitcases
                                                                          in the
                                                                          booking
                                                                          summary
                                                                          page.<o:p></o:p></span></b>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <b><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">As
                                                                          comfort
                                                                          and
                                                                          safety
                                                                          is our
                                                                          key
                                                                          priority,
                                                                          you are
                                                                          advised
                                                                          to carry
                                                                          your
                                                                          handbags
                                                                          or
                                                                          backpacks
                                                                          with you
                                                                          in the
                                                                          car
                                                                          cabin so
                                                                          long as
                                                                          it does
                                                                          not
                                                                          distract
                                                                          the
                                                                          driver’s
                                                                          view. We
                                                                          do not
                                                                          encourage
                                                                          suitcases
                                                                          be
                                                                          placed
                                                                          on
                                                                          passenger
                                                                          seats or
                                                                          on the
                                                                          passenger
                                                                          lap. All
                                                                          suitcases
                                                                          are to
                                                                          be
                                                                          stored
                                                                          in the
                                                                          car
                                                                          booth
                                                                          compartment.
                                                                          <u>
                                                                            <o:p></o:p>
                                                                          </u></span></b>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">If you
                                                                        are
                                                                        bringing
                                                                        along
                                                                        bulky or
                                                                        heavy
                                                                        items such
                                                                        as
                                                                        &nbsp;bicycles,
                                                                        surfing
                                                                        boards,
                                                                        wheelchairs,
                                                                        baby
                                                                        strollers
                                                                        or even
                                                                        boxes,
                                                                        please
                                                                        notify is
                                                                        by sending
                                                                        us an
                                                                        email to
                                                                        <a href="mailto:enquiry@taxibookingonline.com">enquiry@taxibookingonline.com</a>
                                                                        and we
                                                                        will
                                                                        advise you
                                                                        the which
                                                                        type of
                                                                        taxi is
                                                                        &nbsp;suitable
                                                                        for
                                                                        you.<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Arial, sans-serif;">For any
                                                                        other
                                                                        related
                                                                        inquiries,
                                                                        feel free
                                                                        to write
                                                                        to us
                                                                        at&nbsp;</span><span style="font-size: 10pt; font-family: Helvetica, sans-serif;"><a href="mailto:enquiry@taxibookingonline.com">enquiry@taxibookingonline.com</a></span><span style="font-size: 10pt; font-family: Arial, sans-serif;">.com&nbsp;or
                                                                        call our
                                                                        direct
                                                                        hotline at
                                                                        + 62 778
                                                                        8100
                                                                        906</span><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                                        <o:p></o:p>
                                                                      </span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">&nbsp;</span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    " style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                                      <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Thank
                                                                        You<o:p></o:p></span>
                                                                    </p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    ">
                                                                      <span style="font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;">Taxibookingonline.com<o:p></o:p></span>
                                                                    </p>
                                                                    <p></p>
                                                                    <p class="
                                                                      MsoNormal
                                                                    ">
                                                                      <o:p>&nbsp;</o:p>
                                                                    </p>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </section>
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
                            </div>
                          </section>
                          <section data-id="1eb9aa0" data-element_type="section" class="
                            elementor-element
                            elementor-element-edit-mode
                            elementor-element-1eb9aa0
                            elementor-section
                            elementor-inner-section
                            elementor-section-boxed
                            elementor-section-height-default
                          " data-model-cid="c65">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-shape elementor-shape-top"></div>
                            <div class="elementor-shape elementor-shape-bottom"></div>
                            <div class="
                              elementor-container elementor-column-gap-default
                            ">
                              <div class="elementor-row">
                                <div data-id="46f0fd1" data-element_type="column" class="
                                  elementor-element
                                  elementor-element-edit-mode
                                  elementor-element-46f0fd1
                                  elementor-element--toggle-edit-tools
                                  elementor-column elementor-inner-column
                                " data-col="100" data-model-cid="c66">
                                  <div class="
                                    elementor-column-wrap
                                    elementor-element-populated
                                  ">
                                    <div class="elementor-background-overlay"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                      <output class="note-status-output" aria-live="polite"></output>
                      <div class="note-statusbar" role="status">
                        <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">
                          <div class="note-icon-bar"></div>
                          <div class="note-icon-bar"></div>
                          <div class="note-icon-bar"></div>
                        </div>
                      </div>
                      <div class="modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                ×
                              </button>
                              <h4 class="modal-title">Insert Link</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group note-form-group">
                                <label class="note-form-label">Text to display</label><input class="
                                  note-link-text
                                  form-control
                                  note-form-control note-input
                                " type="text" />
                              </div>
                              <div class="form-group note-form-group">
                                <label class="note-form-label">To what URL should this link go?</label><input class="
                                  note-link-url
                                  form-control
                                  note-form-control note-input
                                " type="text" value="http://" />
                              </div>
                              <div class="checkbox sn-checkbox-open-in-new-window">
                                <label>
                                  <input role="checkbox" type="checkbox" checked="" aria-checked="true" />Open in new window</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="button" href="#" class="
                                btn btn-primary
                                note-btn note-btn-primary note-link-btn
                              " value="Insert Link" disabled="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                ×
                              </button>
                              <h4 class="modal-title">Insert Image</h4>
                            </div>
                            <div class="modal-body">
                              <div class="
                                form-group
                                note-form-group note-group-select-from-files
                              ">
                                <label class="note-form-label">Select from files</label><input class="
                                  note-image-input note-form-control note-input
                                " type="file" name="files" accept="image" multiple="multiple" />
                              </div>
                              <div class="form-group note-group-image-url" style="overflow:auto;">
                                <label class="note-form-label">Image URL</label><input class="
                                  note-image-url
                                  form-control
                                  note-form-control note-input
                                  col-md-12
                                " type="text" />
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="button" href="#" class="
                                btn btn-primary
                                note-btn note-btn-primary note-image-btn
                              " value="Insert Image" disabled="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                ×
                              </button>
                              <h4 class="modal-title">Insert Video</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group note-form-group row-fluid">
                                <label class="note-form-label">Video URL
                                  <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion
                                    or Youku)</small></label><input class="
                                  note-video-url
                                  form-control
                                  note-form-control note-input
                                " type="text" />
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="button" href="#" class="
                                btn btn-primary
                                note-btn note-btn-primary note-video-btn
                              " value="Insert Video" disabled="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                ×
                              </button>
                              <h4 class="modal-title">Help</h4>
                            </div>
                            <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P
                                tag)</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                              <div class="help-list-item"></div>
                              <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                            </div>
                            <div class="modal-footer">
                              <p class="text-center">
                                <a href="http://summernote.org/" target="_blank">Summernote 0.8.11</a>
                                ·
                                <a href="https://github.com/summernote/summernote" target="_blank">Project</a>
                                ·
                                <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" ng-class="{'field-changed' : !vm.websiteIframeForm.customCss.$pristine }">
                  <label class="col-sm-2 control-label">Custom CSS</label>
                  <div class="col-sm-10">
                    <textarea name="customCss" rows="8" ng-model="vm.websiteModel.customCss" type="text" placeholder="Any custom css for better styling..." class="
                      form-control
                      ng-pristine ng-untouched ng-valid ng-empty
                    ">
                  </textarea>
                  </div>
                </div>
              </div>
              <div class="row text-center ng-hide" ng-hide="vm.websiteIframeForm.$pristine">
                <div class="col-sm-12">
                  <button class="btn btn-primary m-r-sm" ng-click="vm.updateWebsite()">
                    Save changes
                  </button>
                  <button class="btn btn-danger m-l-sm" ng-click="vm.cancel()">
                    Reset changes
                  </button>
                </div>
              </div>
            </form>
          </edit-website-iframe-settings>
        </div>
      </div>
    </div>
  </div>

@include('backendassets.footer')   


<!-- 1 -->
<script>
$(document).ready(function(){
$( 'form#mycompanyinfo' ).submit(function(event){
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
           if (results.success === true) {   
        swal("Done!", results.message, "success");
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
<!-- 2 -->
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
           if (results.success === true) {   
        swal("Done!", results.message, "success");
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
<!-- 3 -->
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
           if (results.success === true) {   
        swal("Done!", results.message, "success");
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
<!-- 4 -->
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
           if (results.success === true) {   
        swal("Done!", results.message, "success");
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