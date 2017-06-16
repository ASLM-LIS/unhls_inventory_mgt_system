<?php namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\Uploads;

class ApplyController extends Controller {
      public function index()
      {
          //List all archived forms
          $upload = Uploads::all();

          //Load the view and pass the personnel list
          return view('pages.upload')->with('filename',$upload);

      }
    public function destroy($id)
    {
        // delete
        $upload = uploads::find($id);
        $upload->delete();

        // redirect
        Session::flash('message', 'Form successfully deleted!');
        Session::flash('alert-type', 'success');

        return Redirect::to('upload');
    }

    public function download(){
      $file= public_path(). "/download/info.pdf";

       $headers = array('Content-Type: application/jpg',);
         return response()->download($file, 'filename.jpg', $headers);
    }

public function upload() {
  // getting all of the post data
  //$file = array('image' => Request::file('image'));
  $file = Input::file('images');

  //counting all selected images
  $file_count = count($file);
   $uploadcount = 0;

  // setting up rules
  foreach($file as $file) {
  $rules = array('form' => 'required'); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make(array ('form'=>$file), $rules);
  if ($validator->passes()){
    $destinationPath = 'uploads';
    $filename = $file->getClientOriginalName();
    $upload_success = $file->move($destinationPath, $filename);
    $uploadcount ++;

    $extension = $file->getClientOriginalExtension();
         $entry = new uploads;
         $entry->format = $file->getClientMimeType();
         $entry->filename = $filename;
         $entry->save();
       }
  }
  if($uploadcount == $file_count){
     Session::flash('message', 'Uploaded successfully');
     return Redirect::to('upload');
   }
 else {
   return Redirect::to('upload')->withInput()->withErrors($validator);
 }
 }
}
