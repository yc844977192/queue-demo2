<?php

namespace App\Http\Controllers;
use App\Jobs\UniqueJob;
use Illuminate\Support\Facades\Queue;

use Illuminate\Http\Request;

class QueueDemoController extends Controller
{
    public function demo(){
        $uniqueId = '12345';
        if (!Queue::has('unique_job:' . $uniqueId)) {
            Queue::push(new UniqueJob($uniqueId));
        }

    }
}
