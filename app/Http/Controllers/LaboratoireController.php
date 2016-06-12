<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Laboratoire;

class LaboratoireController extends Controller
{
    public function getLaboratoires()
    {
        $laboratoires = Laboratoire::all();
        $retour = array();

        foreach ($laboratoires as $laboratoire) {
            array_push($retour, $laboratoire->slug);
        }

        return $retour;
    }
}
