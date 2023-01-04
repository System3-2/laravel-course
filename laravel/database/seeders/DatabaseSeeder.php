<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(20)->create();

        Listing::create([
            'title' => 'Laravel senior developer',
            'tags' => 'Laravel jsvascript',
            'company' => 'Acme Corp',
            'location' => 'Boston MA',
            'email' => 'email@gmail.com',
            'website' => 'https://www,website.com',
            'description' => 'Bala blu garri from down-payment army symbol garri garri our generated. Blu garri army youths recruit from blu bala tia-tia from bala tia-tia roasted. Pdapc broooom cassava electricty agbado super youths blu recruit generated line symbol our corn bala. Line symbol highway generated pdapc bala line blu pdapc bala blu. Agbado pdapc bala broooom generated broooom blu bulaba different umbreleda blu.
Pdapc bala down-payment line blu down-payment super townhall pdapc corn bulaba army recruit. Eneme blu roasted bala bala blu. Generated bala down-payment highway roasted townhall. Garri highway super electricty transmission army line eba symbol. 50million youths eneme bala 50million symbol youths. Agbado bala from umbreleda highway bala mpower bala tia-tia 50million electricty umbreleda super bala. Pdapc corn roasted corn down-payment youths 50million bulaba 50million.
Different roasted transmission eba cassava. Bala youths bulaba from broooom. Corn eneme corn tia-tia eneme bala. Generated different army eneme bulaba eba corn broooom umbreleda corn recruit pdapc townhall 50million.
Youths garri electricty roasted 50million blu eba tia-tia highway broooom eba. Umbreleda generated townhall pdapc down-payment. Agbado 50million bala blu bala garri. Bulaba super bala highway super recruit pdapc youths bulaba roasted garri umbreleda 50million.',
        ]);

        Listing::create([
            'title' => 'Fullstack Engineer',
            'tags' => 'Node js, React, Python',
            'company' => 'Indeed',
            'location' => 'Seattle DC',
            'email' => 'email@gmail.com',
            'website' => 'https://www,website.com',
            'description' => 'Bala blu bala blu broooom down-payment eneme recruit eba. Umbreleda umbreleda garri bala roasted agbado eba. Electricty umbreleda symbol symbol broooom super blu transmission bala roasted mpower corn eneme line cassava. Down-payment blu bala different pdapc generated mpower 50million electricty highway.
Blu line different mpower blu bala bala recruit tia-tia our line townhall blu. Transmission garri super pdapc garri highway bala broooom cassava roasted tia-tia blu bulaba 50million. Blu down-payment transmission tia-tia electricty bala highway umbreleda broooom.
Line roasted bala cassava pdapc bala recruit different 50million broooom line broooom mpower roasted. Our symbol cassava townhall pdapc super tia-tia youths. Bala eneme blu line townhall blu garri blu. Mpower bulaba townhall from different from cassava agbado garri. Our corn agbado recruit electricty cassava army super.
Garri youths blu our recruit tia-tia eneme bulaba. From bala electricty corn bala garri highway garri highway. Bala line cassava mpower youths agbado pdapc blu garri down-payment bala blu army. Eneme pdapc corn garri broooom recruit transmission different generated our umbreleda electricty pdapc. Electricty cassava eba generated eneme eba bala down-payment different garri symbol 50million youths down-payment blu. Electricty 50million broooom electricty garri townhall umbreleda garri agbado army tia-tia tia-tia. Youths down-payment army electricty different transmission.',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
