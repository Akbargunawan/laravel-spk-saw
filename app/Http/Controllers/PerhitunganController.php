<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class PerhitunganController extends Controller
{
    public function index()
    {
        // Ambil semua alternatif dari database
        $alternatives = Alternatif::all();

        // Hitung nilai maksimum untuk kriteria BENEFIT dan minimum untuk kriteria COST
        $minC1 = Alternatif::min('C1');
        $maxC2 = Alternatif::max('C2');
        $maxC3 = Alternatif::max('C3');
        $maxC4 = Alternatif::max('C4');
        $maxC5 = Alternatif::max('C5');

        // Total bobot kriteria (pastikan totalnya adalah 1)
        $totalBobot = 0.30 + 0.20 + 0.25 + 0.15 + 0.10;

        // Hitung normalisasi SAW untuk setiap alternatif
        foreach ($alternatives as $alternatif) {
            // Hitung normalisasi untuk kriteria COST (C1)
            $alternatif->normalisasiC1 = $minC1 / $alternatif->C1;

            // Hitung normalisasi untuk kriteria BENEFIT (C2, C3, C4, C5)
            $alternatif->normalisasiC2 = $alternatif->C2 / $maxC2;
            $alternatif->normalisasiC3 = $alternatif->C3 / $maxC3;
            $alternatif->normalisasiC4 = $alternatif->C4 / $maxC4;
            $alternatif->normalisasiC5 = $alternatif->C5 / $maxC5;

            // Hitung nilai SAW (Simple Additive Weighting)
            $alternatif->normalized_saw = 
                ($alternatif->normalisasiC1 * 0.30) + // Bobot C1
                ($alternatif->normalisasiC2 * 0.20) + // Bobot C2
                ($alternatif->normalisasiC3 * 0.25) + // Bobot C3
                ($alternatif->normalisasiC4 * 0.15) + // Bobot C4
                ($alternatif->normalisasiC5 * 0.10); // Bobot C5
        }

        // Kembalikan data ke view perhitungan/index.blade.php
        return view('perhitungan.index', compact('alternatives', 'minC1', 'maxC2', 'maxC3', 'maxC4', 'maxC5'));
    }
}
