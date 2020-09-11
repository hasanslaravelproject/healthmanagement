<?php

namespace App\Http\Controllers;

use App\Seat;
//use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
      // products = Post::where('user_id', Auth::User()->id)->where('company_id', Auth::User()->company_id)->get();
     //dd(products);

       $seats = Seat::latest()->paginate(5);
       // return view('company.index', compact('companys', 'products'))
        return view('seat.index', compact('seats'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $seats=Seat::all();
        return view('seat.create', compact('seats'));
    }

    public function store(Request $request)
    {
        //dd($request->toArray());
        // dd($request['status']);
        $request->validate([
            'seat_quantity' => 'required',
            'status' => 'required',

        ]);

        $seat = new Seat();
        for($i = 0; $i<$request->seat_quantity; $i++){
            $data[] = [
                'seat_quantity' => rand(0,20),
                'status' => $request['status']
					];
		}
        // here you missed the status,
        // not completed
        Seat::insert($data);

        //Seat::insert($request->all());
        return redirect()->route('seats.index')
                        ->with('success','seat created successfully.');
    }

    public function show(seat $seat)
    {
        //
    }


    public function edit(seat $seat)
    {
        $seat = $seat->toArray();
        $id = $seat['id'];
        $status = $seat['status'];

        $currentSeat = Seat::find($id);
        $currentSeat->status = !$status;
        $currentSeat->save();

        //dd(" seat << ", $id, !$status);
        return redirect()->back();
        //return view('seat.edit',compact('seat'));
    }

    public function update(Request $request, seat $seat)
    {
        $request->validate([

            'seat_no' => 'required',
            'status' => 'required',

        ]);


        $seat = new Seat();
        for($i = 0; $i<$request->seat_quantity; $i++){
            $data[] = [
                'seat_no' => rand(00,50),

					];		}

        Seat::insert($data);
//$seat->update($request->all());
        return redirect()->route('seats.index')
                        ->with('success','seat updated successfully');
    }

    public function destroy(seat $seat)
    {
        $seat->delete();
        return redirect()->route('seats.index')
        ->with('success','seat delete successfully.');

    }
}
