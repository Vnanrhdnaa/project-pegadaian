<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegadaian Syariah</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <form action="{{route('response.update', $pawnshopId)}}" method="POST"
    style="width: 500px; margin:50px auto; display: block;">
    @csrf
    @method('PATCH')
    <div class="input-card">
        <label for="status"> Status : </label>
        @if ($pawnshop)
        <select name="status" id="status">
            {{--kalau ada--}}
            <option value="ditolak"{{ $pawnshop['status'] == 'ditolak' ? 'selected' : ''}}>ditolak</option>
            <option value="proses" {{ $pawnshop['status'] == 'proses' ? 'selected' : '' }}>proses</option>
            <option value="diterima" {{$pawnshop['status'] == 'diterima' ? 'selected' : '' }}>diterima</option>
        </select>
        @else 
        <select name="status" id="status">
            <option selected hidden disabled>Pilih status</option>
            <option value="ditolak">ditolak</option>
            <option value="proses">proses</option>
            <option value="diterima">diterima</option>
        </select>
        @endif
    </div>
    <div class="input-card">
        <label for="pesan"> Pesan : </label>
        <textarea name="pesan" id="pesan" rows="3">{{ $pawnshop ? $pawnshop['pesan'] : '' }}</textarea>
    </div>
    <button type="Submit">Kirim Response</button>
    </form>
</body>