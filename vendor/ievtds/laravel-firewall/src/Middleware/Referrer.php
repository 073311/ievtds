<?php

namespace ievtds\Firewall\Middleware;

use ievtds\Firewall\Abstracts\Middleware;
use ievtds\Firewall\Events\AttackDetected;

class Referrer extends Middleware
{
    public function check($patterns)
    {
        $status = false;

        if (! $blocked = config('firewall.middleware.' . $this->middleware . '.blocked')) {
            return $status;
        }

        if (in_array((string) $this->request->server('HTTP_REFERER'), (array) $blocked)) {
            $status = true;
        }

        if ($status) {
            $log = $this->log();

            event(new AttackDetected($log));
        }

        return $status;
    }
}
