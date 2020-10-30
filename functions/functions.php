<?php

// Creates a row for the todo list.
function create_row($name, $id, $completed) {
    if ($completed) {
        $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/checked-2.png"/>';
    } else {
        $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/close-window.png"/>';
    };
    echo "<tr>
                <td>$name</td>
                <td class='text-center'>$completedIcon</td>
                <td class='text-center'>
                    <a href='templates/todoform.php?oper=toggle&id=$id&completed=$completed'>
                        <img src='https://img.icons8.com/fluent/20/000000/change.png'/>
                    </a>
                </td>
                <td class='text-center'>
                    <a href='templates/todoform.php?oper=remove&id=$id'>
                        <img src='https://img.icons8.com/fluent/20/000000/delete-forever.png'/>
                    </a>
                </td>
            </tr>";
}