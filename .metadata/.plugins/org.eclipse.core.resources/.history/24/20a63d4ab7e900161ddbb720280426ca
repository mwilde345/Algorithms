import java.math.*;
import java.util.*;

public class BigIntegerTest{
  public static void main(String [] args){
    BigInteger one = BigInteger.ONE;
    BigInteger p;
    BigInteger q;
    BigInteger n;
    BigInteger phi_of_n;
    BigInteger e;
    BigInteger d;
    System.out.println(randomInteger(300));
    System.out.println("Next Prime: \n"+randomPrime(300));
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

}
