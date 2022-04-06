<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\FrontController;
// use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    echo "All the system cache is cleared.";
})->name('cache_clear');


Route::group(['prefix' => 'backend'], function(){
	Route::match(['get'],'/login','AdminController@index')->name('show_adminLogin');
	Route::post('/admin','LoginController@adminLogin')->name('admin_login');
	Route::match(['get','post'], '/logout', 'LoginController@logout')->name('admin_logout');

	// ADMIN ROUTES
	Route::group(['middleware' => 'auth:admin'], function() {
		Route::get('/dashboard','AdminController@dashboard')->name('admin_dashboard');
		Route::get('/home','AdminController@home')->name('admin_home');
		Route::post('/home','AdminController@homePost')->name('admin_home_post');


		/* Build a Shed */
		Route::get('/build-shed','AdminController@buildShed')->name('build_shed_get');
		Route::post('/build-shed','AdminController@buildShedPost')->name('build_shed_post');


		/* Testimonial Route */
		Route::get('/testimonial','AdminController@testimonial')->name('admin_testimonial');
		Route::get('/testimonial-add','AdminController@add_new_testimonial')->name('add_new_testimonial');
		Route::post('/testimonial-add','AdminController@add_new_testimonial_post')->name('add_new_testimonial_post');
		Route::get('/testimonial-edit/{id}','AdminController@add_new_testimonial_edit')->name('add_new_testimonial_edit');
		Route::post('/testimonial-edit','AdminController@edit_testimonial_post')->name('edit_testimonial_post');
		Route::get('/testimonial-delete/{id}','AdminController@add_new_testimonial_delete')->name('add_new_testimonial_delete');

		/* Settings */
		Route::get('/settings', 'AdminController@settings')->name('admin_settings');
		Route::post('/settings', 'AdminController@settingsPost')->name('admin_settings_post');

		/* Gallery */
		Route::get('/gallery', 'AdminController@gallery')->name('admin_gallery');

		// Gallery Images
		Route::get('/gallery-images-add', 'AdminController@galleryImagesAdd')->name('add_gallery_images');
		Route::post('/gallery-images-add', 'AdminController@galleryImagesPost')->name('add_gallery_images_post');
		Route::get('/gallery-images-edit/{id}','AdminController@galleryImageEdit')->name('gallery_image_edit');
		Route::post('/gallery-images-edit','AdminController@galleryImageEditPost')->name('gallery_image_edit_post');
		Route::get('/gallery-images-delete/{id}','AdminController@galleryImageDelete')->name('gallery_image_delete');

		// Gallery Videos
		Route::get('/gallery-videos-add', 'AdminController@galleryVideosAdd')->name('add_gallery_videos');
		Route::post('/gallery-videos-add', 'AdminController@galleryVideosPost')->name('add_gallery_videos_post');
		Route::get('/gallery-videos-edit/{id}','AdminController@galleryVideoEdit')->name('gallery_video_edit');
		Route::post('/gallery-videos-edit','AdminController@galleryVideoEditPost')->name('gallery_video_edit_post');
		Route::get('/gallery-videos-delete/{id}','AdminController@galleryVideoDelete')->name('gallery_video_delete');

		/* Contact Us */
		Route::get('/contact', 'AdminController@contactUs')->name('contact_us');
		Route::post('/contact', 'AdminController@contactUsPost')->name('contact_us_post');

		/* Categories */
		Route::get('/categories', 'AdminController@Categories')->name('categories');
		Route::get('/categories-add', 'AdminController@CategoriesAdd')->name('categories_add');
		Route::post('/categories-add', 'AdminController@CategoriesPost')->name('categories_post');
		Route::get('/categories-edit/{id}', 'AdminController@CategoriesEdit')->name('category_edit');
		Route::post('/categories-edit', 'AdminController@CategoriesEditPost')->name('categories_edit_post');
		Route::get('/categories-delete/{id}', 'AdminController@CategoriesDelete')->name('category_delete');

		/* Sheds */
		Route::get('/sheds', 'AdminController@sheds')->name('sheds');
		Route::get('/sheds-add', 'AdminController@shedsAdd')->name('sheds_add');
		Route::post('/sheds-add', 'AdminController@shedsPost')->name('sheds_post');
		Route::get('/sheds-edit/{id}', 'AdminController@ShedsEdit')->name('sheds_edit');
		Route::post('/sheds-edit', 'AdminController@ShedsEditPost')->name('sheds_edit_post');
		Route::get('/sheds-delete/{id}', 'AdminController@ShedsDelete')->name('sheds_delete');

		/* Cladding */
		Route::get('/cladding', 'AdminController@cladding')->name('cladding');
		Route::get('/cladding-add', 'AdminController@claddingAdd')->name('cladding_add');
		Route::post('/cladding-add', 'AdminController@claddingPost')->name('cladding_post');
		Route::get('/cladding-edit/{id}', 'AdminController@CladdingsEdit')->name('claddings_edit');
		Route::post('/cladding-edit', 'AdminController@CladdingsEditPost')->name('claddings_edit_post');
		Route::get('/cladding-delete/{id}', 'AdminController@CladdingsDelete')->name('claddings_delete');

		/* Security */
		Route::get('/security', 'AdminController@security')->name('security');
		Route::get('/security-add', 'AdminController@securityAdd')->name('security_add');
		Route::post('/security-add', 'AdminController@securityPost')->name('security_post');
		Route::get('/security-edit/{id}', 'AdminController@securityEdit')->name('security_edit');
		Route::post('/security-edit', 'AdminController@securityEditPost')->name('security_edit_post');
		Route::get('/security-delete/{id}', 'AdminController@SecurityDelete')->name('security_delete');

		/* Extras */
		Route::get('/extras', 'AdminController@extras')->name('extras');
		Route::get('/extras-add', 'AdminController@extrasAdd')->name('extras_add');
		Route::post('/extras-add', 'AdminController@extrasPost')->name('extras_post');
		Route::get('/extras-edit/{id}', 'AdminController@extrasEdit')->name('extras_edit');
		Route::post('/extras-edit', 'AdminController@extrasEditPost')->name('extras_edit_post');
		Route::get('/extras-delete/{id}', 'AdminController@ExtrasDelete')->name('extras_delete');


		/* Users */
		Route::get('/users', 'AdminController@users')->name('users');
		Route::get('/users-add', 'AdminController@usersAdd')->name('users_add');
		Route::post('/users-add', 'AdminController@usersAddPost')->name('users_post');
		Route::get('/users-edit/{id}', 'AdminController@usersEdit')->name('users_edit');
		Route::post('/users-edit', 'AdminController@usersEditPost')->name('users_edit_post');
		Route::get('/users-delete/{id}', 'AdminController@usersDelete')->name('users_delete');

		/* Mapping */
		Route::get('/mapping', 'AdminController@mapping')->name('mapping');
		Route::get('/mapping-add', 'AdminController@mappingAdd')->name('mapping_add');
		Route::post('/mapping-add', 'AdminController@mappingAddPost')->name('mapping_post');


		// Delivery Area
		Route::get('/delivery', 'AdminController@deliveryArea')->name('delivery');
		Route::get('/delivery-area-add', 'AdminController@deliveryAreaAdd')->name('delivery_add');
		Route::post('/delivery-area-add', 'AdminController@deliveryAreaPost')->name('delivery_post');

		Route::get('/delivery-area-edit/{id}', 'AdminController@deliveryAreaEdit')->name('add_new_delivery_edit');
		Route::post('/delivery-area-edit', 'AdminController@deliveryAreaEditPost')->name('add_new_delivery_edit_post');
		Route::get('/delivery-area-delete/{id}', 'AdminController@deliveryAreaDelete')->name('add_new_delivery_delete');


		/* Garden Room Builder Layout */

		Route::get('/layout', 'AdminController@layout')->name('layout');
		Route::get('/layout-add', 'AdminController@layoutAdd')->name('layout_add');
		Route::post('/layout-add', 'AdminController@layoutAddPost')->name('layout_post');
		Route::get('/layout-edit/{id}', 'AdminController@layoutEdit')->name('layout_edit');
		Route::post('/layout-edit', 'AdminController@layoutEditPost')->name('layout_edit_post');
		Route::get('/layout-delete/{id}', 'AdminController@layoutDelete')->name('layout_delete');


		/* Windows */


		// Window Model 
		Route::get('/window-model', 'AdminController@windowModel')->name('window_model');
		Route::get('/window-model-add', 'AdminController@windowModelAdd')->name('window_model_add');
		Route::post('/window-model-add', 'AdminController@windowModelAddPost')->name('window_model_post');
		Route::get('/window-model-edit/{id}', 'AdminController@windowModelEdit')->name('window_model_edit');
		Route::post('/window-model-edit', 'AdminController@windowModelEditPost')->name('window_model_edit_post');
		Route::get('/window-model-delete/{id}', 'AdminController@windowModelDelete')->name('window_model_delete');

		// Window Color
		Route::get('/window-color', 'AdminController@windowColor')->name('window_color');
		Route::get('/window-color-add', 'AdminController@windowColorAdd')->name('window_color_add');
		Route::post('/window-color-add', 'AdminController@windowColorAddPost')->name('window_color_post');
		Route::get('/window-color-edit/{id}', 'AdminController@windowColorEdit')->name('window_color_edit');
		Route::post('/window-color-edit', 'AdminController@windowColorEditPost')->name('window_color_edit_post');
		Route::get('/window-color-delete/{id}', 'AdminController@windowColorDelete')->name('window_color_delete');


		// Window Position
		Route::get('/window-position', 'AdminController@windowPosition')->name('window_position');
		Route::get('/window-position-add', 'AdminController@windowPositionAdd')->name('window_position_add');
		Route::post('/window-position-add', 'AdminController@windowPositionAddPost')->name('window_position_post');
		Route::get('/window-position-edit/{id}', 'AdminController@windowPositionEdit')->name('window_position_edit');
		Route::post('/window-position-edit', 'AdminController@windowPositionEditPost')->name('window_position_edit_post');
		Route::get('/window-position-delete/{id}', 'AdminController@windowPositionDelete')->name('window_position_delete');


		/* Doors */


		// Door Model 
		Route::get('/door-model', 'AdminController@doorModel')->name('door_model');
		Route::get('/door-model-add', 'AdminController@doorModelAdd')->name('door_model_add');
		Route::post('/door-model-add', 'AdminController@doorModelAddPost')->name('door_model_post');
		Route::get('/door-model-edit/{id}', 'AdminController@doorModelEdit')->name('door_model_edit');
		Route::post('/door-model-edit', 'AdminController@doorModelEditPost')->name('door_model_edit_post');
		Route::get('/door-model-delete/{id}', 'AdminController@doorModelDelete')->name('door_model_delete');

		// Door Color
		Route::get('/door-color', 'AdminController@doorColor')->name('door_color');
		Route::get('/door-color-add', 'AdminController@doorColorAdd')->name('door_color_add');
		Route::post('/door-color-add', 'AdminController@doorColorAddPost')->name('door_color_post');
		Route::get('/door-color-edit/{id}', 'AdminController@doorColorEdit')->name('door_color_edit');
		Route::post('/door-color-edit', 'AdminController@doorColorEditPost')->name('door_color_edit_post');
		Route::get('/door-color-delete/{id}', 'AdminController@doorColorDelete')->name('door_color_delete');

		// Door Position
		Route::get('/door-position', 'AdminController@doorPosition')->name('door_position');
		Route::get('/door-position-add', 'AdminController@doorPositionAdd')->name('door_position_add');
		Route::post('/door-position-add', 'AdminController@doorPositionAddPost')->name('door_position_post');
		Route::get('/door-position-edit/{id}', 'AdminController@doorPositionEdit')->name('door_position_edit');
		Route::post('/door-position-edit', 'AdminController@doorPositionEditPost')->name('door_position_edit_post');
		Route::get('/door-position-delete/{id}', 'AdminController@doorPositionDelete')->name('door_position_delete');


		/* Garden Room */
		Route::get('/garden-room','AdminController@gardenRoom')->name('garden_room_get');
		Route::post('/garden-room','AdminController@gardenRoomPost')->name('garden_room_post');

		/* Cladding Options */
		Route::get('/cladding-options','AdminController@claddingOptions')->name('cladding_options_get');
		Route::post('/cladding-options','AdminController@claddingOptionsPost')->name('cladding_options_post');

		/* Terms and Conditions */
		Route::get('/capillary-action','AdminController@capillaryAction')->name('capillary_action_get');
		Route::post('/capillary-action','AdminController@capillaryActionPost')->name('capillary_action_post');

		/* Terms and Conditions */
		Route::get('/terms-and-conditions','AdminController@termsAndConditions')->name('terms_and_conditions_get');
		Route::post('/terms-and-conditions','AdminController@termsAndConditionsPost')->name('terms_and_conditions_post');

		/* How to prepare a Base */
		Route::get('/how-to-prepare-a-base','AdminController@prepareBase')->name('prepare_base_get');
		Route::post('/how-to-prepare-a-base','AdminController@prepareBasePost')->name('prepare_base_post');

		/* Security Package */
		Route::get('/security-package','AdminController@securityPackage')->name('security_package_get');
		Route::post('/security-package','AdminController@securityPackagePost')->name('security_package_post');

		/* Security Package */
		Route::get('/privacy-policy','AdminController@privacyPolicy')->name('privacy_policy_get');
		Route::post('/privacy-policy','AdminController@privacyPolicyPost')->name('privacy_policy_post');

		/* Orders */
		Route::get('/orders','AdminController@orders')->name('orders');
		Route::get('/orders-view/{id}','AdminController@ordersView')->name('order_view');
		Route::get('/orders-delete/{id}','AdminController@ordersDelete')->name('order_delete');


		/* Preview Images */
		Route::get('/preview-images','AdminController@previewImages')->name('preview_images');
		Route::get('/preview-images-add','AdminController@previewImagesAdd')->name('preview_images_add');
		Route::post('/preview-images-add','AdminController@previewImagesAddPost')->name('preview_images_add_post');
		Route::get('/preview-images-edit/{id}', 'AdminController@previewImagesEdit')->name('preview_images_edit');
		Route::post('/preview-images-edit', 'AdminController@previewImagesEditPost')->name('preview_images_edit_post');
		Route::get('/preview-images-delete/{id}', 'AdminController@previewImagesDelete')->name('preview_images_delete');



	});
});

Route::get('/','FrontController@index')->name('home');
Route::get('/build-shed','FrontController@buildShed')->name('build_shed');
Route::get('/gallery','FrontController@gallery')->name('gallery');
Route::get('/contact','FrontController@contact')->name('contact');
Route::post('/contact','FrontController@contactPost')->name('contact_post');

// Ajax Method
Route::post('/selectshed','FrontController@selectShed')->name('select_shed');
Route::post('/selectcladding','FrontController@selectCladding')->name('select_cladding');
Route::post('/selectsecurity','FrontController@selectSecurity')->name('select_security');
Route::post('/selectlayouts','FrontController@selectLayouts')->name('select_layouts');
Route::post('/selectwindowmodels','FrontController@selectWindowModel')->name('select_window_model');
Route::post('/selectwindowcolors','FrontController@selectWindowColor')->name('select_window_color');
Route::post('/selectwindowpositions','FrontController@selectwindowPosition')->name('select_window_position');

// Door AJAX
Route::post('/selectdoormodels','FrontController@selectDoorModel')->name('select_door_model');
Route::post('/selectdoorcolors','FrontController@selectDoorColor')->name('select_door_color');
Route::post('/selectdoorpositions','FrontController@selectDoorPosition')->name('select_door_position');

// End AJAX
Route::get('/login-user','FrontController@loginUser')->name('login_user');
Route::post('/login-user','FrontController@registerUser')->name('register_user');
Route::get('/my-account','FrontController@myAccount')->name('my_account');
Route::get('/logout-user','FrontController@logoutUser')->name('logout_user');

/* Delivery Area */
Route::get('/delivery-area','FrontController@deliveryArea')->name('delivery_area');


/* Garden Room Builder */
Route::get('/garden-room-builder','FrontController@gardenRoomBuilder')->name('garden_builder');


/* Footer Links */
Route::get('/how-to-prepare-a-base','FrontController@prepareBase')->name('prepare_base');
Route::get('/security-package','FrontController@securityPackage')->name('security_package');
Route::get('/cladding-options','FrontController@claddingOptions')->name('cladding_options');
Route::get('/capillary-action','FrontController@capillaryAction')->name('capillary_action');
Route::get('/terms-and-conditions','FrontController@termsAndConditions')->name('terms_and_condition');
Route::get('/privacy-policy','FrontController@privacyPolicy')->name('privacy_policy');
Route::get('/checkout','FrontController@checkout')->name('checkout');
Route::post('/checkout','FrontController@checkoutPost')->name('checkout_post');

/* Orders */
Route::get('/orders/{id}','FrontController@ordersView')->name('order_detail');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
