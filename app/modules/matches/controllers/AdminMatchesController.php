<?php namespace App\Modules\Matches\Controllers;

use App\Modules\Matches\Models\Match;
use Hover, BackController;

class AdminMatchesController extends BackController {

    protected $icon = 'joystick.png';

    public function __construct()
    {
        $this->modelName = 'Match';

        parent::__construct();
    }

    public function index()
    {
        $this->indexPage([
            'tableHead' => [
                trans('app.id')     => 'id', 
                trans('app.title')  => 'title'
            ],
            'tableRow' => function($game)
            {
                $hover = new Hover();
                if ($game->icon) $hover->image($game->uploadPath().$game->icon);

                return [
                    $game->id,
                    $hover.$game->title,
                ];            
            }
        ]);
    }

}