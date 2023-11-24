<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function createForm()
    {
        return view('user.dashboard');
    }

    public function submitForm(Request $request)
    {
        Submission::create([
            'name' => $request->input('name'),
            'birth_date' => $request->input('birth_date'),
        ]);

        return redirect()->route('submission.form')->with('success', 'Submission created successfully!');
    }

    public function index()
    {
        $submissions = Submission::all();
        return view('admin.dashboard', compact('submissions'));
    }

    public function approve($id)
    {
        $submission = Submission::find($id);
        $submission->update(['approved' => true]);

        return redirect()->route('admin.dashboard')->with('success', 'Submission approved successfully!');
    }
}