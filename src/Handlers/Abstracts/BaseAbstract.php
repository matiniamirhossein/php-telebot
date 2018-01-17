<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use function call_user_func_array;
use TelegramBot\Api\State\State;
use function method_exists;

abstract class BaseAbstract
{
    protected $state = null;

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function hasState()
    {
        return $this->state instanceof State;
    }

    public function populateProperties()
    {
    }

    public function beforeCallMethod($method, array $params = [])
    {
        return true;
    }

    public function afterCallMethod($method, $params, $result = null)
    {
        return true;
    }

    public function callMethod($method, $params = [])
    {
        if (method_exists($this, $method)) {
            if (!$this->beforeCallMethod($method, $params)) {
                return false;
            }
            $result = call_user_func_array([$this, $method], $params);
            $this->afterCallMethod($method, $params, $result);
            return $result;
        }
        return false;
    }
}