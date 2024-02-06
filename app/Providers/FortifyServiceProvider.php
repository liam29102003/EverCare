<?php

namespace App\Providers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;

use App\Actions\Fortify\AttemptToAuthenticate; // add new line
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
// use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\Receptionist;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->when([AdminController::class,AttemptToAuthenticate::class,RedirectIfTwoFactorAuthenticatable::class])
        // ->needs(StatefulGuard::class)
        // ->give(function (){
        //     return Auth::guard('admin');
        // });
        // // $this->app->when([ReceptionistController::class,AttemptToAuthenticate::class,RedirectIfTwoFactorAuthenticatable::class])
        // // ->needs(StatefulGuard::class)
        // // ->give(function (){
        // //     return Auth::guard('receptionist');
        // // });
        $this->app->when([
            AdminController::class,
            ReceptionistController::class, // Add StaffController to the list
            AttemptToAuthenticate::class,
            RedirectIfTwoFactorAuthenticatable::class
        ])
        ->needs(StatefulGuard::class)
        ->give(function () {
            // Check the current route or other conditions to determine which guard to use
            if (request()->is('receptionist/*')) {
                return Auth::guard('receptionist');
            } else {
                return Auth::guard('admin');
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
