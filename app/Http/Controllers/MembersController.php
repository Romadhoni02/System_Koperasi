<?php

namespace App\Http\Controllers;

use App\Models\MembersModel;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    // Display a listing of the members
    public function index()
    {
        $members = MembersModel::all();
        return view('members.index', compact('members'));
    }

    // Show the form for creating a new member
    public function create()
    {
        return view('members.create');
    }

    // Store a newly created member in the database
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'member_code' => 'required|unique:members|max:255',
            'registration_date' => 'required|date',
        ]);

        $member = new MembersModel([
            'user_id' => $request->get('user_id'),
            'member_code' => $request->get('member_code'),
            'registration_date' => $request->get('registration_date'),
        ]);

        $member->save();
        return redirect('/members')->with('success', 'Member created successfully');
    }

    // Display the specified member
    public function show($id)
    {
        $member = MembersModel::findOrFail($id);
        return view('members.show', compact('member'));
    }

    // Show the form for editing the specified member
    public function edit($id)
    {
        $member = MembersModel::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    // Update the specified member in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'member_code' => 'required|max:255|unique:members,member_code,'.$id,
            'registration_date' => 'required|date',
        ]);

        $member = MembersModel::findOrFail($id);
        $member->user_id = $request->get('user_id');
        $member->member_code = $request->get('member_code');
        $member->registration_date = $request->get('registration_date');
        $member->save();

        return redirect('/members')->with('success', 'Member updated successfully');
    }

    // Remove the specified member from the database
    public function destroy($id)
    {
        $member = MembersModel::findOrFail($id);
        $member->delete();

        return redirect('/members')->with('success', 'Member deleted successfully');
    }
}

