<?php

namespace App\Http\Controllers;

use App\Models\StaffMemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class StaffMemberController extends Controller
{
    public function add_team_member()
    {
        $members = StaffMemberModel::all();
        return view('super_admin.add_team_member', compact('members'));
    }

    public function add_team_member_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'post' => 'required|string|max:255',
            'show_website' => 'required|boolean',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/staff'), $imageName);
        }
        $tag_id = strtoupper(Str::random(5)) . random_int(100, 999);

        try {
            StaffMemberModel::create([
                'name' => $request->name,
                'tag_id' => $tag_id,
                'image' => 'uploads/staff/' . $imageName,
                'post' => $request->post,
                'show_website' => $request->show_website,

            ]);
        } catch (\Exception $e) {
            dd($e->getMessage()); // or Log::error($e);
        }

        return redirect()->back()->with('success', 'Team Member added successfully!');
    }


    public function toggleStatus($id)
    {
        $member = StaffMemberModel::findOrFail($id);
        $member->status = !$member->status;
        $member->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    public function toggleWebsite($id)
    {
        $member = StaffMemberModel::findOrFail($id);
        $member->show_website = !$member->show_website;
        $member->save();

        return redirect()->back()->with('success', 'Website visibility updated.');
    }

    public function editTeam($id)
    {
        // You can build the edit form here
        return "Edit functionality coming soon.";
    }
}
