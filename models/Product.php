<?php

namespace app\models;

use app\core\Database;
use app\core\DBModel;


class Product extends DBModel
{
    public string $id;
    public string $category_id;
    public string $name;
    public float $price;
    public string $description;
    public string $image_url;
    public int $year;
    public int $duration;
    public string $director;
    public string $stars;
    public float $rating;



    public function __construct(
        $id = '',
        $category_id = '',
        $name = '',
        $price = 0,
        $description = '',
        $image_url = '',
        $year = 0,
        $duration = 0,
        $director = '',
        $stars = '',
        $rating = 0,
    ) {
        $this->id = $id;
        $this->category_id = $category_id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->year = $year;
        $this->duration = $duration;
        $this->director = $director;
        $this->stars = $stars;
        $this->rating = $rating;

    }

    public function setId($id) { $this->id = $id; }
    public function getId() { return $this->id; }

    public function setCategoryId($category_id) { $this->category_id = $category_id; }
    public function getCategoryId() { return $this->category_id; }

    
    public function setName($name) { $this->name = $name; }
    public function getName() { return $this->name; }
    
    public function setPrice($price) { $this->price = $price; }
    public function getPrice() { return $this->price; }
    
    public function setDescription($description) { $this->description = $description; }
    public function getDescription() { return $this->description; }

    public function setImageUrl($image_url) { $this->image_url = $image_url; }
    public function getImageUrl() { return $this->image_url; } 

    public function setYear($year) { $this->year = $year; }
    public function getYear() { return $this->year; } 

    public function setDuration($duration) { $this->duration = $duration; }
    public function getDuration() { return $this->duration; } 

    public function setDirector($director) { $this->director = $director; }
    public function getDirector() { return $this->director; } 

    public function setStars($stars) { $this->stars = $stars; }
    public function getStars() { return $this->stars; } 

    public function setRating($rating) { $this->rating = $rating; }
    public function getRating() { return $this->rating; } 
    public static function getNameById($id) 
    {
        $productModel = Product::getProductDetail($id);
        return $productModel->getName();
    }

    public function getCategory()
    {
        $categoryModel = Category::get($this->category_id);
        return $categoryModel->getDisplayName();
    }
    
    public function getDisplayInfo(): string
    {
        return $this->id . ' ' . $this->category_id . ' ' . $this->name . ' ' . $this->price . ' ' . $this->description
         . ' ' . $this->year . ' ' . $this->duration . ' ' . $this->director . ' ' . $this->starts . ' ' . $this->rating;
    }

    public static function tableName(): string
    {
        return 'products';
    }

    public function attributes(): array
    {
        return ['id', 'category_id', 'name', 'price', 'description', 'image_url', 'year', 'duration', 'director', 'stars', 'rating'];
    }
   
    public function labels(): array
    {
        return [
            'id' => 'Product ID',
            'name' => 'Product name',
            'price' => 'Price',
            'description' => 'Description',
            'image_url' => 'Product image',
            'category_id' => 'Category ID',
            'year' => 'Year',
            'duration' => 'Duration',
            'director' => 'Director',
            'stars' => 'Stars',
            'rating' => 'Rating',
        ];
    }
    
    public function getLabel($attribute)
    {
        return $this->labels()[$attribute];
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' <= 50]],
            'description' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' >= 20], [self::RULE_MAX, 'max' <= 100]],
            'price' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        $this->id = uniqid();
        return parent::save();
    }

    public function update(Product $product)
    {
        $sql = "UPDATE products SET category_id='" . $product->category_id . "',
                                    name='" . $product->name . "', 
                                    price='" . $product->price . "', 
                                    description='" . $product->description . "' ,
                                    year='" . $product->year . "' ,
                                    duration='" . $product->duration . "' ,
                                    director='" . $product->director . "' ,
                                    stars='" . $product->stars . "' ,
                                    rating='" . $product->rating . "' 
                                    WHERE id='" . $product->id . "'";
        $statement = self::prepare($sql);
        $statement->execute();
        return true;  
    }

    public function delete()
    {
        $tablename = $this->tableName();
        $sql = "DELETE FROM $tablename WHERE id=?";
        $stmt= self::prepare($sql);
        $stmt->execute([$this->id]);
        return true;
    }


    public static function getAllProducts()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM products');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['id'], $item['category_id'], $item['name'], $item['price'], $item['description'], $item['image_url'], $item['year'], $item['duration'], $item['director'], $item['stars'], $item['rating']);
        }

        return $list;
    }

    public static function getProductDetail($id)
    {
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM products WHERE id = "' . $id . '"');
        $item = $req->fetchAll()[0];
        $product = new Product($item['id'], $item['category_id'], $item['name'], $item['price'], $item['description'], $item['image_url'], $item['year'], $item['duration'], $item['director'], $item['stars'], $item['rating']);
        return $product;
    }

    public static function getProductsByCategory($category_id)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM products WHERE category_id = "' . $category_id . '"');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['id'], $item['category_id'], $item['name'], $item['price'], $item['description'], $item['image_url'], $item['year'], $item['duration'], $item['director'], $item['stars'], $item['rating']);
        }
        return $list;
    }

    public static function getProductsByKeyword($keyword)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM products WHERE name LIKE '%" . $keyword . "%';");

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['id'], $item['category_id'], $item['name'], $item['price'], $item['description'], $item['image_url'], $item['year'], $item['duration'], $item['director'], $item['stars'], $item['rating']);
        }
        return $list;
    }
}