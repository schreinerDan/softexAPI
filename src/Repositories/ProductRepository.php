<?php
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class ProductRepository extends Repository {
    public function __construct(PgsqlConnectionPool $connectionPool) {
        parent::__construct($connectionPool);
        $this->table = "products";
    }

    public function getAllProducts() {
        return $this->getAll();
    }

  

    public function createProduct(Product $product) {
        $data = [
            'barcode' => $product->barcode,
            'name' => $product->name,
            'type_id' => $product->type_id,
            'price' => $product->price,
            'stock_quantity' => $product->stock_quantity,
            'brand' => $product->brand,
            'description' => $product->description,
            'image' => $product->image
        ];
        return $this->create($data);
    }

    public function updateProduct($id, Product $product) {
        $data = [
            'barcode' => $product->barcode,
            'name' => $product->name,
            'type_id' => $product->type_id,
            'price' => $product->price,
            'stock_quantity' => $product->stock_quantity,
            'brand' => $product->brand,
            'description' => $product->description,
            'image' => $product->image
        ];
        return $this->update($id, $data);
    }

    public function deleteProduct($id) {
        return $this->delete($id);
    }
}
