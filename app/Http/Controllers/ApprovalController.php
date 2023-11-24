<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    //
    public function index()
    {
        $approvals = Submission::all();
        return view('approval.index', compact('approvals'));
    }

    public function approve($id)
    {
        $approval = Submission::find($id);
        $approval->status = 'approved';
        $approval->save();

        return redirect('/approval/index')->with('success', 'Submission berhasil diapprove');
    }
}
