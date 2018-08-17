<?php

namespace App\Http\Controllers;

use App\business_sponsees;
use App\Files;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!User::getActivation(Auth::id())){
            return view('sponsee.listing-sponsee-business');
        }
        $request = business_sponsees::where('user_id',Auth::id())->firstOrFail();
        return view('sponsee.empty.profile')->with(['info'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (self::userStatus()){
            return redirect('/profile');
        }
        //return view('sponsee.listing-sponsee-business');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|string|max:250',
            'logo_upload' => 'required|image|mimes:jpeg,png',
            'oneLiner' => 'required|string|max:250',
            'description' => 'required|string|max:1000',
            'what_we_offer' => 'required|string|max:1000',
            'what_should_sponsors_expect' => 'required|string|max:1000',
        ]);
        $request['industry']=0;
        $request['rating']=4.7;
        $request['total_funded']='50';
        $request['total_projects']='0';
        $request['financials']=json_encode(['test'=>'test']);
        $request['stats_industry_distribution']=json_encode(['test'=>'test']);
        $request['stats_funding_distribution']=json_encode(['test'=>'test']);
        $request['links_to_sponsorship_assets']='0';
        $request['ROI']='0';
        if($request->isMethod('post')){
            if($request->hasFile('logo_upload')) {
                $file = $request->file('logo_upload');
                $link = Files::upload($file);
            }
        }
        $request['logo'] = $link;
        $request['user_id'] = Auth::id();
        business_sponsees::create($request->all());
        $user = User::find(Auth::id());
        $user->business_listed = true;
        $user->save();
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (self::userStatus()){
            return redirect('/profile');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function userStatus(){
        $id = Auth::id();
        $user = User::find($id);
        if (!$user->business_listed){
            return true;
        }
    }
}
