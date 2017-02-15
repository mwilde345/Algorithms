package RSA;

import java.io.*;

public class FileToString {
	String fileString;
	public FileToString(String inputFileName){
		fileString = cleanText(fileToString(inputFileName));
	}

	public static String fileToString(String fileName) {

		String result = "";

		try {

			FileInputStream file = new FileInputStream(fileName);

			byte[] b = new byte[file.available()];

			file.read(b);

			result = new String(b);

			file.close();

		}

		catch (IOException e) {

			System.out.println("No file named: " + fileName);

		}

		return result;

	}

	public static String cleanText(String text) {

		text = text.replaceAll("\\s+", " ");

		text = text.replaceAll("\\d+", "");

		return text.replaceAll("\\p{Punct}", "");

	}

}
