package Permutation;

import java.util.ArrayList;

public class RandomPermutation {
	public static void main(String[] args){
		RandomPermutation rp = new RandomPermutation();
		rp.getPermutation(6);
	}
	
	public void getPermutation(int input){
		ArrayList<Integer> startingSet = new ArrayList<Integer>();
		//populate array
		for(int i = 1; i<=input; i++){
			startingSet.add(i-1, i);
		}
		//switch numbers
		for(int i = 0; i<input; i++){
			int randomIndex = (int)(Math.random()*input);
			int temp = startingSet.get(randomIndex);
			startingSet.set(randomIndex, startingSet.get(0));
			startingSet.set(0, temp);
		}
		System.out.println(startingSet.toString());
	}
}
