<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat permission
        Permission::firstOrCreate(['name' => 'view guru']);
        Permission::firstOrCreate(['name' => 'create guru']);
        Permission::firstOrCreate(['name' => 'edit guru']);
        Permission::firstOrCreate(['name' => 'delete guru']);
        Permission::firstOrCreate(['name' => 'view riwayat_kinerja']);
        Permission::firstOrCreate(['name' => 'create riwayat_kinerja']);
        Permission::firstOrCreate(['name' => 'edit riwayat_kinerja']);
        Permission::firstOrCreate(['name' => 'delete riwayat_kinerja']);
        Permission::firstOrCreate(['name' => 'isi penilaian']);

        // Buat role
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $kepalaSekolah = Role::firstOrCreate(['name' => 'kepala_sekolah']);

        // Assign permission ke role
        $superAdmin->syncPermissions(Permission::all());
        $kepalaSekolah->syncPermissions([
            'view guru',
            'view riwayat_kinerja',
            'isi penilaian',
        ]);

        // Buat user dan assign role
        $userAdmin = User::firstOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $userAdmin->assignRole('super_admin');

        $userKepsek = User::firstOrCreate([
            'email' => 'kepsek@smk.com',
        ], [
            'name' => 'Kepala Sekolah',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $userKepsek->assignRole('kepala_sekolah');

        // **Tambah pemanggilan seeder data guru dan riwayat kinerja di sini**
        $this->call([
            GuruSeeder::class,
            RiwayatKinerjaSeeder::class,
        ]);
    }
}