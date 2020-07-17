<?php include 'inc/header.php'; ?>
<style>
.body{
    background: #d4c2c2;
    margin-left: 54px;
    padding: 6px 30px;
    width: 190px;
}
.body ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.body ul li{
    cursor: pointer;
    border-bottom: 1px solid yellowgreen;
}
</style>

<h2>Auto Refresh Div content</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Content</td>
                <td></td>
                <td>
                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="auto" id="auto" value="Post">
                    
                </td>
            </tr>
        </table>
        <div id="refreshstatus">

        </div>
    </form>
</div>
</body>
<?php include 'inc/footer.php'; ?>