<?php

include 'connect.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table border table-striped">';
    $thead = '<thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="idColumn" style="display: none;">id</th> <!-- ID corresponding to SQL Database -->
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
    $number = 1;

    while($row = mysqli_fetch_assoc($result)){
        // The Data Variables from SQL to display
        $id = $row['id'];
        $email = $row['email'];
        $name = $row['full_name'];
        $mobile = $row['mobile'];
        $major = $row['major'];

        $tbody .= '<tr>
            <td scope="row">' . $number . '</td>
            <td class="idColumn" style="display: none;">' . $id .'</td>
            <td>' . $email . '</td>
            <td>' . $name . '</td>
            <td>' . $mobile . ' </td>
            <td>' . $major . '</td>
            <td>
                <button class="btn btn-secondary border m-1" onclick="updateStudent(' . $id . ')">
                    Update
                </button>
                <button class="btn btn-danger border m-1" onclick="deleteStudent(' . $id . ')">
                    Delete
                </button>
            </td>
        </tr>';
        $number++;
    }
    $tbody .= '</tbody>';
    $table .= $tbody . '</table>';
    echo $table;
}

?>