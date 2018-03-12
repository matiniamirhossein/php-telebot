<?php
namespace TelegramBot\Api\Methods;
/**
 * @method setChatTitle setChatId(integer | string $chatId)
 * @method setChatTitle setTitle(string $title)
 */
class setChatTitle extends BaseMethod
{
    protected $map = [
        'chat_id',
        'title',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
