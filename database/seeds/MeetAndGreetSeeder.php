<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetAndGreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('meet_and_greets')->insert([
                'candidate_id' => $i,
                'company_id' => 8,
                'wsc_id' => 6,
                'guest_name' => 'Demo Guest Name'.$i,
                'number_of_guests' => rand(5,10),
                'service_name' => 'Demo service namwe'.$i,
                'arrival_date' => Carbon::now()->addDays(-5),
                'airline_name' => rand(1000,2000),
                'flight_number' => rand(1000,2000),
                'flight_time' => Carbon::now()->addDays(5),
                // 'transport_service' => 2,
                'passport_copy'  => null,
                'comments'  => 'Demo Comments',
                'active_status'  => 'Active',
                'created_by'  => 6,
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
