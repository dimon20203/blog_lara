<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
  public function __invoke()
  {
      // TODO: Implement __invoke() method.
   //   dd('hey!');
    return view(' admin.category.create');

  }
}
