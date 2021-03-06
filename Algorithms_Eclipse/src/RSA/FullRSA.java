package RSA;

import GroupOfUnits.groupOfUnits;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.PrintWriter;
import java.math.BigInteger;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.util.ArrayList;
import java.util.Random;

public class FullRSA {
	public static void main(String[] args) throws IOException {
		FullRSA fr = new FullRSA();
		groupOfUnits gou = new groupOfUnits();
		//BigInteger p = randomPrime(300);
		BigInteger p = BigInteger.probablePrime((int)(300*3.2)+1,new Random());
		BigInteger q = BigInteger.probablePrime((int)(300*3.2)+1,new Random());
		while (!fr.checkProduct(p, q)) {
			p = randomInteger(300).nextProbablePrime();
			q = randomInteger(300).nextProbablePrime();
		}
		BigInteger n = p.multiply(q);
		BigInteger phi_n = p.subtract(BigInteger.ONE).multiply(
				q.subtract(BigInteger.ONE));
		// public key
		BigInteger e = new BigInteger("65537");
		// private key
		BigInteger d = inverse(e, phi_n);
		FileToString fs = new FileToString("src/cs-description.txt");
		// System.out.println(fs.fileString);
		ArrayList<String> blocks = fr.toStringBlocks(fs.fileString);
		ArrayList<BigInteger> plaintext = fr.toBigIntBlocks(blocks);
		ArrayList<BigInteger> encrypted = fr.encrypt(plaintext, e, n);
		ArrayList<BigInteger> decrypted = fr.decrypt(encrypted, d, n);
		ArrayList<String> backToStringBlocks = fr
				.plainTextToStringBlocks(decrypted);
		fr.writeToFile(backToStringBlocks,"src/output.txt");
		for (String s : backToStringBlocks) {
			System.out.println(s);
		}
	}

	public void writeToFile(ArrayList<String> decrypted, String targetFilePath) throws IOException
	{
		String text = "";
	    Path targetPath = Paths.get(targetFilePath);
	    for(String s : decrypted){
	    	text+=s;
	    }
	    byte[] bytes = text.getBytes(StandardCharsets.UTF_8);
	    Files.write(targetPath, bytes, StandardOpenOption.CREATE);
	}

	public ArrayList<String> plainTextToStringBlocks(ArrayList<BigInteger> input) {
		ArrayList<String> result = new ArrayList<String>();
		int increment = 3;
		for (BigInteger b : input) {
			BigInteger temp = b;
			String output = "";
			while (increment <= temp.toString().length()) {
				BigInteger segment = b.mod(BigInteger.valueOf(10)
						.pow(increment));
				int digits = Integer.parseInt(segment.toString()
						.substring(0, 3));
				b = b.subtract(segment);
				char c = unPaddedAscii(digits);
				output = c + output;
				increment += 3;
			}
			result.add(output);
			increment = 3;
		}
		return result;
	}

	public char unPaddedAscii(int i) {
		int unpadded = i - 100;
		return (char) unpadded;
	}

	public ArrayList<BigInteger> decrypt(ArrayList<BigInteger> encrypted,
			BigInteger d, BigInteger n) {
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for (BigInteger i : encrypted) {
			result.add(i.modPow(d, n));
		}
		return result;
	}

	public ArrayList<BigInteger> encrypt(ArrayList<BigInteger> input,
			BigInteger e, BigInteger n) {
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for (BigInteger i : input) {
			result.add(i.modPow(e, n));
		}
		return result;
	}

	public ArrayList<String> toStringBlocks(String input) {
		ArrayList<String> blocks = new ArrayList<String>();
		char[] chars = input.toCharArray();
		int index = 0;
		int upperlimit = 0;
		String stringToAdd = "";
		while (index < input.length()) {
			upperlimit = input.length() - index < 200 ? input.length() - index
					: 200;
			stringToAdd = input.substring(index, index + upperlimit);
			if (upperlimit < 200)
				stringToAdd = stringToAdd
						+ String.format("%" + (200 - upperlimit) + "s", "")
								.replace(" ", String.valueOf(' '));
			blocks.add(stringToAdd);
			index += upperlimit;
		}
		return blocks;
	}

	public String toPaddedAscii(char c) {
		Integer padded = (int) c + 100;
		return padded.toString();
	}

	public ArrayList<BigInteger> toBigIntBlocks(ArrayList<String> input) {
		ArrayList<BigInteger> result = new ArrayList<BigInteger>();
		for (String s : input) {
			String bigInt = "";
			char[] chars = s.toCharArray();
			for (char c : chars) {
				bigInt += toPaddedAscii(c);
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

	public BigInteger getRabinMillerPrime(int ndigits) {
		Random rand = new Random();
		int len = (int) (3.32 * (double) ndigits); // log(10)/log(2) = 3.32
		BigInteger n = new BigInteger(len, rand);
		BigInteger a;
		// this.n = new BigInteger("750");
		BigInteger two = new BigInteger("2");
		// we know if it is even that it's not prime. we want prime
		if (n.getLowestSetBit() != 0)
			n = n.add(BigInteger.ONE);

		while (!two.modPow(n.subtract(BigInteger.ONE), n)
				.equals(BigInteger.ONE)) {
			n = n.add(two);
		}
		int counter = 0;

		while (counter < 100) {
			a = randomInteger(1024);
			while (a.compareTo(n) >= 0) {
				a = randomInteger(1024);
			}
			if (gcd(a, n).equals(BigInteger.ONE)) {
				counter++;
			} else {
				System.out.println(counter);
				break;
			}
		}
		if (counter != 100) {
			getRabinMillerPrime(ndigits);
		} else {
			return n;
		}
		return n;

	}
}