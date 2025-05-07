<x-admin-app-layout>
    <div class="app-content pt-4 p-md-5 p-lg-5">
        <div class="container-xl">
            <!-- Header -->
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Tambah Data Guru</h1>
                </div>
            </div>
            <!-- Form -->
            <div class="app-card shadow-sm p-4">
                <form action="{{ route('admin.guru.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nip" class="col-md-3 col-form-label">NIP *</label>
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                id="nip" 
                                name="nip" 
                                class="form-control" 
                                placeholder="Masukkan NIP" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_lengkap" class="col-md-3 col-form-label">Nama Lengkap *</label>
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                id="nama_lengkap" 
                                name="nama_lengkap" 
                                class="form-control" 
                                placeholder="Masukkan Nama Lengkap" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-md-3 col-form-label">Tempat Lahir *</label>
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                id="tempat_lahir" 
                                name="tempat_lahir" 
                                class="form-control" 
                                placeholder="Masukkan Tempat Lahir" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-md-3 col-form-label">Tanggal Lahir *</label>
                        <div class="col-md-9">
                            <input 
                                type="date" 
                                id="tanggal_lahir" 
                                name="tanggal_lahir" 
                                class="form-control" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_kelamin" class="col-md-3 col-form-label">Jenis Kelamin *</label>
                        <div class="col-md-9">
                            <select 
                                id="jenis_kelamin" 
                                name="jenis_kelamin" 
                                class="form-select" 
                                required
                            >
                                <option value="">- Pilih -</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="agama" class="col-md-3 col-form-label">Agama *</label>
                        <div class="col-md-9">
                            <select 
                                id="agama" 
                                name="agama" 
                                class="form-select" 
                                required
                            >
                                <option value="">- Pilih -</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_hp" class="col-md-3 col-form-label">Nomor Telepon *</label>
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                id="no_hp" 
                                name="no_hp" 
                                class="form-control" 
                                placeholder="Masukkan Nomor Telepon" 
                                required
                            />
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="alamat" class="col-md-3 col-form-label">Alamat *</label>
                        <div class="col-md-9">
                            <textarea 
                                id="alamat" 
                                name="alamat" 
                                class="form-control" 
                                rows="3" 
                                placeholder="Masukkan Alamat Lengkap" 
                                required
                            ></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jabatan" class="col-md-3 col-form-label">Jabatan *</label>
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                id="jabatan" 
                                name="jabatan" 
                                class="form-control" 
                                placeholder="Masukkan Jabatan" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-3 col-form-label">Email *</label>
                        <div class="col-md-9">
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="Masukkan Email" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-3 col-form-label">Password *</label>
                        <div class="col-md-9">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="Masukkan Password" 
                                required
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary text-white">
                                <i class="fas fa-save me-2"></i> Simpan Data
                            </button>
                            <a href="{{ route('admin.view_guru') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Kembali
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-app-layout>
