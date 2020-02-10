<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;

class usersController extends Controller
{
      public $objectName;
    public $folderView;
    public $flash;


   public function __construct(User $model)
    {
        $this->middleware('auth');

        $this->objectName = $model;
        $this->folderView = 'admin.Users.';
        $this->flash = 'user Data Has Been ';
    }


     public function index()
    {
        // $data = $this->objectName::all();
        $data = User::all();

        return view($this->folderView.'index',compact('data'));

    }

    
    public function create()
    {
       return view($this->folderView.'create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $input = $request->all();

$pass= Hash::make($request['password']);
 $input['password'] = $pass;

        $this->objectName::create($input);

        return redirect('admin/users')->with('success',$this->flash.'Done');
        

    }

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
          $data = $this->objectName::find($id);

     // $pass= Hash::make($request['password']);
     $data->password = null;

        return view($this->folderView.'edit', compact('data'));
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
         $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            // 'password' => 'required|string',
        ]);

        $input = $request->all();
        $id = $input['id'];

// dd($request['password']);

if($request['password'] != null){

       $pass= Hash::make($request['password']);
       $input['password'] = $pass;

}else
{
    unset($input['password']);
     // $input['password'] = $request['passwordOld'];
    
}
        
        $this->objectName::find($id)->update($input);

        return redirect('admin/users')->with('success',$this->flash.'Updated');
    }

    public function destroy($id)
    {
        $chcek = $this->objectName::findOrFail($id);
        if ($chcek)
        {
            $this->objectName::find($id)->delete();

            return redirect()->back()->with('success', $this->flash.' Deleted');
        }
        else
        {
            return redirect()->back()->with('danger', 'Not Found ID !!');
        }
    }
}
