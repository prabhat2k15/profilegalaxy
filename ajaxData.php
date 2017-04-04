<style>
    .multiselect {
        width: 200px;
    }
    .selectBox {
        position: relative;
    }
    .selectBox select {
        width: 100%;
        font-weight: bold;
    }
    .overSelect {
        position: absolute;
        left: 0; right: 0; top: 0; bottom: 0;
    }
    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes label {
        display: block;
    }
    #checkboxes label:hover {
        background-color: yellow;
    }
</style>
<script>
    var expanded = false;
    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
	
        echo '<option value="">Select Sub-Category</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
         }
    }else{
        echo '<option value="">Sub-Category not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
       /* echo '</select>';
   echo '<div id="checkboxes">';
            echo '<label for="one"><input type="checkbox" name="tech[]" value="1" id="one"/>First checkbox</label>';
            echo '<label for="two"><input type="checkbox" name="tech[]" value="1" id="two"/>Second checkbox </label>';
            echo '<label for="three"><input type="checkbox" name="tech[]" value="1" id="three"/>Third checkbox</label>';
        echo '</div> </div> </div>'; */
		}
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>