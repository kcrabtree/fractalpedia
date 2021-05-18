<?php

use App\Models\Amplifier;
use App\Models\AmplifierClip;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmplifierClipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amplifier_clips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amplifier_id')->constrained();
            $table->text('title');
            $table->text('href');
            $table->timestamps();
        });

        $json = file_get_contents(database_path() . '/data/amplifier-clips.json');
        $clips = json_decode($json);

        foreach ($clips as $clip) {
            $c = new AmplifierClip();
            $c->amplifier_id = Amplifier::where('name', $clip->ampName)->value('id');
            $c->title = $clip->title;
            $c->href = $clip->href;
            $c->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amplifier_clips');
    }
}
