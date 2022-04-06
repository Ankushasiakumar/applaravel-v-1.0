<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{Config::get('app.name') . @(isset($page_title) ? " | ".$page_title : '') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('front/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ URL::asset('front/css/style.css?v='.rand()) }}" rel="stylesheet">
    <link href='http://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css"/>

    <style type="text/css">
    li.describe_win_pos {
        display: none;
    }
    li.Center {
        display: none;
    }
    li.\32 .Window.Right, li.\32 .Window.Left{
        display: none;
    }
    </style>
</head>

<body>

    @foreach($settings as $setting)
        @php
            if($setting->header_logo != ''){
                $header_logo = $setting->header_logo;
            }else{
                $header_logo = '';
            }

            if($setting->phone != ''){
                $phone = $setting->phone;
            }else{
                $phone = '';
            }

            if($setting->timing != ''){
                $timing = $setting->timing;
            }else{
                $timing = '';
            }
        @endphp
    @endforeach
    <div class="top-bar">   
        <div class="container">
            <ul>
                @if($phone != '')
                    <li><a href="tel:{{ $phone }}"><img src="{{ URL::asset('front/img/call.png') }}">{{ $phone }}</a></li>
                @endif

                @if($timing != '')
                    <li><a href="javascript:void(0);"><img src="{{ URL::asset('front/img/watch.png') }}">{{ $timing }}</a></li>
                @endif
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/"><img src="{{ $header_logo }}"></a>
                  <div class="for-mobile hidden-sm hidden-md hidden-lg">
                        <li><a class=" cart-btn" href="#"><img src="{{ URL::asset('front/img/cart.png') }}"><span>0</span></a></li>
                        <li><a href="javascript:void(0);" class="  search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="@auth {{ route('my_account') }} @endauth  @guest {{ route('login_user') }}  @endguest" class=" search-btn"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                  </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('build_shed') }}">Build A Shed</a></li>
                    <li><a href="{{ route('garden_builder') }}">Garden Room</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery </a></li>
                    <li><a href="{{ route('delivery_area') }}">Delivery Area </a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a class="hidden-xs cart-btn" href="#"><img src="{{ URL::asset('front/img/cart.png') }}"><span>0</span></a></li>
                    <li><a href="javascript:void(0);" onclick="openSearch()" class="hidden-xs  search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    <li><a href="@auth {{ route('my_account') }} @endauth  @guest {{ route('login_user') }}  @endguest" class="hidden-xs  search-btn"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>

    <div id="mylayout" class="layout12">
        <span class="layoutclosebtn" onclick="closeSearch()" title="Close layout">×</span>
        <div class="layout-content">
            <form action="http://nicesnippets.com" target="_blank">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>