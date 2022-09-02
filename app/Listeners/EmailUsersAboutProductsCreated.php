<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Mail\ProductsCreated;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class EmailUsersAboutProductsCreated implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle(\App\Events\ProductsCreated $event)
    {
        $email = new ProductsCreated(
            $event->produtoNome,
            $event->produtoPreco,
            $event->produtoSabor,
            $event->produtoDescricao,
            $event->produtoId
        );

        $when = now()->addSeconds(5);
        $userAdm = User::where('permissao', 1)->get();
        Mail::to($userAdm[0])->later($when, $email);
    }
}
