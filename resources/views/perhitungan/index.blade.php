<x-app-layout>
    <x-slot name="title">
        Hasil Perhitungan SAW
    </x-slot>

    <div class="container bg-primary text-white text-center py-5">
        <h1 class="display-4">Penentuan Hasil Akhir </h1>
        <p class="lead">Mari lihat hasil perhitungan akhir.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hasil Normalisasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Destinasi</th>
                                        <th>Normalisasi C1 (Biaya)</th>
                                        <th>Normalisasi C2 (Aksesibilitas)</th>
                                        <th>Normalisasi C3 (Fasilitas)</th>
                                        <th>Normalisasi C4 (Keamanan)</th>
                                        <th>Normalisasi C5 (Kebersihan)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatives as $alternatif)
                                    <tr>
                                        <td>{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->nama_destinasi }}</td>
                                        <td>{{ number_format($alternatif->normalisasiC1, 4) }}</td>
                                        <td>{{ number_format($alternatif->normalisasiC2, 4) }}</td>
                                        <td>{{ number_format($alternatif->normalisasiC3, 4) }}</td>
                                        <td>{{ number_format($alternatif->normalisasiC4, 4) }}</td>
                                        <td>{{ number_format($alternatif->normalisasiC5, 4) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Hasil Perhitungan SAW</h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Destinasi</th>
                                        <th>Nilai SAW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatives as $alternatif)
                                    <tr>
                                        <td>{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->nama_destinasi }}</td>
                                        <td>{{ number_format($alternatif->normalized_saw, 4) }}</td>
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
