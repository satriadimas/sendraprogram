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
        <h1 class="mt-4">Syarat berkas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Syarat Berkas</li>
        </ol>
     
        <div class="card mb-4">
            {{-- <div class="card-body">
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
						</tbody>
					</table>
            </div> --}}

            
        </div>
		<form action="{{ url('/users/upload') }}" method="POST" enctype="multipart/form-data">
			@csrf

			<input type="hidden" name="id" value="{{ auth()->user()->id }}"> <br/>
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
				<select hidden class="form-control" id="userid" name="userid" required>
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
			<th>Id Pendaftaran</th>
			<div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
				
				<input type="text" readonly class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="pendaftaran_id"
				 placeholder="" value="{{ auth()->user()->pendaftaran_id }}">
			  </div>	
		
          
		  <th>Upload Pas Foto</th>
          <div class="input-group mb-3" style="padding-right: 150px;padding-top: 10px">
            <input type="file" class="form-control" id="pas_foto" name="pas_foto" required>
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
		  @error('pas_foto')
		  <div class="alert alert-danger">
			  {{$message}}
		  </div>
		   @enderror
		  <th>Upload Kartu Keluarga</th>
          <div class="input-group mb-3" style="padding-right: 150px;padding-top: 10px">
            <input type="file" class="form-control" id="foto_kk" name="foto_kk" required>
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
		  @error('foto_kk')
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
        



@include('slice.footer_script')