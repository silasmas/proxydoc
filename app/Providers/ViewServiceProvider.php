<?php
 
namespace App\Providers;

use App\Models\abonnement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\service;
 
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    
        View::composer('pages.*', function ($view) {
           $service=service::all();
        //   
          
           $acte=service::with('acte')->get();
           $abonnement=abonnement::with('service')->get();

// dd($abonnement->push($acte));

           $avocatBy = $abonnement->groupBy(function ($member) {
                   return $member;
               })->all();

        //    $abonnement=abonnement::with('service')
        //    ->selectRaw('services.*,abonnements.*')
        //    ->join('service_abonnements','service_abonnements.abonnement_id','abonnements.id')
        //    ->join('services','services.id','service_abonnements.service_id')
        //    ->join('acte_services','acte_services.service_id','services.id')
        //    ->join('actes','actes.id','acte_services.acte_id')
        //    ->get();
            $c=collect($avocatBy);
             //  dd($avocatBy);
           $view->with('abonnement',$avocatBy);
           $view->with('service',$service);

        }); 
    }
}