<?php

namespace Tests\Feature;

use App\Models\Amplifier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Throwable;

class ShowAmplifiersTest extends TestCase
{
   use RefreshDatabase;


    /** @test */
    public function amplifiersAreDisplayedOnIndexPage()
   {
       $ampOne = Amplifier::factory()->create([
           'name' => '1987X Reissue',
           'index_card_text' => 'Models of a 1987X 50 watt Plexi Reissue.'
       ]);

       $ampTwo = Amplifier::factory()->create([
           'name' => '5150-III',
           'index_card_text' => 'Models of all channels of Eddie Van Halen\'s signature amp.'
       ]);

       $response = $this->get(route('amplifier.index'));

       $response->assertSuccessful();
       $response->assertSee($ampOne->name);
       $response->assertSee($ampOne->indexCardText);
       $response->assertSee($ampTwo->name);
       $response->assertSee($ampTwo->indexCardText);
   }
}
