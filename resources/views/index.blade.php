<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}

.showcase{
    background-image: url('assets/img/gadai.jpg');
    height: 580px;
    background-size: cover;
}

.container .nav-putih{
    border-radius: 50px;
    height: 80px;
    box-shadow: 0 0 10px 0;
    position: sticky;
    top: 30px;
}

.container .nav-putih  img{
    border-radius: 50px;
    margin-left: 40px;
    border-image:  10px;
}

.container .nav-putih a{
    font-size: 13px;
    color: black;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 500;
}

.container .nav-putih a:hover {
  color: #FDD818;
  transition: 0.3s ;
}

.container .textBox h1{
    color: white;
    margin-top: 60px;
    font-size: 40px;
    line-height: 1.3em;
    font-weight: 600; 
}

.container .textBox p{
    margin-top: 20px;
    color: white;
    font-size: 16px;
    font-weight: 330;
}

.container .textBox p span{
    color: white;
    font-size: 16px;
    font-weight: bold;
}


.main-container {
  display: inline-flex;
  width: 100%;
  text-align: center;
  background-color: white;
  margin-top: 65px;
  border-radius: 5px;
  box-shadow: 0 5px 20px 0;
}

.main-container div {
  width: 40%;
  height: 180px;    
}

.main-container div span{
    font-size: 18px;
    font-weight: 550;
    color: black;
} 


div p {
  margin-top: 47px;
  color: #7B7A83;
  font-size: 16px;
}

.text-major h2{
    margin-top: 50px;
    font-weight: 600;
    font-size: 40px;
    color: black;
}

footer {
    
    background-color: #333;
    color: white;
    text-align: center;
}

.card{
    margin-top: 20px;
    position: center;
}

.card-body p{
    margin-top: 15px;
    font-size: 14px;
    color:  #8B8C8C;
}

.card-body p span{
    font-size: 14px;
    font-weight: bold;
    color: #8B8C8C;
}

.card-body h4{
    color: #04235C;
    font-weight: 620;
    font-size: 20px;
}

.card-major{
    margin-top: 35px;
    background-color: white;
    border: 1px solid #bacdd8;
    padding: 8px;
    border-radius: 15px;
    width: 220px;
    text-align: center;
    display: inline-block;
    margin: 2%;
    justify-content: center;
}

.card-major img{
    width: 100%;
    border-radius: 15px;
    object-fit: cover;
}

.card-major h4{
    margin-top: 20px;
    font-size: 16px;
    color: #7B7A83;
    font-weight: 400;
}

.card-major h4 span{
    font-size: 22px;
    color: black;
    font-weight: 550;
}

.text-about h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
}

.text-about h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-about p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
}

.long-about p{
    color: red;
}

.container-about {
    margin-top: 40px;
}



.text-contact h2{
    margin-top: 50px;
    font-weight: 600;
    font-size: 40px;
    color: black;
}


.container-contact {
  display: inline-flex;
  width: 100%;
  text-align: center;
  background-color: white;
}

.container-contact div {
  width: 40%;
  height: 100px;   
  margin-bottom: 40px; 
}

.container-contact div span{
    font-size: 18px;
    font-weight: 550;
    color: black;
} 

.card-about{
    margin-top: 35px;
    background-color: white;
    border: 1px solid #bacdd8;
    border-radius: 15px;
    width: 950px;
    text-align: center;
    margin-left: 85px;
}

.card-about img{
    width: 100%;
    border-radius: 15px 15px 0 0;
    float: center;
}

.card-about h4{
    margin-top: 20px;
    font-size: 16px;
    color: #7B7A83;
    font-weight: 400;
}

.title-about h4{
    text-align: center;
    font-size: 18px;
    font-weight: 500;
    margin-top: 30px;
}

.just-about {
    width: 45%;
    background-color: white;
    border: none;
    float: left;
}

.box-about{
    display: inline;
}

.auto-height {
    height: 50%;
}

.container-about p{
    display: inline;
}

.text-major h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
}

.text-major h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-major p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
}

.text-contact h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
    margin-left: 75px;
}


.text-contact h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-contact p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
    margin-left: 75px;
}

iframe{
    margin-left: 150px;
    margin-top: 0px;
    margin-bottom: 30px;
}

footer{
    text-align: center;
}

.container-footer {
    margin-bottom: 15px;
}

.icon-contact i{
    color: white;
    letter-spacing: none;
    text-align: center;
    
}

.icon-contact li{
    text-decoration: none;
    display: inline-block;
    float: center;
    font-size: 20px;
}

.container-about img{
    width: 75%;
    margin-left: 120px;
    margin-top: 30px;
}

</style>
<body>

<header class="showcase">
    <br>

<div class="container">

		<div class="nav-putih bg-white text-dark">
			<br/>
            <div class="text-center">
            <img src="assets/images/logo-wikrama.png" alt="" height="35px">
                <a href="#beranda">Beranda</a>
                <a href="#kontak">Hub Kami</a>
                <a href="/login">Login</a>
            </div>

		</div>

        <section id="beranda">
    
    <div class="textBox">
      <h1>Pegadaian <br>Amanah Syariah</h1>
    </div>    
    <div class="main-container">
  <div><p><span>VISI</span><br>Menjadi The Most Valuable Financial Company di Indonesia <br>dan Sebagai Agen Inklusi<br> Keuangan Pilihan Utama Masyarakat</p></div>
  <div><p><span>MISI</span><br>Pemberikan manfaat dan keuntungan optimal<br> bagi seluruh stakeholder dengan mengembangkan  bisnis inti
  </p></div>
  <div><p><span>ATITUDE</span><br>Mengatasi Masalah <br>tanpa Masalah”.</p></div>
    </div>
</section>
    <section id="GADAI">
        <div class="text-major"> 
         <h2>APA YA?? </h2>
         <p>MAU TRANSAKSI APA HARI INI?</p>
        </div>
        <div class="card-major">
            <img src="assets/img/emas.jpg" alt="">
            <h4><span>Emas</span><br>Wujudkan Impian memiliki emas dengan pegadaian</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/kendaraan.jpg" alt="">
            <h4><span>Kendaraan</span><br>Wujudkan Impian memiliki kendaraan dengan pegadaian amanah.</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/sertifikat.jpg" alt="">
            <h4><span>Sertifikat</span><br>Sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/angsuran.jpg" alt="">
            <h4><span>Angsuran</span><br>Wujudkan Angsuran dengan hemat di pegadaian</h4>
        </div>
</div>
    </section>

    <style>
        body{
            background-image: url('assets/images/bg-opacity.png');
        }
    
        .form-title h3{
            text-align: center;
        }
    </style>
    
    <body>
    
        <div class="container-xl mt-20" style="justify-content: center;
            display: flex;">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <section class="form-container">
                            <div class="card form-card">
                                {{--menampilan error validasi --}}
                                @if ($errors->any())
                                <ul style="width: 100%; background: red; padding: 10px">
                                @foreach ($errors->all() as $error)
                                 <li> {{$error}}</li>
                            @endforeach
                                </ul>
                            @endif
                            {{-- menampilkan notif berhasil tambah data --}}
                            @if (Session::get('success'))
                            <div style="width:100%; background: green; padding: 10px">
                                {{Session::get('success')}}
                            </div>
                            @endif
                                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                            <div class="form-title">
        <h3>Form Pendaftaran Pegadaian <br> Amanah Syariah</h3> 
        </div>
                          <div class="mb-3 d-flex justify-content-around nik-jk" style="gap: 10px">
    
                                <div class="input-card">
                                    <label for="">NIK</b></label>
                                  <input type= "number" name="nik" id=""class="form-control" style="width: 285px"   placeholder="Masukan NIK">
                                </div>
                                <div>
                                    <label for="">Jenis Kelamin</label>
                                    <select name="JK" class="form-select" style="width: 285px">
                                        <option selected disabled>--Jenis Kelamin --</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
    
                            </div>
                            <div class="input-card">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="input-card">
                                <label for="">Pilih Investasi</label>
                                <select name="investasi" class="form-select">
                                    <option disabled selected> -- pilih investasi -- </option>
                                    <option value="EMAS">EMAS</option>
                                    <option value="KENDARAAN">KENDARAAN</option>
                                    <option value="SERTIFIKAT"> SERTIFIKAT</option>
                                    <option value="ANGSURAN">ANGSURAN</option>
                                </select>
                            </div>
                            <div class="input-card">
                                <label for="" class="form-label">Umur </label>
                                <input type="number" name="umur" class="form-control" placeholder="Masukan Umur anda">
                            </div>
    
                            <div class="input-card">
                                <label for="">Nomor Telepon</label>
                                <input name="no_telp" type="number" class="form-control" placeholder="Contoh: 08---">
                            </div>
                                    <div class="input-card">
                                        <label for="">Upload Gambar Terkait :</label>
                                        <input type="file" name="foto">
                                    </div>
                                    <button>Kirim</button>
                                    </span>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card laporan-card">
                    @foreach ($pawnshops as $pawnshop)
                    <div class="article">
                        {{-- <p> {{\Carbon\Carbon::parse($pawnshop ['created_at'])->format('j F, Y') }}: {{$pawnshop['nama']}}</p> --}}
                        <div class="content">
                            <div class="text">
                                {{$pawnshop['pegadaian']}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- memunculkan button pagination --}}
                    <div style= "display: flex; justify-content:flex-end; margin-top: 10px">
                    {!! $pawnshops->links()!!}
                    </div>
                    </div>
                </div>
            </section> 
            </div>
        </div>
    <section id="kontak">
    <div class="text-contact"> 
         <h2>HUBUNGI KAMI </h2>
         <p>KONTAK</p>
    </div>

    
    <div class="container-contact">
    
    
 
  <div><p><span>Email</span><br>@pegadaian.co.idd</p></div>
  <div><p><span>Alamat</span><br>Jalan Kramat Raya 162. Jakarta, 10430.</p></div>
  <div><p><span>Kontak</span><br> 021-3155550. <br> Faks. 021-3914221.</p></div> <br>
  
</div>
    <div class="container-contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3507190367714!2d106.79635461424375!3d-6.603265195224738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb7f83ee0d21%3A0xf557614d6f114d48!2sPegadaian%20Bogor!5e0!3m2!1sid!2sid!4v1678866365069!5m2!1sid!2sid"
         width="75%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
	</div>
            
    </section>

    <footer>
        <br>
        <div class="container-footer">

        <div class="icon-contact">
        <small>Copyright &copy; 2021 - Vinna Nurhadina. All Rights Reserved</small>
            <ul>
                <li><a href="https://www.instagram.com/sahabatpegadaian/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/@PTPegadaianPersero_official/about" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href=" https://twitter.com/Pegadaiann" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/PegadaianPer.." target="_blank"><i class="fab fa-facebook-square"></i></a></li> 
            </ul>
  </div>
        </div>
    </footer>
</body>
</html>