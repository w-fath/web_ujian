<?php

namespace App\Http\Controllers\Guru\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\GuruLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('guru.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(GuruLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('guru.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('guru')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('guru/login');
    }
}
