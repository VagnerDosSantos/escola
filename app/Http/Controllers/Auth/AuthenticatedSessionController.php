<?php

namespace App\Http\Controllers\Auth;

use App\Enums\HttpStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $validated = ValidateForm::validate($request, [
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            if (!Auth::attempt($validated)) {
                throw new Exception('Usuário ou senha inválidos', HttpStatus::UNAUTHORIZED->value);
            }

            /**
             * @var User $user
             */
            $user = Auth::user();
            $token = $user->createToken();
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Login realizado com sucesso',
            'dados' => [
                'token' => $token->plainTextToken,
                'user' => $user
            ]
        ]);
    }

    /**
     * Destroy an authenticated session.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
