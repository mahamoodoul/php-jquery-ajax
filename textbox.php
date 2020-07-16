<?php include 'inc/header.php'; ?>

<style>
.skill{
    background: #d4c2c2;
    margin-left: 54px;
    padding: 6px 30px;
    width: 190px;
}
.skill ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.skill ul li{
    cursor: pointer;
    border-bottom: 1px solid yellowgreen;
}
</style>

<h2>Auto complete Textbox</h2>
<div class="content">
    <form action="" method="post">

        <table>
            <tr>
                <td>  Skill</td>
                <td>:</td>
                <td>
                    <input type="text" id="skill" name="skill" placeholder="Enter your skill">
                </td>
            </tr>
        </table>
        <div id="skillstatus">

        </div>
    </form>
</div>
</body>
<?php include 'inc/footer.php'; ?>