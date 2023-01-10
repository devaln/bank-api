<?php

namespace App\Console;

use App\Models\Employee;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $id = Employee::select('id')->get();
        $employees = Employee::all();
        foreach ($employees as $emp) {
            $emp->customer->current_balance = ($emp->customer->current_balance + $emp->salary);
            $emp->customer->update();
        }
        $schedule->command('Employee:update')
        ->everyMinute()
        ->runInBackground();
        dd($emp->customer->current_balance);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
