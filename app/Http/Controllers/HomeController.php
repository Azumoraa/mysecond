<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Information\InformationRepository;

class HomeController extends Controller
{

    private $informationRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InformationRepository $informationRepo)
    {
        $this->middleware('auth');

        $this->informationRepo=$informationRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function information()
    {
    	return view('information');
    }
    public function information_create(Request $request)
    {
        $input=$request->all();
        
       return $this->informationRepo->create($input);
        return back();
    }
}
