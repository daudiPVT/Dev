<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\QueryException ;
use App\Models\nurse;
class UserController extends Controller
{
    function index() {
        return view('index');
    }
    function cov() {
        return view('cov');
    }

    function login() {
        return view('login');
    }
    function login1() {
        return view('login1');
    }
    function nurse() {
        return view('nurse');
    }
    function store(Request $request) {
        $id = Request::input('id');
        $name = Request::input('name');
        $duty = Request::input('duty');
        $status = Request::input('status');
       
        $n=new nurse;
        $n->id = $id;
        $n->name = $name;
        $n->duty = $duty;
        $n->status = $status;
//        $n->save();

        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
       
        DB::insert('insert into nurses (id, name,duty,status) values (?, ?,?,?)', [$id,$name,$duty,$status]); //sqlinjection
          return response()->json([
           'status'=>200,
           'message'=>'student added succesfully',

           ]);
        
       
     
      
    }
   
    function fetchNurse() {
        $data= nurse::all();;

        // $data = DB::select('select * from nurse');    
       return response()->json([
        'data'=> $data,
       ]);
    }
   
    function r1() {
        return view('register');
    }
    function apshow() {
        return view('ap');
    }
    function showlist() {
        $data = DB::select('select * from finddoctor');    
       return view('find', ["data"=>$data]);
       // return view('find');
    }
    function find(Request $request) {
        $exper = Request::input('experiance');
        $dep = Request::input('department');

        
        $showdata = DB::select('select * from finddoctor where experiance = ? and department=? ', [$exper,$dep]); 
        
        return view('showdoc', ["showdata"=>$showdata]);    
    }
    function showdoc() {
        return view('showdoc');
    }
    function viewapp() {
        return view('viewappointment');
    }
    function viewapp2() {
        return view('showappointment2');
    }
    function labshow(Request $request) {
      

        return view('lab');   
    }
    function lab(Request $request) {
        $id = Request::input('id');
        
        
        $data = DB::select('select * from lab where id = ?', [$id]); 
        $img=null;
        foreach($data as $d)
            {$img=$d->img;}
            
      
        return view('lab', ["data"=>$img]); 
       
    }

    function viewappointment(Request $request) {
        $name = Request::input('name');
        
        
        $data = DB::select('select * from appointment where d_name = ?', [$name]); 
       
     
        return view('showappointment2', ["data"=>$data]);    
    }
    function viewdoc() {
        $data = DB::select('select * from viewdoc');  

        return view('view', ["data"=>$data]);    
    }
    function view(Request $request) {
        $id = Request::input('id');
        $name = Request::input('name');
        $department = Request::input('department');
        $duty = Request::input('duty');
        $startTime = Request::input('startTime');
        $endTime = Request::input('endTime');
        $status = Request::input('status');
       


        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
       
        DB::insert('insert into viewdoc (id, name,department,duty,startTime,EndTime,status) values (?, ?,?,?,?,?,?)', [$id,$name,$department,$duty,$startTime,$endTime,$status]); //sqlinjection
        return redirect('view');
        
       
     
      
    }
    function deleteFish() {
        $id= request('id');
        DB::delete('delete from viewdoc where id= ?', [$id]);
        return redirect('view');
    }
    function viewupdate() {
        $id= request('id'); //13
        $data = DB::select('select * from viewdoc where id = ?',[$id]);  
        return view('edit', ["data"=>$data,'id'=>$id]);
    }
    function update(Request $request) {

        $id1 = Request::input('id');
        $name = Request::input('name');
        $department = Request::input('department');
        $duty = Request::input('duty');
        $startTime = Request::input('startTime');
        $endTime = Request::input('endTime');
        $status = Request::input('status');
       


        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
        
        DB::update('update viewdoc set id=?, name=?, department=? , duty=? , startTime=? , endTime=?, status=? where id= ?', [$id1, $name, $department ,$duty,$startTime,$endTime,$status,$id1]);
        return redirect('view');
        
        return("geo");
        //return redirect()->route('home', ["id" => $id,"id1" => $id1]);
    }


    




    function match() {
        $uname = Request::input('username');
        $pass = Request::input('password');

        $loginData = DB::select('select password from login where username = ?', [$uname]); 
     
        //[password:abc]
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

              if (($tablepass->password) == $pass){
                    Session::put('user', $uname);
                   Session::put('pass',$pass);
                    session()->put('user',$uname);
                    $cookie_name = 'us';
                    $cookie_value=$uname;
                    setcookie($cookie_name,$cookie_value,time()+(84600*30),"/");
                    //return( $_COOKIE[$cookie_name]);
                   // echso session('user');
                    return redirect('index');
                }
                else{
                
                   //$error='Password does not match';
                   // return view('login')->with('error',$error);
                }
            }
            return view('login')->with(['error'=>'error']);
        }
        return view('login')->with(['error'=>'error']);
        //return redirect('login');
    }
    function match1() {
        $id = Request::input('id');
        $pass = Request::input('password');

        $loginData = DB::select('select password from doclogin where id = ?', [$id]); 
     
        //[password:abc]
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

              if (($tablepass->password) == $pass){
                    Session::put('user', $id);
                    Session::put('pass',$pass);
                    session()->put('id',$id);
                   // echso session('user');
                    return redirect('index');
                }
                else{
                   $error='Password does not match';
                    return view('login1')->with('error',$error);
                }
            }
        }
        //return redirect('login');
    }
    
    function register(Request $request) {


        $fname = Request::input('firstname');
        $lname = Request::input('lastname');
        $mname = Request::input('mothername');
        $faname = Request::input('fathername');
        $adress = Request::input('adress');
        $state = Request::input('state');
        $city = Request::input('city');
        $diagnose = Request::input('diagnose');
        $cnic = Request::input('cnic');
        $username= Request::input('username');
        $pass= Request::input('password');


        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
       
        DB::insert('insert into register (firstname, lastname,mothername,fathername,adress,state,city,diagnose,cnic,username,password) values (?, ?,?,?,?,?,?,?,?,?,?)', [$fname,$lname,$mname,$faname,$adress,$state,$city,$diagnose,$cnic,$username,$pass]);
        DB::insert('insert into login (username,password) values (?, ?)', [$username,$pass]);
        //sqlinjection
        return redirect('index');
    }
    function ap(Request $request) {


        $fname = Request::input('firstname');
        $lname = Request::input('lastname');
        $adress = Request::input('adress');
        $dname = Request::input('dname');
        $date = Request::input('date');
        $time = Request::input('time');
        $age = Request::input('age');
        $diagnose = Request::input('diagnose');
        $username= Request::input('username');
        $pass= Request::input('password');


        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
       
        DB::insert('insert into appointment (firstname, lastname,adress,d_name,date,time,age,diagnose,username,password) values (?, ?,?,?,?,?,?,?,?,?)', [$fname,$lname,$adress,$dname,$date,$time,$age,$diagnose,$username,$pass]); //sqlinjection
        return redirect('index');
    }
    function getcookie(Request $request){
        $minutes=1;
        $response= new Response('hello World');
        $response->withCookie(cookie('name','fariz',$minutes));

        return ($response);
    }
    function setcookie(){

    }
   


    //
}
