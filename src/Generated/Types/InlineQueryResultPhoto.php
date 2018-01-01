<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setPhotoUrl(string $photoUrl)
 * @method string getPhotoUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setPhotoWidth(integer $photoWidth)
 * @method integer getPhotoWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setPhotoHeight(integer $photoHeight)
 * @method integer getPhotoHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultPhoto setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
*/
class InlineQueryResultPhoto extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'photo_url'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'photo_url' => 'string',
		'thumb_url' => 'string',
		'photo_width' => 'integer',
		'photo_height' => 'integer',
		'title' => 'string',
		'caption' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
	];
	static protected $defaultData = [
	];
}
