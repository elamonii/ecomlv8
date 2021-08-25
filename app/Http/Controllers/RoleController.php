<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Validator;

class RoleController extends Controller
{
    public function adminRoleList(){
        $role = new Role;
        $role_data = $role->all();
        // dd($role_data);      

        return view('admin.roles.role_list')->with('role_data', $role_data);
    }

    public function adminRoleAdd(){
        return view('admin.roles.role_add');
    }

    public function adminRoleSave(Request $req){
        // dd($req->all());

        $validator = Validator::make($req->all(), [
            'role_name' => 'required'
        ]);
        if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withInput($req->all())
                    ->withErrors($validator, 'error');
        }

        $role             = new Role;
        $role->role_name  = $req->role_name;        
        $role->save();

        return Redirect()->route('admin.role-list');        
    }

    public function adminRoleEdit($id){
        // dd($id);
        $roles = Role::where('id', $id)->get();
        $role_data = $roles->find($id);
        return view('admin.roles.role_edit')->with('role_data', $role_data);
    }

    public function adminRoleUpdate(Request $req){
        // dd($req->all());
        Role::where('id', $req->id)->update(['role_name'=>$req->role_name]);
        return redirect()->route('admin.role-list');
    }

    public function adminRoleDelete($id){
        Role::where('id', $id)->delete();
        return redirect()->route('admin.role-list');
    }

}
