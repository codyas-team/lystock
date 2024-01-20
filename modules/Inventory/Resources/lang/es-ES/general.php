<?php

return [
    'name'                      => 'Inventario',
    'description'               => 'Gestión de contabilidad y inventario bajo un mismo techo',

    'items'                     => 'Artículo|Artículos',
    'inventories'               => 'Inventory|Inventories',
    'variants'                  => 'Variante|Variantes',
    'manufacturers'             => 'Manufacturer|Manufacturers',
    'transfer_orders'           => 'Orden de transferencia|Órdenes de transferencia',
    'adjustments'               => 'Ajuste|Ajustes',
    'warehouses'                => 'Almacén|Almacenes',
    'histories'                 => 'Historia|Historias',
    'item_groups'               => 'Grupo|Grupos',
    'barcode'                   => 'Código de barras',
    'print_barcode'             => 'Print Barcode',
    'generate_barcode'          => 'Generate Barcode',
    'sku'                       => 'SKU',
    'quantity'                  => 'Quantity',
    'add_warehouse'             => 'Add Warehouse',
    'edit_warehouse'            => 'Edit Warehouse',
    'default'                   => 'Por defecto',
    'stock'                     => 'Existencia',
    'information'               => 'Information',
    'default_warehouse'         => 'Almacén predeterminado',
    'track_inventory'           => 'Seguimiento del inventario',
    'negative_stock'            => 'Negative Stock',
    'expented_income'           => 'Expented Income',
    'sale_item_quantity'        => 'Sale Item Quantity',
    'sale_item_amount'          => 'Sale Item Amount',
    'purchase_item_quantity'    => 'Purchase Item Quantity',
    'purchase_item_amount'      => 'Purchase Item Amount',
    'income'                    => 'Income',
    'invalid_stock'             => 'Stock in warehouse :stock',
    'low_stock'                 => ':name Low Stock (:count - :warehouse)',
    'unit'                      => 'Unidad',
    'returnable'                => 'Artículo retornable',
    'overview'                  => 'Overview',
    'action'                    => 'Action',
    'record'                    => 'Record',
    'required_fields'           => 'The :attribute field are required.',
    'sort_sale_price'           => 'Precio Venta',
    'sort_purchase_price'       => 'Precio Compra',
    'inventory_items'           => 'Inventory Items',
    'destination_warehouse'     => 'Destination Warehouse',
    'source_warehouse'          => 'Source Warehouse',

    'menu' => [
        'inventory'             => 'Inventory',
        'item_groups'           => 'Groups',
        'variants'               => 'Variants',
        'manufacturers'         => 'Manufacturer',
        'warehouses'            => 'Almacenes',
        'histories'             => 'Historias',
        'reports'               => 'Reportes',
    ],

    'notifications' => [
        'reorder_level'         => ':count Item Reorder Level',
    ],

    'document' => [
        'detail'                => 'An :class warehouse is used for proper bookkeeping of your :type and to keep your reports accurate.',
    ],

    'empty' => [
        'items'                 => 'Los artículos pueden ser productos o servicios. Puede utilizar elementos al crear facturas y facturas.',
        'adjustments'           => "Debido a algunas razones, como artículos dañados y artículos robados, etc.,
                                    Las acciones reales de su empresa y las acciones registradas pueden no ser iguales.
                                    El ajuste de inventario le permite registrar los artículos faltantes.",
        'warehouses'            => 'You can add manage multiple warehouses.
                                    You can also track stock control of all your items by warehouses.
                                    Warehouse Overview and History give you insight into warehouses operations.',
        'transfer-orders'       => 'Orden de transferencia le permite realizar un seguimiento del movimiento de artículos de un almacén a otro.',
        'variants'              => 'Puede agregar y administrar variantes que describan mejor sus artículos en la sección Variantes.
                                    Puedes crear un grupo de artículos que tengan las mismas variantes como color, talla, etc.',
        'item-groups'           => 'En la sección Grupos, puede administrar los artículos que pueden considerarse bajo el mismo grupo. Puede seleccionar variantes, agregar nuevos artículos y administrar sus detalles desde grupos.',
        'histories'             => "Aún no has registrado ninguna acción de inventario. Todas las actividades de inventario de su empresa se registrarán aquí. Comienzas a usar la aplicación de inventario creando un artículo. ",
        'title' => [
            'adjustments'       => 'Ajuste',
            'warehouses'        => 'Almacenes',
            'transfer-orders'   => 'Transfer Orders',
            'variants'          => 'Variantes',
            'item-groups'       => 'Item Groups',
        ]
    ],

    'reports' => [
        'name' => [
            'stock_status'      => 'Stock Status',
            'sale_summary'      => 'Sale Summary',
            'purchase_summary'  => 'Purchase Summary',
            'item_summary'      => 'Item Summary',
            'profit_loss'       => 'Profit & Loss (Inventory)',
            'income_summary'    => 'Income Summary (Inventory)',
            'expense_summary'   => 'Expense Summary (Inventory)',
            'income_expense'    => 'Income vs Expense (Inventory)',
        ],

        'description' => [
            'stock_status'      => 'Stock tracking of items',
            'sale_summary'      => 'Stock tracking of sales items',
            'purchase_summary'  => 'Stock tracking of purchases items',
            'item_summary'      => 'The list of the Item Information',
            'profit_loss'       => 'Quarterly profit & loss by inventory.',
            'income_summary'    => 'Monthly income summary by inventory.',
            'expense_summary'   => 'Monthly expense summary by inventory.',
            'income_expense'    => 'Monthly income vs expense by inventory.',
        ],
    ],
];
