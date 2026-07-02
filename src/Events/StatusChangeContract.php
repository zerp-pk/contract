<?php

namespace Zerp\Contract\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Zerp\Contract\Models\Contract;

class StatusChangeContract
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public Contract $contract
    ) {}
}