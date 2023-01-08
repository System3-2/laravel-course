<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Http\Controllers\PostsController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(200)->create();
        Post::factory(200)->create();

        Post::create([
            'name' => 'john doe',
            'email' => 'johndoe@example.com',
            'job' => 'frontend developer',
            'description' => 'Bala blu symbol blu tia-tia recruit recruit army different different symbol. Highway 50million bala from bala highway bala umbreleda symbol garri bala roasted mpower electricty blu. Army generated bulaba highway super eneme agbado. Blu line tia-tia bala bulaba army roasted agbado army army highway symbol transmission. Electricty mpower electricty bala line eba bulaba blu eba symbol. Eneme bulaba roasted blu roasted bala cassava recruit eneme bala bulaba bala blu highway down-payment.
            Different recruit our bala 50million cassava mpower umbreleda blu bala townhall. Bala tia-tia different blu mpower recruit pdapc bala cassava blu highway corn our. Down-payment umbreleda eba mpower army recruit tia-tia transmission bulaba bulaba cassava down-payment youths bala transmission. Down-payment blu blu generated army bala electricty blu transmission different 50million bala recruit bala army. Blu agbado bala tia-tia umbreleda. Garri army generated from eneme bala blu broooom down-payment broooom army symbol different. Agbado bala mpower townhall blu generated recruit cassava.',

        ]);

        Post::create([
            'name' => 'jane doe',
            'email' => 'janedoe@example.com',
            'job' => 'backend developer',
            'description' => 'Bala blu symbol blu tia-tia recruit recruit army different different symbol. Highway 50million bala from bala highway bala umbreleda symbol garri bala roasted mpower electricty blu. Army generated bulaba highway super eneme agbado. Blu line tia-tia bala bulaba army roasted agbado army army highway symbol transmission. Electricty mpower electricty bala line eba bulaba blu eba symbol. Eneme bulaba roasted blu roasted bala cassava recruit eneme bala bulaba bala blu highway down-payment.
            Different recruit our bala 50million cassava mpower umbreleda blu bala townhall. Bala tia-tia different blu mpower recruit pdapc bala cassava blu highway corn our. Down-payment umbreleda eba mpower army recruit tia-tia transmission bulaba bulaba cassava down-payment youths bala transmission. Down-payment blu blu generated army bala electricty blu transmission different 50million bala recruit bala army. Blu agbado bala tia-tia umbreleda. Garri army generated from eneme bala blu broooom down-payment broooom army symbol different. Agbado bala mpower townhall blu generated recruit cassava.',

        ]);


        Post::create([
            'name' => 'john smith',
            'email' => 'johnsmith@example.com',
            'job' => 'node js developer',
            'description' => 'Bala blu symbol blu tia-tia recruit recruit army different different symbol. Highway 50million bala from bala highway bala umbreleda symbol garri bala roasted mpower electricty blu. Army generated bulaba highway super eneme agbado. Blu line tia-tia bala bulaba army roasted agbado army army highway symbol transmission. Electricty mpower electricty bala line eba bulaba blu eba symbol. Eneme bulaba roasted blu roasted bala cassava recruit eneme bala bulaba bala blu highway down-payment.
            Different recruit our bala 50million cassava mpower umbreleda blu bala townhall. Bala tia-tia different blu mpower recruit pdapc bala cassava blu highway corn our. Down-payment umbreleda eba mpower army recruit tia-tia transmission bulaba bulaba cassava down-payment youths bala transmission. Down-payment blu blu generated army bala electricty blu transmission different 50million bala recruit bala army. Blu agbado bala tia-tia umbreleda. Garri army generated from eneme bala blu broooom down-payment broooom army symbol different. Agbado bala mpower townhall blu generated recruit cassava.',

        ]);

        
        Post::create([
            'name' => 'sara smith',
            'email' => 'sarasmith@example.com',
            'job' => 'laravel developer',
            'description' => 'Bala blu symbol blu tia-tia recruit recruit army different different symbol. Highway 50million bala from bala highway bala umbreleda symbol garri bala roasted mpower electricty blu. Army generated bulaba highway super eneme agbado. Blu line tia-tia bala bulaba army roasted agbado army army highway symbol transmission. Electricty mpower electricty bala line eba bulaba blu eba symbol. Eneme bulaba roasted blu roasted bala cassava recruit eneme bala bulaba bala blu highway down-payment.
            Different recruit our bala 50million cassava mpower umbreleda blu bala townhall. Bala tia-tia different blu mpower recruit pdapc bala cassava blu highway corn our. Down-payment umbreleda eba mpower army recruit tia-tia transmission bulaba bulaba cassava down-payment youths bala transmission. Down-payment blu blu generated army bala electricty blu transmission different 50million bala recruit bala army. Blu agbado bala tia-tia umbreleda. Garri army generated from eneme bala blu broooom down-payment broooom army symbol different. Agbado bala mpower townhall blu generated recruit cassava.',

        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
