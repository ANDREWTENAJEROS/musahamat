<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\product_lines;

use DB;

class product_linesController extends Controller
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
    public function index()
    {
        $product_lines = product_lines::orderBy('created_at','desc')->paginate(10);
        return view('product_lines.index')->with('product_lines', $product_lines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $companies = transactions::lists('id');
        // return View::make('admin.record_new', compact('companies'));
    //     $product_lines = product_lines::lists('id', 'id');

    // return view('product_lines.create', compact('id', 'id'));
    // return view('product_lines.create', compact('companies'));

        return view('product_lines.create');
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
        // Create product_lines
        // $product_lines = DB::select(SELECT * FROM product_lines);
       

       
         
        $product_lines = new product_lines;
        $product_lines->product_lines_id = $;
        $product_lines->product_line_name = $request->input('product_line_name');
        $product_lines->save();
        return redirect('/product_lines')->with('success', 'product line created detail created');

        // $room = product_lines::find($product_lines->room_id);
        // $sdate = product_lines::find($start_date);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_lines = product_lines::find($id);
        return view('product_lines.show')->with('product_lines', $product_lines);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_lines = product_lines::find($id);

        // Check for correct user
        if(auth()->user()->id !==$product_lines->user_id){
            return redirect('/product_lines')->with('error', 'Unauthorized Page');
        }

        return view('product_lines.edit')->with('product_lines', $product_lines);
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
      

        // Create product_lines
        $product_lines = product_lines::find($id);
        $product_lines->transaction_id = $product_lines->transaction_id;
        $product_lines->start_date = $request->input('start_date');
        $product_lines->end_date = $request->input('end_date');
        $product_lines->room_id = $request->input('room_id');
        $product_lines->roomdate = $product_lines->room_id . $product_lines->start_date;
        
        
        $dtB = $product_lines->start_date;
        
        if ( $dtA > $dtB ) {

            return redirect('/product_lines')->with('error', 'Date error: cannot use date before today');

        }
        if ($product_lines->end_date == $product_lines->start_date ) {

            return redirect('/product_lines')->with('error', 'Date error: cannot start and end on the same day');

        }
        if ( $product_lines->end_date < $product_lines->start_date ) {

            return redirect('/product_lines')->with('error', 'Date error: cannot end before the start day');

        }
        $product_lines->save();
        return redirect('/product_lines')->with('success', 'transaction detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_lines = product_lines::find($id);

        // Check for correct user
        if(auth()->user()->id !==$product_lines->user_id){
            return redirect('/product_lines')->with('error', 'Unauthorized Page');
        }

        
        $product_lines->delete();
        return redirect('/product_lines')->with('success', 'transaction detail Removed');
    }
}
