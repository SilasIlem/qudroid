<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Portfolios extends Controller
{
    public function index($port = '', $owner_email = '')
    {

        if ($port != '' && $owner_email != '') {

            return view("portfolios.$port", [
                'owner' => User::all()
                    ->where('email', '=', $owner_email)->first()
            ]);
        } else {
            return view('ports', ['users' => User::all()]);
        }
    }

    public function build()
    {
        $images = [];
        $files = [];
        $all = scandir("./ports/" . strtolower(str_replace(' ', '', Auth::user()->name)) . "/images");
        $images = array_slice($all, 2);
        $all = scandir("./ports/" . strtolower(str_replace(' ', '', Auth::user()->name)) . "/files");
        $filenames = array_slice($all, 2);
        $n = 1;

        foreach ($filenames as $filename) {
            $files[$n] = $filename;
            $n += 1;
        }
        if (Auth::user()->portfolio == 1) {
            $customFile = "../resources/views/portfolios/templates/" . "oceania" . ".blade.php";
            $File = "../resources/views/portfolios/" . strtolower(str_replace(' ', '', Auth::user()->name)) . ".blade.php";

            if (file_exists($File)) {
                $file = fopen($File, "r");
                $old = fread($file, filesize($File));
                fclose($file);
            } else {
                $file = fopen($File, 'w');
                $custom_file = fopen($customFile, 'r');
                $custom = fread($custom_file, filesize($customFile));
                fclose($custom_file);
                fwrite($file, $custom);
                fclose($file);
                $old = $custom;
            }
            return view('buildPort', ['port' => $old, 'images' => $images, "files" => $files]);
        } else {
            abort(401, "Don't be Fraudulent!!!");
        }
    }

    public function upload(Request $request)
    {
        $images = [];
        $files = ['one', 'two'];
        $all = scandir("./ports/" . strtolower(str_replace(' ', '', Auth::user()->name)) . "/images");
        $images = array_slice($all, 2);
        $all = scandir("./ports/" . strtolower(str_replace(' ', '', Auth::user()->name)) . "/files");
        $filenames = array_slice($all, 2);
        $n = 1;

        foreach ($filenames as $filename) {
            $files["$n"] = $filename;
            $n += 1;
        }
        $raw = $request->input('html');
        if ($raw != '') {
            $file_path = "../resources/views/portfolios/" . strtolower(str_replace(' ', '', Auth::user()->name)) . ".blade.php";
            $port = fopen($file_path, "w");

            fwrite($port, $raw);
            fclose($port);
            $port = fopen($file_path, "r");
            $result = fread($port, filesize($file_path));

            fclose($port);
            return view('buildPort', ['port' => $result, 'images' => $images, "files" => $files]);
        }
    }

    public function addFile(Request $request, User $user)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('files/' . $user->id, $filename);
            $folder = uniqid() . '-' . now()->timestamp;

            // Image::make(storage_path('app/public/avatars/' . $user->id . '/' . $filename))
            //     ->fit(50, 50)
            //     ->save(storage_path('app/public/avatars' . $user->id . '/thumb-' . $filename));

            // $user->update([
            //     'avatar' => $filename
            // ]);

            return $folder;
        }

        return '';
    }

    public function run()
    {
        return view('buildPort');
    }
}
