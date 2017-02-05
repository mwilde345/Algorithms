<div class="panel panel-info">
  <h3 class="panel-heading">4. Write an integer version of the fast psuedoprime test.  Given your list of primes (from Erotosthenes sieve):
A. In the range n = 2 to 1000, how many times when the test gives 1 is n a prime and how many not a prime?
B. How about in the range 2 to 100,000?
C. How about the range 2 to 1 million?
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week4pics/Week4.4.PNG"/>
    </div>
    <pre><code>
      public static void main(){
        myprime.psuedoprime(1000);
		    myprime.psuedoprime(100000);
		    myprime.psuedoprime(1000000);
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
    </pre></code>
  </div>
</div>
