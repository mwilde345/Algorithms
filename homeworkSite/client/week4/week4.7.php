<div class="panel panel-info">
  <h3 class="panel-heading">7. Write static methods for
multiplying two BigIntegers,
determining the gcd of two BigIntegers
computing the inverse of a mod m (for BigIntegers)
computing a^b mod n for BigIntegers
</h3>
  <div class="panel-body">
    <pre><code>
      public static BigInteger multiply(BigInteger a, BigInteger b){
    	  return a.multiply(b);
      }
      public static BigInteger gcd(BigInteger a, BigInteger b){
    	  return a.gcd(b);
      }
      public static BigInteger inverse(BigInteger a, BigInteger m){
    	  return a.modInverse(m);
      }
      public static BigInteger modexp(BigInteger a, BigInteger b, BigInteger m){
    	  return a.modPow(b, m);
      }
    </pre></code>
  </div>
</div>
