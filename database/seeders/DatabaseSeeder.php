<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UserSeeder::class,
            RoleUserTableSeeder::class,
            StandSeeder::class,
            PeriodSeeder::class,
            AssociateSeeder::class,

            FamilySeeder::class,


            AssociationSeeder::class,
            DebitSeeder::class,
            ActivitySeeder::class,
            AssistenceSeeder::class,
            PaymentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
