<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Auth;
use App\User;



class MainController extends Controller
{
   public function index(){

        return view('backend.login');
   }

   public function checkuser(Request $request){

    $this->validate($request,[

       'email'=>'required|email',
       'password'=>'required|min:5',
    ]);
    $user_data = array(

      'email'=>$request->email,
      'password'=>$request->password,
    );
       if(Auth::attempt($user_data)){

       return redirect('main/successlogin');
       }

       else 
       {
        
       return back()->with('error','Login problem');

       }

       
   }
   public function successlogin(){

        return view ('backend.pages.dashboard');
       }
       public function logout(){
         Auth::logout();

         return view('login');
       }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new User;
        $crud->name= $request->get('name');
        $crud->email= $request->get('email');
        $crud->password=bcrypt($request->get('password'));
            
            
            

            $crud->save();
        //return redirect('/crud');
         return back()->with('success', 'You have just created one item');

        

    }
}

