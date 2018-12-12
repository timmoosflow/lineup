<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gig;
use App\Http\Resources\Gig as GigResource;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get gigs
        $gigs = gig::paginate(15);

        // return colection of gigs as a resource
        return GigResource::collection($gigs);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get specific gig
        $gig = gig::findOrFail($id);

        //return single gig as resourc
        return new GigResource($gig);

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // create gig
      $gig = $request->isMethod('put') ? gig::findOrFail
      ($request->gig_id) : new gig;

      $gig->id = $request->input('gig_id');
      $gig->gigDate = $request->input('gigDate');
      $gig->gigTime = $request->input('gigTime');
      $gig->gigDate = $request->input('gigDate');
      $gig->gigName = $request->input('gigName');
      $gig->gigVenue = $request->input('gigVenue');
      $gig->gigColor = $request->input('gigColor');
      $gig->gigGenre = $request->input('gigGenre');
      $gig->gigAct1 = $request->input('gigAct1');
      $gig->gigAct2 = $request->input('gigAct2');
      $gig->gigAct3 = $request->input('gigAct3');
      $gig->gigAct4 = $request->input('gigAct4');
      $gig->gigAct5 = $request->input('gigAct5');
      $gig->gigAct6 = $request->input('gigAct6');
      $gig->gigAct7 = $request->input('gigAct7');
      $gig->gigAct8 = $request->input('gigAct8');
      $gig->gigFace = $request->input('gigFace');
      $gig->gigTick = $request->input('gigTick');
      $gig->gigUser = $request->input('gigUser');


      if($gig->save()) {
          return new GigResource($gig);
      }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get gig
        $gig = gig::findOrFail($id);

        if($gig->delete()) {
        return new GigResource($gig);
        }
    }
}
