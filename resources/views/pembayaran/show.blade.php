@include('slice.head')


@include('slice.topbar')


     @include('slice.sidebar')




     <div class="container-fluid px-4">
        <h1 class="mt-4">Bukti Pembayaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Bukti Pembayaran</li>
        </ol>
        <th>Bukti Pembayaran</th>
        <div class="card mb-4" style="width: 400px;height:400px">
            
            <div class="card-body"  >
                <img class="rounded" src="{{ asset('storage/'.$pembayaran->bukti_pembayaran)}}" alt="..."  style="width: 350px;height:370px"/>
            </div>
        </div>
        {{-- <th>pas_foto</th>
        <div class="card mb-4" style="width: 400px;height:400px">
            
            <div class="card-body"  >
                <img class="rounded" src="{{ asset('storage/'.$pembayaran->bukti_pembayaran)}}" alt="..."  style="width: 350px;height:370px"/>
            </div>
        </div>
        <th>Foto Kartu keluarga</th>
        <div class="card mb-4" style="width: 400px;height:400px">
            
            <div class="card-body"  >
                <img class="rounded" src="{{ asset('storage/'.$pembayaran->bukti_pembayaran)}}" alt="..."  style="width: 350px;height:370px"/>
            </div>
        </div> --}}

        <th>Total Pembayaran</th>
        <div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
            <span class="input-group-text">RP</span>
            <input type="number" name="nominal" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" value="{{ $pembayaran->nominal}}">
          </div>
        <th>Bayar Melalui Bank</th>
        <div class="input-group mb-2" style="padding-right: 150px;padding-top: 10px">
            <input type="test" readonly name="bank" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" value="{{ $pembayaran->bank}}">
          </div>
          <a href="{{ url('/') }}/pembayaran/konfirmasi" class="btn btn-primary ">
			<span class="icon text-white-50" style="padding-bottom: 50%">
				<i class="fa-solid fa-arrow-left-long"></i>
			</span>
			<span class="text">Kembali</span>
		</a>
            






     @include('slice.footer_script')