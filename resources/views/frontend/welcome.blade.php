@extends ('frontend.layout.app')
@section('content')

    @foreach($all_records as $all_record)
        @php 
            if ($all_record->banner_background != ''){
                $banner_background = $all_record->banner_background; 
            }else{
                $banner_background = '';
            }

            if ($all_record->banner_title != ''){
                $banner_title = $all_record->banner_title; 
            }else{
                $banner_title = '';
            }

            if ($all_record->banner_link != ''){
                $banner_link = $all_record->banner_link; 
            }else{
                $banner_link = '';
            }

            if ($all_record->why_choose_title != ''){
                $why_choose_title = $all_record->why_choose_title; 
            }else{
                $why_choose_title = '';
            }

            if ($all_record->choose_grid_icon_1 != ''){
                $choose_grid_icon_1 = $all_record->choose_grid_icon_1; 
            }else{
                $choose_grid_icon_1 = '';
            }

            if ($all_record->choose_grid_title_1 != ''){
                $choose_grid_title_1 = $all_record->choose_grid_title_1; 
            }else{
                $choose_grid_title_1 = '';
            }

            if ($all_record->choose_grid_icon_2 != ''){
                $choose_grid_icon_2 = $all_record->choose_grid_icon_2; 
            }else{
                $choose_grid_icon_2 = '';
            }

            if ($all_record->choose_grid_title_2 != ''){
                $choose_grid_title_2 = $all_record->choose_grid_title_2; 
            }else{
                $choose_grid_title_2 = '';
            }

            if ($all_record->choose_grid_icon_3 != ''){
                $choose_grid_icon_3 = $all_record->choose_grid_icon_3; 
            }else{
                $choose_grid_icon_3 = '';
            }

            if ($all_record->choose_grid_title_3 != ''){
                $choose_grid_title_3 = $all_record->choose_grid_title_3; 
            }else{
                $choose_grid_title_3 = '';
            }

            if ($all_record->choose_grid_icon_4 != ''){
                $choose_grid_icon_4 = $all_record->choose_grid_icon_4; 
            }else{
                $choose_grid_icon_4 = '';
            }
            
            if ($all_record->choose_grid_title_4 != ''){
                $choose_grid_title_4 = $all_record->choose_grid_title_4; 
            }else{
                $choose_grid_title_4 = '';
            }

            if ($all_record->build_shed_title != ''){
                $build_shed_title = $all_record->build_shed_title; 
            }else{
                $build_shed_title = '';
            }
            
            if ($all_record->build_shed_content != ''){
                $build_shed_content = $all_record->build_shed_content; 
            }else{
                $build_shed_content = '';
            }
            
            if ($all_record->build_shed_link != ''){
                $build_shed_link = $all_record->build_shed_link; 
            }else{
                $build_shed_link = '';
            }

            if ($all_record->build_shed_image != ''){
                $build_shed_image = $all_record->build_shed_image; 
            }else{
                $build_shed_image = '';
            }

        @endphp
    @endforeach

    <section class="banner-sec">    
        <figure><img src="{{ $banner_background }}"></figure>
        <div class="banner-content">
            <div class="container">
                <div class="inner-banner">
                    <h1>{!! $banner_title !!}</h1>
                    <a href="{{ $banner_link }}" class="shop-now"> Shop Now</a>
                </div>  
            </div>
        </div>
    </section>
    <section class="cata-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-cata">    
                        <figure><img src="{{ URL::asset('front/img/stand.png') }}"></figure>
                        <figcaption>
                            <h3>Standard Sheds</h3>
                            <a href="/build-shed" class="shop-now"> Shop Now</a>
                        </figcaption>
                    </div>
                </div>  
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-cata">    
                        <figure><img src="{{ URL::asset('front/img/stand2.png') }}"></figure>
                        <figcaption>
                            <h3>Tanalised Sheds</h3>
                            <a href="/build-shed" class="shop-now"> Shop Now</a>
                        </figcaption>
                    </div>
                </div>  
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-cata">    
                        <figure><img src="{{ URL::asset('front/img/stand3.png') }}"></figure>
                        <figcaption>
                            <h3>Beast Sheds</h3>
                            <a href="/build-shed" class="shop-now"> Shop Now</a>
                        </figcaption>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <section class="shes-free-fitting">
        <div class="container">
        <h2>{!! $why_choose_title !!}</h2>
            <ul>
                <li>
                    <figure><img src="{{ $choose_grid_icon_1 }}"></figure>
                    <figcaption>
                        <h4>{!! $choose_grid_title_1 !!}</h4>
                    </figcaption>
                </li>
                <li>
                    <figure><img src="{{ $choose_grid_icon_2 }}"></figure>
                    <figcaption>
                        <h4>{!! $choose_grid_title_2 !!}</h4>
                    </figcaption>
                </li>
                <li>
                    <figure><img src="{{ $choose_grid_icon_3 }}"></figure>
                    <figcaption>
                        <h4>{!! $choose_grid_title_3 !!}</h4>
                    </figcaption>
                </li>
                <li>
                    <figure><img src="{{ $choose_grid_icon_4 }}"></figure>
                    <figcaption>
                        <h4>{!! $choose_grid_title_4 !!}</h4>
                    </figcaption>
                </li>
            </ul>
        </div>
    </section>
    <section class="build-shed">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h2>{!! $build_shed_title !!}</h2>
                    <p>{!! $build_shed_content !!}</p>
                    <a href="{{ $build_shed_link }}" class="shop-now"> Shop Now</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <figure>
                        <img src="{{ $build_shed_image }}">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="all-items">
        <div class="container">
            <ul>
                <li>
                    <figure><img src="{{ URL::asset('front/img/apex.png') }}"></figure>
                    <h4>Apex</h4>
                </li>
                <li>
                    <figure><img src="{{ URL::asset('front/img/pent.png') }}"></figure>
                    <h4>Pent </h4>
                </li>
                <li>
                    <figure><img src="{{ URL::asset('front/img/hapex.png') }}"></figure>
                    <h4>Hipex</h4>
                </li>
                <li>
                    <figure><img src="{{ URL::asset('front/img/sum.png') }}"></figure>
                    <h4>Summerhouse</h4>
                </li>
                <li>
                    <figure><img src="{{ URL::asset('front/img/office.png') }}"></figure>
                    <h4>Office</h4>
                </li>
            </ul>
        </div>
    </section>
    <section class="testimonial-sec">
        <div class="container">
            <h2>What Our <b>Clients Say</b></h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    @php
                        $i = 1;
                    @endphp

                    @foreach($getTestimonials->chunk(2) as $getTestimonial)
                        <div class="item @if($i==1) active  @endif">
                            <div class="row">
                                @foreach($getTestimonial as $getTest)
                                    <div class="col-sm-6 col-md-6">
                                        <div class="testi-inner">   
                                            <figure>
                                                <img src="{{ $getTest->testimonial_image }}">
                                            </figure>
                                            <figcaption>
                                                <p>“{{ $getTest->testimonial_content }}“</p>
                                                <span>{{ $getTest->testimonial_name }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                  </div>
                  
                   <!-- Indicators -->
                  <ol class="carousel-indicators">
                    @php
                        $j = 0;
                    @endphp
                    @foreach($getTestimonials->chunk(2) as $getTestimonial)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $j }}" class="@if($j==0)active @endif"></li>
                        @php
                            $j++;
                        @endphp
                    @endforeach
                  </ol>
                  
            </div>
        </div>
    </section>
@endsection

    