<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('admin.advertisements.index', compact('advertisements')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertisements.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if($request->hasFile('photo1')){
            $file=request()->file('photo1');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo1'] = $fileName;
        }
        if($request->hasFile('photo2')){
            $file=request()->file('photo2');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo2'] = $fileName;
        }
        Advertisement::create($requestData) ;
        return redirect()->route('admin.advertisements.store') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.adevertisements.show', compact('advertisement')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        return view('admin.adevertisements.edit', compact('advertisement')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        if($request->hasFile('photo1')){

            if (isset($advertisement->photo) && file_exists(public_path('/files/photos/' . $advertisement->photo1))) {
                unlink(public_path('/files/photos/' . $advertisement->photo1));
            }
            $file=request()->file('photo1');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo1'] = $fileName;
        }
       
        return redirect()->route('admin.advertisements.index') ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {

        if (isset($advertisement->photo) && file_exists(public_path('/files/photos/' . $advertisement->photo))) {
            unlink(public_path('/files/photos/' . $advertisement->photo));
        }
        $advertisement->delete();
        return redirect()->route('admin.advertisements.index') ;
    }
}
