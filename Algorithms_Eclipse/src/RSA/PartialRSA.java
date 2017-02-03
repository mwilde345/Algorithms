package RSA;
import java.math.*;
import java.util.*;
import java.io.*;

public class PartialRSA{
  public static void main(String [] args){
    //String s = fileToString("input.txt");
    //ArrayList<String> sBlocks = toStringBlocks(s); //converts string to 200 symbol blocks
    //Side program to get me my p and q. Play around to get the right p and q.
    BigInteger p; //store here one of your primes
    BigInteger q; //store here one of your primes
    BigInteger n; //the product
    BigInteger e = new BigInteger("65537"); //optimized, cuz it uses two bits(two ones) for exponentiation
    BigInteger one = BigInteger.ONE; //used for counting

    BigInteger phi_of_n;
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
