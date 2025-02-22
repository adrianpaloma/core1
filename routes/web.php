<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Stripe\Stripe;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/try', function(){
    return view('InventoryManagement.LowStockAlerts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//View Controller

Route::get("VehicleReservation", function () {
    return view("Orders.VehicleReservation"); 
})->name('VehicleReservation');
Route::get("ManageReturns", function () {
    return view("Orders.ManageReturns"); 
})->name('ManageReturns');
Route::get("AddNewProducts", function () {
    return view("Products.AddNewProducts"); 
})->name('AddNewProducts');
Route::get("CategoryManagement", function () {
    return view("Products.CategoryManagement"); 
})->name('CategoryManagement');
Route::get("StocksOverview", function () {
    return view("InventoryManagement.StocksOverview"); 
})->name('StocksOverview');
Route::get("ManageSuppliers", function () {
    return view("InventoryManagement.ManageSuppliers"); 
})->name('ManageSuppliers');
Route::get("LowStockAlerts", function () {
    return view("InventoryManagement.LowStockAlerts"); 
})->name('LowStockAlerts');
Route::get("TransactionHistory", function () {
    return view("PaymentProcessing.TransactionHistory"); 
})->name('TransactionHistory');
Route::get("Refunds", function () {
    return view("PaymentProcessing.Refunds"); 
})->name('Refunds');
Route::get("PayoutRequest", function () {
    return view("PaymentProcessing.PayoutRequest"); 
})->name('PayoutRequest');
Route::get("SalesReport", function () {
    return view("ReportAnalytics.SalesReport"); 
})->name('SalesReport');
Route::get("InventoryReports", function () {
    return view("ReportAnalytics.InventoryReports"); 
})->name('InventoryReports');


//Subscription Controller
Route::get('/subscription_plan', [SubscriptionController::class, 'subscription_plan'])->name('subscription_plan');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

//Product Controller
Route::get("/ProductList", [ProductController::class, 'index'])->name('ProductList');
Route::post('/product_store', [ProductController::class, 'store'])->name('product_store');

//Order Controller
Route::get("OrderList", [OrderController::class, 'index'])->name('OrderList');
Route::get("OrderDetails/{order_id}", [OrderController::class, 'order_detail'])->name('OrderDetails');