<?php
require "Database.php";

abstract class Model {
    protected static $db;
    public static function init() {
        if (!self::$db) {
            self::$db = new Database();
        }
    }
    abstract protected static function getTableName(): string;
    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();

        $records = self::$db->query($sql)->fetchAll();
        return  $records;
    }
    public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName(). " WHERE id = :id ";
        $params = [':id' => $id];
        $records = self::$db->query($sql,$params)->fetch();
        return  $records;
    }

    public static function create(array $data) {
        self::init();
        $table = static::getTableName();
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $params = array_combine(
            array_map(fn($key) => ":$key", array_keys($data)),
            array_values($data)
        );

        return self::$db->query($sql, $params);
    }
}