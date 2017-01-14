<?php
session_start();
$_SESSION['displayMessage'] = false;
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  if(!isset($_SESSION['logged_in'])){
    $_SESSION['logged_in'] = false;
  }
?>

<?php include("./php/header.php"); ?>
<div class="panel panel-info">
	<div class="panel panel-heading">
    <h2>TEst</h2>
		<h2>Welcome!<?php if(empty($_SESSION['username'])):?> Please Log in<?php endif;?></h2>

	</div>
	<div class="panel-body">
		<a href="./client/loginView.php"><button class="btn btn-primary">Login</button></a>
    <div>
      <pre style="height:400px;"><code>
        //All subsets of a set
        import java.util.Scanner;
        import java.lang.Math;
        import java.util.Arrays;

        public class subsets{
        	public static void main(String [] args){
        		subsets set = new subsets();
        		set.findSubsets(0);
        	}

        	public void findSubsets(int n){
        		Scanner s = new Scanner(System.in);
        		System.out.println("Enter integer: ");
        		n = s.nextInt();
        		//Create Array with numbers 1-n
        		int[] set = new int[n];
        		for(int i = n; i>0; i--){
        			set[set.length-i] = i;
        		}
        		//Create Array that will store all the subsets
        		int[][] fullSets = new int[(int)Math.pow(2,n)][n];
        		//Count from 1 to 2^n in binary
        		for(int i = 0; i<Math.pow(2,n); i++){
        			String binary = Integer.toBinaryString(i);
        			char[] binArray = binary.toCharArray();
        			//Step through and get the 1s and 0s from that binary number
        			for(int j = binArray.length-1; j>=0; j--){
        				int binDigit = Character.getNumericValue(binArray[j]);
        				//If we hit a 1, add the corresponding value from the 1 to n array.
        				if(binDigit==1){
        					int setValue = set[set.length-(binArray.length-j)];
        					fullSets[i][j] = setValue;
        				}
        			}
        		}
        		int count = 1;
        		for(int[] subset: fullSets){
        			if(count==1){
        					System.out.println("Subset 1: Empty Set");
        					count++;
        					continue;
        			}else System.out.print("Subset "+count+": ");
        			for(int value: subset){
        					if(value!=0) System.out.print(value+" ");
        			}
        			System.out.println();
        			count++;
        		}
        	}
        }
      </code></pre>
  </div>
	</div>
</div>
<?php include("./php/footer.php"); ?>
