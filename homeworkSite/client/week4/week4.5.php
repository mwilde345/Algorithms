<div class="panel panel-info">
  <h3 class="panel-heading">5. Write a BigInteger version of the fast pseudoprime test.
</h3>
  <div class="panel-body">
    <pre><code>
      2 to 12345678:
      Primes found: 810050.
    </pre></code>
    <pre><code>
      public void psuedoprimeBigInt(BigInteger max){
      		int primeFound = 0;
      		ArrayList<BigInteger> primes = new ArrayList<BigInteger>();
      		BigIntModularExp me = new BigIntModularExp();
      		BigInteger two = new BigInteger("2");
      		BigInteger one = BigInteger.ONE;
      		for(BigInteger n = new BigInteger("2"); n.compareTo(max)&lt0;n= n.add(BigInteger.ONE)){
      			if(me.modexp(two, n.subtract(one), n).compareTo(one)==0){
      				primeFound++;
      				primes.add(n);
      			}
      		}
      		System.out.println("2 to "+max.toString()+": \nPrimes found: "+primeFound+".");
      	}
    </pre></code>
  </div>
</div>
