<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use DB;

class usercontroller extends Controller
{
    public function __construct()
    {
        $this->obj=new register;
    }
    public function index()
    {
        return view('doner.index');
    }
    public function register()
    {
        return view('doner.register');
    }

    public function reg(request $req)
    {
        $name=$req->input('name');
        $age=$req->input('age');
        $sex=$req->input('sex');
        $bgroup=$req->input('bgroup');
        $date=$req->input('date');
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=['name'=>$name,
                'age'=>$age,
                'sex'=>$sex,
                'bgroup'=>$bgroup,
                'date'=>$date,
                'uname'=>$uname,
                'password'=>$password];     
        $this->obj->insertregister('registers',$data);
        return redirect('/');
    }
    public function viewdetails()
    {
        $data['result']=register::get();
        return view('doner.viewdetails',$data);
        // $users = DB::table('registers')->simplePaginate(3);
       
    }
    public function login()
    {
        return view('doner.login');
    }

    public function loginaction(Request $req)
    {
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=$this->obj->selectdata('registers',$uname,$password);
        if(isset($data))
        {
            $req->session()->put(array('sessid'=>$data->id));
            return redirect('/home');
        }
        else
        {
            return redirect('/login')->with('error','invalid username or password!!');
        }
    }
    public function home()
    {
        $id=session('sessid');
        $data['result']=$this->obj->name('registers',$id);
        return view('doner.home',$data);
    }
    public function update()
    {
        $id=session('sessid');
        $data['result']=$this->obj->selectreg('registers',$id);
        return view('doner.view',$data);
    }
    public function updatereg(request $req,$id)
    {
        $name=$req->input('name');
        $age=$req->input('age');
        $sex=$req->input('sex');
        $bgroup=$req->input('bgroup');
        $date=$req->input('date');
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=['name'=>$name,
                'age'=>$age,
                'sex'=>$sex,
                'bgroup'=>$bgroup,
                'date'=>$date,
                'uname'=>$uname,
                'password'=>$password]; 
        $this->obj->updates('registers',$data,$id);
        return redirect('/view');
    }
    public function logout(request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
    public function search(request $req)
    {
        $text = $req->input('search');
        $doner = register::where('name', 'Like', '%'.$text.'%')->get();
        echo $doner;
        exit();
        return redirect('/viewdetails',$doner);
    }

}
