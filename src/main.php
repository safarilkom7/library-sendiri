<?php

namespace Halosafar\Halo;

use Carbon\Carbon;

class Main
{
    public function periodePembayaran($start)
    {
        $tanggalAwal = Carbon::createFromFormat('d-m-Y', $start);
        $bulanSekarang = $tanggalAwal->format('m');
        $tahunSekarang = $tanggalAwal->format('Y');
        if ($tanggalAwal->format('d') >= 21) {
            $tanggalAwal->addMonths(2);
            $bulanSekarang = $tanggalAwal->format('m');
            $tahunSekarang = $tanggalAwal->format('Y');
        } else {
            $tanggalAwal->addMonths(1);
            $bulanSekarang = $tanggalAwal->format('m');
            $tahunSekarang = $tanggalAwal->format('Y');
        }
        $tanggalPembayaran = Carbon::create($tahunSekarang, $bulanSekarang, 5, 0, 0, 0);
        return $tanggalPembayaran->format('d-m-Y');
    }
}