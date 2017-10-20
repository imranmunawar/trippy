<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Location;
use App\UserLocation;
use App\User;
use App\Question;
use Carbon\Carbon;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $userId = Auth::user()->id;
        $locations = User::find($userId)->locations()->get();
        $questions = Question::all();
        return view('home-inner',compact('questions','locations'));
    }
}
