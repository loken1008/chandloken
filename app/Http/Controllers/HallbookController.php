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
    // public function getStateList(Request $request)
    //     {
    //         $states = Hall::where("b_id",$request->b_id)->pluck("hallname","id");
    //         return response()->json($states);

    //     }

       

    

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
            'hallname' => 'required',
            'date' => 'required',
            'start_time'=> 'required',
            'end_time'=>'required',
            'reason'=>'required',
            'booked_by'=>'required',

        ]);
        $user = Branchbook::where( 'hallname', $request->hallname )->first();
   if ($user){
      return redirect()->route('project.index')->with('success','Hall Booked Alredy');
   }
       else{
        Branchbook::create($request->all());

        return redirect()->route('project.index')
            ->with('success', 'Hall booked successfully.');   
}
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
       return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
      * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hallbook=Branchbook::find($id);
        return view('project.edit',compact('hallbook'));
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
            'branchname' => 'required',
            'hallname' => 'required',
            'date' => 'required',
            'start_time'=> 'required',
            'end_time'=>'required',
            'reason'=>'required',
            'booked_by'=>'required',
            'status'=>'',

        ]);
       
        Branchbook::where('id',$id)->update($request->except(['_token', '_method']));

        return redirect()->route('project.index')
            ->with('success', 'Hall Update booked successfully.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branchbook::find($id)->delete();
        return redirect()->route('project.index')
            ->with('success', 'Deleted successfully');

    }
}
