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

                        <a href="javascript:document.getElementById('logoutForm').submit()"><i class="fa fa-sign-out"></i> Log out</a>
                        <form action="/account/logoff/" class="navbar-right ng-pristine ng-valid" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="mjZye6gpdXXGoce5fZyN8YCYPqx9rFYW7Fecd1YEjehNsqxhGMbvbQ4mcLBc0JYAOdAK18vPMbBbaa39mpqo53BFBRdhzOsAqhj7ecGehLu1tSVF3voSMKfQ1a8EMrh7_uZqQA2" autocomplete="off"></form>
                    </li>

                </ul>
            </nav>
        </div> <!-- Main view  -->

</div>
</div>

</div>

@include('backendassets.footer')   
