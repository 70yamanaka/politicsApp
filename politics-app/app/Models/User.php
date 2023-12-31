<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory;
  protected $fillable = [
    'name',
    'sex',
    'postcode',
    'pref',
    'city',
    'block',
    'support',
    'emial',
    'password',
    'password_confirmation',
  ];

  protected $hidden = [
    'password_confirmation',
    'created_at',
    'updated_at',
  ];

  public function calcPercent($all, $count)
  {
    return round($count / $all * 100);
  }

  public function countSexSupport($all)
  {
    foreach ($all as $key => $value) {
      $allSupport[] = $value['support'];
    }
    $countSupport = array_count_values($allSupport);
    return array_keys($countSupport, max($countSupport));
  }
}