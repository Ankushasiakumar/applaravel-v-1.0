<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Galleryimage;
use App\Models\Galleryvideo;
use App\Models\Contact;
use App\Models\Buildshed;
use App\Models\Shed;
use App\Models\Cladding;
use App\Models\Security;
use App\Models\Extra;
use App\Models\User;
use App\Models\Delivery;
use App\Models\Layout;
use App\Models\Windowmodel;
use App\Models\Windowcolor;
use App\Models\Windowposition;
use App\Models\Doormodel;
use App\Models\Doorcolor;
use App\Models\Doorposition;
use App\Models\GardenRoom;
use App\Models\Capillaryaction;
use App\Models\Claddingoption;
use App\Models\Termsandcondition;
use App\Models\Preparebase;
use App\Models\Securitypackage;
use App\Models\Privacypolicy;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;
use Cookie;



class FrontController extends Controller
{
    public function index(){
    	$getAllRecords = Home::all();
    	$getTestimonials = Testimonial::all();
    	$settings = Setting::all();
    	return view('frontend.welcome', ['all_records' => $getAllRecords, 'getTestimonials' => $getTestimonials, 'settings' => $settings]);
    }

    public function buildShed(){
    	$settings = Setting::all();
    	$Buildsheds = Buildshed::all();
        $sheds = DB::table('sheds')->where('is_active','Y')->get();
        $claddings = DB::table('claddings')->where('is_active','Y')->get();
        $securities = DB::table('securities')->where('is_active','Y')->get();
        $extras = DB::table('extras')->where('is_active','Y')->get();

        // dd($claddings);
    	return view('frontend.buildshed', ['settings' => $settings, 'Buildsheds' => $Buildsheds, 'sheds' => $sheds, 'claddings' => $claddings, 'securities' => $securities, 'extras' => $extras]);
    }

    public function gallery(){
    	$settings = Setting::all();
    	$Galleryimages = Galleryimage::all();
    	$Galleryvideos = Galleryvideo::all();
    	return view('frontend.gallery', ['settings' => $settings, 'Galleryimages' => $Galleryimages, 'Galleryvideos' => $Galleryvideos]);
    }

    public function contact(){
    	$settings = Setting::all();
    	$contacts = Contact::all();
    	return view('frontend.contact', ['settings' => $settings, 'contacts' => $contacts]);
    }

    public function contactPost(Request $request){

    	$this->validate($request, [
    		'first_name' => 'required',
    		'phone_number' => 'required',
    		'email_address' => 'required|email',
    		'message' => 'required'
    	]);

    }

    public function selectShed(Request $request)
    {
        $sheds = Shed::find($request->shed_id);
        $shedArray = array();
        array_push($shedArray, $sheds->id);
        array_push($shedArray, $sheds->shed_name);
        array_push($shedArray, $sheds->price);

        echo json_encode($shedArray);

    }


    public function selectCladding(Request $request)
    {
    	$claddings = Cladding::find($request->cladding_id);
        $claddingArray = array();
        array_push($claddingArray, $claddings->id);
        array_push($claddingArray, $claddings->cladding_name);
        array_push($claddingArray, $claddings->price);

        echo json_encode($claddingArray);
    }

    public function selectSecurity(Request $request)
    {
    	$securities = Security::find($request->security_id);
        $securityArray = array();
        array_push($securityArray, $securities->id);
        array_push($securityArray, $securities->security_name);
        array_push($securityArray, $securities->price);

        echo json_encode($securityArray);
    }

    public function loginUser()
    {
    	$settings = Setting::all();
    	return view('frontend.login-user', ['settings' => $settings]);
    }

    public function registerUser(Request $request)
    {
    	if ($request->register) {
	    	$this->validate($request, [
	    		'name' => 'required',
	    		'email' => 'required|email|unique:users',
	    		'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
	            'confirm_password' => 'required|min:6'
	    	]);


	        $insertRecords = new User;
	        $insertRecords->name = $request->name;
	        $insertRecords->email = $request->email;
	        $insertRecords->password = Hash::make($request->password);
	        $insertRecords->save();

	    	$settings = Setting::all();
	        return view('frontend.login-user', ['success' => 'Registered Successfully', 'settings' => $settings]);
    	}else if ($request->login) {

    		$this->validate($request, [
    			'email' => 'required',
    			'password' => 'required'
    		]);

    		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
	    		$settings = Setting::all();
			    return \Redirect::route('my_account', ['settings' => $settings]);
			}else{
				return back()->withErrors('Email and Password are not correct.');
			}
    	}
    }

    public function myAccount()
    {
	    $settings = Setting::all();
    	return view('frontend.my-account', ['settings' => $settings]);
    }

    public function logoutUser()
    {
    	Auth::logout();
    	$settings = Setting::all();
		return \Redirect::route('login_user', ['settings' => $settings]);
    }

    public function deliveryArea()
    {
        $settings = Setting::all();

        $matchThese = ['is_active' => 'Y'];
        $delivery = Delivery::where($matchThese)->get();
        return view('frontend.delivery-area', ['settings' => $settings, 'deliveries' => $delivery]);
    }

    /* Garden Builder */

    public function gardenRoomBuilder()
    {
        $settings = Setting::all();
        $layout = DB::table('layouts')->where('is_active','Y')->get();
        
        $windowModels = DB::table('windowmodels')->where('is_active','Y')->get();
        $windowColors = DB::table('windowcolors')->where('is_active','Y')->get();
        $windowPositions = DB::table('windowpositions')->where('is_active','Y')->get();

        $doorModels = DB::table('doormodels')->where('is_active','Y')->get();
        $doorColors = DB::table('doorcolors')->where('is_active','Y')->get();
        $doorPositions = DB::table('doorpositions')->where('is_active','Y')->get();

        $gardenAllRecords = GardenRoom::all();

        return view('frontend.garden-room-builder', ['all_records' => $gardenAllRecords, 'settings' => $settings, 'layouts' => $layout, 'windowModels' => $windowModels, 'windowColors' => $windowColors, 'windowPositions' => $windowPositions, 'doorModels' => $doorModels, 'doorColors' => $doorColors, 'doorPositions' => $doorPositions]);
    }

    public function selectLayouts(Request $request)
    {
        $layouts = Layout::find($request->layout_id);
        $layoutArray = array();
        array_push($layoutArray, $layouts->id);
        array_push($layoutArray, $layouts->layout_name);
        array_push($layoutArray, $layouts->price);

        echo json_encode($layoutArray);

    }


    public function selectWindowModel(Request $request)
    {
        $windowmodels = Windowmodel::find($request->window_model_id);
        $windowModelArray = array();
        array_push($windowModelArray, $windowmodels->id);
        array_push($windowModelArray, $windowmodels->model_name);
        array_push($windowModelArray, $windowmodels->price);

        echo json_encode($windowModelArray);

    }

    public function selectWindowColor(Request $request)
    {
        $windowcolors = Windowcolor::find($request->window_color_id);
        $windowColorArray = array();
        array_push($windowColorArray, $windowcolors->id);
        array_push($windowColorArray, $windowcolors->color_name);
        array_push($windowColorArray, $windowcolors->price);

        echo json_encode($windowColorArray);
    }

    public function selectwindowPosition(Request $request)
    {
        $windowpositions = Windowposition::find($request->window_position_id);
        $windowPositionArray = array();
        array_push($windowPositionArray, $windowpositions->id);
        array_push($windowPositionArray, $windowpositions->position_name);
        array_push($windowPositionArray, $windowpositions->price);

        echo json_encode($windowPositionArray);
    }


    /* Door Functions AJAX */


    public function selectDoorModel(Request $request)
    {
        $doormodels = Doormodel::find($request->door_model_id);
        $doorModelArray = array();
        array_push($doorModelArray, $doormodels->id);
        array_push($doorModelArray, $doormodels->model_name);
        array_push($doorModelArray, $doormodels->price);

        echo json_encode($doorModelArray);

    }

    public function selectDoorColor(Request $request)
    {
        $doorcolors = Doorcolor::find($request->door_color_id);
        $doorColorArray = array();
        array_push($doorColorArray, $doorcolors->id);
        array_push($doorColorArray, $doorcolors->color_name);
        array_push($doorColorArray, $doorcolors->price);

        echo json_encode($doorColorArray);
    }

    public function selectDoorPosition(Request $request)
    {
        $doorpositions = Doorposition::find($request->door_position_id);
        $doorPositionArray = array();
        array_push($doorPositionArray, $doorpositions->id);
        array_push($doorPositionArray, $doorpositions->position_name);
        array_push($doorPositionArray, $doorpositions->price);

        echo json_encode($doorPositionArray);
    }


    public function prepareBase()
    {
        $settings = Setting::all();
        $AllRecords = Preparebase::all();
        return view('frontend.prepare-base', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function securityPackage()
    {
        $settings = Setting::all();
        $AllRecords = Securitypackage::all();
        return view('frontend.security-package', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function claddingOptions()
    {
        $settings = Setting::all();
        $AllRecords = Claddingoption::all();
        return view('frontend.cladding-options', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function capillaryAction()
    {
        $settings = Setting::all();
        $AllRecords = Capillaryaction::all();
        return view('frontend.capillary-action', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function termsAndConditions()
    {
        $settings = Setting::all();
        $AllRecords = Termsandcondition::all();
        return view('frontend.terms-and-condition', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function privacyPolicy()
    {
        $settings = Setting::all();
        $AllRecords = Privacypolicy::all();
        return view('frontend.privacy-policy', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function checkout()
    {
        $settings = Setting::all();
        // return view('frontend.checkout', ['settings' => $settings]);
        return \Redirect::route('garden_builder', ['settings' => $settings]);
    }

    public function ordersView($id)
    {
        $settings = Setting::all();
        $AllRecords = Order::find($id);

        // return \Redirect::route('order_detail', ['all_records' => $AllRecords, 'settings' => $settings]);
        return view('frontend.order-detail', ['all_records' => $AllRecords, 'settings' => $settings]);
    }

    public function checkoutPost(Request $request)
    {
        $settings = Setting::all();

        if ($request->woocommerce_checkout_place_order) {
            // code...
            // dd($request);

            $billing_first_name = $request->billing_first_name;
            $billing_last_name = $request->billing_last_name;
            $billing_email = $request->billing_email;
            $billing_street_address1 = $request->billing_street_address1;
            $billing_street_address2 = $request->billing_street_address2;
            $billing_city = $request->billing_city;
            $billing_country = $request->billing_country;
            $billing_postcode = $request->billing_postcode;
            $billing_phone = $request->billing_phone;
            $shipping_first_name = $request->shipping_first_name;
            $shipping_last_name = $request->shipping_last_name;
            $shipping_email = $request->shipping_email;
            $shipping_street_address1 = $request->shipping_street_address1;
            $shipping_street_address2 = $request->shipping_street_address2;
            $shipping_city = $request->shipping_city;
            $shipping_country = $request->shipping_country;
            $shipping_postcode = $request->shipping_postcode;
            $shipping_phone = $request->shipping_phone;
            $order_notes = $request->order_notes;
            $door_position = $request->door_position;
            $door_color = $request->door_color;
            $door_model = $request->door_model;
            $window_position = $request->window_position;
            $window_color = $request->window_color;
            $window_model = $request->window_model;
            $layout = $request->layout;
            $shortest_side = $request->shortest_side;
            $longest_side = $request->longest_side;
            $total_price = $request->total_price;
            $payment_method = $request->payment_method;

            $insertRecords = new Order;
            $insertRecords->billing_first_name = $billing_first_name;
            $insertRecords->billing_last_name = $billing_last_name;
            $insertRecords->billing_email = $billing_email;
            $insertRecords->billing_street_address1 = $billing_street_address1;
            $insertRecords->billing_street_address2 = $billing_street_address2;
            $insertRecords->billing_city = $billing_city;
            $insertRecords->billing_country = $billing_country;
            $insertRecords->billing_postcode = $billing_postcode;
            $insertRecords->billing_phone = $billing_phone;
            $insertRecords->shipping_first_name = $shipping_first_name;
            $insertRecords->shipping_last_name = $shipping_last_name;
            $insertRecords->shipping_email = $shipping_email;
            $insertRecords->shipping_street_address1 = $shipping_street_address1;
            $insertRecords->shipping_street_address2 = $shipping_street_address2;
            $insertRecords->shipping_city = $shipping_city;
            $insertRecords->shipping_country = $shipping_country;
            $insertRecords->shipping_postcode = $shipping_postcode;
            $insertRecords->shipping_phone = $shipping_phone;
            $insertRecords->order_notes = $order_notes;
            $insertRecords->door_position = $door_position;
            $insertRecords->door_color = $door_color;
            $insertRecords->door_model = $door_model;
            $insertRecords->window_position = $window_position;
            $insertRecords->window_color = $window_color;
            $insertRecords->window_model = $window_model;
            $insertRecords->layout = $layout;
            $insertRecords->shortest_side = $shortest_side;
            $insertRecords->longest_side = $longest_side;
            $insertRecords->total_price = $total_price;
            $insertRecords->payment_method = $payment_method;
            $insertRecords->save();

            $AllRecords = Order::find($insertRecords->id);

            return view('frontend.order-detail', ['all_records' => $AllRecords, 'settings' => $settings]);

        }else{
            if (!empty($request->door_position)) {
                $door_position = $request->door_position;
            }else{
                $door_position = '';
            }

            if (!empty($request->door_color)) {
                $door_color = $request->door_color;
            }else{
                $door_color = '';
            }

            if (!empty($request->door_model)) {
                $door_model = $request->door_model;
            }else{
                $door_model = '';
            }

            if (!empty($request->window_position)) {
                $window_position = $request->window_position;
            }else{
                $window_position = '';
            }

            if (!empty($request->window_color)) {
                $window_color = $request->window_color;
            }else{
                $window_color = '';
            }

            if (!empty($request->window_model)) {
                $window_model = $request->window_model;
            }else{
                $window_model = '';
            }

            if (!empty($request->layout)) {
                $layout = $request->layout;
            }else{
                $layout = '';
            }

            if (!empty($request->shortest_side)) {
                $shortest_side = $request->shortest_side;
            }else{
                $shortest_side = '';
            }

            if (!empty($request->longest_side)) {
                $longest_side = $request->longest_side;
            }else{
                $longest_side = '';
            }

            if (!empty($request->total_price)) {
                $total_price = $request->total_price;
            }else{
                $total_price = '';
            }

            // Cookie::make('checkout_data', $total_price, 5600);

            // dd( Cookie::get('checkout_data') );

            $user_name=$request->input('user_name');
             $cookie_name="user_name";
             $cookie_value="PhpScots";
             $cookie_expired_in=3600;//in mins
             $cookie_path='/'; // available to all pages of website.
             $cookie_host=$request->getHttpHost(); // domain or website you are setting this cookie.
             $http_only=false;
            //Creating cookie;
             $my_cookie= cookie($cookie_name, $cookie_value,$cookie_expired_in,$cookie_path,$cookie_host,$http_only);

            return view('frontend.checkout', ['settings' => $settings, 'door_position' => $door_position, 'door_color' => $door_color, 'door_model' => $door_model, 'window_position' => $window_position, 'window_color' => $window_color, 'window_model' => $window_model, 'layout' => $layout, 'shortest_side' => $shortest_side, 'longest_side' => $longest_side, 'total_price' => $total_price])->withCookie($my_cookie);
        }

    }
}
