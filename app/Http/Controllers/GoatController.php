<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\BreedType;
use App\GoatInfo;
use App\GoatWeight;
use App\MateStatus;
use App\MatingDetails;
use App\MatingInfo;

class GoatController extends Controller
{
    protected $namespace = '';
    public function signupGoat(Request $request)
    {
      $goatInfo = new GoatInfo();
      $goatInfo->tagid = $request->tagnumber;
      $goatInfo->gender = $request->sex;
      $goatInfo->dob = $request->dateofbirth;
      $goatInfo->adopt = $request->adoptlocation;
      $goatInfo->breedtype = $request->type;
      $goatInfo->save();
      return response()->json(['status' => true,'msg' => 'Saved Successfully']);
    }
    public function fetchGoatInfo(Request $request,$id)
    {
        $goat = GoatInfo::find($id);
        return response()->json(['status' => true,'msg' => $goat]);
    }
    public function savemateinfo(Request $request)
    {
      $mateinfo = new MatingInfo();
      $mateinfo->male_tagid = $request->maleid;
      $mateinfo->female_tagid = $request->femaleid;
      $mateinfo->mate_date = $request->dom;
      $mateinfo->mate_stat = $request->status;
      $mateinfo->save();
      return response()->json(['status' => true,'msg' => 'Saved Successfully']);
    }
    public function saveMateDetails(Request $request)
    {
      $goatInfo = new GoatInfo();
      $goatInfo->tagid = $request->tagnumber;
      $goatInfo->gender = $request->sex;
      $goatInfo->dob = $request->dateofbirth;
      $goatInfo->adopt = $request->adoptlocation;
      $goatInfo->breedtype = $request->type;
      $goatInfo->save();
      $rowid = DB::getPdo()->lastInsertId();
       $mateDetails = new MatingDetails();
         $mateDetails->mate_reference = $request->mateid;
       $mateDetails->goat_id = $rowid;
       $mateDetails->save();
       return response()->json(['status' => true,'msg' => 'Saved Successfully']);
    }
    public function updateMateinfo(Request $request,$mid)
    {
      $mateinfo = MatingInfo::find($mid);
      $mateinfo->mate_stat = $request->matstat;
      $mateinfo->save();
      return response()->json(['status' => true,'msg' => 'Saved Successfully']);
    }
}
