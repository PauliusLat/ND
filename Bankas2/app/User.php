<?php
namespace App;
    require __DIR__.'/DataBase.php';

class User implements DB\DataBase{

    function getData(){
        $dataBase = json_decode( file_get_contents(__DIR__.'/data.json'),1);
        return $dataBase;
    }

    function isIdUniq($id){
        $dataBase = $this->getData();
        foreach($dataBase as $index => $val){
            if($id == $val['id']){
                return false;
            }
        }
        return true;
    }
    
    function create(array $userData) : void{
        $id = $userData['id'];
        $name = $userData['name'];
        $surname = $userData['surname'];
        $dataBase = $this->getData();

        global $isIdUniq;
        $isIdUniq = $this->isIdUniq($id);

        
        function checkID($id1){
            global $isIdUniq;

            $id = str_split($id1);
            $idNumber = array_map(
                function($value) { return (int)$value; },
                $id
            );
            if($isIdUniq){
                
                if(count($idNumber)===11 && $idNumber[0]<7 && $idNumber[0]>0 && $idNumber[3]<2 && $idNumber[4]<3 && $idNumber[5]<4){
                    $sum=0;
                    $last=0;
                    for ($i=0, $j=1; $i <count($idNumber)-2; $i++, $j++) {
                        $sum+= (($idNumber[$i])*$j);
                    }
                    $sum+=$idNumber[9];
                    $last = $sum%11;
                    // echo $last;
                    if($last ==10){
                        $sum=0;
                        for ($i=0, $j=3; $i <count($idNumber)-3; $i++, $j++) {
                            $sum += (($idNumber[$i])*$j);
                        }
                        $sum+=$idNumber[7];
                        $sum+=$idNumber[8];
                        $sum+=$idNumber[9];
                        $last = $sum%11;
                        if($last ==10) $last = 0;
                    }
                    if($idNumber[10]==$last){
                        return true;
                    }else{
                        echo '<span style="color:red">Sąskaita nesukurta!</span> Neteisingas a/k paskutinis simbolis.<br><br>';
                        return false;
                    }
                }else echo'<span style="color:red">Sąskaita nesukurta!</span> Neteisingas a/k.<br><br>';
            }else echo'<span style="color:red">Sąskaita nesukurta!</span> Toks a/k jau registruotas.<br><br>';
            return false;
        }
        
        function checkName($name){
            if(strlen($name) >3) return true;
            else echo'<span style="color:red">Sąskaita nesukurta!</span> Patikrinkite "Vardas/Pavardė".<br><br>';
            return false;
        }
        
        if( checkID($id) && checkName($name) && checkName($surname) ){  
            $dataBase[] = $userData;
            file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
            echo '<span style=color:green">Sąskaita sukurta!</span> Balansas: 0,00 Eu<br><br>';
        }
    }
 
    function update(int $userId, array $userData) : void{
        $dataBase = $this->getData();
        $dataBase[$userId] = $userData;
        file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
    }
 
    function delete(int $userId) : void{
        $dataBase = $this->getData();
        if($dataBase[$this->findById($userId)]['balance'] < 0.001){
            unset($dataBase[$this->findById($userId)]);
            file_put_contents(__DIR__.'/data.json', json_encode($dataBase));
        }else echo '<span style="color:red">Negalima ištrinti sąskaitos!</span> Sąskaitoje yra lėšų! <br><br>';

    }
 
    function show(int $userId) : array{
        $dataBase = $this->getData();
        return $dataBase[$userId];
    }
    
    function showAll() : array{
        $dataBase = $this->getData();
        return $this->sortByName($dataBase);
    }
    
    function sortByName($dataBase){

        $sortedData = [];
        foreach($dataBase as $val){
            if (isset($val)) {
                $sortedData[] = $val;
            }
        }
        for ($i=0; $i <(count($sortedData)-1); $i++) {
            for ($j=$i+1; $j < count($sortedData); $j++) {
                if(strcmp($sortedData[$i]['name'], $sortedData[$j]['name'])>0){
                    $temp = $sortedData[$i];
                    $sortedData[$i] = $sortedData[$j];
                    $sortedData[$j] = $temp;
                }
                
            }
        }
        return $sortedData;
    }
  
    function search($keyWord){
        $dataBase = $this->getData();
        $filteredData = [];
        foreach($dataBase as $val){
            foreach($val as $value){
                if($value === $keyWord) $filteredData[] = $val;
            }
        }
        return $this->sortByName($filteredData);
    }
    function findById($userId){
        $dataBase = $this->getData();
        foreach($dataBase as $index =>$value){
            if($value['id'] == $userId) return $index;
        }
    }
}
