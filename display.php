<?php

include 'connect.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table border table-striped">';
    $thead = '<thead>
        <tr>
            <th scope="col">id #</th>
            <th scope="col">Email</th>
            <th scope="col">Full Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Major</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>';
    $table .= $thead;
    $tbody = '<tbody>';

    // Gather All Rows
    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        // The Data Variables from SQL to display
        $id = $row['id'];
        $email = $row['email'];
        $name = $row['full_name'];
        $mobile = $row['mobile'];
        $major = $row['major'];

        $tbody .= '<tr>
            <td scope="row">' . $id . '</td>
            <td>' . $email . '</td>
            <td>' . $name . '</td>
            <td>' . $mobile . ' </td>
            <td>' . $major . '</td>
        </tr>';
    }
    $tbody .= '</tbody>';
    $table .= $tbody . '</table>';
    echo $table;
}

?>

<td>
    <button>
        
    </button>
</td>