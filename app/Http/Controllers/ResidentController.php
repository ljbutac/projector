<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resident;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Requests\residentStorerequest;
use App\Http\Requests\residentUpdaterequest;
use App\Http\Controllers\ResidentController;
class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $residents = Resident::all();
        if($request->has('search')){
            $residents = Resident::where('id', 'like', "%{$request->search}%")->orWhere('address', 'like', "%{$request->search}%")->get();
        }
        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(residentStorerequest $request)
    {

        Resident::create([
            'lname' => $request->lname,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'age' => $request->age,
            'address' => $request->address,
            'placeofbirth' => $request->placeofbirth,
            'dateofbirth' => $request->dateofbirth,
            'sex' => $request->sex,
            'civilstatus' => $request->civilstatus,
            'citizenship' => $request->citizenship,
            'occupation' => $request->occupation,
            'ps' => $request->ps,
         
        ]);

        return redirect()->route('residents.index')->with('message', ' Succesfully Added');
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
    public function edit(Resident $resident)
    {
       return view('residents.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(residentUpdaterequest $request, Resident $resident)
    {
        $resident->update([

            'lname' => $request->lname,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'age' => $request->age,
            'address' => $request->address,
            'placeofbirth' => $request->placeofbirth,
            'dateofbirth' => $request->dateofbirth,
            'sex' => $request->sex,
            'civilstatus' => $request->civilstatus,
            'citizenship' => $request->citizenship,
            'occupation' => $request->occupation,
            'ps' => $request->ps,

    
           ]);
    
           return redirect()->route('residents.index')->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        $resident->delete();
        return redirect()->route('residents.index')->with('message', 'Successfully Deleted');
    }
}
