<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
        public function index (){
            if(isset($_GET['page'])){
                return view('pages.' . $_GET['page']);
            }else{
                return view('pages.index');
            }
        }
        // public function article(){
        //     return view('pages.article');
        // }
    
        // public function contact(){
        //     return view('pages.contact');
        // }
    
        // public function list(){
           
        //     return view('pages.list');
        // }
    
        
}
