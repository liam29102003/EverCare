<?php

use App\Models\Pharmacy;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\StaffController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\LocalizaionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\user\PatientController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\PharmacyController;
use App\Http\Controllers\DoctorAuthController;
use App\Http\Controllers\DoctorController as doctor;
use App\Http\Controllers\receptionist\PrescriptionController;

// Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
//  Route::get('/login', [AdminController::class, 'loginForm']);
//  Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
// });

// Appointment
Route::get('/localization/{locale}', LocalizaionController::class)->name('localization');
Route::middleware(Localization::class)->group(function () {
    Route::get('/appointment/form', [AppointmentController::class, 'appFormPage'])->name('appointment.form');
    Route::post('/make/appointment', [AppointmentController::class, 'makeAppointment'])->name('appointment.make');
    Route::get('/patient/logout', [PatientController::class, 'logout'])->name('patient.logout');
    Route::post('/patient/login', [PatientController::class, 'loginPatient'])->name('patient.login');
    Route::get('instructions', [AppointmentController::class, 'instructions'])->name('instructions');
    Route::post('/oldpatient/appointment', [AppointmentController::class, 'oldAppointment'])->name('old.appointment.make');
    //
Route::get('/appointment/form',[AppointmentController::class,'appFormPage'])->name('appointment.form');
Route::post('/make/appointment',[AppointmentController::class, 'makeAppointment'])->name('appointment.make');
Route::get('/patient/logout',[PatientController::class,'logout'])->name('patient.logout');
Route::post('/patient/login',[PatientController::class,'loginPatient'])->name('patient.login');
Route::get('instructions',[AppointmentController::class,'instructions'])->name('instructions');
Route::post('/oldpatient/appointment',[AppointmentController::class,'oldAppointment'])->name('old.appointment.make');
Route::get('/patient/payment/{id}',[AppointmentController::class,'payment'])->name('patient.payment');
Route::get('/patient/profile',[PatientController::class,'profile'])->name('patient.appointment');

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/login', function () {
        return view('login');
    })->name('login_page');

    Route::get('/doctor/list', [DoctorController::class, 'doctorListPage'])->name('doctor#list');
    Route::get('/doctor/detailPage', [DoctorController::class, 'doctorDetailPage'])->name('doctor#detailPage');
    Route::get('admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
    Route::get('receptionist/login', [ReceptionistController::class, 'loginForm'])->name('receptionist.login');
    Route::post('receptionist/login', [ReceptionistController::class, 'store']);
    Route::get('doctor/login', [DoctorAuthController::class, 'loginForm'])->name('doctor.login');
    Route::post('doctor/login', [DoctorAuthController::class, 'store']);

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    // Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum,admin', 'verified']], function () {


        Route::prefix('doctor')->group(function () {
            Route::get('/list/', [DoctorController::class, 'index'])->name('doctor.list');
            Route::get('/add', [DoctorController::class, 'add'])->name('doctor.add');
            Route::post('/addDoctor', [DoctorController::class, 'addDoctor'])->name('doctor.store');
            Route::get('/details/{doctor}', [DoctorController::class, 'details'])->name('doctor.details');
            Route::get('/edit/{doctor}', [DoctorController::class, 'edit'])->name('doctor.edit');
            Route::post('/update/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
            Route::get('schedule/{doctor}', [DoctorController::class, 'schedule'])->name('doctor.schedule');
            Route::post('schedule/{doctor}', [DoctorController::class, 'storeSchedule'])->name('doctor.storeSchedule');
        });
        Route::prefix('staff')->group(function () {
            Route::get('/list', [staffController::class, 'index'])->name('staff.list');
            Route::get('/add', [StaffController::class, 'add'])->name('staff.add');
            // Route::post('/addDoctor',[DoctorController::class,'addDoctor'])->name('doctor.store');
            Route::get('/details/{staff}', [StaffController::class, 'details'])->name('staff.details');
            Route::get('/edit/{staff}', [StaffController::class, 'edit'])->name('staff.edit');
            // Route::post('/update/{doctor}',[DoctorController::class,'update'])->name('doctor.update');
        });
        Route::prefix('pharmacy')->group(function () {
            Route::get('/list', [PharmacyController::class, 'index'])->name('pharamcy.list');
            Route::get('/add', [PharmacyController::class, 'add'])->name('pharmacy.add');
            // Route::post('/addDoctor',[DoctorController::class,'addDoctor'])->name('doctor.store');
            Route::get('/details/{pharmacy}', [PharmacyController::class, 'details'])->name('pharmacy.details');
            Route::get('/edit/{pharmacy}', [PharmacyController::class, 'edit'])->name('pharmacy.edit');
            // Route::post('/update/{doctor}',[DoctorController::class,'update'])->name('doctor.update');
        });
        Route::prefix('finance')->group(function () {
            Route::get('/expense/add', [FinanceController::class, 'expenseAdd'])->name('finance.expense.add');
            Route::get('/expense/list', [FinanceController::class, 'expenseList'])->name('finance.expense.list');
            Route::get('/income/list', [FinanceController::class, 'incomeList'])->name('finance.income.list');

            // Route::get('/add',[PharmacyController::class,'add'])->name('finance.add');
            // Route::post('/addDoctor',[DoctorController::class,'addDoctor'])->name('doctor.store');
            // Route::get('/details/{pharmacy}',[PharmacyController::class,'details'])->name('finance.details');
            Route::get('/edit/{expense}', [FinanceController::class, 'edit'])->name('finance.expense.edit');
            // Route::post('/update/{doctor}',[DoctorController::class,'update'])->name('doctor.update');
            Route::get('/voucher/{id}', [FinanceController::class, 'voucher'])->name('finance.voucher');
        });
        Route::prefix('patient')->group(function () {
            Route::get('/list', [PatientController::class, 'list'])->name('patient.list');
            Route::get('/add', [PatientController::class, 'add'])->name('patient.add');
            Route::post('/addPatient', [PatientController::class, 'addPatient'])->name('patient.store');
            Route::get('/details/{patient}', [PatientController::class, 'details'])->name('patient.details');
            Route::get('/edit/{patient}', [PatientController::class, 'edit'])->name('patient.edit');
            Route::post('/update/{patient}', [PatientController::class, 'update'])->name('patient.update');
        });


        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
    Route::middleware(['auth:sanctum,receptionist', 'verified'])->get('/receptionist/dashboard', function () {
        return view('rec.dashboard');
    })->name('dashboard');
    Route::middleware(['auth:sanctum,doctor', 'verified'])->get('/doctor/dashboard', function () {
        return view('doctor.dashboard');
    })->name('dashboard');
    Route::prefix('receptionist')->middleware(['auth:sanctum,receptionist', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('rec.dashboard');
        })->name('dashboard');
        Route::get('/pharmacy', function () {
            return view('receptionist.pharmacy');
        })->name('pharmacy');
        Route::get('/cart', function () {
            return view('receptionist.cart');
        })->name('cart');
        Route::get('/prescription', [PrescriptionController::class, 'list'])->name('receptionist.prescription.list');
        Route::get('/prescription/detail/{medicalRecord}', [PrescriptionController::class, 'detail'])->name('receptionist.prescription.detail');
        Route::get('/voucher/{id}', [PrescriptionController::class, 'voucher'])->name('voucher');
        Route::get('/appointments', [AppointmentController::class, 'list'])->name('receptionist.appointment.list');
    });

    Route::get('/doctor/medicalrecord/add', [doctor::class, 'add'])->name('add.medicalrecord');
    Route::get('/doctor/medicalrecord/list', [doctor::class, 'list'])->name('list.medicalrecord');
    Route::get('/doctor/medicalrecord/detail/{medicalRecord}', [doctor::class, 'detail'])->name('detail.medicalrecord');
});
Route::prefix('receptionist')->middleware(['auth:sanctum,receptionist', 'verified'])->group(function () {
    Route::get('/dashboard',function () {
        return view('rec.dashboard');
    })->name('dashboard');
    Route::get('/pharmacy',function () {
        return view('receptionist.pharmacy');
    })->name('pharmacy');
    Route::get('/cart',function () {
        return view('receptionist.cart');
    })->name('cart');
    Route::get('/prescription',[PrescriptionController::class,'list'])->name('receptionist.prescription.list');
    Route::get('/prescription/detail/{medicalRecord}',[PrescriptionController::class,'detail'])->name('receptionist.prescription.detail');
    Route::get('/voucher/{id}',[PrescriptionController::class,'voucher'])->name('voucher');
    Route::get('/appointments',[AppointmentController::class,'list'])->name('receptionist.appointment.list');
    // email sending
    Route::get('/send/mail',[MailController::class,'index'])->name('receptionist.mail');
Route::get('/approve/appointmentPage',[AppointmentController::class,'approvePage'])->name('rec.approve.online');
});






