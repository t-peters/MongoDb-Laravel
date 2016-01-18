<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MongoTesting;



require_once base_path('\vendor\fzaninotto\faker\src\autoload.php');

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = MongoTesting::all();

        return view('index')->with('all',$all);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return var_dump($request->input('name'));
        // return $request->path();
        $input  = new MongoTesting();
        $faker = \Faker\Factory::create();


        $input->name = $faker->name;
        $input->email = $faker->email;
        $input->username = $faker->firstName;
        $input->phone = $faker->phoneNumber;


        if($input->save()) {
            \Session::put('result','Input Saved Successfully');
            return redirect('/t');
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
        $person = MongoTesting::find($id);

        return view('show')->with('person',$person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = MongoTesting::find($id);

        return view('edit')->with('person',$person);
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
        $person = MongoTesting::find($id);

        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->username = $request->username;

        if($person->save()) {
            \Session::put('report','Update successful');
            return redirect('/t/'.$id);
        } else {
            \Session::put('report','Update Not Successful');
            return back();
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
        //
    }
}
