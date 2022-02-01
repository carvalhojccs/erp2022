<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $unitRepository;

    public function __construct(Product $product, Category $category, Unit $unit) {
        $this->productRepository = $product;
        $this->categoryRepository = $category;
        $this->unitRepository = $unit;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$data = $this->productRepository->paginate();
        $data = $this->productRepository->all();
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();
        $units = $this->unitRepository->all();
        
        return view('products.create', compact('categories','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('image') && $request->image->isValid()):
            //storage/app/public/upload
            $data['image'] = $request->image->store("upload");
            $this->productRepository->create($data);
            return redirect()->route('products.index');
        else:
            return redirect()->back();
        endif;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if($data = $this->productRepository->find($id)):
            return view('products.create', compact('data'));
            else:
                return redirect()->back();
        endif;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if($data = $this->productRepository->find($id)):
            $data->update($request->all());
            return redirect()->route('products.index');
            else:
                return redirect()->back();
        endif; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         if($data = $this->productRepository->find($id)):
            $data->delete();
            return redirect()->route('products.index');
            else:
                return redirect()->back();
        endif; 
    }
}
