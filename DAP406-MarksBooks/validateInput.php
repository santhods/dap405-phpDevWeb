<?php

$errors = array();

$fields['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
$fields['firstname'] = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
$fields['lastname'] = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
$fields['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';
$fields['www'] = isset($_POST['www']) ? trim($_POST['www']) : '';
$fields['twitter'] = isset($_POST['twitter']) ? $_POST['twitter'] : '';

// Update data State
if (isset($_POST['submit'])) {
    
    // Validate data
    $errors = validateForm($fields);
    
    if (count($errors) == 0) {
        if ($fields['id'] == 0) {
            // Create data state
        
        } else {
            // Update data state
        }
    }    
}

// View record state
if (isset($_GET['id'])) {
    list($fields, $errors) = getAuthor($_GET['id']);
}

?>
<html>
<head>
    <style>
        .error {
            border: 1px #de2b2b solid;
            background-color: #eab2b2;
        }
        .alert {
            padding: 5px;
            color: #450606;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Manage authors</h1>
    <?php
    if (count($errors) > 0) {
        echo '<div class="alert error">Errors have been found. Please correct and resubmit.</div>';
    }
    ?>
    <form name="author" method="post">
        <div>
            <label for="id">ID:</label>
            <?php 
            $class = isset($errors['id']) ? 'error' : '';
            ?>
            <input type="text" name="id" 
                value="<?php echo $fields['id'] ?>" 
                   class="<?php echo $class; ?>"  />
             <?php 
            echo isset($errors['id']) ? '<span>' . $errors['id'] . '</span>' : '';
            ?>
            
        </div>
        <div>
            <label for="firstname">Firstname: *</label>
            <?php 
            $class = isset($errors['firstname']) ? 'error' : '';
            ?>
            <input type="text" name="firstname" value="<?php echo $fields['firstname'] ?>" 
                   class="<?php echo $class; ?>"  />
            <?php 
            echo isset($errors['firstname']) ? '<span>' . $errors['firstname'] . '</span>' : '';
            ?>
        </div>
        <div>
            <label for="lastname">Lastname: *</label>
            <?php 
            $class = isset($errors['lastname']) ? 'error' : '';
            ?>
            <input type="text" name="lastname" value="<?php echo $fields['lastname'] ?>" 
                   class="<?php echo $class; ?>"  />
             <?php 
            echo isset($errors['lastname']) ? '<span>' . $errors['lastname'] . '</span>' : '';
            ?>
        </div>
        <div>
            <label for="email">Email:</label>
            <?php 
            $class = isset($errors['email']) ? 'error' : '';
            ?>
            <input type="email" name="email" value="<?php echo $fields['email'] ?>" 
                   class="<?php echo $class; ?>"  />
             <?php 
            echo isset($errors['email']) ? '<span>' . $errors['email'] . '</span>' : '';
            ?>
        </div>
        <div>
            <label for="www">Website:</label>
            <?php 
            $class = isset($errors['www']) ? 'error' : '';
            ?>
            <input type="url" name="www" value="<?php echo $fields['www'] ?>" 
                   class="<?php echo $class; ?>"  />
             <?php 
            echo isset($errors['www']) ? '<span>' . $errors['www'] . '</span>' : '';
            ?>
        </div>
        <div>
            <label for="twitter">Twitter:</label>
            <?php 
            $class = isset($errors['twitter']) ? 'error' : '';
            ?>
            <input type="text" name="twitter" value="<?php echo $fields['twitter'] ?>" 
                   class="<?php echo $class; ?>"  />
             <?php 
            echo isset($errors['twitter']) ? '<span>' . $errors['twitter'] . '</span>' : '';
            ?>
        </div>
        <input type="submit" value="Add author" name="submit" />
    </form>
</body>
</html>

<?php 

function validateForm($fields) {
    $errors = [];
    
    if (!is_numeric($fields['id'])) {
        $errors['id'] = 'Invalid ID';
    }
    
    if (empty($fields['firstname']) || strlen($fields['firstname']) < 3) {
        $errors['firstname'] = 'Need a firstname longer than 2 characters.';
    }
    
    if (empty($fields['lastname']) || strlen($fields['lastname']) < 3) {
        $errors['lastname'] = 'Need a lastname longer than 2 characters.';
    }
    
    if (!empty($fields['email']) && filter_var($fields['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errors['email'] = 'You have an invalid email address.';
    }
    
    if (!empty($fields['www']) && filter_var($fields['www'], FILTER_VALIDATE_URL) === false) {
        $errors['www'] = 'You have an invalid website URL.';
    }
    
    if (!empty($fields['twitter']) && preg_match('/^@[a-z0-9\-_]+$/i', $fields['twitter']) == 0) {
        $errors['twitter'] = 'You don\'t seem to have a valid Twitter handle. It must begin with @ and only contain letters, numbers and - or _';
    }
    
    return $errors;
    
}

function insertAuthor($fields) {
    
    // get insertedID
    return array(0, false);
}

function getAuthor($id) {
    
    return array($result, $errors);
}

function updateAuthor($fields) {
    
    return $errors;
}