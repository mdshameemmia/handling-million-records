<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TableController extends Controller
{
    public function index()
    {
      $model = PersonalInfo::query();
 
      return DataTables::of($model)->toJson();


    }
}
