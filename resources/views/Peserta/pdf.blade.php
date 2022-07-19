<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<center>
  <table>
    <tr>
      <td><img src="assets/img/sakatalogos.jpg" width="90" height="90"></td>
      <td>
      <center>
        <font size="4">SANGGAR SENI SARANA KARAWITAN TARI
        <br>  (SAKATA) KOTA BANDUNG</br>
          </font><br>
        
        <font size="2"><i>JJl. Sindang Sari II No.2, Antapani Wetan, Kec. Antapani, Kota Bandung, Jawa Barat 40291</i></font>
      </center>
      </td>
    </tr>
    <tr>
      <td colspan="2"><hr></td>
    </tr>
  <table width="625">
  
  </table>
  </table>
<body>
<table  style="width: 100%;">
    <thead>
      <tr>
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>     
        <td><b>Telepon</b></td>     
        <td><b>Jenis Kelamin</b></td>     
        <td><b>Email</b></td>     
        <td><b>Kelas</b></td>     
      </tr>
      </thead>
      <tbody>
    @php
        $i = 1;
    @endphp
      @foreach($users as $v)
        <tr>
            <td>{{ $i }}</td>
            <td>{{$v['nama']}}</td>
            <td>{{$v['alamat']}}</td>
            <td>{{$v['no_telp']}}</td>
            <td>{{$v['jenis_kelamin']}}</td>
            <td>{{$v['email']}}</td>
            <td>{{$v['nama_kelas']}}</td>
        </tr>
        @php
            $i++;
        @endphp
      @endforeach
      </tbody>
    </table>
</body>
</html>