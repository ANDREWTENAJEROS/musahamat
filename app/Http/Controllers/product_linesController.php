<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\product_lines;
use App\supplier;


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
        
        try {
            session_start();     
        $_SESSION['bid'];

        // $product_lines = product_lines::orderBy('product_line_name','desc')->where('supplier','like','bid')->paginate(10);
        $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();
        return view('product_lines.index')->with('product_lines', $product_lines);

          }
          catch (\Exception $e) {
            $product_lines = DB::table('product_lines')->get();
            return view('product_lines.index')->with('product_lines', $product_lines);
            echo "empty"; 
          }
    }

    public function search()
    {   
        session_start();     
        $_SESSION['bid'];

        // $product_lines = product_lines::orderBy('product_line_name','desc')->where('supplier','like','bid')->paginate(10);
        $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();
        return view('product_lines.index')->with('product_lines', $product_lines);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // $companies = transactions::lists('id');
        // return View::make('admin.record_new', compact('companies'));
    //     $product_lines = product_lines::lists('id', 'id');

    // return view('product_lines.create', compact('id', 'id'));
    // return view('product_lines.create', compact('companies'));
        // $companies = supplier::lists('business_name');
        // return view('product_lines.create', compact('companies'));
         // this NEEDS TO BE AT THE TOP of the page before any output etc
         session_start();
        return view('product_lines.create');

        // return view('product_lines.create');
    }

    public function create_fpa(Request $request)
    {

        // $companies = transactions::lists('id');
        // return View::make('admin.record_new', compact('companies'));
    //     $product_lines = product_lines::lists('id', 'id');

    // return view('product_lines.create', compact('id', 'id'));
    // return view('product_lines.create', compact('companies'));
        // $companies = supplier::lists('business_name');
        // return view('product_lines.create', compact('companies'));
         // this NEEDS TO BE AT THE TOP of the page before any output etc
         session_start();
        return view('product_lines.create_fpa');

        // return view('product_lines.create');
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
            'supplier' => 'required',
        ]);
        // Create product_lines

        // $product_lines = DB::select(SELECT * FROM product_lines);
        

        session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
        $product_lines = new product_lines;
        $product_lines->supplier =$request->input('supplier');
        $product_lines->product_line_name = $request->input('product_line_name');
        $product_lines->MFL_price = $request->input('MFL_price');
        $product_lines->agritech_price = $request->input('agritech_price');
        $product_lines->certificate = $request->input('certificate');
        $product_lines->expiration_date = $request->input('expiration_date');
        $product_lines->save();
        $url = 'supplier/'.$_SESSION['bid'];
        echo $url;
        return redirect($url)->with('success', 'Document added');

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
        $product_lines = product_lines::find($_SESSION['bid']);
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
        $product_lines->supplier =$product_lines->supplier;
        $product_lines->product_line_name = $request->input('product_line_name');
        $product_lines->MFL_price = $request->input('MFL_price');
        $product_lines->agritech_price = $request->input('agritech_price');
        $product_lines->certificate = $request->input('certificate');
        $product_lines->expiration_date = $request->input('expiration_date');
        $product_lines->save();
        $url = 'supplier/'. $product_lines->supplier;
        return redirect($url)->with('success', 'Document updated');

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
        
        $product_lines->delete();
        return redirect('/product_lines')->with('success', 'Document Removed');
    }
}
