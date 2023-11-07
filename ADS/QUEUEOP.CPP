#include <stdio.h>
#include <conio.h>
struct QueueOp{
int queue[10];
int front,rear,item;
QueueOp(){
front=rear=-1;
}
void enQueue(int n){
if(rear==n-1) printf("Queue Overflow\n");
else if((front==-1)&&(rear==-1)){
front++;
rear++;
scanf("%d",&item);
queue[rear]=item;
}
else{
rear++;
scanf("%d",&item);
queue[rear]=item;
}
};

void deQueue(){
if((front==-1&&rear==-1)||(front>rear) )
printf("Queue Underflow\n");
else{
item=queue[front];
queue[front]=0;
front++;
printf("The item deleted is %d\n",item);
}
}

void display(){
printf("\nThe queue is \n");
for(int i=0;i<=rear;++i){
if(queue[i]==0) printf("- ");
else
printf("%d ",queue[i]);
}
printf("\n\n");
}
};
void main(){
clrscr();
QueueOp q;
int ch,n;
printf("Enter the size of the queue\n");
scanf("%d",&n);
do{
printf("\nSelect \n1.To insert\n2.To delete\n3.To display\n4.To exit\n");
scanf("%d",&ch);
switch(ch){
case 1: q.enQueue(n);
	continue;
case 2: q.deQueue();
	continue;
case 3: q.display();
	continue;
case 4:break;
default:break;
}
}while(ch<4&&ch>0);
}