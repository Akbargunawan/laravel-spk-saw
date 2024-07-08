<x-app-layout>
    <x-slot name="title">
        Alternatives
    </x-slot>

    <div class="container bg-primary text-white text-center py-5">
        <h1 class="display-4">Data Alternatif</h1>
        <p class="lead">Silahkan tentukan alternatif anda disini.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Alternatives
                            <a href="{{ url('alternatives/create') }}"
                                class="btn btn-primary float-end">Add Alternatif</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Destinasi</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatives as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kode_alternatif }}</td>
                                        <td>{{ $item->nama_destinasi }}</td>
                                        <td>{{ $item->C1 }}</td>
                                        <td>{{ $item->C2 }}</td>
                                        <td>{{ $item->C3 }}</td>
                                        <td>{{ $item->C4 }}</td>
                                        <td>{{ $item->C5 }}</td>
                                        <td>
                                            <a href="{{ url('alternatives/'.$item->id.'/edit') }}"
                                                class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('alternatives/'.$item->id.'/delete') }}"
                                                onclick="return confirm('Are you sure?')"
                                                class="btn btn-danger mx-1">Delete</a>
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
