<?php

namespace App\Http\Controllers;

use App\Models\Amplifier;
use App\Models\AmpModel;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: pretty sure this won't be used
//        $manufacturer;
//        $amplifiers;
//
//        if(request()->has('manufacturer')) {
//            $amplifiers = Amplifier::where('manufacturer_id', '=', request('manufacturer'))->get();
//        }
//        $filters = ['manufacturer', 'amplifier'];
//        $filterVals = [
//            'manufacturer' => null,
//            'amplifier' => null
//        ];
//
//        foreach ($filters as $filter) {
//            if(request()->has($filter)) {
//                $filterVals =
//            }
//        }

//        return view('model.index', [
//            'models' => AmpModel::paginate(10),
//            'manufacturers' => Manufacturer::with('amplifiers')->has('amplifiers')->get(),
//            'amplifiers' => request()->has('manufacturer') ?
//                Amplifier::where('manufacturer_id', '=', request('manufacturer'))->get() :
//                Amplifier::all()
//        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AmpModel $model)
    {
        return view('model.show', [
            'model' => $model,
            'amp' => $model->amplifier,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
