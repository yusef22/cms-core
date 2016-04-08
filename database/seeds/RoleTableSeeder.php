<?php



use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleTableSeeder extends Seeder{

    public function run()
    {

        if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }

        DB::table('roles')->delete();

        Role::create([
            'id'            => 1,
            'name'          => 'Root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);

        Role::create([
            'id'            => 2,
            'name'          => 'Administrator',
            'description'   => 'Full access to create, edit, and update companies, and orders.'
        ]);

        Role::create([
            'id'            => 3,
            'name'          => 'Manager',
            'description'   => 'Ability to create new companies and orders, or edit and update any existing ones.'
        ]);

        Role::create([
            'id'            => 4,
            'name'          => 'Company Manager',
            'description'   => 'Able to manage the company that the user belongs to, including adding sites, creating new users and assigning licences.'
        ]);

        Role::create([
            'id'            => 5,
            'name'          => 'User',
            'description'   => 'A standard user that can have a licence assigned to them. No administrative features.'
        ]);
    }

}