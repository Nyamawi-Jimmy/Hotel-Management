<?php


use App\Http\Controllers\BlocksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\RoomsController;


use App\Http\Controllers\HomeControllerUI;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
});


Auth::routes();



// -----------------------------USER INTERFACE----------------------------------------//

Route::get("/home",[HomeControllerUI::class,"show"])->middleware('auth')->name('home');
Route::get("about",[\App\Http\Controllers\AboutController::class,"show"])->name('about');
    Route::get("blog-grid",[\App\Http\Controllers\BlogController::class,"show"])->name('blog-grid');
Route::get("contact",[\App\Http\Controllers\ContactController::class,"show"])->name('contact');
Route::get("reservation", [App\Http\Controllers\BookingController::class, 'bookingAdd'])->middleware('auth')->name('reservation');
Route::get("property-single",[\App\Http\Controllers\PropertySingleController::class,"show"])->name('property-single');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');



// -----------------------------Admin----------------------------------------//
Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index1'])->middleware('auth')->name('adminhome');
Route::get('form/allbooking1', [App\Http\Controllers\BookingController::class, 'allbooking1'])->middleware('auth')->name('form/allbooking1');
Route::get('form/booking/edit/{bkg_id}', [App\Http\Controllers\BookingController::class, 'bookingEdit1']);
Route::get('form/booking/add1', [App\Http\Controllers\BookingController::class, 'bookingAdd1'])->middleware('auth')->name('form/booking/add1');
Route::post('form/booking/save1', [App\Http\Controllers\BookingController::class, 'saveRecord1'])->middleware('auth')->name('form/booking/save1');
Route::post('form/booking/update', [App\Http\Controllers\BookingController::class, 'updateRecord1'])->middleware('auth')->name('form/booking/update1');
Route::post('form/booking/delete', [App\Http\Controllers\BookingController::class, 'deleteRecord1'])->middleware('auth')->name('form/booking/delete1');
Route::get('form/allcustomers/page1', [App\Http\Controllers\CustomerController::class, 'allCustomers1'])->middleware('auth')->name('form/allcustomers/page1');
Route::get('form/allrooms/page1', [App\Http\Controllers\RoomsController::class, 'allrooms1'])->middleware('auth')->name('form/allrooms/page1');
Route::get('form/addroom/page1', [App\Http\Controllers\RoomsController::class, 'addRoom1'])->middleware('auth')->name('form/addroom/page1');
Route::get('form/allemployees/page1', [App\Http\Controllers\EmployeesController::class, 'allEmployees1'])->middleware('auth')->name('form/allemployees/page1');
Route::get('form/employees/leave1', [App\Http\Controllers\EmployeesController::class, 'Employeesleave1'])->middleware('auth')->name('form/employees/leave1');




// -----------------------------home----------------------------------------//
/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->middleware('auth')->name('profile');*/

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- booking -----------------------------//
Route::get('form/allbooking', [App\Http\Controllers\BookingController::class, 'allbooking'])->middleware('auth')->name('form/allbooking');
Route::get('form/booking/edit/{bkg_id}', [App\Http\Controllers\BookingController::class, 'bookingEdit']);
Route::get('form/booking/add', [App\Http\Controllers\BookingController::class, 'bookingAdd'])->middleware('auth')->name('form/booking/add');
Route::post('form/booking/save', [App\Http\Controllers\BookingController::class, 'saveRecord'])->middleware('auth')->name('form/booking/save');
Route::post('form/booking/update', [App\Http\Controllers\BookingController::class, 'updateRecord'])->middleware('auth')->name('form/booking/update');
Route::post('form/booking/delete', [App\Http\Controllers\BookingController::class, 'deleteRecord'])->middleware('auth')->name('form/booking/delete');

// ----------------------------- customers -----------------------------//
Route::get('form/allcustomers/page', [App\Http\Controllers\CustomerController::class, 'allCustomers'])->middleware('auth')->name('form/allcustomers/page');
Route::get('form/addcustomer/page', [App\Http\Controllers\CustomerController::class, 'addCustomer'])->middleware('auth')->name('form/addcustomer/page');
Route::post('form/addcustomer/save', [App\Http\Controllers\CustomerController::class, 'saveCustomer'])->middleware('auth')->name('form/addcustomer/save');
Route::get('form/customer/edit/{bkg_customer_id}', [App\Http\Controllers\CustomerController::class, 'updateCustomer']);
Route::post('form/customer/update', [App\Http\Controllers\CustomerController::class, 'updateRecord'])->middleware('auth')->name('form/customer/update');
Route::post('form/customer/delete', [App\Http\Controllers\CustomerController::class, 'deleteRecord'])->middleware('auth')->name('form/customer/delete');

// ----------------------------- rooms -----------------------------//
Route::get('form/allrooms/page', [App\Http\Controllers\RoomsController::class, 'allrooms'])->middleware('auth')->name('form/allrooms/page');
Route::get('form/addroom/page', [App\Http\Controllers\RoomsController::class, 'addRoom'])->middleware('auth')->name('form/addroom/page');
Route::get('form/room/edit/{bkg_room_id}', [App\Http\Controllers\RoomsController::class, 'editRoom']);
Route::post('form/room/save', [App\Http\Controllers\RoomsController::class, 'saveRecordRoom'])->middleware('auth')->name('form/room/save');
Route::post('form/room/delete', [App\Http\Controllers\RoomsController::class, 'deleteRecord'])->middleware('auth')->name('form/room/delete');
Route::post('form/room/update', [App\Http\Controllers\RoomsController::class, 'updateRecord'])->middleware('auth')->name('form/room/update');



// ----------------------------- Employees -----------------------------//
Route::get('form/allemployees/page', [App\Http\Controllers\EmployeesController::class, 'allEmployees'])->middleware('auth')->name('form/allemployees/page');
Route::get('form/employees/add', [App\Http\Controllers\EmployeesController::class, 'addEmployees'])->middleware('auth')->name('form/employees/add');
Route::get('form/employees/leave', [App\Http\Controllers\EmployeesController::class, 'Employeesleave'])->middleware('auth')->name('form/employees/leave');
Route::get('form/employees/holiday', [App\Http\Controllers\EmployeesController::class, 'Employeesholiday'])->middleware('auth')->name('form/employees/holiday');
Route::get('form/employees/attendance', [App\Http\Controllers\EmployeesController::class, 'Employeesattendance'])->middleware('auth')->name('form/employees/attendance');
Route::post('form/employees/save', [App\Http\Controllers\EmployeesController::class, 'saveRecord'])->middleware('auth')->name('form/employees/save');
Route::get('form/employees/edit/{emply_id}', [App\Http\Controllers\EmployeesController::class, 'employeeEdit']);
Route::post('form/employees/update', [App\Http\Controllers\EmployeesController::class, 'updateRecord'])->middleware('auth')->name('form/employees/update');
Route::post('form/employees/delete', [App\Http\Controllers\EmployeesController::class, 'deleteRecord'])->middleware('auth')->name('form/employees/delete');

// ----------------------------- Leave -----------------------------//
Route::get('form/employees/addleave', [App\Http\Controllers\LeavesController::class, 'addLeavess'])->middleware('auth')->name('form/employees/addleave');
Route::post('form/leave/save', [App\Http\Controllers\LeavesController::class, 'saveRecord'])->middleware('auth')->name('form/leave/save');


// ----------------------------- Accounts -----------------------------//
Route::get('form/accounts/invoice', [App\Http\Controllers\AccountsController::class, 'allInvoices'])->middleware('auth')->name('form/accounts/invoice');
Route::get('form/accounts/payments', [App\Http\Controllers\AccountsController::class, 'allPayments'])->middleware('auth')->name('form/accounts/payments');
Route::get('form/accounts/expenses', [App\Http\Controllers\AccountsController::class, 'allExpenses'])->middleware('auth')->name('form/accounts/expenses');

// ----------------------------- Payroll -----------------------------//
Route::get('form/payroll/salary', [App\Http\Controllers\PayrollController::class, 'allSalary'])->middleware('auth')->name('form/payroll/salary');
Route::get('form/payroll/payslip', [App\Http\Controllers\PayrollController::class, 'allPayslips'])->middleware('auth')->name('form/payroll/payslip');



Route::get('/admin', function () {
    return view('dashboard.admin');
})->name('admin');


Route::get("about", [\App\Http\Controllers\AboutController::class, "show"])->name('about');
Route::get("property-grid", [\App\Http\Controllers\PropertiesController::class, "show"])->name('property');
Route::get("blog-grid", [\App\Http\Controllers\BlogController::class, "show"])->name('blog-grid');
Route::get("blog-single", [\App\Http\Controllers\BlogSingleController::class, "show"])->name('blog-single');
Route::get("property-single", [\App\Http\Controllers\PropertySingleController::class, "show"])->name('property-single');
Route::get("agent-grid", [\App\Http\Controllers\AgentGridController::class, "show"])->name('agents-grid');
Route::get("agent-single", [\App\Http\Controllers\AgentSingleController::class, "show"])->name('agent-single');
Route::get("contact", [\App\Http\Controllers\ContactController::class, "show"])->name('contact');
Route::post("message", [\App\Http\Controllers\MessageController::class, "post"])->name('message');
Route::post("comment", [\App\Http\Controllers\CommentController::class, "post"])->name('comment');
Route::get("reservation", [\App\Http\Controllers\ReservationController::class, "show"])->name('reservation');

//Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('user-profile', [ProfileController::class, 'view'])->name('user-profile');
Route::get('tables', function () {
    return view('pages.tables');
})->name('tables');
Route::get('billing', function () {
    return view('pages.billing');
})->name('billing');
Route::get('notifications', function () {
    return view('pages.notifications');
})->name('notifications');
Route::get('static-sign-in', function () {
    return view('pages.static-sign-in');
})->name('static-sign-in');
Route::get('static-sign-up', function () {
    return view('pages.static-sign-up');
})->name('static-sign-up');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::get('verify', function () {
    return view('sessions.password.verify');
})->middleware('guest')->name('verify');

Route::middleware(['auth:sanctum', 'role:Admin'])->group(function () {
    Route::get('user-management', [UsersController::class, 'createUsers'])->name('user-management');
    Route::get('getAllUsers', [UsersController::class, 'getAllUsers'])->name('allUsers');
    Route::post('/save-user', [UsersController::class, 'store'])->name('saveUser');
    Route::get('/user/{id}/find', [UsersController::class, 'findUser'])->name('user.find');
    Route::get('/user/{id}/view', [UsersController::class, 'view'])->name('user.view');
    Route::put('/user/{id}/update', [UsersController::class, 'update'])->name('user.update');
    Route::get('/user/{id}/delete', [UsersController::class, 'delete'])->name('user.delete');


    Route::get("property", [PropertiesController::class, "show"]);
    Route::get('getAllProperties', [PropertiesController::class, 'getAllProperties'])->name('allProperties');
    Route::post('/save-property', [PropertiesController::class, 'store'])->name('saveProperty');
    Route::get('/property/{id}/find', [PropertiesController::class, 'findProperty'])->name('property.find');
    Route::get('/property/{id}/view', [PropertiesController::class, 'view'])->name('property.view');
    Route::put('/property/{id}/update', [PropertiesController::class, 'update'])->name('property.update');
    Route::get('/property/{id}/delete', [PropertiesController::class, 'delete'])->name('property.delete');

    Route::get('blocks', [BlocksController::class, 'index'])->name('blocks');
    Route::get('getAllBlocks', [BlocksController::class, 'getAllBlocks'])->name('allBlocks');
    Route::post('/save-block', [BlocksController::class, 'store'])->name('saveBlock');
    Route::get('/block/{id}/find', [BlocksController::class, 'findBlock'])->name('block.find');
    Route::get('/block/{id}/view', [BlocksController::class, 'view'])->name('block.view');
    Route::put('/block/{id}/update', [BlocksController::class, 'update'])->name('block.update');
    Route::get('/block/{id}/delete', [BlocksController::class, 'delete'])->name('block.delete');

    Route::get('rooms', [RoomsController::class, 'create'])->name('rooms');
    Route::get('list', [RoomsController::class, 'list'])->name('list');
    Route::get('/room/{id}/find', [RoomsController::class, 'find'])->name('find');
    Route::put('/room/{id}/update', [RoomsController::class, 'update'])->name('update');
    Route::get('/room/{id}', [RoomsController::class, 'edit'])->name('edit');
    Route::get('/create', [RoomsController::class, 'create'])->name('create');
    Route::post('/create', [RoomsController::class, 'store'])->name('store');
    Route::get('/room/{id}/delete', [RoomsController::class, 'destroy'])->name('delete');

});
Route::middleware(['auth:sanctum', 'role:Moderator'])->group(function () {
    Route::get('blocks', [BlocksController::class, 'index'])->name('blocks');
    Route::get('getAllBlocks', [BlocksController::class, 'getAllBlocks'])->name('allBlocks');
    Route::post('/save-block', [BlocksController::class, 'store'])->name('saveBlock');
    Route::get('/block/{id}/find', [BlocksController::class, 'findBlock'])->name('block.find');
    Route::get('/block/{id}/view', [BlocksController::class, 'view'])->name('block.view');
    Route::put('/block/{id}/update', [BlocksController::class, 'update'])->name('block.update');
    Route::get('/block/{id}/delete', [BlocksController::class, 'delete'])->name('block.delete');

    Route::get('rooms', [RoomsController::class, 'create'])->name('rooms');
    Route::get('list', [RoomsController::class, 'list'])->name('list');
    Route::get('/room/{id}/find', [RoomsController::class, 'find'])->name('find');
    Route::put('/room/{id}/update', [RoomsController::class, 'update'])->name('update');
    Route::get('/room/{id}', [RoomsController::class, 'edit'])->name('edit');
    Route::get('/create', [RoomsController::class, 'create'])->name('create');
    Route::post('/create', [RoomsController::class, 'store'])->name('store');
    Route::get('/room/{id}/delete', [RoomsController::class, 'destroy'])->name('delete');
});

