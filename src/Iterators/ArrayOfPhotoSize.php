<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;

abstract class ArrayOfPhotoSize
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfPhotoSize = [];
        foreach ($data as $photoSizeItem) {
            $arrayOfPhotoSize[] = PhotoSize::fromResponse($bot, $photoSizeItem);
        }

        return $arrayOfPhotoSize;
    }


    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof PhotoSize ? true : PhotoSize::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
