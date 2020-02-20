<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\company;
use App\Store_Classification;
use App\company_bill;
use App\bill_poduct;
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
        $Store_Classification = Store_Classification::pluck('name','id');
        $company_bills = company_bill::find(1);
        $bill_poducts = bill_poduct::where('Bill_id',1)->get();
         // $companiescust = company::where('id',$company_bills->company_id)->get();

// dd($companiescust);
        return view($this->folderView.'AddProduct',compact('companies','company_bills','Store_Classification','bill_poducts'));
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

    public function addProduct(Request $request)
    {
if ($request->ajax()) {

            $attribute = [
                'name' => 'you must enter name',
                'price' =>'you must enter price',
                'gomla' => 'you must enter gomla',
                'classification_id' => 'you must enter classification',
                'quantity' => 'you must enter quantity',
                'Alarm_QUANTITY' => 'you must enter Alarm_QUANTITY',
                'BARCODE' => 'you must enter BARCODE',
                'Expiration_Date' => 'you must enter Expiration_Date',
            ];
            $data = $this->validate(request(), [
                'name' => 'required',
                'price' => 'required|unique:users,email',
                'gomla' => 'required',
                'classification_id' => 'required',
                'quantity' => 'required',
                'Alarm_QUANTITY' => 'required',
                'BARCODE' => 'required'
            ], [], $attribute);
            $product = product::create($data);
            $html = view('pages.Products.AddProduct', compact('product'))->render();
            return response(['status' => true, 'result' => $html, 'msg' => 'Product Added successfully']);
        }
        // return redirect()->route('users.users')->with('success', 'Product Added successfully');

    }
    public function store(Request $request)
    {
        //CompanyBillStore
        // $rules =array(
        //      'bill_num' => 'required',
        //      'company_id' => 'required',

        // );
        // $error = Validator::make($request->all(),$rules);

        // if($error->fails())
        // {
        //     return response()->json(['errors'=>$error->errors()->all()]);
        // }
        //   $form_data = array(
        //         'bill_num' => $request->bill_num,
        //         'company_id' => $request->company_id,
        //   );

        //   company_bill::create($form_data);
        //   return response()->json(['success' =>'Data Added successfully.']);

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
