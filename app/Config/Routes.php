<?php

use CodeIgniter\Router\RouteCollection;


// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('IAsettings');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.




/**
 * @var RouteCollection $routes  
 */
$routes->get('/', 'IAlanding::index');


$routes->get('home', 'IAhome::home');

$routes->add('register', 'IAhome::register');
$routes->add('login', 'IAhome::login');

$routes->add('google', 'IAhome::google');
$routes->get('auth/callback', 'IAhome::callback');

$routes->add('facebook', 'IAhome::facebook');
$routes->get('facebook-callback', 'IAhome::facebookcallback');

$routes->add('myaccount', 'IAhome::myaccount');
$routes->add('signout', 'IAhome::signout');
$routes->add('forgotpassword', 'IAhome::forgotpassword');
$routes->add('confirmpassword/(:any)', 'IAhome::confirmpassword/$1');

$routes->add('tools', 'IAtoolsagents::allTools');
$routes->add('tools/(:any)', 'IAtoolsagents::allTools/$1');
$routes->add('toolsload/(:any)', 'IAtoolsagents::loadTools/$1');
$routes->add('tools-details/(:any)', 'IAtoolsagents::singleTools/$1');

$routes->add('subscription', 'IAhome::subscription');
$routes->add('buysubscribe/(:any)/(:any)', 'IAhome::buysubscribe/$1/$2');
$routes->add('payment-cancel', 'IAhome::paymentCancel');
$routes->add('payment-success', 'IAhome::paymentSuccess');


$routes->add('paypalpay', 'IApaypal::paypalpay');
$routes->add('payment_process', 'IApaypal::payment_process');

$routes->add('phone', 'IAhome::phoneNumber');
$routes->add('changepassword', 'IAhome::changepassword');

$routes->add('contact', 'IAhome::contact');

$routes->add('how-it-works', 'IAtoolsagents::howitworks');
$routes->add('compare', 'IAtoolsagents::compare');
$routes->add('success-stories', 'IAtoolsagents::successStories');
$routes->add('FAQ', 'IAtoolsagents::FAQ');

$routes->add('terms-use', 'IAtoolsagents::TermsUse');
$routes->add('privacy-policy', 'IAtoolsagents::PrivacyPolicy');
$routes->add('success-stories-details/(:any)', 'IAtoolsagents::singlesuccessStories/$1');

$routes->add('whats-new', 'IAtoolsagents::whatsNew');
$routes->add('getting-started', 'IAtoolsagents::gettingStarted');
$routes->add('plans-billing', 'IAtoolsagents::plansBilling');
$routes->add('account-settings', 'IAtoolsagents::accountSettings');
$routes->add('features-faq', 'IAtoolsagents::featuresFaq');
$routes->add('troubleshooting', 'IAtoolsagents::Troubleshooting');
$routes->add('business-support', 'IAtoolsagents::businessSupport');
$routes->add('integrations', 'IAtoolsagents::Integrations');

$routes->add('what-articles', 'IAtoolsagents::whatArticles');
$routes->add('helpful-articles', 'IAtoolsagents::helpfulArticles');
$routes->add('cancel-articles', 'IAtoolsagents::cancelArticles');
$routes->add('api-articles', 'IAtoolsagents::apiArticles');

// app/Config/Routes.php

/*$routes->get('google-login', 'AuthController::googleLogin');
$routes->get('google-callback', 'AuthController::googleCallback');
*/


/*-admin-*/
$routes->get('innova-admin', 'IAsettings::login');
$routes->add('innova-admin/login', 'IAsettings::login');
$routes->add('innova-admin/logout', 'IAsettings::logout');

$routes->add('innova-admin/dashboard', 'IAdasgboard::dashboard');
$routes->add('innova-admin/changepassword', 'IAdasgboard::changepassword');

$routes->add('innova-admin/contact-message', 'IAdasgboard::contactslist');
$routes->add('innova-admin/contact-information', 'IAdasgboard::contactsDetails');

$routes->add('innova-admin/category', 'IAprojetcs::category');
$routes->add('innova-admin/category-add', 'IAprojetcs::categoryAdd');
$routes->add('innova-admin/category-edit/(:any)', 'IAprojetcs::categoryUpdate/$1');

$routes->add('innova-admin/prompt-questions', 'IAprojetcs::promptQuestion');
$routes->add('innova-admin/prompt-questions-add', 'IAprojetcs::promptQuestionAdd');
$routes->add('innova-admin/prompt-questions-edit/(:any)', 'IAprojetcs::promptQuestionUpdate/$1');

$routes->add('innova-admin/testimonials', 'IAcms::testimonials');
$routes->add('innova-admin/testimonials-add', 'IAcms::testimonialsAdd');
$routes->add('innova-admin/testimonials-edit/(:any)', 'IAcms::testimonialsUpdate/$1');

$routes->add('innova-admin/alluser', 'IAcms::alluser');
$routes->add('innova-admin/member-view/(:any)', 'IAcms::memberView/$1');
$routes->add('innova-admin/all-subscription', 'IAcms::allSubscription');
$routes->add('innova-admin/subscription-update/(:any)', 'IAcms::subscriptionUpdate/$1');

$routes->add('innova-admin/faq', 'IAcms::allfaq');
$routes->add('innova-admin/faq-add', 'IAcms::faqAdd');
$routes->add('innova-admin/faq-edit/(:any)', 'IAcms::faqUpdate/$1');

$routes->add('innova-admin/professionals-teams', 'IAcms::allProfessionalsTeams');
$routes->add('innova-admin/professionals-teams-add', 'IAcms::ProfessionalsTeamsAdd');
$routes->add('innova-admin/professionals-teams-edit/(:any)', 'IAcms::ProfessionalsTeamsUpdate/$1');

$routes->add('innova-admin/services-highlights', 'IAcms::allServicesHighlights');
$routes->add('innova-admin/services-highlights-add', 'IAcms::ServicesHighlightsAdd');
$routes->add('innova-admin/services-highlights-edit/(:any)', 'IAcms::ServicesHighlightsUpdate/$1');

$routes->add('innova-admin/banner-update', 'IAcms::bannerUpdate');
$routes->add('innova-admin/services-highlights-update', 'IAcms::highlightsUpdate');
$routes->add('innova-admin/revolutionizing', 'IAcms::revolutionizingUpdate');
$routes->add('innova-admin/about-us', 'IAcms::aboutUpdate');

$routes->add('innova-admin/how-it-works-marketing', 'IAcms::hiwMarketingUpdate');
$routes->add('innova-admin/how-it-works-optimized', 'IAcms::hiwOptimizedUpdate');

