<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <h2 class="title-table">Laporan Keluhan Petugas</h2>
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
        <form action="{{route('sortir')}}" method="GET">
            <select name="sort" id="sort">
                <option selected hidden disable>sort by type</option>
                <option value="diterima">diterima</option>
                <option value="ditolak">ditolak</option>
                <option value="proses">proses</option>
            </select>
            <button type="submit" class="btn-login">sort</button>
        </form>
      
    {{-- refresh balik lagi ke route data karna nanti pas di klik refresh maka bersihin riwayat pencarian sebelumnya dan balikin lagi
     nya ke halaman data nya lagi--}}
    <a href="{{route('data')}}" style="margin-left: 10px; margin-top: -2px">Refresh</a> 
</div>
<div style="padding: 0 30px">
    <table>
        <thead>
        <tr>
            <th width="5%">No</th>
            <th>NIK</th>
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
                <td>{{$pawnshop['no_telp']}}</td>
                <td>{{$pawnshop['investasi']}}</td>
                <td>
                    <img src="{{asset('assets/image/'.$pawnshop->foto)}}" width="120">
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
            <td style="display:flex; justify-content: center;">
                {{-- kirim data id dari foreach report ke path dinamis punya nya route response.edit --}}
                <a href= "{{route('response.edit', $pawnshop->id)}}" class="back-btn">Send Response</a>
            </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>