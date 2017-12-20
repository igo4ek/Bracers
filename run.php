

<?php

class ProblemSolver
{
    public static function BracesBalance($inputString)
    {
        $counter=0;
	for($i=0;$i<strlen($inputString);$i++)
	{
            if($inputString[$i]==')')$counter--;
            if($inputString[$i]=='(')$counter++;
            if($counter<0)return false;
        }
        if($counter==0)return true;
    }
}
//foreach($argv as $a) echo $a."\r\n";
echo ProblemSolver::BracesBalance($argv[1])? "OK": "FAIL";

?>

