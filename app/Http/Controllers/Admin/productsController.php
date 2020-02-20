<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\company;
use App\company_bill;
use Validator;

class productsController extends Controller
{
    public function __construct(product $model)
    {
        $this->middleware('auth');
        $this->objectName = $model;
        $this->folderView = 'pages.Products.';
        $this->flash = 'Category Data Has Been ';

    }
    public function index()
    {
        $companies = company::pluck('name','id');
        $company_bills = company_bill::find(1);
         // $companiescust = company::where('id',$company_bills->company_id)->get();

// dd($companiescust);
        return view($this->folderView.'AddProduct',compact('companies','company_bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CompanyBillStore
        $rules =array(
             'bill_num' => 'required',
             'company_id' => 'required',

        );
        $error = Validator::make($request->all(),$rules);

        if($error->fails())
        {
            return response()->json(['errors'=>$error->errors()->all()]);
        }
          $form_data = array(
                'bill_num' => $request->bill_num,
                'company_id' => $request->company_id,
          );

          company_bill::create($form_data);
          return response()->json(['success' =>'Data Added successfully.']);

    }
  // public function insertcompany_Bill(Request $request)
  //   {
  //       insertcompany_Bill
  //   }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
