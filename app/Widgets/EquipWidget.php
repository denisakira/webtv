<?php

namespace webTV\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use webTV\Equipamento;
use webTV\Evento as Evento;

class EquipWidget extends AbstractWidget
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
        $count = Equipamento::count();
        $string = "Equipamentos";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-video',
            'title'  => "{$count} {$string}",
            'text'   => "Equipamentos",
            'button' => [
                'text' => 'Ver todos',
                'link' => route('home'),
            ],
            'image' => '/img/equip.png',
        ]));
    }
}
