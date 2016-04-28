@extends('master')

@section('stylesheet')
    <link rel="stylesheet" href="/css/welcome.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
@stop

@section('content')
    <div class='header'>
        <div class='container-fluid'>
            <div class='col-md-6'>
                <div class='logo-container' style="background-image:url('/img/logo.png');"></div>
            </div>
            <div class='nav-container col-md-6'>
                <div class='nav-home navigation col-md-3'>
                    <a href='/'>HOME</a>
                </div>
                <div class='nav-product navigation col-md-3'>
                    <a href='/'>PRODUCTS</a>
                </div>
                <div class='nav-contact navigation col-md-3'>
                    <a href='/'>CONTACT</a>
                </div>
            </div>
        </div>
    </div>
    <div class='divider'></div>
    <div class='products-container'>
        <div class='container-fluid'>
            @foreach ($featuredProducts as $featuredProduct)
                <div class='product-container col-md-3'>
                    <div class='featured-product-img' style="background-image:url({{ URL::asset($featuredProduct['img']) }});"></div>
                    <div class='featured-product-content'>
                        <div class='featured-product-name'> {{ $featuredProduct['name'] }}</div>
                        <div class='featured-product-description'>{{ $featuredProduct['description'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class='divider'></div>
    <div class='sale-container'>
        <div class='sale-content'> ENJOY THESE TASTY TREATS! </div>
        <button class='btn btn-primary' id='order-now-btn'> ORDER NOW > </button>
    </div>
    <div class='divider'></div>
    <div class='information-container'>
        <div class='container-fluid'>
            <div class='information-welcome col-md-4'>
                <div class='information-title'>
                    <span class='information-icon'><img src='img/home-icon.png'/></span>
                    <span class='information-icon-label'>Welcome</span>
                </div>
                <hr class='information-divider'>
                <div class='information-content'> {{ $welcomeContent }} </div>
            </div>
            <div class='information-service col-md-4'>
                <div class='information-title'>
                    <span class='information-icon'><img src='img/bus-icon.png'/></span>
                    <span class='information-icon-label'>Services</span>
                </div>
                <hr class='information-divider'>
                <div class='information-content'> {{ $serviceContent }} </div>
            </div>
            <div class='information-business col-md-4'>
                <div class='information-business-hours'>
                    <div class='information-title information-icon-label'> Hours </div>
                    <hr class='information-divider'>
                    <div class='information-hours-content'>
                        <span class='information-time-icon'><img src='img/time-icon.png'/></span>
                        @foreach ($hours as $hour)
                            <div class='information-hour-item'>
                                <div class='hour-name'> {{ $hour['name'] }} </div>
                                <div class='hour-time'> {{ $hour['hours'] }} </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class='information-business-contact'>
                    <div class='information-title information-icon-label'> Contact </div>
                    <hr class='information-divider'>
                    <div class='information-contact-content'>
                        <div class='information-contact-phone-container'>
                            <span class='information-phone-icon'><img src='img/phone-icon.png'/></span>
                            <span class='information-contact-phone'> {{ $phone }} </span>
                        </div>
                        <div class='information-contact-map-container'>
                        <span class='information-map-icon'><img src='img/map-icon.png'/></span>
                        <div class='information-contact-location'> {{ $location }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footer'>
    </div>
@stop
