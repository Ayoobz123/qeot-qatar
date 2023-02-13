@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: url(images/digital_marketing.jpg)">
    <div id="service-anim">
        <div class="container">
            <h1 class="text-white d-flex justify-content-center">OUR<strong> PRODUCTS</strong></h1>
            <div class="separation" style="height:1px; width:40%; margin:0 auto; background:#fff"></div>
            <p class="text-white mt-3 justify-content-center" style="font-size: 17px; line-height: 24px; font-weight: bold; text-align:center;">
                HAVING A DIVERSIFIED COMPANY TAKING CARE OF YOUR IT NEEDS IS PIVOTAL. THERE'S NO NEED TO<br/>
                DEAL WITH SEVEAL COMPANIES. MENTEL HAS YOU COVERED WITH ITS 4 SECTORS
            </p>
        </div>
        <div class="serv-top-wrap" style="background-color: rgba(68, 157, 202, 0.5)">
            {{-- <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="service-04">
                    <b>DIGITAL</b>
                    <br>
                    ASSET MANAGEMENT
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="service-02">
                    <b>MICROSOFT</b>
                    <br>
                    OFFICE 365
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="service-03">
                    <b>TIME ATTENDANCE &</b>
                    <br>
                    ACCESS CONTROL
                </a>
            </div>
            <div class="services-top-nav text-white" style="text-align:center; float:left; width:25%; height:100%; padding-top: 5%; transition: background .5s;">
                <a href="#service-02">
                    <b>ASSET MANAGEMENENT</b>
                    <br>
                    DOCUMENT MANAGEMENT
                </a>
            </div> --}}
        </div>
        <div id="service-02" class="main-content text-white" style="background-image: url(images/product_bg_2.jpg)">
            <h1 class="ml-4 mb-3" style="font-size:34px; line-height: 35px;">
                <strong>MICROSOFT</strong>
                <br>
                OFFICE 365
            </h1>
            <div class="separation-sm ml-4" style="background-color:#fff; height: 3px; width:20%;"></div>
            <p class="ml-4 mt-4">
                Get the value and simplicity of Microsoft® Office 365 for small businesses, a set of web-enabled tools that let you access your email, documents, contacts, and calendars from virtually anywhere, on almost any device. The service brings together online versions of the best communications and collaboration tools from Microsoft, at a price that small businesses can afford.
            </p>
            <ol>
                <li>
                    Rich client access via Office applications on PCs and Macs.
                </li>
                <li>
                    View and edit documents with Office Web Apps across a broad range of browsers
                    (Internet Explorer®, Firefox, Safari).
                </li>
                <li>
                    Access your email from most browsers with Outlook Web App.
                </li>
                <li>
                    Access mail, contacts, calendar, and SharePoint® sites from mobile devices including
                    Windows® Phones, Nokia, Android, iPhone, and BlackBerry.
                </li>
            </ol>
            <p class="ml-3 mb-2">SharePoint | Lync | Exchange</p>
            <p>
                <img src="images/Microsoft_O365.png">
            </p>
        </div>
        <div id="service-02" class="main-content text-dark" style="background-color: rgba(255, 255, 255, 0.9)">
            <h1 class="page-title ml-4" style="font-size:34px;">
                <strong>
                    TIME ATTENDANCE
                </strong>
                <br>
                ACCESS CONTROL SYSTEM
            </h1>
            <div class="separation-sm ml-4" style="height:3px; width:20%; background-color:#449dca; text-align:justify;"></div>
            <p class="ml-4 mt-3" style="text-align:justify;">
                At QEPT we integrate various systems to provide a customized solution to the client.
                We have executed many projects in Qatar customizing time attendance software to
                be integrated to ERP solution. We sell FingerTec branded bio metric time attendance
                \ access control system which ships with TCMS V2.0 software. The output generated
                from this software provided by FingerTec is then customized to be integrated to
                the customers ERP solution for payroll purposes.
            </p>
            <p class="ml-4 mt-3" style="text-align:justify;">
                We also use Neuro Technology’s Verifinger SDK to provide custom bio metric solutions
                to clients in Qatar. VeriFinger is a fingerprint identification technology intended
                for biometric systems developers and integrators. The technology assures system
                performance with fast, reliable fingerprint matching in 1-to-1 and 1-to-many modes.
            </p>
        </div>
        <div id="service-02" class="main-content text-white" style="background-image: url(images/product_bg_4.jpg")>
            <h1 class="page-title ml-4" style="font-size:34px;">
                ASSET MANAGEMENT<strong> SOLUTION</strong>
            </h1>
            <div class="separation-sm ml-4" style="height:3px; width:20%; background-color:#fff;"></div>
            <p class="ml-4 mt-3" style="text-align:justify;">
                easyAsset is Asset Tracking Software designed to manage and control mobile and fixed
                assets. easyAsset centrally manages; what assets you have, where they are and who
                uses them. easyAsset is a comprehensive asset tracking solution with extensive bar
                coding technologies and functions.
            </p>
            <p class="ml-4 mt-3" style="text-align:justify;">
                easyAsset is the #1 selling, industry-leading asset tracking solution for small,
                medium and large sized businesses. easyAsset has perfected an all-in-one solution
                to solve the asset management needs of government and educational agencies, healthcare
                organizations, and companies of all sizes across the globe. Our asset tracking solutions
                are capable of meeting the demands of your business while still remaining simple
                enough to master right out of the box!
            </p>
            <h1 class="page-title ml-4" style="font-size:34px;">
                DOCUMENT MANAGEMENT SYSTEM<strong> (DMS)</strong>
            </h1>
            <div class="separation-sm ml-4" style="height:3px; width:20%; background-color:#fff;"></div>
            <p class="ml-4 mt-3">
                Search instantly through your digital database. A digital asset management solution which helps create a central repository for all your digital assets and extracts related metadata.
                This solution is used to organize, identify, manage, distribute and archive digital assets.It guarantees control over all the digital assets in a corporation based on the assignment of roles for effective digital rights management
            </p>
        </div>
    </div>
</div>
@endsection
