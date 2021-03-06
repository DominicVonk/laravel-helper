<?php

namespace LaravelHelper\Scripts;

use LaravelHelper\Interfaces\IRunnable;

class ModifyComposer extends BaseScript implements IRunnable
{
    protected $filePath = '/composer.json';

    public $message = 'Modifying composer.json file';

    protected $isJson = true;

    private $value = [
        "Illuminate\\Foundation\\ComposerScripts::postUpdate",
        "@php artisan clear-compiled",
        "@php artisan ide-helper:generate",
        "@php artisan ide-helper:meta",
        "@php artisan ide-helper:models -N"
    ];

    protected function prepare()
    {
        $this->data['scripts']['post-update-cmd'] = $this->value;
    }
}
