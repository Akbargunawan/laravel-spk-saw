<x-app-layout>
    <x-slot name="title">
        Hasil Perhitungan SAW
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Hasil Perhitungan SAW
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Destinasi</th>
                                        <th>C1 (Biaya)</th>
                                        <th>C2 (Aksesibilitas)</th>
                                        <th>C3 (Fasilitas)</th>
                                        <th>C4 (Keamanan)</th>
                                        <th>C5 (Kebersihan)</th>
                                        <th>Nilai SAW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatives as $alternatif)
                                    <tr>
                                        <td>{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->nama_destinasi }}</td>
                                        <td>{{ $alternatif->C1 }}</td>
                                        <td>{{ $alternatif->C2 }}</td>
                                        <td>{{ $alternatif->C3 }}</td>
                                        <td>{{ $alternatif->C4 }}</td>
                                        <td>{{ $alternatif->C5 }}</td>
                                        <td>{{ number_format($alternatif->normalized_saw, 2) }}</td>
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
