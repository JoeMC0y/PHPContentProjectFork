<?php
include_once('header.php');
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
            <button name="add">Add Element</button>
        </td>
    </tr>
</table>
<p id="error"></p>

<?php
include_once('preview.php');
?>

<script>
    function setelem(tag) {
        document.getElementById("sel").value = tag;
    }

    function addElement() {
        let selection = document.getElementById("sel");
        let content = document.getElementById("content");
        if (selection == null || selection == '' || content == null || content == '') {
            document.getElementById('error').innerHTML = "Could not create new element, fill in all fields.";
        }

        let element = "<" + selection + ">" + content + "</" + selection + ">";
        let postObj = { htmlcontent: element }
        let jsonPost = JSON.stringify(postObj);
        console.log(jsonPost);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "admin/preview.php", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/json');
        xmlhttp.send(jsonPost);
    }

</script>
<?php
include_once('footer.php');
?>