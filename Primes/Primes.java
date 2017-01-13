// Erotosthenes Seive
import java.util.*;

public class Primes{
	public static void main(String [] args){
			Primes myprime = new Primes();
			myprime.getPrimes(50);
	}
	
	public void getPrimes(int n){
		BitSet sieve = new BitSet(3);
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
		/*
		primes.forEach(function(){
			if(this){
				System.out.println(this);
			}
		}
		*/
		
		//add it to the primes list
		for(int i = 2; i< size; i++){
			if(sieve.get(i)){
				primes.add(i);
			}
		}
		
		for(Integer p: primes){ //array list does not hold primitive type int
			System.out.print(p +" ");
		}
		System.out.println("Number of primes less than or equal to " + size + " is " + primes.size());
		//or sieve.cardinality;
		//System.out.println(sieve.toString());
	}
	
}