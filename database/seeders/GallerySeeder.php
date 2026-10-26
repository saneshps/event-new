<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        if (GalleryItem::query()->exists()) {
            return;
        }

        foreach (['01.jpg', '02.jpg', '03.jpg', '04.jpg', '5.jpg', '6.jpg'] as $order => $image) {
            GalleryItem::query()->create([
                'title' => 'Event Gallery '.($order + 1),
                'image_path' => 'assets/img/gallery/'.$image,
                'sort_order' => $order,
                'is_active' => true,
            ]);
        }
    }
}
