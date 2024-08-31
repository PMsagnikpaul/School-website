<?php
    include("./include/header.php");
?>
<style>
.all {
    padding-left: 180px;
    padding-right: 180px;
}

th {
    font-size: 40px;
    color: #fff;
    background-color: red;
    padding: 16px;
}

td {
    font-size: 30px;
    padding: 18px;
}

.red {
    background-color: #f9d9a442;
}
</style>
<div class="container">
    <h2 style="font-size:50px ">
        <center> The school uniform of Nasherkuli Netaji Vidyalaya(HS)</center>
    </h2>
</div><br>
<div class="container" style="overflow-x: auto;">
    <table border=2>
        <tr>
            <th>Classes </th>
            <th> Uniform for Boys </th>
            <th>Uniform for Girls</th>
        </tr>
        <tr>
            <td>Class:- V to VIII </td>
            <td> White shirt, Navy blue pant, Navy blue sweater </td>
            <td> White shirt, Navy blue skirt, Navy blue sweater</td>
        </tr>
        <tr class="red">
            <td>Class:- IX and X </td>
            <td> White shirt, Navy blue, Blue sweater </td>
            <td> White salwar, Navy blue kamiz, Navy blue dupatta, Navy blue sweater</td>
        </tr>
        <tr>
            <td>Class:- XI and XII </td>
            <td> Sky blue shirt, Navy blue pant, Navy blue sweater </td>
            <td>Sky blue salwar, Navy blue kamiz, Navy blue dupatta, Navy blue sweater</td>
        </tr>
    </table>
</div>
<br><br><br>

<?php
    include("./include/footer.php");
?>