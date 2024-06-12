<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Enquiries;
use App\Models\Banner;
use TCG\Voyager\Models\Category;
use App\Models\Client;
use App\Models\Product_category;
use App\Models\Product;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::where('status', '1')->orderBy('order', 'ASC')->get();
        $clients = Client::where('status', '1')->orderBy('order', 'ASC')->get();

        /* Getting cid from product table */
        $cids = Product::select('cid')->groupBy('cid')->pluck('cid');
        /* Getting common entry from category table acc to cid*/
        $category = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cid')
            ->whereIn('categories.id', $cids)
            ->select('categories.*')
            ->distinct()
            ->get();
        $title = 'Home';
        return view('visitors.index', compact('category', 'title', 'clients', 'banner'));
    }
    public function category(Request $request)
    {
        $slug = $request->slug;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('cid', $category->id)->orderBy('order', 'ASC')->get();
        $cids = Product::select('cid')->groupBy('cid')->pluck('cid');
        $categorys =  DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cid')
            ->whereIn('categories.id', $cids)
            ->select('categories.*')
            ->distinct()
            ->get();
        $title = $category->name;
        return view('visitors.single', compact('category', 'title', 'products', 'categorys'));
    }
    public function profile()
    {
        $clients = Client::where('status', '1')->orderBy('order', 'ASC')->get();
        $title = 'Company Profile';
        return view('visitors.company-profile', compact('clients', 'title'));
    }

    public function product(Request $request)
    {
        $slug = $request->slug;
        $title = $request->slug; // Have to set ---------=-=-=--------------
        $product = Product::where('slug', $slug)->first();
        return view('visitors.product', compact('title', 'product'));
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


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiries $enquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiries $enquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiries $enquiries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiries $enquiries)
    {
        //
    }
}
