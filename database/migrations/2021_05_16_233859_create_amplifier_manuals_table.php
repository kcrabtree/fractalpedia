<?php

use App\Models\Amplifier;
use App\Models\AmplifierManual;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmplifierManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amplifier_manuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amplifier_id')->constrained();
            $table->text('title');
            $table->text('href');
            $table->timestamps();
        });

        $json = file_get_contents(database_path() . '/data/amplifier-manuals.json');
        $manuals = json_decode($json);

        foreach ($manuals as $manual) {
            $m = new AmplifierManual();
            $m->amplifier_id = Amplifier::where('name', $manual->ampName)->value('id');
            $m->title = $manual->title;
            $m->href = $manual->href;
            $m->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amp_manuals');
    }
}
