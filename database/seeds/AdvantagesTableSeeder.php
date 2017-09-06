<?php

use Illuminate\Database\Seeder;

class AdvantagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advantages')->insert([
        	'account' => 'Admin',
        	'advantage' => '冷靜',
        	]);
        DB::table('advantages')->insert([
        	'account' => 'Admin',
        	'advantage' => '熱心',
        	]);
        DB::table('advantages')->insert([
        	'account' => 'Admin',
        	'advantage' => '謙虛',
        	]);
        DB::table('advantages')->insert([
        	'account' => 'Admin',
        	'advantage' => '誠實',
        	]);
        DB::table('advantages')->insert([
        	'account' => 'Admin',
        	'advantage' => '耐心',
        	]);
    }
}
