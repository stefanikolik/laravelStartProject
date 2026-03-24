<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use LiveNetworks\LnStarter\Models\MagicLinkToken;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', function () {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login')
            ->withCookie(cookie()->forget('auth_token'));
    })->middleware(['disable-csrf'])->name('logout');
});

Route::get('/magic/status', function () {
    $userId  = Session::get('magic_link_user_id');
    $tokenId = Session::get('magic_link_token_id');

    if (!$userId || !$tokenId) {
        return response()->json(['ok' => false, 'error' => 'No session']);
    }

    $token = MagicLinkToken::find($tokenId);

    if (!$token || $token->isExpired()) {
        Session::forget(['magic_link_user_id', 'magic_link_token_id']);
        return response()->json(['ok' => false, 'error' => 'Token expired']);
    }

    if ($token->approved) {
        $user = $token->user;
        $sanctumToken = $user->createToken('auth_token')->plainTextToken;

        Auth::login($user);

        Session::forget(['magic_link_user_id', 'magic_link_token_id']);

        $homeRoute = config('ln-starter.auth.home_route', 'dashboard');

        $response = response()->json([
            'ok'       => true,
            'redirect' => route($homeRoute),
            'token'    => $sanctumToken,
            'user'     => [
                'id'    => $user->id,
                'email' => $user->email,
            ],
        ]);

        $response->cookie('auth_token', $sanctumToken, 0, '/', null, false, false);

        return $response;
    }

    return response()->json(['ok' => false, 'error' => 'Token not approved yet']);
})->name('magic.status');
