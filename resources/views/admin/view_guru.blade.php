<x-admin-app-layout>
    <div class="app-content pt-4 p-md-5 p-lg-5">
        <div class="container-xl">
            <!-- Header -->
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Data Guru</h1>
                </div>
            </div>
            <!-- Content -->
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body p-4">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                                <a href="{{ route('admin.create') }}" class="btn btn-primary me-3 text-white">
                                    <i class="fas fa-user-plus"></i> Tambah Guru
                                </a>

                                <!-- Search & Filter -->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <input
                                        type="text"
                                        id="search-orders"
                                        name="searchorders"
                                        class="form-control me-3 w-50"
                                        placeholder="Search"
                                        oninput="filterTable(this.value)" />
                                    <select class="form-select w-auto">
                                        <option selected="" value="10">10</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="all">All</option>
                                    </select>
                                </div>

                                <!-- Tombol Download -->
                                <a class="btn btn-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg> Download Data
                                </a>
                            </div>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">#</th>
                                            <th class="cell">NIP</th>
                                            <th class="cell">Nama Lengkap</th>
                                            <th class="cell">Jenis Kelamin</th>
                                            <th class="cell">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-table-body">
                                        @foreach($gurus as $index => $guru)
                                        <tr>
                                            <td class="cell">{{ $index + 1 + ($gurus->currentPage() - 1) * $gurus->perPage() }}</td>
                                            <td class="cell"><span class="truncate">{{ $guru->nip }}</span></td>
                                            <td class="cell">{{ $guru->name }}</td>
                                            <td class="cell">{{ $guru->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                            <td class="cell">
                                                <div class="d-flex gap-2">
                                                    <a class="btn btn-sm btn-info" href="" title="Detail">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-sm btn-warning" href="" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-4">
                                {{ $gurus->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav class="app-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterTable(value) {
            const rows = document.querySelectorAll('#data-table-body tr');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(value.toLowerCase()) ? '' : 'none';
            });
        }
    </script>
</x-admin-app-layout>