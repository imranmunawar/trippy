<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'slug', 'status'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';
    /**
     * Get the User that owns the Question.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public static function saveQuestion($request, $userId){

        $user = User::find($userId);
        $question = $user->questions()->create([
            'title'       => $request['headline'],
            'description' => $request['tinymce_full'],
            'slug'        => str_slug($request['headline']),
            'status'      => 'active'
        ]);
        return $question;
    }
}
