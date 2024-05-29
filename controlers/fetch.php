<?php

include ("../includes/db-connect.php");

if($dbConn == true) {

    $qQuery = " SELECT * FROM `u955154186_db_llanes`.`tbl_reginfo`
                WHERE `deldate` IS NULL
                ORDER BY id DESC    
    ";

    $eQuery = mysqli_query($dbConn, $qQuery);    

    if ($eQuery == true) {

        $sHtml = "";

        while($rows = mysqli_fetch_array($eQuery)) {

            // $sHtml .= "<tr>
            //         <td>".$rows['id']."</td>
            //         <td>".$rows['first_name']."</td>
            //         <td>".$rows['last_name']."</td>
            //         <td>".$rows['email']."</td>
            //         <td>".$rows['entrydate']."</td>
            //         <td>
            //             <button class='btn btn-info' onclick=edit('".$rows['id']."');>Edit</button>&nbsp;
            //             <button class='btn btn-danger' onclick=del('".$rows['id']."',this);>Delete</button>
            //         </td>
            //         </tr>
            //     ";

                $sHtml .= " <div class='card mb-3 shadow rounded' style='width: 32%;'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$rows['last_name'].", ".$rows['first_name']."</h5>
                                    <h6 class='card-subtitle mb-2 text-muted'>ID #".$rows['id']."</h6>
                                    <ul style='list-style:none;''>
                                        <li><i class='fa-solid fa-envelope'></i> ".$rows['email']."</li>
                                    </ul>
                                    
                                    <div class='d-flex flex-row justify-content-between mt-5'>
                                        <button class='btn btn-info' onclick=edit('".$rows['id']."'>Edit</button>
                                        <button class='btn btn-danger' onclick=del('".$rows['id']."',this);>Remove</button>
                                    </div>
                                </div>
                            </div>
                ";
        }

        // $sHtml .= "</tbody>";

        echo $sHtml;
        mysqli_close($dbConn);
    }


} else {
    echo 'failed to connect!';
}