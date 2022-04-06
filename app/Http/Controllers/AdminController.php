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
use App\Models\Category;
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
use App\Models\Preview;
use Illuminate\Support\Facades\DB;
use Redirect;

class AdminController extends Controller
{
    public function index(){
    	// die('backend');
    	return view('backend.index');
    	// dd(Hash::make('pete@123'));
    }

    public function dashboard(){
    	// dd(phpinfo());
    	return view('backend.dashboard');
    }

    public function home()
    {
    	$getAllRecords = Home::all();
    	return view('backend.home', ['all_records' => $getAllRecords]);
    }

    public function homePost(Request $request)
    {
    	$getAllRecords = Home::all();
    	if (!$getAllRecords->isEmpty()) {
    		$firstRecord = Home::first()->id;
    		$updateRecords = Home::find($firstRecord);
    		$updateRecords->banner_title = $request->banner_title;
    		$updateRecords->banner_link = $request->banner_link;
			$updateRecords->why_choose_title = $request->why_choose_title;
			$updateRecords->choose_grid_title_1 = $request->choose_grid_title_1;
			$updateRecords->choose_grid_title_2 = $request->choose_grid_title_2;
			$updateRecords->choose_grid_title_3 = $request->choose_grid_title_3;
			$updateRecords->choose_grid_title_4 = $request->choose_grid_title_4;
			$updateRecords->build_shed_title = $request->build_shed_title;
			$updateRecords->build_shed_content = $request->build_shed_content;
			$updateRecords->build_shed_link = $request->build_shed_link;


			/* banner_background */
			if($request->hasFile('banner_background')){
                $image1 = $request->file('banner_background');
                $name1 = uniqid().date("dmYhis").'.'.$image1->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image1->move($destinationPath, $name1);
                $banner_background_path = "/images/home/".$name1;
            }else{
                $banner_background_path = Home::first()->banner_background;
            }
            $updateRecords->banner_background = $banner_background_path;


            /* choose_grid_icon_1 */
            if($request->hasFile('choose_grid_icon_1')){
                $image2 = $request->file('choose_grid_icon_1');
                $name2 = uniqid().date("dmYhis").'.'.$image2->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image2->move($destinationPath, $name2);
                $choose_grid_icon_1_path = "/images/home/".$name2;
            }else{
                $choose_grid_icon_1_path = Home::first()->choose_grid_icon_1;
            }
            $updateRecords->choose_grid_icon_1 = $choose_grid_icon_1_path;


            /* choose_grid_icon_1 */
            if($request->hasFile('choose_grid_icon_2')){
                $image3 = $request->file('choose_grid_icon_2');
                $name3 = uniqid().date("dmYhis").'.'.$image3->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image3->move($destinationPath, $name3);
                $choose_grid_icon_2_path = "/images/home/".$name3;
            }else{
                $choose_grid_icon_2_path = Home::first()->choose_grid_icon_2;
            }
            $updateRecords->choose_grid_icon_2 = $choose_grid_icon_2_path;


            /* choose_grid_icon_1 */
            if($request->hasFile('choose_grid_icon_3')){
                $image4 = $request->file('choose_grid_icon_3');
                $name4 = uniqid().date("dmYhis").'.'.$image4->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image4->move($destinationPath, $name4);
                $choose_grid_icon_3_path = "/images/home/".$name4;
            }else{
                $choose_grid_icon_3_path = Home::first()->choose_grid_icon_3;
            }
            $updateRecords->choose_grid_icon_3 = $choose_grid_icon_3_path;


            /* choose_grid_icon_1 */
            if($request->hasFile('choose_grid_icon_4')){
                $image5 = $request->file('choose_grid_icon_4');
                $name5 = uniqid().date("dmYhis").'.'.$image5->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image5->move($destinationPath, $name5);
                $choose_grid_icon_4_path = "/images/home/".$name5;
            }else{
                $choose_grid_icon_4_path = Home::first()->choose_grid_icon_4;
            }
            $updateRecords->choose_grid_icon_4 = $choose_grid_icon_4_path;

            /* build_shed_image_path */
            if($request->hasFile('build_shed_image')){
                $image6 = $request->file('build_shed_image');
                $name6 = uniqid().date("dmYhis").'.'.$image6->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image6->move($destinationPath, $name6);
                $build_shed_image_path = "/images/home/".$name6;
            }else{
                $build_shed_image_path = Home::first()->build_shed_image;
            }
            $updateRecords->build_shed_image = $build_shed_image_path;


			$updateRecords->save();
			$getAllRecords = Home::all();
			return view('backend.home', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
    	}else{

    		if($request->hasFile('banner_background')){
                $image1 = $request->file('banner_background');
                $name1 = uniqid().date("dmYhis").'.'.$image1->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image1->move($destinationPath, $name1);
                $banner_background_path = "/images/home/".$name1;
            }
            else{
                $banner_background_path = '';
            }

            if($request->hasFile('choose_grid_icon_1')){
                $image2 = $request->file('choose_grid_icon_1');
                $name2 = uniqid().date("dmYhis").'.'.$image2->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image2->move($destinationPath, $name2);
                $choose_grid_icon_1_path = "/images/home/".$name2;
            }
            else{
                $choose_grid_icon_1_path = '';
            }

    		if($request->hasFile('choose_grid_icon_2')){
                $image3 = $request->file('choose_grid_icon_2');
                $name3 = uniqid().date("dmYhis").'.'.$image3->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image3->move($destinationPath, $name3);
                $choose_grid_icon_2_path = "/images/home/".$name3;
            }
            else{
                $choose_grid_icon_2_path = '';
            }

            if($request->hasFile('choose_grid_icon_3')){
                $image4 = $request->file('choose_grid_icon_3');
                $name4 = uniqid().date("dmYhis").'.'.$image4->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image4->move($destinationPath, $name4);
                $choose_grid_icon_3_path = "/images/home/".$name4;
            }
            else{
                $choose_grid_icon_3_path = '';
            }


            if($request->hasFile('choose_grid_icon_4')){
                $image5 = $request->file('choose_grid_icon_4');
                $name5 = uniqid().date("dmYhis").'.'.$image5->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image5->move($destinationPath, $name5);
                $choose_grid_icon_4_path = "/images/home/".$name5;
            }
            else{
                $choose_grid_icon_4_path = '';
            }

            if($request->hasFile('build_shed_image')){
                $image6 = $request->file('build_shed_image');
                $name6 = uniqid().date("dmYhis").'.'.$image6->getClientOriginalExtension();
                $destinationPath = public_path('/images/home/');
                $image6->move($destinationPath, $name6);
                $build_shed_image_path = "/images/home/".$name6;
            }
            else{
                $build_shed_image_path = '';
            }

    		$insertHome = new Home;
    		$insertHome->banner_background = $banner_background_path;
    		$insertHome->banner_title = $request->banner_title;
    		$insertHome->banner_link = $request->banner_link;
    		$insertHome->why_choose_title = $request->why_choose_title;
    		$insertHome->choose_grid_icon_1	= $choose_grid_icon_1_path;
    		$insertHome->choose_grid_title_1 = $request->choose_grid_title_1;	
    		$insertHome->choose_grid_icon_2	= $choose_grid_icon_2_path;
    		$insertHome->choose_grid_title_2 = $request->choose_grid_title_2;
    		$insertHome->choose_grid_icon_3	= $choose_grid_icon_3_path;
    		$insertHome->choose_grid_title_3 = $request->choose_grid_title_3;
    		$insertHome->choose_grid_icon_4	= $choose_grid_icon_4_path;
    		$insertHome->choose_grid_title_4 = $request->choose_grid_title_4;
    		$insertHome->build_shed_title = $request->build_shed_title;
    		$insertHome->build_shed_content = $request->build_shed_content;
    		$insertHome->build_shed_link = $request->build_shed_link;
    		$insertHome->build_shed_image = $build_shed_image_path;
    		$insertHome->save();

    		$getAllRecords = Home::all();
    		return view('backend.home', ['all_records' => $getAllRecords]);
    	}
    }

    public function testimonial()
    {
    	$testimonials = Testimonial::all();
    	return view('backend.testimonial',['testimonials' => $testimonials]);
    }

    public function add_new_testimonial()
    {
    	return view('backend.testimonial-add');
    }

    public function add_new_testimonial_post(Request $request)
    {
    	$this->validate($request, [
    		'testimonial_image' => 'required',
    		'testimonial_name' => 'required',
    		'testimonial_content' => 'required'
    	]);
    	$add_testimonial = new Testimonial;
    	$add_testimonial->testimonial_name = $request->testimonial_name;
    	$add_testimonial->testimonial_content = $request->testimonial_content;

    	if($request->hasFile('testimonial_image')){
            $image_test = $request->file('testimonial_image');
            $name_test = uniqid().date("dmYhis").'.'.$image_test->getClientOriginalExtension();
            $destinationPath = public_path('/images/testimonials/');
            $image_test->move($destinationPath, $name_test);
            $build_shed_image_path = "/images/testimonials/".$name_test;

    		$add_testimonial->testimonial_image = $build_shed_image_path;
        }

    	$add_testimonial->save();
    	$testimonials = Testimonial::all();
    	return view('backend.testimonial', ['testimonials' => $testimonials,'success' => 'Records added Successfully']);
    }

    public function add_new_testimonial_edit($id)
    {
    	$edit_record = Testimonial::find($id);
    	return view('backend.testimonial-edit', ['edit_record' => $edit_record]);
    }

    public function edit_testimonial_post(Request $request)
    {
    	$this->validate($request,[
    		'testimonial_name' => 'required',
    		'testimonial_content' => 'required'
    	]);

    	$updateRecords = Testimonial::find($request->testimonial_id);
    	$updateRecords->testimonial_name = $request->testimonial_name;
    	$updateRecords->testimonial_content = $request->testimonial_content;

    	if($request->hasFile('testimonial_image')){
            $image_test = $request->file('testimonial_image');
            $name_test = uniqid().date("dmYhis").'.'.$image_test->getClientOriginalExtension();
            $destinationPath = public_path('/images/testimonials/');
            $image_test->move($destinationPath, $name_test);
            $build_shed_image_path = "/images/testimonials/".$name_test;

    		$updateRecords->testimonial_image = $build_shed_image_path;
        }else{
    		$updateRecords->testimonial_image = Testimonial::first()->testimonial_image;
        }

    	$updateRecords->save();

    	$testimonials = Testimonial::all();
    	// return redirect()->route('admin_testimonial', ['testimonials' => $testimonials,'success' => 'Records updated Successfully']);

    	return view('backend.testimonial', ['testimonials' => $testimonials,'success' => 'Records updated Successfully']);
    }

    public function add_new_testimonial_delete($id)
    {	
    	$delete = Testimonial::find($id);
		$delete->delete();

    	$testimonials = Testimonial::all();
    	return view('backend.testimonial', ['testimonials' => $testimonials,'success' => 'Records Deleted']);
    }

    public function settings()
    {
    	$getAllRecords = Setting::all();
    	return view('backend.settings',['all_records' => $getAllRecords]);
    }

    public function settingsPost(Request $request)
    {	
        $this->validate($request, [
            'measurement' => 'required'
        ]);

    	$getAllRecords = Setting::all();
    	if (!$getAllRecords->isEmpty()) {
    		$firstRecord = Setting::first()->id;
    		$updateRecords = Setting::find($firstRecord);

    		/* Header Logo */
    		if($request->hasFile('header_logo')){
                $image_header = $request->file('header_logo');
                $name_header = uniqid().date("dmYhis").'.'.$image_header->getClientOriginalExtension();
                $destinationPath = public_path('/images/setting/');
                $image_header->move($destinationPath, $name_header);
                $header_logo_path = "/images/setting/".$name_header;
            }else{
                $header_logo_path = Setting::first()->header_logo;
            }
            $updateRecords->header_logo = $header_logo_path;


            /* Footer Logo */
            if($request->hasFile('footer_logo')){
                $image_footer = $request->file('footer_logo');
                $name_footer = uniqid().date("dmYhis").'.'.$image_footer->getClientOriginalExtension();
                $destinationPath = public_path('/images/setting/');
                $image_footer->move($destinationPath, $name_footer);
                $footer_logo_path = "/images/setting/".$name_footer;
            }else{
                $footer_logo_path = Setting::first()->footer_logo;
            }
            $updateRecords->footer_logo = $footer_logo_path;

            $updateRecords->phone = $request->phone;
			$updateRecords->timing = $request->timing;
			$updateRecords->facebook = $request->facebook;
			$updateRecords->twitter = $request->twitter;
			$updateRecords->google = $request->google;
			$updateRecords->copyright = $request->copyright;
			$updateRecords->contact_info_address = $request->contact_info_address;
			$updateRecords->contact_info_email = $request->contact_info_email;
			$updateRecords->contact_info_phone = $request->contact_info_phone;
			$updateRecords->contact_form_email = $request->contact_form_email;
            $updateRecords->google_map = $request->google_map;
            $updateRecords->measurement = $request->measurement;

            $updateRecords->save();
			$getAllRecords = Setting::all();
    		return view('backend.settings', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);

    	}else{
	    	if($request->hasFile('header_logo')){
	            $image_header = $request->file('header_logo');
	            $name_header = uniqid().date("dmYhis").'.'.$image_header->getClientOriginalExtension();
	            $destinationPath = public_path('/images/setting/');
	            $image_header->move($destinationPath, $name_header);
	            $header_logo_path = "/images/setting/".$name_header;
	        }
	        else{
	            $header_logo_path = '';
	        }

	        if($request->hasFile('footer_logo')){
	            $image_footer = $request->file('footer_logo');
	            $name_footer = uniqid().date("dmYhis").'.'.$image_footer->getClientOriginalExtension();
	            $destinationPath = public_path('/images/setting/');
	            $image_footer->move($destinationPath, $name_footer);
	            $footer_logo_path = "/images/setting/".$name_footer;
	        }
	        else{
	            $footer_logo_path = '';
	        }

	    	$setting = new Setting;
	    	$setting->header_logo = $header_logo_path;
	    	$setting->phone = $request->phone;
	    	$setting->timing = $request->timing;
	    	$setting->footer_logo = $footer_logo_path;
	    	$setting->facebook = $request->facebook;
	    	$setting->twitter = $request->twitter;
	    	$setting->google = $request->google;
	    	$setting->copyright = $request->copyright;
			$setting->contact_info_address = $request->contact_info_address;
			$setting->contact_info_email = $request->contact_info_email;
			$setting->contact_info_phone = $request->contact_info_phone;
			$setting->contact_form_email = $request->contact_form_email;
			$setting->google_map = $request->google_map;
            $setting->measurement = $request->measurement;
	    	$setting->save();

	    	$getAllRecords = Setting::all();
    		return view('backend.settings', ['all_records' => $getAllRecords]);
    	}
    }

    public function gallery()
    {
    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery',['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords]);
    }

    public function galleryImagesAdd()
    {
    	return view('backend.gallery-images-add');
    }

    public function galleryImagesPost(Request $request)
    {
    	$this->validate($request, [
    		'gallery_image' => 'required',
    		'gallery_name' => 'required'
    	]);

    	if($request->hasFile('gallery_image')){
            $image_gallery = $request->file('gallery_image');
            $name_gallery = uniqid().date("dmYhis").'.'.$image_gallery->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery/');
            $image_gallery->move($destinationPath, $name_gallery);
            $gallery_image_path = "/images/gallery/".$name_gallery;
        }
        else{
            $gallery_image_path = '';
        }

    	$insertImages = new Galleryimage;
    	$insertImages->gallery_image = $gallery_image_path;
    	$insertImages->gallery_name = $request->gallery_name;
    	$insertImages->save();

    	$galleryImagesRecords = Galleryimage::all();
		$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery',['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Image added Successfully']);

    }

    public function galleryImageEdit($id)
    {
    	$edit_record = Galleryimage::find($id);
    	return view('backend.gallery-images-edit', ['edit_record' => $edit_record]);
    }

    public function galleryImageEditPost(Request $request)
    {
    	$this->validate($request,[
    		'gallery_name' => 'required'
    	]);

    	$updateRecords = Galleryimage::find($request->gallery_id);
    	$updateRecords->gallery_name = $request->gallery_name;

    	if($request->hasFile('gallery_image')){
            $image_gallery = $request->file('gallery_image');
            $name_gallery = uniqid().date("dmYhis").'.'.$image_gallery->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery/');
            $image_gallery->move($destinationPath, $name_gallery);
            $gallery_image_path = "/images/gallery/".$name_gallery;

    		$updateRecords->gallery_image = $gallery_image_path;
        }else{
    		$updateRecords->gallery_image = Galleryimage::first()->gallery_image;
        }

    	$updateRecords->save();

    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery', ['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Records updated Successfully']);
    }

    public function galleryImageDelete($id)
    {
    	$delete = Galleryimage::find($id);
		$delete->delete();

    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery', ['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Records Deleted']);	
    }

    public function galleryVideosAdd()
    {
    	return view('backend.gallery-videos-add');
    }

    public function galleryVideosPost(Request $request)
    {
    	$this->validate($request, [
    		'video_code' => 'required',
    		'video_name' => 'required'
    	]);

    	$insertVideo = new Galleryvideo;
		$insertVideo->video_code = $request->video_code;
		$insertVideo->video_name = $request->video_name;
    	$insertVideo->save();

    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery', ['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Video added Successfully']);
    }

    public function galleryVideoEdit($id)
    {
    	$edit_record = Galleryvideo::find($id);
    	return view('backend.gallery-videos-edit', ['edit_record' => $edit_record]);
    }

    public function galleryVideoEditPost(Request $request)
    {
    	$this->validate($request,[
    		'video_code' => 'required',
    		'video_name' => 'required'
    	]);

    	$updateRecords = Galleryvideo::find($request->video_id);
    	$updateRecords->video_code = $request->video_code;
    	$updateRecords->video_name = $request->video_name;

    	$updateRecords->save();

    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery', ['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Records updated Successfully']);
    }

    public function galleryVideoDelete($id)
    {
    	$delete = Galleryvideo::find($id);
		$delete->delete();

    	$galleryImagesRecords = Galleryimage::all();
    	$galleryVideosRecords = Galleryvideo::all();
    	return view('backend.gallery', ['galleryImagesRecords' => $galleryImagesRecords, 'galleryVideosRecords' => $galleryVideosRecords, 'success' => 'Records Deleted']);
    }

    public function contactUs()
    {
    	$getAllRecords = Contact::all();
    	return view('backend.contact', ['all_records' => $getAllRecords]);
    }

    public function contactUsPost(Request $request)
    {
    	$this->validate($request, [
    		'contact_description' => 'required',
			'contact_address' => 'required',
			'contact_phone' => 'required',
			'contact_email' => 'required',
			'contact_timing' => 'required',
			'get_in_touch_description' => 'required',
			'contact_form_email' => 'required'
    	]);

    	$getAllRecords = Contact::all();
    	if (!$getAllRecords->isEmpty()) {
    		$firstRecord = Contact::first()->id;
    		$updateRecords = Contact::find($firstRecord);
    		$updateRecords->contact_description = $request->contact_description;
    		$updateRecords->contact_address = $request->contact_address;
    		$updateRecords->contact_phone = $request->contact_phone;
    		$updateRecords->contact_email = $request->contact_email;
    		$updateRecords->contact_timing = $request->contact_timing;
    		$updateRecords->get_in_touch_description = $request->get_in_touch_description;
    		$updateRecords->contact_form_email = $request->contact_form_email;

    		$updateRecords->save();
			$getAllRecords = Contact::all();
    		return view('backend.contact', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);

    	}else{
    		$insertRecord = new Contact;
    		$insertRecord->contact_description = $request->contact_description;
    		$insertRecord->contact_address = $request->contact_address;
    		$insertRecord->contact_phone = $request->contact_phone;
    		$insertRecord->contact_email = $request->contact_email;
    		$insertRecord->contact_timing = $request->contact_timing;
    		$insertRecord->get_in_touch_description = $request->get_in_touch_description;
    		$insertRecord->contact_form_email = $request->contact_form_email;

    		$insertRecord->save();
    		$getAllRecords = Contact::all();
    		return view('backend.contact', ['all_records' => $getAllRecords, 'success' => 'Records added Successfully']);
    	}
    }

    public function buildShed()
    {	
    	$getAllRecords = Buildshed::all();
    	return view('backend.buildshed', ['all_records' => $getAllRecords]);
    }

    public function buildShedPost(Request $request)
    {
    	// Buildshed

    	$getAllRecords = Buildshed::all();
    	if (!$getAllRecords->isEmpty()) {
    		$firstRecord = Buildshed::first()->id;
    		$updateRecords = Buildshed::find($firstRecord);


            if($request->hasFile('product_featured_tab_1_section_1_image')){
	            $img1 = $request->file('product_featured_tab_1_section_1_image');
	            $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img1->move($destinationPath, $name1);
	            $product_featured_tab_1_section_1_image_path = "/images/buildshed/".$name1;
	        }
	        else{
	            $product_featured_tab_1_section_1_image_path = buildshed::first()->product_featured_tab_1_section_1_image;
	        }
	        $updateRecords->product_featured_tab_1_section_1_image = $product_featured_tab_1_section_1_image_path;


	        if($request->hasFile('product_featured_tab_1_section_2_image')){
	            $img2 = $request->file('product_featured_tab_1_section_2_image');
	            $name2 = uniqid().date("dmYhis").'.'.$img2->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img2->move($destinationPath, $name2);
	            $product_featured_tab_1_section_2_image_path = "/images/buildshed/".$name2;
	        }
	        else{
	            $product_featured_tab_1_section_2_image_path = buildshed::first()->product_featured_tab_1_section_2_image;
	        }
	        $updateRecords->product_featured_tab_1_section_2_image = $product_featured_tab_1_section_2_image_path;


	        if($request->hasFile('product_featured_tab_1_section_3_image')){
	            $img3 = $request->file('product_featured_tab_1_section_3_image');
	            $name3 = uniqid().date("dmYhis").'.'.$img3->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img3->move($destinationPath, $name3);
	            $product_featured_tab_1_section_3_image_path = "/images/buildshed/".$name3;
	        }
	        else{
	            $product_featured_tab_1_section_3_image_path = buildshed::first()->product_featured_tab_1_section_3_image;
	        }
	        $updateRecords->product_featured_tab_1_section_3_image = $product_featured_tab_1_section_3_image_path;

	        if($request->hasFile('product_featured_tab_1_section_3_icon')){
	            $img4 = $request->file('product_featured_tab_1_section_3_icon');
	            $name4 = uniqid().date("dmYhis").'.'.$img4->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img4->move($destinationPath, $name4);
	            $product_featured_tab_1_section_3_icon_path = "/images/buildshed/".$name4;
	        }
	        else{
	            $product_featured_tab_1_section_3_icon_path = buildshed::first()->product_featured_tab_1_section_3_icon;
	        }
	        $updateRecords->product_featured_tab_1_section_3_icon = $product_featured_tab_1_section_3_icon_path;

	        if($request->hasFile('product_featured_tab_1_section_4_image')){
	            $img5 = $request->file('product_featured_tab_1_section_4_image');
	            $name5 = uniqid().date("dmYhis").'.'.$img5->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img5->move($destinationPath, $name5);
	            $product_featured_tab_1_section_4_image_path = "/images/buildshed/".$name5;
	        }
	        else{
	            $product_featured_tab_1_section_4_image_path = buildshed::first()->product_featured_tab_1_section_4_image;
	        }
	        $updateRecords->product_featured_tab_1_section_4_image = $product_featured_tab_1_section_4_image_path;

	        if($request->hasFile('product_featured_tab_1_section_4_icon')){
	            $img6 = $request->file('product_featured_tab_1_section_4_icon');
	            $name6 = uniqid().date("dmYhis").'.'.$img6->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img6->move($destinationPath, $name6);
	            $product_featured_tab_1_section_4_icon_path = "/images/buildshed/".$name6;
	        }
	        else{
	            $product_featured_tab_1_section_4_icon_path = buildshed::first()->product_featured_tab_1_section_4_icon;
	        }
	        $updateRecords->product_featured_tab_1_section_4_icon = $product_featured_tab_1_section_4_icon_path;

	        if($request->hasFile('product_featured_tab_1_section_5_image')){
	            $img7 = $request->file('product_featured_tab_1_section_5_image');
	            $name7 = uniqid().date("dmYhis").'.'.$img7->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img7->move($destinationPath, $name7);
	            $product_featured_tab_1_section_5_image_path = "/images/buildshed/".$name7;
	        }
	        else{
	            $product_featured_tab_1_section_5_image_path = buildshed::first()->product_featured_tab_1_section_5_image;
	        }
	        $updateRecords->product_featured_tab_1_section_5_image = $product_featured_tab_1_section_5_image_path;

	        if($request->hasFile('product_featured_tab_1_section_5_icon')){
	            $img8 = $request->file('product_featured_tab_1_section_5_icon');
	            $name8 = uniqid().date("dmYhis").'.'.$img8->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img8->move($destinationPath, $name8);
	            $product_featured_tab_1_section_5_icon_path = "/images/buildshed/".$name8;
	        }
	        else{
	            $product_featured_tab_1_section_5_icon_path = buildshed::first()->product_featured_tab_1_section_5_icon;
	        }
	        $updateRecords->product_featured_tab_1_section_5_icon = $product_featured_tab_1_section_5_icon_path;

	        if($request->hasFile('product_featured_tab_1_section_6_image')){
	            $img8 = $request->file('product_featured_tab_1_section_6_image');
	            $name8 = uniqid().date("dmYhis").'.'.$img8->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img8->move($destinationPath, $name8);
	            $product_featured_tab_1_section_6_image_path = "/images/buildshed/".$name8;
	        }
	        else{
	            $product_featured_tab_1_section_6_image_path = buildshed::first()->product_featured_tab_1_section_6_image;
	        }
	        $updateRecords->product_featured_tab_1_section_6_image = $product_featured_tab_1_section_6_image_path;

	        if($request->hasFile('product_featured_tab_1_section_6_icon')){
	            $img9 = $request->file('product_featured_tab_1_section_6_icon');
	            $name9 = uniqid().date("dmYhis").'.'.$img9->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img9->move($destinationPath, $name9);
	            $product_featured_tab_1_section_6_icon_path = "/images/buildshed/".$name9;
	        }
	        else{
	            $product_featured_tab_1_section_6_icon_path = buildshed::first()->product_featured_tab_1_section_6_icon;
	        }
	        $updateRecords->product_featured_tab_1_section_6_icon = $product_featured_tab_1_section_6_icon_path;

	        if($request->hasFile('product_featured_tab_1_section_7_image')){
	            $img10 = $request->file('product_featured_tab_1_section_7_image');
	            $name10 = uniqid().date("dmYhis").'.'.$img10->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img10->move($destinationPath, $name10);
	            $product_featured_tab_1_section_7_image_path = "/images/buildshed/".$name10;
	        }
	        else{
	            $product_featured_tab_1_section_7_image_path = buildshed::first()->product_featured_tab_1_section_7_image;
	        }
	        $updateRecords->product_featured_tab_1_section_7_image = $product_featured_tab_1_section_7_image_path;

	        if($request->hasFile('product_featured_tab_1_section_7_icon')){
	            $img11 = $request->file('product_featured_tab_1_section_7_icon');
	            $name11 = uniqid().date("dmYhis").'.'.$img11->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img11->move($destinationPath, $name11);
	            $product_featured_tab_1_section_7_icon_path = "/images/buildshed/".$name11;
	        }
	        else{
	            $product_featured_tab_1_section_7_icon_path = buildshed::first()->product_featured_tab_1_section_7_icon;
	        }
	        $updateRecords->product_featured_tab_1_section_7_icon = $product_featured_tab_1_section_7_icon_path;

	        if($request->hasFile('product_featured_tab_1_section_8_image')){
	            $img12 = $request->file('product_featured_tab_1_section_8_image');
	            $name12 = uniqid().date("dmYhis").'.'.$img12->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img12->move($destinationPath, $name12);
	            $product_featured_tab_1_section_8_image_path = "/images/buildshed/".$name12;
	        }
	        else{
	            $product_featured_tab_1_section_8_image_path = buildshed::first()->product_featured_tab_1_section_8_image;
	        }
	        $updateRecords->product_featured_tab_1_section_8_image = $product_featured_tab_1_section_8_image_path;

	        if($request->hasFile('product_featured_tab_1_section_9_image')){
	            $img13 = $request->file('product_featured_tab_1_section_9_image');
	            $name13 = uniqid().date("dmYhis").'.'.$img13->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img13->move($destinationPath, $name13);
	            $product_featured_tab_1_section_9_image_path = "/images/buildshed/".$name13;
	        }
	        else{
	            $product_featured_tab_1_section_9_image_path = buildshed::first()->product_featured_tab_1_section_9_image;
	        }
	        $updateRecords->product_featured_tab_1_section_9_image = $product_featured_tab_1_section_9_image_path;

	        if($request->hasFile('product_featured_tab_1_section_10_image_1')){
	            $img14 = $request->file('product_featured_tab_1_section_10_image_1');
	            $name14 = uniqid().date("dmYhis").'.'.$img14->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img14->move($destinationPath, $name14);
	            $product_featured_tab_1_section_10_image_1_path = "/images/buildshed/".$name14;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_1_path = buildshed::first()->product_featured_tab_1_section_10_image_1;
	        }
			$updateRecords->product_featured_tab_1_section_10_image_1 = $product_featured_tab_1_section_10_image_1_path;



	        if($request->hasFile('product_featured_tab_1_section_10_image_2')){
	            $img15 = $request->file('product_featured_tab_1_section_10_image_2');
	            $name15 = uniqid().date("dmYhis").'.'.$img15->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img15->move($destinationPath, $name15);
	            $product_featured_tab_1_section_10_image_2_path = "/images/buildshed/".$name15;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_2_path = buildshed::first()->product_featured_tab_1_section_10_image_2;
	        }
	        $updateRecords->product_featured_tab_1_section_10_image_2 = $product_featured_tab_1_section_10_image_2_path;


	        if($request->hasFile('product_featured_tab_1_section_10_image_3')){
	            $img16 = $request->file('product_featured_tab_1_section_10_image_3');
	            $name16 = uniqid().date("dmYhis").'.'.$img16->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img16->move($destinationPath, $name16);
	            $product_featured_tab_1_section_10_image_3_path = "/images/buildshed/".$name16;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_3_path = buildshed::first()->product_featured_tab_1_section_10_image_3;
	        }
			$updateRecords->product_featured_tab_1_section_10_image_3 = $product_featured_tab_1_section_10_image_3_path;


	        if($request->hasFile('product_featured_tab_1_section_10_image_4')){
	            $img18 = $request->file('product_featured_tab_1_section_10_image_4');
	            $name18 = uniqid().date("dmYhis").'.'.$img18->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img18->move($destinationPath, $name18);
	            $product_featured_tab_1_section_10_image_4_path = "/images/buildshed/".$name18;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_4_path = buildshed::first()->product_featured_tab_1_section_10_image_4;
	        }
	        $updateRecords->product_featured_tab_1_section_10_image_4 = $product_featured_tab_1_section_10_image_4_path;

	        if($request->hasFile('product_featured_tab_2_section_1_image')){
	            $img19 = $request->file('product_featured_tab_2_section_1_image');
	            $name20 = uniqid().date("dmYhis").'.'.$img19->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img19->move($destinationPath, $name20);
	            $product_featured_tab_2_section_1_image_path = "/images/buildshed/".$name20;
	        }
	        else{
	            $product_featured_tab_2_section_1_image_path = buildshed::first()->product_featured_tab_2_section_1_image;
	        }
	        $updateRecords->product_featured_tab_2_section_1_image = $product_featured_tab_2_section_1_image_path;

	        if($request->hasFile('product_featured_tab_2_section_2_image')){
	            $img21 = $request->file('product_featured_tab_2_section_2_image');
	            $name21 = uniqid().date("dmYhis").'.'.$img21->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img21->move($destinationPath, $name21);
	            $product_featured_tab_2_section_2_image_path = "/images/buildshed/".$name21;
	        }
	        else{
	            $product_featured_tab_2_section_2_image_path = buildshed::first()->product_featured_tab_2_section_2_image;
	        }
	        $updateRecords->product_featured_tab_2_section_2_image = $product_featured_tab_2_section_2_image_path;


            $updateRecords->shed_builder_content = $request->shed_builder_content;
            $updateRecords->product_featured_tab_1_section_1_title = $request->product_featured_tab_1_section_1_title;
			$updateRecords->product_featured_tab_1_section_1_content = $request->product_featured_tab_1_section_1_content;
			$updateRecords->product_featured_tab_1_section_2_title = $request->product_featured_tab_1_section_2_title;
			$updateRecords->product_featured_tab_1_section_2_content = $request->product_featured_tab_1_section_2_content;
			$updateRecords->product_featured_tab_1_section_3_title = $request->product_featured_tab_1_section_3_title;
			$updateRecords->product_featured_tab_1_section_3_content = $request->product_featured_tab_1_section_3_content;
			$updateRecords->product_featured_tab_1_section_4_title = $request->product_featured_tab_1_section_4_title;
			$updateRecords->product_featured_tab_1_section_4_content = $request->product_featured_tab_1_section_4_content;
			$updateRecords->product_featured_tab_1_section_5_title = $request->product_featured_tab_1_section_5_title;
			$updateRecords->product_featured_tab_1_section_5_content = $request->product_featured_tab_1_section_5_content;
            $updateRecords->product_featured_tab_1_section_6_title = $request->product_featured_tab_1_section_6_title;
            $updateRecords->product_featured_tab_1_section_6_content = $request->product_featured_tab_1_section_6_content;
            $updateRecords->product_featured_tab_1_section_7_title = $request->product_featured_tab_1_section_7_title;
            $updateRecords->product_featured_tab_1_section_7_content = $request->product_featured_tab_1_section_7_content;
            $updateRecords->product_featured_tab_1_section_8_title = $request->product_featured_tab_1_section_8_title;
            $updateRecords->product_featured_tab_1_section_8_content = $request->product_featured_tab_1_section_8_content;
            $updateRecords->product_featured_tab_1_section_9_title = $request->product_featured_tab_1_section_9_title;
            $updateRecords->product_featured_tab_1_section_9_content = $request->product_featured_tab_1_section_9_content;
            $updateRecords->product_featured_tab_2_section_1_title = $request->product_featured_tab_2_section_1_title;
            $updateRecords->product_featured_tab_2_section_1_content = $request->product_featured_tab_2_section_1_content;
            $updateRecords->product_featured_tab_2_section_2_title = $request->product_featured_tab_2_section_2_title;
            $updateRecords->product_featured_tab_2_section_2_content = $request->product_featured_tab_2_section_2_content;
            $updateRecords->save();

			$getAllRecords = Buildshed::all();
    		return view('backend.buildshed', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);


    	}else{

	        if($request->hasFile('product_featured_tab_1_section_1_image')){
	            $img1 = $request->file('product_featured_tab_1_section_1_image');
	            $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img1->move($destinationPath, $name1);
	            $product_featured_tab_1_section_1_image_path = "/images/buildshed/".$name1;
	        }
	        else{
	            $product_featured_tab_1_section_1_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_2_image')){
	            $img2 = $request->file('product_featured_tab_1_section_2_image');
	            $name2 = uniqid().date("dmYhis").'.'.$img2->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img2->move($destinationPath, $name2);
	            $product_featured_tab_1_section_2_image_path = "/images/buildshed/".$name2;
	        }
	        else{
	            $product_featured_tab_1_section_2_image_path = '';
	        }


	        if($request->hasFile('product_featured_tab_1_section_3_image')){
	            $img3 = $request->file('product_featured_tab_1_section_3_image');
	            $name3 = uniqid().date("dmYhis").'.'.$img3->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img3->move($destinationPath, $name3);
	            $product_featured_tab_1_section_3_image_path = "/images/buildshed/".$name3;
	        }
	        else{
	            $product_featured_tab_1_section_3_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_3_icon')){
	            $img4 = $request->file('product_featured_tab_1_section_3_icon');
	            $name4 = uniqid().date("dmYhis").'.'.$img4->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img4->move($destinationPath, $name4);
	            $product_featured_tab_1_section_3_icon_path = "/images/buildshed/".$name4;
	        }
	        else{
	            $product_featured_tab_1_section_3_icon_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_4_image')){
	            $img5 = $request->file('product_featured_tab_1_section_4_image');
	            $name5 = uniqid().date("dmYhis").'.'.$img5->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img5->move($destinationPath, $name5);
	            $product_featured_tab_1_section_4_image_path = "/images/buildshed/".$name5;
	        }
	        else{
	            $product_featured_tab_1_section_4_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_4_icon')){
	            $img6 = $request->file('product_featured_tab_1_section_4_icon');
	            $name6 = uniqid().date("dmYhis").'.'.$img6->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img6->move($destinationPath, $name6);
	            $product_featured_tab_1_section_4_icon_path = "/images/buildshed/".$name6;
	        }
	        else{
	            $product_featured_tab_1_section_4_icon_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_5_image')){
	            $img7 = $request->file('product_featured_tab_1_section_5_image');
	            $name7 = uniqid().date("dmYhis").'.'.$img7->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img7->move($destinationPath, $name7);
	            $product_featured_tab_1_section_5_image_path = "/images/buildshed/".$name7;
	        }
	        else{
	            $product_featured_tab_1_section_5_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_5_icon')){
	            $img8 = $request->file('product_featured_tab_1_section_5_icon');
	            $name8 = uniqid().date("dmYhis").'.'.$img8->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img8->move($destinationPath, $name8);
	            $product_featured_tab_1_section_5_icon_path = "/images/buildshed/".$name8;
	        }
	        else{
	            $product_featured_tab_1_section_5_icon_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_6_image')){
	            $img8 = $request->file('product_featured_tab_1_section_6_image');
	            $name8 = uniqid().date("dmYhis").'.'.$img8->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img8->move($destinationPath, $name8);
	            $product_featured_tab_1_section_6_image_path = "/images/buildshed/".$name8;
	        }
	        else{
	            $product_featured_tab_1_section_6_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_6_icon')){
	            $img9 = $request->file('product_featured_tab_1_section_6_icon');
	            $name9 = uniqid().date("dmYhis").'.'.$img9->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img9->move($destinationPath, $name9);
	            $product_featured_tab_1_section_6_icon_path = "/images/buildshed/".$name9;
	        }
	        else{
	            $product_featured_tab_1_section_6_icon_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_7_image')){
	            $img10 = $request->file('product_featured_tab_1_section_7_image');
	            $name10 = uniqid().date("dmYhis").'.'.$img10->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img10->move($destinationPath, $name10);
	            $product_featured_tab_1_section_7_image_path = "/images/buildshed/".$name10;
	        }
	        else{
	            $product_featured_tab_1_section_7_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_7_icon')){
	            $img11 = $request->file('product_featured_tab_1_section_7_icon');
	            $name11 = uniqid().date("dmYhis").'.'.$img11->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img11->move($destinationPath, $name11);
	            $product_featured_tab_1_section_7_icon_path = "/images/buildshed/".$name11;
	        }
	        else{
	            $product_featured_tab_1_section_7_icon_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_8_image')){
	            $img12 = $request->file('product_featured_tab_1_section_8_image');
	            $name12 = uniqid().date("dmYhis").'.'.$img12->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img12->move($destinationPath, $name12);
	            $product_featured_tab_1_section_8_image_path = "/images/buildshed/".$name12;
	        }
	        else{
	            $product_featured_tab_1_section_8_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_9_image')){
	            $img13 = $request->file('product_featured_tab_1_section_9_image');
	            $name13 = uniqid().date("dmYhis").'.'.$img13->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img13->move($destinationPath, $name13);
	            $product_featured_tab_1_section_9_image_path = "/images/buildshed/".$name13;
	        }
	        else{
	            $product_featured_tab_1_section_9_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_10_image_1')){
	            $img14 = $request->file('product_featured_tab_1_section_10_image_1');
	            $name14 = uniqid().date("dmYhis").'.'.$img14->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img14->move($destinationPath, $name14);
	            $product_featured_tab_1_section_10_image_1_path = "/images/buildshed/".$name14;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_1_path = '';
	        }




	        if($request->hasFile('product_featured_tab_1_section_10_image_2')){
	            $img15 = $request->file('product_featured_tab_1_section_10_image_2');
	            $name15 = uniqid().date("dmYhis").'.'.$img15->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img15->move($destinationPath, $name15);
	            $product_featured_tab_1_section_10_image_2_path = "/images/buildshed/".$name15;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_2_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_10_image_3')){
	            $img16 = $request->file('product_featured_tab_1_section_10_image_3');
	            $name16 = uniqid().date("dmYhis").'.'.$img16->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img16->move($destinationPath, $name16);
	            $product_featured_tab_1_section_10_image_3_path = "/images/buildshed/".$name16;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_3_path = '';
	        }

	        if($request->hasFile('product_featured_tab_1_section_10_image_4')){
	            $img18 = $request->file('product_featured_tab_1_section_10_image_4');
	            $name18 = uniqid().date("dmYhis").'.'.$img18->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img18->move($destinationPath, $name18);
	            $product_featured_tab_1_section_10_image_4_path = "/images/buildshed/".$name18;
	        }
	        else{
	            $product_featured_tab_1_section_10_image_4_path = '';
	        }

	        if($request->hasFile('product_featured_tab_2_section_1_image')){
	            $img19 = $request->file('product_featured_tab_2_section_1_image');
	            $name20 = uniqid().date("dmYhis").'.'.$img19->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img19->move($destinationPath, $name20);
	            $product_featured_tab_2_section_1_image_path = "/images/buildshed/".$name20;
	        }
	        else{
	            $product_featured_tab_2_section_1_image_path = '';
	        }

	        if($request->hasFile('product_featured_tab_2_section_2_image')){
	            $img21 = $request->file('product_featured_tab_2_section_2_image');
	            $name21 = uniqid().date("dmYhis").'.'.$img21->getClientOriginalExtension();
	            $destinationPath = public_path('/images/buildshed/');
	            $img21->move($destinationPath, $name21);
	            $product_featured_tab_2_section_2_image_path = "/images/buildshed/".$name21;
	        }
	        else{
	            $product_featured_tab_2_section_2_image_path = '';
	        }

	    	$buildshed = new Buildshed;
			$buildshed->shed_builder_content = $request->shed_builder_content;
			$buildshed->product_featured_tab_1_section_1_image = $product_featured_tab_1_section_1_image_path;
			$buildshed->product_featured_tab_1_section_1_title = $request->product_featured_tab_1_section_1_title;
			$buildshed->product_featured_tab_1_section_1_content = $request->product_featured_tab_1_section_1_content;
			$buildshed->product_featured_tab_1_section_2_image = $product_featured_tab_1_section_2_image_path;
			$buildshed->product_featured_tab_1_section_2_title = $request->product_featured_tab_1_section_2_title;
			$buildshed->product_featured_tab_1_section_2_content = $request->product_featured_tab_1_section_2_content;
			$buildshed->product_featured_tab_1_section_3_image = $product_featured_tab_1_section_3_image_path;
			$buildshed->product_featured_tab_1_section_3_icon = $product_featured_tab_1_section_3_icon_path;
			$buildshed->product_featured_tab_1_section_3_title = $request->product_featured_tab_1_section_3_title;
			$buildshed->product_featured_tab_1_section_3_content = $request->product_featured_tab_1_section_3_content;
			$buildshed->product_featured_tab_1_section_4_image = $product_featured_tab_1_section_4_image_path;
			$buildshed->product_featured_tab_1_section_4_icon = $product_featured_tab_1_section_4_icon_path;
			$buildshed->product_featured_tab_1_section_4_title = $request->product_featured_tab_1_section_4_title;
			$buildshed->product_featured_tab_1_section_4_content = $request->product_featured_tab_1_section_4_content;
			$buildshed->product_featured_tab_1_section_5_image = $product_featured_tab_1_section_5_image_path;
			$buildshed->product_featured_tab_1_section_5_icon = $product_featured_tab_1_section_5_icon_path;
			$buildshed->product_featured_tab_1_section_5_title = $request->product_featured_tab_1_section_5_title;
			$buildshed->product_featured_tab_1_section_5_content = $request->product_featured_tab_1_section_5_content;
			$buildshed->product_featured_tab_1_section_6_image = $product_featured_tab_1_section_6_image_path;
			$buildshed->product_featured_tab_1_section_6_icon = $product_featured_tab_1_section_6_icon_path;
			$buildshed->product_featured_tab_1_section_6_title = $request->product_featured_tab_1_section_6_title;
			$buildshed->product_featured_tab_1_section_6_content = $request->product_featured_tab_1_section_6_content;
			$buildshed->product_featured_tab_1_section_7_image = $product_featured_tab_1_section_7_image_path;
			$buildshed->product_featured_tab_1_section_7_icon = $product_featured_tab_1_section_7_icon_path;
			$buildshed->product_featured_tab_1_section_7_title = $request->product_featured_tab_1_section_7_title;
			$buildshed->product_featured_tab_1_section_7_content = $request->product_featured_tab_1_section_7_content;
			$buildshed->product_featured_tab_1_section_8_image = $product_featured_tab_1_section_8_image_path;
			$buildshed->product_featured_tab_1_section_8_title = $request->product_featured_tab_1_section_8_title;
			$buildshed->product_featured_tab_1_section_8_content = $request->product_featured_tab_1_section_8_content;
			$buildshed->product_featured_tab_1_section_9_image = $product_featured_tab_1_section_9_image_path;
			$buildshed->product_featured_tab_1_section_9_title = $request->product_featured_tab_1_section_9_title;
			$buildshed->product_featured_tab_1_section_9_content = $request->product_featured_tab_1_section_9_content;
			$buildshed->product_featured_tab_1_section_10_image_1 = $product_featured_tab_1_section_10_image_1_path;
			$buildshed->product_featured_tab_1_section_10_image_2 = $product_featured_tab_1_section_10_image_2_path;
			$buildshed->product_featured_tab_1_section_10_image_3 = $product_featured_tab_1_section_10_image_2_path;
			$buildshed->product_featured_tab_1_section_10_image_4 = $product_featured_tab_1_section_10_image_2_path;
			$buildshed->product_featured_tab_2_section_1_image = $product_featured_tab_2_section_1_image_path;
			$buildshed->product_featured_tab_2_section_1_title = $request->product_featured_tab_2_section_1_title;
			$buildshed->product_featured_tab_2_section_1_content = $request->product_featured_tab_2_section_1_content;
			$buildshed->product_featured_tab_2_section_2_image = $product_featured_tab_2_section_2_image_path;
			$buildshed->product_featured_tab_2_section_2_title = $request->product_featured_tab_2_section_2_title;
			$buildshed->product_featured_tab_2_section_2_content = $request->product_featured_tab_2_section_2_content;
	    	$buildshed->save();

	    	$getAllRecords = Buildshed::all();
    		return view('backend.buildshed', ['all_records' => $getAllRecords]);
    	}
    }

    public function Categories()
    {
    	$categories = Category::all();
    	return view('backend/categories', ['categories' => $categories]);
    }

    public function CategoriesAdd()
    {
    	return view('backend/categories-add');
    }

    public function CategoriesPost(Request $request)
    {
    	$this->validate($request, [
    		'cat_name' => 'required',
    		'is_active' => 'required'
    	]);

    	if($request->hasFile('cat_image')){
            $img = $request->file('cat_image');
            $name = uniqid().date("dmYhis").'.'.$img->getClientOriginalExtension();
            $destinationPath = public_path('/images/categories/');
            $img->move($destinationPath, $name);
            $cat_image_path = "/images/categories/".$name;
        }
        else{
            $cat_image_path = '';
        }

    	$addCat = new Category;
    	$addCat->cat_name = $request->cat_name;
    	$addCat->cat_desc = $request->cat_desc;
    	$addCat->cat_image = $cat_image_path;
    	$addCat->is_active = $request->is_active;
    	$addCat->save();

    	$categories = Category::all();
    	return view('backend/categories', ['success' => 'Record added Successfully', 'categories' => $categories]);
    }

    public function CategoriesEdit($id)
    {	
    	$edit_record = Category::find($id);
    	return view('backend/categories-edit', ['edit_record' => $edit_record]);
    }


    public function CategoriesEditPost(Request $request)
    {
    	$this->validate($request, [
    		'cat_name' => 'required',
    		'is_active' => 'required'
    	]);


    	$updateRecords = Category::find($request->cat_id);
    	$updateRecords->cat_name = $request->cat_name;
    	$updateRecords->cat_desc = $request->cat_desc;
    	$updateRecords->is_active = $request->is_active;

    	if($request->hasFile('cat_image')){
            $image_gallery = $request->file('cat_image');
            $name_gallery = uniqid().date("dmYhis").'.'.$image_gallery->getClientOriginalExtension();
            $destinationPath = public_path('/images/categories/');
            $image_gallery->move($destinationPath, $name_gallery);
            $gallery_image_path = "/images/categories/".$name_gallery;

    		$updateRecords->cat_image = $gallery_image_path;
        }else{
    		$updateRecords->cat_image = Category::first()->cat_image;
        }

    	$updateRecords->save();

    	$categories = Category::all();
    	return view('backend.categories', ['categories' => $categories, 'success' => 'Records updated Successfully']);
    }

    public function CategoriesDelete($id)
    {
    	$delete = Category::find($id);
		$delete->delete();

    	$categories = Category::all();
    	return view('backend.categories', ['categories' => $categories, 'success' => 'Records Deleted']);
    }



	/* Sheds */

	public function sheds()
	{	
		$sheds = DB::table('sheds')->join('categories', 'sheds.cat_id', '=', 'categories.id')->select('sheds.*', 'categories.cat_name')->get();
		// $sheds = Shed::all();
			// Category::find($sheds->cat_id);
		// dd($sheds);
		return view('backend.sheds', ['sheds' => $sheds]);
	}

	public function shedsAdd()
	{	
		$categories = Category::all();
		return view('backend.sheds-add', ['categories' => $categories]);
	}

	public function shedsPost(Request $request)
	{
		$this->validate($request, [
			'shed_name' => 'required',
			'is_active' => 'required',
            'price' => 'required'
		]);

		if($request->hasFile('shed_image')){
            $img = $request->file('shed_image');
            $name = uniqid().date("dmYhis").'.'.$img->getClientOriginalExtension();
            $destinationPath = public_path('/images/sheds/');
            $img->move($destinationPath, $name);
            $shed_image_path = "/images/sheds/".$name;
        }
        else{
            $shed_image_path = '';
        }

    	$addShed = new Shed;
    	$addShed->shed_name = $request->shed_name;
    	$addShed->shed_desc = $request->shed_desc;
    	$addShed->shed_image = $shed_image_path;

    	if ($request->cat_id == null) {
    		$addShed->cat_id = 1;
    	}else{
    		$addShed->cat_id = $request->cat_id;
    	}

    	$addShed->is_active = $request->is_active;
        $addShed->price = $request->price;

        $measurementName = Setting::first()->measurement;
        $addShed->measurement = $measurementName;

    	$addShed->save();

    	$sheds = DB::table('sheds')->join('categories', 'sheds.cat_id', '=', 'categories.id')->select('sheds.*', 'categories.cat_name')->get();
    	return view('backend.sheds', ['success' => 'Record added Successfully', 'sheds' => $sheds]);
	}

	public function ShedsEdit($id)
	{
		$edit_record = Shed::find($id);
		$categories = Category::all();
		return view('backend.sheds-edit', ['edit_record' => $edit_record, 'categories' => $categories]);
	}

	public function ShedsEditPost(Request $request)
	{
		$this->validate($request, [
    		'shed_name' => 'required',
    		'is_active' => 'required'
    	]);


    	$updateRecords = Shed::find($request->shed_id);
    	$updateRecords->shed_name = $request->shed_name;
    	$updateRecords->shed_desc = $request->shed_desc;
    	$updateRecords->is_active = $request->is_active;

    	if($request->hasFile('shed_image')){
            $image_gallery = $request->file('shed_image');
            $name_gallery = uniqid().date("dmYhis").'.'.$image_gallery->getClientOriginalExtension();
            $destinationPath = public_path('/images/sheds/');
            $image_gallery->move($destinationPath, $name_gallery);
            $gallery_image_path = "/images/sheds/".$name_gallery;

    		$updateRecords->shed_image = $gallery_image_path;
        }else{
    		$updateRecords->shed_image = Shed::find($request->shed_id)->shed_image;
        }

        if ($request->cat_id == null) {
    		$updateRecords->cat_id = 1;
    	}else{
    		$updateRecords->cat_id = $request->cat_id;
    	}

        $measurementName = Setting::first()->measurement;
        $updateRecords->measurement = $measurementName;
        $updateRecords->price = $request->price;

    	$updateRecords->save();

    	$sheds = DB::table('sheds')->join('categories', 'sheds.cat_id', '=', 'categories.id')->select('sheds.*', 'categories.cat_name')->get();
    	return view('backend.sheds', ['sheds' => $sheds, 'success' => 'Records updated Successfully']);	
	}

	public function ShedsDelete($id)
	{
		$delete = Shed::find($id);
		$delete->delete();

    	$sheds = DB::table('sheds')->join('categories', 'sheds.cat_id', '=', 'categories.id')->select('sheds.*', 'categories.cat_name')->get();
    	return view('backend.sheds', ['sheds' => $sheds, 'success' => 'Records Deleted']);
	}

	public function cladding()
	{
		$allRecords = Cladding::all();
		return view('backend.cladding', ['claddings' => $allRecords]);
	}

	public function claddingAdd()
	{
		return view('backend.cladding-add');
	}

	public function claddingPost(Request $request)
	{

		// dd($request->cladding_desc);

		$this->validate($request, [
          	'cladding_name' => 'required',
			'cladding_images' => 'required',
			'cladding_images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:5048',
            'price' => 'required'
		]);

		if($request->hasFile('cladding_images')){
            $images = $request->file('cladding_images');
          	
          	foreach ($images as $files) {
	            $name = uniqid().date("dmYhis").'.'.$files->getClientOriginalExtension();
	            $destinationPath = public_path('/images/cladding/');
	            $files->move($destinationPath, $name);
	            $cladding_image_path[] = "/images/cladding/".$name;
          	}
        }

      	$insertRecords = new Cladding();
      	$insertRecords->cladding_name = $request->cladding_name;

      	if ($request->cladding_desc != null) {
      		$insertRecords->cladding_desc = $request->cladding_desc;
      	}

      	$insertRecords->cladding_images = json_encode($cladding_image_path);
      	$insertRecords->is_active = $request->is_active;
        $insertRecords->price = $request->price;
      	$insertRecords->save();

      	$allRecords = Cladding::all();
      	return view('backend.cladding',['claddings' => $allRecords, 'success' => 'Records added Successfully']);
	}

	public function CladdingsEdit($id)
	{
		$edit_record = Cladding::find($id);
		return view('backend.cladding-edit', ['edit_record' => $edit_record]);
	}

	public function CladdingsEditPost(Request $request)
	{
		// dd($request);
		$this->validate($request, [
          	'cladding_name' => 'required',
			// 'cladding_images' =>'required',
			'cladding_images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:5048',
            'price' => 'required'
		]);

		$updateRecords = Cladding::find($request->cladding_id);
		$updateRecords->cladding_name = $request->cladding_name;

		if ($request->cladding_desc != null) {
			$updateRecords->cladding_desc = $request->cladding_desc;
		}
		$updateRecords->is_active = $request->is_active;
        $updateRecords->price = $request->price;

		if($request->hasFile('cladding_images')){
            $images = $request->file('cladding_images');
          	
          	foreach ($images as $files) {
	            $name = uniqid().date("dmYhis").'.'.$files->getClientOriginalExtension();
	            $destinationPath = public_path('/images/cladding/');
	            $files->move($destinationPath, $name);
	            $cladding_image_path[] = "/images/cladding/".$name;
          	}
        	$updateRecords->cladding_images = json_encode($cladding_image_path);
        }else{
        	$updateRecords->cladding_images = Cladding::find($request->cladding_id)->cladding_images;	
        }
        $updateRecords->save();

		$allRecords = Cladding::all();
      	return view('backend.cladding',['claddings' => $allRecords, 'success' => 'Records updated Successfully']);
	}

	public function CladdingsDelete($id)
	{
		$delete = Cladding::find($id);
		$delete->delete();

		$allRecords = Cladding::all();
      	return view('backend.cladding',['claddings' => $allRecords, 'success' => 'Records deleted Successfully']);
	}

	public function security()
	{
        $allRecords = Security::all();
		return view('backend.security', ['allRecords' => $allRecords]);
	}

    public function securityAdd()
    {
        return view('backend.security-add');
    }

    public function securityPost(Request $request)
    {
        $this->validate($request, [
            'security_name' => 'required',
            'is_active' => 'required',
            'price' => 'required'
        ]);

        // dd($request);

        $insertRecords = new Security;
        $insertRecords->security_name = $request->security_name;

        if($request->hasFile('cladding_images')){
            $imgS = $request->file('cladding_images');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/security/');
            $imgS->move($destinationPath, $nameS);
            $security_image_path = "/images/security/".$nameS;
        }
        else{
            $security_image_path = '';
        }

        $insertRecords->security_image = $security_image_path;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->price = $request->price;
        $insertRecords->save();

        $allRecords = Security::all();
        return view('backend.security', ['allRecords' => $allRecords, 'success' => 'Records added Successfully']);
    }

    public function securityEdit($id)
    {
        $edit_record = Security::find($id);
        return view('backend.security-edit', ['edit_record' => $edit_record]);
    }

    public function securityEditPost(Request $request)
    {
        $this->validate($request, [
            'security_name' => 'required',
            'is_active' => 'required',
            'price' => 'required'
        ]);

        $updateRecords = Security::find($request->security_id);
        $updateRecords->security_name = $request->security_name;

        if($request->hasFile('security_image')){
            $image = $request->file('security_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/security/');
            $image->move($destinationPath, $name);
            $gallery_image_path = "/images/security/".$name;

            $updateRecords->security_image = $gallery_image_path;
        }else{
            $updateRecords->security_image = Security::find($request->security_id)->security_image;
        }

        $updateRecords->is_active = $request->is_active;
        $updateRecords->price = $request->price;
        $updateRecords->save();

        $allRecords = Security::all();
        return view('backend.security', ['allRecords' => $allRecords, 'success' => 'Records edit Successfully']);
    }

    public function SecurityDelete($id)
    {
        $delete = Security::find($id);
        $delete->delete();

        $allRecords = Security::all();
        return view('backend.security',['claddings' => $allRecords, 'success' => 'Records deleted Successfully']);
    }

    public function extras()
    {   
        $allRecords = Extra::all();
        return view('backend.extras',['allRecords' => $allRecords]);
    }

    public function extrasAdd()
    {
        return view('backend.extras-add');
    }

    public function extrasPost(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'extras_name' => 'required',
            'is_active' => 'required',
            'price' => 'required'
        ]);

        $insertRecords = new Extra;
        $insertRecords->extras_name = $request->extras_name;


        if($request->hasFile('extras_images')){
            $imgS = $request->file('extras_images');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/extras/');
            $imgS->move($destinationPath, $nameS);
            $extras_image_path = "/images/extras/".$nameS;
        }
        else{
            $extras_image_path = '';
        }

        $insertRecords->extras_images = $extras_image_path;
        $insertRecords->extras_desc = $request->extras_desc;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->price = $request->price;
        $insertRecords->save();

        $allRecords = Extra::all();
        return view('backend.extras', ['allRecords' => $allRecords, 'success' => 'Records inserted Successfully']);
        
    }

    public function extrasEdit($id)
    {
        $editRecord = Extra::find($id);
        return view('backend.extras-edit', ['editRecord' => $editRecord]);
    }

    public function extrasEditPost(Request $request)
    {
        $this->validate($request, [
            'extras_name' => 'required',
            'is_active' => 'required',
            'price' => 'required'
        ]);

        $updateRecords = Extra::find($request->extras_id);
        $updateRecords->extras_name = $request->extras_name;

        if($request->hasFile('extras_images')){
            $image = $request->file('extras_images');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/extras/');
            $image->move($destinationPath, $name);
            $extras_image_path = "/images/extras/".$name;

            $updateRecords->extras_images = $extras_image_path;
        }else{
            $updateRecords->extras_images = Extra::find($request->extras_id)->extras_images;
        }

        $updateRecords->extras_desc = $request->extras_desc;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->price = $request->price;
        $updateRecords->save();

        $allRecords = Extra::all();
        return view('backend.extras', ['allRecords' => $allRecords, 'success' => 'Records edit Successfully']);

    }

    public function ExtrasDelete($id)
    {
        $delete = Extra::find($id);
        $delete->delete();

        $allRecords = Extra::all();
        return view('backend.extras',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);   
    }

    public function users()
    {
        $allRecords = User::all();
        return view('backend.users', ['allRecords' => $allRecords]);
    }

    public function usersAdd()
    {
        return view('backend.users-add');
    }

    public function usersAddPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:6'
        ]);

        // $user = User::create(request(['name', 'email', 'password']));
        $insertRecords = new User;
        $insertRecords->name = $request->name;
        $insertRecords->email = $request->email;
        $insertRecords->password = Hash::make($request->password);
        $insertRecords->save();

        $allRecords = User::all();
        return view('backend.users', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);
    }

    public function usersEdit($id)
    {
        $editRecord = User::find($id);
        return view('backend.users-edit', ['editRecord' => $editRecord]);
    }


    public function usersEditPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:6'
        ]);

        $updateRecords = User::find($request->users_id);
        $updateRecords->name = $request->name;
        $updateRecords->email = $request->email;
        $updateRecords->password = Hash::make($request->password);
        $updateRecords->save();

        $allRecords = User::all();
        return view('backend.users', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function usersDelete($id)
    {
        $delete = User::find($id);
        $delete->delete();

        $allRecords = User::all();
        return view('backend.users',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);   
    }

    public function mapping()
    {
        return view('backend.mapping');
    }

    public function mappingAdd()
    {
        return view('backend.mapping-add');
    }

    public function mappingAddPost(Request $request)
    {
        dd($request);
    }


    public function deliveryArea()
    {
        $allRecords = Delivery::all();
        return view('backend.delivery', ['allRecords' => $allRecords]);
    }


    public function deliveryAreaAdd()
    {
        return view('backend.delivery-area-add');
    }

    public function deliveryAreaPost(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'delivery_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'delivery_desc' => 'required',
            'is_active' => 'required'
        ]);

        $insertRecords = new Delivery;
        $insertRecords->delivery_name = $request->delivery_name;
        $insertRecords->latitude = $request->latitude;
        $insertRecords->longitude = $request->longitude;
        $insertRecords->delivery_desc = $request->delivery_desc;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Delivery::all();
        return view('backend.delivery', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);
    }

    public function deliveryAreaEdit($id)
    {
        $editRecord = Delivery::find($id);
        return view('backend.delivery-area-edit', ['edit_record' => $editRecord]);
    }

    public function deliveryAreaEditPost(Request $request)
    {
        $this->validate($request, [
            'delivery_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'delivery_desc' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Delivery::find($request->delivery_id);
        $updateRecords->delivery_name = $request->delivery_name;
        $updateRecords->latitude = $request->latitude;
        $updateRecords->longitude = $request->longitude;
        $updateRecords->delivery_desc = $request->delivery_desc;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Delivery::all();
        return view('backend.delivery', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function deliveryAreaDelete($id)
    {
        $delete = Delivery::find($id);
        $delete->delete();

        $allRecords = Delivery::all();
        return view('backend.delivery',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }


    /* Garden Builder */


    public function layout()
    {
        $allRecords = Layout::all();
        return view('backend.layout', ['allRecords' => $allRecords]);
    }

    public function layoutAdd()
    {
        return view('backend.layout-add');
    }
    
    public function layoutAddPost(Request $request)
    {
        $this->validate($request, [
            'layout_name' => 'required',
            'layout_image' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if($request->hasFile('layout_image')){
            $imgS = $request->file('layout_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/layout/');
            $imgS->move($destinationPath, $nameS);
            $layout_image_path = "/images/layout/".$nameS;
        }
        else{
            $layout_image_path = '';
        }

        $insertRecords = new Layout;
        $insertRecords->layout_name = $request->layout_name;
        $insertRecords->layout_image = $layout_image_path;
        $insertRecords->layout_desc = $request->layout_desc;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Layout::all();
        return view('backend.layout', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function layoutEdit($id)
    {
        $editRecord = Layout::find($id);
        return view('backend.layout-edit', ['edit_record' => $editRecord]);
    }
    
    public function layoutEditPost(Request $request)
    {
        $this->validate($request, [
            'layout_name' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Layout::find($request->layout_id);

        if($request->hasFile('layout_image')){
            $image = $request->file('layout_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/layout/');
            $image->move($destinationPath, $name);
            $layout_image_path = "/images/layout/".$name;

            $updateRecords->layout_image = $layout_image_path;
        }else{
            $updateRecords->layout_image = Layout::find($request->layout_id)->layout_image;
        }

        $updateRecords->layout_name = $request->layout_name;
        $updateRecords->layout_desc = $request->layout_desc;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Layout::all();
        return view('backend.layout', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function layoutDelete($id)
    {
        $delete = Layout::find($id);
        $delete->delete();

        $allRecords = Layout::all();
        return view('backend.layout',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }


    /* Window Model */


    public function windowModel()
    {
        $allRecords = Windowmodel::all();
        return view('backend.window-model', ['allRecords' => $allRecords]);
    }

    public function windowModelAdd()
    {
        return view('backend.window-model-add');
    }
    
    public function windowModelAddPost(Request $request)
    {
        $this->validate($request, [
            'model_name' => 'required',
            'model_image' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if($request->hasFile('model_image')){
            $imgS = $request->file('model_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/window-model/');
            $imgS->move($destinationPath, $nameS);
            $window_model_image_path = "/images/window-model/".$nameS;
        }
        else{
            $window_model_image_path = '';
        }

        $insertRecords = new Windowmodel;
        $insertRecords->model_name = $request->model_name;
        $insertRecords->model_image = $window_model_image_path;
        $insertRecords->model_desc = $request->model_desc;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Windowmodel::all();
        return view('backend.window-model', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function windowModelEdit($id)
    {
        $editRecord = Windowmodel::find($id);
        return view('backend.window-model-edit', ['edit_record' => $editRecord]);
    }
    
    public function windowModelEditPost(Request $request)
    {
        $this->validate($request, [
            'model_name' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Windowmodel::find($request->window_model_id);

        if($request->hasFile('model_image')){
            $image = $request->file('model_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/window-model/');
            $image->move($destinationPath, $name);
            $window_model_image_path = "/images/window-model/".$name;

            $updateRecords->model_image = $window_model_image_path;
        }else{
            $updateRecords->model_image = Windowmodel::find($request->window_model_id)->model_image;
        }

        $updateRecords->model_name = $request->model_name;
        $updateRecords->model_desc = $request->model_desc;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Windowmodel::all();
        return view('backend.window-model', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function windowModelDelete($id)
    {
        $delete = Windowmodel::find($id);
        $delete->delete();

        $allRecords = Windowmodel::all();
        return view('backend.window-model',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }


    /* Window Color */

    public function windowColor()
    {
        $allRecords = Windowcolor::all();
        return view('backend.window-color', ['allRecords' => $allRecords]);
    }

    public function windowColorAdd()
    {
        return view('backend.window-color-add');
    }
    
    public function windowColorAddPost(Request $request)
    {
        $this->validate($request, [
            'color_name' => 'required',
            'color_val' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $insertRecords = new Windowcolor;
        $insertRecords->color_name = $request->color_name;
        $insertRecords->color_val = $request->color_val;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Windowcolor::all();
        return view('backend.window-color', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function windowColorEdit($id)
    {
        $editRecord = Windowcolor::find($id);
        return view('backend.window-color-edit', ['edit_record' => $editRecord]);
    }
    
    public function windowColorEditPost(Request $request)
    {
        $this->validate($request, [
            'color_name' => 'required',
            'color_val' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Windowcolor::find($request->window_color_id);
        $updateRecords->color_name = $request->color_name;
        $updateRecords->color_val = $request->color_val;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Windowcolor::all();
        return view('backend.window-color', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function windowColorDelete($id)
    {
        $delete = Windowcolor::find($id);
        $delete->delete();

        $allRecords = Windowcolor::all();
        return view('backend.window-color',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }




    /* Window Position */


    public function windowPosition()
    {
        $allRecords = Windowposition::all();
        return view('backend.window-position', ['allRecords' => $allRecords]);
    }

    public function windowPositionAdd()
    {
        return view('backend.window-position-add');
    }
    
    public function windowPositionAddPost(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required',
            'position_image' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if($request->hasFile('position_image')){
            $imgS = $request->file('position_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/window-position/');
            $imgS->move($destinationPath, $nameS);
            $window_position_image_path = "/images/window-position/".$nameS;
        }
        else{
            $window_position_image_path = '';
        }

        $insertRecords = new Windowposition;
        $insertRecords->position_name = $request->position_name;
        $insertRecords->position_image = $window_position_image_path;
        $insertRecords->position_desc = $request->position_desc;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Windowposition::all();
        return view('backend.window-position', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function windowPositionEdit($id)
    {
        $editRecord = Windowposition::find($id);
        return view('backend.window-position-edit', ['edit_record' => $editRecord]);
    }
    
    public function windowPositionEditPost(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Windowposition::find($request->window_position_id);

        if($request->hasFile('position_image')){
            $image = $request->file('position_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/window-position/');
            $image->move($destinationPath, $name);
            $window_position_image_path = "/images/window-position/".$name;

            $updateRecords->position_image = $window_position_image_path;
        }else{
            $updateRecords->position_image = Windowposition::find($request->window_position_id)->position_image;
        }

        $updateRecords->position_name = $request->position_name;
        $updateRecords->position_desc = $request->position_desc;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Windowposition::all();
        return view('backend.window-position', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function windowPositionDelete($id)
    {
        $delete = Windowposition::find($id);
        $delete->delete();

        $allRecords = Windowposition::all();
        return view('backend.window-position',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }



    /* Door Section start here */





    /* Door Model */


    public function doorModel()
    {
        $allRecords = Doormodel::all();
        return view('backend.door-model', ['allRecords' => $allRecords]);
    }

    public function doorModelAdd()
    {
        return view('backend.door-model-add');
    }
    
    public function doorModelAddPost(Request $request)
    {
        $this->validate($request, [
            'model_name' => 'required',
            'model_image' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if($request->hasFile('model_image')){
            $imgS = $request->file('model_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/door-model/');
            $imgS->move($destinationPath, $nameS);
            $door_model_image_path = "/images/door-model/".$nameS;
        }
        else{
            $door_model_image_path = '';
        }

        $insertRecords = new Doormodel;
        $insertRecords->model_name = $request->model_name;
        $insertRecords->model_image = $door_model_image_path;
        $insertRecords->model_desc = $request->model_desc;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Doormodel::all();
        return view('backend.door-model', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function doorModelEdit($id)
    {
        $editRecord = Doormodel::find($id);
        return view('backend.door-model-edit', ['edit_record' => $editRecord]);
    }
    
    public function doorModelEditPost(Request $request)
    {
        $this->validate($request, [
            'model_name' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Doormodel::find($request->door_model_id);

        if($request->hasFile('model_image')){
            $image = $request->file('model_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/door-model/');
            $image->move($destinationPath, $name);
            $door_model_image_path = "/images/door-model/".$name;

            $updateRecords->model_image = $door_model_image_path;
        }else{
            $updateRecords->model_image = Doormodel::find($request->door_model_id)->model_image;
        }

        $updateRecords->model_name = $request->model_name;
        $updateRecords->model_desc = $request->model_desc;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Doormodel::all();
        return view('backend.door-model', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function doorModelDelete($id)
    {
        $delete = Doormodel::find($id);
        $delete->delete();

        $allRecords = Doormodel::all();
        return view('backend.door-model',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }


    /* Door Color */

    public function doorColor()
    {
        $allRecords = Doorcolor::all();
        return view('backend.door-color', ['allRecords' => $allRecords]);
    }

    public function doorColorAdd()
    {
        return view('backend.door-color-add');
    }
    
    public function doorColorAddPost(Request $request)
    {
        $this->validate($request, [
            'color_name' => 'required',
            'color_val' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $insertRecords = new Doorcolor;
        $insertRecords->color_name = $request->color_name;
        $insertRecords->color_val = $request->color_val;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Doorcolor::all();
        return view('backend.door-color', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function doorColorEdit($id)
    {
        $editRecord = Doorcolor::find($id);
        return view('backend.door-color-edit', ['edit_record' => $editRecord]);
    }
    
    public function doorColorEditPost(Request $request)
    {
        $this->validate($request, [
            'color_name' => 'required',
            'color_val' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Doorcolor::find($request->door_color_id);
        $updateRecords->color_name = $request->color_name;
        $updateRecords->color_val = $request->color_val;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Doorcolor::all();
        return view('backend.door-color', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function doorColorDelete($id)
    {
        $delete = Doorcolor::find($id);
        $delete->delete();

        $allRecords = Doorcolor::all();
        return view('backend.door-color',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }




    /* Door Position */


    public function doorPosition()
    {
        $allRecords = Doorposition::all();
        return view('backend.door-position', ['allRecords' => $allRecords]);
    }

    public function doorPositionAdd()
    {
        return view('backend.door-position-add');
    }
    
    public function doorPositionAddPost(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required',
            'position_image' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if($request->hasFile('position_image')){
            $imgS = $request->file('position_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/door-position/');
            $imgS->move($destinationPath, $nameS);
            $door_position_image_path = "/images/door-position/".$nameS;
        }
        else{
            $door_position_image_path = '';
        }

        $insertRecords = new Doorposition;
        $insertRecords->position_name = $request->position_name;
        $insertRecords->position_image = $door_position_image_path;
        $insertRecords->position_desc = $request->position_desc;
        $insertRecords->price = $request->price;
        $insertRecords->is_active = $request->is_active;
        $insertRecords->save();

        $allRecords = Doorposition::all();
        return view('backend.door-position', ['allRecords' => $allRecords, 'success' => 'Record Inserted Successfully']);   
    }

    public function doorPositionEdit($id)
    {
        $editRecord = Doorposition::find($id);
        return view('backend.door-position-edit', ['edit_record' => $editRecord]);
    }
    
    public function doorPositionEditPost(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        $updateRecords = Doorposition::find($request->door_position_id);

        if($request->hasFile('position_image')){
            $image = $request->file('position_image');
            $name = uniqid().date("dmYhis").'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/door-position/');
            $image->move($destinationPath, $name);
            $door_position_image_path = "/images/door-position/".$name;

            $updateRecords->position_image = $door_position_image_path;
        }else{
            $updateRecords->position_image = Doorposition::find($request->door_position_id)->position_image;
        }

        $updateRecords->position_name = $request->position_name;
        $updateRecords->position_desc = $request->position_desc;
        $updateRecords->price = $request->price;
        $updateRecords->is_active = $request->is_active;
        $updateRecords->save();

        $allRecords = Doorposition::all();
        return view('backend.door-position', ['allRecords' => $allRecords, 'success' => 'Record updated Successfully']);
    }

    public function doorPositionDelete($id)
    {
        $delete = Doorposition::find($id);
        $delete->delete();

        $allRecords = Doorposition::all();
        return view('backend.door-position',['allRecords' => $allRecords, 'success' => 'Records deleted Successfully']);  
    }


    public function gardenRoom()
    {
        $gardenAllRecords = GardenRoom::all();

        // dd($gardenAllRecords);
        return view('backend.garden-room', ['all_records' => $gardenAllRecords]);
    }

    public function gardenRoomPost(Request $request)
    {
        // GardenRoom

        $getAllRecords = GardenRoom::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = GardenRoom::first()->id;
            $updateRecords = GardenRoom::find($firstRecord);


            if($request->hasFile('product_featured_tab_1_section_1_image')){
                $img1 = $request->file('product_featured_tab_1_section_1_image');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img1->move($destinationPath, $name1);
                $product_featured_tab_1_section_1_image_path = "/images/gardenroom/".$name1;
            }
            else{
                $product_featured_tab_1_section_1_image_path = GardenRoom::first()->product_featured_tab_1_section_1_image;
            }
            $updateRecords->product_featured_tab_1_section_1_image = $product_featured_tab_1_section_1_image_path;


            if($request->hasFile('product_featured_tab_1_section_2_image')){
                $img2 = $request->file('product_featured_tab_1_section_2_image');
                $name2 = uniqid().date("dmYhis").'.'.$img2->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img2->move($destinationPath, $name2);
                $product_featured_tab_1_section_2_image_path = "/images/gardenroom/".$name2;
            }
            else{
                $product_featured_tab_1_section_2_image_path = GardenRoom::first()->product_featured_tab_1_section_2_image;
            }
            $updateRecords->product_featured_tab_1_section_2_image = $product_featured_tab_1_section_2_image_path;


            if($request->hasFile('product_featured_tab_1_section_3_image')){
                $img3 = $request->file('product_featured_tab_1_section_3_image');
                $name3 = uniqid().date("dmYhis").'.'.$img3->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img3->move($destinationPath, $name3);
                $product_featured_tab_1_section_3_image_path = "/images/gardenroom/".$name3;
            }
            else{
                $product_featured_tab_1_section_3_image_path = gardenroom::first()->product_featured_tab_1_section_3_image;
            }
            $updateRecords->product_featured_tab_1_section_3_image = $product_featured_tab_1_section_3_image_path;

            if($request->hasFile('product_featured_tab_1_section_3_icon')){
                $img4 = $request->file('product_featured_tab_1_section_3_icon');
                $name4 = uniqid().date("dmYhis").'.'.$img4->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img4->move($destinationPath, $name4);
                $product_featured_tab_1_section_3_icon_path = "/images/gardenroom/".$name4;
            }
            else{
                $product_featured_tab_1_section_3_icon_path = gardenroom::first()->product_featured_tab_1_section_3_icon;
            }
            $updateRecords->product_featured_tab_1_section_3_icon = $product_featured_tab_1_section_3_icon_path;

            if($request->hasFile('product_featured_tab_1_section_4_image')){
                $img5 = $request->file('product_featured_tab_1_section_4_image');
                $name5 = uniqid().date("dmYhis").'.'.$img5->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img5->move($destinationPath, $name5);
                $product_featured_tab_1_section_4_image_path = "/images/gardenroom/".$name5;
            }
            else{
                $product_featured_tab_1_section_4_image_path = gardenroom::first()->product_featured_tab_1_section_4_image;
            }
            $updateRecords->product_featured_tab_1_section_4_image = $product_featured_tab_1_section_4_image_path;

            if($request->hasFile('product_featured_tab_1_section_4_icon')){
                $img6 = $request->file('product_featured_tab_1_section_4_icon');
                $name6 = uniqid().date("dmYhis").'.'.$img6->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img6->move($destinationPath, $name6);
                $product_featured_tab_1_section_4_icon_path = "/images/gardenroom/".$name6;
            }
            else{
                $product_featured_tab_1_section_4_icon_path = gardenroom::first()->product_featured_tab_1_section_4_icon;
            }
            $updateRecords->product_featured_tab_1_section_4_icon = $product_featured_tab_1_section_4_icon_path;

            if($request->hasFile('product_featured_tab_2_section_1_image')){
                $img19 = $request->file('product_featured_tab_2_section_1_image');
                $name20 = uniqid().date("dmYhis").'.'.$img19->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img19->move($destinationPath, $name20);
                $product_featured_tab_2_section_1_image_path = "/images/gardenroom/".$name20;
            }
            else{
                $product_featured_tab_2_section_1_image_path = gardenroom::first()->product_featured_tab_2_section_1_image;
            }
            $updateRecords->product_featured_tab_2_section_1_image = $product_featured_tab_2_section_1_image_path;

            if($request->hasFile('product_featured_tab_2_section_2_image')){
                $img21 = $request->file('product_featured_tab_2_section_2_image');
                $name21 = uniqid().date("dmYhis").'.'.$img21->getClientOriginalExtension();
                $destinationPath = public_path('/images/gardenroom/');
                $img21->move($destinationPath, $name21);
                $product_featured_tab_2_section_2_image_path = "/images/gardenroom/".$name21;
            }
            else{
                $product_featured_tab_2_section_2_image_path = gardenroom::first()->product_featured_tab_2_section_2_image;
            }
            $updateRecords->product_featured_tab_2_section_2_image = $product_featured_tab_2_section_2_image_path;


            $updateRecords->gardenroom_content = $request->gardenroom_content;
            $updateRecords->product_featured_tab_1_section_1_title = $request->product_featured_tab_1_section_1_title;
            $updateRecords->product_featured_tab_1_section_1_content = $request->product_featured_tab_1_section_1_content;
            $updateRecords->product_featured_tab_1_section_2_title = $request->product_featured_tab_1_section_2_title;
            $updateRecords->product_featured_tab_1_section_2_content = $request->product_featured_tab_1_section_2_content;
            $updateRecords->product_featured_tab_1_section_3_title = $request->product_featured_tab_1_section_3_title;
            $updateRecords->product_featured_tab_1_section_3_content = $request->product_featured_tab_1_section_3_content;
            $updateRecords->product_featured_tab_1_section_4_title = $request->product_featured_tab_1_section_4_title;
            $updateRecords->product_featured_tab_1_section_4_content = $request->product_featured_tab_1_section_4_content;
            $updateRecords->product_featured_tab_1_section_1_video = $request->product_featured_tab_1_section_1_video;
            
            $updateRecords->product_featured_tab_2_section_1_title = $request->product_featured_tab_2_section_1_title;
            $updateRecords->product_featured_tab_2_section_1_content = $request->product_featured_tab_2_section_1_content;
            $updateRecords->product_featured_tab_2_section_2_title = $request->product_featured_tab_2_section_2_title;
            $updateRecords->product_featured_tab_2_section_2_content = $request->product_featured_tab_2_section_2_content;
            $updateRecords->save();

            $getAllRecords = GardenRoom::all();
            return view('backend.garden-room', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);

        }
    }

    public function claddingOptions()
    {
        $getAllRecords = Claddingoption::all();
        return view('backend.cladding-options', ['all_records' => $getAllRecords]);
    }

    public function claddingOptionsPost(Request $request)
    {
        $getAllRecords = Claddingoption::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Claddingoption::first()->id;
            $updateRecords = Claddingoption::find($firstRecord);


            if($request->hasFile('dip_treated_image')){
                $img1 = $request->file('dip_treated_image');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/cladding-option/');
                $img1->move($destinationPath, $name1);
                $dip_treated_image_path = "/images/cladding-option/".$name1;
            }
            else{
                $dip_treated_image_path = Claddingoption::first()->dip_treated_image;
            }
            $updateRecords->dip_treated_image = $dip_treated_image_path;


            if($request->hasFile('tanalized_image')){
                $img2 = $request->file('tanalized_image');
                $name2 = uniqid().date("dmYhis").'.'.$img2->getClientOriginalExtension();
                $destinationPath = public_path('/images/cladding-option/');
                $img2->move($destinationPath, $name2);
                $tanalized_image_path = "/images/cladding-option/".$name2;
            }
            else{
                $tanalized_image_path = Claddingoption::first()->tanalized_image;
            }
            $updateRecords->tanalized_image = $tanalized_image_path;


            if($request->hasFile('beast_image')){
                $img3 = $request->file('beast_image');
                $name3 = uniqid().date("dmYhis").'.'.$img3->getClientOriginalExtension();
                $destinationPath = public_path('/images/cladding-option/');
                $img3->move($destinationPath, $name3);
                $beast_image_path = "/images/cladding-option/".$name3;
            }
            else{
                $beast_image_path = Claddingoption::first()->beast_image;
            }
            $updateRecords->beast_image = $beast_image_path;


            $updateRecords->cladding_options_content = $request->cladding_options_content;
            $updateRecords->dip_treated_content = $request->dip_treated_content;
            $updateRecords->dip_treated_list = $request->dip_treated_list;
            $updateRecords->tanalized_content = $request->tanalized_content;
            $updateRecords->tanalized_list = $request->tanalized_list;
            $updateRecords->beast_content = $request->beast_content;
            $updateRecords->beast_list = $request->beast_list;
            $updateRecords->save();

            $getAllRecords = Claddingoption::all();
            return view('backend.cladding-options', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
    }

    public function termsAndConditions()
    {
        $getAllRecords = Termsandcondition::all();
        return view('backend.terms-and-conditions', ['all_records' => $getAllRecords]);
    }

    public function termsAndConditionsPost(Request $request)
    {
        $getAllRecords = Termsandcondition::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Termsandcondition::first()->id;
            $updateRecords = Termsandcondition::find($firstRecord);
            $updateRecords->terms_content = $request->terms_content;
            $updateRecords->save();
            $getAllRecords = Termsandcondition::all();
            return view('backend.terms-and-conditions', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
    }


    public function capillaryAction()
    {
        $getAllRecords = Capillaryaction::all();
        return view('backend.capillary-action', ['all_records' => $getAllRecords]);
    }

    public function capillaryActionPost(Request $request)
    {
        // dd($request);
        $getAllRecords = Capillaryaction::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Capillaryaction::first()->id;
            $updateRecords = Capillaryaction::find($firstRecord);


            if($request->hasFile('section_1_image')){
                $img1 = $request->file('section_1_image');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/capillary-actions/');
                $img1->move($destinationPath, $name1);
                $section_1_image_path = "/images/capillary-actions/".$name1;
            }
            else{
                $section_1_image_path = Capillaryaction::first()->section_1_image;
            }
            $updateRecords->section_1_image = $section_1_image_path;


            if($request->hasFile('section_2_image')){
                $img2 = $request->file('section_2_image');
                $name2 = uniqid().date("dmYhis").'.'.$img2->getClientOriginalExtension();
                $destinationPath = public_path('/images/capillary-actions/');
                $img2->move($destinationPath, $name2);
                $section_2_image_path = "/images/capillary-actions/".$name2;
            }
            else{
                $section_2_image_path = Capillaryaction::first()->section_2_image;
            }
            $updateRecords->section_2_image = $section_2_image_path;


            if($request->hasFile('section_3_image')){
                $img3 = $request->file('section_3_image');
                $name3 = uniqid().date("dmYhis").'.'.$img3->getClientOriginalExtension();
                $destinationPath = public_path('/images/capillary-actions/');
                $img3->move($destinationPath, $name3);
                $section_3_image_path = "/images/capillary-actions/".$name3;
            }
            else{
                $section_3_image_path = Capillaryaction::first()->section_3_image;
            }
            $updateRecords->section_3_image = $section_3_image_path;


            $updateRecords->top_content = $request->top_content;
            $updateRecords->section_1_content = $request->section_1_content;
            $updateRecords->section1 = $request->section1;
            $updateRecords->section_2_content = $request->section_2_content;
            $updateRecords->section2 = $request->section2;
            $updateRecords->section_3_content = $request->section_3_content;
            $updateRecords->section3 = $request->section3;
            $updateRecords->save();

            $getAllRecords = Capillaryaction::all();
            return view('backend.capillary-action', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
        
    }


    public function prepareBase()
    {
        $getAllRecords = Preparebase::all();
        return view('backend.prepare-base', ['all_records' => $getAllRecords]);
    }

    public function prepareBasePost(Request $request)
    {
        // dd($request);
        $getAllRecords = Preparebase::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Preparebase::first()->id;
            $updateRecords = Preparebase::find($firstRecord);


            if($request->hasFile('prepare_base_image')){
                $img1 = $request->file('prepare_base_image');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/prepare-base/');
                $img1->move($destinationPath, $name1);
                $prepare_base_image_path = "/images/prepare-base/".$name1;
            }
            else{
                $prepare_base_image_path = Preparebase::first()->prepare_base_image;
            }


            if($request->hasFile('prepare_base_image2')){
                $img1 = $request->file('prepare_base_image2');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/prepare-base/');
                $img1->move($destinationPath, $name1);
                $prepare_base_image2_path = "/images/prepare-base/".$name1;
            }
            else{
                $prepare_base_image2_path = Preparebase::first()->prepare_base_image2;
            }



            $updateRecords->prepare_base_image = $prepare_base_image_path;
            $updateRecords->prepare_base_image2 = $prepare_base_image2_path;
            $updateRecords->prepare_content = $request->prepare_content;
            $updateRecords->save();

            $getAllRecords = Preparebase::all();
            return view('backend.prepare-base', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
        
    }
    
    public function securityPackage()
    {
        $getAllRecords = Securitypackage::all();
        return view('backend.security-package', ['all_records' => $getAllRecords]);
    }
    
    public function securityPackagePost(Request $request)
    {
        $getAllRecords = Securitypackage::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Securitypackage::first()->id;
            $updateRecords = Securitypackage::find($firstRecord);


            if($request->hasFile('image1')){
                $img1 = $request->file('image1');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/security-package/');
                $img1->move($destinationPath, $name1);
                $image1_path = "/images/security-package/".$name1;
            }
            else{
                $image1_path = Securitypackage::first()->image1;
            }


            if($request->hasFile('image2')){
                $img1 = $request->file('image2');
                $name1 = uniqid().date("dmYhis").'.'.$img1->getClientOriginalExtension();
                $destinationPath = public_path('/images/security-package/');
                $img1->move($destinationPath, $name1);
                $image2_path = "/images/security-package/".$name1;
            }
            else{
                $image2_path = Securitypackage::first()->image2;
            }



            $updateRecords->image1 = $image1_path;
            $updateRecords->image2 = $image2_path;

            $updateRecords->content1 = $request->content1;
            $updateRecords->content2 = $request->content2;
            $updateRecords->content3 = $request->content3;
            $updateRecords->video_code = $request->video_code;
            $updateRecords->save();

            $getAllRecords = Securitypackage::all();
            return view('backend.security-package', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
    }

    public function privacyPolicy()
    {
        $getAllRecords = Privacypolicy::all();
        return view('backend.privacy-policy', ['all_records' => $getAllRecords]);
    }

    public function privacyPolicyPost(Request $request)
    {
        $getAllRecords = Privacypolicy::all();
        if (!$getAllRecords->isEmpty()) {
            $firstRecord = Privacypolicy::first()->id;
            $updateRecords = Privacypolicy::find($firstRecord);
            $updateRecords->terms_content = $request->terms_content;
            $updateRecords->save();
            $getAllRecords = Privacypolicy::all();
            return view('backend.privacy-policy', ['all_records' => $getAllRecords, 'success' => 'Records Updated Successfully']);
        }
    }

    public function orders()
    {
        $getAllRecords = Order::all();
        return view('backend.orders', ['all_records' => $getAllRecords]);
    } 

    public function previewImages()
    {
        $getAllRecords = Preview::all();
        return view('backend.preview-images', ['all_records' => $getAllRecords]);
    }

    public function previewImagesAdd()
    {
        $Layout = Layout::all();
        $Windowmodel = Windowmodel::all();
        $Windowcolor = Windowcolor::all();
        $Windowposition = Windowposition::all(); 
        $Doormodel = Doormodel::all();
        $Doorcolor = Doorcolor::all();
        $Doorposition = Doorposition::all();
        return view('backend.preview-images-add', ['Layouts' => $Layout, 'Windowmodels' => $Windowmodel, 'Windowcolors' => $Windowcolor, 'Windowpositions' => $Windowposition, 'Doormodels' => $Doormodel, 'Doorcolors' => $Doorcolor, 'Doorpositions' => $Doorposition]);
    }

    public function previewImagesAddPost(Request $request)
    {

        if($request->hasFile('preview_image')){
            $imgS = $request->file('preview_image');
            $nameS = uniqid().date("dmYhis").'.'.$imgS->getClientOriginalExtension();
            $destinationPath = public_path('/images/preview/');
            $imgS->move($destinationPath, $nameS);
            $preview_image_path = "/images/preview/".$nameS;
        }else{
            $preview_image_path = '';
        }

        $insertRecords = new Preview;
        $insertRecords->preview_image = $preview_image_path;
        $insertRecords->layout_id = $request->layout_id;
        $insertRecords->window_modal_id = $request->window_model;
        $insertRecords->window_color_id = $request->window_color;
        $insertRecords->window_position_id = $request->window_position;
        $insertRecords->door_modal_id = $request->door_model;
        $insertRecords->door_color_id = $request->door_color;
        $insertRecords->door_position_id = $request->door_position;
        $insertRecords->save();

        $getAllRecords = Preview::all();
        return view('backend.preview-images', ['all_records' => $getAllRecords]);
    }

    public function previewImagesEdit($id)
    {
        $edit_record = Preview::find($id);
        $Layout = Layout::all();
        $Windowmodel = Windowmodel::all();
        $Windowcolor = Windowcolor::all();
        $Windowposition = Windowposition::all(); 
        $Doormodel = Doormodel::all();
        $Doorcolor = Doorcolor::all();
        $Doorposition = Doorposition::all();
        return view('backend.preview-images-edit', ['edit_record' => $edit_record, 'Layouts' => $Layout, 'Windowmodels' => $Windowmodel, 'Windowcolors' => $Windowcolor, 'Windowpositions' => $Windowposition, 'Doormodels' => $Doormodel, 'Doorcolors' => $Doorcolor, 'Doorpositions' => $Doorposition]);
    }

    public function previewImagesEditPost(Request $request)
    {
        $updateRecords = Preview::find($request->preview_id);
        
        if($request->hasFile('preview_image')){
            $image_test = $request->file('preview_image');
            $name_test = uniqid().date("dmYhis").'.'.$image_test->getClientOriginalExtension();
            $destinationPath = public_path('/images/preview/');
            $image_test->move($destinationPath, $name_test);
            $preview_image_path = "/images/preview/".$name_test;

            $updateRecords->preview_image = $preview_image_path;
        }else{
            $updateRecords->preview_image = Preview::find($request->preview_id)->preview_image;
        }
        

        $updateRecords->layout_id = $request->layout_id;
        $updateRecords->window_modal_id = $request->window_model;
        $updateRecords->window_color_id = $request->window_color;
        $updateRecords->window_position_id = $request->window_position;
        $updateRecords->door_modal_id = $request->door_model;
        $updateRecords->door_color_id = $request->door_color;
        $updateRecords->door_position_id = $request->door_position;
        $updateRecords->save();

        $getAllRecords = Preview::all();
        return view('backend.preview-images', ['all_records' => $getAllRecords, 'success' => 'Records updated Successfully']);
    }

    public function previewImagesDelete($id)
    {
        $delete = Preview::find($id);
        $delete->delete();

        $getAllRecords = Preview::all();
        return view('backend.preview-images', ['all_records' => $getAllRecords, 'success' => 'Record Deleted']);
    }

    public function ordersView($id){
        $getOrderRecord = Order::find($id);
        return view('backend.view-orders', ['all_records' => $getOrderRecord]);
    }


    public function ordersDelete($id){
        $deleteOrder =  Order::find($id);
        $deleteOrder->delete();

        $getAllRecords = Order::all();
        return view('backend.orders', ['all_records' => $getAllRecords]);
    }

}
