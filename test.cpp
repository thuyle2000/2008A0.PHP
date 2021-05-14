#include <stdio.h>
int main()
{
	int i;
	printf("in ra day so:   ");

	for (i = 100; i >= 10; i -= 5)
		printf("%d,", i);
	
	printf("%d. \n", i);

	printf("nhap 1 so bat ky : ");
	scanf("%d", &i);
	printf("so moi nhap %d !", i);
}
