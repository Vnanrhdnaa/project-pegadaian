<?php

namespace App\Http\Controllers;
use App\Models\Pawnshop;
use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit($pawnshop_id)
    {
        //ambil data response yang bakal dimunculin, data yang diambil data response yang report_id nya sama kaya $report_id dari path dinamis {report_id}
        // kalau ada, datanya diambil satu/ first()
        // kenapa ga pake firstorfail() karena nanti akan bakal munculin not found view, kalau pake first() view nya tetap bakal ditampilin
        $pawnshop = Response::where('pawnshop_id', $pawnshop_id)->first();
        // karena mau ngirim data {report_id} buat di route updatenya, jadi biar bisa dipake di blade kita simpen data path dinamis report_id nya ke variable baru
        //yang bakal di compact dan dipanggil di blade nya
        $pawnshopId = $pawnshop_id;
        return view('response', compact('pawnshop', 'pawnshopId'));
    }

    public function sortir( Request $request) {
        $select = $request->sort;
        $pawnshops = Pawnshop::whereHas('response', function ($query) use ($select) {
            $query->where('status', $select);
        })->with ('response')->get();

        return view('data_petugas', compact('select', 'pawnshops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pawnshop_id)
    {
        $request->validate([
            'status' => 'required',
            'pesan' => 'required',
        ]);
        // updateOrCreate() fungsinya untuk melakukan update data kalo emang di db responsenya udah ada data yang punya report_id nya sama dengan $report_id dari
        //path dinamis, kalau gada data itu maka di create
        // array pertama, acuan cari datanya
        // array kedua, data ynag dikirim
        // kenapa pake updateOrCrate? karena response ini kan kalo tadinya gada mau ditambahin, tapi kalo ada mau di update aja
        Response::updateOrCreate(
            [
                'pawnshop_id' => $pawnshop_id,
            ],
            [
                'status' => $request->status,
                'pesan' => $request->pesan,
            ]
         );
         //setelah berhasil, arahkan ke route yang namanya data.petugas dengan pesan alert
         return redirect()->route('data.petugas')->with('responseSuccess', 'Berhasil mengubah responses!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
?>