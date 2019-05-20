<?php

namespace webTV\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use webTV\Evento as Evento;

class EventosWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Evento::count();
        $string = "Eventos";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "Eventos",
            'button' => [
                'text' => 'Ver todos',
                'link' => route('home'),
            ],
            'image' => '/img/evento-bg.jpg',
        ]));
    }
}
