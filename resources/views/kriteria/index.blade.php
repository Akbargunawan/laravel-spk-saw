<x-app-layout>
    <x-slot name="title">
        Kriterias
    </x-slot>

    <div class="container bg-primary text-white text-center py-5">
        <h1 class="display-4">Data Kriteria</h1>
        <p class="lead">Silahkan tentukan kriteria anda disini.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kriterias
                            <a href="{{ url('kriterias/create') }}" class="btn btn-primary float-end">Add Kriteria</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kriterias as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kode_kriteria }}</td>
                                        <td>{{ $item->nama_kriteria }}</td>
                                        <td>{{ $item->bobot }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ url('kriterias/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('kriterias/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
