<?php

namespace App\Http\Controllers\Package;

use App\Helpers\Controllers\Packages\PackageHelperController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Package\PackageRequest;
use App\Models\Package\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Helper
    use PackageHelperController;

    public function store(PackageRequest $request)
    {
        return Package::create($this->create($request))
        ? back()->with('success', 'Package created successfully!')
        : back()->with('failed', 'Package failed to create!');
    }
}
