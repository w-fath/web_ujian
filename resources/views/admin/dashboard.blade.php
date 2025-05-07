<x-admin-app-layout>
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Dashboard</h1>

            <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <h3 class="mb-3">Welcome, developer!</h3>
                        <div class="row gx-5 gy-3">
                            <div class="col-12 col-lg-9">
                                <div>Jangan lupa LogOut, setelah selesai!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Jumlah Siswa</h4>
                            <div class="stats-figure">50</div>
                        </div>
                        <a class="app-card-link-mask" href="#"></a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Ruangan</h4>
                            <div class="stats-figure">3</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Mapel</h4>
                            <div class="stats-figure">18</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Guru</h4>
                            <div class="stats-figure">{{ $guruCount }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-12 col-lg-6">
                    <div class="app-card app-card-calendar h-100 shadow-sm">
                        <div class="app-card-header p-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h4 class="app-card-title">Kalender Akademik</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm btn-outline-secondary prev-month">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <h5 class="mb-0 text-center month-year">Maret 2025</h5>
                                <button class="btn btn-sm btn-outline-secondary next-month">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="calendar-container">
                                <table class="table table-bordered calendar-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Min</th>
                                            <th>Sen</th>
                                            <th>Sel</th>
                                            <th>Rab</th>
                                            <th>Kam</th>
                                            <th>Jum</th>
                                            <th>Sab</th>
                                        </tr>
                                    </thead>
                                    <tbody class="calendar-body">
                                        <!-- Kalender akan diisi oleh JavaScript -->
                                    </tbody>
                                </table>
                                <div class="calendar-events mt-3">
                                    <div class="event-indicator text-success">
                                        <i class="fas fa-circle me-2"></i> <span class="event-text">Hari ini: <span class="today-date"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .calendar-table {
                        width: 100%;
                        text-align: center;
                    }

                    .calendar-table th {
                        font-weight: 500;
                        font-size: 0.8rem;
                        padding: 0.5rem;
                    }

                    .calendar-table td {
                        padding: 0.5rem;
                        height: 40px;
                        vertical-align: middle;
                    }

                    .calendar-table td.today {
                        background-color: #198754;
                        color: white;
                        font-weight: bold;
                    }

                    .calendar-table td:hover {
                        background-color: #f8f9fa;
                        cursor: pointer;
                    }

                    .event-indicator {
                        font-size: 0.9rem;
                        padding: 0.5rem;
                        border-radius: 5px;
                        background-color: #f8f9fa;
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let currentDate = new Date();
                        let currentMonth = currentDate.getMonth();
                        let currentYear = currentDate.getFullYear();

                        function updateCalendar(month, year) {
                            const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                            ];

                            document.querySelector('.month-year').textContent = `${monthNames[month]} ${year}`;

                            const firstDay = new Date(year, month, 1).getDay();
                            const daysInMonth = new Date(year, month + 1, 0).getDate();

                            const calendarBody = document.querySelector('.calendar-body');
                            calendarBody.innerHTML = '';

                            let row = document.createElement('tr');
                            let dayCount = 1;

                            for (let i = 0; i < firstDay; i++) {
                                row.appendChild(document.createElement('td'));
                            }

                            for (let i = firstDay; i < 7; i++) {
                                const cell = document.createElement('td');
                                cell.textContent = dayCount;

                                if (dayCount === currentDate.getDate() &&
                                    month === currentDate.getMonth() &&
                                    year === currentDate.getFullYear()) {
                                    cell.classList.add('today');
                                    document.querySelector('.today-date').textContent = `${dayCount} ${monthNames[month]} ${year}`;
                                }

                                row.appendChild(cell);
                                dayCount++;
                            }
                            calendarBody.appendChild(row);

                            while (dayCount <= daysInMonth) {
                                row = document.createElement('tr');

                                for (let i = 0; i < 7 && dayCount <= daysInMonth; i++) {
                                    const cell = document.createElement('td');
                                    cell.textContent = dayCount;

                                    if (dayCount === currentDate.getDate() &&
                                        month === currentDate.getMonth() &&
                                        year === currentDate.getFullYear()) {
                                        cell.classList.add('today');
                                        document.querySelector('.today-date').textContent = `${dayCount} ${monthNames[month]} ${year}`;
                                    }

                                    row.appendChild(cell);
                                    dayCount++;
                                }

                                calendarBody.appendChild(row);
                            }
                        }

                        document.querySelector('.prev-month').addEventListener('click', function() {
                            currentMonth--;
                            if (currentMonth < 0) {
                                currentMonth = 11;
                                currentYear--;
                            }
                            updateCalendar(currentMonth, currentYear);
                        });

                        document.querySelector('.next-month').addEventListener('click', function() {
                            currentMonth++;
                            if (currentMonth > 11) {
                                currentMonth = 0;
                                currentYear++;
                            }
                            updateCalendar(currentMonth, currentYear);
                        });

                        updateCalendar(currentMonth, currentYear);
                    });
                </script>


                <div class="col-12 col-lg-6">
                    <div class="app-card app-card-stats-table h-100 shadow-sm">
                        <div class="app-card-header p-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h4 class="app-card-title">Selesai Ujian</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th class="meta">Nama</th>
                                            <th class="meta stat-cell">Date/Time</th>
                                            <th class="meta stat-cell">Kelas</th>
                                            <th class="meta stat-cell">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">google.com</td>
                                            <td class="stat-cell">12/02/2025 12:21</th>
                                            <td class="stat-cell">Kelas VII</td>
                                            <td class="stat-cell">Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>google.com</td>
                                            <td class="stat-cell">12/02/2025 12:21</th>
                                            <td class="stat-cell">Kelas VIII</td>
                                            <td class="stat-cell">Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>google.com</td>
                                            <td class="stat-cell">12/02/2025 12:21</th>
                                            <td class="stat-cell">Kelas VI</td>
                                            <td class="stat-cell">Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>google.com</td>
                                            <td class="stat-cell">12/02/2025 12:21</th>
                                            <td class="stat-cell">Kelas VI</td>
                                            <td class="stat-cell">Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-4 mb-4">
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                            <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <h4 class="app-card-title">Info</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body px-4">

                            <div class="intro">Jika terdapat error atau bug silahkan konfirmasikan ke Team IT.</div>
                        </div>
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Lebih Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <h4 class="app-card-title">Apps</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body px-4">

                            <div class="intro">Jika terdapat error atau bug silahkan konfirmasikan ke Team IT.</div>
                        </div>
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Lebih Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                                            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <h4 class="app-card-title">Tools</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body px-4">

                            <div class="intro">Meng-update versi PHP 6.4 ke versi PHP 8.4</div>
                        </div>
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-app-layout>