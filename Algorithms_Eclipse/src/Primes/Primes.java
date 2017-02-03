// Erotosthenes Seive
package Primes;
import java.util.*;

public class Primes{
	long startTime = System.currentTimeMillis();
	public static void main(String [] args){
		Primes myprime = new Primes();
		myprime.primePi(Integer.parseInt(args[0]));
	}

	public void primePi(int n){
		BitSet sieve = new BitSet(n);
		ArrayList<Integer> primes = new ArrayList<Integer>();
		int size = sieve.size();
		int last = (int)Math.sqrt(size); //only have to go to the sqrt of n

		//initialize BitSet
		for(int i = 2; i<size; i++){
			sieve.set(i);
		}

		//Seiving Process
		for(int i = 2; i<= last; i++){
			if(sieve.get(i)){
				for(int j = 2*i; j<size; j+=i){
					//knock off its multiples
					sieve.clear(j);
				}
			}
		}

		//add it to the primes list
		for(int i = 2; i< size; i++){
			if(sieve.get(i)&&i<n){
				primes.add(i);
			}
		}

		for(Integer p: primes){ //array list does not hold primitive type int
			//System.out.print(p +" ");
		}

		System.out.println();
		//System.out.println();
		System.out.println("Number of primes less than or equal to " + n + " is " + primes.size());
		long endTime = System.currentTimeMillis();
		System.out.println("Time to run program: "+(endTime - startTime)+" milliseconds");
		//or sieve.cardinality;
		//System.out.println(sieve.toString());
	}
	/*~ Time to Run (ms)	5	29	166	1159	9572
N	1000	10000	100000	1000000	10000000
*/

}