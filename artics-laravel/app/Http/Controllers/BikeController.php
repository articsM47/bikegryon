<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use App\Http\Resources\Bike as BikeResource;



class BikeController extends Controller
{
  /**
   * Display a listing of bikes of the right category.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $category = $request->category;
    return BikeResource::collection($this->findBikes($category));
  }
  
  /**
   * findBikes of right category
   *
   * @param  mixed $category
   * @return void
   */
  protected function findBikes($category)
  {
    if (empty($category)) {
      return Bike::all();
    } else {
      return Bike::where('category', $category)->get();
    }
  }

  /**
   * it put all of the data in de right view "Catalogue"
   *
   * @param  \App\Bike  $Bike
   * @return \Illuminate\Http\Response
   */
  public function affiche()
  {
    return view('Catalogue');
  }

  
  /**
   * store
   *
   * @param  mixed $request
   * @return void
   */
  public function store(Request $request)
  {
    $data = $request->only(['shortDescr', 'longDescr', 'distinctiveSign', 'picture', 'frameSize', 'frameUnit', 'category', 'brand_id']);
    $Bike = Bike::create($data);
    return view("Catalogue");
  }

  /**
   * view of the right page
   *
   * @param  \App\Bike  $Bike
   * @return \Illuminate\Http\Response
   */  
  public function create()
  {
    return view('AddProduct');
  }
  
  /**
   * Display the specified bike.
   *
   * @param  mixed $Bike
   * @return void
   */
  public function show(Bike $Bike)
  {
    return new BikeResource($Bike);
  }

  /**
   * afficheproduit
   *
   * @param  mixed $Bike
   * @return void
   */
  public function afficheproduit($Bike)
  {
    $bike = Bike::findOrFail($Bike);
    return view('Product', compact('bike'));
    //return view('Product')->with('shortDescr', 'Victoria');
  }
 
  /**
   * Update the specified resource in storage.
   *
   * @param  mixed $request
   * @param  mixed $Bike
   * @return void
   */
  public function update(Request $request, Bike $Bike)
  {
    $data = $request->only(['shortDescr', 'longDescr', 'distinctiveSign', 'picture', 'frameSize', 'frameUnit', 'category', 'brand_id']);
    $Bike->update($data);
    return new BikeResource($Bike);
  }
  
  /**
   * Remove the specified bike from storage.
   *
   * @param  mixed $Bike
   * @return void
   */
  public function destroy(Bike $Bike)
  {
    $Bike->delete();
  }
 
  /**
   * uploadFile csv of bikes 
   *
   * @param  mixed $request
   * @return void
   */
  public function uploadFile(Request $request)
  {
    if ($request->input('submit') != null) {

      $file = $request->file('file');

      // File Details
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152;

      // Check file extension
      if (in_array(strtolower($extension), $valid_extension)) {

        // Check file size
        if ($fileSize <= $maxFileSize) {

          // Reading file
          $file = fopen($filepath, "r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata);

            for ($c = 0; $c < $num; $c++) {
              $importData_arr[$i][] = $filedata[$c];
            }
            $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach ($importData_arr as $importData) {

            $insertData = array(
              "shortDescr" => $importData[1],
              "longDescr" => $importData[2],
              "distinctiveSign" => $importData[3],
              "picture" => $importData[4],
              "frameSize" => $importData[5],
              "frameUnit" => $importData[6],
              "category" => $importData[7],
              "brand_id" => $importData[8],
            );
            dd("$insertData");
            Bike::insertData($insertData);
          }

          Session::flash('message', 'Import Successful.');
        } else {
          Session::flash('message', 'File too large. File must be less than 2MB.');
        }
      } else {
        Session::flash('message', 'Invalid File Extension.');
      }
    }
    // Redirect to index
    return view("Catalogue");
  }
}
