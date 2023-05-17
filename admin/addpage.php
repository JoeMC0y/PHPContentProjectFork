<?php
include_once('../header.php');
$htmlContent = null;
?>

<br />
<table>
    <tr>
        <td>
            <button onclick="setelem('h1')" name="h1">H1</button>
        </td>
    
        <td>
            <button onclick="setelem('h2')" name="h2">H2</button>
        </td>
   
        <td>
            <button onclick="setelem('h3')" name="h3">H3</button>
        </td>
    
        <td>
            <button onclick="setelem('p')" name="p">Paragraph</button>
        </td>
    </tr>
    <tr>
        <td colspan="1">
            <input type="text" contenteditable="false" name="selection" id="sel" />
        </td>
        <td colspan="3">
            <input type="text" name="content" id="content"/>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <button name="add" onclick="addElement()">Add Element</button>
        </td>
    </tr>
</table>
<label for="headers">Choose header:</label>
<select name="header" id="header">
  <option value="h1">h1</option>
  <option value="h2">h2</option>
  <option value="h3">h3</option>
  <option value="h4">h4</option>
</select>
<button type="submit">submit</button>
<p id="error"></p>

<div id="preview">

</div>


<script>
    function setelem(tag) {
        document.getElementById("sel").value = tag;
    }

    function addElement() {
        let selection = document.getElementById("sel").value;
        let content = document.getElementById("content").value;
        if (selection == null || selection == '' || content == null || content == '') {
            document.getElementById('error').innerHTML = "Could not create new element, fill in all fields.";
        }

        let element = "<" + selection + ">" + content + "</" + selection + ">";
        document.getElementById('preview').innerHTML += element;
    }

</script>
<?php
include_once('../footer.php');
?>