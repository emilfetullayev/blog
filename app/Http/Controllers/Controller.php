<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
<<<<<<< HEAD
=======
use Illuminate\Foundation\Bus\DispatchesJobs;
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
<<<<<<< HEAD
    use AuthorizesRequests, ValidatesRequests;
=======
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25
}
