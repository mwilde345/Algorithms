<div class="panel panel-info">
  <h3 class="panel-heading">6. Test the following constructors and methods of the BigInteger class:
Constructors: let p = a BigInteger of bitlength 1024, which is probably prime.  Also construct random integers a, b and n of bitlength 1024 each.
Use the above to illustrate these methods:
a+b
a*b
the bit length of n
determine which of a and b is bigger
a/b
gcd(a,b)
test if p is probably prime
a mod n
a^-1 mod p
a^b mod n
a*b mod n
the next prime after p
q = a probable prime of bit length 1024 (not using a constructor).
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week4pics/Week4.6.PNG"/>
    </div>
    <pre><code>
      public BigIntegerTest(){
        this.p = randomPrime(1024);
        this.a = randomInteger(1024);
        this.b = randomInteger(1024);
        this.n = randomInteger(1024);
      }

      public void testBigInteger(){
    	  System.out.print("a+b\n\t");
    	  	System.out.println(a.add(b).toString());
    	  System.out.print("a*b\n\t");
    	  	System.out.println(a.multiply(b).toString());
    	  System.out.print("bit length of n\n\t");
    	  	System.out.println(n.bitLength());
    	  System.out.print("a or b bigger\n\t");
    	  	System.out.println(a.compareTo(b)==-1 ? "b is bigger" : "a is bigger");
    	  System.out.print("a/b\n\t");
    	  	System.out.println(BigDecimal.valueOf(a.longValue()).divide(BigDecimal.valueOf(b.longValue()),2,BigDecimal.ROUND_HALF_UP).toPlainString());
    	  System.out.print("gcd(a,b)\n\t");
    	  	System.out.println(a.gcd(b).toString());
    	  System.out.print("p is prime?\n\t");
    	  	System.out.println(p.isProbablePrime(300));
    	  System.out.print("a mod n\n\t");
    	  	System.out.println(a.mod(n).toString());
    	  System.out.print("a^-1 mod p\n\t");
    	  	System.out.println(a.modPow(new BigInteger("-1"), p).toString());
    	  System.out.print("a^b mod n\n\t");
    	  	System.out.println(a.modPow(b, p).toString());
    	  System.out.print("a*b mod n\n\t");
    	  	System.out.println(a.multiply(b).mod(n).toString());
    	  System.out.print("next prime after p\n\t");
    	  	System.out.println(p.nextProbablePrime().toString());
    	  System.out.print("q = probable prime of length 1024\n\t");
    	  	System.out.println(BigInteger.probablePrime(1024, new Random()));
      }

      //Return random
      public static BigInteger randomInteger (int ndigits){
        Random rand = new Random();
        int len = (int)(3.32*(double)ndigits); //log(10)/log(2) = 3.32
        return new BigInteger(len,rand);
      }
      //Return random prime approx. ngidits in length
      public static BigInteger randomPrime (int ndigits){
        BigInteger p = randomInteger(ndigits);
        return p.nextProbablePrime();
      }      
    </pre></code>
  </div>
</div>
