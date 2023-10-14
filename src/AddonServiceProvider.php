<?php

namespace Lucasheer\BackpackPagebuilder;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'lucasheer';
    protected $packageName = 'backpack-pagebuilder';
    protected $commands = [];
}
