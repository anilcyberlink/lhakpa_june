<?php

namespace App\Http\Controllers\AdminControllers\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Inquiry\FeedbackModel;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = FeedbackModel::get();
        // dd($data);
        return view('admin.feedback.index', compact('data'));
    }

    public function show($id)
    {
        $data = FeedbackModel::where('id',$id)->first();
        // dd($data);
        return view('admin.feedback.show', compact('data'));
    }
    public function destroy($id)
    {
        FeedbackModel::findOrFail($id)->delete();

        return redirect()->back()->with('success','Deleted  successfully');
    }


}
