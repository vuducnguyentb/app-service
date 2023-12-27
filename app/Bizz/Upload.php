<?php


namespace App\Bizz;

use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;


class Upload
{
    public static function upload(UploadedFile $file)
    {
        $data = [];
        //create image new
        $fileName = Carbon::now()->timestamp . '.' . $file->extension();

        #YY-MM-DD
        $now = Carbon::now()->toDateTimeString();
        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');
        $day = Carbon::now()->format('d');
        #.jpg,.cgv,...
        $extension = $file->getClientOriginalExtension();
        #name
        $random = rand(11111, 99999);
        $fileName = $random . '.' . $extension;
        $fileNameText = $random . '.' . 'txt';

        #size
        $size = $file->getSize();

        $url = '';
//      $path = Storage::disk('public')->path('logos/');
        $storage = Storage::disk('public')->url('');
        switch ($extension) {
            case "jpg":
            case "png":
            case "jpeg":
                $url = URL::to('/') . Storage::url('images/' . $fileName);
                $path =('images/' . $fileName);
                Storage::disk('public')->put('/images/' . $fileName, $file->getContent());
                break;
            case "pdf":
            case "doc":
            case "docx":
            case "xls":
            case "xlsx":
                $url = URL::to('/') . Storage::url('documents/' . $fileName);
                Storage::disk('public')->put('/documents/' . $fileName, $file->getContent());
                $path = ('documents/' . $fileName);
                break;
            default:
                $url = URL::to('/') . Storage::url('defaults/' . $fileName);
                Storage::disk('public')->put('/defaults/' . $fileName, $file->getContent());
                $path = ('defaults/' . $fileName);
                break;
        }
        $base = base64_decode(Storage::disk('public')->get($path));
        #save for file
        Storage::disk('public')->put('/files/' . $fileNameText, $base);
        $fileSave = new File();
        $fileSave->url = $path;
        $fileSave->save();

        $data = [
            "file" => $path,
            "file_id"=>$fileSave->id,
            'url'=> $url
        ];
        return $data;// object
    }

}
