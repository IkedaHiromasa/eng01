import java.util.List;
import java.util.ArrayList;

class eng01{

	public static void main(String args[]){
		
		List primList = new ArrayList();

		long startTime = System.currentTimeMillis();
		


		
			try{

				int num = Integer.parseInt(args[0]);
				int temp = num;			

				// ���͒l���Ώۂ̐��ȓ��A�Ώۂ̐���1�ȏ�̊ԏ����𑱂���
				for(int i = 2; (i < num) && (1 < temp);  i++){
		
					// ����̓X���[
					if(temp % i == 0){
						
						// 2��ڂ̏���
						if(temp != num){
							System.out.print("*");
						}
						
						System.out.print(i);
						temp /= i;
						i--;
						
					}
					if(temp == num){
						System.out.println(temp+"=�f��");
					}

				}
				
				
			}catch(NumberFormatException e){
				System.out.println("���̓G���[�ł�");	
			}
		
		long endTime = System.currentTimeMillis();
		long time = startTime - endTime;
			
			System.out.println("����=" + time);

	}

}