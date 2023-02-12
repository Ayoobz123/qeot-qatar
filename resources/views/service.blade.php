@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: url(images/digital_marketing.jpg)">
    <div id="service-anim">
        <div class="container">
            <h1 class="text-white d-flex justify-content-center">OUR <b>PRODUCTS</b></h1>
            <div class="separation" style="height:1px; width:40%; margin:0 auto; background:#fff"></div>
            <p class="text-white mt-3 justify-content-center" style="font-size: 17px; line-height: 24px; font-weight: bold; text-align:center;">
                HAVING A DIVERSIFIED COMPANY TAKING CARE OF YOUR IT NEEDS IS PIVOTAL. THERE'S NO NEED TO<br/>
                DEAL WITH SEVEAL COMPANIES. MENTEL HAS YOU COVERED WITH ITS 4 SECTORS
            </p>
        </div>
        <div class="serv-top-wrap" style="background-color: rgba(68, 157, 202, 0.5)">
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="#service-04">
                    <b>DIGITAL</b>
                    <br>
                    ASSET MANAGEMENT
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="#service-02">
                    <b>MICROSOFT</b>
                    <br>
                    OFFICE 365
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="#service-03">
                    <b>TIME ATTENDANCE &</b>
                    <br>
                    ACCESS CONTROL
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="#service-04">
                    <b>ASSET MANAGEMENENT</b>
                    <br>
                    DOCUMENT MANAGEMENT
                </a>
            </div>
        </div>
    </div>
</div>
{{-- <div id="service-02" class="main-content" style="background-image: url(images/product_bg_2.jpg)">
    <h1 style="font-size:34px; line-height: 35px;">
        <strong>MICROSOFT</strong>
    </h1>
</div> --}}
@endsection
