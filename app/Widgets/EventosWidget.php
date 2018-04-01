<?php

namespace WebTV\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use WebTV\Evento as Evento;

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
            'text'   => __('voyager.dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Eventos',
                'link' => route('voyager.eventos.index'),
            ],
            'image' => '/img/evento-bg.jpg',
        ]));
    }
}
