<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $productData = Product::paginate(4);
        return view('Users.Admin.adminIndex')->with(['productData' => $productData]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //partner add meal
     public function addProduct(){
        $admin_data = Admin::get();
        $user_data = User::get();
        return view('Users.Admin.addProduct')->with(['adminData' => $admin_data, 'userData' => $user_data]);
    }

    public function createProduct(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_type' => 'required',
            'product_image' => 'required',
            'product_price' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $product = new Product();

        if($request->hasfile('product_image')){

            $imageFile = $request->file('product_image');
            $imageName = uniqid().'_'.$imageFile->getClientOriginalName();
            $imageFile->move(public_path().'./uploads/product', $imageName);

            $product->product_image = $imageName;
        }

        $product->product_name = $request->input('product_name');
        $product->product_type = $request->input('product_type');
        $product->product_price = $request->input('product_price');
        $product->admin_id = $request->input('admin');
        $product->user_id = $request->input('user');
        $product->save();
        return redirect()->route('admin#index')->with(['productCreated', 'Product Created Sucessfully']);
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
    public function editProduct($id)
    {
        $admin_data =  Admin::get();
        $user_data = User::get();
        $editProduct = Product::where ('id', $id)
                    ->first();
        return view('Users.Admin.updateProduct')->with(['editProduct' => $editProduct, 'userData' => $user_data, 'adminData' => $admin_data]);
    }

    public function detailsProduct($id){
        $productData = Product::where('id', $id)->first();
        //$mealData = Meal::FindorFail($id);
        //dd($mealData);
        return view('Users.Admin.adminIndex')->with(['productData' => [$productData]]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request, $id)
    {
        $updateData = $this->requestUpdateProductData($request);

       //get old image
       $updateImgData = Product::select('product_image')->where('id', $id)->first();
       $updateImage = $updateImgData['product_image'];

       //delete old image
       if(File::exists(public_path().'/uploads/product/'.$updateImage)){
           File::delete(public_path().'/uploads/product/'.$updateImage);
       }

       //get new image
       $newImageFile = $request->file('product_image');
       $newImageName = uniqid().'_'.$newImageFile->getClientOriginalName();
       $newImageFile->move(public_path().'./uploads/product/', $newImageName);

       $updateData['product_image'] = $newImageName;


       //update database image
       Product::where('id',$id)->update($updateData);
       return redirect()->route('partner#index')->with(['updateData' => 'Product updated Sucessfully']);
    }

     // partner delete meal
     public function deleteProduct($id){
        $deleteData = Product::select('product_image')->where('id', $id)->first();
        $deleteImage = $deleteData['product_image'];

        Product::where('id', $id)->delete(); //db data delete

        //project image folder delete
        if(File::exists(public_path().'/uploads/product/'.$deleteImage)){
            File::delete(public_path().'/uploads/product/'.$deleteImage);
        }

        return back()->with(['productDeleted' => "Product Delete Successfully"]);
    }

    //update partner
    public function updateAdmin(){
        return view('Users.Admin.updateAdmin');
    }

    //request update category data
    private function requestUpdateProductData($request){
        $arr = [
            'product_name' => $request->product_name,
            'product_type'=> $request->product_type,
           'product_price'=>$request->product_price,
            'admin_id'=>$request->admin_id,
            'user_id' =>$request->user_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        if(isset($request->product_image)){
            $arr['product_image'] = $request->product_image;
        }

        return $arr;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editAdmin($id)
    {
        $admin_data =  Admin::get();
        $user_data = User::get();
        $editAdmin = Admin::where ('id', $id)
                    ->first();
        return view('Users.Admin.updateAdmin')->with(['editAdmin' => $editAdmin, 'userData' => $user_data, 'adminData' => $admin_data]);
    }
    public function destroy($id)
    {
        //
    }
}
