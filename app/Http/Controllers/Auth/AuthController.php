<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getcheckMail(){

        return view('admin.lock');
    }
    public function postcheckMail(Request $request){
        $this->validate($request,
        [
            'u_email'=>'required|email',
        ],
        [
            'u_email.required' =>'Bạn phải nhập vào Email quản trị!',
            'u_email.email'=>'Định dạng email ko hợp lệ!'
        ]);

            $email = User::where('u_email',$request->u_email)->get();
            if (count($email)>0) {
                foreach ($email as $e) {
                    $authEmail = $e->u_email;
                    $level = $e->u_roles;
                    if ($level == 1) {
                        return redirect('administrator/login/auth?email=' . $authEmail);
                    } elseif ( $level != 1) {
                        return redirect('administrator/login')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không phải là quản trị viên!']);
                    } else {

                    }
                }
            }
        return redirect('administrator')->with(['flash_level' => 'danger', 'flash_message' => 'Email không chính xác!']);
     }
    public function getcheckPass(){
        if (isset($_GET['email'])){
            $email = User::where('u_email',$_GET['email'])->get();
            foreach ($email as $e){
                $name = $e->u_name;
                $avatar ='admin/avatar/'. $e->u_avatar;

                return view('admin.login',['name'=>$name,'avatar'=>$avatar]);
            }
        }

    }
    public function postcheckPass(){

    }
}
