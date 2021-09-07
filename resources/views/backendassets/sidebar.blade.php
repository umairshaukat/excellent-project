      <!-- Navigation -->
      <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="side-menu">
            <li class="nav-header">
              <div class="dropdown profile-element">
                <span>
                  <img alt="image" class="img-responsive" style="max-width: 120px; max-height: 70px; margin: 0 auto;" src="https://account.chauffeurbookingsoftware.com/files/file/?guid=78087842-463f-49d2-a4a2-576dbab6c647">
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear">
                    <span class="block m-t-md">
                      <strong class="font-bold"> Midas Group</strong>
                      <b class="caret"></b>
                    </span>
                    <span class="text-muted text-xs block">Value Customer </span>
                  </span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                  <li>
                    <a href="/profile/?id=07cd29ec-49f1-4cd4-a604-650c13e76bb4">Profile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="javascript:document.getElementById('logoutForm').submit()">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="active">
              <a href="" title="New Booking">
                <i class="fa fa-plus"></i>
                <span class="nav-label">New Booking</span>
              </a>
            </li>
            <li class="">
              <a href="/bookings/dashboard/" title="Dashboard">
                <i class="fa fa-th-list" aria-hidden="true"></i>
                <span class="nav-label">Dashboard</span>
              </a>
            </li>
            <li class="active">
              <a href="#" title="Bookings">
                <i class="fa fa-book"></i>
                <span class="nav-label" data-i18n="nav.dashboard">Bookings</span>
                <span class="fa arrow"></span>
              </a>
              <ul class="nav nav-second-level collapse in">
                <li class="">
                  <a href="">
                    <i class="fa fa-expand"></i> Finished </a>
                </li>
                <li class="">
                  <a href="/bookings/cancelledbookings/">
                    <i class="fa fa-trash"></i> Cancelled </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="/calendar/" title="Calendar">
                <i class="fa fa-calendar"></i>
                <span class="nav-label">Calendar</span>
              </a>
            </li>
            <li class="">
              <a href="{{ route('drivers') }}" title="Drivers">
                <i class="fa fa-user-times" aria-hidden="true"></i>
                <span class="nav-label">Drivers</span>
              </a>
            </li>
            <li class="">
              <a href="{{ route('clients') }}" title="Clients">
                <i class="fa fa-user"></i>
                <span class="nav-label">Clients</span>
              </a>
            </li>
            <li class="">
              <a href="#" title="Invoices">
                <i class="fa fa-file-text-o"></i>
                <span class="nav-label">Invoices</span>
              </a>
            </li>
            <li class="">
              <a href="#" title="Reports">
                <i class="fa fa-area-chart"></i>
                <span class="nav-label" data-i18n="nav.dashboard">Reports</span>
                <span class="fa arrow"></span>
              </a>
              <ul class="nav nav-second-level collapse">
                <li class="">
                  <a href="/reports/" title="Overall Reports">
                    <i class="fa fa-area-chart"></i> Overall </a>
                </li>
                <li class="">
                  <a href="{{URL::to('/drivers')}}" title="Drivers Reports">
                    <i class="fa fa-area-chart"></i> Drivers </a>
                </li>
                <li class="">
                  <a href="/reports/suppliersreport/" title="Suppliers Reports">
                    <i class="fa fa-area-chart"></i> Suppliers </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span class="nav-label" data-i18n="nav.dashboard">Settings</span>
                <span class="fa arrow"></span>
              </a>
              <ul class="nav nav-second-level collapse">
                <li class="">
                  <a href="{{ route('mycompany') }}" title="Edit Website">
                    <i class="fa fa-wrench" aria-hidden="true"></i> Company </a>
                </li>
                <li class="">
                  <a href="#" title="Accounts">
                    <i class="fa fa-user"></i> Accounts </a>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-book"></i> Services / Fleet <span class="fa arrow"></span>
                  </a>
                  <ul class="nav nav-third-level collapse">
                    <li class="">
                      <a href="{{ route('services') }}">
                        <i class="fa fa-location-arrow"></i> Services </a>
                    </li>
                    <li class="">
                      <a href="{{ route('owncar') }}">
                        <i class="fa fa-car"></i> Own Cars </a>
                    </li>
                  </ul>
                </li>
                <li class="">
                  <a href="">
                    <i class="fa fa-money" aria-hidden="true"></i> Prices </a>
                </li>
                <li class="">
                  <a href="">
                    <i class="fa fa-map" aria-hidden="true"></i> Regions </a>
                </li>
                <li class="">
                  <a href="{{ route('myltds') }}">
                    <i class="fa fa-building" aria-hidden="true"></i> My LTD's </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>