<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Storage;
// use Image;
use Intervention\Image\Facades\Image; 
class Social_cont extends Controller
{
  public function loadsocialView(){
    return view('social-view');
} 
}
?> 