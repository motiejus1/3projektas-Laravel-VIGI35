<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     * Sukuria lentele
     * @return void
     */
    public function up()
    {
        //Schema - speciali klase, kuri atpazista ir leidzia su duomenu baze
        //Schema:: create - sukurti nauja lentele
        //pirmas create argumentas - 'clients' - duomenu bazes lenteles pavadinimas
        //Blueprint - speciali klase, kuri pagal duomenu bazes tipa(Mysql) 'nubraizo lenteles stulpelius'


        // varda - string()
        //pavarde - string()
        // asmens kodas - integer()
        //adresa  - string()
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); //id - iskarto sukuria pirmini rakta

            $table->string('name');
            $table->string('surname');
            $table->integer('personal_code');
            $table->string('address');
            $table->timestamps();//created at - kada irasas sukurtas, updated at - kada irasas paskutini karta buvo atnaujintas
        
            //Foreign key - constraint
        
        });
    }

    /**
     * Reverse the migrations.
     * Numatytuosius nustatymus grazina i pradine padeti
     *rollback
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
