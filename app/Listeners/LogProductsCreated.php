<?php

namespace App\Listeners;

use App\Events\ProductsCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogProductsCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProductsCreated  $event
     * @return void
     */
    public function handle(ProductsCreated $event)
    {
        Log::info("Produto { $event->produtoNome } criado com sucesso");
    }
}
