<?php

namespace App\Helpers\Controllers\Packages;

use Illuminate\Http\Request;

/**
 * PackageHelperController
 */
trait PackageHelperController
{
  public function create(Request $request)
  {
    return array_merge($request->validated(), ['user_id' => auth()->id()]);
  }
}
