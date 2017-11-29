<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
/*
UPDATE `tblMembers` SET`title`= :title,`name`= :name
`memberType`= :type,`party`= :party,`email`= :email,`firstAppointedDate`= :date
WHERE `tblMembers`.`id` = `tblConstituencies-CommonsMembers`.`id` AND `tblMembers`.`id`= :id,
*/


if (isset($_POST['update-membersubmit'])){
    
    $id = $_POST['update-memberid'];
    $title = $_POST['update-membertitle'];
    $name = $_POST['update-membername'];
    $type = $_POST['update-membertype'];
    $party = $_POST['update-memberparty'];
    $const = $_POST['update-memberconstituency'];
    $date = $_POST['update-memberdate'];
    $email = $_POST['update-memberemail'];
    
    #var_dump($_POST);
    
    $memberUpdater = $dap406DB->prepare("UPDATE `tblMembers` `mm` 
    INNER JOIN `tblConstituencies-CommonsMembers` as `ccm` ON `mm`.`id` = `ccm`.`memberId`
    SET 
        `title`= :title,
        `name`= :name,
        `memberType`= :type,
        `party`= :party,
        `constituency` = :const,
        `email`= :email,
        `firstAppointedDate`= :date
        
    WHERE `mm`.`id` = :id");
                
    $memberUpdater->bindValue(':id', $id, PDO::PARAM_STR);
    $memberUpdater->bindValue(':title', $title, PDO::PARAM_STR);
    $memberUpdater->bindValue(':name', $name, PDO::PARAM_STR);
    $memberUpdater->bindValue(':type', $type, PDO::PARAM_STR);
    $memberUpdater->bindValue(':party', $party, PDO::PARAM_STR);
    $memberUpdater->bindValue(':const', $const, PDO::PARAM_STR);
    $memberUpdater->bindValue(':date', $date, PDO::PARAM_STR);
    $memberUpdater->bindValue(':email', $email, PDO::PARAM_STR);
    
    try{
        if($memberUpdater->execute()){
            $_SESSION['update-member'] = true;
            $_SESSION['update-membermsg'] = "The member details have been updated successfully.";
        }
    } catch (PDOException $e){
        echo "Error: $e";
        
        $_SESSION['update-member'] = false;
        $_SESSION['update-membermsg'] = "The member details are incorrect, please try again.";
    }
    
    
}

header("Location: " . $_LNK['siteItemMembers'] . "?member=$id");