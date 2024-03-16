<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Category::all();
        return view('admin/category',$result);
    }

    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get(); 
            $result['category_name']=$arr['0']->category_name;
          
            $result['id']=$arr['0']->id;
            $result['category']=DB::table('categories')->where(['status'=>1])->where('id','!=',$id)->get();
        }else{
            $result['category_name']='';
           
            $result['id']=0;

            $result['category']=DB::table('categories')->where(['status'=>1])->get();
            
        }

        return view('admin/manage_category',$result);
    }
    public function manage_category_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
           
            'category_name'=>'required|unique:categories,category_name,'.$request->post('id'),   
        ]);

        if($request->post('id')>0){
            $model=Category::find($request->post('id'));
            $msg="Category updated";
        }else{
            $model=new Category();
            $msg="Category inserted";
        }
        $model->category_name=$request->post('category_name');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/category/manage_category');
        
    }
}
