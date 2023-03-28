/*
Create a hashmap (or a simple object in PHP) that contains the elementary functions of addition, subtraction, multiplication, and division.
Take into account that the division must not allow 0 dividend
The sum function allows an array as an input parameter and adds all its elements.
The subtraction function allows an array as an input parameter and subtracts all its elements.
Multiplication Function - Ditto
The division function accepts two parameters: a and b.
*/
class operations
{
    public function sum(array $arr)
    {
        return array_sum($arr); 
    }
    public function subtraction(array $arr)
    {   
        rsort($arr);
        $resta = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            $resta =  $resta - $arr[$i];
        }
        
        return $resta; 
    }
    public function mult(array $arr)
    {   
        $mult = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            $mult =  $mult * $arr[$i];
        }
        
        return $mult; 
    }
    public function div($num1,$num2)
    {   
        if($num2 == 0) {

            echo "you can't divide by zero";
            return null;
            
        } else {
        
           return $num1/$num2;
        
        }
    }
}

$test = array(3,75,34);

$calc = new operations;

print_r ($calc->sum($test));
echo "\n";
print_r ($calc->subtraction($test));
echo "\n";
print_r ($calc->mult($test));
echo "\n";
print_r ($calc->div(75,4));
echo "\n";
print_r ($calc->div(75,0));