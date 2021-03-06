<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\InlineQueryResult\InlineQueryResult;

/**
 * @method answerInlineQuery setInlineQueryId(string $inlineQueryId)
 * @method answerInlineQuery setCacheTime(integer $cacheTime)
 * @method answerInlineQuery setIsPersonal(boolean $isPersonal)
 * @method boolean isPersonal()
 * @method answerInlineQuery setNextOffset(string $nextOffset)
 * @method answerInlineQuery setSwitchPmText(string $switchPmText)
 * @method answerInlineQuery setSwitchPmParameter(string $switchPmParameter)
 */
class answerInlineQuery extends BaseMethod
{
    protected $map = [
        'inline_query_id',
        'results',
        'cache_time',
        'is_personal',
        'next_offset',
        'switch_pm_text',
        'switch_pm_parameter',
    ];

    /**
     * @param InlineQueryResult[] $results
     * @return $this
     */
    public function setResults(array $results)
    {
        foreach ($results as &$result) {
            if ($result instanceof InlineQueryResult) {
                $result = $result->toArray();
            }
        }
        $this->data['results'] = $results;
        return $this;
    }

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
