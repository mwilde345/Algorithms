//slow exponentiation
//compute a^b mod n
///Complexity: this approach is linear to the exponent, or b.
//because you are doing that a= line b times.
package ModularExp;

import java.math.BigInteger;
import java.util.Random;

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
    for(int i = 0; i<bin.length(); i++){
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
  
  public BigInteger randomInteger (int ndigits){
	Random rand = new Random();
	int len = (int)(3.32*(double)ndigits); //log(10)/log(2) = 3.32
    return new BigInteger(len,rand);
  }
  //Return random prime approx. ngidits in length
  public BigInteger randomPrime (int ndigits){
    BigInteger p = randomInteger(ndigits);
    return p.nextProbablePrime();
  }
}
