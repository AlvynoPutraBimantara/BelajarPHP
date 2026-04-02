<?php

$role = null;

// switch ($role) {
// case 'admin' :
//     echo "Forward to Admin Landing Page";
//     break;
// case 'user' :
//     echo "Forward to User Landing Page";
//     break;
//     default:
//     echo "Forward to Guest Landing Page";
//     break;
// }



























switch ($role) {
    case 'admin':
        echo "Forward into Admin page";
        break;
    case 'user':
        echo "Forward into User page";
        break;
    default:
        echo "Forward into Guest page";
        break;
};

