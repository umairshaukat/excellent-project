@include('backendassets.header')   

<div id="wrapper" class="clients">
@include('backendassets.sidebar')

    <!-- Page wraper -->



    <!-- Page wraper -->
  <div id="page-wrapper" class="gray-bg padding-bottom-30" style="min-height: 213px;">
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
          </li>
        </ul>
      </nav>
    </div>
    <!-- Main view  -->
    <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-10">
        <h2>Add new driver</h2>
        <ol class="breadcrumb">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/drivers/">Drivers</a>
          </li>
          <li class="active">
            <strong> - </strong>
          </li>
        </ol>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="wrapper wrapper-content">
      <div class="row m-b-lg m-t-sm">
        <div class="col-md-12">
          <div class="ibox">
            <div class="ibox-content">
              <edit-driver website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" driver-guid="''" class="ng-isolate-scope">
                <div class="row ng-hide" ng-show="vm.isLoading">
                  <div class="col-sm-12 text-center">
                    <h1>
                      <i class="fa fa-spinner fa-spin"></i> Loading
                    </h1>
                  </div>
                </div>
                <form id="form_driver_save" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-2 col-xs-12">
                      <img id="blah" src="{{ asset('public/assets/image/imagenotavailable.png') }}" class="img-responsive m-b-xs" alt="profile">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" name="driver_img" class="btn btn-success" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </label>
        </div>
        </div>
      </div>
                    </div>
                    <div class="col-md-10 col-xs-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" placeholder="John" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" placeholder="Smith" class="form-control" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phoneNumber" placeholder="+44749093345" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="john@company.com" class="form-control" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control"> 
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Timezone:</label>
                         
                            <select name="timezone"  class="form-control">
   <option>Select timezone</option>
   <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
   <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
   <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
   <option value="US/Alaska">(GMT-09:00) Alaska</option>
   <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
   <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
   <option value="US/Arizona">(GMT-07:00) Arizona</option>
   <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
   <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
   <option value="America/Managua">(GMT-06:00) Central America</option>
   <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
   <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
   <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
   <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
   <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
   <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
   <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
   <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
   <option value="America/Manaus">(GMT-04:00) Manaus</option>
   <option value="America/Santiago">(GMT-04:00) Santiago</option>
   <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
   <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
   <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
   <option value="America/Godthab">(GMT-03:00) Greenland</option>
   <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
   <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
   <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
   <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
   <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
   <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
   <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
   <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
   <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
   <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
   <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
   <option value="Asia/Amman">(GMT+02:00) Amman</option>
   <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
   <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
   <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
   <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
   <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
   <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
   <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
   <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
   <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
   <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
   <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
   <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
   <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
   <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
   <option value="Asia/Baku">(GMT+04:00) Baku</option>
   <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
   <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
   <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
   <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
   <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
   <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
   <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
   <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
   <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
   <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
   <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
   <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
   <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
   <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
   <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
   <option value="Australia/Perth">(GMT+08:00) Perth</option>
   <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
   <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
   <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
   <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
   <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
   <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
   <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
   <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
   <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
   <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
   <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
   <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
   <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
   <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
   <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
</select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Nationality</label>
                            <input name="nationality" type="text" placeholder="ex: German" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                              <option>Select Gender</option>
                              <option value="female">Female</option>
                              <option value="male">Male</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Preferred Service</label>
                            <select class="form-control" name="selectedCarType" required="">
                              {{-- for loop for cars --}}
                              <option value="object:1397" selected="selected">Don't have preferred. I can do any service</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Driver Licence Types (comma separated)</label>
                            <input name="driverLicenceType" type="text" placeholder="ex: B, C" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row m-b-md">
                    <div class="col-sm-12">
                      <h4>Additional Info (visible to Dispatcher)</h4>
                      <textarea class="form-control" name="add_info_disp" placeholder="Additional info for dispatcher"></textarea>
                    </div>
                  </div>
                  <div class="row m-b-md">
                    <div class="col-sm-12">
                      <h4>Additional Info (visible to Client)</h4>
                      <textarea class="form-control original-style" name="add_info_client" placeholder="Additional info for client"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                            <label>Address:</label>
                            <input name="Address" type="text" placeholder="Address" class="form-control" required="">
                          </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                            <label>Address Description</label>
                            <input name="address_description" type="text" placeholder="Any other usefull infromation for primary address" class="form-control" required="">
                          </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <h3>
                        <span style="font-size: 15px; font-weight: 600; padding-right: 30px;">Languages:</span>
                        <br>
                        <br>
                    <div class="form-group">
                    <select name="lang" class="form-control">
                    <option value="AF">Afrikaans</option>
                    <option value="SQ">Albanian</option>
                    <option value="AR">Arabic</option>
                    <option value="HY">Armenian</option>
                    <option value="EU">Basque</option>
                    <option value="BN">Bengali</option>
                    <option value="BG">Bulgarian</option>
                    <option value="CA">Catalan</option>
                    <option value="KM">Cambodian</option>
                    <option value="ZH">Chinese (Mandarin)</option>
                    <option value="HR">Croatian</option>
                    <option value="CS">Czech</option>
                    <option value="DA">Danish</option>
                    <option value="NL">Dutch</option>
                    <option value="EN">English</option>
                    <option value="ET">Estonian</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finnish</option>
                    <option value="FR">French</option>
                    <option value="KA">Georgian</option>
                    <option value="DE">German</option>
                    <option value="EL">Greek</option>
                    <option value="GU">Gujarati</option>
                    <option value="HE">Hebrew</option>
                    <option value="HI">Hindi</option>
                    <option value="HU">Hungarian</option>
                    <option value="IS">Icelandic</option>
                    <option value="ID">Indonesian</option>
                    <option value="GA">Irish</option>
                    <option value="IT">Italian</option>
                    <option value="JA">Japanese</option>
                    <option value="JW">Javanese</option>
                    <option value="KO">Korean</option>
                    <option value="LA">Latin</option>
                    <option value="LV">Latvian</option>
                    <option value="LT">Lithuanian</option>
                    <option value="MK">Macedonian</option>
                    <option value="MS">Malay</option>
                    <option value="ML">Malayalam</option>
                    <option value="MT">Maltese</option>
                    <option value="MI">Maori</option>
                    <option value="MR">Marathi</option>
                    <option value="MN">Mongolian</option>
                    <option value="NE">Nepali</option>
                    <option value="NO">Norwegian</option>
                    <option value="FA">Persian</option>
                    <option value="PL">Polish</option>
                    <option value="PT">Portuguese</option>
                    <option value="PA">Punjabi</option>
                    <option value="QU">Quechua</option>
                    <option value="RO">Romanian</option>
                    <option value="RU">Russian</option>
                    <option value="SM">Samoan</option>
                    <option value="SR">Serbian</option>
                    <option value="SK">Slovak</option>
                    <option value="SL">Slovenian</option>
                    <option value="ES">Spanish</option>
                    <option value="SW">Swahili</option>
                    <option value="SV">Swedish </option>
                    <option value="TA">Tamil</option>
                    <option value="TT">Tatar</option>
                    <option value="TE">Telugu</option>
                    <option value="TH">Thai</option>
                    <option value="BO">Tibetan</option>
                    <option value="TO">Tonga</option>
                    <option value="TR">Turkish</option>
                    <option value="UK">Ukrainian</option>
                    <option value="UR">Urdu</option>
                    <option value="UZ">Uzbek</option>
                    <option value="VI">Vietnamese</option>
                    <option value="CY">Welsh</option>
                    <option value="XH">Xhosa</option>
                    </select>
                      </h3>
                      <ul class="list-unstyled" style="padding-left: 25px;">
                        <!-- ngRepeat: (key, value) in vm.driverModel.knownLanguages -->
                      </ul>
                    </div>
                  </div>
                  <div class="row m-t-md">
                    <div class="col-md-6">
                      <div class="form-group" >
                        <label>Car Brand</label>
                        <input name="carBrand" type="text" placeholder="ex: Mercedes-Benz" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Car Model</label>
                        <input name="carModel" type="text" placeholder="ex: S Class Lux" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Car Color</label>
                        <input name="carColor" type="text" placeholder="ex: Black" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Car plate no.</label>
                        <input name="carRegNo" type="text" placeholder="ex: YD16DHA" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Driver Licence</label>
                        <input name="driverLicenseNumber" type="text" placeholder="ex: 1897230101" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group field-changed" ng-class="{'field-changed' : !vm.driverDetailsForm.region.$pristine }">
                        <label>Covered areas</label>
                           <select name="covered_areas"  class="form-control">
   <option value="atq">atq</option>
   <option value="batam_island">batam island</option>
   <option value="goa">goa</option>
   <option value="Ho chi Min Attraction to hotel">Ho chi Min Attraction to hotel</option>
   <option value="islamabad">islamabad</option>
   <option value="KLIA Arrival Hall">KLIA Arrival Hall</option>
   <option value="kota kinablu">kota kinablu</option>
   <option value="Kualanamu">Kualanamu</option>
   <option value="Lombok International Airport Lombok">Lombok International Airport lombok</option>
   <option value="malaysia">Malaysia</option>
   <option value="new delhi">new delhi</option>
   <option value="new Ngurah Rai International Airport">Ngurah Rai International Airport</option>
   <option value="Phuket International Airport">Phuket International Airport</option>
   <option value="Singapore and legoland">Singapore and legoland</option>
   <option value="Soekarno–Hatta International Airport">Soekarno–Hatta International Airport</option>
   <option value="Tan Son Nhat International Airport">Tan Son Nhat International Airport</option>
 </select>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Currency</label>
                        <select name="currency" class="form-control">
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
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group" ng-class="{'field-changed' : !vm.driverDetailsForm.paymentMethod.$pristine }">
                        <label>Payment method</label>
                        <select name="paymentMethod" ng-model="vm.driverModel.paymentMethod" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-readonly="!vm.driverModel.isAdmin">
                          <option value="? undefined:undefined ?" selected="selected"></option>
                          <option value="PayPal">PayPal</option>
                          <option value="WeChat">WeChat</option>
                          <option value="BankTransfer">Bank Transfer</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Payment account</label>
                        <input name="paymentAccount" type="text" placeholder="ex: john@gmail.com or 1897230101" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Payment period</label>
                        <input name="paymentPeriod" type="text" placeholder="ex: Every 2 weeks, on 15'th each month" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row" ng-class="{'hidden' : !vm.driverModel.isAdmin }">
                    <div class="col-md-6">
                      <div class="check i-checks" style="margin-top: 29px;">
                        <label class="checkboxLabel">
                          <div class="icheckbox_minimal-yellow" style="position: relative;">
                            <input type="checkbox" id="checked_comp_driver" class="ng-pristine ng-untouched ng-valid ng-empty">
                          </div>
                          <i></i>
                          <span class="m-l-sm">Is company driver</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6 custom_css" style="display: none;">
                      <div class="form-group">
                        <label>Assigned car</label>
                        <select class="form-control" name="selectedMainCarId">
                          <option value="" selected="selected"></option>
                          <option value="">Driver can take any company car</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <style>
                    .picker__holder {
                      bottom: 35px;
                    }

                    .document-container {
                      border: 1px solid gray;
                    }
                  </style>
                  <h2>Driver documents:</h2>
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <edit-driver-document class="m-t-md ng-isolate-scope" document-name="'Driver licence'" document-model="vm.driverModel.driverLicence">
                        <div class="row m-b-xl">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="ng-binding">Driver licence:</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 m-t-xs" style="display: none;" id="show_licsense">
                                <div class="m-t-md" style="display: inline-block; position: relative;">
                                  <img id="licesnces" src="{{ asset('public/assets/image/imagenotavailable.png') }}" width="200" height="200" class="img-responsive m-b-xs" alt="profile">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="documentDate" placeholder="Expiration date" autocomplete="off">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="documentNumber" placeholder="Document number">
                              </div>
                              <div class="col-md-2">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" class="btn btn-success" name="licence_img_front" onchange="document.getElementById('licesnces').src = window.URL.createObjectURL(this.files[0]);document.getElementById('show_licsense').style.display = 'block';">
            </label>
        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </edit-driver-document>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <edit-driver-document class="m-t-md ng-isolate-scope" document-name="'Driver licence back'" document-model="vm.driverModel.driverLicenceBack">
                        <div class="row m-b-xl">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="ng-binding">Driver licence back:</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 m-t-xs" style="display: none;" id="driver_back_show_license">
                                <div class="m-t-md" style="display: inline-block; position: relative;">
                                  <img id="driver_back_license" src="{{ asset('public/assets/image/imagenotavailable.png') }}" width="200" height="200" class="img-responsive m-b-xs" alt="profile">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="pco_documentDate" placeholder="Expiration date" autocomplete="off">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="pco_documentNumber" placeholder="Document number" autocomplete="off">
                              </div>
                              <div class="col-md-2">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" class="btn btn-success" name="licence_img_back" onchange="document.getElementById('driver_back_license').src = window.URL.createObjectURL(this.files[0]);document.getElementById('driver_back_show_license').style.display = 'block';">
            </label>
        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </edit-driver-document>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <edit-driver-document class="m-t-sm ng-isolate-scope" document-name="'PCO licence'" document-model="vm.driverModel.driverPcoLicence">
                        <div class="row m-b-xl">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="ng-binding">PCO licence:</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 m-t-xs" style="display: none;" id="pco_show_license">
                                <div class="m-t-md" style="display: inline-block; position: relative;">
                                  <img id="pco_license" src="{{ asset('public/assets/image/imagenotavailable.png') }}" width="200" height="200" class="img-responsive m-b-xs" alt="profile">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="pco_documentDate" placeholder="Expiration date" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="documentNumber" placeholder="Document number">
                              </div>
                              <div class="col-md-2">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" class="btn btn-success" name="pco_img" onchange="document.getElementById('pco_license').src = window.URL.createObjectURL(this.files[0]);document.getElementById('pco_show_license').style.display = 'block';">
            </label>
        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </edit-driver-document>
                    </div>
                    <div class="col-md-6">
                      <edit-driver-document class="m-t-sm ng-isolate-scope" document-name="'Insurance'" document-model="vm.driverModel.driverInsurance">
                        <div class="row m-b-xl">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="ng-binding">Insurance:</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 m-t-xs" style="display: none;" id="insurance_show_license">
                                <div class="m-t-md" style="display: inline-block; position: relative;">
                                  <img id="insurance_license" src="{{ asset('public/assets/image/imagenotavailable.png') }}" width="200" height="200" class="img-responsive m-b-xs" alt="profile">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="insurance_documentDate" placeholder="Expiration date">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="insurancedocumentNumber" placeholder="Document number" autocomplete="off">
                              </div>
                              <div class="col-md-2">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" class="btn btn-success" name="insurance_img" onchange="document.getElementById('insurance_license').src = window.URL.createObjectURL(this.files[0]);document.getElementById('insurance_show_license').style.display = 'block';">
            </label>
        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </edit-driver-document>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <edit-driver-document class="m-t-sm ng-isolate-scope" document-name="'Passport'" document-model="vm.driverModel.driverPassport">
                        <div class="row m-b-xl">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="ng-binding">Passport:</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 m-t-xs" style="display: none;" id="passport_show_license">
                                <div class="m-t-md" style="display: inline-block; position: relative;">
                                  <img id="passport_license" src="{{ asset('public/assets/image/imagenotavailable.png') }}" width="200" height="200" class="img-responsive m-b-xs" alt="profile">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="passport_documentDate" placeholder="Expiration date">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="passport_documentNumber" placeholder="Document number" autocomplete="off">
                              </div>
                              <div class="col-md-2">
                      <div class="text-center">
                        <div id="fileupload" >
        <div class="myfileupload-buttonbar ">
            <label class="myui-button">
                <span >Upload</span>
            <input type="file" class="btn btn-success" name="passport_img" onchange="document.getElementById('passport_license').src = window.URL.createObjectURL(this.files[0]);document.getElementById('passport_show_license').style.display = 'block';">
            </label>
        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </edit-driver-document>
                    </div>
                  </div>
                  <hr>
                  <div class="row text-center m-t-lg">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                <style>
                  .ui-select-choices-group-label.dropdown-header {
                    padding-left: 10px;
                    font-weight: bold;
                    font-size: 16px;
                  }
                </style>
              </edit-driver>
              <h2>Driver devices</h2>
              <driver-devices website-guid="'02f8678a-c8f1-451a-960c-9c4ce9121cce'" driver-guid="''" class="ng-isolate-scope">
                <form name="vm.driverNotificationsForm" novalidate="" class="ng-pristine ng-valid">
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>App Name</th>
                            <th>App Version</th>
                            <th>OS</th>
                            <th>OS Version</th>
                            <th>Notifications</th>
                            <th>Location</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- ngRepeat: device in vm.driverModel.devices track by device.guid -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </form>
              </driver-devices>
            </div>
          </div>
        </div>
      </div>
    </div> 


@include('backendassets.footer')    
<script type="text/javascript">
  $('#checked_comp_driver').change(function(){
    if(this.checked) {
        $('.custom_css').show();
    } else {
        $('.custom_css').hide();
    }
});
</script>
<script>
$(document).ready(function(){
  // var _token   = $('meta[name="csrf-token"]').attr('content');
  $( 'form#form_driver_save' ).submit( function(event){
 event.preventDefault();
var formData = new FormData(this);
$.ajax({            
    url: '{{ route('savedriver') }}',
    type: 'POST',
    data: formData,cache:false,
    contentType: false,
    processData: false,
    success: function (data) { 
    alert('success');
    $(".writeinfo").append(data.msg); 
            }
                }); 
    // setTimeout(function(){
    //     location.reload();
    // }, 2000);  

});
});
</script>
