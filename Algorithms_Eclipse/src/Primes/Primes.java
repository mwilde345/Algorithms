// Erotosthenes Seive
package Primes;
import GroupOfUnits.groupOfUnits;
import ModularExp.modularexp;
import ModularExp.BigIntModularExp;
import java.util.*;
import java.math.*;

public class Primes{
	long startTime = System.currentTimeMillis();
	public static void main(String [] args){
		Primes myprime = new Primes();
		//myprime.primePi(Integer.parseInt(args[0]));
		//myprime.primePi(30);
		//myprime.psuedoprime(1000);
		//myprime.psuedoprime(100000);
		//myprime.psuedoprime(1000000);
		myprime.psuedoprimeBigInt(new BigInteger("12345678"));
	}
	
	public void psuedoprime(int max){
		modularexp me = new modularexp();
		int primeFound = 0;
		int truePrime = 0;
		ArrayList<Integer> sieveResult = primePi(max);
		for(int n = 2; n<=max; n++){
			if(me.modexp(2, n-1, n)==1){
				primeFound++;
				truePrime += sieveResult.contains(n) ? 1 : 0;
			}
		}
		System.out.println("2 to "+max+": \nPrimes found: "+primeFound+". True primes: "+
				truePrime+". Ratio: "+((double)truePrime/primeFound)*100+"%");
	}
	
	public void psuedoprimeBigInt(BigInteger max){
		int primeFound = 0;
		ArrayList<BigInteger> primes = new ArrayList<BigInteger>();
		BigIntModularExp me = new BigIntModularExp();
		BigInteger two = new BigInteger("2");
		BigInteger one = BigInteger.ONE;
		for(BigInteger n = new BigInteger("2"); n.compareTo(max)<0;n= n.add(BigInteger.ONE)){
			if(me.modexp(two, n.subtract(one), n).compareTo(one)==0){
				primeFound++;
				primes.add(n);
			}
		}
		System.out.println("2 to "+max.toString()+": \nPrimes found: "+primeFound+".");
	}

	public ArrayList<Integer> primePi(int n){
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

		//System.out.println();
		//System.out.println();
		//System.out.println("Number of primes less than or equal to " + n + " is " + primes.size());
		long endTime = System.currentTimeMillis();
		//System.out.println("Time to run program: "+(endTime - startTime)+" milliseconds");
		//or sieve.cardinality;
		//System.out.println(sieve.toString());
		return primes;
	}
	/*~ Time to Run (ms)	5	29	166	1159	9572
N	1000	10000	100000	1000000	10000000
*/

}
