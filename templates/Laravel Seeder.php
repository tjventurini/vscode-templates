{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Seeder.')}}
<?php

namespace {{=$.NAMESPACE}};

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class {{=$.NAME}} extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin user
        User::updateOrCreate([
            'email' => 'admin@admin.com'
        ], [
            'name' => 'Admin',
            'password' => Hash::make('Password123$'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
