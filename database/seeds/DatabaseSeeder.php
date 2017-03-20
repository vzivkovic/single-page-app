<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
//    protected $toTrunchate = ['users'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        foreach ($this->toTrunchate as $table) {
//            DB::table($table)->truncate();
//        }
        $this->call(UserAdminSeeder::class);
    }
}
