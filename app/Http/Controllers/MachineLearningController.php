<?php

namespace App\Http\Controllers;

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Extractors\NDJSON;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\CrossValidation\Metrics\Accuracy;

class MachineLearningController extends Controller
{
    public function trainModel()
    {

        $training = Labeled::fromIterator(new NDJSON(public_path('/Dataset/Iris/dataset.ndjson')));

        $testing = $training->randomize()->take(10);

        $estimator = new KNearestNeighbors(5);

        $estimator->train($training);

        // Salva il modello addestrato (opzionale)
        $modelFilePath = public_path('/Models/Iris/iris.rbx');
        file_put_contents($modelFilePath, serialize($estimator));

        $predictions = $estimator->predict($testing);

        $metric = new Accuracy();

        $score = $metric->score($predictions, $testing->labels());

        return $score;

    }
}


