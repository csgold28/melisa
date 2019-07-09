<?php

use Illuminate\Database\Seeder;

class Allwilayah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tabel provinsi
        DB::table('provinsi')->insert(array(
            array('provinsi'=> 'ACEH'),
            array('provinsi'=> 'SUMATERA UTARA'),
            array('provinsi'=> 'SUMATERA BARAT'),
            array('provinsi'=> 'RIAU'),
            array('provinsi'=> 'JAMBI'),
            array('provinsi'=> 'SUMATERA SELATAN'),
            array('provinsi'=> 'BENGKULU'),
            array('provinsi'=> 'LAMPUNG'),
            array('provinsi'=> 'KEPULAUAN BANGKA BELITUNG'),
            array('provinsi'=> 'KEPULAUAN RIAU'),
            array('provinsi'=> 'DKI JAKARTA'),
            array('provinsi'=> 'JAWA BARAT'),
            array('provinsi'=> 'JAWA TENGAH'),
            array('provinsi'=> 'DI YOGYAKARTA'),
            array('provinsi'=> 'JAWA TIMUR'),
            array('provinsi'=> 'BANTEN'),
            array('provinsi'=> 'BALI'),
            array('provinsi'=>'NUSA TENGGARA BARAT'),
            array('provinsi'=>'NUSA TENGGARA TIMUR'),
            array('provinsi'=>'KALIMANTAN BARAT'),
            array('provinsi'=>'KALIMANTAN TENGAH'),
            array('provinsi'=> 'KALIMANTAN SELATAN'),
            array('provinsi'=>'KALIMANTAN TIMUR'),
            array('provinsi'=>'KALIMANTAN UTARA'),
            array('provinsi'=> 'SULAWESI UTARA'),
            array('provinsi'=> 'SULAWESI TENGAH'),
            array('provinsi'=> 'SULAWESI SELATAN'),
            array('provinsi'=>'SULAWESI TENGGARA'),
            array('provinsi'=> 'GORONTALO'),
            array('provinsi'=> 'SULAWESI BARAT'),
            array('provinsi'=> 'MALUKU'),
            array('provinsi'=> 'MALUKU UTARA'),
            array('provinsi'=> 'PAPUA BARAT'),
            array('provinsi'=> 'PAPUA')

        ));

        //tabel kota
        DB::table('kota')->insert(array(
            array('kota'=> 'KABUPATEN SIMEULUE', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH SINGKIL', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH SELATAN', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH TENGGARA', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH TIMUR', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH TENGAH', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH BARAT', 'propinsi_id' => 1),
            array('kota'=>'KABUPATEN ACEH BESAR', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN PIDIE', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN BIREUEN', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH UTARA', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH BARAT DAYA', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN GAYO LUES', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN ACEH TAMIANG', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN NAGAN RAYA', 'propinsi_id' => 1),
            array('kota'=>'KABUPATEN ACEH JAYA', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN BENER MERIAH', 'propinsi_id' => 1),
            array('kota'=> 'KABUPATEN PIDIE JAYA', 'propinsi_id' => 1),
            array('kota'=> 'KOTA BANDA ACEH', 'propinsi_id' => 1),
            array('kota'=> 'KOTA SABANG', 'propinsi_id' => 1),
            array('kota'=> 'KOTA LANGSA', 'propinsi_id' => 1),
            array('kota'=> 'KOTA LHOKSEUMAWE', 'propinsi_id' => 1),
            array('kota'=> 'KOTA SUBULUSSALAM', 'propinsi_id' => 1),

            array('kota'=> 'KABUPATEN NIAS'),
            array('kota'=> 'KABUPATEN MANDAILING NATAL'),
            array('kota'=> 'KABUPATEN TAPANULI SELATAN'),
            array('kota'=> 'KABUPATEN TAPANULI TENGAH'),
            array('kota'=> 'KABUPATEN TAPANULI UTARA'),
            array('kota'=> 'KABUPATEN TOBA SAMOSIR'),
            array('kota'=> 'KABUPATEN LABUHAN BATU'),
            array('kota'=> 'KABUPATEN ASAHAN'),
            array('kota'=> 'KABUPATEN SIMALUNGUN'),
            array('kota'=> 'KABUPATEN DAIRI'),
            array('kota'=> 'KABUPATEN KARO'),
            array('kota'=> 'KABUPATEN DELI SERDANG'),
            array('kota'=> 'KABUPATEN LANGKAT'),
            array('kota'=> 'KABUPATEN NIAS SELATAN'),
            array('kota'=> 'KABUPATEN HUMBANG HASUNDUTAN'),
            array('kota'=> 'KABUPATEN PAKPAK BHARAT'),
            array('kota'=> 'KABUPATEN SAMOSIR'),
            array('kota'=> 'KABUPATEN SERDANG BEDAGAI'),
            array('kota'=> 'KABUPATEN BATU BARA'),
            array('kota'=> 'KABUPATEN PADANG LAWAS UTARA'),
            array('kota'=> 'KABUPATEN PADANG LAWAS'),
            array('kota'=> 'KABUPATEN LABUHAN BATU SELATAN'),
            array('kota'=> 'KABUPATEN LABUHAN BATU UTARA'),
            array('kota'=> 'KABUPATEN NIAS UTARA'),
            array('kota'=> 'KABUPATEN NIAS BARAT'),
            array('kota'=> 'KOTA SIBOLGA'),
            array('kota'=> 'KOTA TANJUNG BALAI'),
            array('kota'=> 'KOTA PEMATANG SIANTAR'),
            array('kota'=> 'KOTA TEBING TINGGI'),
            array('kota'=> 'KOTA MEDAN'),
            array('kota'=> 'KOTA BINJAI'),
            array('kota'=> 'KOTA PADANGSIDIMPUAN'),
            array('kota'=> 'KOTA GUNUNGSITOLI'),
        ));
    }
}
