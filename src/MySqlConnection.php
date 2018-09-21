<?php
namespace UniFreak\RememberableDB;

use Illuminate\Database\MySqlConnection as BaseMSC;
use Watson\Rememberable\Query\Builder as QueryBuilder;

class MySqlConnection extends BaseMSC
{
    public function query()
    {
        return new QueryBuilder(
            $this,
            $this->getQueryGrammar(),
            $this->getPostProcessor()
        );
    }
}
