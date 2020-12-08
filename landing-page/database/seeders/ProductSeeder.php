<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDescription;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bayi = Product::create(array(
            'name'              => "Bayi",
            'price_discount'    => 19900,
            'price'             => 14900,
            'number_of_users'   => 938,
            'button_text'       => "Pilih Sekarang",
            'type'              => "normal"
        ));
        $bayi_description = [
            "<strong>0.5X RESOURCE POWER</strong>",
            "<strong>500 MB</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> Databases",
            "<strong>1</strong> Domain",
            "<strong>Instant</strong> Backup",
            "<strong>Unlimited SSL</strong> Gratis Selamanya"
        ];

        for ($i=0; $i < count($bayi_description); $i++) {
            ProductDescription::create(array(
                'product_id'    => $bayi->id,
                'description'   => $bayi_description[$i]
            ));
        }


        $pelajar = Product::create(array(
            'name'              => "Pelajar",
            'price_discount'    => 46900,
            'price'             => 23450,
            'number_of_users'   => 4186,
            'button_text'       => "Pilih Sekarang",
            'type'              => "normal"
        ));

        $pelajar_description = [
            "<strong>1X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>10</strong> Addon Domains",
            "<strong>Instant</strong> Backup",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited SSL</strong> Gratis Selamanya"
        ];

        for ($i=0; $i < count($pelajar_description); $i++) {
            ProductDescription::create(array(
                'product_id'    => $pelajar->id,
                'description'   => $pelajar_description[$i]
            ));
        }

        $personal = Product::create(array(
            'name'              => "Personal",
            'price_discount'    => 58900,
            'price'             => 38900,
            'number_of_users'   => 10017,
            'button_text'       => "Pilih Sekarang",
            'type'              => "best_seller"
        ));

        $personal_description = [
            "<strong>2X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>Unlimited</strong> Addon Domains",
            "<strong>Instant</strong> Backup",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited SSL</strong> Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>SpamAssasin</strong> Mail Protection"
        ];

        for ($i=0; $i < count($personal_description); $i++) {
            ProductDescription::create(array(
                'product_id'    => $personal->id,
                'description'   => $personal_description[$i]
            ));
        }

        $bisnis = Product::create(array(
            'name'              => "Bisnis",
            'price_discount'    => 109900,
            'price'             => 65900,
            'number_of_users'   => 3552,
            'button_text'       => "Diskon 40%",
            'type'              => "normal"
        ));

        $bisnis_description = [
            "<strong>3X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>Unlimited</strong> Addon Domains",
            "<strong>Magic Auto</strong> Backup & Restore",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited SSL</strong> Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>Prioritas</strong> Layanan",
            "<i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i>",
            "<strong>SpamExpert</strong> Pro Mail Protection"
        ];

        for ($i=0; $i < count($bisnis_description); $i++) {
            ProductDescription::create(array(
                'product_id'    => $bisnis->id,
                'description'   => $bisnis_description[$i]
            ));
        }
    }
}
