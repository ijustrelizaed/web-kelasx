<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\photo_piket;
use Illuminate\Support\Facades\Storage;

class DeleteExpiredPhoto extends Command
{
    // /**
    //  * The name and signature of the console command.
    //  *
    //  * @var string
    //  */
    protected $signature = 'app:delete-expired-photo';

    // /**
    //  * The console command description.
    //  *
    //  * @var string
    //  */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expired_photo = photo_piket::where('expired_at', Carbon::now()->addDay());

        foreach ($expired_photo as $delete) {
            if ($delete->photo) {
                Storage::delete('public/photo/' . $delete->photo);

            }

            $delete->delete();
        }

        return "tidak ada yang dihapus";
    }
}
