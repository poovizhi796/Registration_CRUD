<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class FollowupController extends Controller
{
    public function index()
    {
        $results = Registration::where('status', '=', NULL)->paginate(5);
        // here status coln have null value (as we set in table) so where should be like that where('colnname' , 'condition', 'value' or NULL) AND THEN PAGINATE OR ALL()
        return view('FollowUp/index', compact(['results']));
    }
    /**
     * Show the form for update the status.
     *
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
       $urow =  Registration::where(['id' => $request['Row_id']]);
       if ($urow!= null) {
           $urow->update(['status' => $request['status']]);
           return redirect()->action('FollowupController@index')->with('success', 'Successfully Updated!');
       } else {
           return redirect()->action('FollowupController@index')->with('failed', 'Successfully Updated!');
       }
    }
    /**
     * Show the list of completed student's
     *
     * @return response
     */
    public function completedList()
    {
        $result = Registration::where(['status' => 'completed'])->paginate(5);
        return view('Completed/index', compact(['result']));
    }
}
