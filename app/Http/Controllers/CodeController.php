<?php

namespace App\Http\Controllers;

use Illuminate\Config\Repository;
use LarsJanssen\UnderConstruction\Controllers\CodeController as BaseCodeController;

class CodeController extends BaseCodeController
{
    /**
     * CodeController constructor.
     *
     * @param  Repository  $config
     */
    public function __construct(Repository $config)
    {
        $this->config                     = $config->get('under-construction');
        $this->config['attempts_message'] = __($this->config['attempts_message']);
        $this->config['back-button']      = __($this->config['back-button']);
        $this->config['hide-button']      = __($this->config['hide-button']);
        $this->config['seconds_message']  = __($this->config['seconds_message']);
        $this->config['show-button']      = __($this->config['show-button']);
        $this->config['title']            = __($this->config['title']);
        $this->maxAttempts                = $this->config['max_attempts'];
        $this->decayMinutes               = $this->config['decay_minutes'];
    }
}
