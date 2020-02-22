 <!DOCTYPE html>
 <html>
 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Calculator</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     <script src='main.js'></script>
 </head>
 <body>
     <?php
 class Calculator
    {

        public $operator ;
        public $operand1 ;
        public $operand2 ;
         


        public function calculation($operator=false, $operand1=false, $operand2=false)
        
        {
            if($operand1 === false){
                echo  "You must enter a operator and two numbers";   
            }
            
            
            $output1 = '';
            $output2 = '';
            $badInput = "You must enter a operator and two numbers"; 
                
             
                switch ($operator) {
                    default:
                    $output1 = "Please enter a operator and two numbers.";
                    break;
                    case 'Select an Operator':
                    $output1 = "You must select an operator.";
                    break;
                    case '+':
                        $output1 = " The sum of the two numbers is ";
                        $output2 = $operand1 + $operand2;
                         

                        break;
                    case '-':
                        $output1 = "The difference of the two numbers is " ;
                        $output2 = $operand1-$operand2;
                       

                        break;
                        
                    case '*': 
                        $output1 = "The product of the two numbers is " ;
                        $output2 = $operand1*$operand2;
 
                        break;
                    case '/':
                        if($operand2!=0){
                            $output1 = "The division of the two numbers is "  ;
                            $output2 = $operand1/$operand2;
                             }else
                            {
                             $output1 = "Cannot divide by zero";  
                             }break;
                
                        } 
                        
                    echo $output1.$output2;
            
        
            
        }  
    }
    
    // $calculator = new Calculator();
    // $calculator->calculation("+",2,8);
    
    // echo "<br>";
    // $calculator->calculation("*", 8, 8);

    //  echo "<br>";
    //   $calculator->calculation('-',4,24);
    //  echo "<br>";
    //   $calculator->calculation('*',5,5);
    //  echo "<br>";
    // $calculator->calculation('/',25,5);
    // echo "<br>";
    // $calculator->calculation('/',25,0);
    // echo "<br>";
    // // $calculator->calculation();
    // echo "<br>";
    ?>
 </body>
 </html>

    
    
