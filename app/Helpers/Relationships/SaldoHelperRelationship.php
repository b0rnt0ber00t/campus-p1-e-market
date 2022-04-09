<?php

namespace App\Helpers\Relationships;

use App\Models\Personal\Saldo;

/**
 * SaldoHelperRelationship
 */
trait SaldoHelperRelationship
{
  public function saldo()
  {
    return $this->hasOne(Saldo::class);
  }
}
