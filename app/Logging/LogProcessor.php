<?php

namespace App\Logging;

class LogProcessor
{
    public function __invoke(array $record): array
    {
        $record['extra'] = [
            'user_id' => auth()->user() ? auth()->user()->id : 'guest',
        ];

        return $record;
    }
}