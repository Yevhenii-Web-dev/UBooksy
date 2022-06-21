<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        foreach ($equipments as $equipment) {
            dump($equipment->type);
        }
        dd('It is end');
    }

    public function create()
    {
        $equipmentsArr = [
            [
                'maker' => 'Lob',
                'model' => 's34564',
                'type' => 'pc'
            ],
            [
                'maker' => 'Nobel',
                'model' => 's44444',
                'type' => 'laptop'
            ]
        ];
        foreach ($equipmentsArr as $item) {
            Equipment::create($item);
        }


        dd('Equipment created');
    }

    public function update()
    {
        $equipment = Equipment::find(6);
        $equipment->update([
            'maker' => 'boria',
            'model' => 's32222',
            'type' => 'Xbo5'
        ]);
        dd('updated');
    }

    public function delete()
    {

        $equipment = Equipment::withTrashed()->find(2);
        $equipment->restore();

        dd('deleted page');
    }

    public function firstOrCreate(){
//        $equipment = Equipment::find(1);

//        $newEquipment = [
//            'maker' => 'Nastia',
//            'model' => 's3222',
//            'type' => 'Xbox'
//        ];
        $equipment = Equipment::firstOrCreate([
            'type' => 'xbox'
        ],[
            'maker' => 'Nastia',
            'model' => 's3222',
            'type' => 'xbox'
        ]);
        dump($equipment->maker);

        dd('Done');
    }


    public function updateOrCreate(){
//        $equipment = Equipment::find(1);

        $newEquipment = [
            'maker' => 'Nastia',
            'model' => 's3222',
            'type' => 'pccc'
        ];
        $equipment = Equipment::updateOrCreate([
            'type' => 'pccc'
        ],$newEquipment);
        dump($equipment->maker);

        dd('Done');
    }
}
