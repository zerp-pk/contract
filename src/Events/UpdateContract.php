<?php

namespace Zerp\Contract\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Zerp\Contract\Models\Contract;

class UpdateContract
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Request $request,
        public Contract $contract
    ) {}
}
