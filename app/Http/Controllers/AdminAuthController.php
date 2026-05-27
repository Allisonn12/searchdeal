<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
  /**
   * Show the admin login form.
   * Redirect to the admin dashboard if already authenticated.
   */
  public function showLogin(): View|RedirectResponse
  {
    if (Auth::guard('admin')->check()) {
      return redirect()->route('admin.index');
    }

    return view('admin.login');
  }

  /**
   * Authenticate the admin and start a session.
   *
   * Uses the dedicated `admin` guard so admin sessions are completely
   * isolated from the public `web` guard.
   *
   * Rate-limiting is handled by the `throttle:5,1` middleware on this route.
   */
  public function login(LoginRequest $request): RedirectResponse
  {
    $credentials = $request->only('email', 'password');

    if (!Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
      return back()
        ->withInput($request->only('email'))
        ->withErrors(['email' => 'These credentials do not match our records.']);
    }

    // Regenerate session ID to prevent session-fixation attacks.
    $request->session()->regenerate();

    return redirect()->intended(route('admin.index'));
  }

  /**
   * Invalidate the admin session and redirect to login.
   */
  public function logout(Request $request): RedirectResponse
  {
    Auth::guard('admin')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login');
  }
}

