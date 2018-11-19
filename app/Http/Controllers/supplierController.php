<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\supplier;
use App\product_lines;

use DB;

class supplierController extends Controller
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
        // $supplier = supplier::all();
                $supplier = supplier::orderBy('business_name','desc')->paginate(10);

        return view('supplier.index')->with('supplier',$supplier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return View::make('admin.record_new', compact('companies'));
    //     $supplier = supplier::lists('id', 'id');

    // return view('supplier.create', compact('id', 'id'));
    // return view('supplier.create', compact('companies'));

        return view('supplier.create');
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
        // Create supplier
        // $supplier = DB::select(SELECT * FROM supplier);
       

       
         
        $supplier = new supplier;
        $supplier->business_name = $request->input('business_name');
        $supplier->business_capitalization = $request->input('business_capitalization');
        $supplier->business_email = $request->input('business_email');
        $supplier->business_fax = $request->input('business_fax');
        $supplier->business_address = $request->input('business_address');
        $supplier->business_category = $request->input('business_category');
        $supplier->business_info1 = $request->input('business_info1');
        // $supplier->business_info2 = $request->input('business_info2');
        // $supplier->business_info3 = $request->input('business_info3');
        $supplier->business_assessment_accreditation = $request->input('business_assessment_accreditation');
        $supplier->business_company_profile = $request->input('business_company_profile');
        $supplier->business_permit = $request->input('business_permit');
        $supplier->business_coa = $request->input('business_coa');
        $supplier->business_fpa_license = $request->input('business_fpa_license');
        $supplier->business_credit_terms = $request->input('business_credit_terms');
        $supplier->business_credit_limit = $request->input('business_credit_limit');
         $supplier->business_nature = $request->input('business_nature');
        $supplier->business_product_lines_id = $request->input('business_product_lines_id');
        $supplier->business_tel = $request->input('business_tel');
        $supplier->business_type_id = $request->input('business_type_id');
        $supplier->business_year_established = $request->input('business_year_established');
        $supplier->save();
        return redirect('/supplier')->with('success', 'Supplier Profile created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $supplier = supplier::find($id);
        $product_lines = product_lines::orderBy('created_at','desc')->paginate(10);
        return view('supplier.show')->with('supplier', $supplier,'product_lines', $product_lines);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = supplier::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$supplier->user_id){
        //     return redirect('/supplier')->with('error', 'Unauthorized Page');
        // }



        return view('supplier.edit')->with('supplier', $supplier);
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
      

        // Create supplier
        $supplier = supplier::find($id);
        $supplier->business_name = $request->input('business_name');
        $supplier->business_capitalization = $request->input('business_capitalization');
        $supplier->business_email = $request->input('business_email');
        $supplier->business_fax = $request->input('business_fax');
        $supplier->business_address = $request->input('business_address');
        $supplier->business_category = $request->input('business_category');
        // $supplier->business_info1 = $request->input('business_info1');
        // $supplier->business_info2 = $request->input('business_info2');
        // $supplier->business_info3 = $request->input('business_info3');
        $supplier->business_assessment_accreditation = $request->input('business_assessment_accreditation');
        $supplier->business_company_profile = $request->input('business_company_profile');
        $supplier->business_permit = $request->input('business_permit');
        $supplier->business_coa = $request->input('business_coa');
        $supplier->business_fpa_license = $request->input('business_fpa_license');
        $supplier->business_credit_terms = $request->input('business_credit_terms');
        $supplier->business_credit_limit = $request->input('business_credit_limit');
         $supplier->business_nature = $request->input('business_nature');
        $supplier->business_product_lines_id = $request->input('business_product_lines_id');
        $supplier->business_tel = $request->input('business_tel');
        $supplier->business_type_id = $request->input('business_type_id');
        $supplier->business_year_established = $request->input('business_year_established');
        $supplier->save();
        return redirect('/supplier')->with('success', 'Supplier Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = supplier::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$supplier->user_id){
        //     return redirect('/supplier')->with('error', 'Unauthorized Page');
        // }

        
        $supplier->delete();
        return redirect('/supplier')->with('success', 'Supplier Removed');
    }
}
