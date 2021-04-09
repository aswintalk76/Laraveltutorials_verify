<?php

namespace App\Http\Controllers;

use App\Models\AdminVendor;
use Illuminate\Http\Request;
use Storage;

class AdminVendorController extends Controller
{
 
    public function index()
    {
        $result['data']=AdminVendor::all();
        return view('adminvendor',$result);
    }
    public function manage_adminvendor_process(Request $request)
    {
        $request->validate([
            'adminvendor_name'=>'required',
            'adminvendor_email'=>'required|unique:admin_vendors,adminvendor_email,'.$request->post('id'),
            'adminvendor_number'=>'required',
            'adminvendor_usertype'=>'required'
            
        ]);

        if($request->post('id')>0){
            $model=AdminVendor::find($request->post('id'));
            $msg="Admin Vendor updated";
        }else{
            $model=new AdminVendor();
            $msg="Admin Vendor inserted";
        }
        if($request->hasfile('adminvendor_image')){

            if($request->post('id')>0){
               
                $arrImage=DB::table('adminvendor')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->adminvendor_image)){
                    Storage::delete('/public/media/'.$arrImage[0]->adminvendor_image);
                }
            }
            $adminvendor_image=$request->file('adminvendor_image');
            $ext=$adminvendor_image->extension();
            $image_name=time().'.'.$ext;
            $adminvendor_image->storeAs('/public/media/',$image_name);
            $model->adminvendor_image=$image_name;
        }

        $model->adminvendor_name=$request->post('adminvendor_name');
        $model->adminvendor_email=$request->post('adminvendor_email');
        $model->adminvendor_number=$request->post('adminvendor_number');
        $model->adminvendor_usertype=$request->post('adminvendor_usertype');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('adminvendor');
    }
    public function show(Request $request,$id='')
    {
        $arr=AdminVendor::where(['id'=>$id])->get(); 
        $result['list']=$arr['0'];
        return view('show_adminvendor',$result);
    }

    
    public function manage_adminvendor(Request $request,$id='')
    {
        if($id>0){
            $arr=AdminVendor::where(['id'=>$id])->get(); 

            $result['adminvendor_name']=$arr['0']->adminvendor_name;
            $result['adminvendor_email']=$arr['0']->adminvendor_email;
            $result['adminvendor_number']=$arr['0']->adminvendor_number;
            $result['adminvendor_usertype']=$arr['0']->adminvendor_usertype;
            $result['adminvendor_image']=$arr['0']->adminvendor_image;
            
            $result['id']=$arr['0']->id;
        }else{
            $result['adminvendor_name']='';
            $result['adminvendor_email']='';
            $result['adminvendor_number']='';
            $result['adminvendor_usertype']='';
            $result['adminvendor_image']='';
            $result['id']=0;
            
        }
        return view('manage_adminvendor',$result);
    }

    public function delete(Request $request,$id){
        $model=AdminVendor::find($id);
        $model->delete();
        $request->session()->flash('message','AdminVendor deleted');
        return redirect('adminvendor');
    }

    public function status(Request $request,$status,$id){
        $model=AdminVendor::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','AdminVendor status updated');
        return redirect('adminvendor');
    }

   
}
