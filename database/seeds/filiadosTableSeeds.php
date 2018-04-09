<?php

use Illuminate\Database\Seeder;

use App\Filiados;

class filiadosTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Filiados::create([
        	'nome' => 'Teste',
        	'email' => 'teste@teste.com',
        	'password' => bcrypt('123'),
        	'nivel' => 'A',
        	'public_key' => hash('SHA256', "Teste".date('ymdHis')),
        	'private_key' => hash('SHA512', "PRIVATE_Teste".date('ymdHis')), 
        	]);  
    }
}
