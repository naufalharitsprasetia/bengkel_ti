<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Servis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rehan Firdaus',
            'password' => bcrypt('bismillah123'),
            'email' => 'rehan@gmail.com',
            'is_admin' => true,
        ]);
        User::factory(10)->create();
        Servis::create([
            'nama' => 'Rehan Firdaus',
            'jenis_barang' => 'laptop dell inspiron i5',
            'jenis_servis' => 'lcd rusak',
            'tanggal_servis' => now(),
            'status' => 0
        ]);
        Servis::create([
            'nama' => 'Fauzan Afif',
            'jenis_barang' => 'laptop rog hitam',
            'jenis_servis' => 'keyboard ghosting',
            'tanggal_servis' => now(),
            'status' => 1
        ]);
        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop'
        ]);
        Category::create([
            'name' => 'Mouse',
            'slug' => 'mouse'
        ]);
        Category::create([
            'name' => 'Keyboard',
            'slug' => 'keyboard'
        ]);
        Category::create([
            'name' => 'Monitor',
            'slug' => 'monitor'
        ]);
        Category::create([
            'name' => 'Headset',
            'slug' => 'headset'
        ]);
        Category::create([
            'name' => 'Lainnya',
            'slug' => 'lainnya'
        ]);
        Product::create([
            'category_id' => 1,
            'nama_produk' => "Asus Vivobook V415JP 4GB/128GB",
            'slug' => "asus-vivobook-v415jp-4gb-128gb",
            'price' => 4699000,
            'image' => "post-images/laptop1.jpg",
            'desc' => "Asus Vivobook V415JP 4GB/128GB"
        ]);
        Product::create([
            'category_id' => 2,
            'nama_produk' => "Newfun Mouse Wireless Optical Silent...",
            'slug' => "newfun-mouse-wireless-optical-silent",
            'price' => 179000,
            'image' => "post-images/mouse1.jpg",
            'desc' => "Newfun Mouse Wireless Optical Silent..."
        ]);
        Product::create([
            'category_id' => 3,
            'nama_produk' => "Keyboard Gaming Altec Lansing ALGK-8404 White Grey...",
            'slug' => "keyboard-gaming-altec-lansing-algk-8404-white-grey",
            'price' => 2499000,
            'image' => "post-images/keyboard1.jpg",
            'desc' => "Keyboard Gaming Altec Lansing ALGK-8404 White Grey..."
        ]);
        Product::create([
            'category_id' => 4,
            'nama_produk' => "PC Gaming Full Set Core i5 RAM 8GB SSD 128GB VGA 2GB Monitor LED 19 Lengkap Siap Pakai",
            'slug' => "pc-gaming-full-set-core-i5-ram-8gb-ssd-128gb-vga-2gb-monitor-led-19-lengkap-siap-pakai",
            'price' => 25699000,
            'image' => "post-images/fullpc1.jpg",
            'desc' => "PC Gaming Full Set Core i5 RAM 8GB SSD 128GB VGA 2GB Monitor LED 19 Lengkap Siap Pakai..."
        ]);
        Product::create([
            'category_id' => 5,
            'nama_produk' => "Headset Headphone Kabel JETE HB2 with Noise Cancelling - Stereo - Garansi 2 Tahun",
            'slug' => "headset-headphone-kabel-jete-hb2-with-noise-cancelling---stereo---garansi-2-tahun",
            'price' => 199900,
            'diskon' => 61,
            'image' => "post-images/QJvmUUi90NWMiIlfdDUyv07wMWbxDRtKEgmXeCc0.jpg",
            'desc' => "Headset Headphone Kabel JETE HB2 with Noise Cancelling - Stereo - Garansi 2 Tahun"
        ]);
        Product::create([
            'category_id' => 1,
            'nama_produk' => "AOC 27G2SE 27' VA 1ms 165Hz FHD Gaming Monitor",
            'slug' => 'aoc-27g2se-27"-va-1ms-165hz-fhd-gaming-monitor',
            'price' => 2701000,
            'image' => "post-images/3TIadqF6DFNeaqM8Tu3OzOrtd5fF8uN1e6XOIuXj.jpg",
            'desc' => "AOC 27G2SE 27' VA 1ms 165Hz FHD Gaming Monitor"
        ]);
    }
}
