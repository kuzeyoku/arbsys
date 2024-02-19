<?php

use App\Models\Baro\Baro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarolarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("barolar")->insert([
            ["name" => "Adana Barosu"],
            ["name" => "Adıyaman Barosu"],
            ["name" => "Afyonkarahisar Barosu"],
            ["name" => "Ağrı Barosu"],
            ["name" => "Aksaray Barosu"],
            ["name" => "Amasya Barosu"],
            ["name" => "Ankara Barosu"],
            ["name" => "Ankara 2 Nolu Baro"],
            ["name" => "Antalya Barosu"],
            ["name" => "Ardahan Barosu"],
            ["name" => "Artvin Barosu"],
            ["name" => "Aydın Barosu"],
            ["name" => "Balıkesir Barosu"],
            ["name" => "Bartın Barosu"],
            ["name" => "Batman Barosu"],
            ["name" => "Bayburt Barosu"],
            ["name" => "Bilecik Barosu"],
            ["name" => "Bingöl Barosu"],
            ["name" => "Bitlis Barosu"],
            ["name" => "Bolu Barosu"],
            ["name" => "Burdur Barosu"],
            ["name" => "Bursa Barosu"],
            ["name" => "Çanakkale Barosu"],
            ["name" => "Çankırı Barosu"],
            ["name" => "Çorum Barosu"],
            ["name" => "Denizli Barosu"],
            ["name" => "Diyarbakır Barosu"],
            ["name" => "Düzce Barosu"],
            ["name" => "Edirne Barosu"],
            ["name" => "Elazığ Barosu"],
            ["name" => "Erzincan Barosu"],
            ["name" => "Erzurum Barosu"],
            ["name" => "Eskişehir Barosu"],
            ["name" => "Gaziantep Barosu"],
            ["name" => "Giresun Barosu"],
            ["name" => "Gümüşhane Barosu"],
            ["name" => "Hakkari Barosu"],
            ["name" => "Hatay Barosu"],
            ["name" => "Iğdır Barosu"],
            ["name" => "Isparta Barosu"],
            ["name" => "İstanbul Barosu"],
            ["name" => "İstanbul 2 Nolu Baro"],
            ["name" => "İzmir Barosu"],
            ["name" => "Kahramanmaraş Barosu"],
            ["name" => "Karabük Barosu"],
            ["name" => "Karaman Barosu"],
            ["name" => "Kars Barosu"],
            ["name" => "Kastamonu Barosu"],
            ["name" => "Kayseri Barosu"],
            ["name" => "Kırıkkale Barosu"],
            ["name" => "Kırklareli Barosu"],
            ["name" => "Kırşehir Barosu"],
            ["name" => "Kilis Barosu"],
            ["name" => "Kocaeli Barosu"],
            ["name" => "Konya Barosu"],
            ["name" => "Kütahya Barosu"],
            ["name" => "Malatya Barosu"],
            ["name" => "Manisa Barosu"],
            ["name" => "Mardin Barosu"],
            ["name" => "Mersin Barosu"],
            ["name" => "Muğla Barosu"],
            ["name" => "Muş Barosu"],
            ["name" => "Nevşehir Barosu"],
            ["name" => "Niğde Barosu"],
            ["name" => "Ordu Barosu"],
            ["name" => "Osmaniye Barosu"],
            ["name" => "Rize Barosu"],
            ["name" => "Sakarya Barosu"],
            ["name" => "Samsun Barosu"],
            ["name" => "Siirt Barosu"],
            ["name" => "Sinop Barosu"],
            ["name" => "Sivas Barosu"],
            ["name" => "Şanlıurfa Barosu"],
            ["name" => "Şırnak Barosu"],
            ["name" => "Tekirdağ Barosu"],
            ["name" => "Tokat Barosu"],
            ["name" => "Trabzon Barosu"],
            ["name" => "Tunceli Barosu"],
            ["name" => "Uşak Barosu"],
            ["name" => "Van Barosu"],
            ["name" => "Yalova Barosu"],
            ["name" => "Yozgat Barosu"],
            ["name" => "Zonguldak Barosu"],
        ]);
    }
}