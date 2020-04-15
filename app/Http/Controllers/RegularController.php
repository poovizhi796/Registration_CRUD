<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegularController extends Controller
{
    /**
     * Display a listing of the resource with joined.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Registration::where('status', '=', 'Joined')->paginate(5);
        if ($result != null) {
            return view('Regular/index', compact(['result']));
        } else {
            return 'OOps!';
        }
    }
    /**
     * Update about course detail
     */
    public function completed($id)
    {
        // $statusupdate = Registration::where(['id' => $id]);
        $statusupdate = Registration::where(['id' => $id]);
        if ($statusupdate != null) {
            $statusupdate->update(['status' => 'completed']);
            return redirect()->action('RegularController@index')->with('success', 'Successfully Updated!');
        } else {
            return redirect()->action('RegularController@index')->with('failed', 'Wrong ID!');
        }
    }
    /**
     * Update the Block Status
     *
     * return redirect page
     */
    public function block(Request $request)
    {
        $row = Registration::where(['id' => $request->hidden_block_id]);
        if ($row != null) {
            $row->update(['reason'=> $request->reason, 'status' => 'Blocked']);
            return redirect()->action('RegularController@index')->with('success', 'Successfully Updated the Reason.');
        }
    }
}
