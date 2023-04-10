<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pegadaian</title>
</head>
<body>
    <h2 style="text-align: center; margin-bottom:20px">Data Keseluruhan Pegadaian</h2>
    <table style="width:100%">
    <table>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Tanggal</th>
            <th>Pengaduan</th>
            <th>Gambar</th> 
            <th>Status Response</th>
            <th>Pesan Response</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($pawnshops as $pawnshop)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$pawnshop['nik']}}</td>
            <td>{{$pawnshop['nama']}}</td>
            <td>{{$pawnshop['no_telp']}}</td>
            <td>{{\Carbon\Carbon::parse($pawnshop['created_at'])->format('j F, Y')}}</td>
            {{-- <td>{{$pawnshop['pengaduan']}}</td> --}}
            <td><img src="assets/image/{{$pawnshop['foto']}}" width="80"></td>
            <td>
                {{--cek apakah data report ini sudah memiliki relasi dengan data dari with('response')--}}
             @if ($pawnshop['response'])
                {{-- kalau ada hasil relasinya, tampilkan bagian status--}}
                    {{ $pawnshop['response']['status']}}  
            @else
                {{-- kalau gada, tampilkan tanda ini --}}
                    -
             @endif
            </td>
            <td>
            {{-- cek apakah data report ini sudah memiliki relasi dengan dataa dari with('response')--}}
            @if ($pawnshop['response'])
            {{-- kalau ada hasil relasinya, tampilkan bagian pesan--}}
            {{ $pawnshop['response']['pesan']}}
            @else 
            {{--kalau gada, tampilkan tanda ini --}}
               - 
            @endif
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>