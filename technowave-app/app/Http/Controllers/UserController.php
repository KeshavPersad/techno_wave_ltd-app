<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(){

        // $user_details = User::findorFail($id);

        return view('template0_pages.user.myaccount', [

            // 'user_details' => $user_details,

        ]);

    }

    public function adminAccount(){

        // $user_details = User::findorFail($id);
        // dd($user_details);

        return view('template0_pages.admin.admin-myaccount', [

            // 'user_details' => $user_details,

        ]);

    }


    // public function editAccount($id){

    //     $user_details = User::findorFail($id);
    //     // dd($user_details);

    //     return view('template0_pages.admin.edituser', [

    //         'user_details' => $user_details,

    //     ]);

    // }

    // public function updateAccount(Request $request, $id){

    //     $user = User::findorFail($id);
    //     // dd($user);

    //     $user->first_name = $request->input('first_name');
    //     $user->last_name = $request->input('last_name');
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     $user->phone_number = $request->input('phone_number');
    //     $user->user_image = $request->input('user_image');
    //     $user->user_lot_number = $request->input('user_lot_number');
    //     $user->user_street = $request->input('user_street');
    //     $user->user_city = $request->input('user_city');
    //     $user->update();

    //     return redirect('/myaccount')->with('status' ,"Account Updated Successfully");

    // }

    // public function deleteAccount(Request $request){

    //     $user = User::where('id', $request->id)->delete();      

    //     return redirect('/myaccount')->with('status', 'Account Deleted Successfully');
        
    // }

    public function registeredUsers(Request $request){

        $user_details = User::all();
        $user_details = $this->filterUser($request);

        return view('template0_pages.admin.registeredUsers', [

            'user_details'=> $user_details,

        ]);

    }

    public function registeredUsersList(Request $request){

        $user_details = User::all();
        $user_details = $this->filterUser($request);

        return view('template0_pages.admin.registeredUsersList', [

            'user_details'=> $user_details,

        ]);

    }

    public function deleteUser(Request $request){

        $user = User::where('id', $request->id)->delete();      

        return redirect('/registeredUsers')->with('status', 'User Deleted Successfully');
        
    }


    public function filterUser(Request $request){

        $params = $request->query();
        $user_details = User::where('id', '>' , 0);
    
        foreach($params as $key => $value){

            if(empty($value)){
                continue;
            }

            switch($key){

                case 'search':
                    $user_details->where('first_name', 'LIKE' , '%' .$value. '%')
                    ->orWhere('last_name', 'LIKE' , '%' .$value. '%')
                    ->orWhere('email', 'LIKE' , '%' .$value. '%')
                    ->orWhere('id', 'LIKE' , '%' .$value. '%');
                    break;

                case 'sort':
                    //localhost:8000/store?sort=title
                    $keyValues = $this->orderBy($value);
                    $user_details->orderBy($keyValues[0], $keyValues[1]);
                    break;

                default:

                    break;

            }
        }

        return $user_details->get();
    }
}
