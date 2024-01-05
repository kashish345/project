<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
<table border="3" id="myTable" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>bookname</th>
                <th>author</th>
                <th>genre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2 states</td>
                <td>chetan bhagat</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>2</td>
                <td>All your perfects</td>
                <td>collen Hoover</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>3</td>
                <td>below zero</td>
                <td>ali hazelwood</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>4</td>
                <td>bittersweet memories</td>
                <td>Catherina Maura</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>5</td>
                <td>eclipes</td>
                <td>Stephenie Meyer</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>6</td>
                <td>breaking dawn</td>
                <td>Stephenie Meyer</td>
                <td>romance</td>
            </tr>
            <tr>
                <td>7</td>
                <td>a good girl's guide to murder</td>
                <td>holly jackson</td>
                <td>thriller</td>
            </tr>
            <tr>
                <td>8</td>
                <td>as good as dead</td>
                <td>holly jackson</td>
                <td>thriller</td>
            </tr>
            <tr>
                <td>9</td>
                <td>good girl, bad blood</td>
                <td>holly jackson</td>
                <td>thriller</td>
            </tr>
            <tr>
                <td>10</td>
                <td>slient Patient</td>
                <td>alex Michaelides</td>
                <td>thriller</td>
            </tr>
            <tr>
                <td>11</td>
                <td>the maid</td>
                <td>Nita Prose </td>
                <td>thriller</td>
            </tr>
            <tr>
                <td>12</td>
                <td>gone girl</td>
                <td>gillian flynn</td>
                <td>thriller</td>
            </tr>
        </tbody>

    </table>
    
</body>
</html>