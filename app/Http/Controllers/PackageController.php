<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
class PackageController extends Controller

{
    public function index(){
        $packages = Package::all();
        return view('Packageslist', compact('Packages'));
    }
    public function show($id){
        $package = Package::findOrFail($id);
        return view('detail', compact('Package'));
    }
}
