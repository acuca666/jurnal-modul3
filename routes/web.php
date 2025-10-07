<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route:: get('/from', [DataController:: class, 'from']);
Route:: post ('/proses', [DataController:: class, 'proses']);
