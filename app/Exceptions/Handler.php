<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Sceva\ApiCoreLibrary\Exceptions\ScevaExceptionHandler;
use Throwable;

class Handler extends ScevaExceptionHandler
{
}
