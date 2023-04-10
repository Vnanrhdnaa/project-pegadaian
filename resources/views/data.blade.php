<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegadaian</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <h2 class="title-table">Laporan Pegadaian</h2>
<div style="display: flex; justify-content: center; margin-bottom: 30px">
    <a href="/logout" style="text-align: center">Logout</a> 
    <div style="margin: 0 10px"> | </div>
    <a href="/" style="text-align: center">Home</a>
</div>
<div style="display: flex; justify-content: flex-end; align-items: center;">
    {{-- menggunakan method GET karna route untuk masuk ke halaman data ini menggunakan ::get --}}
    <form action="" method="GET">
        @csrf 
        <input type="text" name="search" placeholder="cari berdasarkan nama...">
        <button type="submit" class="btn-login" style="margin-top: -1px">cari</button>
    </form>
    <a href="{{route('data')}}" style="margin-left: 10px; margin-top: -2px">Refresh</a> 
    <a href="{{route('export-pdf')}}" style="margin-left: 10px; margin-top: -10px">Cetak PDF</a>
    <a href="{{route('export.excel')}}" style="text-align: center">Cetak Excel</a>
</div>
<div style="padding: 0 30px">
    <table>
        <thead>
        <tr>
            <th width="5%">No</th>
            <th>NIK</th>
            <th>JK</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Investasi</th>
            <th>Gambar</th>
            <th>Status Response</th>
            <th>Pesan Response</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($pawnshops as $pawnshop)
            </tr>
                <td>{{$no++}}</td>
                <td>{{$pawnshop['nik']}}</td>
                <td>{{$pawnshop['nama']}}</td>
                {{-- menganti format no yang 08 menjadi 628--}}
                @php
                $telp = substr_replace($pawnshop->no_telp, "62", 0, 1);
                @endphp 
                @php
                // kalau udah di response data reportnya, chat wa nya data dari response ditampilin
                   if ($pawnshop->response) {
                    $pesanWA = 'Hallo' . $pawnshop->nama .  // . (titik) buat fontext = nyambungin data ke database
                    '!pengaduan anda di' . $pawnshop->response ['status'] . '.Berikut pesan untuk anda: ' . 
                     $pawnshop->response['pesan'];
                   }
                   //kalau belum di response pengaduannya, chat wa nya kaya gini 
                   else {
                    $pesanWA = 'Belum ada data response!';
                   }
                 @endphp 
                <td><a href="https://wa.me/{{$telp}}?text={{$pesanWA}}"
                    target="_blank">{{$telp}}</a></td>
                <td>{{$pawnshop['pegadaian']}}</td>
                <td>
                    {{--menampilkan gambar full layar di tab baru--}}
                    <a href="../assets/image/{{$pawnshop->foto}}"target="_blank">
                    <img src="{{asset('assets/image/'.$pawnshop->foto)}}" width="120">
                    </a>
                </td>
                <td>
                    {{--cek apakah data report ini sudah memiliki relasi dengan data dari with('response')--}}
                 @if ($pawnshop->response)
                    {{-- kalau ada hasil relasinya, tampilkan bagian status--}}
                        {{ $pawnshop->response['status']}}  
                @else
                    {{-- kalau gada, tampilkan tanda ini --}}
                        -
                 @endif
                </td>
                <td>
                {{-- cek apakah data report ini sudah memiliki relasi dengan dataa dari with('response')--}}
                @if ($pawnshop->response)
                {{-- kalau ada hasil relasinya, tampilkan bagian pesan--}}
                {{ $pawnshop->response['pesan']}}
                @else 
                {{--kalau gada, tampilkan tanda ini --}}
                   - 
                @endif
            </td>
                <td>
                <form action="{{route('destroy', $pawnshop->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete">Hapus</button>
                </form>
                    <a href="{{route('print-pdf', $pawnshop->id)}}" method="GET" style="margin-top: -33px; margin-right:5px; margin-left:5px;">
                        @csrf
                        <button class="submit">print</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>