<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Industry;
use App\Models\Service;
use App\Models\Team;
use App\Models\Tech;
use Illuminate\Http\Request;

class HeroController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.webconfig.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.webconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'promo_link' => 'required'

        ],
        [
            'logo.required'             => 'Field required',
            'promo_link.required'         => 'Field required',
        ]

    );


        if($request->hasFile('logo')) {
            $file              = $request->file('logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/logo/' ;
            $file->move($destinationPath,$fileName);
    	}

        Hero::insert([
            'logo' => @'assets/admin/logo/'.$fileName,
            'promo_link' => $request->promo_link,
        ]);

        return back()->with('hero', 'Data added Successfully');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function servicestore(Request $request)
    {


        $this->validate($request, [
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required'

        ],
        [
            'logo.required'             => 'Field required',
            'title.required'         => 'Field required',
        ]

    );


        if($request->hasFile('logo')) {
            $file              = $request->file('logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/service/' ;
            $file->move($destinationPath,$fileName);
    	}

        Service::insert([
            'logo' => @'assets/admin/service/'.$fileName,
            'title' => $request->title,
        ]);

        return back()->with('hero', 'Data added Successfully');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clientstore(Request $request)
    {


        $this->validate($request, [
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',


        ],
        [
            'logo.required'             => 'Field required',

        ]

    );

        if($request->hasFile('logo')) {
            $file              = $request->file('logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/clients/' ;
            $file->move($destinationPath,$fileName);
    	}

        Client::insert([
            'logo' => @'assets/admin/clients/'.$fileName,

        ]);

        return back()->with('hero', 'Data added Successfully');
    }



    public function techstore(Request $request)
    {


        $this->validate($request, [
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',
        ],
        [
            'logo.required'             => 'Field required',
        ]
    );

        if($request->hasFile('logo')) {
            $file              = $request->file('logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/tech/' ;
            $file->move($destinationPath,$fileName);
    	}

        Tech::insert([
            'logo' => @'assets/admin/tech/'.$fileName,

        ]);

        return back()->with('hero', 'Data added Successfully');
    }


    public function teamstore(Request $request)
    {


        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'designation' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
        ],
        [
            'image.required'             => 'Field required',
            'name.required'             => 'Field required',
            'designation.required'             => 'Field required',
            'about.required'             => 'Field required',
            'facebook.required'             => 'Field required',
            'instagram.required'             => 'Field required',
            'linkedin.required'             => 'Field required',
            'twitter.required'             => 'Field required',
        ]
    );

        if($request->hasFile('image')) {
            $file              = $request->file('image') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/team/' ;
            $file->move($destinationPath,$fileName);
    	}

        Team::insert([
            'image' => @'assets/admin/tech/'.$fileName,
            'name' => $request->name,
            'designation' => $request->designation,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,


        ]);

        return back()->with('hero', 'Data added Successfully');
    }


    public function contactstore(Request $request)
    {


        $this->validate($request, [

            'location' => 'required',
            'email' => 'required',
            'number' => 'required',
            'ifram_link' => 'required',

        ],
        [

            'location.required'             => 'Field required',
            'email.required'             => 'Field required',
            'number.required'             => 'Field required',
            'ifram_link.required'             => 'Field required',

        ]
    );
        Contact::insert([
            'location' => $request->location,
            'email' => $request->email,
            'number' => $request->number,
            'ifram_link' => $request->ifram_link,
        ]);

        return back()->with('hero', 'Data added Successfully');
    }


    public function industrystore(Request $request)
    {


        $this->validate($request, [
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required'

        ],
        [
            'logo.required'             => 'Field required',
            'title.required'         => 'Field required',
        ]

    );


        if($request->hasFile('logo')) {
            $file              = $request->file('logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/industry/' ;
            $file->move($destinationPath,$fileName);
    	}

        Industry::insert([
            'logo' => @'assets/admin/industry/'.$fileName,
            'title' => $request->title,
        ]);

        return back()->with('hero', 'Data added Successfully');
    }


    public function bannerStore(Request $request)
    {


        $this->validate($request, [
            'banner' => 'required|mimes:png,jpg,jpeg|max:2048',
            'meta_teg' => 'required'

        ],
        [
            'banner.required'             => 'Field required',
            'meta_teg.required'         => 'Field required',
        ]

    );


        if($request->hasFile('banner')) {
            $file              = $request->file('banner') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/assets/admin/banner/' ;
            $file->move($destinationPath,$fileName);
    	}

        Banner::insert([
            'banner' => @'assets/admin/banner/'.$fileName,
            'meta_teg' => $request->meta_teg,
        ]);

        return back()->with('hero', 'added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
