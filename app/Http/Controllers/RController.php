<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Http\Requests\EnquiryRequest;

class RController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reg_data = Registration::latest()->paginate(10);
        return view('Registration/list', compact('reg_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registration/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquiryRequest $request)
    {
        $objRegistration = new Registration;
        $objRegistration->name = $request->name;
        $objRegistration->mobile = $request->mobile;
        $objRegistration->address = $request->address;
        $objRegistration->gender = $request->gender;
        $objRegistration->subject = $request->subject;
        $objRegistration->district = $request->district;
        $photo = $request->photo;
        $destinationPath = 'stud_photos';
        $photo->move($destinationPath, $photo->getClientOriginalName());
        $objRegistration->photo = $photo->getClientOriginalName();
        $result = $objRegistration->save();
        if ($result) {
            return redirect()->route('registration.index')->with('success', 'Registered Successfully!');
        } else {
            return redirect()->route('registration.index')->with('failed', 'Some trouble to Register!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $OneRow = Registration::where('register_id', $id);
        $OneRow = Registration::find($id);
        return view('Registration/show', compact(['OneRow']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editRow = Registration::find($id);
        return view('Registration/update', compact(['editRow']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'district' => 'required',
            // 'photo' =>'required|image|mimes:jpeg,jpg,png',
        ]);
        $result = Registration::find($id);
        if ($result!= null) {
            $result->update($request->all());
            return redirect()->route('registration.index')->with('success', 'Updated Successfully');
        } else {
            return redirect()->route('registration.index')->with('danger', 'Something Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Registration::find($id);
        if ($result!= null) {
            $result->delete();
            return redirect()->route('registration.index')->with('success', 'Removed Record Successfully!');
        } else {
            return redirect()->route('registration.index')->with('danger', 'Wrong ID');
        }
    }
}
