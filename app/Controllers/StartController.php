<?php

namespace App\Controllers;

use Alisa\Alisa;
use Alisa\Http\Controller;

class StartController extends Controller
{
    public function __invoke(Alisa $alisa)
    {
        $alisa->reply('Прив+ет, {pause:250} мир!');
    }
}