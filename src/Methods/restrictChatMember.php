<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method restrictChatMember setChatId(integer $chatId)
 * @method restrictChatMember setUserId(integer $userId)
 * @method restrictChatMember setUntilDate(integer $untilDate)
 * @method restrictChatMember setCanSendMessages(boolean $canSendMessages)
 * @method restrictChatMember setCanSendMediaMessages(boolean $canSendMediaMessages)
 * @method restrictChatMember setCanSendOtherMessages(boolean $canSendOtherMessages)
 * @method restrictChatMember setCanAddWebPagePreviews(boolean $canAddWebPagePreviews)
 */
class restrictChatMember extends BaseMethod
{
    protected $map = [
        'chat_id',
        'user_id',
        'until_date',
        'can_send_messages',
        'can_send_media_messages',
        'can_send_other_messages',
        'can_add_web_page_previews',
    ];

    /**
     * @param BotApi|null $botApi
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
