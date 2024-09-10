<?php

namespace App\Http\Controllers;
use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title'=>'DAFTAR USER',
            'list'=>['Home','User']
        ];
        $page =(object)[
            'title'=>'daftar user dalam sistem'
        ];
        $activeMenu ='user';
        return view('user.index',[$breadcrumb,'page'=>$page,'activemenu'=>$activeMenu]);
    }
    public function list(Request $request)
{$users = UserModel::select('user_id', 'username', 'nama', 'level_id')
    ->with('level');
    return DataTables::of($users)
    ->addIndexColumn() // menambahkan kolom index / no urut (default nama 
    kolom: DT_RowIndex)
    ->addColumn('aksi', function ($user) { // menambahkan kolom aksi
    $btn = '<a href="'.url('/user/' . $user->user_id).'" class="btn btninfo btn-sm">Detail</a> ';
    $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" 
    class="btn btn-warning btn-sm">Edit</a> ';
    $btn .= '<form class="d-inline-block" method="POST" action="'. 
    url('/user/'.$user->user_id).'">'
    . csrf_field() . method_field('DELETE') . 
    '<button type="submit" class="btn btn-danger btn-sm" 
    onclick="return confirm(\'Apakah Anda yakit menghapus data 
    ini?\');">Hapus</button></form>'; 
    return $btn;
    })
    ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
    ->make(true);
    }
    

}
