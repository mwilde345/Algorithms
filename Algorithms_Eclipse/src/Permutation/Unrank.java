package Permutation;

import java.math.BigInteger;
import java.util.ArrayList;

public class Unrank {
	public static void main(String[] args){
		Unrank u = new Unrank();
		u.unrankMe(new BigInteger("100"),new BigInteger("99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999"));
	}
	public void unrankMe(BigInteger order, BigInteger rank){
		ArrayList<BigInteger> notUsed = populateNotUsed(order);
		ArrayList<BigInteger> permutation = new ArrayList<BigInteger>();
		BigInteger remainder = rank; //57
		BigInteger currentBase = order.subtract(BigInteger.ONE); //4
		int counter = 0;
		while(notUsed.size()>0){
			BigInteger baseFactorial = getFactorial(currentBase); //4!
			BigInteger sum = baseFactorial.compareTo(remainder)<=0?baseFactorial:BigInteger.ZERO;
			BigInteger count = sum.compareTo(BigInteger.ZERO)>0?BigInteger.ONE:BigInteger.ZERO;
			//if do we add the factorials until the remainder is 0? or stop before remainder hits zero and go to the next iteration?
			while(sum.add(baseFactorial).compareTo(remainder)<=0){
				count=count.add(BigInteger.ONE);
				sum=sum.add(baseFactorial);
			}
			remainder = remainder.subtract(sum);
			currentBase = currentBase.subtract(BigInteger.ONE);
			int countIndex = Integer.valueOf(count.toString());
			if(countIndex<notUsed.size()){
				permutation.add(notUsed.get(countIndex));
				notUsed.remove(countIndex);
			}
		}
		System.out.println(permutation.toString());
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
