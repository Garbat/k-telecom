<?php

namespace App\Http\Controllers;

use App\Http\Resources\EquipmentCollection;
use App\Http\Resources\EquipmenTypetCollection;
use App\Models\EquipmentType;
use Illuminate\Http\Request;

class EquipmentTypeController extends Controller
{
    /**
     *
     */
    function getTypes(Request $request){
        return new EquipmentCollection(EquipmentType::all());
    }
}
