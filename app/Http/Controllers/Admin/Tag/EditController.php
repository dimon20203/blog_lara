<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
  public function __invoke(Tag $tag)
  {
      // TODO: Implement __invoke() method.
   //   dd('hey!');
    return view(' admin.tag.edit', compact('tag'));

  }
}
