<?php

/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
class event
{
    private $links = array();

    public function __construct($links)
    {
        $this->prepare($links);

        $GLOBALS['event_nav'] = $this->links;
    }

    private function prepare($links)
    {
        if (is_array($links)) {
            $i = 0;

            foreach ($links as $link) {
                $tmp = explode(':', $link);

                $this->links[$i]['name']      = $tmp[0];
                $this->links[$i]['url']       = $tmp[1];
                $this->links[$i]['linkclass'] = isset($tmp[2]) ? $tmp[2] : '';

                $i++;
            }
        }

    }

    public function getLinks()
    {
        return $this->links;
    }
}