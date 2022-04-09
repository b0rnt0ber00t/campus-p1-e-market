<?php

namespace App\Helpers\Relationships;

use App\Models\Package\Package;

/**
 * PackageHelperRelationship
 */
trait PackageHelperRelationship
{
  public function package()
  {
    return $this->hasMany(Package::class);
  }
}
