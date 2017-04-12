<div class="panel panel-info">
  <h3 class="panel-heading">3. Use the Quicksort algorithm to sort by hand the following integer sequence.  Draw a picture of every step in the process (i.e. after each partition).
50  12   59   10   74   41   80   55   17   40   90   95   30   31   9    51   107   2   211</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week8pics/Week8.3.PNG"/>
    </div>
    <pre><code>
      package Permutation;

import java.util.ArrayList;
import java.util.Arrays;

public class RandomPermutation {
	public static void main(String[] args){
		RandomPermutation rp = new RandomPermutation();
		Rank r = new Rank();
		ArrayList&ltInteger> ranPerm = rp.getPermutation(10);
		System.out.println(ranPerm.toString());
		//r.getRank(ranPerm.toArray(new Integer[ranPerm.size()]));
	}

	public ArrayList&ltInteger> getPermutation(int input){
		ArrayList&ltInteger> startingSet = new ArrayList&ltInteger>();
		//populate array
		for(int i = 1; i&lt=input; i++){
			startingSet.add(i-1, i);
		}
		//switch numbers
		for(int i = 0; i&ltinput; i++){
			int randomIndex = (int)(Math.random()*input);
			int temp = startingSet.get(randomIndex);
			startingSet.set(randomIndex, startingSet.get(0));
			startingSet.set(0, temp);
		}
		//System.out.println(startingSet.toString());
		return startingSet;
	}
}
    </pre></code>


  </div>
</div>
