<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\withdrawals;

use DB;

class withdrawalsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $withdrawals = withdrawals::all();
        //         $withdrawals = withdrawals::orderBy('date_to_withdraw','desc')->paginate(15);

        // return view('withdrawals.index')->with('withdrawals',$withdrawals);


        // searching
        $search_value = $request->input('search_value');
        $withdrawals = withdrawals::latest()
                ->search($search_value)
                ->paginate(15);

        return view('withdrawals.index', compact('withdrawals'))->with('withdrawals', $withdrawals);
        // return view('posts.index', compact('posts'))->with('posts', $posts)->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return View::make('admin.record_new', compact('companies'));
    //     $withdrawals = withdrawals::lists('id', 'id');

    // return view('withdrawals.create', compact('id', 'id'));
    // return view('withdrawals.create', compact('companies'));

        return view('withdrawals.create');
    }

    public function create1()
    {

        // return View::make('admin.record_new', compact('companies'));
    //     $withdrawals = withdrawals::lists('id', 'id');

    // return view('withdrawals.create', compact('id', 'id'));
    // return view('withdrawals.create', compact('companies'));

        return view('withdrawals.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required',
        //     'cover_image' => 'required',
        //     'condition' => 'required',
        //     'category' => 'required',
        //     'location' => 'required',
        // ]);
        // Create withdrawals
        // $withdrawals = DB::select(SELECT * FROM withdrawals);
       

       
         
        $withdrawals = new withdrawals;
        $withdrawals->actual_withdraw_date = $request->input('actual_withdraw_date');
        $withdrawals->status = $request->input('status');
        $withdrawals->date = $request->input('date');
        $withdrawals->company = $request->input('company');
        $withdrawals->address = $request->input('address');
        $withdrawals->date_to_withdraw = $request->input('date_to_withdraw');
        $withdrawals->driver = $request->input('driver');
        $withdrawals->plate_no = $request->input('plate_no');
        $withdrawals->po_reference = $request->input('po_reference');
        $withdrawals->destination = $request->input('destination');
        $withdrawals->kg1 = $request->input('kg1');
        $withdrawals->kg2 = $request->input('kg2');
        $withdrawals->kg3 = $request->input('kg3');
        $withdrawals->item1 = $request->input('item1');
        $withdrawals->item2 = $request->input('item2');
        $withdrawals->item3 = $request->input('item3');
        $withdrawals->qty1 = $request->input('qty1');
        $withdrawals->qty2 = $request->input('qty2');
        $withdrawals->qty3 = $request->input('qty3');
        $withdrawals->info1 = $request->input('info1');
        $withdrawals->info2 = $request->input('info2');

        

        $withdrawals->save();
        return redirect('/withdrawals')->with('success', 'created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $withdrawals = withdrawals::find($id);
        return view('withdrawals.show')->with('withdrawals', $withdrawals);
    }
    public function print($id)
    {       
        $withdrawals = withdrawals::find($id);
        return view('withdrawals.print')->with('withdrawals', $withdrawals);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $withdrawals = withdrawals::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$withdrawals->user_id){
        //     return redirect('/withdrawals')->with('error', 'Unauthorized Page');
        // }



        return view('withdrawals.edit')->with('withdrawals', $withdrawals);
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
      

        // Create withdrawals
        $withdrawals = withdrawals::find($id);
        $withdrawals->actual_withdraw_date = $request->input('actual_withdraw_date');
        $withdrawals->status = $request->input('status');
        $withdrawals->date = $request->input('date');
        $withdrawals->company = $request->input('company');
        $withdrawals->address = $request->input('address');
        $withdrawals->date_to_withdraw = $request->input('date_to_withdraw');
        $withdrawals->driver = $request->input('driver');
        $withdrawals->plate_no = $request->input('plate_no');
        $withdrawals->po_reference = $request->input('po_reference');
        $withdrawals->destination = $request->input('destination');
        $withdrawals->kg1 = $request->input('kg1');
        $withdrawals->kg2 = $request->input('kg2');
        $withdrawals->kg3 = $request->input('kg3');
        $withdrawals->item1 = $request->input('item1');
        $withdrawals->item2 = $request->input('item2');
        $withdrawals->item3 = $request->input('item3');
        $withdrawals->qty1 = $request->input('qty1');
        $withdrawals->qty2 = $request->input('qty2');
        $withdrawals->qty3 = $request->input('qty3');
        $withdrawals->info1 = $request->input('info1');
        $withdrawals->info2 = $request->input('info2');

        
        $withdrawals->save();
        return redirect('/withdrawals')->with('success', 'withdrawals Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $withdrawals = withdrawals::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$withdrawals->user_id){
        //     return redirect('/withdrawals')->with('error', 'Unauthorized Page');
        // }

        
        $withdrawals->delete();
        return redirect('/withdrawals')->with('success', 'withdrawals Removed');
    }
}
