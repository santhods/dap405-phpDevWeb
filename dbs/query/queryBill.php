<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

class QueryBill{
    private static $DBRunner;
    
    public static function setPdoInstance($pdo){
        self::$DBRunner = $pdo;
    }
    
    public static function GetBillsList($ofst, $lim){
        $offset = (isset($ofst) and ($ofst >= 0)) ? $ofst : 0;
        $limit = (isset($lim) and ($lim > 0)) ? $lim : 30;
    
        $listGetter = self::$DBRunner->prepare("SELECT * FROM `tblBills-List` WHERE 1 LIMIT :offset, :limit");
        $listGetter->bindValue(':offset', $offset, PDO::PARAM_INT);
        $listGetter->bindValue(':limit', $limit, PDO::PARAM_INT);
        
        try {
            $listGetter->execute();
            return $listGetter->fetchAll(PDO::FETCH_OBJ);
            
        } catch (PDOException $e){
            echo "Error: $e";
        }
    }
    
    
    public static function GetBillDetail($id){
        if (isset($id)){
            $itemGetter = self::$DBRunner->prepare("SELECT * FROM `tblBills-Stages` AS `bs`
            INNER JOIN  `tblBills-List` AS  `bl` ON  `bs`.`billName` =  `bl`.`billName` 
            WHERE `bs`.`billName` = (SELECT  `billName` FROM  `tblBills-List` WHERE  `id` = :id) 
            ORDER BY  `bs`.`id` DESC 
            LIMIT 0 , 1");
            
            $itemGetter->bindValue(':id', $id, PDO::PARAM_INT);
        
            try {
                $itemGetter->execute();
                $itemObj = $itemGetter->fetchAll(PDO::FETCH_OBJ);
                
                return $itemObj;
            
            } catch (PDOException $e){
                echo "Error: $e";
                return null;
            }
            
        } else {
            return null;
        }
    }
    
    
    public static function GetSearchedBills($query, $lim){
        $offset = 0;
        $limit = (isset($lim) and ($lim > 0)) ? $lim : 30;
        
        $listGetter = self::$DBRunner->prepare("SELECT * FROM `tblBills-List` 
                                                WHERE `billName` like concat('%', :query, '%') 
                                                OR `description` like concat('%', :query, '%')
                                                OR `billSponsor` like concat('%', :query, '%')
                                                GROUP BY `id` LIMIT :offset, :limit");
                                                
        $listGetter->bindValue(':query', $query, PDO::PARAM_STR);
        $listGetter->bindValue(':offset', $offset, PDO::PARAM_INT);
        $listGetter->bindValue(':limit', $limit, PDO::PARAM_INT);
        
        try {
            $listGetter->execute();
            return $listGetter->fetchAll(PDO::FETCH_OBJ);
            
        } catch (PDOException $e){
            echo "Error: $e";
            return null;
        }
    }
    
    
}

QueryBill::setPdoInstance($dap406DB);

/* For testing only

$billList = QueryBill::GetBillsList(0, 30);
var_dump($billList);
foreach ($billList as $item){
    echo "Info: $item->billProposedDate"; 
}
*/

/*

$billItem1 = QueryBill::GetBillDetail(1);
$bill2 = QueryBill::GetBillDetail(2);

echo count($billItem1) . "<br>";
echo count($bill2);

var_dump($billItem);

foreach ($billItem as $item){
    echo "Info: $item->billSponsor"; 
}

$finduc = QueryBill::GetSeachedBills("national", 0);

var_dump($finduc);

*/