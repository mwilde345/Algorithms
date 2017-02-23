<div class="panel panel-info">
  <h3 class="panel-heading">2. Write a method called “decrypt” that takes an ArrayList of BigIntegers and decrypts each block using the private key you generated in week 5 ex. 8.
</h3>
  <div class="panel-body">
    <pre><code>
      public ArrayList<BigInteger> decrypt(ArrayList<BigInteger> encrypted,
          BigInteger d, BigInteger n) {
        ArrayList<BigInteger> result = new ArrayList<BigInteger>();
        for (BigInteger i : encrypted) {
          result.add(i.modPow(d, n));
        }
        return result;
      }
    </pre></code>
  </div>
</div>
