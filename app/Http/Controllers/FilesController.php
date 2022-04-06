<?php

namespace App\Http\Controllers;

use App\Models\files;
use App\Http\Requests\StorefilesRequest;
use App\Http\Requests\UpdatefilesRequest;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefilesRequest $request)
    {
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'required'
            ]);

        //    $files = []; 
        // $file_old=[];
            if($request->hasfile('filenames'))
            {
                foreach($request->file('filenames') as $file)
                {
                    //suformuojamas naujas atsitiktinis pavadinimas 
                        $name = time().rand(1,100).'.'.$file->extension();
                    //sufomuojamas originalus (pradinis) failo pavadinimas
                        // $name=$file->getClientOriginalName();
                    //perkeliamas failas į norimą vietą
                    $file->move(public_path('files'), $name);  

                    //išsaugojamas senasis pavadinimas
                    $file_old=$file->getClientOriginalName();
                    $files = $name;  

                    //įrašas į db abie bylą
                    $file= new File();
                    $file->filenames = $files;
                    $file->filenames_orig = $file_old;
                    $file->save();
                }
            }

            return back()->with('success', 'Duomenys įkelti');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefilesRequest  $request
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefilesRequest $request, files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(files $files)
    {
        //
    }
}
