<?php
/**
 * Created by PhpStorm.
 * User: MarijaAngeli
 * Date: 4/25/18
 * Time: 11:23 AM
 */

namespace Maria\Nova\Http;


use Illuminate\Routing\Controller;
use Maria\Nova\Models\Nova;

class NovaController extends Controller
{
    public function index(){
        //return view('nova::index');
        $results = Nova::all();
        return view('nova::index')->with('results',$results);
    }
}