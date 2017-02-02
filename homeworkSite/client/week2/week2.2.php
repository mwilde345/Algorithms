<div class="panel panel-info">
  <h3 class="panel-heading">2. Investigate the computational complexity of primePi
    by computing it for n = 1000, 10,000, 100,000 and 1 million.
    Draw a graph of this data.  What is your guess for the time it take to run
    primePi with input n = 10 million?  Are you correct?  What is the largest
    value of n you can run successfully using any computer at your disposal?
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./PrimePi.PNG"/>
    </div>
    <pre><code>
      // Erotosthenes Seive
      import java.util.*;

      public class primes{
      	long startTime = System.currentTimeMillis();
      	public static void main(String [] args){
      		primes myprime = new primes();
      		myprime.primePi(Integer.parseInt(args[0]));
      	}

      	public void primePi(int n){
      		BitSet sieve = new BitSet(n);
      		ArrayList&ltInteger> primes = new ArrayList&ltInteger>();
      		int size = sieve.size();
      		int last = (int)Math.sqrt(size); //only have to go to the sqrt of n

      		//initialize BitSet
      		for(int i = 2; i&ltsize; i++){
      			sieve.set(i);
      		}

      		//Seiving Process
      		for(int i = 2; i&lt= last; i++){
      			if(sieve.get(i)){
      				for(int j = 2*i; j&ltsize; j+=i){
      					//knock off its multiples
      					sieve.clear(j);
      				}
      			}
      		}

      		//add it to the primes list
      		for(int i = 2; i&lt size; i++){
      			if(sieve.get(i)&&i&ltn){
      				primes.add(i);
      			}
      		}

      		for(Integer p: primes){ //array list does not hold primitive type int
      			System.out.print(p +" ");
      		}
      		System.out.println();
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

    </pre></code>
    <h2>Stats with the printing of primes: </h2><br>
    <img src="./ChartGo.png"/><br>
    <h2>Stats without printing the primes: </h2><br>
    <img src="./PrimePiNoPrint.PNG"/><br>
    <img src="./PrimePiShorter.png"/>
    <h2>According to this graph it looks most like n^2:</h2><br>
    <img src="./complexity.png"/><br>
    <h2>I am not sure how it converts from N to the time taken to run.</h2><br>
    <h2>With good memory management it could run forever on a normal computer.</h2>

  </div>
</div>
