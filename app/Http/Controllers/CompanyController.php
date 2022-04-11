<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->paginate(5);
        return view ('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        //
        $validated = $request->validated();


        $company = Company::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'website'=>$validated['website'],

        ]);

        if (isset($validated['logo'] )) {
            $image_name = $validated['logo']->getClientOriginalName();
            $image_path = $validated['logo']->store('public/images/companies');
            $company->logo = $image_path;
            $company->save();
        }

        return redirect ('/companies')->with('message','Company added');
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
        $company=Company::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompanyRequest $request, $id)
    {
        //

        $validated = $request->validated();

        $company = Company::where('id',$id)->update([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'website'=>$validated['website'],
        ]);

        if (isset($validated['logo'] )) {
            $image_name = $validated['logo']->getClientOriginalName();
            $image_path = $validated['logo']->store('public/images/companies');
            $company->logo = $image_path;
            $company->save();
        }


        return redirect ('/companies')->with('message','Company updated');
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
        $company= Company::find($id);
        $company->delete();
        return redirect('/companies')->with('message','Company Deleted!');
    }
}
