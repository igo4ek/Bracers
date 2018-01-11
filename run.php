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
            if($counter<0)return 'FAIL';
        }
        if($counter==0)return 'OK';
	else return 'FAIL';
    }
}
echo ProblemSolver::BracesBalance($argv[1]);
?>
