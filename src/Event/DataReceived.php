<?php

namespace Snoke\Websocket\Event;

use Doctrine\Common\Collections\ArrayCollection;
use Snoke\Websocket\Entity\Message;
use Snoke\Websocket\Entity\Request;
use Snoke\Websocket\ConnectionWrapper;

class DataReceived extends AbstractFrame
{
    public function __construct(protected  ArrayCollection $connections, protected   ?ConnectionWrapper $connection, protected   mixed $frame)
    {
        parent::__construct($connections,$connection,$frame);
    }
}