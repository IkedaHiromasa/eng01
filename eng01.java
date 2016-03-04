import java.util.List;
import java.util.ArrayList;

class eng01{

	public static void main(String args[]){
		
		List primList = new ArrayList();

		long startTime = System.currentTimeMillis();
		


		
			try{

				int num = Integer.parseInt(args[0]);
				int temp = num;			

				// 入力値が対象の数以内、対象の数が1以上の間処理を続ける
				for(int i = 2; (i < num) && (1 < temp);  i++){
		
					// 初回はスルー
					if(temp % i == 0){
						
						// 2回目の処理
						if(temp != num){
							System.out.print("*");
						}
						
						System.out.print(i);
						temp /= i;
						i--;
						
					}
					if(temp == num){
						System.out.println(temp+"=素数");
					}

				}
				
				
			}catch(NumberFormatException e){
				System.out.println("入力エラーです");	
			}
		
		long endTime = System.currentTimeMillis();
		long time = startTime - endTime;
			
			System.out.println("時間=" + time);

	}

}