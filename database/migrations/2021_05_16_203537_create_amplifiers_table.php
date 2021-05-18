<?php

use App\Models\Amplifier;
use App\Models\Manufacturer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmplifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amplifiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturer_id')->constrained();
            $table->string('name');
            $table->year('manufacture_start')->nullable();
            $table->year('manufacture_end')->nullable();
            $table->string('circuit')->nullable();
            $table->string('wattage')->nullable();
            $table->boolean('master_volume')->nullable();
            $table->boolean('negative_feedback')->nullable();
            $table->string('preamp_tubes')->nullable();
            $table->string('power_amp_tubes')->nullable();
            $table->string('tone_stack_location')->nullable();
            $table->timestamps();
        });

        $json = file_get_contents(database_path() . '/data/amplifiers.json');
        $amplifiers = json_decode($json);


        foreach ($amplifiers as $amplifier) {
            $amp = new Amplifier();
            $amp->manufacturer_id = Manufacturer::where('name', $amplifier->manufacturer)->value('id');
            $amp->name = $amplifier->name;
            $amp->manufacture_start = $amplifier->manufactureStart;
            $amp->manufacture_end = $amplifier->manufactureEnd;
            $amp->circuit = $amplifier->circuit;
            $amp->wattage = $amplifier->wattage;
            $amp->master_volume = $amplifier->masterVolume;
            $amp->negative_feedback = $amplifier->negativeFeedback;
            $amp->preamp_tubes = $amplifier->preampTubes;
            $amp->power_amp_tubes = $amplifier->powerAmpTubes;
            $amp->tone_stack_location = $amplifier->toneStackLocation;
            $amp->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('amplifiers');
    }
}
