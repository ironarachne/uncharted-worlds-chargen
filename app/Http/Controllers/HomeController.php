<?php

namespace App\Http\Controllers;

use App\CharacterGenerator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        return view( 'index' );
    }

    public function character( $guid )
    {
        $character = Cache::rememberForever( "character-$guid", function () {
            $characterGenerator = new CharacterGenerator();
            return $characterGenerator->generate();
        } );

        return view( 'character', [ 'character' => $character ] );
    }

    public function characterGenerate()
    {
        $guid = Uuid::uuid4();

        return redirect()->route( 'character', [ 'guid' => $guid ] );
    }
}
