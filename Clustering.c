#include <stdio.h>
#include <stdio.h>
#include <time.h>

struct centroid{
	double x;
	double y;
};

struct data{
	double x;
	double y;
	double c;
};

struct distance{
	double d;
};

struct number{
	int num;
};

struct group{
	double x;
	double y;
};


		
int main(void){
	int i, j, min; 
	int x[] = {2,2,4,4,4,5,5,5,1,1,3,3,6,6,1,1,4,3,3,4,3,1,6,3,4,1,5,4,1,5,6,7,7,1,2,2,2};
	int y[] = {3,4,3,4,8,3,4,8,3,4,3,4,3,4,2,7,7,8,1,1,7,6,1,2,2,5,1,6,1,2,8,1,3,8,8,1,6};
	struct centroid pre_cent[10];
	struct centroid cent[10];
	struct data predata[37];
	struct data data[37];
	struct distance dis[10];
	struct number num[10] = {0};
	struct group g1, g2
	double area;
	
	for(i=0; i<37; i++){
		data[i].x = x[i];
		data[i].y = y[i];
		printf("%lf, %lf\n", data[i].x, data[i].y);
	}
	
	printf("\n\n");
	
	srand(time(NULL));
	for(i=0; i<10; i++){
		cent[i].x = (int)rand()%10;
		cent[i].y = (int)rand()%10;
		printf("%lf, %lf\n", cent[i].x, cent[i].y);
	}
	
	
	while(){
		for(i=0; i<37; i++){
			for(j=0; j<10; j++){
				dis[j].d = (data[i].x - cent[j].x)*(data[i].x - cent[j].x) + (data[i].y - cent[j].y)*(data[i].y - cent[j].y);
				dis[j].d = sqrt(dis[j].d);		
			}
			
			min = dis[0].d;
			data[i].c = 0;
			for(j=1; j<10; j++){
				if(min > dis[j].d){
					min = dis[j].d;					
					data[i].c = j;
				}	
			}			
		}
		
		//각 클러스터링 점 개수 구하기 
		for(i=0; i<37; i++){
			for(j=0; j<10; j++){
				if(data[i].c == j) num[j].num++;	
			}
		}
		
				
//		pre_cent = cent;
		
		
		
		
	
	}
}






