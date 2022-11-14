<?php

class QueryBuilder

{

    protected $pdo;

    public function __construct($pdo)

    {

        $this->pdo = $pdo;
    }

    public function delete($table, $variable, $id)

    {

        $statement = $this->pdo->prepare("delete from {$table} where {$variable} = '{$id}'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function InfoByID($table, $id)

    {
        $statement = $this->pdo->prepare("select * from {$table} where id = '{$id}'");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters)

    {

        $query = sprintf('insert into %s (%s) VALUES (%s)', $table, implode(', ', array_keys($parameters)), ':' . implode(', :', array_keys($parameters)));
        
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $statement = $this->pdo->prepare($query);

        if (!$statement) {

            echo "\PDO::errorInfo():\n";

            print_r($this->pdo->errorInfo());
        }

        $statement->execute($parameters);

        return $this->pdo->lastInsertId();
    }



    public function dynamicUpdate($table, $parameters, $id)

    {

        $query = sprintf('UPDATE %s SET ', $table);

        foreach ($parameters as $key => $value)

            $query .= "$key = :$key, ";

        $query = rtrim($query, ", ");

        $query .= sprintf(' WHERE id = %s', $id);

        $statement = $this->pdo->prepare($query);

        $statement->execute($parameters);

        return $this->pdo->lastInsertId();
    }

    public function CheckIsAdmin($email)
    {
        $statement = $this->pdo->prepare("SELECT EXISTS(SELECT * FROM user WHERE email = :email) AS isAdmin");
        $statement->bindParam(":email", $email);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row['isAdmin'];
    }

    public function GetImages($table, $foreign_key, $foreign_key_id)
    {
        $query = sprintf('SELECT * FROM %s WHERE %s = %s', $table, $foreign_key, $foreign_key_id);
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function DeleteImages($table, $foreign_key, $foreign_key_id)
    {
        $query = sprintf('DELETE FROM %s WHERE %s = %s', $table, $foreign_key, $foreign_key_id);
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetBlogImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM blog WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    public function GetProjectImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM project WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    public function dynamicUpdateByColumn($table, $parameters, $column, $id)

    {
        $query = sprintf('UPDATE %s SET ', $table);
        foreach ($parameters as $key => $value)
            $query .= "$key = :$key, ";
        $query = rtrim($query, ", ");
        $query .= sprintf(' WHERE %s = %s', $column, $id);
        $statement = $this->pdo->prepare($query);
        $statement->execute($parameters);
        return $this->pdo->lastInsertId();
    }

    public function GetTotalCount($table)
    {
        $query = sprintf('SELECT COUNT(id) FROM %s', $table);
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchColumn();
    }

    public function GetBlogImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM blog WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    public function GetProjectImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM project WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    
    public function GetProductImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM product WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetProductImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM product WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetProducts()
    {
        $statement = $this->pdo->prepare("SELECT * FROM product");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetFranchiseeImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM franchisee WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetFranchiseeImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM franchisee WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetFranchisees()
    {
        $statement = $this->pdo->prepare("SELECT * FROM franchisee");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function GetTestimonials()
    {
        $statement = $this->pdo->prepare("SELECT * FROM testimonial");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetTestimonialImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM testimonial WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetTestimonialImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM testimonial WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }


    public function GetGallerys()
    {
        $statement = $this->pdo->prepare("SELECT * FROM gallery order by Rand();");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function GetGalleryImageById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM gallery WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }
    public function GetGalleryImagesById($id)
    {
        $statement = $this->pdo->prepare("SELECT img_path FROM gallery WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    public function GetCommercialProducts()
    {
        $statement = $this->pdo->prepare("SELECT * FROM product where type='commercial'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetDomesticProducts()
    {
        $statement = $this->pdo->prepare("SELECT * FROM product where type='domestic'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function GetJobDetails()
    {
        $statement = $this->pdo->prepare("SELECT * FROM careers");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function GetApplicationImages($id)
    {
        $statement = $this->pdo->prepare("SELECT `id` FROM `applications` WHERE `img_path` = :img_path");
        $statement->bindParam(':img_path', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_COLUMN);
    }

    
}
