<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\Image;

class BackendWork extends Controller
{
    public function index(){
        
        $data = Project::select('id', 'name', 'image')->get();

        return view ('index', ['data'=>$data]);

    }

    public function projectDetails($id){
        $data = Project::FindOrFail($id);
        $images = Image::where('projectId', 'LIKE',  $id )->get();

        return view ('project', ['data'=>$data, 'images'=>$images]);
    }



    public function create(){

        return view ('admin.createForm');
    }

    public function addProject(Request $request){
        $data = new Project;
        $data->name = $request->name;
        $data->description = $request->description;
        
        $image = $request->image;
        $imageName=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('product' , $imageName);
        $data->image =$imageName ;

        
        $data->language= $request->language;
        $data->framework = $request->framework;
        $data->link = $request->link;
        $data->GitHubLink = $request->GitHub;
        $data->save();

        

        return redirect()->Back();
    }


    public function read(){
        $data = Project::all();

        return view('admin.read' , ['data'=>$data]);
    }

    public function delete($id){
        $data = Project::Find($id);
        $data->delete();

        return redirect()->back()->with('msg', 'the category deleted');
    }


    public function update($id){
        $data = Project::FindorFail($id);

        return view('admin.update' , ['data'=>$data]);
    }

    public function comfirmUpdate($id , Request $request){
        
        $data = Project::Find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        


        $image = $request->image;
        if($image){
        $imageName=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('product' , $imageName);
        $data->image =$imageName ;
        }

        $data->language= $request->language;
        $data->framework = $request->framework;
        $data->link = $request->link;
        $data->GitHubLink = $request->GitHub;
        
        $data->save();
        return redirect()->back()->with('msg', 'the product updated');
    }


    public function imageGallary($id){
        $data = Image::where('projectId', 'LIKE',  $id )->get();

        return view('admin.imageGallary' , ['data'=>$data , 'id'=>$id]);
    }

    public function addimage($id , Request $request){
        $data = new image;
        
        $data->projectId = $id;

        $image = $request->image;
        $imageName=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('gallary' , $imageName);
        $data->images =$imageName ;
       
        $data->save();
        return redirect()->back()->with('msg', 'image added');
    }




    public function deleteImage($id){
        $data = image::FindorFail($id);
        $data->delete();
        
        return redirect()->back()->with('msg', 'image Deleted');
    }
}
