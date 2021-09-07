<html>

<head>
  <style>
    @keyframes beginBrowserAutofill {
      0% {}

      to {}
    }

    @keyframes endBrowserAutofill {
      0% {}

      to {}
    }



    .pac-logo:after {
      content: "";
      padding: 1px 1px 1px 0;
      height: 18px;
      box-sizing: border-box;
      text-align: right;
      display: block;
      background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);
      background-position: right;
      background-repeat: no-repeat;
      background-size: 120px 14px
    }

    .hdpi.pac-logo:after {
      background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)
    }

*{
  font-size:13px !important;
}



    .hdpi .pac-icon {
      background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)
    }

    .pac-icon-search {
      background-position: -1px -1px
    }

    .pac-item-selected .pac-icon-search {
      background-position: -18px -1px
    }

    .pac-icon-marker {
      background-position: -1px -161px
    }

    .pac-item-selected .pac-icon-marker {
      background-position: -18px -161px
    }

    .pac-placeholder {
      color: gray
    }

    .pac-target-input:-webkit-autofill {
      animation-name: beginBrowserAutofill
    }

    .pac-target-input:not(:-webkit-autofill) {
      animation-name: endBrowserAutofill
    }
  </style>
  <style type="text/css">
    [uib-typeahead-popup].dropdown-menu {
      display: block;
    }
  </style>
  <style type="text/css">
    .uib-time input {
      width: 50px;
    }
  </style>
  <style type="text/css">
    [uib-tooltip-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-popover-popup].popover.top-left>.arrow,
    [uib-popover-popup].popover.top-right>.arrow,
    [uib-popover-popup].popover.bottom-left>.arrow,
    [uib-popover-popup].popover.bottom-right>.arrow,
    [uib-popover-popup].popover.left-top>.arrow,
    [uib-popover-popup].popover.left-bottom>.arrow,
    [uib-popover-popup].popover.right-top>.arrow,
    [uib-popover-popup].popover.right-bottom>.arrow,
    [uib-popover-html-popup].popover.top-left>.arrow,
    [uib-popover-html-popup].popover.top-right>.arrow,
    [uib-popover-html-popup].popover.bottom-left>.arrow,
    [uib-popover-html-popup].popover.bottom-right>.arrow,
    [uib-popover-html-popup].popover.left-top>.arrow,
    [uib-popover-html-popup].popover.left-bottom>.arrow,
    [uib-popover-html-popup].popover.right-top>.arrow,
    [uib-popover-html-popup].popover.right-bottom>.arrow,
    [uib-popover-template-popup].popover.top-left>.arrow,
    [uib-popover-template-popup].popover.top-right>.arrow,
    [uib-popover-template-popup].popover.bottom-left>.arrow,
    [uib-popover-template-popup].popover.bottom-right>.arrow,
    [uib-popover-template-popup].popover.left-top>.arrow,
    [uib-popover-template-popup].popover.left-bottom>.arrow,
    [uib-popover-template-popup].popover.right-top>.arrow,
    [uib-popover-template-popup].popover.right-bottom>.arrow {
      top: auto;
      bottom: auto;
      left: auto;
      right: auto;
      margin: 0;
    }

    [uib-popover-popup].popover,
    [uib-popover-html-popup].popover,
    [uib-popover-template-popup].popover {
      display: block !important;
    }
  </style>
  <style type="text/css">
    .uib-datepicker-popup.dropdown-menu {
      display: block;
      float: none;
      margin: 0;
    }

    .uib-button-bar {
      padding: 10px 9px 2px;
    }
  </style>
  <style type="text/css">
    .uib-position-measure {
      display: block !important;
      visibility: hidden !important;
      position: absolute !important;
      top: -9999px !important;
      left: -9999px !important;
    }

    .uib-position-scrollbar-measure {
      position: absolute !important;
      top: -9999px !important;
      width: 50px !important;
      height: 50px !important;
      overflow: scroll !important;
    }

    .uib-position-body-scrollbar-measure {
      overflow: scroll !important;
    }
  </style>
  <style type="text/css">
    .uib-datepicker .uib-title {
      width: 100%;
    }

    .uib-day button,
    .uib-month button,
    .uib-year button {
      min-width: 100%;
    }

    .uib-left,
    .uib-right {
      width: 100%
    }
  </style>
  <style type="text/css">
    .ng-animate.item:not(.left):not(.right) {
      -webkit-transition: 0s ease-in-out left;
      transition: 0s ease-in-out left
    }
  </style>
  <style type="text/css">
    @charset "UTF-8";

    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
      display: none !important;
    }

    ng\:form {
      display: block;
    }

    .ng-animate-shim {
      visibility: hidden;
    }

    .ng-anchor {
      position: absolute;
    }
    .modal-content{
    padding: 0px 10px;
    }
    .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio]{
      opacity: 1 !important;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <!--[if IE]>
					<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
						<![endif]-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Booking</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/Content/icons_cbs/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/Content/icons_cbs/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/Content/icons_cbs/favicon-16x16.png">
  <link rel="manifest" href="/Content/icons_cbs/site.webmanifest.json">
  <link rel="mask-icon" href="/Content/icons_cbs/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  <link href="{{ asset('public/assets/css/classic.css')}}" rel="stylesheet">
  <link href="{{ asset('public/assets/css/default.date.css')}}" rel="stylesheet">
  <!-- Add local styles, mostly for plugins css file -->
  
  <link href="{{ asset('public/assets/css/iCheckStyles.css')}}" rel="stylesheet">
  <link href="{{ asset('public/assets/css/select.css')}}" rel="stylesheet">
  <link href="{{ asset('public/assets/css/select2.css')}}" rel="stylesheet">
  <link href="{{ asset('public/assets/css/selectize.default.css')}}" rel="stylesheet">
  <link href="{{ asset('public/assets/css/themes.css')}}" rel="stylesheet">
   <!-- Add jQuery Style direct - used for jQGrid plugin -->
   <link href="{{ asset('public/assets/css/toastrStyles.css')}}" rel="stylesheet">
  <!-- Primary Inspinia style -->
  <link href="{{ asset('public/assets/css/main.css')}}" rel="stylesheet">
  <link  href="{{ asset('public/assets/css/fontawesome.css')}}" rel="stylesheet">
  <link  href="{{ asset('public/assets/css/styles.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <style>
    .edit-booking-details .checkbox,
    .edit-booking-details .radio {
      margin-top: 0;
    }

    .visibleMap {
      min-height: 300px;
      margin-bottom: 40px;
    }
  
    .booking-form .picker,
    .picker__holder {
      position: absolute !important;
    }

    .picker__wrap {
      margin: 0;
    }

    @media only screen and (device-width : 375px) and (device-height : 667px) and (-webkit-device-pixel-ratio : 2) {

      .booking-form .picker,
      .picker__holder {
        max-width: 313px;
      }
    }

    
/* models runing and dismis */

.modal-open .modal{
  overflow-y:unset !important;
}
.modal-dialog {
  width: 90% !important;
}
.modal-lg {
    width: 100% !important;
}

       .myfileupload-buttonbar input
        {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            border: solid transparent;
            border-width: 0 0 100px 200px;
            opacity: 0.0;
            filter: alpha(opacity=0);
            -o-transform: translate(250px, -50px) scale(1);
            -moz-transform: translate(-300px, 0) scale(4);
            direction: ltr;
            cursor: pointer;
        }
        .myui-button
        {
            position: relative;
            cursor: pointer;
            text-align: center;
            padding: 8px 6px;
            overflow: visible;
            background-color: #1c84c6;
            overflow: hidden;
            border-radius: 5px;
            color: white;
        }


  </style>
</head>

<body ng-app="bookingApp" class="ng-scope" data-new-gr-c-s-check-loaded="14.1026.0" data-gr-ext-installed="" cz-shortcut-listen="true" >