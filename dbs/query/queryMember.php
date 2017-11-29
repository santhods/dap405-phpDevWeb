<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

class QueryMember{
    private static $DBRunner;
    
    public static function setPdoInstance($pdo){
        self::$DBRunner = $pdo;
    }
    
    
    private static function filterQueryOpt($opt){
        $options = [ 'all' => 1, #for getting all members
                     'one' => '`mm`.`id` = :id',
                     'search' => "`name` like concat('%', :query ,'%') 
                                        OR `constituency` like concat('%', :query, '%')
                                        OR `party` like concat('%', :query, '%')
                                        GROUP BY `id` ORDER BY `name` ASC "];
                                        
        $selectedOption = isset($options[$opt]) ? $options[$opt] : $options['all'];
        
        $cmd =  "SELECT * , `constituency` FROM  `tblMembers` AS  `mm` 
                        INNER JOIN  `tblConstituencies-CommonsMembers` AS  `ccm`
                            ON  `mm`.`id` =  `ccm`.`memberId` 
                        WHERE $selectedOption
                        LIMIT :offset, :limit";
        return $cmd;
    }
    
    public static function GetMembersList($ofst, $lim){
        $offset = (isset($ofst) and ($ofst >= 0)) ? $ofst : 0;
        $limit = (isset($lim) and ($lim > 0)) ? $lim : 50;
        
        $command = self::filterQueryOpt('all');
    
        $listGetter = self::$DBRunner->prepare($command);

        $listGetter->bindValue(':offset', $offset, PDO::PARAM_INT);
        $listGetter->bindValue(':limit', $limit, PDO::PARAM_INT);

        
        try {
            $listGetter->execute();
            return $listGetter->fetchAll(PDO::FETCH_OBJ);
            
        } catch (PDOException $e){
            echo "Error: $e";
        }
    }
    
    public static function GetSearchedMembers($query, $lim){
        $offset = 0;
        $limit = (isset($lim) and ($lim > 0)) ? $lim : 30;
        
        $command = self::filterQueryOpt('search');
    
        $listGetter = self::$DBRunner->prepare($command);
        
        $listGetter->bindValue(':query', $query, PDO::PARAM_STR);
        $listGetter->bindValue(':offset', $offset, PDO::PARAM_INT);
        $listGetter->bindValue(':limit', $limit, PDO::PARAM_INT);

        
        try {
            $listGetter->execute();
            return $listGetter->fetchAll(PDO::FETCH_OBJ);
            
        } catch (PDOException $e){
            echo "Error: $e";
        }
    }
    
    
    public static function GetMemberDetail($id){
       
        if (isset($id)){
            $command = self::filterQueryOpt('one');
            $itemGetter = self::$DBRunner->prepare($command);
            
            $itemGetter->bindValue(':id', $id, PDO::PARAM_INT);
            $itemGetter->bindValue(':offset', 0, PDO::PARAM_INT);
            $itemGetter->bindValue(':limit', 1, PDO::PARAM_INT);
        
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
}


QueryMember::setPdoInstance($dap406DB);

/*

$mem = QueryMember::GetSearchedMembers('christ');

echo "Size: " . count($mem);

var_dump($mem);

*/