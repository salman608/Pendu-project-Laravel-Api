<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropper extends Model
{
    use HasFactory;

    protected $table = 'dropper_rating';

    protected $fillable = [
        'dropper_id',
        'one_star',
        'two_star',
        'three_star',
        'four_star',
        'five_start',
        'avg_rating',
    ];

    public function calculateAvgRating($id, $one_star, $two_star, $three_star, $four_star, $five_star)
    {
        $prviousData = $this->where('dropper_id', $id)->get();

        $new_one_star   = $prviousData->one_star + $one_star;
        $new_two_star   = $prviousData->two_star + $two_star;
        $new_three_star = $prviousData->three_star + $three_star;
        $new_four_star  = $prviousData->four_star + $four_star;
        $new_five_star  = $prviousData->four_star + $four_star;

        $avg_rating = (1 * $new_one_star) + (1 * $new_two_star) + (1 * $new_three_star) + (1 * $new_four_star) + (1 * $new_five_star) / 5;


        return $avg_rating;
    }
}
