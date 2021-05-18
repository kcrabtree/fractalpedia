<?php

use App\Models\Amplifier;
use App\Models\AmpModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmpModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amp_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amplifier_id')->constrained();
            $table->string('slug')->nullable();
            $table->string('name');
            $table->text('description');
            $table->text('tips')->nullable();
            $table->text('speaker_cab')->nullable();
            $table->string('stock_cabs')->nullable();
            $table->text('amp_controls');
            $table->text('yek_thought')->nullable();
            $table->text('cliff_thought')->nullable();
            $table->text('highlight_text');
            $table->timestamps();
        });

        $json = file_get_contents(database_path() . '/data/amp-models.json');
        $models = json_decode($json);

        foreach ($models as $model) {
            $m = new AmpModel();
            $m->amplifier_id = Amplifier::where('name', $model->ampName)->value('id');
            $m->name = $model->name;
            $m->description = $model->description;
            $m->tips = $model->tips;
            $m->speaker_cab = $model->speakerCab;
            $m->stock_cabs = $model->stockCabs;
            $m->amp_controls = $model->ampControls;
            $m->yek_thought = $model->yekThought;
            $m->cliff_thought = $model->cliffThought;
            $m->highlight_text = $model->highlightText;
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
        Schema::dropIfExists('amp_models');
    }
}
