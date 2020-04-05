<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

include_once "route_slugs.php";
//routes
$r_admin = $custom_slug_array["admin"];

$route['default_controller'] = 'fabelio_controller';

$route["fabelio"] = 'fabelio_controller/index';
$route["fabelio/result"] = 'fabelio_controller/result';
$route["fabelio/list"] = 'fabelio_controller/list';
$route["fabelio/list"] = 'fabelio_controller/list';
$route["fabelio/detail"] = 'fabelio_controller/detail';

/*
 *
 * ADMIN ROUTES
 *
 */
//login

/*
*
* API ROUTES
*
*/
$route["/api_1"] = 'api/v1';
$route["/api_2"] = 'api/v2';

/*
*-------------------------------------------------------------------------------------------------
* DYNAMIC ROUTES
*-------------------------------------------------------------------------------------------------
*/
require_once(BASEPATH . 'database/DB.php');
$db =& DB();

        // $route[$key] = "home_controller/index";
        // $route[$key . '/error-404'] = 'home_controller/error_404';
        // //auth routes
        // $route[$key . '/logout'] = 'common_controller/logout';
        // $route[$key . '/register'] = 'auth_controller/register';
        // $route[$key . '/forgot-password'] = 'auth_controller/forgot_password';
        // $route[$key . '/reset-password'] = 'auth_controller/reset_password';
        // $route[$key . '/confirm'] = 'auth_controller/confirm_email';
        // //profile routes
        // $route[$key . '/profile/(:any)'] = 'profile_controller/profile/$1';
        // $route[$key . '/favorites/(:any)'] = 'profile_controller/favorites/$1';
        // $route[$key . '/favorites'] = 'home_controller/guest_favorites/$1';
        // $route[$key . '/followers/(:any)'] = 'profile_controller/followers/$1';
        // $route[$key . '/following/(:any)'] = 'profile_controller/following/$1';
        // $route[$key . '/reviews/(:any)'] = 'profile_controller/reviews/$1';
        // /*settings*/
        // $route[$key . '/settings'] = 'profile_controller/update_profile';
        // $route[$key . '/settings/update-profile'] = 'profile_controller/update_profile';
        // $route[$key . '/settings/shop-settings'] = 'profile_controller/shop_settings';
        // $route[$key . '/settings/contact-informations'] = 'profile_controller/contact_informations';
        // $route[$key . '/settings/social-media'] = 'profile_controller/social_media';
        // $route[$key . '/settings/change-password'] = 'profile_controller/change_password';
        // $route[$key . '/settings/shipping-address'] = 'profile_controller/shipping_address';

        // $route[$key . '/contact'] = 'home_controller/contact';
        // $route[$key . '/members'] = 'home_controller/members';
        // /*product routes*/
        // $route[$key . '/start-selling'] = 'product_controller/start_selling';
        // $route[$key . '/sell-now'] = 'product_controller/add_product';
        // $route[$key . '/sell-now/(:num)'] = 'product_controller/edit_draft/$1';
        // $route[$key . '/sell-now/product-details/(:num)'] = 'product_controller/edit_product_details/$1';
        // $route[$key . '/sell-now/edit-product/(:num)'] = 'product_controller/edit_product/$1';
        // $route[$key . '/search'] = 'home_controller/search';
        // $route[$key . '/products'] = 'product_controller/products';
        // $route[$key . '/drafts'] = 'profile_controller/drafts';
        // $route[$key . '/downloads'] = 'profile_controller/downloads';
        // $route[$key . '/pending-products'] = 'profile_controller/pending_products';
        // $route[$key . '/hidden-products'] = 'profile_controller/hidden_products';
        // /*promote product routes*/
        // $route[$key . '/promote-product/pricing/(:num)'] = 'promote_controller/pricing/$1';
        // $route[$key . '/promote-product/payment-method'] = 'promote_controller/payment_method';
        // $route[$key . '/promote-product/payment'] = 'promote_controller/payment';
        // $route[$key . '/promote-product/completed'] = 'promote_controller/completed';
        // /*blog routes*/
        // $route[$key . '/blog'] = 'home_controller/blog';
        // $route[$key . '/blog/(:any)'] = 'home_controller/category/$1';
        // $route[$key . '/blog/tag/(:any)'] = 'home_controller/tag/$1';
        // $route[$key . '/blog/(:any)/(:any)'] = 'home_controller/post/$1/$2';

        // $route[$key . '/category/(:any)'] = 'product_controller/category/$1';
        // $route[$key . '/category/(:any)/(:any)'] = 'product_controller/subcategory/$1/$2';
        // $route[$key . '/category/(:any)/(:any)/(:any)'] = 'product_controller/third_category/$1/$2/$3';

        // $route[$key . '/messages'] = 'message_controller/messages';
        // $route[$key . '/messages/conversation/(:num)'] = 'message_controller/conversation/$1';
        // /*paypal routes*/
        // $route[$key . '/execute-paypal-payment'] = 'product_controller/execute_paypal_payment';

        // $route[$key . '/cron/update-sitemap'] = 'cron_controller/update_sitemap';
        // $route[$key . '/unsubscribe'] = 'home_controller/unsubscribe';
        // /*rss feeds*/
        // $route[$key . '/rss-feeds'] = 'rss_controller/rss_feeds';
        // $route[$key . '/rss/latest-products'] = 'rss_controller/latest_products';
        // $route[$key . '/rss/promoted-products'] = 'rss_controller/promoted_products';
        // $route[$key . '/rss/category/(:any)'] = 'rss_controller/rss_by_category/$1';
        // $route[$key . '/rss/seller/(:any)'] = 'rss_controller/rss_by_seller/$1';
        // /*cart*/
        // $route[$key . '/cart'] = 'cart_controller/cart';
        // $route[$key . '/cart/shipping'] = 'cart_controller/shipping';
        // $route[$key . '/cart/payment-method'] = 'cart_controller/payment_method';
        // $route[$key . '/cart/payment'] = 'cart_controller/payment';
        // $route[$key . '/add-to-cart'] = 'cart_controller/add_to_cart';
        // $route[$key . '/order-completed/(:num)'] = 'cart_controller/order_completed/$1';
        // /*orders*/
        // $route[$key . '/orders'] = 'order_controller/orders';
        // $route[$key . '/orders/completed-orders'] = 'order_controller/completed_orders';
        // $route[$key . '/order/(:num)'] = 'order_controller/order/$1';
        // /*sales*/
        // $route[$key . '/sales'] = 'order_controller/sales';
        // $route[$key . '/sales/completed-sales'] = 'order_controller/completed_sales';
        // $route[$key . '/sale/(:num)'] = 'order_controller/sale/$1';
        // /*earnings*/
        // $route[$key . '/earnings'] = 'earnings_controller/earnings';
        // $route[$key . '/set-payout-account'] = 'earnings_controller/set_payout_account';
        // $route[$key . '/payouts'] = 'earnings_controller/payouts';
        // $route[$key . '/(:any)'] = 'home_controller/any/$1';
$route['(:any)'] = 'home_controller/any/$1';
