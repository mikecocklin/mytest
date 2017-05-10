<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        $editpage = '1';
        return view('cars.list', array('cars' => $cars, 'editpage' => $editpage));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $test = 'Var to create page';
       return view('cars.create', array('test' => $test));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'make' => 'required|max:255',
        'model' => 'required|max:255',
        'produced_on' => 'required|max:255'
        ]);

        $car = new Car;
        $car->make = \Request::get('make');
        $car->model = \Request::get('model');
        $car->produced_on = \Request::get('produced_on');

        $car->save();


        // redirect
        \Session::flash('message', 'Successfully created car!');
        return \Redirect::to('cars');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	public function show($id)
    {
      $car = Car::find($id);
      return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $car = Car::find($id);
        // show the edit form and pass the nerd
        return view('cars.edit', array('car' => $car));
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
        
        $this->validate($request, [
        'make' => 'required|max:255',
        'model' => 'required|max:255',
        'produced_on' => 'required|max:255'
        ]);

        $car = Car::findOrFail($id);
        $input = \Request::all();
        $car->update($input);

        \Session::flash('message', 'Successfully edited car!');
        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        \Session::flash('message', 'Successfully deleted car!');
        return \Redirect::to('cars');
    }
}
