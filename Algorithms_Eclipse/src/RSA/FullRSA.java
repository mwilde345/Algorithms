package RSA;

import GroupOfUnits.groupOfUnits;

import java.math.BigInteger;
import java.util.ArrayList;
import java.util.Random;

public class FullRSA {
	public static void main(String[] args) {
		FullRSA fr = new FullRSA();
		groupOfUnits gou = new groupOfUnits();
		BigInteger p = randomInteger(300);
		BigInteger q = randomInteger(300);
		while (!fr.checkProduct(p, q)) {
			p = randomInteger(300);
			q = randomInteger(300);
		}
		BigInteger n = p.multiply(q);
		BigInteger phi_n = p.subtract(BigInteger.ONE).multiply(
				q.subtract(BigInteger.ONE));
		//public key
		BigInteger e = new BigInteger("65537");
		//private key
		BigInteger d = inverse(e, phi_n);
		FileToString fs = new FileToString("src/cs-description.txt");
		//System.out.println(fs.fileString);
		ArrayList<String> blocks = fr.toStringBlocks(fs.fileString);
		ArrayList<BigInteger> plaintext = fr.toBigIntBlocks(blocks);
		ArrayList<BigInteger> encrypted = fr.encrypt(plaintext,e,n);
		ArrayList<BigInteger> decrypted = fr.decrypt(encrypted, d, n);
		ArrayList<BigInteger> unPadded = fr.unPaddedAscii(decrypted);
		//ArrayList<String> backToStringBlocks = fr.plainTextToStringBlocks(unPadded);
		for(BigInteger b : plaintext){
			System.out.println(b.toString());
		}
		System.out.println("Middle");
		for(BigInteger b : decrypted){
			System.out.println(b.toString());
		}
	}
	
	public ArrayList<String> plainTextToStringBlocks(ArrayList<BigInteger> input){
		ArrayList<String> result = new ArrayList<String>();
		for(BigInteger b: input){
			
		}
		return result;
	}
	
	public ArrayList<BigInteger> unPaddedAscii(ArrayList<BigInteger> input){
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for(BigInteger b : input){
			String data = b.toString();
			char[] chars = data.toCharArray();
			int counter = 0;
			String unPadded = "";
			for(char c : chars){
				int subResult = Math.abs(Character.getNumericValue(c)-1);
				unPadded+=counter%3==0?subResult:c;
				counter++;
			}
			result.add(new BigInteger(unPadded));			
		}
		return result;
	}
	
	public ArrayList<BigInteger> decrypt(ArrayList<BigInteger> encrypted, BigInteger d, BigInteger n){
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for(BigInteger i : encrypted){
			result.add(i.modPow(d,n));
		}
		return result;
	}
	
	
	public ArrayList<BigInteger> encrypt(ArrayList<BigInteger> input,BigInteger e, BigInteger n){
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for(BigInteger i : input){
			result.add(i.modPow(e,n));
		}
		return result;
	}
	
	public ArrayList<String> toStringBlocks(String input){
		ArrayList<String> blocks = new ArrayList<String>();
		char[] chars = input.toCharArray();
		int index = 0;
		int upperlimit = 0;
		String stringToAdd = "";
		while(index<input.length()){
			upperlimit = input.length()-index <200 ? input.length()-index : 200;
			stringToAdd = input.substring(index,index+upperlimit);
			if(upperlimit < 200) stringToAdd = stringToAdd + String.format("%" + (200 - upperlimit) + "s", "")
		               .replace(" ", String.valueOf(' '));		     
			blocks.add(stringToAdd);
			index += upperlimit;
		}
		return blocks;
	}
	public String toPaddedAscii(char c){
		Integer padded = (int)c+100;
		return padded.toString();
	}
	
	public ArrayList<BigInteger> toBigIntBlocks(ArrayList<String> input){
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for(String s : input){
			String bigInt = "";
			char[] chars = s.toCharArray();
			for(char c : chars){
				bigInt+=toPaddedAscii(c);
			}
			result.add(new BigInteger(bigInt));
		}
		return result;
	}
	
	public boolean checkProduct(BigInteger p, BigInteger q) {
		BigInteger product = p.multiply(q);
		return product.toString().length() >= 600
				&& Integer.parseInt(product.toString().substring(0, 6)) > 355355;
	}

	// Return random
	public static BigInteger randomInteger(int ndigits) {
		Random rand = new Random();
		int len = (int) (3.32 * (double) ndigits); // log(10)/log(2) = 3.32
		return new BigInteger(len, rand);
	}

	// Return random prime approx. ngidits in length
	public static BigInteger randomPrime(int ndigits) {
		BigInteger p = randomInteger(ndigits);
		return p.nextProbablePrime();
	}

	public static BigInteger multiply(BigInteger a, BigInteger b) {
		return a.multiply(b);
	}

	public static BigInteger gcd(BigInteger a, BigInteger b) {
		return a.gcd(b);
	}

	public static BigInteger inverse(BigInteger a, BigInteger m) {
		return a.modInverse(m);
	}

	public static BigInteger modexp(BigInteger a, BigInteger b, BigInteger m) {
		return a.modPow(b, m);
	}
}
