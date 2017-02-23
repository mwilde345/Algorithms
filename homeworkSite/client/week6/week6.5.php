<div class="panel panel-info">
  <h3 class="panel-heading">5. Write a method called “stringToFile” which takes the result of ex. 4, converts it to a single string, then writes it out to a file.
</h3>
  <div class="panel-body">
    <pre><code>
      public void stringToFile(ArrayList<String> decrypted, String targetFilePath) throws IOException
    	{
    		String text = "";
    	    Path targetPath = Paths.get(targetFilePath);
    	    for(String s : decrypted){
    	    	text+=s;
    	    }
    	    byte[] bytes = text.getBytes(StandardCharsets.UTF_8);
    	    Files.write(targetPath, bytes, StandardOpenOption.CREATE);
    	}
    </pre></code>
  </div>
</div>
