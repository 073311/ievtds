<?php

namespace ievtds\Menu\Presenters\Bootstrap3;

class NavPills extends Navbar
{
    /**
     * {@inheritdoc }.
     */
    public function getOpenTagWrapper()
    {
        return PHP_EOL . '<ul class="nav nav-pills">' . PHP_EOL;
    }
}
