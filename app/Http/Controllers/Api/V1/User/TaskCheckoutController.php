<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\Coupon;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrderReview;
use App\Models\TaskOrderTip;
use App\Repositories\TaskOrderRepository;
use Illuminate\Http\Request;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use App\Models\TaskOrder;
use App\Models\TaskOrderTransaction;
use Session;
use Illuminate\Support\Facades\Auth;
use Stripe;


class TaskCheckoutController extends ApiController
{
    public function __construct() {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($offerId, $taskId)
    {   
        $serviceCategoryId = Task::select('service_category_id')->where('id', $taskId)->first();

        // // Remove all session about coupon
        // session()->forget(['promo_code_id','promo_amount','grandTotalPromo']);
        
        if($serviceCategoryId->service_category_id == 1){ 

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

                // session(['service_fee_amount'         => $data['service_fee_amount']]);
                // session(['total_cost'         => $data['data']->task->total_cost ]);
                // session(['grand_total'         => $data['grand_total'] ]);

                return $this->respondWithSuccess(
                    'Offer and task details retrieved.',
                    $data
                );

            } catch (Exception $e) {
                Log::info($e->getMessage());
                return $this->respondWithError(
                    'Something is wrong. Try again.',
                    $e->getMessage(),
                    500
                );
            }
        }else {
            
            try {
                $data = [];
            
                $data['data'] = TaskOffer::with(['task'])
                        ->where([
                            ['id', $offerId],
                            ['task_id', $taskId]
                        ])->first();
                
                $data['service_fee'] = 4;

                $data['service_fee_amount'] = ceil(($data['data']->task->total_cost/100) * $data['service_fee']);

                $data['grand_total'] = ($data['data']['task']['total_cost'] + $data['service_fee_amount']  + $data['data']['amount']);

                // session(['service_fee_amount' => $data['service_fee_amount']]);
                // session(['total_cost'         => $data['data']->task->total_cost ]);
                // session(['grand_total'         => $data['grand_total'] ]);
                
        
                return $this->respondWithSuccess(
                    'Offer and task details retrieved.',
                    $data
                );

            } catch (Exception $e) {
                Log::info($e->getMessage());
                return $this->respondWithError(
                    'Something is wrong. Try again.',
                    $e->getMessage(),
                    500
                );
            }
        }

    }


    public function applyCoupon($couponCode){
   
        try {

            $coupon = Coupon::where('promo_code', $couponCode);

            if (!$coupon->exists()) {

                return $this->respondWithError(
                    'Invalid promo code.',
                    [], 422
                );
            }

            // Auth User
            $user = Auth::user();
            $checkApplied = $user->whereHas('appliedCoupons', function($c) use($couponCode){
                $c->where('promo_code', $couponCode);
            });


            if ($checkApplied->exists()) {
                return $this->respondWithError(
                    'This code already used.',
                    [], 422
                );
            }

            $validCoupon = $coupon->where('started_at', '<=', now())
                ->where('expired_at', '>=', now())
                ->first();

            if($validCoupon){
                
                // $promo_amount = ceil((session('total_cost')/100) * $validCoupon->discount_percentage);
                
                // session(['promo_code_id' => $validCoupon->id ]);
                // session(['promo_amount' => $promo_amount]);

                // $grandTotalPromo = session('grand_total') - $promo_amount ;

                // session(['grandTotalPromo'         => $grandTotalPromo ]);


                $data = [];
                $data['promo_id']             = $validCoupon->id;
                $data['promo_code']           = $validCoupon->promo_code;
                $data['discount_percentage']  = $validCoupon->discount_percentage;


                return $this->respondWithSuccess(
                    'Coupon details retrieved.',
                    $data
                ); 
            }


            return $this->respondWithError(
                'Promo code is expired.'
                [], 422
            );
             
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }





    public function store($taskId, $offerId, Request $request){

        DB::beginTransaction();

        try {                     
            $task_order = TaskOrderRepository::saveTaskOrderData($taskId, $offerId, $request->all());


            DB::commit();
            
            return $this->respondWithSuccess(
                'Your checkout request is submitted.',
                $task_order
            );

        } catch (Exception $e) {
            DB::rollBack();

            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }

    public function storeReview($taskOrderId, Request $request){

        try {                     
            $orderReview = TaskOrderReview::create([
                'task_order_id'  => $taskOrderId,
                'accuracy'       => $request->accuracy,
                'rating'         => $request->rating,
                'review'         => $request->review,  
            ]);
            
            return $this->respondWithSuccess(
                'Review is submitted.', $orderReview
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }

    public function storeTips($taskOrderId, Request $request){

        try {                     
            TaskOrderTip::create([
                'task_order_id'  => $taskOrderId,
                'tip_amount'       => $request->tip_amount
            ]);
            
            return $this->respondWithSuccess(
                'Tips is submitted.'
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }
 
}
