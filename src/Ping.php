<?php
class Ping
{
    private $text = 'hi';

    public function foo()
    {
        return true;
    }

    public function gen()
    {
        return new DOMElement('word', $this->text);
    }
}

