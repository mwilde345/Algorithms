package GroupOfUnits;
import java.util.*;

public class groupOfUnits {
	public static void main(String [] args){
		int n = 27;
		int elem;
		int ord;
		ArrayList<Integer> units = new ArrayList<Integer>();
		ArrayList<Integer> roots = new ArrayList<Integer>();
		for(int j = 5; j<=20; j++){
			ArrayList<Integer> groupUnits = getGroupOfUnits(j);
			//System.out.print("Size of Group of Units mod "+j+": "+groupOfUnits.size());
			if(groupUnits.size()==(j-1)){
				//System.out.println(" **is Prime**");
			}else{
				//System.out.println();
			}
			System.out.println("Group of Units mod "+j+": "+groupUnits.toString());
			System.out.println("Inverses of that group: "+getInverses(groupUnits,j));
			System.out.println();
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

	public static ArrayList<Integer> getGroupOfUnits(int mod){
		int j = mod;
		ArrayList<Integer> groupUnits = new ArrayList<Integer>();
		for(int i = 1; i<j; i++){
			if(gcd(i,j)==1)
				groupUnits.add(i);
		}
		return groupUnits;
	}


	public static ArrayList<Integer> getInverses(ArrayList<Integer> set, int mod){
		ArrayList<Integer> inverses = new ArrayList<Integer>();
		for(int i: set){
			int iOrder = order(i,mod);
			inverses.add((int)Math.pow(i,iOrder-1)%mod);
		}
		return inverses;
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
