<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function agent_store(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:agents',
            'number' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $agent = new Agent();
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->number = $request->number;
        $agent->address = $request->address;
        $agent->password = Hash::make(uniqid()); // Generate temp password

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('agents', 'public');
            $agent->image = $path;
        }

        $agent->save();
        toast('Your Agent Request Post has been submited!','success');

        // $data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'number' => $request->number,
        // ];

        // $admins = Admin::all();
        // foreach ($admins as $admin) {
        //     Mail::to($admin->email)->send(new AgentRequestNotification($data));
        // }

        // Mail::to($admins)->send(new AgentRequestNotification($data));

        return redirect()->route('home');
    }
}
