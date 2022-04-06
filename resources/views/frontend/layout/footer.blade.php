<footer>
    @foreach($settings as $setting)
        @php
            if($setting->footer_logo != ''){
                $footer_logo = $setting->footer_logo;
            }else{
                $footer_logo = '';
            }

            if($setting->facebook != ''){
                $facebook = $setting->facebook;
            }else{
                $facebook = '';
            }

            if($setting->twitter != ''){
                $twitter = $setting->twitter;
            }else{
                $twitter = '';
            }

            if($setting->google != ''){
                $google = $setting->google;
            }else{
                $google = '';
            }

            if($setting->copyright != ''){
                $copyright = $setting->copyright;
            }else{
                $copyright = '';
            }

            if($setting->contact_info_address != ''){
                $contact_info_address = $setting->contact_info_address;
            }else{
                $contact_info_address = '';
            }

            if($setting->contact_info_email != ''){
                $contact_info_email = $setting->contact_info_email;
            }else{
                $contact_info_email = '';
            }

            if($setting->contact_info_phone != ''){
                $contact_info_phone = $setting->contact_info_phone;
            }else{
                $contact_info_phone = '';
            }
        @endphp
    @endforeach
        <div class="container">
            <div class="foot-middle">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="foot-logo">
                            @if($footer_logo != '')
                                <img src="{{ $footer_logo }}">
                            @endif
                        </div>
                        <ul class="socal-icon">
                            @if($twitter != '')
                                <li><a href="{{ $twitter }}" target="_blank"><i class="fa fa-twitter"></i> </a></li>
                            @endif

                            @if($google != '')
                                <li><a href="{{ $google }}" target="_blank"><i class="fa fa-google"></i> </a></li>
                            @endif

                            @if($facebook != '')
                                <li><a href="{{ $facebook }}" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                            @endif
                        </ul>
                        <p>{{ $copyright }}</p>
                    </div>
                    <div class="col-md-3 col-sm-2">
                        <h3>Quick Links</h3> 

                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>  
                            <li><a href="{{ route('build_shed') }}">Build A Shed</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('delivery_area') }}">Delivery Area</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>Support & Help</h3>
                        <ul>
                            <li><a href="{{ route('prepare_base') }}"> How to prepare a base?</a></li>
                            <li><a href="{{ route('security_package') }}">Security Package</a></li>
                            <li><a href="{{ route('cladding_options') }}"> Cladding Options</a></li>
                            <li><a href="{{ route('terms_and_condition') }}">Terms and Condition</a></li>
                            <li><a href="{{ route('privacy_policy') }}"> Privacy Policy</a></li>
                            <li><a href="{{ route('capillary_action') }}"> How to damp proof your Shed?</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h3>Contact Info</h3>
                        <ul class="icon-sec">
                            @if($contact_info_address != '')
                                <li>
                                    <img src="{{ URL::asset('front/img/loc.png') }}">{{ $contact_info_address }}
                                </li>
                            @endif

                            @if($contact_info_email != '')
                                <li>
                                    <img src="{{ URL::asset('front/img/env.png') }}"><a href="mailto:{{$contact_info_email}}">{{$contact_info_email}}</a>
                                </li>
                            @endif

                            @if($contact_info_phone != '')
                                <li>
                                    <img src="{{ URL::asset('front/img/call-foot.png') }}"><a href="tel:{{ $contact_info_phone }}">{{ $contact_info_phone }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <script  src="{{ URL::asset('front/js/script.js?v='.rand()) }}"></script>
 <script  src="{{ URL::asset('front/js/script-garden.js?v='.rand()) }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('input[name="shipping_address"]').click(function(){
            jQuery(".shipping_address_fields").toggle();
        });
    });
</script>

 <script type="text/javascript">
    function openSearch() {
        document.getElementById("mylayout").style.display = "block";
    }
    function closeSearch() {
        document.getElementById("mylayout").style.display = "none";
    }
 </script>

</html>