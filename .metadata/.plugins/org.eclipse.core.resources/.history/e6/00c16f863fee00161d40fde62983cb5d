//slow exponentiation
//compute a^b mod n
///Complexity: this approach is linear to the exponent, or b.
//because you are doing that a= line b times.
package ModularExp;
public class modularexp{
  public static void main(String [] args){
	  int years = modexp(10,596,60)%60%24%356;
	  System.out.println(years+" years in 10^596 seonds");
  }
  public static int modexp(int a,int b,int n){
    int d = 1;
    String bin = Integer.toBinaryString(b);
    for(int i = 0; i<bin.length(); i++){
      d = (d*d) % n;
      if(bin.charAt(i) =='1'){
        d = (d*a)%n;
      }
    }
    if(d<0){
      //java will return negatives from the residue set {-n....-2,-1,0,1,2,....n}
      d = d+n;
    }
    return d;
  }
}
