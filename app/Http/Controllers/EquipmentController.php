<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();

        return view('equipment.index', compact('equipments'));
    }

    public function create()
    {
        return view('equipment.create');
    }


    public function store()
    {

        $data = request()->validate([
            'maker' => 'string',
            'model' => 'string',
            'type_model' => 'string',
        ]);

        Equipment::create($data);

        return redirect()->route('equipment.index');
    }


    public function show(Equipment $equipment)
    {
        return view('equipment.show', compact('equipment'));
    }


    public function edit(Equipment $equipment)
    {
        return view('equipment.edit', compact('equipment'));
    }


    public function update(Equipment $equipment)
    {
        $data = request()->validate([
            'maker' => 'string',
            'model' => 'string',
            'type_model' => 'string',
        ]);


        Equipment::where('equipment_id', $equipment->equipment_id)->update($data);

        return redirect()->route('equipment.show',  $equipment->equipment_id );
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect()->route('equipment.index');
    }




// code trenning ===================================================================

//    public function create()
//    {
//        $equipmentsArr = [
//            [
//                'maker' => 'Lob',
//                'model' => 's34564',
//                'type_model' => 'pc'
//            ],
//            [
//                'maker' => 'Olinset',
//                'model' => 's4267444',
//                'type_model' => 'xbox'
//            ]
//        ];
//        foreach ($equipmentsArr as $item) {
//            Equipment::create($item);
//        }
//
//
//        dd('Equipment created');
//    }
//
//
//    public function update()
//    {
//        $equipment = Equipment::find(6);
//        $equipment->update([
//            'maker' => 'boria',
//            'model' => 's32222',
//            'type' => 'Xbo5'
//        ]);
//        dd('updated');
//    }
//
//    public function delete()
//    {
//
//        $equipment = Equipment::withTrashed()->find(2);
//        $equipment->restore();
//
//        dd('deleted page');
//    }
//
//    public function firstOrCreate(){
////        $equipment = Equipment::find(1);
//
////        $newEquipment = [
////            'maker' => 'Nastia',
////            'model' => 's3222',
////            'type' => 'Xbox'
////        ];
//        $equipment = Equipment::firstOrCreate([
//            'type' => 'xbox'
//        ],[
//            'maker' => 'Nastia',
//            'model' => 's3222',
//            'type' => 'xbox'
//        ]);
//        dump($equipment->maker);
//
//        dd('Done');
//    }
//
//
//    public function updateOrCreate(){
////        $equipment = Equipment::find(1);
//
//        $newEquipment = [
//            'maker' => 'Nastia',
//            'model' => 's3222',
//            'type' => 'pccc'
//        ];
//        $equipment = Equipment::updateOrCreate([
//            'type' => 'pccc'
//        ],$newEquipment);
//        dump($equipment->maker);
//
//        dd('Done');
//    }
}
