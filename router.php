<?php
/**
 * Simple PHP Router for Jahongir Travel Website
 * Using steampixel/simple-php-router
 */

// Autoload files using composer (located in parent directory)
require_once __DIR__ . '/../vendor/autoload.php';

// Use this namespace
use Steampixel\Route;

// Set the base path for XAMPP subdirectory
$basePath = '/jahongir-trave-001';

// ========================================
// ROUTE DEFINITIONS
// ========================================

// Homepage
Route::add('/', function() {
    include 'index.php';
}, 'get');

// About page
Route::add('/about', function() {
    include 'aboutus.php';
}, 'get');

// Contact page
Route::add('/contact', function() {
    include 'contact.php';
}, 'get');

// Thank you page
Route::add('/thank-you', function() {
    include 'thankyou.php';
}, 'get');

// Tours from Samarkand
Route::add('/tours/samarkand', function() {
    include 'tours-from-samarkand/index.php';
}, 'get');

Route::add('/tours/samarkand/city-tour', function() {
    include 'tours-from-samarkand/samarkand-city-tour.php';
}, 'get');

Route::add('/tours/samarkand/shahrisabz-day-trip', function() {
    include 'tours-from-samarkand/daytrip-shahrisabz.php';
}, 'get');

Route::add('/tours/samarkand/urgut-bazar-konigul-village', function() {
    include 'tours-from-samarkand/daytrip-urgut-bazar-konigul-village.php';
}, 'get');

Route::add('/tours/samarkand/hiking-amankutan-shahrisabz', function() {
    include 'tours-from-samarkand/hiking-amankutan-shahrisabz.php';
}, 'get');

Route::add('/tours/samarkand/hiking-amankutan', function() {
    include 'tours-from-samarkand/hiking-amankutan.php';
}, 'get');

Route::add('/tours/samarkand/nuratau-homestay-2-days', function() {
    include 'tours-from-samarkand/nuratau-homestay-2-days.php';
}, 'get');

Route::add('/tours/samarkand/nuratau-homestay-3-days', function() {
    include 'tours-from-samarkand/nuratau-homestay-3-days.php';
}, 'get');

Route::add('/tours/samarkand/nuratau-homestay-4-days', function() {
    include 'tours-from-samarkand/nuratau-homestay-4-days.php';
}, 'get');

Route::add('/tours/samarkand/yurt-camp-tour', function() {
    include 'tours-from-samarkand/yurt-camp-tour.php';
}, 'get');

// Tours from Bukhara
Route::add('/tours/bukhara', function() {
    include 'tours-from-bukhara/index.php';
}, 'get');

Route::add('/tours/bukhara/city-tour', function() {
    include 'tours-from-bukhara/bukhara-city-tour.php';
}, 'get');

Route::add('/tours/bukhara/nurata-2d-1n', function() {
    include 'tours-from-bukhara/bukhara-nurata-2d-1n.php';
}, 'get');

Route::add('/tours/bukhara/nuratau-3d-2n', function() {
    include 'tours-from-bukhara/bukhara-nuratau-3d-2n.php';
}, 'get');

Route::add('/tours/bukhara/nuratau-4d-3n', function() {
    include 'tours-from-bukhara/bukhara-nuratau-4d-3n.php';
}, 'get');

Route::add('/tours/bukhara/yurt-camp-samarkand', function() {
    include 'tours-from-bukhara/bukhara-yurt-camp-samarkand.php';
}, 'get');

// Tours from Khiva
Route::add('/tours/khiva/ancient-fortresses', function() {
    include 'tours-from-khiva/tour-from-khiva-ancient-fortresses.php';
}, 'get');

// Uzbekistan Tours
Route::add('/uzbekistan-tours', function() {
    include 'uzbekistan-tours/index.php';
}, 'get');

Route::add('/uzbekistan-tours/best-of-uzbekistan-10-days', function() {
    include 'uzbekistan-tours/best-of-uzbekistan-in-10-days.php';
}, 'get');

Route::add('/uzbekistan-tours/bike-tour', function() {
    include 'uzbekistan-tours/bike-tour-in-uzbekistan.php';
}, 'get');

Route::add('/uzbekistan-tours/golden-journey-samarkand', function() {
    include 'uzbekistan-tours/golden-journey-to-samarkand.php';
}, 'get');

Route::add('/uzbekistan-tours/seven-mysterious-nights', function() {
    include 'uzbekistan-tours/seven-mysterious-nights-uzbekistan.php';
}, 'get');

// Tajikistan Tours
Route::add('/tours/tajikistan/seven-lakes-tour', function() {
    include 'tajikistan-tours/seven-lakes-tajikistan-tour.php';
}, 'get');

// ========================================
// 404 ERROR HANDLING
// ========================================
Route::add('/.*', function() {
    http_response_code(404);
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Jahongir Travel</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background-color: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #d4af37; font-size: 3em; margin-bottom: 20px; }
        p { color: #666; font-size: 1.2em; margin-bottom: 30px; }
        a { color: #d4af37; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <p>The requested page could not be found.</p>
        <p><a href="/jahongir-trave-001/">← Return to Homepage</a></p>
    </div>
</body>
</html>';
}, 'get');

// ========================================
// RUN THE ROUTER
// ========================================

// Run the router with the correct base path
Route::run($basePath);
?>
