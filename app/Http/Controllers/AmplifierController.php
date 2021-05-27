<?php


namespace App\Http\Controllers;

use App\Models\Amplifier;
use App\Models\AmplifierLink;
use App\Models\AmplifierManual;
use App\Models\AmpModel;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class AmplifierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('amplifier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Amplifier $amplifier)
    {
        $linkQuery = AmplifierLink::where('amplifier_id', $amplifier->id);

        return view('amplifier.show', [
            'amp' => $amplifier,
            'models' => $amplifier->models->all(),
            'featuredResource' => $linkQuery->where('type', 'featured-resource')->first(),
            'manual' => AmplifierManual::find($amplifier->id, ['title', 'href']),
            'links' => $linkQuery->where('type', '!=', 'featured-resource')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
