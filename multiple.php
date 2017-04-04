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
        background-color: #1e90ff;
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
<form action="checkbox.php" method="post" enctype="multipart/form-data">
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select>
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label for="one"><input type="checkbox" name="tech[]" value="1" id="one"/>First checkbox</label>
            <label for="two"><input type="checkbox" name="tech[]" value="1" id="two"/>Second checkbox </label>
            <label for="three"><input type="checkbox" name="tech[]" value="1" id="three"/>Third checkbox</label>
        </div>
    </div>
	<input type="submit">
</form>

<html>

<title>Untitled Document</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<SCRIPT language="javascript">

    $(function () {

        // add multiple select / deselect functionality

        $("#selectall").click(function () {

            $('.name').attr('checked', this.checked);

        });

 

        // if all checkbox are selected, then check the select all checkbox

        // and viceversa

        $(".name").click(function () {

 

            if ($(".name").length == $(".name:checked").length) {

                $("#selectall").attr("checked", "checked");

            } else {

                $("#selectall").removeAttr("checked");

            }

 

        });

    });

</SCRIPT>

</head>

 

<body bgcolor="#F5F9C1">

<table border="1">

<tr>

<th colspan="3"><input type="checkbox" id="selectall"/>  

  Name Rating</th>

</tr>

<tr>

<td width="20" align="center"><input type="checkbox" class="name" name="name" value="1"/></td>

<td width="92">Vinod kumar</td>

<td width="42">5</td>

</tr>

<tr>

<td align="center"><input type="checkbox" class="name" name="name" value="2"/></td>

<td>Sharad Gupta</td>

<td>3</td>

</tr>

<tr>

<td align="center"><input type="checkbox" class="name" name="name" value="3"/></td>

<td>Nitin Bhardwaj</td>

<td>2</td>

</tr>

<tr>

<td align="center"><input type="checkbox" class="name" name="name" value="4"/></td>

<td>Aman</td>

<td>1</td>

</tr>

<tr>

<td align="center"><input type="checkbox" class="name" name="name" value="5"/></td>

<td>Rahul Sharma</td>

<td>4</td>

</tr>

</table>

</body>

</html>