<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Mems;
use DB;

class DailyMemsStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mems-status:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Mems Status To Disable Or Enable Existing Mems List';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $setting_day = setting()['mems_status_day'];
        $now_day = Carbon::now()->format("l");
        if($setting_day == $now_day)
        {
            DB::table('mems')->update(['is_active' => '0']);
        }else{
            DB::table('mems')->update(['is_active' => '1']);
        }
        $this->info('Mems Status Updated Successfully.');
    }
}
