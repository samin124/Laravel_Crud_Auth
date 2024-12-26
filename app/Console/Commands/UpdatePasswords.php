<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdatePasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash plain-text passwords in the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Replace 'users' with your actual database table name
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            // Check if password needs to be rehashed
            if (!Hash::needsRehash($user->password)) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => Hash::make($user->password)]);
            }
        }

        $this->info('Passwords updated successfully!');
        return Command::SUCCESS;
    }
}
