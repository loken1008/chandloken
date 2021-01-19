<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Hall;
use App\Models\Branchbook;
use App\Http\Requests;
use Illuminate\Support\Facades\Gate;

class HallbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       
     $hallbook=Branchbook::latest()->paginate(50);
     return view('project.index',compact('hallbook'))
            ->with('i', (request()->input('page', 1) - 1) *50); 
    
}
     // public function hall(){

     //    $data=Hall::all();
       
     //  return view('project.create',compact('data'));
       //  $data=Hall::select('hall_name','id')->where('b_id',$request->id)->get();
       
       // //if our choosen id and hall table b_id col match get value


       //  //$request->id here is the id of our  chosen id
       //  return response()->json($data);//sent data into ajax success
        // }
       

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
          $branch=Branch::all();
        $data=Hall::all();
      return view('project.create',compact('branch','data'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
     
        $request->validate([
            'branchname' => 'required',
          $hallname='hallname' => 'required',
            'date' => 'required',
            'start_time'=> 'required',
            'end_time'=>'required',
            'reason'=>'required',
            'booked_by'=>'required',

        ]);
       
        Branchbook::create($request->all());

        return redirect()->route('project.index')
            ->with('success', 'Hall booked successfully.');   
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prject $project)
    {
       return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
