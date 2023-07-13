<?php 
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class ProductTypeRepository extends Repository {
    public function __construct(PgsqlConnectionPool $connectionPool) {
        parent::__construct($connectionPool);
        $this->table = "product_types";
    }

    public function getAllProductTypes() {
        return $this->getAll();
    }

    public function getProductTypeById($id) {
        return $this->getById($id);
    }

    public function createProductType(ProductType $productType) {
        $data = [
            'name' => $productType->name
        ];
        return $this->create($data);
    }

    public function updateProductType($id, ProductType $productType) {
        $data = [
            'name' => $productType->name
        ];
        return $this->update($id, $data);
    }

    public function deleteProductType($id) {
        return $this->delete($id);
    }
}
