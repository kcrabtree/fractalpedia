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
            $table->text('tips');
            $table->text('fractal_cabs')->nullable();
            $table->text('third_party_cabs')->nullable();
            $table->text('yek_quotes')->nullable();
            $table->text('cliff_quotes')->nullable();
            $table->text('control_mappings');
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
            $m->fractal_cabs = $model->fractalCabs;
            $m->third_party_cabs = $model->thirdPartyCabs;
            $m->yek_quotes = $model->yekQuotes;
            $m->cliff_quotes = $model->cliffQuotes;
            $m->control_mappings = $model->controlMappings;
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
