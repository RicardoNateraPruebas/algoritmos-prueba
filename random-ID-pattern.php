/*
Create an algorithm that generates the following random ID pattern: XXXX-AAAA-BBBB-CCCC
Where XXXX, AAAA, BBBB and CCCC patterns are random alphanumeric
The default is a string: "XXXX-AAAA-BBBB-CCCC"
The result must be stored in a variable. For example:
$id = generarId()
id is ~ abc1-bb12-234a-bcc2
*/

function generarId(){
    $default="XXXX-AAAA-BBBB-CCCC";
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pattern = substr(str_shuffle($permitted_chars), 0, 19);
    $pattern[4]=$pattern[9]=$pattern[14]='-';
    return $pattern;
}

$id = generarId();

echo "id is ~ $id";