<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MoonShine\Contracts\Core\DependencyInjection\CrudRequestContract;
use MoonShine\Laravel\Http\Controllers\MoonShineController;
use Symfony\Component\HttpFoundation\Response;

final class MoonshineSchoolBoy extends MoonShineController
{
    public function fleet_school_boy(Request $request): Response
    {
        $data = $request->all();
        Storage::disk('config')->put("moonshine/fleet_school_boy.php", "<?php\n\n" . 'return ' . var_export($data, true) . ";\n");
        cache_clear();
        return back();
    }
}
