<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $this->validate($request, [
            'content'=> 'required|max:140'
        ]);
        Auth::user()->reviews()->create([
            'content'=> $request['content']
        ]);
        session()->flash('success','Post successfully!');
        return redirect()->back();
    }

    public function destroy(Review $review){
        $this->authorize('destroy', $review);
        $review->delete();
        session()->flash('success','Review successfully deleted!');
        return redirect()->back();
    }
}
