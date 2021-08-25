<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Validator;

class PermissionController extends Controller
{
    public function adminPermissionList(){
        $permission = new Permission;
        $permission_data = $permission->all(); 

        return view('admin.permissions.permission_list')->with('permission_data', $permission_data);
    }

    public function adminPermissionAdd(){
        return view('admin.permissions.permission_add');
    }

    public function adminPermissionSave(Request $req){
        // dd($req->all());

        $validator = Validator::make($req->all(), [
            'permission_name' => 'required'
        ]);
        if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withInput($req->all())
                    ->withErrors($validator, 'error');
        }

        $permission = new Permission;
        $permission->permission_name = $req->permission_name;        
        $permission->permission_route = $req->permission_route;        
        $permission->save();

        return Redirect()->route('admin.permission-list');        
    }    

    public function adminPermissionEdit($id){
        $permissions = Permission::where('id', $id)->get();
        $permission_data = $permissions->find($id);
        return view('admin.permissions.permission_edit')->with('permission_data', $permission_data);
        // return view('admin.permissions.permission_edit');
    }

    public function adminPermissionUpdate(Request $req){
        // dd($req->all());
        Permission::where('id', $req->id)->update([
            'permission_name'=>$req->permission_name,
            'permission_route'=>$req->permission_route,
        ]);
        return redirect()->route('admin.permission-list');
    }    

    public function adminPermissionDelete($id){
        Permission::where('id', $id)->delete();
        return redirect()->route('admin.permission-list');
    }
}
