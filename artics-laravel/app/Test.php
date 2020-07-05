<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    protected $table='tests';
    protected $fillable=['review','client_id','testday_id','bike_id', 'badgeNo'];
    use SoftDeletes;

    public function bike() {          
        return $this->belongsTo('App\Bike'); 
    }

    public function testday() {          
        return $this->belongsTo('App\Testday'); 
    }

    public function client() {          
        return $this->belongsTo('App\Client'); 
    }

    public static function buildReview($question1, $question2, $question3, $question4) {
        $review = array();
        $review['question1'] = array('about' => 'maneuverability', 'grade' => $question1);
        $review['question2'] = array('about' => 'brakes', 'grade' => $question2);
        $review['question3'] = array('about' => 'transmission', 'grade' => $question3);
        $review['question4'] = array('about' => 'comfort', 'grade' => $question4);
        return json_encode($review);
    }
}
