<?php
include_once('header.php');
?>

<link id="style-link" rel="stylesheet" type="text/css" href="../default.css">

<body>
    <button onclick="changeStyle('darkmode.css')">Dark Mode</button>
    <button onclick="changeStyle('flashbang.css')">FlashBang</button>


    <script>
    function changeStyle(sty) {
        var styLink = document.getElementById('style-link');
        styLink.href = '../' + sty;
        localStorage.setItem('selected', sty);
    }
    var selected = localStorage.getItem('selected');
    if (selected) {
        changeStyle(selected)
    }
    </script>
</body>
<br />
<?php
include_once('footer.php');
?>