<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Repositories\LinkRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function show()
    {
        return view('home.show');
    }

    public function shortenLink(Request $request)
    {
        $getLink = $request->input('link');

        $generateLink = (new LinkRepository())->generateRandomString(5);

//        dd($generateLink);

        Link::create([
            'uploader_ip_address' => request()->ip(),
            'shortened_link'      => $generateLink,
            'original_link'       => $getLink,
        ]);
    }
}



