<?php

namespace App\Http\Controllers\AdminControllers\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Inquiry\FeedbackModel;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = FeedbackModel::latest()->get();
        // dd($data);
        return view('admin.feedback.index', compact('data'));
    }

    public function show($id)
    {
        $data = FeedbackModel::with('images')->findOrFail($id);
        // dd($data);

        return view('admin.feedback.show', compact('data'));
    }
    public function toggleStatus($id)
    {
        $feedback = FeedbackModel::findOrFail($id);

        $feedback->status = $feedback->status == '1' ? '0' : '1';

        $feedback->save();

        return back()->with('success', 'Status updated successfully.');
    }

    public function destroy($id)
    {
        $feedback = FeedbackModel::with('images')->findOrFail($id);

        foreach ($feedback->images as $media) {

            $filePath = public_path('uploads/feedbacks/' . $media->filename);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $feedback->images()->delete();
        $feedback->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }


}
