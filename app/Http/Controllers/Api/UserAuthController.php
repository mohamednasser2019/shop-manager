<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UsersResource;
use Validator;
use App\User;
use Auth;

class UserAuthController extends Controller
{
    public $objectName;
    public $folderView;
    public $flash;
    public function __construct(User $model)
    {
 // $this->middleware('auth:api');
        $this->objectName = $model;
    }
public function sendResponse($status , $data= null )
 {

if ($status == false)
		{
			return response(
				[
					'status' => false,
					'errors' => $data
				]
			);
		}
		else
		{
			return response(
				[
					'status' => true,
					'data' => $data
				]
			);
		}
  }

    public function validationErrorsToString($errArray)
    {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) { 

            $errStr = $value[0];

            array_push($valArr, $errStr);
        }
 
        return $valArr;
    }

  public function makeValidate($inputs,$rules)
    {
    	
		$validator = Validator::make($inputs,$rules);
		if($validator->fails())
		{
			return $this->errorsMessages($validator->messages());
		}
		else
		{
			return true;
		}
    }
  public function login(Request $request)
  {
  	// dd($request->all());

    	$rules = [
			'email'=>'required',
			'password'=>'required',
		];
		$validator = Validator::make($request->all(),$rules);



		if($validator->fails())
		{
			return $this->sendResponse(false, $this->validationErrorsToString($validator->messages()));
		}
		else
		{

//custom new login

if(Auth::attempt([
	'email'=>$request->input('email'),
	'password'=>$request->input('password')
                ]))
			{
				$user = auth()->user();

				$user->api_token = str_random(60);
				// $api_token = $user->api_token;

				$user->save();
	   //OR     User::update($user)->find($user->id);


				return $this->sendResponse(true, $user);  
			}
			else
			{
				return $this->sendResponse(false, 'Email or password is not valid !');
			}
		}


  }




    public function index()
    {
        $data = User::all();

        return $this->sendResponse(true,UsersResource::collection($data));

    }

       public function store(Request $request)
    {
        $input = $request->all();
        $validate = $this->makeValidate($input,['name'=>'required','email'=>'required','password'=>'required']);

		if (!is_array($validate)){

			$pass= Hash::make($request['password']);
            $input['password'] = $pass;

        	$data = $this->objectName::create($input);
		}
		else
		{
			return $this->sendResponse(false, $validate);
		}

        return $this->sendResponse(true, $data);
    }

  public function show(Request $request)
    {
    	 $inputs = $request->all();
    	 $validate = $this->makeValidate($inputs,['id'=>'required']);

		if (!is_array($validate))
			
		{
			$id = $request->input('id');
			$data = $this->objectName::findOrFail(intval($id));

			return $this->sendResponse(true, $data);
        }
		else
		{
			return $this->sendResponse(false, $validate);
		}
    }

    public function update(Request $request)
    {
        
        $input = $request->all();
    	$validate = $this->makeValidate($input,
    		[
    			'name'=>'required',
    			'email'=>'required',
    			'password'=>'required',
    			'id'=>'required',
    		]
    	);

		if (!is_array($validate))
		{
			$id = $input['id'];


if($request['password'] != null){

       $pass= Hash::make($request['password']);
       $input['password'] = $pass;

}else
{
    unset($input['password']);
     // $input['password'] = $request['passwordOld'];
    
}




			$data = $this->objectName::find(intval($id))->update($input);

			return $this->sendResponse(true,'Data has been updated');
        }
		else
		{
			return $this->sendResponse(false, $validate);
		}

    }

   
    public function destroy(Request $request)
    {

    	 $inputs = $request->all();
    	 $validate = $this->makeValidate($inputs,['id'=>'required']);

		if (!is_array($validate))
			
		{
			$id = $request->input('id');
			$data = $this->objectName::findOrFail(intval($id))->delete();

			return $this->sendResponse(true,'Data has been deleted');
        }
		else
		{
			return $this->sendResponse(false, $validate);
		}

    }



}
