<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function adminUserList(){
        return view('admin.users.user_list');
    }

    public function adminUserAdd(){
        return view('admin.users.user_add');
    }
    
    public function adminUserEdit(){
        return view('admin.users.user_edit');
    }
    
    public function adminUserDetails(){
        return view('admin.users.user_details');
    }
    
    public function adminUserDelete(){
        return redirect()->route('admin.users.user_list');
    }

    public function adminUserSave(Request $rdata){
        // dd($rdata->all());

        $validator = Validator::make($rdata->all(), [
            'name' => 'required',
            'phone' => 'required'
        ]);
        if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withInput($rdata->all())
                    ->withErrors($validator, 'error');
        }

        $user           = new User;
        $user->name     = $rdata->name;
        $user->phone    = $rdata->phone;
        $user->email    = $rdata->email;
        $user->address  = $rdata->address;
        $user->gender   = $rdata->gender;
        $user->role_id  = $rdata->role_id;
        // $user->image  = $image_name;
        $user->save();

        $name = $rdata->name;
        if($rdata->hasFile('user_image')){
            $file = $rdata->file('user_image');
            $image_enc_name = $name.rand(0,9999).md5($file->getClientOriginalName());
            $image_ext = $file->getClientOriginalExtension();
            $image_name = $image_enc_name.".".$image_ext;
            $destinationPath = "public/user_image/".$user->id;
            $file->move($destinationPath,$image_name.".".$image_ext);
        }else{
            $image_name = "";
        }
        
        // $id = $user->id;
        // $user_find = User::find($id);

        User::where('id', $user->id)->update(array('user_image' => $image_name));

        $notification = array(
            'message' => 'User info added successfully.',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    
    // Role management routes function temporary ========================================

    public function adminRoleWisePermission(){
        return view('admin.role_management.role_wise_permissions');
    }
    
    public function adminUserWiseRole(){
        return view('admin.role_management.user_wise_roles');
    }
    
    // Role management routes function temporary ========================================

    
}
