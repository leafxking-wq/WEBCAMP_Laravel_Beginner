<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     *タスク一覧ページを表示する
     *
     *@return \Illuminate\View\View
    */
    public function list()
    {
        return view('task.list');
    }
}
