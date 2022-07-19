@include('slice.head')


@include('slice.topbar')


     @include('slice.sidebar')




     <div class="container-fluid px-4">
        <h1 class="mt-4">Syarat Berkas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Syarat Berkas</li>
        </ol>
        <th>Pas foto</th>
        <div class="card mb-4" style="width: 400px;height:400px">
            
            <div class="card-body"  >
                <img class="rounded" src="{{ asset('storage/'.$users->pas_foto)}}" alt="..."  style="width: 350px;height:370px"/>
            </div>
        </div>

        <th>Foto Kartu keluarga</th>
        <div class="card mb-4" style="width: 400px;height:400px">
            
            <div class="card-body"  >
                <img class="rounded" src="{{ asset('storage/'.$users->foto_kk)}}" alt="..."  style="width: 350px;height:370px"/>
            </div>
        </div>
          <a href="/users/konfirmasi" class="btn btn-primary ">
			<span class="icon text-white-50" style="padding-bottom: 50%">
				<i class="fa-solid fa-arrow-left-long"></i>
			</span>
			<span class="text">Kembali</span>
		</a>
            






     @include('slice.footer_script')