<div class="panel panel-info">
  <h3 class="panel-heading">7. For all integers n in the range [2, 1000] compute 2^(n-1) mod n.  How many non-primes did it detect?
</h3>
  <div class="panel-body">
    <pre><code>
      public void checkPrimes(){
        int nonPrimes = 0;
        for(int i = 2; i<=1000; i++){
          int primeCheck = (int)Math.pow(2,(i-1))%i;
          nonPrimes+=primeCheck==1?0:1;
        }
        System.out.println("Non-primes from 2 -> 1000: "+nonPrimes);
      }
    </pre></code>
    <pre><code>
      Non-primes from 2 -> 1000: 960
    </pre></code>
  </div>
</div>
