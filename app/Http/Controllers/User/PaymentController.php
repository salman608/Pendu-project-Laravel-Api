<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Dropper;
use App\Models\TaskOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;
use Exception;
use DB;

class PaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($offerId, $taskId)
    {   
        // return $offerId;
        // return view('User.collect_n_drop.collect_n_drop', compact('dropper'));
        try {
            $data = [];
           
            $data['data'] = TaskOffer::with(['task', 'task.products'])
                    ->where([
                        ['id', $offerId],
                        ['task_id', $taskId]
                    ])->first();
                    
            $data['service_fee'] = 4;
            $data['service_fee_amount'] = ceil(($data['data']->task->total_cost/100) * $data['service_fee']);

            $data['grand_total'] = ($data['data']['task']['total_cost'] + $data['service_fee_amount']  + $data['data']['amount']);

            return view('user.payment.shop_n_drop', $data);
        } catch (Exception $e) {
            Log::info($e->getMessage());

            return abort(404, 'Page not found.');
            // return abort(403, 'Unauthorized action.');
        }
    }

    public function applyCoupon($coupon){

        try {

            $coupon = Coupon::where('promo_code', $coupon);

            if ($coupon->exists()) {

                $validCoupon = $coupon->where('started_at', '<=', now())
                    ->where('expired_at', '>=', now())
                    ->first();

                if($validCoupon){
                    return response()->json(['status'=> true,'promo' => $validCoupon]);  
                }
                
                return response()->json(['status'=> false,'msg' => 'Promo code is expired.']);  
             } else{
                return response()->json(['status'=> false,'msg' => 'Invalid promo code.']);  
             }
       
        } catch (Exception $e) {
            Log::info($e->getMessage());

            return response()->json(['status'=> false,'msg' => 'Something is wrong. Try again.']);  
        }
    }
}
