<?php
namespace App\Repositories;

use App\Contracts\CouponContract;
use App\Models\Coupon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class CouponRepository extends BaseRepository implements CouponContract
{

    public function __construct(Coupon $model)
    {
        parent::__construct($model);
    }

    public function listCoupons (string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function findCouponById(int $id)
    {
        try {
            return $this->findOneOrFail($id);
 
        } catch (ModelNotFoundException $e) {
 
            throw new ModelNotFoundException($e);
        }
 
    }

    public function createCoupon(array $params)
    {
        try {
            $coupon = new Coupon($params);
            $coupon->save();

            return $coupon;
        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    public function updateCoupon(array $params)
    {

    }
    public function deleteCoupon($id)
    {

    }

}