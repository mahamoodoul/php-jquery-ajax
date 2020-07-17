<?php include 'inc/header.php'; ?>

<h2>Auto Save content</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Type Content</td>
                <td>:</td>
                <td>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="hidden" name="contentid" id="contentid">
                </td>
            </tr>
        </table>

        <style>
            #savestatus {
                color: blue;
            }
        </style>
        <div id="savestatus">

        </div>
    </form>
</div>
</body>
<?php include 'inc/footer.php'; ?>