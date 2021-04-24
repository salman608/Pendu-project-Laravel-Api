<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Auth;

class HelperController extends Controller
{
    public static function getOrderNo()
    {
        $lastOrderNo = Task::orderBy('order_no', 'desc')->value('order_no');

        if (empty($lastOrderNo)) {
            $orderNo = sprintf('%09d', 1);
        } else {
            $orderNo = sprintf('%09d', $lastOrderNo + 1);
        }

        return $orderNo;
    }
}
