<?php

require 'vendor/autoload.php';


use Carbon\Carbon;

echo Carbon::now()->diffForHumans(Carbon::parse('2024-05-15'));