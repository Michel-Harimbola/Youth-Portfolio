<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\HistoricController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\AppointmentController;
use App\Models\Realisation;

//Accueil
Route::get('/', [IndexController::class, 'index']);

//Ajouter le feedback depuis l'accueil
Route::post('/feedback', [IndexController::class, 'AddFeedback']);

//Login 
Route::get('/Login', [LoginController::class, 'loginForm']);
Route::post('/Login/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function(){
    Route::get('/Login/Dashboard', [DashController::class, 'DashIndex']);
});

//Logout
Route::post('/Logout', [LoginController::class, 'logout'])->middleware('auth');


//User 
Route::get('/Login/Dashboard/User', [UserController::class, 'loadAllUser'])->name('User.index');
Route::get('/Login/Dashboard/User/AddUser', [UserController::class, 'UserForm']);
Route::post('/Login/Dashboard/User', [UserController::class, 'AddUser']);
Route::delete('/Login/Dashboard/User/{user}', [UserController::class, 'destroyUser']);
Route::get('/Login/Dashboard/User/{user}/EditUser', [UserController::class, 'EditUser']);
Route::put('/Login/Dashboard/User/{user}', [UserController::class, 'updateUser']);


//FAQ 
Route::get('/Login/Dashboard/FAQ', [FAQController::class, 'loadAllFAQ'])->name('FAQ.index');
Route::get('/Login/Dashboard/FAQ/AddFAQ', [FAQController::class, 'FAQForm']);
Route::post('/Login/Dashboard/FAQ', [FAQController::class, 'AddFAQ']);
Route::delete('/Login/Dashboard/FAQ/{faq}', [FAQController::class, 'destroyFAQ']);
Route::get('/Login/Dashboard/FAQ/{faq}/EditFAQ', [FAQController::class, 'EditFAQ']);
Route::put('/Login/Dashboard/FAQ/{faq}', [FAQController::class, 'updateFAQ']);


//Historic
Route::get('/Login/Dashboard/Historic', [HistoricController::class, 'loadAllHistoric'])->name('Historic.index');
Route::get('/Login/Dashboard/Historic/AddHistoric', [HistoricController::class, 'HistoricForm']);
Route::post('/Login/Dashboard/Historic', [HistoricController::class, 'AddHistoric']);
Route::delete('/Login/Dashboard/Historic/{Historic}', [HistoricController::class, 'destroyHistoric']);
Route::get('/Login/Dashboard/Historic/{Historic}/EditHistoric', [HistoricController::class, 'EditHistoric']);
Route::put('/Login/Dashboard/Historic/{Historic}', [HistoricController::class, 'updateHistoric']);


//Contact
Route::get('/Login/Dashboard/Contact', [ContactController::class, 'loadAllContact'])->name('Contact.index');
Route::get('/Login/Dashboard/Contact/AddContact', [ContactController::class, 'ContactForm']);
Route::post('/Login/Dashboard/Contact', [ContactController::class, 'AddContact']);
Route::delete('/Login/Dashboard/Contact/{contact}', [ContactController::class, 'destroyContact']);
Route::get('/Login/Dashboard/Contact/{contact}/EditContact', [ContactController::class, 'EditContact']);
Route::put('/Login/Dashboard/Contact/{contact}', [ContactController::class, 'updateContact']);


//Feedback 
Route::get('/Login/Dashboard/Feedback', [FeedBackController::class, 'loadAllFeedback'])->name('Feedback.index');
Route::get('/Login/Dashboard/Feedback/AddFeedback', [FeedBackController::class, 'FeedbackForm']);
Route::post('/Login/Dashboard/Feedback', [FeedBackController::class, 'AddFeedback']);
Route::delete('/Login/Dashboard/Feedback/{feedback}', [FeedBackController::class, 'destroyFeedback']);
Route::get('/Login/Dashboard/Feedback/{feedback}/EditFeedback', [FeedBackController::class, 'EditFeedback']);
Route::put('/Login/Dashboard/Feedback/{feedback}', [FeedBackController::class, 'updateFeedback']);


//Location
Route::get('/Login/Dashboard/Location', [LocationController::class, 'loadAllLocation'])->name('Location.index');
Route::get('/Login/Dashboard/Location/AddLocation', [LocationController::class, 'LocationForm']);
Route::post('/Login/Dashboard/Location', [LocationController::class, 'AddLocation']);
Route::delete('/Login/Dashboard/Location/{location}', [LocationController::class, 'destroyLocation']);
Route::get('/Login/Dashboard/Location/{location}/EditLocation', [LocationController::class, 'EditLocation']);
Route::put('/Login/Dashboard/Location/{location}', [LocationController::class, 'updateLocation']);


//Partenaire
Route::get('/Login/Dashboard/Partner', [PartnerController::class, 'loadAllPartner'])->name('Partner.index');
Route::get('/Login/Dashboard/Partner/AddPartner', [PartnerController::class, 'PartnerForm']);
Route::post('/Login/Dashboard/Partner', [PartnerController::class, 'AddPartner']);
Route::delete('/Login/Dashboard/Partner/{Partner}', [PartnerController::class, 'destroyPartner']);
Route::get('/Login/Dashboard/Partner/{partner}/EditPartner', [PartnerController::class, 'EditPartner']);
Route::put('/Login/Dashboard/Partner/{partner}', [PartnerController::class, 'updatePartner']);


//Realisation sur l'Accueil
Route::get('/Realisation', [RealisationController::class, 'RealisationAll']);

//Realisation
Route::get('/Login/Dashboard/Realisation', [RealisationController::class, 'loadAllRealisation'])->name('Realisation.index');
Route::get('/Login/Dashboard/Realisation/AddRealisation', [RealisationController::class, 'RealisationForm']);
Route::post('/Login/Dashboard/Realisation', [RealisationController::class, 'AddRealisation']);
Route::delete('/Login/Dashboard/Realisation/{Realisation}', [RealisationController::class, 'destroyRealisation']);
Route::get('/Login/Dashboard/Realisation/{Realisation}/EditRealisation', [RealisationController::class, 'EditRealisation']);
Route::put('/Login/Dashboard/Realisation/{Realisation}', [RealisationController::class, 'updateRealisation']);


//Donation sur l'Accueil
Route::post('/Donation', [DonationController::class, 'AddDonations']);
// Route::post('/Donation/AddDonation', [DonationController::class, 'AddDonations']);

//Donation 
Route::get('/Login/Dashboard/Donation', [DonationController::class, 'loadAllDonation'])->name('Donation.index');
Route::get('/Login/Dashboard/Donation/AddDonation', [DonationController::class, 'DonationForm']);
Route::post('/Login/Dashboard/Donation', [DonationController::class, 'AddDonation']);
Route::delete('/Login/Dashboard/Donation/{donation}', [DonationController::class, 'destroyDonation']);
Route::get('/Login/Dashboard/Donation/{donation}/EditDonation', [DonationController::class, 'EditDonation']);
Route::put('/Login/Dashboard/Donation/{donation}', [DonationController::class, 'updateDonation']);


//Statistics 
Route::get('/Login/Dashboard/Statistic', [StatisticController::class, 'loadAllStatistic'])->name('Statistic.index');
Route::get('/Login/Dashboard/Statistic/AddStatistic', [StatisticController::class, 'StatisticForm']);
Route::post('/Login/Dashboard/Statistic', [StatisticController::class, 'AddStatistic']);
Route::delete('/Login/Dashboard/Statistic/{statistic}', [StatisticController::class, 'destroyStatistic']);
Route::get('/Login/Dashboard/Statistic/{statistic}/EditStatistic', [StatisticController::class, 'EditStatistic']);
Route::put('/Login/Dashboard/Statistic/{statistic}', [StatisticController::class, 'updateStatistic']);


//Appointment 
Route::get('/Login/Dashboard/Appointment', [AppointmentController::class, 'loadAllAppointment'])->name('Appointment.index');
Route::get('/Login/Dashboard/Appointment/AddAppointment', [AppointmentController::class, 'AppointmentForm']);
Route::post('/Login/Dashboard/Appointment', [AppointmentController::class, 'AddAppointment']);
Route::delete('/Login/Dashboard/Appointment/{appointment}', [AppointmentController::class, 'destroyAppointment']);
Route::get('/Login/Dashboard/Appointment/{appointment}/EditAppointment', [AppointmentController::class, 'EditAppointment']);
Route::put('/Login/Dashboard/Appointment/{appointment}', [AppointmentController::class, 'updateAppointment']);