<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\GalleryItem;
use App\Models\JobOpening;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ContentManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_render_database_content(): void
    {
        Service::query()->create([
            'title' => 'Test event service',
            'description' => 'Service description',
            'image_path' => 'assets/img/services/audio.jpg',
            'sort_order' => 0,
            'is_active' => true,
        ]);
        GalleryItem::query()->create([
            'title' => 'Test event image',
            'image_path' => 'assets/img/gallery/01.jpg',
            'sort_order' => 0,
            'is_active' => true,
        ]);
        JobOpening::query()->create([
            'title' => 'Event coordinator',
            'description' => 'Coordinate events.',
            'sort_order' => 0,
            'is_active' => true,
        ]);

        $this->get(route('home'))->assertOk();
        $this->get(route('about'))->assertOk();
        $this->get(route('services'))->assertOk()->assertSee('Test event service');
        $this->get(route('gallery'))
            ->assertOk()
            ->assertSee('Test event image')
            ->assertSee('popup-gallery')
            ->assertSee('popup-img');
        $this->get(route('careers'))->assertOk()->assertSee('Event coordinator');
        $this->get(route('contact'))->assertOk();
    }

    public function test_admin_can_create_a_service_after_signing_in(): void
    {
        $this->get(route('admin.login'))->assertOk();
        $this->get(route('admin.services.index'))->assertRedirect(route('admin.login'));

        $admin = User::factory()->create();
        $this->actingAs($admin)
            ->get(route('admin.dashboard'))
            ->assertOk();
        $this->get(route('admin.services.create'))->assertOk();
        $this->get(route('admin.gallery.create'))->assertOk();
        $this->get(route('admin.careers.create'))->assertOk();

        Storage::fake('public');
        $this->post(route('admin.services.store'), [
                'title' => 'New service',
                'description' => 'A description for this service.',
                'image' => UploadedFile::fake()->image('service.jpg'),
                'sort_order' => 0,
                'is_active' => 1,
            ])
            ->assertRedirect(route('admin.services.index'));

        $service = Service::query()->where('title', 'New service')->firstOrFail();
        Storage::disk('public')->assertExists($service->image_path);
    }

    public function test_admin_can_sign_in_with_the_seeded_username_and_password(): void
    {
        $admin = User::factory()->create([
            'username' => 'cmsadmin-test',
            'email' => 'admin@example.com',
            'password' => Hash::make('Secure-Admin-Password-83'),
        ]);

        $this->post(route('admin.login.store'), [
            'login' => 'cmsadmin-test',
            'password' => 'Secure-Admin-Password-83',
        ])->assertRedirect(route('admin.dashboard'));

        $this->assertAuthenticatedAs($admin);
    }

    public function test_contact_form_saves_valid_messages(): void
    {
        $this->post(route('contact.store'), [
            'name' => 'Test visitor',
            'email' => 'visitor@example.com',
            'subject' => 'Event enquiry',
            'message' => 'Please contact me about an event.',
        ])->assertRedirect(route('contact'));

        $this->assertDatabaseHas('contact_messages', [
            'email' => 'visitor@example.com',
            'subject' => 'Event enquiry',
        ]);
        $this->assertSame(1, ContactMessage::query()->count());
    }
}
