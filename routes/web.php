<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------
| Web Routes
|---------------------------------
*/

Route::get('/', function () {
    $logochanges = \App\LogoChange::all();
    $homepages = \App\HomePage::all();

    return view('welcome', compact('logochanges', 'homepages'));
});

Route::get('/indexpage/section', 'HomePageSectionController@homepagesection')->name('homepagesection');
Route::get('/indexpage/add/image', 'HomePageSectionController@indexpageaddimage')->name('imageadd');
Route::post('/indexpage/add/image', 'HomePageSectionController@indexpagerawimage')->name('indexpagerawimage');
Route::delete('/deletehp/{id}', 'HomePageSectionController@deletehp')->name('deletehp');

Route::get('/indexpage/add/slider', 'HomePageSectionController@imageaddtoslider')->name('imageaddtoslider');
Route::post('/indexpage/add/sliderimage', 'HomePageSectionController@sliderpageimage')->name('sliderpageimage');
Route::delete('/deleteslider/{id}', 'HomePageSectionController@deleteslider')->name('deleteslider');

Route::get('/about', function () {
    $categories = App\Category::all();
    $logochanges = \App\LogoChange::all();

    return view('about', compact('categories', 'logochanges'));
});
/*
|--------------------------------------------------------------------------
|                        Weeding Album Controller Start
|--------------------------------------------------------------------------
*/
Route::get('wedding-album', 'WeddingAlbumController@index')->name('weedingalbumfronend');
Route::get('wedding', 'WeddingAlbumController@indexadmin')->name('weedingalbumadmin');
Route::post('/make/album', 'WeddingAlbumController@makeAlbum')->name('makeAlbum');
Route::get('/album/add/image', 'WeddingAlbumController@addImageToAlbum')->name('addImageToAlbum');
Route::post('/album/add/image', 'WeddingAlbumController@imageUploadToAlbum')->name('imageUploadToAlbum');
Route::get('/album/add/singleGallery/{id}', 'WeddingAlbumController@singleGallery')->name('singleGallery');
Route::delete('/deleteWedding/{id}', 'WeddingAlbumController@deleteWedding')->name('deleteWedding');
Route::post('wedding-package/form', 'WeddingAlbumController@weddingpackge')->name('weddingpackge');
Route::get('wedding/add/package/des', 'WeddingAlbumController@weddingpackgetodes')->name('weddingpackgetodes');
Route::post('wedding/data/to/package', 'WeddingAlbumController@WedingDataToPackage')->name('WedingDataToPackage');
Route::delete('deleteweddingPackage/{id}', 'WeddingAlbumController@deleteWeddingPackage')->name('deleteweddingPackage');
/*
|--------------------------------------------------------------------------
|                       Engagemnet Album Controller Start
|--------------------------------------------------------------------------
*/

Route::get('/engagment-album', 'EngagementController@index')->name('engagementindex');
Route::get('/engagment', 'EngagementController@engagementphotography')->name('engagementphotography');
Route::post('/engagment/make/album', 'EngagementController@engagemnetalbum')->name('engagemnetalbum');
Route::post('/engagment/make/album/to/image', 'EngagementController@engagementAlbumToImage')->name('engagementAlbumToImage');
Route::get('/engagemnet/to/album', 'EngagementController@engagementimagetoalbum')->name('engagementimagetoalbum');
Route::get('/engagemnet/albumto/to/singleImage/{id}', 'EngagementController@engagementToSingleAlbum')->name('engagementToSingleAlbum');
Route::delete('/deleteEngagement/{id}', 'EngagementController@deleteEngagement')->name('deleteEngagement');
Route::post('engagement/package/name/make', 'EngagementController@engagementpackage')->name('engagementpackage');
Route::delete('/deleteEngagementPackage/{id}', 'EngagementController@deleteEngagementPackage')->name('deleteEngagementPackage');
Route::get('/add/data/engagementPackage', 'EngagementController@addEngagementPackage')->name('addEngagementPackage');
Route::post('/add/data/to/form', 'EngagementController@engagementDataToPackage')->name('engagementDataToPackage');
/*
|--------------------------------------------------------------------------
|                       Portrait Album Controller Start
|--------------------------------------------------------------------------
*/
Route::get('/portraits-album', 'PortraitController@index')->name('frontEndIndex');
Route::get('/portrait-section', 'PortraitController@adminindex')->name('portraitsection');
Route::post('/portrait/album/make', 'PortraitController@portraitalbummake')->name('portraitalbummake');
Route::delete('/deletePortrait/{id}', 'PortraitController@deletePortrait')->name('deletePortrait');
Route::get('/image/to/album', 'PortraitController@imagetoalbum')->name('imagetoalbum');
Route::post('portrait/album/to/gallery', 'PortraitController@portraitgalleryoption')->name('portraitgalleryoption');
Route::get('/portrait/album/to/singleImage/{id}', 'PortraitController@portraitSingleImage')->name('portraitSingleImage');
Route::post('/portrait/package/name/create', 'PortraitController@portraitpackge')->name('portraitpackge');
Route::get('/portrait/description/add-to/description', 'PortraitController@portraitPackageToDescription')->name('portraitPackageToDescription');
Route::post('/portrait/description/add', 'PortraitController@portraitDataToPackage')->name('portraitDataToPackage');
Route::delete('/portrait/delete/{id}', 'PortraitController@deleteportraitPackage')->name('deleteportraitPackage');
/*
|--------------------------------------------------------------------------
|                       Birthday Album Controller Start
|--------------------------------------------------------------------------
*/

Route::get('/birthday-album', 'BirthdayController@index');
Route::get('/birthday-section', 'BirthdayController@adminIndex')->name('adminIndex');
Route::post('/birthday/album/make', 'BirthdayController@birthdayalbummake')->name('birthdayalbummake');
Route::get('/birthday/image/to/album', 'BirthdayController@birthdayImageToAlbum')->name('birthdayImageToAlbum');
Route::post('/birthday/album/to/gallery', 'BirthdayController@bdaygalleryoption')->name('bdaygalleryoption');
Route::get('/birthday/album/to/singleImage/{id}', 'BirthdayController@birthdaySingleImage')->name('birthdaySingleImage');
Route::delete('/deleteBirthday/{id}', 'BirthdayController@deleteBirthday')->name('deleteBirthday');

/*
|--------------------------------------------------------------------------
|                       Party Album Controller Start
|--------------------------------------------------------------------------
*/

Route::get('/party-album', 'PartyController@index')->name('partyfrontend');
Route::get('/party-admin', 'PartyController@partyadmin')->name('partyadmin');
Route::post('/party/album/make', 'PartyController@partyalbummake')->name('partyalbummake');
Route::get('/party/album/image/send', 'PartyController@partyalbumtoImage')->name('partyalbumtoImage');
Route::post('/party/album/image', 'PartyController@partygalleryoption')->name('partygalleryoption');
Route::get('/party/album/to/singleImage/{id}', 'PartyController@partyAlbumToImageAlbum')->name('partyAlbumToImageAlbum');
Route::delete('/deleteParty/{id}', 'PartyController@deleteParty')->name('deleteParty');
/*
|--------------------------------------------------------------------------
|                       Review Album Controller Start
|--------------------------------------------------------------------------
*/
Route::get('/review', function () {
    $reviews = App\ReviewPost::all();
    $logochanges = \App\LogoChange::all();

    return view('review', compact('reviews', 'logochanges'));
});
Route::get('/contact', function (Request $request) {
    $logochanges = \App\LogoChange::all();

    return view('contact', compact('logochanges'));
});

Route::resource('category', 'CategoryController');
Route::get('category/destroy/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' => 'category/destroy',
]);
Route::get('category/edit/{id}', 'CategoryController@show');
Route::post('category.update', 'CategoryController@update');

/*
|---------------------------------------------------------
|               Web Authenticate Route Start
|---------------------------------------------------------
|
*/
Auth::routes();
Route::get('/home', [
    'uses' => 'HomeController@index',
     'as' => 'home',
]);
/*
|-------------------------------------------------------
|                    Supplier Route Start
|-------------------------------------------------------
*/
Route::resource('supplier', 'SupplierController');
Route::get('/unpublishedSupplier/{id}', [
    'uses' => 'SupplierController@unpublishedSupplier',
     'as' => 'unpublishedSupplier',
]);
Route::get('/publishedSupplier/{id}', [
    'uses' => 'SupplierController@publishedSupplier',
     'as' => 'publishedSupplier',
]);
Route::get('/contact_admin', 'ContactController@contactview');
Route::post('/contactsend', 'ContactController@contactsendview');
Route::delete('deleteContact/{id}', 'ContactController@deleteContact')->name('deleteContact');
/*
|--------------------------------------------------------------------------
|                    Web Authenticate Route - PassWord Change
|--------------------------------------------------------------------------
*/
Route::get('admin/change/password', 'HomeController@changepassword')->name('passchange');
Route::post('admin/change/password/update', 'HomeController@changepasswordupdate')->name('passchangeupdate');
/*
|----------------------------------------------------------
|                       Review Option
|----------------------------------------------------------
*/
Route::post('/reviewsee', 'ReviewController@reviewpost')->name('reviewpost');
Route::get('/review_view', 'ReviewController@reviewpage')->name('reviewpage');
Route::delete('delete/{id}', 'ReviewController@delete')->name('delete');
/*
|----------------------------
|        Logo Option
|----------------------------
*/
Route::get('admin/logo/logochange', 'LogoChangeController@index')->name('logochange');
Route::post('admin/logo/logochangepost', 'LogoChangeController@logo')->name('logo');
Route::put('logochange/edit/{id}', 'LogoChangeController@show')->name('logoshow');
Route::put('logochange/update/{id}', 'LogoChangeController@update')->name('logoupdate');
