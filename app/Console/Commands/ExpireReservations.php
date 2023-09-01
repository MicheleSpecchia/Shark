<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Reservation;
use Carbon\Carbon;

class ExpireReservations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire reservations that have passed their expiry date';
   
   public function __construct()
   {
       parent::__construct();
   }

   public function handle()
   {
       $now = Carbon::now();

       $expiredReservations = Reservation::where('expiry_date', '<=', $now)->get();

       foreach ($expiredReservations as $reservation) {
           $reservation->delete();
           // Aggiorna la disponibilità delle fasce orarie se necessario
       }

       $this->info(count($expiredReservations) . ' prenotazioni scadute sono state rimosse.');
   }
    
}
