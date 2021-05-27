<?php

use App\Models\Amplifier;
use App\Models\AmplifierLink;
use App\Models\AmplifierLinkType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmplifierLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amplifier_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amplifier_id')->constrained();
            $table->text('title');
            $table->text('href');
            $table->string('type');
            $table->timestamps();
        });

        $json = file_get_contents(database_path() . '/data/amplifier-links.json');
        $links = json_decode($json);

        foreach ($links as $link) {
            $model = new AmplifierLink();
            $model->amplifier_id = Amplifier::where('name', $link->ampName)->value('id');
            $model->title = $link->title;
            $model->href = $link->href;
            $model->type = $link->linkType;
            $model->save();
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
