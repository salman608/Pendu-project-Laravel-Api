<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Builder;

class TaskTimelineController  extends ApiController
{   

    // Start a task  of confirmed tasks list
    public function startTask(Request $request){

        // Check ownership 
        $offerOwner = TaskOffer::whereHas('task', 
            function (Builder $query) use($request)  {
                $query->where('offer_id', $request->offer_id);
        })->where('id', $request->offer_id)->where('dropper_id', $request->user('dropper-api')->id);



        if(!$offerOwner->exists()){
            return $this->respondWithSuccess(
                'You have provided an invalid offer id',
                []
            );
        }

        // Check task  already started or not
        $taskOffer = TaskOffer::with('order')->where('id', $request->offer_id)->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_CONFIRMED)->first();

        if(!$taskOffer){
            return $this->respondWithSuccess(
                'Your task already started ',
                []
            );
        } 


        DB::beginTransaction();

        try {
            $taskOffer->update([
                'status' => TaskOffer::STATUS_IN_PROGRESS
            ]);

            $taskOffer->order()->update([
                'status' => TaskOrder::STATUS_IN_PROGRESS
            ]);

            DB::commit();

            return $this->respondWithSuccess(
                'Your tasks has been started',
                $taskOffer
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

    // public function continueTask(Request $request){

    // }

    public function startJob(Request $request, $offerId){

        // Check owner
        $checkOffer = TaskOffer::whereHas('task', 
            function (Builder $query) use($offerId) {
                $query->where('offer_id', $offerId);
            })
        ->where('id', $offerId)->where('dropper_id', $request->user('dropper-api')->id);

        
        if(!$checkOffer->exists()){
            return $this->respondWithSuccess(
                'You have provided an invalid offer id.'
            );
        }

        // Check already started or not..
        $taskOffer = TaskOffer::with('task','task.products','task.products.delivery')->where('id', $offerId)->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_STARTED)->first();

        if($taskOffer){
            return $this->respondWithSuccess(
                'Your job details retrieved',
                $taskOffer
            );
        }

        $taskOfferUpdate = TaskOffer::where('id', $offerId)->where('dropper_id', $request->user('dropper-api')->id)->first();

        $taskOfferUpdate->update([
            'status' => TaskOffer::STATUS_STARTED
        ]);

        return $this->respondWithSuccess(
            'Your job details retrieved',
            $taskOfferUpdate->load(['task','task.products','task.products.delivery'])
        );
    }

}
