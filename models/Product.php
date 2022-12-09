<?php
class Product{
    static public function getProduct($data)
    {
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM produit WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;
        }catch(PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('update  produit SET
            Nom = :name,Prix = :price, Image = :image where id = :id');
        $stmt->bindParam(':id',$data['id']);    
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':image',$data['image']);

        if($stmt->execute())
        {
            return 'ok';
        }else
        {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM produit');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    static public function add($data)
    {
        $stmt = DB::connect()->prepare('insert into produit(
            Nom,Prix,Image
        )
        VALUES (
            :nom,:price,:image
        )
        ');
        $stmt->bindParam(':nom',$data['name']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':image',$data['image']);
        if($stmt->execute())
        {
            return 'ok';
        }else
        {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try{
            $query = 'delete FROM produit WHERE id=:id';
            $stmt=DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
        }catch(PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }

}
?>