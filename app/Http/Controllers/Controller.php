<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const PATH_UPLOADS = 'public';
    const URL_IMG = 'uploads/';
    public function handleErrorInput($error)
    {
        return back()->withError($error)->withInput();
    }
    
    public function uploadMultipleImg($path, $photos)
    {
        $paths = [];
        foreach ($photos as $index => $photo) {
            $extension = $photo->getClientOriginalExtension();
            $filename = 'photo-' . time() . $index . '.' . $extension;
            $paths[] = $filename;
            $data = Storage::disk($path)->put($filename, file_get_contents($photo));
        }
        return json_encode($paths);
    }
        // function unique slug
        public function setSlugStore($model, $name)
        {
    
            $data = $model->getAll()->sortByDesc('id')->first();
            $slug = Str::slug($name) . '-' . $data->id + 1;
    
            return $slug;
        }
}
