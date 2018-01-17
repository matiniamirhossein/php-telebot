<?php
namespace TelegramBot\Api\Handlers;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class StatusUpdateHandler extends BaseHandler
{
    protected $filters;

    public function __construct(callable $callback, array $filters = [])
    {
        parent::__construct($callback);
        $this->filters = $filters;
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$statusUpdate::filter($update, $this->filters)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        return call_user_func_array($this->callback, [$botApi, $update, $update->getEffectiveMessage()]);
    }
}