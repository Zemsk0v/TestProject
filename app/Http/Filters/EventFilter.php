<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class EventFilter extends AbstractFilter
{
    public const CLIENT_NAME = 'client_name';
    public const TYPE_OF_EVENTS_ID = 'type_of_events_id';
    public const EVENT_DATE = 'event_date';
    public const EVENT_TIME = 'event_time';
    public const VENUE = 'venue';
    public const GUEST_COUNT = 'guest_count';
    public const BUDGET = 'budget';
    public const THEME = 'theme';


    protected function getCallbacks(): array
    {
        return [
            self::CLIENT_NAME => [$this, 'clientName'],
            self::TYPE_OF_EVENTS_ID => [$this, 'typeOfEventsId'],
            self::EVENT_DATE => [$this, 'eventDate'],
            self::EVENT_TIME => [$this, 'eventTime'],
            self::VENUE => [$this, 'venue'],
            self::GUEST_COUNT => [$this, 'guestCount'],
            self::BUDGET => [$this, 'budget'],
            self::THEME => [$this, 'theme'],
        ];
    }

    public function clientName(Builder $builder, $value)
    {
        $builder->where('client_name', 'like', "%{$value}%");
    }

    public function typeOfEventsId(Builder $builder, $value)
    {
        $builder->where('type_of_events_id', "%{$value}%");
    }

    public function EventDate(Builder $builder, $value)
    {
        $builder->where('event_date', "%{$value}%");
    }

    public function eventTime(Builder $builder, $value)
    {
        $builder->where('event_time', "%{$value}%");
    }

    public function venue(Builder $builder, $value)
    {
        $builder->where('venue', "%{$value}%");
    }

    public function guestCount(Builder $builder, $value)
    {
        $builder->where('guest_count',"%{$value}%");
    }

    public function budget(Builder $builder, $value)
    {
        $builder->where('budget',"%{$value}%");
    }

    public function theme(Builder $builder, $value)
    {
        $builder->where('theme', 'like', "%{$value}%");
    }

}
