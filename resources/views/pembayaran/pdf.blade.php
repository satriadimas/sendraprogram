
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
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
		
		<br>
		<table  style="width: 100%;">
    <thead>
      <tr>
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Tanggal Pembayaran</b></td>     
        <td><b>Nominal</b></td>     
        <td><b>Status</b></td>     
        {{-- <td><b>Tanggal Konfirmasi</b></td>  --}}
      </tr>
      </thead>
      <tbody>
    @php
        $i = 1;
    @endphp
      @foreach($pembayaran as $v)
        <tr>
            <td>{{ $i }}</td>
            <td>{{$v->nama}}</td>
            <td>{{$v->tanggal}}</td>
            <td>Rp. {{$v->nominal}}</td>
            <td>{{$v->status == 1 ? 'Sudah Bayar' : 'Belum Bayar' }}</td>
            {{-- <td>{{$v->waktu_konfirmasi}}</td> --}}
        </tr>
        @php
            $i++;
        @endphp
      @endforeach
      </tbody>
    </table>
	</center>
</body>