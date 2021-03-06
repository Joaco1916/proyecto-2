<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Equipo;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });

        $equipo1 = new Equipo; $equipo1->name = "Royal Pari";
        $equipo2 = new Equipo; $equipo2->name = "La Equidad";
        $equipo3 = new Equipo; $equipo3->name = "Botafogo";
        $equipo4 = new Equipo; $equipo4->name = "Atletico Mineiro";
        $equipo5 = new Equipo; $equipo5->name = "Zulia";
        $equipo6 = new Equipo; $equipo6->name = "Sporting Cristal";
        $equipo7 = new Equipo; $equipo7->name = "Colón";
        $equipo8 = new Equipo; $equipo8->name = "Argentinos Juniors";
        $equipo9 = new Equipo; $equipo9->name = "Caracas";
        $equipo10 = new Equipo; $equipo10->name = "Independiente del Valle";
        $equipo11 = new Equipo; $equipo11->name = "Independiente";
        $equipo12 = new Equipo; $equipo12->name = "Universidad Catolica(E)";
        $equipo13 = new Equipo; $equipo13->name = "Peñarol";
        $equipo14 = new Equipo; $equipo14->name = "Fluminense";
        $equipo15 = new Equipo; $equipo15->name = "Corinthians";
        $equipo16 = new Equipo; $equipo16->name = "Montevideo Wanderers(U)";
        $equipo1->save();
        $equipo2->save();
        $equipo3->save();
        $equipo4->save();
        $equipo5->save();
        $equipo6->save();
        $equipo7->save();
        $equipo8->save();
        $equipo9->save();
        $equipo10->save();
        $equipo11->save();
        $equipo12->save();
        $equipo13->save();
        $equipo14->save();
        $equipo15->save();
        $equipo16->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
