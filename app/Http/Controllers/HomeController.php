<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function home()
    {
        return view('home');
    }

    public function tableuser()
    {

        $data = User::get();
        return view('table',compact('data'));
    }

    public function tabledaftar()
    {

        // $data = User::get();
        // return view('table',compact('data'));

        return view('tabledaftar');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name']     = $request->name;
        $data['email']    = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request,$id){
        $data = User::find($id);

        return view('edit',compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name']     = $request->name;
        $data['email']    = $request->email;

        if($request -> password){
            $data['password'] = Hash::make($request->password);
        }
        

        User::whereId($id)->update($data);

        return redirect()->route('index');
    }
    public function delete(Request $request, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('index');
    }

    public function table(){
        return 'sukses';
    }
  
}
