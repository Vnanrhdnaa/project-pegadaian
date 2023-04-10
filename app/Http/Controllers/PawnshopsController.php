<?php

namespace App\Http\Controllers;

use App\Models\Pawnshop;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbonx;
use PDF;
use Excel;
use App\Exports\PawnshopsExport;

class PawnshopsController extends Controller
{

    public function exportPDF()
    {
       //ambil data yang akan ditampilkan pada pdf, bisa juga dengan where atau eloquent lainnya dan jangan gunakan pagination
       //jangan lupa konvert data jadi array dengan toArray()
       $data = Pawnshop ::with('response')->get()->toArray();
       //kirim data yang diambil kepada view yang akan ditampilkan, kirim dengan inisial
       view()->share('pawnshops', $data);
       //panggil view blade yang akan dicetak PDF serta data yang akan digunakan
       $pdf = PDF::loadView('print', $data)->setPaper('a4', 'landscape'); //$data=> data yang dipanggil dari bladenya
       // download PDF file dengan nama tertentu
       return $pdf->download('data_pengadaian_keseluruhan.pdf');
    }
    public function printPDF($id)
    {
         //ambil data yang akan ditampilkan pada pdf, bisa juga dengan where atau eloquent lainnya dan jangan gunakan pagination
       $data = Pawnshop::with('response')->where('id', $id)->get()->toArray();
         //kirim data yang diambil kepada view yang akan ditampilkan, kirim dengan inisial
       view()->share('pawnshops', $data);
       //panggil view blade yang akan dicetak PDF serta data yang akan digunakan
       $pdf = PDF::loadView('print', $data);
       //download PDF file dengan nama tertentu
       return $pdf->download('data_perbaris.pdf');
    }
    public function exportExcel()
     {
        $file_name =
        'data_keseluruhan_pegadaian.xlsx';
        return Excel::download(new PawnshopsExport, $file_name);
     }
    public function index()
    {
        $pawnshops = Pawnshop::orderBy('created_at', 'DESC')->simplePaginate(2);
        return view('index', compact ('pawnshops'));
    }
    public function data(Request $request)
    {
        $search = $request->search; 
        $pawnshops = Pawnshop::with('response')->where('nama', 'LIKE', '%' . $search .'%')->orderBy('created_at', 'DESC')->get();
        return view('data', compact('pawnshops'));
    }
    public function dataPetugas(Request $request)
    {
        $search = $request->search;
        $pawnshops= Pawnshop::with('response')->where('nama', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'DESC')->get();
        return view('data_petugas', compact('pawnshops'));
    }
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
          $user = $request->only('email', 'password');
          if (Auth::attempt($user)) { 
              if (Auth::user()->role == 'admin'){
                  return redirect()->route ('data');
          }elseif(Auth::user()->role == 'petugas'){ 
              return redirect()->route('data.petugas');
          }
          }else {
              return redirect()->back()->with('gagal', 'Gagal login, coba lagi');
          }
      }
  
      public function logout()
      {
          Auth::logout();
          return redirect()->route('login');
      }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
             'nik' => 'required',
             'JK' => 'required',
             'nama' => 'required',
             'investasi' => 'required',
             'umur'=> 'required',
             'no_telp' => 'required',
             'foto' => 'required|image|mimes:jpg,jpeg,png,svg'
         ]);

         $path = public_path('assets/image');
         $image = $request->file('foto');  
         $imgName = rand() . '.' . $image->extension();   
         $image->move($path, $imgName) ;
 
              Pawnshop::create([            
                 'nik' => $request->nik,
                 'JK' => $request->JK,
                 'nama' => $request->nama,
                 'investasi' => $request->investasi,
                 'umur'=> $request->umur,
                 'no_telp' => $request->no_telp,
                 'foto' => $imgName,
              ]);
              return redirect()->back()->with('success', 'Berhasil menambahkan pengaduan!');
            }

    /**
     * Display the specified resource.
     */
    public function show(Pawnshops $pawnshops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pawnshops $pawnshops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pawnshops $pawnshops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pawnshop::where('id', $id)->firstOrfail();
        $image = public_path('assets/image/' .$data['foto']);
        unlink($image);
        $data->delete();
        Response::where('pawnshop_id', $id)->delete();
        return redirect()->back();
    }
}
?>