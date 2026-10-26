<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        if (Service::query()->exists()) {
            return;
        }

        $services = [
            ['Rental LED Screens', 'LED-Screen.jpg', 'Enhance your event with high-quality LED screens, crystal-clear visuals and vibrant colors for corporate events, exhibitions, concerts, weddings and outdoor gatherings.'],
            ['Audio System', 'audio.jpg', 'Deliver clear, powerful sound with professional audio systems for corporate events, conferences, concerts, weddings and exhibitions.'],
            ['Event Lighting', 'lighing.jpg', 'Transform your event atmosphere with stage, ambient, architectural and decorative lighting that creates memorable visual experiences.'],
            ['Performance Stage', 'staging.jpg', 'Safe, durable and elegant stage solutions for concerts, corporate events, exhibitions, festivals and special occasions.'],
            ['Special Effects', 'Special-Effects.jpg', 'Create spectacular moments with cold sparks, confetti, fog effects and other dynamic visual enhancements.'],
            ['Power & Distribution Box', 'Power-Distro.jpg', 'Provide safe, stable power management and efficient load distribution for events and technical equipment.'],
            ['Backline for Events', 'Backline.jpg', 'Stage-ready instruments, amplifiers, drums and equipment for artists at concerts, corporate shows and festivals.'],
            ['Arts & Artists for Events', 'Artist.jpg', 'Musicians, dancers, DJs, cultural acts and live performers to create engaging guest experiences.'],
            ['Photography & Videography', 'Photography.jpg', 'Professional event photography, cinematic video and creative storytelling for corporate events, weddings and celebrations.'],
            ['Hostesses', 'Hostess.jpg', 'Professional hostesses provide guest handling, warm welcomes and event support while representing your brand.'],
            ['Security Services', 'security.jpg', 'Trained event security personnel provide crowd control, access management and on-site protection.'],
            ['Other Event Equipment', 'Other_Event_Equipment.jpg', 'Reliable event equipment including truss structures, barricades, tables, chairs and staging accessories.'],
            ['Manpower Services', 'Man-Power.jpg', 'Skilled staff for setup, logistics, technical assistance and on-ground event coordination.'],
            ['Equipment Services', 'Equipment-Services.jpg', 'Equipment supply, setup and technical support for staging, audio-visual systems, lighting and special effects.'],
            ['Equipment Repair', 'Equipment-Repair.jpg', 'Professional repair services for audio systems, lighting, LED screens and other technical equipment.'],
        ];

        foreach ($services as $order => [$title, $image, $description]) {
            Service::query()->create([
                'title' => $title,
                'description' => $description,
                'image_path' => 'assets/img/services/'.$image,
                'sort_order' => $order,
                'is_active' => true,
            ]);
        }
    }
}
