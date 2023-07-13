<?php
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class SaleRepository extends Repository {
    public function __construct(PgsqlConnectionPool $connectionPool) {
        parent::__construct($connectionPool);
        $this->table = "sales";
    }

    public function create(Sale $sale) {
        $data = [
            'product_id' => $sale->product_id,
            'quantity' => $sale->quantity,
            'price' => $sale->price,
            'total_value' => $sale->total_value,
            'total_tax' => $sale->total_tax,
            'sale_date' => $sale->sale_date
        ];

        return parent::create($data);
    }
}
