package Permutation;

import java.math.BigInteger;
import java.util.ArrayList;

public class Unrank {
	public static void main(String[] args){
		Unrank u = new Unrank();
		u.unrankMe(new BigInteger("5"),new BigInteger("57"));
	}
	
	public void unrankMe(BigInteger order, BigInteger rank){
		
		ArrayList<BigInteger> notUsed = populateNotUsed(order);
		BigInteger remainder = rank; //57
		BigInteger currentBase = order.subtract(BigInteger.ONE); //4
		while(remainder.compareTo(BigInteger.ZERO)>0){
			BigInteger baseFactorial = getFactorial(currentBase); //4!
			BigInteger count = BigInteger.ZERO; //0
			BigInteger sum = baseFactorial; //24
			while(sum.add(sum).compareTo(remainder)<0){ //24<57, 48<57
				count=count.add(BigInteger.ONE);
				sum=sum.add(sum);
				//System.out.println(sum.toString());
			}
			remainder = rank.subtract(sum);
			currentBase = currentBase.subtract(BigInteger.ONE);
			System.out.println(remainder.toString());
		}
	}
	
	public BigInteger getFactorial(BigInteger base){
		BigInteger fact = BigInteger.ONE;
		for(BigInteger j = BigInteger.ONE; j.compareTo(base)<=0; j=j.add(BigInteger.ONE)){
			fact = fact.multiply(j);
		}
		return fact;
	}
	
	public ArrayList<BigInteger> populateNotUsed(BigInteger order){
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for(BigInteger j = BigInteger.ONE; j.compareTo(order)<=0; j=j.add(BigInteger.ONE)){
			result.add(j);
		}		
		return result;
	}
}
