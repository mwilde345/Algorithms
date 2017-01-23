
import java.util.*;

public class groupOfUnits {
	public static void main(String [] args){
		int n = 27;
		int elem;
		int ord;
		ArrayList<Integer> units = new ArrayList<Integer>();
		ArrayList<Integer> roots = new ArrayList<Integer>();
		for(int j = 5; j<=100; j++){
			ArrayList<Integer> groupOfUnits = new ArrayList<Integer>();
			for(int i = 1; i<j; i++){
				if(gcd(i,j)==1)
					groupOfUnits.add(i);
			}
			System.out.print("Size of Group of Units mod "+j+": "+groupOfUnits.size());
			if(groupOfUnits.size()==(j-1)){
				System.out.println(" **is Prime**");
			}else{
				System.out.println();
			}
			//System.out.println("Group of Units mod "+j+": "+groupOfUnits.toString());
		}
		Iterator<Integer> it = units.iterator();
		while (it.hasNext()){
			elem = it.next();
			ord = order(elem,n);
			if(ord == units.size()){
				roots.add(elem);
			}
		}
	}
	public static int gcd(int n, int m){
		if(m==0){
			return n;
		}
		else{
			return gcd(m, n%m);
		}
	}
	public static int order(int m, int n){
		int count = 0;
		int power = 1;
		for(int i = 1; i<n; i++){
			++count;
			power = (power*m) % n;
			if(power==1){
				return count;
			}
		}
		return -1;
	}
}
