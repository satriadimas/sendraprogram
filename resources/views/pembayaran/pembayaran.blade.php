@include('slice.head')


@include('slice.topbar')


     @include('slice.sidebar')

	 @if(session()->has('Berhasil'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('Berhasil') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
@endif

     <div class="container-fluid px-4">
        <h1 class="mt-4">Peserta</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Peserta</li>
        </ol>
		@if(Auth::user()->status_bayar != '1') 
        <div class="card mb-4">
            <div class="card-body">
				<h4><b>Biaya Pelatihan kursus tari tradisional terdiri dari sebagai berikut: </b></h4>
				<ol>
					
					<table class="table table-responsive table-hove">
						<thead>
							<tr>
								<th>Jenis Pengeluaran</th>
								<th align="right">Biaya</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Uang pendaftaran</td>
								<td align="right">250.000</td>
							</tr>
							<tr>
								<td>2 Buah kaos latihan dan 1 sampur</td>
								<td align="right">125.000</td>
							</tr>
							<tr>
								<td>Uang pembayaran bulan 1 (pertama)</td>
								<td align="right">75.000</td>
							</tr>
							<tr>
								<td align="center"><b>Total</b></td>
								<td align="right"><b>Rp.450.000</b></td>
								
							</tr>
							<tr>
							
									<td align="left"><b>Dapat membayar Melalui BCA: 334234</b></td>
								
							</tr>
						</tbody>
					</table>
            </div>

            
        </div>
		<form action="{{ url('/pembayaran/store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			{{-- <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
			  <input type="text" name="nama_pembayar" class="form-control"  autofocus required value="{{ old('nama_pembayar') }}">
			  @error('nama_pembayar')
			  <div class="alert alert-danger">
				  {{"Form Belum diisi"}}
			  </div>
			   @enderror
			</div> --}}
			<label hidden for="roles" class="col-sm-2 col-form-label">No pendaftaran</label> 
			<div class="col-sm-10">
				<select hidden class="form-control" id="userid" name="userid">
					@foreach ($users as $user)
					   <option value="{{ auth()->user()->id  }}">{{ auth()->user()->nama }}</option>
					@endforeach
				 </select>
				 @error('userid')
				 <div class="alert alert-danger">
					 {{$message}}
				 </div>
				  @enderror
			</div> 
			{{-- <th>Status</th>
			<div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
				
				<td style="text-align: center"><label class="{{ "status"==1? 'btn btn-success':'btn btn-danger'}}">{{ "status"==1? 'Diterima':'Belum Diterima'}}</label></td>
			  </div> --}}
			
			<th>Id Pendaftaran</th>
			<div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
				
				<input type="text" readonly class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="pendaftaran_id"
				 placeholder="" value="{{ auth()->user()->pendaftaran_id }}">
			  </div>	
			<th>Kategori</th>
			<div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
				
				<input type="text" readonly class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="keting"
				 placeholder="" value="{{ $keting->nama_kelas }}">
			  </div>
			<th>Pembayaran melalui Bank</th>
			<div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
				<select name="bank" id="bank" class="form-control">
					<option value="BCA">BCA</option>
					<option value="Mandiri">Mandiri</option>
					<option value="BNI">BNI</option>
					<option value="Bank Indonesia">Bank Indonesia</option>
					<option value="CIMB Niaga">CIMB Niaga</option>
					<option value="1">Lainnya</option>
				</select>
				<input type="text" style="display: none;" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="lainnya" name="lainnya"
				 placeholder="Masukan Nama Bank">
			  </div>	
		 <th>Total Pembayaran</th>
        <div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
            <span class="input-group-text">RP</span>
            <input type="text" class="form-control" readonly aria-label="Dollar amount (with dot and two decimal places)" name="nominal" value="450000"
			 placeholder="000000">
          </div> 
          <th>Upload bukti Pembayaran</th>
          <div class="input-group mb-3" style="padding-right: 150px;padding-top: 10px">
            <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
			
          </div>
		  @error('bukti_pembayaran')
			<div class="alert alert-danger">
				{{$message}}
			</div>
			 @enderror

		  

		  <button  type="submit" class="btn btn-success btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-check"></i>
			</span>
			
			<span class="text">Kirim</span>
			
		</button>
		<a href="/pembayaran" class="btn btn-danger ">
			<span class="icon text-white-50">
				<i class="fas fa-trash"></i>
			</span>
			<span class="text">batal</span>
		</a>
		</form>
		@else
		<div class="card mb-4">
            <div class="card-body">
				<h4>Pembayaran Anda sudah berhasil dikonfirmasi pada tanggal {{ $pembayaran->waktu_konfirmasi }}</h4>
				
            </div>

            
        </div>
        @endif
		<script>
			$('#bank').on('change', function() {
				console.log('test')
				var val = $('#bank').val()

				if (val == '1') {
					$('#lainnya').css('display', 'block')
					$('#lainnya').prop('required', true)
				} else {
					$('#lainnya').css('display', 'none')
					$('#lainnya').prop('required', false)
				}
			})
		</script>


@include('slice.footer_script')
