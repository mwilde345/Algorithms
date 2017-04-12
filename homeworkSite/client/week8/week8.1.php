<div class="panel panel-info">
  <h3 class="panel-heading">1. Hand compute Unrank7(1000).  (If you listed all the permutations of 7 things, what is the permutation at index 1000?).
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week8pics/Week8.1.jpg"/>
    </div>
    <pre><code>
     package Permutation;

import java.math.BigInteger;
import java.util.ArrayList;

public class Unrank {
	public static void main(String[] args){
		Unrank u = new Unrank();
		u.unrankMe(new BigInteger("100"), new BigInteger("100"));
		//u.unrankMe(new BigInteger("100"),new BigInteger("80676290389139659028267430873343376727850482671126860065945276500861296442714874089595498029291501698176931482179208001136589908559790080000000000000000000000"));
	}
	public void unrankMe(BigInteger order, BigInteger rank){
		ArrayList&ltBigInteger> notUsed = populateNotUsed(order);
		ArrayList&ltBigInteger> permutation = new ArrayList<BigInteger>();
		BigInteger remainder = rank; //57
		BigInteger currentBase = order.subtract(BigInteger.ONE); //4
		int counter = 0;
		while(notUsed.size()>0){
			BigInteger baseFactorial = getFactorial(currentBase); //4!
			BigInteger sum = baseFactorial.compareTo(remainder)&lt=0?baseFactorial:BigInteger.ZERO;
			BigInteger count = sum.compareTo(BigInteger.ZERO)>0?BigInteger.ONE:BigInteger.ZERO;
			//if do we add the factorials until the remainder is 0? or stop before remainder hits zero and go to the next iteration?
			while(sum.add(baseFactorial).compareTo(remainder)&lt=0){
				count=count.add(BigInteger.ONE);
				sum=sum.add(baseFactorial);
			}
			remainder = remainder.subtract(sum);
			currentBase = currentBase.subtract(BigInteger.ONE);
			int countIndex = Integer.valueOf(count.toString());
			if(countIndex&ltnotUsed.size()){
				permutation.add(notUsed.get(countIndex));
				notUsed.remove(countIndex);
			}
		}
		System.out.println(permutation.toString());
	}
	public BigInteger getFactorial(BigInteger base){
		BigInteger fact = BigInteger.ONE;
		for(BigInteger j = BigInteger.ONE; j.compareTo(base)&lt=0; j=j.add(BigInteger.ONE)){
			fact = fact.multiply(j);
		}
		return fact;
	}
	public ArrayList&ltBigInteger> populateNotUsed(BigInteger order){
		ArrayList&ltBigInteger> result = new ArrayList&ltBigInteger>();
		for(BigInteger j = BigInteger.ONE; j.compareTo(order)&lt=0; j=j.add(BigInteger.ONE)){
			result.add(j);
		}
		return result;
	}
}

    </pre></code>
  </div>
</div>
