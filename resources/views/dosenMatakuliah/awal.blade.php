@extends('master')
@section('container')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Mahasiswa</strong>
		<a href="{{url('dosenMatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">dosenMatakuliah</i></a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Dosen</th>
				<th>NIP</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<body>
			<?php $x=1; ?>
			@foreach ($semuadosenMatakuliah as $dosenMatakuliah)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $dosenMatakuliah->dosen->nama or 'Nama Kosong' }}</td>
				<td>{{ $dosenMatakuliah->dosen->nip or 'NIP Kosong' }}</td>
				<td>{{ $dosenMatakuliah->matakuliah->title or 'Matakuliah Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
							<a href="{{url('dosenMatakuliah/edit/'.$dosenMatakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('dosenMatakuliah/lihat/'.$dosenMatakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('dosenMatakuliah/hapus/'.$dosenMatakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i>
							</a>
						</div>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop