<div class="panel panel-info">
  <h3 class="panel-heading">2. Rewrite the gcd algorithm to work with BigIntegers.</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./GCD.PNG"/>
    </div>
    <pre><code>
      //Euclid's
      import java.math.BigInteger;

      public class gcd {
      	public static void main(String[] args){
      		BigInteger n = new BigInteger(args[0]);
      		BigInteger m = new BigInteger(args[1]);
      		System.out.println(getGCD(n,m));
      	}
      	public static BigInteger getGCD(BigInteger n,BigInteger m){
      		BigInteger zero = new BigInteger("0");
      		if(m.equals(zero)){
      			return n;
      		}else{
      			return getGCD(m,n.mod(m));
      		}
      	}
      }
    </pre></code>
  </div>
</div>
