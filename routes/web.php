<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController as DashboardControllerForAdmin;
use App\Http\Controllers\Admin\DynamicPageController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\FooterColumnController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\LoginController as LoginControllerForAdmin;
use App\Http\Controllers\Admin\LogoutController as LogoutControllerForAdmin;
use App\Http\Controllers\Admin\ForgetPasswordController as ForgetPasswordControllerForAdmin;

use App\Http\Controllers\Admin\PaymentController as PaymentControllerForAdmin;

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageAboutController;
use App\Http\Controllers\Admin\PageBranchController;

use App\Http\Controllers\Admin\PageBoardController;
use App\Http\Controllers\Admin\PageDocumentController;

use App\Http\Controllers\Admin\PageSeniorController;
use App\Http\Controllers\Admin\PageDeveloperController;

use App\Http\Controllers\Admin\TwoFactorController;

use App\Http\Controllers\Admin\PageBlogController;
use App\Http\Controllers\Admin\PageCareerController;
use App\Http\Controllers\Admin\PageContactController;
use App\Http\Controllers\Admin\PageFaqController;
use App\Http\Controllers\Admin\PageHomeController;
use App\Http\Controllers\Admin\PageOtherController;
use App\Http\Controllers\Admin\PagePhotoGalleryController;
use App\Http\Controllers\Admin\PagePrivacyController;
use App\Http\Controllers\Admin\PageProjectController;
use App\Http\Controllers\Admin\PageServiceController;
use App\Http\Controllers\Admin\PageShopController;
use App\Http\Controllers\Admin\PageTeamController;
use App\Http\Controllers\Admin\PageTermController;
use App\Http\Controllers\Admin\PageVideoGalleryController;
use App\Http\Controllers\Admin\PhotoChangeController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ResetPasswordController as ResetPasswordControllerForAdmin;
use App\Http\Controllers\Admin\PasswordChangeController as PasswordChangeControllerForAdmin;
use App\Http\Controllers\Admin\ProfileChangeController as ProfileChangeControllerForAdmin;
use App\Http\Controllers\Admin\CategoryController as CategoryControllerForAdmin;

use App\Http\Controllers\Admin\ProductCategoryController as ProductCategoryControllerForAdmin;
use App\Http\Controllers\Admin\ProductSubCategoryController as ProductSubCategoryControllerForAdmin;


use App\Http\Controllers\Admin\BlogController as BlogControllerForAdmin;

use App\Http\Controllers\Admin\MenuController as MenuControllerForAdmin;




use App\Http\Controllers\Admin\Role_permissionController as Role_permissionControllerForAdmin;

use App\Http\Controllers\Admin\ProjectController as ProjectControllerForAdmin;
use App\Http\Controllers\Admin\ServiceController as ServiceControllerForAdmin;

use App\Http\Controllers\Admin\BranchController as BranchControllerForAdmin;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\SocialMediaItemController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TeamMemberController as TeamMemberControllerForAdmin;
use App\Http\Controllers\Admin\SeniorManagementController as SeniorManagementControllerForAdmin;
use App\Http\Controllers\Admin\ManagementCategoryController as ManagementCategoryControllerForAdmin;
use App\Http\Controllers\Admin\JobCategoryController as JobCategoryControllerForAdmin;
use App\Http\Controllers\Admin\DeveloperController as DeveloperControllerForAdmin;


use App\Http\Controllers\Admin\BoardController as BoardControllerForAdmin;

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\DocumentController;

use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\JobController as JobControllerForAdmin;
use App\Http\Controllers\Admin\FaqController as FaqControllerForAdmin;
use App\Http\Controllers\Admin\ProductController as ProductControllerForAdmin;
use App\Http\Controllers\Admin\OrderController as OrderControllerForAdmin;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\DashboardController as DashboardControllerForCustomer;
use App\Http\Controllers\Customer\ForgetPasswordController as ForgetPasswordControllerForCustomer;
use App\Http\Controllers\Customer\LoginController as LoginControllerForCustomer;
use App\Http\Controllers\Customer\LogoutController as LogoutControllerForCustomer;
use App\Http\Controllers\Customer\OrderController as OrderControllerForCustomer;
use App\Http\Controllers\Customer\PasswordChangeController as PasswordChangeControllerForCustomer;
use App\Http\Controllers\Customer\ProfileChangeController as ProfileChangeControllerForCustomer;
use App\Http\Controllers\Customer\RegistrationController;
use App\Http\Controllers\Customer\ResetPasswordController as ResetPasswordControllerForCustomer;

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController as BlogControllerForFront;
use App\Http\Controllers\Front\CategoryController as CategoryControllerForFront;

use App\Http\Controllers\Front\ProductCategoryController as ProductCategoryControllerForFront;

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqController as FaqControllerForFront;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JobController as JobControllerForFront;
// -----Job category fron -----------
use App\Http\Controllers\Front\JobCategoryController as JobCategoryControllerForFront;

use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\PhotoGalleryController;
use App\Http\Controllers\Front\PrivacyController;
use App\Http\Controllers\Front\ProductController as ProductControllerForFront;
use App\Http\Controllers\Front\ProjectController as ProjectControllerForFront;
use App\Http\Controllers\Front\SearchController;
// -----------For Jobs Search
use App\Http\Controllers\Front\JobSearchController;

use App\Http\Controllers\Front\ProductSearchController;

use App\Http\Controllers\Front\ServiceController as ServiceControllerForFront;
use App\Http\Controllers\Front\PartnerController as PartnerControllerForFront;
use App\Http\Controllers\Front\DocumentController as DocumentControllerForFront;
use App\Http\Controllers\Front\BranchController as BranchControllerForFront;

use App\Http\Controllers\Front\AiChatController as AiChatControllerForFront;


use App\Http\Controllers\Front\SubscriptionController;
use App\Http\Controllers\Front\TeamMemberController as TeamMemberControllerForFront;
use App\Http\Controllers\Front\SeniorController as SeniorManagementControllerForFront;
use App\Http\Controllers\Front\DeveloperController as DeveloperControllerForFront;
use App\Http\Controllers\Front\ClientController as ClientControllerForFront;


use App\Http\Controllers\Front\BoardController as BoardDirectorControllerForFront;
use App\Http\Controllers\Front\TermController;
use App\Http\Controllers\Front\VideoGalleryController;
use Illuminate\Support\Facades\Route;


// *--------- Folder route -------------*/
   use App\Http\Controllers\Admin\FolderController as FolderControllerForAdmin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
/* --------------------------------------- */
/* Locale - Admin */
/* --------------------------------------- */
use App\Http\Controllers\LocaleController;

   // --------------Caht gpt--------
   use App\Http\Controllers\Admin\ChatGPTController;
  Route::get('admin/chatgpt', [ChatGPTController::class, 'index']) ->name('admin.chatgpt.index');
Route::post('admin/chatgpt/ask', [ChatGPTController::class, 'ask'])
    ->name('admin.chatgpt.ask');

Route::get('admin/chatgpt/delete/{id}', [ChatGPTController::class,'destroy']);



   Route::get('admin/folders/view', [FolderControllerForAdmin::class, 'index'])->name('admin.folders.index');
   Route::get('admin/folders/create', [FolderControllerForAdmin::class, 'create'])->name('admin.folders.create');
   Route::post('admin/folders', [FolderControllerForAdmin::class, 'store'])->name('admin.folders.store');

   Route::get('admin/folders/{id}', [FolderControllerForAdmin::class, 'sidebar'])->name('admin.folders.file_sidebar');

   Route::get('admin/folders/{id}', [FolderControllerForAdmin::class, 'show'])->name('admin.folders.show');
    Route::get('admin/folders/delete1/{id}', [FolderControllerForAdmin::class,'destroy1']);
   Route::get('admin/folders/delete/{id}', [FolderControllerForAdmin::class,'destroy']);


Route::post('admin/folders/{id}/upload', [FolderControllerForAdmin::class, 'upload'])->name('admin.folders.upload');
Route::post('/verify-password', 'FolderController@verifyPassword')->name('verify.password');

Route::post('/subfolder/create', [SubFolderController::class, 'createSubFolder'])->name('subfolder.create');

Route::delete('/subfolder/{id}', [SubFolderController::class, 'deleteFolder'])->name('subfolder.delete');
Route::post('/subfolder/{id}/share', [SubFolderController::class, 'shareFolder'])->name('subfolder.share');
Route::put('/subfolder/{id}/rename', [SubFolderController::class, 'renameFolder'])->name('subfolder.rename');






/* --------------------------------------- */
/* Front End */
/* --------------------------------------- */

 // this is for front

Route::get('aichat', [AiChatControllerForFront::class,'index'])->name('front.ai_chat');
Route::post('aichat/ask', [AiChatControllerForFront::class, 'ask'])
    ->name('front.ai_chat.ask');

Route::get('/', [HomeController::class,'index']);
Route::get('about', [AboutController::class,'index'])->name('front.about');
Route::get('branch', [BranchControllerForFront::class,'index'])->name('front.branch');
Route::get('branch', [BranchControllerForFront::class,'index2'])->name('front.branch');
Route::get('branch/{name}', [BranchControllerForFront::class,'detail']);


Route::get('services', [ServiceControllerForFront::class,'index'])->name('front.services');
Route::get('partners', [PartnerControllerForFront::class,'index'])->name('front.partners');
Route::get('documents', [DocumentControllerForFront::class,'index'])->name('front.documents');

Route::get('document', [DocumentControllerForFront::class,'index'])->name('front.document');
Route::get('documents', [DocumentControllerForFront::class,'index'])->name('front.documents');




Route::get('service/{slug}', [ServiceControllerForFront::class,'detail']);
Route::get('blog', [BlogControllerForFront::class,'index'])->name('front.blogs');
Route::get('blog/{slug}', [BlogControllerForFront::class,'detail']);
Route::post('blog/comment', [BlogControllerForFront::class,'comment'])->name('front.comment');
Route::get('category/{slug}', [CategoryControllerForFront::class,'detail']);
Route::post('search', [SearchController::class,'index']);
Route::get('search', function() {abort(404);});
Route::get('projects', [ProjectControllerForFront::class,'index'])->name('front.projects');
Route::get('project/{slug}', [ProjectControllerForFront::class,'detail']);
Route::get('faq', [FaqControllerForFront::class,'index'])->name('front.faq');
Route::get('team-members', [TeamMemberControllerForFront::class,'index'])->name('front.team_members');
Route::get('team-member/{slug}', [TeamMemberControllerForFront::class,'detail']);

Route::get('senior', [SeniorManagementControllerForFront::class,'index'])->name('front.senior');
Route::get('senior/{slug}', [SeniorManagementControllerForFront::class,'detail']);
Route::get('ceo', [SeniorManagementControllerForFront::class,'ceo'])->name('front.ceo');




Route::get('developer', [DeveloperControllerForFront::class,'index'])->name('front.developer');
Route::get('developer/{slug}', [DeveloperControllerForFront::class,'detail']);

Route::get('client', [ClientControllerForFront::class,'index'])->name('front.client');
Route::get('client/{slug}', [ClientControllerForFront::class,'detail']);

Route::get('board', [BoardDirectorControllerForFront::class,'index'])->name('front.board');
Route::get('board/{slug}', [BoardDirectorControllerForFront::class,'detail']);

Route::get('photo-gallery', [PhotoGalleryController::class,'index'])->name('front.photo_gallery');
Route::get('video-gallery', [VideoGalleryController::class,'index'])->name('front.video_gallery');
Route::get('page/{slug}', [PageController::class,'detail']);
Route::get('contact', [ContactController::class,'index'])->name('front.contact');
Route::post('contact/store', [ContactController::class,'send_email'])->name('front.contact_form');
Route::get('career', [JobControllerForFront::class,'index'])->name('front.career');
// ---new added due to category--
Route::get('career1', [JobControllerForFront::class,'index1'])->name('front.career1');
Route::get('job/{slug}', [JobControllerForFront::class,'detail1']);
Route::get('job_category/{slug}', [JobControllerForFront::class,'detail']);
// =========================New Added ================
//Route::get('job_category/{slug}', [JobControllerForFront::class,'front.career']);
Route::get('job_category/{slug}', [JobCategoryControllerForFront::class,'Jobdetail']);
Route::post('job_search', [JobSearchController::class,'index']);

Route::get('job/{slug}', [JobControllerForFront::class,'detail']);
Route::get('job/apply/{slug}', [JobControllerForFront::class,'apply']);
Route::post('job/apply/store', [JobControllerForFront::class,'apply_form'])->name('front.apply_form');
Route::get('shop', [ProductControllerForFront::class,'index'])->name('front.shop');
Route::get('product/{slug}', [ProductControllerForFront::class,'detail']);
Route::post('product/cart/add', [ProductControllerForFront::class,'add_to_cart'])->name('front.add_to_cart');
Route::get('cart', [ProductControllerForFront::class,'cart'])->name('front.cart');
Route::get('cart/delete/{id}', [ProductControllerForFront::class,'cart_item_delete']);
Route::post('cart/update', [ProductControllerForFront::class,'update_cart']);
Route::get('checkout', [ProductControllerForFront::class,'checkout'])->name('front.checkout');
Route::post('checkout/shipping/update', [ProductControllerForFront::class,'shipping_update'])->name('front.shipping_update');
Route::post('checkout/coupon/update', [ProductControllerForFront::class,'coupon_update'])->name('front.coupon_update');
Route::post('subscription', [SubscriptionController::class,'index'])->name('front.subscription');
Route::get('subscriber/verify/{token}/{email}', [SubscriptionController::class,'verify']);
Route::get('terms-and-conditions', [TermController::class,'index'])->name('front.term');
Route::get('privacy-policy', [PrivacyController::class,'index'])->name('front.privacy');

// ---------New Added for product category
Route::get('product_category/{slug}', [ProductCategoryControllerForFront::class,'detail']);
Route::post('product_search', [ProductSearchController::class,'index']);
//Route::get('search', function() {abort(404);});

/* --------------------------------------- */
/* Customer Login and profile management */
/* --------------------------------------- */
Route::get('customer/login', [LoginControllerForCustomer::class,'index'])->name('customer.login');
Route::post('customer/login/store', [LoginControllerForCustomer::class,'store'])->name('customer.login.store');
Route::post('customer/checkout/login/store', [CheckoutController::class,'login'])->name('customer.login_from_checkout_page.store');
Route::get('customer/logout', [LogoutControllerForCustomer::class,'index'])->name('customer.logout');
Route::get('customer/register', [RegistrationController::class,'index'])->name('customer.registration');
Route::post('customer/registration/store', [RegistrationController::class,'store'])->name('customer.registration.store');
Route::get('customer/dashboard', [DashboardControllerForCustomer::class,'index'])->name('customer.dashboard');
Route::get('customer/registration/verify/{token}/{email}', [RegistrationController::class,'verify']);
Route::get('customer/forget-password', [ForgetPasswordControllerForCustomer::class,'index'])->name('customer.forget_password');
Route::post('customer/forget-password/store', [ForgetPasswordControllerForCustomer::class,'store'])->name('customer.forget_password.store');
Route::get('customer/reset-password/{token}/{email}', [ResetPasswordControllerForCustomer::class,'index']);
Route::post('customer/reset-password/update', [ResetPasswordControllerForCustomer::class,'update']);
Route::get('customer/password-change', [PasswordChangeControllerForCustomer::class,'index'])->name('customer.password_change');
Route::post('customer/password-change/update', [PasswordChangeControllerForCustomer::class,'update']);
Route::get('customer/profile-change', [ProfileChangeControllerForCustomer::class,'index'])->name('customer.profile_change');
Route::post('customer/profile-change/update', [ProfileChangeControllerForCustomer::class,'update']);
Route::get('customer/order', [OrderControllerForCustomer::class,'index'])->name('customer.order');
Route::post('customer/checkout/billing/shipping', [CheckoutController::class,'billing_shipping'])->name('customer.billing_shipping_submit');
Route::get('customer/payment', [CheckoutController::class,'payment'])->name('customer.payment');
Route::post('customer/payment/stripe', [CheckoutController::class,'stripe'])->name('customer.stripe');
Route::get('customer/execute-payment', [CheckoutController::class,'paypal']);
/*--------------Newly Payment Getway ---------------*/
Route::post('customer/payment/bank', [CheckoutController::class,'bank'])->name('customer.bank');
Route::post('customer/payment/telebirr', [CheckoutController::class,'telebirr'])->name('customer.telebirr');
Route::post('customer/payment/chapa', [CheckoutController::class,'chapa'])->name('customer.chapa');
Route::get('customer/payment/{reference}', [CheckoutController::class,'callback'])->name('customer.payment.callback');

Route::get('customer/payment/success/{reference}', [CheckoutController::class, 'callback'])->name('customer.chapa.success');





Route::post('customer/payment/initialize', [CheckoutController::class,'initialize'])->name('customer.initialize');
Route::get('customer/payment/{reference}', [CheckoutController::class,'callback1'])->name('customer.callback1');
Route::post('pay', 'App\Http\Controllers\ChapaController@initialize')->name('pay');

// The callback url after a payment
Route::get('callback/{reference}', 'App\Http\Controllers\ChapaController@callback')->name('callback');
/*-----------End Newly Payment Getway ---------------*/



/* --------------------------------------- */
/* Admin Login and profile management */
/* --------------------------------------- */

//Route::group(['middleware' => ['2fa']], function () {
  Route::group(['middleware' => ['web', '2fa']], function () {


Route::get('admin/dashboard', [DashboardControllerForAdmin::class,'index'])->name('admin.dashboard');
});
Route::get('admin', function () {return redirect('admin/login');});
Route::get('admin/login', [LoginControllerForAdmin::class,'index'])->name('admin.login');
Route::post('admin/login/store', [LoginControllerForAdmin::class,'store'])->name('admin.login.store');
Route::get('admin/logout', [LogoutControllerForAdmin::class,'index'])->name('admin.logout');
Route::get('admin/forget-password', [ForgetPasswordControllerForAdmin::class,'index'])->name('admin.forget_password');
Route::post('admin/forget-password/store', [ForgetPasswordControllerForAdmin::class,'store'])->name('admin.forget_password.store');
Route::get('admin/reset-password/{token}/{email}', [ResetPasswordControllerForAdmin::class,'index']);
Route::post('admin/reset-password/update', [ResetPasswordControllerForAdmin::class,'update']);
Route::get('admin/password-change', [PasswordChangeControllerForAdmin::class,'index'])->name('admin.password_change');
Route::post('admin/password-change/update', [PasswordChangeControllerForAdmin::class,'update']);
Route::get('admin/profile-change', [ProfileChangeControllerForAdmin::class,'index'])->name('admin.profile_change');
Route::post('admin/profile-change/update', [ProfileChangeControllerForAdmin::class,'update']);
Route::get('admin/photo-change', [PhotoChangeController::class,'index'])->name('admin.photo_change');
Route::post('admin/photo-change/update', [PhotoChangeController::class,'update']);

// --Two factor---
Route::post('admin/profile/two-factor', [ProfileChangeControllerForAdmin::class,'toggleTwoFactor'])->name('admin.toggleTwoFactor');
Route::post('admin/profile/two-factor-type', [ProfileChangeControllerForAdmin::class,'TwoFactorType'])->name('admin.TwoFactorType');

Route::group(['namespace' => 'Admin', 'middleware' => ['2fa']], function () {
    // Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Admin/TwoFactorController.php'))) {
        Route::get('admin/two-factor', [TwoFactorController::class,'show'])->name('twoFactor.show');
        Route::post('admin/two-factor', [TwoFactorController::class,'check'])->name('twoFactor.check');
        Route::get('admin/two-factor/resend', [TwoFactorController::class,'resend'])->name('twoFactor.resend');

        // Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        // Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        // Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});







/* --------------------------------------- */
/* Category - Admin */
/* --------------------------------------- */
Route::get('admin/category/view', [CategoryControllerForAdmin::class,'index'])->name('admin.category.index');
Route::get('admin/category/create', [CategoryControllerForAdmin::class,'create'])->name('admin.category.create');
Route::post('admin/category/store', [CategoryControllerForAdmin::class,'store'])->name('admin.category.store');
Route::get('admin/category/delete/{id}', [CategoryControllerForAdmin::class,'destroy']);
Route::get('admin/category/edit/{id}', [CategoryControllerForAdmin::class,'edit']);
Route::post('admin/category/update/{id}', [CategoryControllerForAdmin::class,'update']);

/* --------------------------------------- */
/*Management Category - Admin */
/* --------------------------------------- */
Route::get('admin/management_category/view', [ManagementCategoryControllerForAdmin::class,'index'])->name('admin.management_category.index');
Route::get('admin/management_category/create', [ManagementCategoryControllerForAdmin::class,'create'])->name('admin.management_category.create');
Route::post('admin/management_category/store', [ManagementCategoryControllerForAdmin::class,'store'])->name('admin.management_category.store');
Route::get('admin/management_category/delete/{id}', [ManagementCategoryControllerForAdmin::class,'destroy']);
Route::get('admin/management_category/edit/{id}', [ManagementCategoryControllerForAdmin::class,'edit']);
Route::post('admin/management_category/update/{id}', [ManagementCategoryControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Product Category - Admin */
/* --------------------------------------- */
Route::get('admin/product_category/view', [ProductCategoryControllerForAdmin::class,'index'])->name('admin.product_category.index');
Route::get('admin/product_category/create', [ProductCategoryControllerForAdmin::class,'create'])->name('admin.product_category.create');
Route::post('admin/product_category/store', [ProductCategoryControllerForAdmin::class,'store'])->name('admin.product_category.store');
Route::get('admin/product_category/delete/{id}', [ProductCategoryControllerForAdmin::class,'destroy']);
Route::get('admin/product_category/edit/{id}', [ProductCategoryControllerForAdmin::class,'edit']);
Route::post('admin/product_category/update/{id}', [ProductCategoryControllerForAdmin::class,'update']);

/* --------------------------------------- */
/* Product Sub Category - Admin */
/* --------------------------------------- */
Route::get('admin/product_sub_category/view', [ProductSubCategoryControllerForAdmin::class,'index'])->name('admin.product_sub_category.index');
Route::get('admin/product_sub_category/create', [ProductSubCategoryControllerForAdmin::class,'create'])->name('admin.product_sub_category.create');
Route::post('admin/product_sub_category/store', [ProductSubCategoryControllerForAdmin::class,'store'])->name('admin.product_sub_category.store');
Route::get('admin/product_sub_category/delete/{id}', [ProductSubCategoryControllerForAdmin::class,'destroy']);
Route::get('admin/product_sub_category/edit/{id}', [ProductSubCategoryControllerForAdmin::class,'edit']);
Route::post('admin/product_sub_category/update/{id}', [ProductSubCategoryControllerForAdmin::class,'update']);

/* --------------------------------------- */
/* Menu - Admin */
/* --------------------------------------- */
Route::get('admin/menu/view', [MenuControllerForAdmin::class,'index'])->name('admin.menu.index');
Route::get('admin/menu/create', [MenuControllerForAdmin::class,'create'])->name('admin.menu.create');
Route::post('admin/menu/store', [MenuControllerForAdmin::class,'store'])->name('admin.menu.store');
Route::get('admin/menu/delete/{id}', [MenuControllerForAdmin::class,'destroy']);
Route::get('admin/menu/edit/{id}', [MenuControllerForAdmin::class,'edit']);
Route::post('admin/menu/update/{id}', [MenuControllerForAdmin::class,'update']);




/* --------------------------------------- */
/* Role Permission - Admin */
/* --------------------------------------- */
Route::get('admin/permission/view', [Role_permissionControllerForAdmin::class,'index'])->name('admin.permission.index');
Route::get('admin/permission/create', [Role_permissionControllerForAdmin::class,'create'])->name('admin.permission.create');
Route::post('admin/permission/store', [Role_permissionControllerForAdmin::class,'store'])->name('admin.permission.store');
Route::get('admin/permission/delete/{id}', [Role_permissionControllerForAdmin::class,'destroy']);
Route::get('admin/permission/edit/{id}', [Role_permissionControllerForAdmin::class,'edit']);
Route::post('admin/permission/update/{id}', [Role_permissionControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Blog - Admin */
/* --------------------------------------- */
Route::get('admin/blog/view', [BlogControllerForAdmin::class,'index'])->name('admin.blog.index');
Route::get('admin/blog/create', [BlogControllerForAdmin::class,'create'])->name('admin.blog.create');
Route::post('admin/blog/store', [BlogControllerForAdmin::class,'store'])->name('admin.blog.store');
Route::get('admin/blog/delete/{id}', [BlogControllerForAdmin::class,'destroy']);
Route::get('admin/blog/edit/{id}', [BlogControllerForAdmin::class,'edit']);
Route::post('admin/blog/update/{id}', [BlogControllerForAdmin::class,'update']);

/* --------------------------------------- */
/* Senior Managment - Admin */
/* --------------------------------------- */
Route::get('admin/senior_managemnts/view', [SeniorManagementControllerForAdmin::class,'index'])->name('admin.senior_managemnts.index');
Route::get('admin/senior_managemnts/create', [SeniorManagementControllerForAdmin::class,'create'])->name('admin.senior_managemnts.create');
Route::post('admin/senior_managemnts/store', [SeniorManagementControllerForAdmin::class,'store'])->name('admin.senior_managemnts.store');
Route::get('admin/senior_managemnts/delete/{id}', [SeniorManagementControllerForAdmin::class,'destroy']);
Route::get('admin/senior_managemnts/edit/{id}', [SeniorManagementControllerForAdmin::class,'edit']);
Route::post('admin/senior_managemnts/update/{id}', [SeniorManagementControllerForAdmin::class,'update']);

/* --------------------------------------- */
/* Developer - Admin */
/* --------------------------------------- */
Route::get('admin/developer/view', [DeveloperControllerForAdmin::class,'index'])->name('admin.developer.index');
Route::get('admin/developer/create', [DeveloperControllerForAdmin::class,'create'])->name('admin.developer.create');
Route::post('admin/developer/store', [DeveloperControllerForAdmin::class,'store'])->name('admin.developer.store');
Route::get('admin/developer/delete/{id}', [DeveloperControllerForAdmin::class,'destroy']);
Route::get('admin/developer/edit/{id}', [DeveloperControllerForAdmin::class,'edit']);
Route::post('admin/developer/update/{id}', [DeveloperControllerForAdmin::class,'update']);



/* --------------------------------------- */
/* Board Directors - Admin */
/* --------------------------------------- */
Route::get('admin/board_director/view', [BoardControllerForAdmin::class,'index'])->name('admin.board_director.index');
Route::get('admin/board_director/create', [BoardControllerForAdmin::class,'create'])->name('admin.board_director.create');
Route::post('admin/board_director/store', [BoardControllerForAdmin::class,'store'])->name('admin.board_director.store');
Route::get('admin/board_director/delete/{id}', [BoardControllerForAdmin::class,'destroy']);
Route::get('admin/board_director/edit/{id}', [BoardControllerForAdmin::class,'edit']);
Route::post('admin/board_director/update/{id}', [BoardControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Comment - Admin */
/* --------------------------------------- */
Route::get('admin/comment/approved', [CommentController::class,'approved'])->name('admin.comment.approved');
Route::get('admin/comment/make-pending/{id}', [CommentController::class,'make_pending']);
Route::get('admin/comment/pending', [CommentController::class,'pending'])->name('admin.comment.pending');
Route::get('admin/comment/make-approved/{id}', [CommentController::class,'make_approved']);
Route::get('admin/comment/delete/{id}', [CommentController::class,'destroy']);


/* --------------------------------------- */
/* Slider - Admin */
/* --------------------------------------- */
Route::get('admin/slider/view', [SliderController::class,'index'])->name('admin.slider.index');
Route::get('admin/slider/create', [SliderController::class,'create'])->name('admin.slider.create');
Route::post('admin/slider/store', [SliderController::class,'store'])->name('admin.slider.store');
Route::get('admin/slider/delete/{id}', [SliderController::class,'destroy']);
Route::get('admin/slider/edit/{id}', [SliderController::class,'edit']);
Route::post('admin/slider/update/{id}', [SliderController::class,'update']);


/* --------------------------------------- */
/* Partner - Admin */
/* --------------------------------------- */
Route::get('admin/partner/view', [PartnerController::class,'index'])->name('admin.partner.index');
Route::get('admin/partner/create', [PartnerController::class,'create'])->name('admin.partner.create');
Route::post('admin/partner/store', [PartnerController::class,'store'])->name('admin.partner.store');
Route::get('admin/partner/delete/{id}', [PartnerController::class,'destroy']);
Route::get('admin/partner/edit/{id}', [PartnerController::class,'edit']);
Route::post('admin/partner/update/{id}', [PartnerController::class,'update']);


/* --------------------------------------- */
/* Document - Admin */
/* --------------------------------------- */
Route::get('admin/document/view', [DocumentController::class,'index'])->name('admin.document.index');
Route::get('admin/document/create', [DocumentController::class,'create'])->name('admin.document.create');
Route::post('admin/document/store', [DocumentController::class,'store'])->name('admin.document.store');
Route::get('admin/document/delete/{id}', [DocumentController::class,'destroy']);
Route::get('admin/document/edit/{id}', [DocumentController::class,'edit']);
Route::post('admin/document/update/{id}', [DocumentController::class,'update']);


/* --------------------------------------- */
/* Logo - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/logo/edit', [GeneralSettingController::class,'logo_edit'])->name('admin.general_setting.logo');
Route::post('admin/setting/general/logo/update', [GeneralSettingController::class,'logo_update']);

/* --------------------------------------- */
/* General settings - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/system/edit', [GeneralSettingController::class,'system_edit'])->name('admin.general_setting.system');
Route::post('admin/setting/general/system/update', [GeneralSettingController::class,'system_update']);

/* --------------------------------------- */
/* Database Export or Backup - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/exportDatabase', [GeneralSettingController::class,'exportDatabase'])->name('admin.general_setting.exportDatabase');
Route::post('admin/setting/general/exportDatabase', [GeneralSettingController::class,'exportDatabase']);

Route::get('admin/setting/general/export_database', [GeneralSettingController::class,'exportDatabase'])->name('admin.general_setting.export_database');
Route::post('admin/setting/general/export_database', [GeneralSettingController::class,'exportDatabase']);



/* --------------------------------------- */
/* Favicon - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/favicon/edit', [GeneralSettingController::class,'favicon_edit'])->name('admin.general_setting.favicon');
Route::post('admin/setting/general/favicon/update', [GeneralSettingController::class,'favicon_update']);


/* --------------------------------------- */
/* Login Background - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/loginbg/edit', [GeneralSettingController::class,'loginbg_edit'])->name('admin.general_setting.loginbg');
Route::post('admin/setting/general/loginbg/update', [GeneralSettingController::class,'loginbg_update']);


/* --------------------------------------- */
/* TopBar - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/topbar/edit', [GeneralSettingController::class,'topbar_edit'])->name('admin.general_setting.topbar');
Route::post('admin/setting/general/topbar/update', [GeneralSettingController::class,'topbar_update']);


/* --------------------------------------- */
/* Banner - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/banner/edit', [GeneralSettingController::class,'banner_edit'])->name('admin.general_setting.banner');
Route::post('admin/setting/general/banner/update', [GeneralSettingController::class,'banner_update']);


/* --------------------------------------- */
/* Footer - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/footer/edit', [GeneralSettingController::class,'footer_edit'])->name('admin.general_setting.footer');
Route::post('admin/setting/general/footer/update', [GeneralSettingController::class,'footer_update']);


/* --------------------------------------- */
/* Sidebar - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/sidebar/edit', [GeneralSettingController::class,'sidebar_edit'])->name('admin.general_setting.sidebar');
Route::post('admin/setting/general/sidebar/update', [GeneralSettingController::class,'sidebar_update']);

/* --------------------------------------- */
/* Authorized Share - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/authorizedshare/edit', [GeneralSettingController::class,'authorizedshare_edit'])->name('admin.general_setting.authorizedshare');
Route::post('admin/setting/general/authorizedshare/update', [GeneralSettingController::class,'authorizedshare_update']);
/* --------------------------------------- */
/* Price Per Share - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/pricepershare/edit', [GeneralSettingController::class,'pricepershare_edit'])->name('admin.general_setting.pricepershare');
Route::post('admin/setting/general/pricepershare/update', [GeneralSettingController::class,'pricepershare_update']);


/* --------------------------------------- */
/* Color - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/color/edit', [GeneralSettingController::class,'color_edit'])->name('admin.general_setting.color');
Route::post('admin/setting/general/color/update', [GeneralSettingController::class,'color_update']);
// sidebar color
Route::post('admin/setting/general/color/sidebar_update', [GeneralSettingController::class,'sidebar_color_update']);



/* --------------------------------------- */
/* Preloader - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/preloader/edit', [GeneralSettingController::class,'preloader_edit'])->name('admin.general_setting.preloader');
Route::post('admin/setting/general/preloader/update', [GeneralSettingController::class,'preloader_update']);


/* --------------------------------------- */
/* Sticky Header - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/stickyheader/edit', [GeneralSettingController::class,'stickyheader_edit'])->name('admin.general_setting.stickyheader');
Route::post('admin/setting/general/stickyheader/update', [GeneralSettingController::class,'stickyheader_update']);


/* --------------------------------------- */
/* Google Analytic - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/googleanalytic/edit', [GeneralSettingController::class,'googleanalytic_edit'])->name('admin.general_setting.googleanalytic');
Route::post('admin/setting/general/googleanalytic/update', [GeneralSettingController::class,'googleanalytic_update']);


/* --------------------------------------- */
/* Google Recaptcha - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/googlerecaptcha/edit', [GeneralSettingController::class,'googlerecaptcha_edit'])->name('admin.general_setting.googlerecaptcha');
Route::post('admin/setting/general/googlerecaptcha/update', [GeneralSettingController::class,'googlerecaptcha_update']);


/* --------------------------------------- */
/* Tawk Live Chat - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/tawklivechat/edit', [GeneralSettingController::class,'tawklivechat_edit'])->name('admin.general_setting.tawklivechat');
Route::post('admin/setting/general/tawklivechat/update', [GeneralSettingController::class,'tawklivechat_update']);

/* --------------------------------------- */
/* Google AdSense Script code - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/googleadsense/edit', [GeneralSettingController::class,'googleadsense_edit'])->name('admin.general_setting.googleadsense');
Route::post('admin/setting/general/googleadsense/update', [GeneralSettingController::class,'googleadsense_update']);

/* --------------------------------------- */
/* Cookie Consent - Admin */
/* --------------------------------------- */
Route::get('admin/setting/general/cookieconsent/edit', [GeneralSettingController::class,'cookieconsent_edit'])->name('admin.general_setting.cookieconsent');
Route::post('admin/setting/general/cookieconsent/update', [GeneralSettingController::class,'cookieconsent_update']);

/* --------------------------------------- */
/* E-mail configuration - Admin */
/* --------------------------------------- */
 Route::get('admin/setting/general/mail/view', [GeneralSettingController::class,'mail'])->name('admin.general_setting.mail');
Route::post('admin/setting/general/mail/update', [GeneralSettingController::class,'mailConfigUpdate']);

/* --------------------------------------- */
/* Telegram bot ENV configuration - Admin */
/* --------------------------------------- */
Route::post('admin/setting/general/system/telegramenv', [GeneralSettingController::class,'telegramEnv']);
/* --------------------------------------- */
/* ChatGpt ENV configuration - Admin */
/* --------------------------------------- */
Route::post('admin/setting/general/system/openai', [GeneralSettingController::class,'openai']);



/* --------------------------------------- */
/* Page Settings - Admin */
/* --------------------------------------- */
Route::group(['prefix'=>'admin/page/home'], function() {

    Route::get('/edit', [PageHomeController::class,'edit'])->name('admin.page_home.edit');
    Route::post('/1', [PageHomeController::class,'update1']);
    Route::post('/2', [PageHomeController::class,'update2']);
    Route::post('/3', [PageHomeController::class,'update3']);
    Route::post('/4', [PageHomeController::class,'update4']);
    Route::post('/5', [PageHomeController::class,'update5']);
    Route::post('/6', [PageHomeController::class,'update6']);
    Route::post('/7', [PageHomeController::class,'update7']);
    Route::post('/8', [PageHomeController::class,'update8']);
    Route::post('/9', [PageHomeController::class,'update9']);
    Route::post('/10', [PageHomeController::class,'update10']);
    Route::post('/11', [PageHomeController::class,'update11']);
    Route::post('/12', [PageHomeController::class,'update12']);
    Route::post('/13', [PageHomeController::class,'update13']);
    Route::post('/14', [PageHomeController::class,'update14']);
    Route::post('/15', [PageHomeController::class,'update15']);
    Route::post('/16', [PageHomeController::class,'update16']);
});

Route::group(['prefix'=>'admin/page'], function() {
    Route::get('/about/edit', [PageAboutController::class,'edit'])->name('admin.page_about.edit');
    Route::post('/about/update', [PageAboutController::class,'update']);

    Route::get('/branch/edit', [PageBranchController::class,'edit'])->name('admin.page_branch.edit');
    Route::post('/branch/update', [PageBranchController::class,'update']);

    Route::get('/senior/edit', [PageSeniorController::class,'edit'])->name('admin.page_senior.edit');
    Route::post('/senior/update', [PageSeniorController::class,'update']);

    Route::get('/developer/edit', [PageDeveloperController::class,'edit'])->name('admin.page_developer.edit');
    Route::post('/developer/update', [PageDeveloperController::class,'update']);

    Route::get('/board/edit', [PageBoardController::class,'edit'])->name('admin.page_board.edit');
    Route::post('/board/update', [PageBoardController::class,'update']);

    Route::get('/service/edit', [PageServiceController::class,'edit'])->name('admin.page_service.edit');
    Route::post('/service/update', [PageServiceController::class,'update']);

    Route::get('/shop/edit', [PageShopController::class,'edit'])->name('admin.page_shop.edit');
    Route::post('/shop/update', [PageShopController::class,'update']);

    Route::get('/blog/edit', [PageBlogController::class,'edit'])->name('admin.page_blog.edit');
    Route::post('/blog/update', [PageBlogController::class,'update']);

    Route::get('/project/edit', [PageProjectController::class,'edit'])->name('admin.page_project.edit');
    Route::post('/project/update', [PageProjectController::class,'update']);

    Route::get('/faq/edit', [PageFaqController::class,'edit'])->name('admin.page_faq.edit');
    Route::post('/faq/update', [PageFaqController::class,'update']);

    Route::get('/team/edit', [PageTeamController::class,'edit'])->name('admin.page_team.edit');
    Route::post('/team/update', [PageTeamController::class,'update']);

    Route::get('/photo-gallery/edit', [PagePhotoGalleryController::class,'edit'])->name('admin.page_photo_gallery.edit');
    Route::post('/photo-gallery/update', [PagePhotoGalleryController::class,'update']);

    Route::get('/video-gallery/edit', [PageVideoGalleryController::class,'edit'])->name('admin.page_video_gallery.edit');
    Route::post('/video-gallery/update', [PageVideoGalleryController::class,'update']);

    Route::get('/contact/edit', [PageContactController::class,'edit'])->name('admin.page_contact.edit');
    Route::post('/contact/update', [PageContactController::class,'update']);

    Route::get('/career/edit', [PageCareerController::class,'edit'])->name('admin.page_career.edit');
    Route::post('/career/update', [PageCareerController::class,'update']);

    Route::get('/term/edit', [PageTermController::class,'edit'])->name('admin.page_term.edit');
    Route::post('/term/update', [PageTermController::class,'update']);

    Route::get('/privacy/edit', [PagePrivacyController::class,'edit'])->name('admin.page_privacy.edit');
    Route::post('/privacy/update', [PagePrivacyController::class,'update']);

    Route::get('/partner/edit', [PartnerController::class,'edit'])->name('admin.partner.edit');
    Route::post('/partner/update', [PartnerController::class,'update']);
    Route::get('/document/edit', [PageDocumentController::class,'edit'])->name('admin.page_document.edit');
    Route::post('/document/update', [PageDocumentController::class,'update']);
});

Route::group(['prefix'=>'admin/page/other'], function() {
    Route::get('/edit', [PageOtherController::class,'edit'])->name('admin.page_other.edit');
    Route::post('/1', [PageOtherController::class,'update1']);
    Route::post('/2', [PageOtherController::class,'update2']);
    Route::post('/3', [PageOtherController::class,'update3']);
    Route::post('/4', [PageOtherController::class,'update4']);
    Route::post('/5', [PageOtherController::class,'update5']);
    Route::post('/6', [PageOtherController::class,'update6']);
    Route::post('/7', [PageOtherController::class,'update7']);
    Route::post('/8', [PageOtherController::class,'update8']);
});


/* --------------------------------------- */
/* Dynamic Pages - Admin */
/* --------------------------------------- */
Route::get('admin/dynamic-page/view', [DynamicPageController::class,'index'])->name('admin.dynamic_page.index');
Route::get('admin/dynamic-page/create', [DynamicPageController::class,'create'])->name('admin.dynamic_page.create');
Route::post('admin/dynamic-page/store', [DynamicPageController::class,'store'])->name('admin.dynamic_page.store');
Route::get('admin/dynamic-page/delete/{id}', [DynamicPageController::class,'destroy']);
Route::get('admin/dynamic-page/edit/{id}', [DynamicPageController::class,'edit']);
Route::post('admin/dynamic-page/update/{id}', [DynamicPageController::class,'update']);




/* --------------------------------------- */
/* Project - Admin */
/* --------------------------------------- */
Route::get('admin/project/view', [ProjectControllerForAdmin::class,'index'])->name('admin.project.index');
Route::get('admin/project/create', [ProjectControllerForAdmin::class,'create'])->name('admin.project.create');
Route::post('admin/project/store', [ProjectControllerForAdmin::class,'store'])->name('admin.project.store');
Route::get('admin/project/delete/{id}', [ProjectControllerForAdmin::class,'destroy']);
Route::get('admin/project/edit/{id}', [ProjectControllerForAdmin::class,'edit']);
Route::post('admin/project/update/{id}', [ProjectControllerForAdmin::class,'update']);
Route::get('admin/project/gallery/{id}', [ProjectControllerForAdmin::class,'gallerysection']);
Route::get('admin/project/gallery-delete/{id}', [ProjectControllerForAdmin::class,'gallerydelete']);
Route::post('admin/project/gallery-store', [ProjectControllerForAdmin::class,'gallerystore'])->name('admin.project.gallery-store');


/* --------------------------------------- */
/* Photo Gallery - Admin */
/* --------------------------------------- */
Route::get('admin/photo-gallery/view', [PhotoController::class,'index'])->name('admin.photo.index');
Route::get('admin/photo-gallery/create', [PhotoController::class,'create'])->name('admin.photo.create');
Route::post('admin/photo-gallery/store', [PhotoController::class,'store'])->name('admin.photo.store');
Route::get('admin/photo-gallery/delete/{id}', [PhotoController::class,'destroy']);
Route::get('admin/photo-gallery/edit/{id}', [PhotoController::class,'edit']);
Route::post('admin/photo-gallery/update/{id}', [PhotoController::class,'update']);


/* --------------------------------------- */
/* Video Gallery - Admin */
/* --------------------------------------- */
Route::get('admin/video-gallery/view', [VideoController::class,'index'])->name('admin.video.index');
Route::get('admin/video-gallery/create', [VideoController::class,'create'])->name('admin.video.create');
Route::post('admin/video-gallery/store', [VideoController::class,'store'])->name('admin.video.store');
Route::get('admin/video-gallery/delete/{id}', [VideoController::class,'destroy']);
Route::get('admin/video-gallery/edit/{id}', [VideoController::class,'edit']);
Route::post('admin/video-gallery/update/{id}', [VideoController::class,'update']);


/* --------------------------------------- */
/* Why Choose Us - Admin */
/* --------------------------------------- */
Route::get('admin/why-choose/view', [WhyChooseController::class,'index'])->name('admin.why_choose.index');
Route::get('admin/why-choose/create', [WhyChooseController::class,'create'])->name('admin.why_choose.create');
Route::post('admin/why-choose/store', [WhyChooseController::class,'store'])->name('admin.why_choose.store');
Route::get('admin/why-choose/delete/{id}', [WhyChooseController::class,'destroy']);
Route::get('admin/why-choose/edit/{id}', [WhyChooseController::class,'edit']);
Route::post('admin/why-choose/update/{id}', [WhyChooseController::class,'update']);

/* --------------------------------------- */
/* Branch - Admin */
/* --------------------------------------- */
Route::get('admin/branch/view', [BranchControllerForAdmin::class,'index'])->name('admin.branch.index');
Route::get('admin/branch/create', [BranchControllerForAdmin::class,'create'])->name('admin.branch.create');
Route::post('admin/branch/store', [BranchControllerForAdmin::class,'store'])->name('admin.branch.store');
Route::get('admin/branch/delete/{id}', [BranchControllerForAdmin::class,'destroy']);
Route::get('admin/branch/edit/{id}', [BranchControllerForAdmin::class,'edit']);
Route::post('admin/branch/update/{id}', [BranchControllerForAdmin::class,'update']);

/* --------------------------------------- */
/* Service - Admin */
/* --------------------------------------- */
Route::get('admin/service/view', [ServiceControllerForAdmin::class,'index'])->name('admin.service.index');
Route::get('admin/service/create', [ServiceControllerForAdmin::class,'create'])->name('admin.service.create');
Route::post('admin/service/store', [ServiceControllerForAdmin::class,'store'])->name('admin.service.store');
Route::get('admin/service/delete/{id}', [ServiceControllerForAdmin::class,'destroy']);
Route::get('admin/service/edit/{id}', [ServiceControllerForAdmin::class,'edit']);
Route::post('admin/service/update/{id}', [ServiceControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Testimonial - Admin */
/* --------------------------------------- */
Route::get('admin/testimonial/view', [TestimonialController::class,'index'])->name('admin.testimonial.index');
Route::get('admin/testimonial/create', [TestimonialController::class,'create'])->name('admin.testimonial.create');
Route::post('admin/testimonial/store', [TestimonialController::class,'store'])->name('admin.testimonial.store');
Route::get('admin/testimonial/delete/{id}', [TestimonialController::class,'destroy']);
Route::get('admin/testimonial/edit/{id}', [TestimonialController::class,'edit']);
Route::post('admin/testimonial/update/{id}', [TestimonialController::class,'update']);


/* --------------------------------------- */
/* Team Member - Admin */
/* --------------------------------------- */
Route::get('admin/team-member/view', [TeamMemberControllerForAdmin::class,'index'])->name('admin.team_member.index');
Route::get('admin/team-member/create', [TeamMemberControllerForAdmin::class,'create'])->name('admin.team_member.create');
Route::post('admin/team-member/store', [TeamMemberControllerForAdmin::class,'store'])->name('admin.team_member.store');
Route::get('admin/team-member/delete/{id}', [TeamMemberControllerForAdmin::class,'destroy']);
Route::get('admin/team-member/edit/{id}', [TeamMemberControllerForAdmin::class,'edit']);
Route::post('admin/team-member/update/{id}', [TeamMemberControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Job or Career - Admin */
/* --------------------------------------- */
Route::get('admin/job/view', [JobControllerForAdmin::class,'index'])->name('admin.job.index');
Route::get('admin/job/create', [JobControllerForAdmin::class,'create'])->name('admin.job.create');
Route::post('admin/job/store', [JobControllerForAdmin::class,'store'])->name('admin.job.store');
Route::get('admin/job/delete/{id}', [JobControllerForAdmin::class,'destroy']);
Route::get('admin/job/edit/{id}', [JobControllerForAdmin::class,'edit']);
Route::post('admin/job/update/{id}', [JobControllerForAdmin::class,'update']);
Route::get('admin/job/application', [JobControllerForAdmin::class,'view_application'])->name('admin.job.view_application');
Route::get('admin/job/application/delete/{id}', [JobControllerForAdmin::class,'delete_application']);


/* --------------------------------------- */
/*Job Category - Admin */
/* --------------------------------------- */
Route::get('admin/job_category/view', [JobCategoryControllerForAdmin::class,'index'])->name('admin.job_category.index');
Route::get('admin/job_category/create', [JobCategoryControllerForAdmin::class,'create'])->name('admin.job_category.create');
Route::post('admin/job_category/store', [JobCategoryControllerForAdmin::class,'store'])->name('admin.job_category.store');
Route::get('admin/job_category/delete/{id}', [JobCategoryControllerForAdmin::class,'destroy']);
Route::get('admin/job_category/edit/{id}', [JobCategoryControllerForAdmin::class,'edit']);
Route::post('admin/job_category/update/{id}', [JobCategoryControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* FAQ - Admin */
/* --------------------------------------- */
Route::get('admin/faq/view', [FaqControllerForAdmin::class,'index'])->name('admin.faq.index');
Route::get('admin/faq/create', [FaqControllerForAdmin::class,'create'])->name('admin.faq.create');
Route::post('admin/faq/store', [FaqControllerForAdmin::class,'store'])->name('admin.faq.store');
Route::get('admin/faq/delete/{id}', [FaqControllerForAdmin::class,'destroy']);
Route::get('admin/faq/edit/{id}', [FaqControllerForAdmin::class,'edit']);
Route::post('admin/faq/update/{id}', [FaqControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Email Template - Admin */
/* --------------------------------------- */
Route::get('admin/email-template/view', [EmailTemplateController::class,'index'])->name('admin.email_template.index');
Route::get('admin/email-template/edit/{id}', [EmailTemplateController::class,'edit']);
Route::post('admin/email-template/update/{id}', [EmailTemplateController::class,'update']);


/* --------------------------------------- */
/* Social Media - Admin */
/* --------------------------------------- */
Route::get('admin/social-media/view', [SocialMediaItemController::class,'index'])->name('admin.social_media.index');
Route::get('admin/social-media/create', [SocialMediaItemController::class,'create'])->name('admin.social_media.create');
Route::post('admin/social-media/store', [SocialMediaItemController::class,'store'])->name('admin.social_media.store');
Route::get('admin/social-media/delete/{id}', [SocialMediaItemController::class,'destroy']);
Route::get('admin/social-media/edit/{id}', [SocialMediaItemController::class,'edit']);
Route::post('admin/social-media/update/{id}', [SocialMediaItemController::class,'update']);


/* --------------------------------------- */
/* Subscriber - Admin */
/* --------------------------------------- */
Route::get('admin/subscriber/view', [SubscriberController::class,'index'])->name('admin.subscriber.index');
Route::get('admin/subscriber/create', [SubscriberController::class,'create'])->name('admin.subscriber.create');
Route::post('admin/subscriber/store', [SubscriberController::class,'store'])->name('admin.subscriber.store');
Route::get('admin/subscriber/delete/{id}', [SubscriberController::class,'destroy']);
Route::get('admin/subscriber/send-email', [SubscriberController::class,'send_email'])->name('admin.subscriber.send_email');
Route::post('admin/subscriber/send-email-action', [SubscriberController::class,'send_email_action'])->name('admin.subscriber.send_email_action');


/* --------------------------------------- */
/* Coupon - Admin */
/* --------------------------------------- */
Route::get('admin/coupon/view', [CouponController::class,'index'])->name('admin.coupon.index');
Route::get('admin/coupon/create', [CouponController::class,'create'])->name('admin.coupon.create');
Route::post('admin/coupon/store', [CouponController::class,'store'])->name('admin.coupon.store');
Route::get('admin/coupon/delete/{id}', [CouponController::class,'destroy']);
Route::get('admin/coupon/edit/{id}', [CouponController::class,'edit']);
Route::post('admin/coupon/update/{id}', [CouponController::class,'update']);


/* --------------------------------------- */
/* Shipping - Admin */
/* --------------------------------------- */
Route::get('admin/shipping/view', [ShippingController::class,'index'])->name('admin.shipping.index');
Route::get('admin/shipping/create', [ShippingController::class,'create'])->name('admin.shipping.create');
Route::post('admin/shipping/store', [ShippingController::class,'store'])->name('admin.shipping.store');
Route::get('admin/shipping/delete/{id}', [ShippingController::class,'destroy']);
Route::get('admin/shipping/edit/{id}', [ShippingController::class,'edit']);
Route::post('admin/shipping/update/{id}', [ShippingController::class,'update']);


/* --------------------------------------- */
/* Product - Admin */
/* --------------------------------------- */
Route::get('admin/product/view', [ProductControllerForAdmin::class,'index'])->name('admin.product.index');
Route::get('admin/product/create', [ProductControllerForAdmin::class,'create'])->name('admin.product.create');
Route::post('admin/product/store', [ProductControllerForAdmin::class,'store'])->name('admin.product.store');
Route::get('admin/product/delete/{id}', [ProductControllerForAdmin::class,'destroy']);
Route::get('admin/product/edit/{id}', [ProductControllerForAdmin::class,'edit']);
Route::post('admin/product/update/{id}', [ProductControllerForAdmin::class,'update']);


/* --------------------------------------- */
/* Order - Admin */
/* --------------------------------------- */
Route::get('admin/order/view', [OrderControllerForAdmin::class,'index'])->name('admin.order.index');
Route::get('admin/order/create', [OrderControllerForAdmin::class,'create'])->name('admin.order.create');
Route::post('admin/order/store', [OrderControllerForAdmin::class,'store'])->name('admin.order.store');
Route::get('admin/order/detail/{id}', [OrderControllerForAdmin::class,'detail']);
Route::get('admin/order/invoice/{id}', [OrderControllerForAdmin::class,'invoice']);
Route::get('admin/order/delete/{id}', [OrderControllerForAdmin::class,'destroy']);

Route::get('admin/order/make-active/{id}', [OrderControllerForAdmin::class,'make_active']);
Route::get('admin/order/make-pending/{id}', [OrderControllerForAdmin::class,'make_pending']);


/* --------------------------------------- */
/* Customer - Admin */
/* --------------------------------------- */
Route::get('admin/customer/view', [CustomerController::class,'index'])->name('admin.customer.index');
Route::get('admin/customer/detail/{id}', [CustomerController::class,'detail']);
Route::get('admin/customer/make-active/{id}', [CustomerController::class,'make_active']);
Route::get('admin/customer/make-pending/{id}', [CustomerController::class,'make_pending']);
Route::get('admin/customer/delete/{id}', [CustomerController::class,'destroy']);

Route::get('admin/customer/edit/{id}', [CustomerController::class,'edit']);
Route::post('admin/customer/update/{id}', [CustomerController::class,'update']);


/* --------------------------------------- */
/* Footer Columns - Admin */
/* --------------------------------------- */
Route::get('admin/footer/view', [FooterColumnController::class,'index'])->name('admin.footer.index');
Route::get('admin/footer/create', [FooterColumnController::class,'create'])->name('admin.footer.create');
Route::post('admin/footer/store', [FooterColumnController::class,'store'])->name('admin.footer.store');
Route::get('admin/footer/delete/{id}', [FooterColumnController::class,'destroy']);
Route::get('admin/footer/edit/{id}', [FooterColumnController::class,'edit']);
Route::post('admin/footer/update/{id}', [FooterColumnController::class,'update']);

/* --------------------------------------- */
/* Counter - Admin */
/* --------------------------------------- */
Route::get('admin/counter/view', [CounterController::class,'index'])->name('admin.counter.index');
Route::get('admin/counter/create', [CounterController::class,'create'])->name('admin.counter.create');
Route::post('admin/counter/store', [CounterController::class,'store'])->name('admin.counter.store');
Route::get('admin/counter/delete/{id}', [CounterController::class,'destroy']);
Route::get('admin/counter/edit/{id}', [CounterController::class,'edit']);
Route::post('admin/counter/update/{id}', [CounterController::class,'update']);


/* --------------------------------------- */
/* Menu - Admin */
/* --------------------------------------- */
Route::get('admin/menu/view', [MenuController::class,'index'])->name('admin.menu.index');
Route::post('admin/menu/update', [MenuController::class,'update']);


/* --------------------------------------- */
/* Admin Users and Roles - Admin */
/* --------------------------------------- */
Route::get('admin/role/user', [RoleController::class,'user'])->name('admin.role.user');
Route::get('admin/role/user-create', [RoleController::class,'user_create'])->name('admin.role.user-create');
Route::post('admin/role/user-store', [RoleController::class,'user_store'])->name('admin.role.user-store');
Route::get('admin/role/user/edit/{id}', [RoleController::class,'user_edit']);
Route::post('admin/role/user/update/{id}', [RoleController::class,'user_update']);
Route::get('admin/role/user/edit/password/{id}', [RoleController::class,'user_edit_password']);
Route::post('admin/role/user/update/password/{id}', [RoleController::class,'user_update_password']);
Route::get('admin/role/user/delete/{id}', [RoleController::class,'user_destroy']);
Route::get('admin/role/index', [RoleController::class,'index'])->name('admin.role.index');
Route::get('admin/role/create', [RoleController::class,'create'])->name('admin.role.create');
Route::post('admin/role/store', [RoleController::class,'store'])->name('admin.role.store');
Route::get('admin/role/delete/{id}', [RoleController::class,'destroy']);
Route::get('admin/role/edit/{id}', [RoleController::class,'edit']);
Route::post('admin/role/update/{id}', [RoleController::class,'update']);
Route::get('admin/role/access-setup/{id}', [RoleController::class,'access_setup']);
Route::post('admin/role/access-setup-update/{id}', [RoleController::class,'access_setup_update']);


/* --------------------------------------- */
/* Role Permission - Admin */
/* --------------------------------------- */
Route::get('admin/role/permission/view', [Role_permissionControllerForAdmin::class,'index'])->name('admin.role.permission.index');
Route::get('admin/role/permission/create', [Role_permissionControllerForAdmin::class,'create'])->name('admin.role.permission.create');
Route::post('admin/role/permission/store', [Role_permissionControllerForAdmin::class,'store'])->name('admin.role.permission.store');
Route::get('admin/role/permission/delete/{id}', [Role_permissionControllerForAdmin::class,'destroy']);
Route::get('admin/role/permission/edit/{id}', [Role_permissionControllerForAdmin::class,'edit']);
Route::post('admin/role/permission/update/{id}', [Role_permissionControllerForAdmin::class,'update']);



Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/index', 'App/Http/Controllers/Front/HomeController@index');

Route::get('layouts/index', 'App/Http/Controllers/Front/HomeController@index');






Route::get('switch/language/{lang}', 'LocaleController@languageSwitch')->name('language.switch');
Route::get('delete/language', 'LocaleController@languageDelete')->name('language.delete');


// payment Gatway goes here
  // Payment Route
        Route::controller(PaymentControllerForAdmin::class)->prefix('admin/settings/pages/payment')->name('settings.')->group(function () {
            // Automatic Payment
            Route::get('/auto', 'autoPayment')->name('payment');
            Route::put('/', 'update')->name('payment.update');

            // Manual Payment
            Route::get('/manual', 'manualPayment')->name('payment.manual');
            Route::post('/manual/store', 'manualPaymentStore')->name('payment.manual.store');
            Route::get('/manual/{manual_payment}/edit', 'manualPaymentEdit')->name('payment.manual.edit');
            Route::put('/manual/{manual_payment}/update', 'manualPaymentUpdate')->name('payment.manual.update');
            Route::delete('/manual/{manual_payment}/delete', 'manualPaymentDelete')->name('payment.manual.delete');
            Route::get('/manual/status/change', 'manualPaymentStatus')->name('payment.manual.status');
        });


 Route::get('admin/setting/general/pages/payment/edit', [PaymentControllerForAdmin::class,'autoPayment'])->name('admin.general_setting.pages.payment');
Route::post('admin/setting/general/pages/payment/update', [PaymentControllerForAdmin::class,'settings.payment.update']);

