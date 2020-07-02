<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

public function affiche() {
     return view('Catalogue');


}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        /* if (!Gate::allows('isRole1')) {
            abort(403,"Tu n'est pas authorisé à faire cette action");
        } */

        $data = $request->only(['shortDescr','longDescr','distinctiveSign', 'brand_id', 'picture']) ;
        // todo : validation
        $product = Product::create($data);
        // cration des dépendance
        return new ProductResource($product);
    }

    public function create() {

       /*  if (!Gate::allows('isRole1')) {
            abort(403,"Tu n'est pas authorisé à faire cette action");
        } */
        return view('AddProduct');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function afficheproduit(Product $product) {
      //$bike = Bike::findOrFail($product);
     //return view('Product', compact ('bike'));
     //return view('Product')->with('shortDescr', 'Victoria');
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        /* if (!Gate::allows('isRole1')) {
            abort(403,"Tu n'est pas authorisé à faire cette action");
        } */
        $data = $request->only(['shortDescr','longDescr','distinctiveSign', 'brand_id', 'picture']) ;
        // todo : validation
        $product->update($data);
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }

    public function uploadFile(Request $request){

        /* if (!Gate::allows('isRole1')) {
            abort(403,"Tu n'est pas authorisé à faire cette action");
        } */

    if ($request->input('submit') != null ){

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
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){




          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );

             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue;
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "shortDescr"=>$importData[1],
               "longDescr"=>$importData[2],
               "distinctiveSign"=>$importData[3],
               "brand_id"=>$importData[4],
               "picture"=>$importData[5]);
            Product::insertData($insertData);

          }

          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    }

    // Redirect to index
    return redirect()->action('PoductController@affiche');
  }
}
