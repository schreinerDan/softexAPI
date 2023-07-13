<?php 
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class TaxRepository extends Repository {
    public function __construct(PgsqlConnectionPool $connectionPool) {
        parent::__construct($connectionPool);
        $this->table = "taxes";
    }

    public function getAllTaxes() {
        return $this->getAll();
    }

    public function getTaxById($id) {
        return $this->getById($id);
    }

    public function createTax(Tax $tax) {
        $data = [
            'type_id' => $tax->type_id,
            'origin' => $tax->origin,
            'percentage' => $tax->percentage
        ];
        return $this->create($data);
    }

    public function updateTax($id, Tax $tax) {
        $data = [
            'type_id' => $tax->type_id,
            'origin' => $tax->origin,
            'percentage' => $tax->percentage
        ];
        return $this->update($id, $data);
    }

    public function deleteTax($id) {
        return $this->delete($id);
    }
}
