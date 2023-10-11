<?php

namespace App\Controllers;

use Alisa\Context;
use Alisa\Http\Controller;

class StartController extends Controller
{
    public function __invoke(Context $ctx)
    {
        $ctx->reply('Прив+ет, {pause:250} мир!');
    }
}