<div class="panel panel-info">
  <h3 class="panel-heading">9. Write a method called “fileToString” which converts a text file to a String.  Test it.
</h3>
  <div class="panel-body">
    <pre><code>
      package RSA;

      import java.io.*;

      public class FileToString {
      	String fileString;
      	public FileToString(String inputFileName){
      		//fileString = cleanText(fileToString(inputFileName));
      		fileString = fileToString(inputFileName);
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
    </pre></code>
  </div>
</div>
