<?php

return [

    'bill_number'           => 'Број на сметка',
    'bill_date'             => 'Датум на сметка',
    'bill_amount'           => 'Износ на Сметката',
    'total_price'           => 'Вкупна цена',
    'due_date'              => 'Датум на доспевање',
    'order_number'          => 'Број на нарачка',
    'bill_from'             => 'Сметка од',

    'quantity'              => 'Количина',
    'price'                 => 'Цена',
    'sub_total'             => 'Меѓузбир',
    'discount'              => 'Попуст',
    'item_discount'         => 'Попуст на линија',
    'tax_total'             => 'Вкупно данок',
    'total'                 => 'Вкупно',

    'item_name'             => 'Име на артиклот|Име на артиклите',
    'recurring_bills'       => 'Повторувачка сметка|Повторувачки сметки',

    'show_discount'         => ':discount% Попуст',
    'add_discount'          => 'Додади попуст',
    'discount_desc'         => 'од меѓузбир',

    'payment_made'          => 'Направено Плаќање',
    'payment_due'           => 'Доспева за плаќање',
    'amount_due'            => 'Доспеан износ',
    'paid'                  => 'Платено',
    'histories'             => 'Историја',
    'payments'              => 'Плаќања',
    'add_payment'           => 'Додади плаќање',
    'mark_paid'             => 'Означи како платено',
    'mark_received'         => 'Означи како примено',
    'mark_cancelled'        => 'Означи како откажано',
    'download_pdf'          => 'Преземи PDF',
    'send_mail'             => 'Прати е-маил',
    'create_bill'           => 'Нова сметка',
    'receive_bill'          => 'Прими сметка',
    'make_payment'          => 'Направи плаќање',

    'form_description' => [
        'billing'           => 'Деталите за плаќање се појавуваат во вашата сметка. Датумот на сметка се користи во контролната табла и извештаите. Изберете го датумот на кој очекувате да ви биде платено како Датум на Доспевање.',
    ],

    'messages' => [
        'draft'             => 'Ова е <b>НАЦРТ</b> сметка и ќе се рефлектира на графиконите одкако ќе биде примена.',

        'status' => [
            'created'       => 'Создадена на :date',
            'receive' => [
                'draft'     => 'Не е примено',
                'received'  => 'Примено на :date',
            ],
            'paid' => [
                'await'     => 'Неплатена',
            ],
        ],
    ],

];