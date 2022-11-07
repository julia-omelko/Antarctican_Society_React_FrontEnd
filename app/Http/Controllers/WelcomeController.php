<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Hello World';

        //$files = Storage::disk('local')->put('filename.txt', 'Contents');

        //$files = Storage::allFiles();
        //$path = Storage::url('CWMS398_offloading_Auster.jpg');
        //$img = Storage::get("storage/app/public/Images/CWMS369_new_deck_on_THORSHOVDI.jpg");
        //echo asset('storage/CWMS398_offloading_Auster.jpg');

        //dd($files);

    //     foreach ($files as $file) {
    //     echo $file->getFilename();
    // }
        Log::info(Storage::directories('public'));
        //Log::info(Storage::url($files));
     //return response()->json(['files' => $files]);
     $files = collect(Storage::allFiles('public/Images_1949'))->map(function($files) {
        //Log::info($files);
        return Storage::url($files);
        
    });
        $filesTwo = collect(Storage::allFiles('public/Images_1955'))->map(function($filesTwo) {
        //Log::info($files);
        return Storage::url($filesTwo);
        
    });

        $filesThree = collect(Storage::allFiles('public/Images_1960'))->map(function($filesThree) {
        //Log::info($files);
        return Storage::url($filesThree);
        
    });
         $filesFour = collect(Storage::allFiles('public/Images_1965'))->map(function($filesFour) {
        //Log::info($files);
        return Storage::url($filesFour);
        
    });
        $filesFive = collect(Storage::allFiles('public/Images_1970'))->map(function($filesFive) {
        //Log::info($files);
        return Storage::url($filesFive);
        
    });

        $filesSix = collect(Storage::allFiles('public/Images_1975'))->map(function($filesSix) {
        //Log::info($files);
        return Storage::url($filesSix);
        
    });
         $filesSeven = collect(Storage::allFiles('public/Images_1980'))->map(function($filesSeven) {
        //Log::info($files);
        return Storage::url($filesSeven);
        
    });
        $filesEight = collect(Storage::allFiles('public/Images_1985'))->map(function($filesEight) {
        //Log::info($files);
        return Storage::url($filesEight);
        
    });

        $filesNine = collect(Storage::allFiles('public/Images_1990'))->map(function($filesNine) {
        //Log::info($files);
        return Storage::url($filesNine);
        
    });
         $filesTen = collect(Storage::allFiles('public/Images_1995'))->map(function($filesTen) {
        //Log::info($files);
        return Storage::url($filesTen);
        
    });
        $filesEleven = collect(Storage::allFiles('public/Images_2000'))->map(function($filesEleven) {
        //Log::info($files);
        return Storage::url($filesEleven);
        
    });

        $filesTwelve = collect(Storage::allFiles('public/Images_2005'))->map(function($filesTwelve) {
        //Log::info($files);
        return Storage::url($filesTwelve);
        
    });
        $filesThirteen = collect(Storage::allFiles('public/Images_2010'))->map(function($filesThirteen) {
        //Log::info($files);
        return Storage::url($filesThirteen);
        
    });
//dd($files);

        return Inertia::render('Welcome', [
            'files' => $files, 'filesTwo' => $filesTwo, 'filesThree' => $filesThree, 
            'filesFour' => $filesFour, 'filesFive' => $filesFive, 'filesSix' => $filesSix, 
            'filesSeven' => $filesSeven, 'filesEight' => $filesEight, 'filesNine' => $filesNine, 
            'filesTen' => $filesTen, 'filesEleven' => $filesEleven, 'filesTwelve' => $filesTwelve, 'filesThirteen' => $filesThirteen
            // 'files' => [
            //     "1950" => [$files->toArray()], 
            //     "1955" => [], 
            //     "1960" => [], 
            //     "1965" => [],
            //     "1970" => [],
            //     "1975" => [],
            //     "1980" => [],
            //     "1985" => [],
            //     "1990" => [],
            //     "1995" => [],
            //     "2000" => [],
            //     "2005" => [],
            //     "2010" => [],
            // ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
