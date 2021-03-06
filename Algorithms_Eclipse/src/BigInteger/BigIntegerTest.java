package BigInteger;
import java.math.*;
import java.util.*;

public class BigIntegerTest{
	BigInteger a;
    BigInteger b;
    BigInteger p;
    BigInteger n;
public static void main(String [] args){
    BigInteger one = BigInteger.ONE;
    BigInteger q;
    BigInteger phi_of_n;
    BigInteger e;
    BigInteger d;    
    
    //start = System.nanoTime();
    //System.out.println(randomInteger(300));
    //System.out.println("Next Prime: \n"+randomPrime(300));
    BigIntegerTest bi = new BigIntegerTest();
    //bi.testBigInteger();
    //bi.RabinMillerTest();
    System.out.println(bi.inverse(new BigInteger("13"), new BigInteger("2436")));
    
  }
  
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
  
  public void RabinMillerTest(){
	  this.n = randomInteger(1024);
	  //this.n = new BigInteger("750");
	  BigInteger two = new BigInteger("2");
	  //we know if it is even that it's not prime. we want prime
	  if(this.n.getLowestSetBit()!=0) n = n.add(BigInteger.ONE);
	  
	  while(!two.modPow(n.subtract(BigInteger.ONE), n).equals(BigInteger.ONE)){
		  n = n.add(two);
	  }	  
	  int counter = 0;
	   
	  while(counter<100){
		  this.a = randomInteger(1024);
		  while(a.compareTo(n)>=0){
			  a= randomInteger(1024);
		  }
		  if(gcd(a,n).equals(BigInteger.ONE)){
			  counter++;
		  }else{
			  System.out.println(counter);
			  break;
		  }		  
	  }
	  if(counter!=100){
		  RabinMillerTest();
	  }else{
		  System.out.println("Found a likely prime n: \n"+n.toString());
	  }
	  
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

}
