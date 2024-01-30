<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface AbstractRepositoryInterface
{
  public  function index():Collection;
}
