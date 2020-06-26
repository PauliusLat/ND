<?php
namespace App\DB;
    require __DIR__.'/data.json';

class User implements DataBase{

    function getData(){
        $dataBase = json_decode( file_get_contents(__DIR__.'/data.json'),1);
        return $data;
    }
    
    function create(array $userData) : void{
        $dataBase = getData();
        $dataBase[] = $userData;
        file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
    }
 
    function update(int $userId, array $userData) : void{
        $dataBase = getData();
        $dataBase[$userId] = $userData;
        file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
    }
 
    function delete(int $userId) : void{
        $dataBase = getData();
        unset($dataBase[$userId]);
        file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
    }
 
    function show(int $userId) : array{
        $dataBase = getData();
        return $dataBase[$userId];
    }
    
    function showAll() : array{
        $dataBase = getData();
        return $dataBase;
    }
    
}
