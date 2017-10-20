<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'question_id', 'description', 'status', 'slug', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    /**
     * Get the Question that owns the Answer.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the User that owns the Question.
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public static function saveAnswer($request, $userId, $question){

        $answer = $question->answers()->create([
            'user_id'     => $userId,
            'description' => $request['tinymce_full'],
            'status'      => 'active'
        ]);
        return $answer;
    }
}
