package BigInteger;

//Arup Guha
//Originally written in Fall 2006, edited on 10/23/07 for CIS 3362.
import java.math.BigInteger;
import java.util.*;

public class MillerRabin {
	
	// Just used to test out our MillerRabinTest
	public static void main(String[] args) {
		
		Scanner stdin = new Scanner(System.in);
		
		// Get a number to test.
		BigInteger mynum = new BigInteger("1178217979370408523460310998724435540508551467300836819528512287944026822284785848708177172901102761089310270221362742043086179542813685826821571240511105847533587838264681984544769375319529202766571643233779235281863383354682499167918941958598731679283441999491206532721936404979241947292117533177662817676377639392636712225833894215659569629156020504818034289646087997228545894798039673826479302318591575853835099549135112415546361913354817411436698115351119998298384462340048378206430400600301871171785639725506084091298949983437426957026113799614818289481861574929167840191767266897004648237758164108598192042711674409178795798246538005666459595016398114166551873589472559314683076611562717125784557687334581612468817778890547177398452046910117670312153096726891173552020483784386192004676648062683613238355287034095437802369387475000414790842684709432729903251302161580973003375164013388592512843780254402858454968739877172042935608678299286767638731539716260729594381514335634433713598793672354847572877476950459600829");
		
		// Output our result...run MillerRabin 50 times.
		while (!MillerRabin(mynum, 50))
			//mynum = randomInteger(1024);
			System.out.println("failed");
		System.out.println("found prime");
		
	}
	public static BigInteger randomInteger (int ndigits){
	    Random rand = new Random();
	    int len = (int)(3.32*(double)ndigits); //log(10)/log(2) = 3.32
	    return new BigInteger(len,rand);
	}
	
	public static boolean FermatTest(BigInteger n, Random r) {
		
		// Ensures that temp > 1 and temp < n.
		BigInteger temp = BigInteger.ZERO;
		do {
			temp = new BigInteger(n.bitLength()-1, r);
		} while (temp.compareTo(BigInteger.ONE) <= 0);
		
		// Just calculate temp^*(n-1) mod n
		BigInteger ans = temp.modPow(n.subtract(BigInteger.ONE), n);
		
		// Return true iff it passes the Fermat Test!
		return (ans.equals(BigInteger.ONE));
	}
	
	private static boolean MyMillerRabin(BigInteger n, Random r) {
		
		// Ensures that temp > 1 and temp < n.
		BigInteger temp = BigInteger.ZERO;
		do {
			temp = new BigInteger(n.bitLength()-1, r);
		} while (temp.compareTo(BigInteger.ONE) <= 0);
		
		// Screen out n if our random number happens to share a factor with n.
		if (!n.gcd(temp).equals(BigInteger.ONE)) return false;
		
		// For debugging, prints out the integer to test with.
		//System.out.println("Testing with " + temp);
		
		BigInteger base = n.subtract(BigInteger.ONE);
		BigInteger TWO = new BigInteger("2");
		
		// Figure out the largest power of two that divides evenly into n-1.
		int k=0;
		while ( (base.mod(TWO)).equals(BigInteger.ZERO)) {
			base = base.divide(TWO);
			k++;
		}
		
		// This is the odd value r, as described in our text.
		//System.out.println("base is " + base);
		
		BigInteger curValue = temp.modPow(base,n);
		
		// If this works out, we just say it's prime.
		if (curValue.equals(BigInteger.ONE))
			return true;
			
		// Otherwise, we will check to see if this value successively 
		// squared ever yields -1.
		for (int i=0; i<k; i++) {
			
			// We need to really check n-1 which is equivalent to -1.
			if (curValue.equals(n.subtract(BigInteger.ONE)))
				return true;
				
			// Square this previous number - here I am just doubling the 
			// exponent. A more efficient implementation would store the
			// value of the exponentiation and square it mod n.
			else
				curValue = curValue.modPow(TWO, n);
		}
		
		// If none of our tests pass, we return false. The number is 
		// definitively composite if we ever get here.
		return false;
	}
	
	public static boolean MillerRabin(BigInteger n, int numTimes) {
		
		Random r = new Random();
		
		// Run Miller-Rabin numTimes number of times.
		for (int i=0; i<numTimes; i++) 
			if (!MyMillerRabin(n,r)) return false;
			
		// If we get here, we assume n is prime. This will be incorrect with
		// a probability no greater than 1/4^numTimes.
		return true;
	}
}