<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");


if (isset($_POST['update-billsubmit'])){
    
    $id = $_POST['update-billid'];
    $name = $_POST['update-billname'];
    $description = $_POST['update-billdescription'];
    $type = $_POST['update-billtype'];
    $sponsor = $_POST['update-billsponsor'];
    $origin = $_POST['update-billorigin'];
    $date = $_POST['update-billproposeddate'];
    
    #var_dump($_POST);
    
    
    $billUpdater = $dap406DB->prepare("UPDATE `tblBills-List` SET `billName`= :billName,
                                        `description`= :description,
                                        `billType`= :type,
                                        `billSponsor`= :sponsor,
                                        `origin`= :origin,
                                        `billProposedDate`= :date
                                        WHERE `id` = :id");
                                        
    $billUpdater->bindValue(':id', $id, PDO::PARAM_STR);
    $billUpdater->bindValue(':billName', $name, PDO::PARAM_STR);
    $billUpdater->bindValue(':description', $description, PDO::PARAM_STR);
    $billUpdater->bindValue(':type', $type, PDO::PARAM_STR);
    $billUpdater->bindValue(':sponsor', $sponsor, PDO::PARAM_STR);
    $billUpdater->bindValue(':origin', $origin, PDO::PARAM_STR);
    $billUpdater->bindValue(':date', $date, PDO::PARAM_STR);
    
    
    try{
        if($billUpdater->execute()){
            $_SESSION['update-bill'] = true;
            $_SESSION['update-billmsg'] = "The bill details have been updated successfully.";
        }
    } catch (PDOException $e){
        echo "Error: $e";
        
        $_SESSION['update-bill'] = false;
        $_SESSION['update-billmsg'] = "The bill details are incorrect, please try again.";
    }
    
    
}

header("Location: " . $_LNK['siteItemBills'] . "?bill=$id");
