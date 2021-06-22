<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\TaskOffer;
use Illuminate\Http\Request;

class TaskOfferController extends ApiController
{
    public function __construct() {

    }

    /**
     * Get a list of Task offers from driver
     *
     */
    public function index($taskId){
        
       $task_offers = TaskOffer::where('task_id',$taskId)->get();
       return $task_offers;
    }

}
