<div class="panel panel-info">
  <h3 class="panel-heading">2. Write a BigInteger version of fast ModularExponentiation.
    Test it with 5 different cases using random BigIntegers on 1024 bits for base, exponent and modulus.
    The speedup over the naïve algorithm should be roughly 10^300 to 1.  Explain why.
    Translate this difference into something you could explain to your mom or grandma.
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week4pics/Week4.2.PNG"/>
    </div>
    <pre><code>
      Slow exponentiation is linear in the exponent. 2^n complexity.
      Fast exponentiation has the complexity of log(n)
      Using repeated squaring, the result always undergoes a mod before moving on, thus
      keeping the number manageable.

      For example if you need 50 cookies for a party, and you have 50 parties,
      slow exponentiation is like going to the store and buying a new pan for each batch of cookies.
      With fast exponentiation, modding it is like emptying the pan and putting new cookies in. Only using 1 pan.
      Pan's are like memory that hold numbers (cookies).
    </pre></code>
    <pre><code>
      public class BigIntModularExp{
      public static void main(String [] args){
    	  BigIntModularExp bime = new BigIntModularExp();
    	  for(int i = 1; i<=5; i++){
    		  BigInteger r1 = bime.randomInteger(1024);
    		  BigInteger r2 = bime.randomInteger(1024);
    		  BigInteger r3 = bime.randomInteger(1024);
    		  long start = System.currentTimeMillis();
    		  BigInteger result = bime.modexp(r1,r2,r3);
    		  long time = System.currentTimeMillis()-start;
    		  System.out.println("Iteration "+i+" result: "+result.toString()+"\n\t at "+time+" milliseconds");
    	  }

      }
      public BigInteger modexp(BigInteger a,BigInteger b,BigInteger n){
        BigInteger d = BigInteger.ONE;
        String bin = b.toString(2);
        for(int i = 0; i&ltbin.length(); i++){
          d = d.multiply(d).mod(n);
          if(bin.charAt(i) =='1'){
            d = d.multiply(a).mod(n);
          }
        }
        if(d.compareTo(BigInteger.ZERO)==-1){
          //java will return negatives from the residue set {-n....-2,-1,0,1,2,....n}
          d = d.add(n);
        }
        return d;
      }
    }
    </pre></code>
  </div>
</div>
