<?php
require(__DIR__ . '/interface/Database.php');

class Size implements Action, JsonSerializable
{
    protected $id;
    protected $size;
    protected $price;

    public function __construct()
    {
        $this->id = -1;
        $this->size = '';
        $this->price = 0;
    }

    public function save()
    {
        $sql = "INSERT INTO `Size` SET `size`=:size, `price`=:price";
        self::setDb();

    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public static function load($id = null)
    {
        // TODO: Implement load() method.
    }

    public static function loadAll()
    {
        // TODO: Implement loadAll() method.
    }

    public static function setDb(Database $db)
    {

    }

    public function jsonSerialize()
    {
        return [
            'id'    => $this->id,
            'size'  => $this->size,
            'price' => $this->price
        ];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }


}