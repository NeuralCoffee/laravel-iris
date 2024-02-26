<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rubix\ML\Datasets\Labeled;

class PredictController extends Controller
{
    public function predict(Request $request)
    {
        // Percorso del file contenente il modello addestrato
        $modelFile = public_path('/Models/Iris/iris.rbx');

        // Carica il modello serializzato
        $serializedModel = file_get_contents($modelFile);

        // Deserializza il modello
        $model = unserialize($serializedModel);

        // Esempio di input per la previsione
        $inputData = [5.4,3.9,1.7,0.4];

        // Esempio di etichetta (classe) corrispondente al dato di input
        $label = '';  // Cambia con l'etichetta appropriata

        // Crea un oggetto Dataset
        $inputDataset = Labeled::build([$inputData], [$label]);

        // Effettua la previsione
        $prediction = $model->predict($inputDataset);

        // Restituisci la previsione alla vista o elabora ulteriormente
        return $prediction;
    }
}

