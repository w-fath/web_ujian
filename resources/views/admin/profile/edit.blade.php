<x-admin-app-layout>
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title mb-4">{{ __('Profile') }}</h1>

            <div class="row g-1 mb-4">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                    <div class="app-card-header p-3 border-bottom-0">
                        <div class="row align-items-center gx-3">
                            <div class="col-auto">
                                <div class="app-icon-holder">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-auto">
                                <h4 class="app-card-title">Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-body px-4 w-100">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Name</strong></div>
                                    <div class="item-data">{{ $user->name }}</div>
                                </div>
                                <div class="col text-end">
                                    <a class="btn-sm app-btn-secondary" href="#">Change</a>
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Email</strong></div>
                                    <div class="item-data">{{ $user->email }}</div>
                                </div>
                                <div class="col text-end">
                                    <a class="btn-sm app-btn-secondary" href="#">Change</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-footer p-4 mt-auto">
                        <a class="btn app-btn-secondary" href="#">Manage Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>