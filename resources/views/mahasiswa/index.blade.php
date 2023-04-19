@extends('layouts.content')

@section('title', 'CRUD Mahasiswa')
@section('content')
<x-laravelcomp dashboard="" index="active"/>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left mt-2"><br>
						<h2 style="text-align: center;">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2><br>
					</div>

					<div class="float-left my-2">
						<form action="{{ route('mahasiswa.index') }}" method="GET" role="search">
							<input type="text" name="search" placeholder="Cari Mahasiswa">
							<button type="submit" class="btn btn-warning">Search</button>
						</form>
					</div>

					<div class="float-right my-2">
						<a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
					</div>

					@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
					@endif

					<table class="table table-bordered">
						<tr>
							<th>Nim</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>No_Handphone</th>
							<th>Email</th>
							<th>Tanggal_Lahir</th>
							<th width="280px">Action</th>
						</tr>
						@foreach ($mahasiswa as $Mahasiswa)
						<tr>
							<td>{{ $Mahasiswa->nim }}</td>
							<td>{{ $Mahasiswa->nama }}</td>
							<td>{{ $Mahasiswa->kelas }}</td>
							<td>{{ $Mahasiswa->jurusan }}</td>
							<td>{{ $Mahasiswa->no_handphone }}</td>
							<td>{{ $Mahasiswa->email }}</td>
							<td>{{ $Mahasiswa->tanggal_lahir }}</td>
							<td>
								<form action="{{ route('mahasiswa.destroy',$Mahasiswa->nim) }}" method="POST">
									<a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->nim) }}">Show</a>
									<a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->nim) }}">Edit</a>
									@csrf 
									@method('DELETE')
									<form method="post" action="">
										<input type="hidden" name="nim" value="<?php echo $mahasiswa['nim']; ?>">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</button>
									</form>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
					<!-- pagination -->
					{!! $mahasiswa->links()!!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection


