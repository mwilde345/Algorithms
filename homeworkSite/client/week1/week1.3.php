<div class="panel panel-info">
  <h3 class="panel-heading">3. Write a program that, given a positive integer n, prints out all the subsets of {1,2,…,n}.
Hint: (use Integer toBinaryString() and the String method toCharArray() ).
Then, write the algorithm in the formal notation we illustrated last time.
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./Subsets.PNG"/>
    </div>
    <pre><code>
      C:\Users\Miraclebob\Documents\GitHub\Algorithms\Subsets>java subsets
      Enter integer:
      3
      Subset 1: Empty Set
      Subset 2: 1
      Subset 3: 2
      Subset 4: 2 1
      Subset 5: 3
      Subset 6: 3 1
      Subset 7: 3 2
      Subset 8: 3 2 1

      C:\Users\Miraclebob\Documents\GitHub\Algorithms\Subsets>java subsets
      Enter integer:
      6
      Subset 1: Empty Set
      Subset 2: 1
      Subset 3: 2
      Subset 4: 2 1
      Subset 5: 3
      Subset 6: 3 1
      Subset 7: 3 2
      Subset 8: 3 2 1
      Subset 9: 4
      Subset 10: 4 1
      Subset 11: 4 2
      Subset 12: 4 2 1
      Subset 13: 4 3
      Subset 14: 4 3 1
      Subset 15: 4 3 2
      Subset 16: 4 3 2 1
      Subset 17: 5
      Subset 18: 5 1
      Subset 19: 5 2
      Subset 20: 5 2 1
      Subset 21: 5 3
      Subset 22: 5 3 1
      Subset 23: 5 3 2
      Subset 24: 5 3 2 1
      Subset 25: 5 4
      Subset 26: 5 4 1
      Subset 27: 5 4 2
      Subset 28: 5 4 2 1
      Subset 29: 5 4 3
      Subset 30: 5 4 3 1
      Subset 31: 5 4 3 2
      Subset 32: 5 4 3 2 1
      Subset 33: 6
      Subset 34: 6 1
      Subset 35: 6 2
      Subset 36: 6 2 1
      Subset 37: 6 3
      Subset 38: 6 3 1
      Subset 39: 6 3 2
      Subset 40: 6 3 2 1
      Subset 41: 6 4
      Subset 42: 6 4 1
      Subset 43: 6 4 2
      Subset 44: 6 4 2 1
      Subset 45: 6 4 3
      Subset 46: 6 4 3 1
      Subset 47: 6 4 3 2
      Subset 48: 6 4 3 2 1
      Subset 49: 6 5
      Subset 50: 6 5 1
      Subset 51: 6 5 2
      Subset 52: 6 5 2 1
      Subset 53: 6 5 3
      Subset 54: 6 5 3 1
      Subset 55: 6 5 3 2
      Subset 56: 6 5 3 2 1
      Subset 57: 6 5 4
      Subset 58: 6 5 4 1
      Subset 59: 6 5 4 2
      Subset 60: 6 5 4 2 1
      Subset 61: 6 5 4 3
      Subset 62: 6 5 4 3 1
      Subset 63: 6 5 4 3 2
      Subset 64: 6 5 4 3 2 1
    </pre></code>
    <pre><code>
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
    </pre></code>
<<<<<<< HEAD
=======
    <pre><code>
      Fill array with n-1 to 1
      Loop from 1 to n, convert each number to binary
      For every 1 in the binary number, map it to the number in the first array
        Add the mapping for every binary number to a 2d array
      print the 2d array
    </pre></code>
>>>>>>> 5a5569aa44017a7b2bb5837a39ea29fcd89764a7
  </div>
</div>
