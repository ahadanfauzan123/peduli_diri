<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    //
    public function index() {
        return view('pages.home');
    }
    public function data() {
        $perjalanan = Perjalanan::latest();
        $data = $perjalanan->where('user_id', auth()->user()->id)->paginate(7)->withQueryString();
        return view('pages.data', [
            'perjalanan' => $data
        ]);
    }
    public function input() {
        return view('pages.input');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "user_id" => "required",
            "tanggal" => "required",
            "jam" => "required",
            "lokasi" => "required",
            "suhu" => "required",
        ],[
            "suhu.min" => "suhu minimal 36",  
        ]);
        if($validated["suhu"] > 40) {
            return back()->with('suhu_error', 'suhu harus diantara 33-40');
        }
        elseif($validated['suhu'] < 33) {
            return back()->with('suhu_error', 'suhu harus diantara 33-40');
        }
        Perjalanan::create($validated);
        return redirect('/data')->with('tambah_data', " berhasil menambahkan data");
    }

    public function search(Request $request) {
        if(!empty(request())) {
            $select = $request->search;
            if($request->tanggal) {
                $search = $request->tanggal;
            }
            else if ($request->jam) {
                $search = $request->jam;
            }
            else if ($request->lokasi) {
                $search = $request->lokasi;
            }
            else {
                $search = $request->suhu;
            }
            $perjalanan = Perjalanan::latest();
            $data = $perjalanan->where('user_id', auth()->user()->id)->where($select, 'like',  '%'.$search.'%')->paginate(7)->withQueryString();
            if($data) {
                return view('pages.data', ['perjalanan' => $data]);
            }
            return redirect('/data');
        }
        abort(404);
    }
    // public function search2(Request $request) {
    //     $table = $request->search;
    //     if($request->tanggal) {
    //         $request->tanggal;
    //     }
    //     else if ($request->jam) {
    //         $search = $request->jam;
    //     }
    //     else if ($request->lokasi) {
    //         $search = $request->lokasi;
    //     }
    //     else {
    //         $search = $request->suhu;
    //     }
        
    //     if($table && $search) {
    //         $data = User::join('perjalanans' ,'perjalanans.user_id', '=', 'users.id')
    //                 ->where(
    //                     function($query) use($table, $search) {
    //                         $query->where('users.id', auth()->user()->id)
    //                             ->where('perjalanans.'. $table, 'LIKE', '%'.$search.'%');
    //                     }
    //                 )->paginate(7)->withQueryString();
    //                 // ->get();

    //         return view('pages.data', ['perjalanan' => $data]);        
    //     }
    //     return view('pages.data');
    // }

    public function orderBySearch(Request $request) {
        $data = Perjalanan::where('user_id', auth()->user()->id);
        if($request->tanggalAsc == "ASC"){
            $sorted = $data->orderBy('tanggal', 'asc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        elseif ($request->tanggalDesc == "DESC") {
            $sorted = $data->orderBy('tanggal', 'desc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        elseif($request->jamAsc === "ASC") {
            $sorted = $data->orderBy('jam', 'asc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        elseif($request->jamDesc == "DESC") {
            $sorted = $data->orderBy('jam', 'desc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        elseif($request->suhuAsc == "ASC") {
            $sorted = $data->orderBy('suhu', 'asc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        elseif($request->suhuDesc == "DESC") {
            $sorted = $data->orderBy('suhu', 'desc')->paginate(7)->withQueryString();
            return view('pages.data', ['perjalanan' => $sorted]);
        }
        abort(404);
    }
}
