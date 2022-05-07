<?php

namespace App\Http\Controllers;

use App\Models\Managers;
use App\Models\Positions;
use Illuminate\Http\Request;

class TeamManagersController extends Controller
{
    public function index()
    {
        $positions = Positions::all();
        $managers = Managers::with('positions')->get();
        return view('managers.index',['managers'=>$managers, 'positions'=>$positions]);
    }
    public function create()
    {
        $positions = Positions::all();
        return view('managers.create', ['positions'=>$positions]);
    }

    public function store(Request $request){
        if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Avatars'), $filename);
            $data= new Managers([
                "image_path"=> $filename,
                "name"=>$request->get('name'),
                "description"=>$request->get('description'),
            ]);
            $data->save();
            $positions = Positions::find($request->positions);
             $data->positions()->attach($positions);
        }
        return redirect()->route('managers.index');
    }

    public function edit($id)
    {
return View ('managers.edit',['id'=>$id]);
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
//        dd($request);
        $request->validate([
            'positions'=>'required',
            'name'=>'required',
            'description'=>'required'
        ]);
        $manager = Managers::find($id);

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Avatars'), $filename);
            $manager->image_path =  $filename;
            $manager->update(['name'=>$request->get('name'),
                'description'=>$request->get('description'),
            ]);
        }

       $manager->update(['name'=>$request->get('name'),
            'description'=>$request->get('description'),
        ]);
        $positions = Positions::find( $request->get('positions'));
        $manager->positions()->update(['positions_id'=>$positions['id']]);
        return redirect()->route('managers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($managers)
    {

        $positions = Managers::whereHas('positions', function($q) use ($managers) {
            $q->where('managers_id', $managers);
        })->get();
        dd($positions);

        $manager = Managers::find($managers);
        $positions->$manager()->detach($manager);

        return redirect()->route('managers.index')
            ->withSuccess(__('Post delete successfully.'));
    }
}
