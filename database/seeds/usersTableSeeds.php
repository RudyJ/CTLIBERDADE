<?php

use Illuminate\Database\Seeder;
use App\User;

class usersTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
       User::create([
        	'name' => 'Rudy Jordache',
        	'email' => 'rjordache@hotmail.com',
        	'password' => bcrypt('123456'),
        	'nivel' => 'A',
        	'public_key' => hash('SHA256', "RUDY JORDACHE".date('ymdHis')),
        	'private_key' => hash('SHA512', "PRIVATE_RUDY JORDACHE".date('ymdHis')), 
            'status' => 'A'       	
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'demo@demo.com',
            'password' => bcrypt('123456'),
            'nivel' => 'A',
            'public_key' => hash('SHA256', "DEMO".date('ymdHis')),
            'private_key' => hash('SHA512', "PRIVATE_DEMO".date('ymdHis')),
            'status' => 'A'             
        ]);
        
        User::create([
            'name' => 'Consultor Teste',
            'email' => 'consultor@demo.com',
            'password' => bcrypt('123456'),
            'nivel' => 'C',
            'public_key' => hash('SHA256', "Consultor Teste".date('ymdHis')),
            'private_key' => hash('SHA512', "PRIVATE_Consultor Teste".date('ymdHis')),
            'status' => 'A'             
        ]);
        
        User::create([
            'name' => 'Filiado Teste',
            'email' => 'filiado@demo.com',
            'password' => bcrypt('123456'),
            'nivel' => 'F',
            'public_key' => hash('SHA256', "Filiado Teste".date('ymdHis')),
            'private_key' => hash('SHA512', "PRIVATE_Filiado Teste".date('ymdHis')), 
            'status' => 'A'            
        ]);


    }
}
