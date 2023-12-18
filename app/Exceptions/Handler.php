<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        //404
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('404', [], 404);
        }
        //403
        if ($exception instanceof \Illuminate\Auth\Access\AuthorizationException) {
            return response()->view('403', [], 403);
        }
        //401 (Authorization required)
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return response()->view('401', [], 401);
        }
        //400 (Bad request)
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            //return response()->view('400', [], 400);
            return redirect()->route('welcome');
        }

        return parent::render($request, $exception);
    }
}
