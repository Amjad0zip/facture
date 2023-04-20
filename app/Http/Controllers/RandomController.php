<?php

namespace App\Http\Controllers;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class RandomController extends Controller {

    public function show()
    {
        $customer = new Buyer([
            'name'          => 'John Doe',
            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);
        $clients = new Party([
            'name'          => 'Avaliance',
            'custom_fields' => [
                'adresse'       => 'Maroc, Rabat',
                'code'          => '#226637613',
                'email' => 'avaliance-ma@avaliance.com',
            ],
        ]);

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->seller($clients)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            ->addItem($item);

        return $invoice->stream();
    }
}

